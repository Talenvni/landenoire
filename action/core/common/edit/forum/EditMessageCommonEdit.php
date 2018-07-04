<?php namespace action\core\common\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\Validator;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;
use action\general\TwigLabs;

class EditMessageCommonEdit {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/editMessageCommonEdit.twig', [
				'title'       => 'Édition',
				'editMessage' => self::editMessage(),
				'getMessage'  => self::getMessage()
			] );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	private static function getMessage() {
		$message = Database::getQuery( '
			SELECT id, m.content, m.idUser
			FROM ln_forum_message m
			WHERE m.id = ?', [ $_GET['message_id'] ] )->fetch( \PDO::FETCH_OBJ );

		if ( ! is_null( $message->id ) ) :
			return $message;
		else :
			MessageFlash::setFlash( 'warning', 'Sujet inexistant' );
			Helper::redirection( '/forum', 307 );
		endif;


		return null;
	}

	private static function editMessage() {
		if ( isset( $_POST['editSubmit'] ) ) :
			$subcat = Database::getQuery( '
				SELECT slug, id
				FROM ln_forum_subcategory
				WHERE slug = ?', [ $_GET['subcategory_tab'] ] )->fetch( \PDO::FETCH_OBJ );

			$topic = Database::getQuery( '
				SELECT id
				FROM ln_forum_topic
				WHERE id = ? AND idSubcategory = ?', [
				$_GET['topic_id'],
				$subcat->id
			] )->fetch( \PDO::FETCH_OBJ );

			$message = Database::getQuery( '
			SELECT id, idUser
			FROM ln_forum_message message
			WHERE id = ? AND idTopic = ?', [
				$_GET['message_id'],
				$topic->id
			] )->fetch( \PDO::FETCH_OBJ );

			if ( ! is_null( $message->id ) ) :

				$validator = new Validator( $_POST );
				$validator->isPreg( '/\S[^\n]+/', 'messageEdit', 'Le message ne peut pas être vide' );

				if ( empty( $validator->getFail() ) ) :

					Database::getQuery( '
					UPDATE ln_forum_message
					SET content = ? 
					WHERE id = ?', [ $_POST['messageEdit'], $_GET['message_id'] ] );

					MessageFlash::setFlash( 'success', 'Message édité' );
					Helper::redirection( '/forum/' . $subcat->slug . '/topics/' . $topic->id );

				else :
					return $validator->getFail();
				endif;
			else :
				MessageFlash::setFlash( 'danger', 'URL incorrecte' );
				Helper::redirection( '/forum', 307 );
			endif;
		endif;

		return null;
	}
}