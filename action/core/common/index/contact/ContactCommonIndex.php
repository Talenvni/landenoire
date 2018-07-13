<?php namespace action\core\common\index;

use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;

class ContactCommonIndex {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/contact/contactCommonIndex.twig', [
				'title'   => 'Contact',
				'contact' => self::contact()
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	/**
	 * @return mixed|null Inscription page
	 */
	private static function contact() {
		if ( isset( $_POST['contact_submit'] ) ) :
			// Captcha
			$secret   = "6Lc_aUwUAAAAAM_PUxRAxaA7Fi0VQYXsqmpokBMI";
			$response = $_POST['g-recaptcha-response'];
			$remoteIp = $_SERVER['REMOTE_ADDR'];
			$apiUrl   = "https://www.google.com/recaptcha/api/siteverify?secret="
			            . $secret
			            . "&response=" . $response
			            . "&remoteip=" . $remoteIp;
			$decode   = json_decode( file_get_contents( $apiUrl ), true );

			$decode  = $decode['success'];
			$subject = Helper::secureString( ucfirst( $_POST['contact_subject'] ) );
			$email   = Helper::secureString( strtolower( $_POST['contact_email'] ) );
			$message = ucfirst( $_POST['contact_message'] );

			$validator = new Validator();
			$validator->isEqual( $decode, true, 'Captcha invalide' );
			$validator->isEmail( $email, 'Email invalide' );
			$validator->isDiff( $email, null, 'Email invalide' );
			$validator->isDiff( $subject, null, 'Nom invalide' );
			$validator->isDiff( $message, null, 'Message invalide' );

			// If good
			if ( empty( $validator->getFail() ) ) :

				$to      = 'admin@lande-noire.online';
				$headers = 'From:' . $email . "\r\n" .
				           'Reply-To:' . $email . "\r\n" .
				           'content-type: text/html; charset=utf8' . "\r\n" .
				           'X-Mailer: PHP/' . phpversion();
				$content = '<table width="700px">
					    <tr>
					        <td>
					           ' . $email . ' - ' . date( 'd/m/Y' ) . '
					        </td>
					    </tr>
					    <tr>
					        <td>
					            <h2>' . $subject . '</h2>
					            <p>' . $message . '</p>
					        </td>
					    </tr>
					</table>';

				try {
					mail( $to, $subject, $content, $headers );
				} catch ( \Exception $e ) {
					die( 'ERROR FROM EMAIL : ' . $e->getMessage() );
				}
				MessageFlash::setFlash( 'success', 'Votre email a bien été envoyé' );
				Helper::redirection( '/contact' );

			else :
				return $validator->getFail();
			endif;
		endif;

		return null;
	}
}
