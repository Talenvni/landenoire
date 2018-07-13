<?php namespace action\general;

class Helper {
	/**
	 * Redirect after an action
	 * @param $location
	 * @param $code
	 */
	static public function redirection($location, $code = null)
	{
		unset( $_GET, $_POST);
		header('location:' . $location, true, $code);
		exit;
	}

	/**
	 * @param $string
	 *
	 * @param string|null $allowTags
	 *
	 * @return string Secured string
	 */
	public static function secureString( $string, string $allowTags = null ) {
		return trim( htmlspecialchars( strip_tags( $string, $allowTags ) ) );
	}

	/**
	 * @param string $type
	 * @param int $length
	 *
	 * @return int|null|string Generate random string.
	 */
	public static function randomString( string $type, int $length ) {
		switch ( $type ) {
			case 'basic':
				return mt_rand();
				break;
			case 'alphabet':
			case 'alphanumeric':
			case 'numeric':
			case 'noZero':
				$seeding['alphabet']     = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$seeding['alphanumeric'] = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$seeding['numeric']      = '0123456789';
				$seeding['noZero']       = '123456789';

				$pool = $seeding[ $type ];

				$str = (string) null;
				for ( $i = 0; $i < $length; $i ++ ) {
					$str .= substr( $pool, mt_rand( 0, strlen( $pool ) - 1 ), 1 );
				}

				return $str;
				break;
			case 'unique':
			case 'md5':
				return md5( uniqid( mt_rand() ) );
				break;
		}

		return null;
	}

	/**
	 * Create email
	 *
	 * @param $to
	 * @param $subject
	 * @param $instruction
	 * @param $link
	 * @param $linkSubject
	 */
	public static function createEmail( $to, $subject, $instruction, $link, $linkSubject ) {
		$headers = "From: admin@lande-noire.online \r\n" .
		           'content-type: text/html; charset=utf8' . "\r\n" .
		           'X-Mailer: PHP/' . phpversion();
		$message = '<table width="700px">
					    <tr>
					        <td>
					           ' . $to . ' - ' . date( 'd/m/Y' ) . '
					        </td>
					    </tr>
					    <tr>
					        <td>
					            <p>' . $instruction . '</p>
					            <p>
					            	<a href="' . $link . '">
					            		' . $linkSubject . '
					            	</a>
					            </p>
					        </td>
					    </tr>
					</table>';

		try {
			mail( $to, $subject, $message, $headers );
		} catch ( \Exception $e ) {
			die( 'ERROR FROM EMAIL : ' . $e->getMessage() );
		}
	}

	public static function getcoin(int $coinValue) {


		$copper_value = 1;
		$silver_value = $copper_value * 100;
		$gold_value = $copper_value * 1000;

		$gold = floor($coinValue / $gold_value);
		$coinValue = $coinValue % $gold_value;
		$silver = floor($coinValue / $silver_value);
		$coinValue = $coinValue % $silver_value;
		$copper = $coinValue / $copper_value;

		return [
			'gold'      => $gold,
			'silver'    => $silver,
			'copper'    => $copper
		];
	}
}
