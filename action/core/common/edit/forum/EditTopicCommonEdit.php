<?php namespace action\core\common\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\Validator;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_Error_Runtime;
use action\general\TwigLabs;

class EditTopicCommonEdit {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/editTopicCommonEdit.twig', [
				'title'     => 'Édition',
				'editTopic' => self::editTopic(),
				'getTopic'  => self::getTopic()
			] );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	private static function getTopic() {
		if ( isset( $_GET['topic_edit'] ) ) :
			$topic = Database::getQuery( '
			SELECT t.id, idUser, subject, slug
			FROM ln_forum_topic t
			LEFT JOIN ln_forum_subcategory s on t.idSubcategory = s.id
			WHERE t.id = ?', [ $_GET['topic_edit'] ] )->fetch( \PDO::FETCH_OBJ );

			if ( ! is_null( $topic->id ) ) :
				return $topic;
			else :
				MessageFlash::setFlash( 'warning', 'Sujet inexistant' );
				Helper::redirection( '/forum/' . $topic->slug . '/topics' );
			endif;
		endif;

		return null;
	}

	public static function editTopic() {
		if ( isset( $_POST['edit_topic_submit'] ) ) :
			$subcat = Database::getQuery( '
				SELECT slug, id
				FROM ln_forum_subcategory
				WHERE slug = ?', [ $_GET['subcategory_tab'] ] )->fetch( \PDO::FETCH_OBJ );

			$topic = Database::getQuery( '
				SELECT id, idUser
				FROM ln_forum_topic
				WHERE id = ? AND idSubcategory = ?', [
				$_GET['topic_id'],
				$subcat->id
			] )->fetch( \PDO::FETCH_OBJ );

			if ( ! is_null( $topic->id ) ) :
				$subject_edit = Helper::secureString( $_POST['edit_topic'] );

				$validator = new Validator();
				$validator->isDiff( null, $subject_edit, 'Le sujet ne peut pas être vide' );

				if ( empty( $validator->getFail() ) ) :

					Database::getQuery( '
					UPDATE ln_forum_topic
					SET subject = ?
					WHERE id = ?', [ $subject_edit, $_GET['topic_id'] ] );

					MessageFlash::setFlash( 'success', 'Sujet édité' );
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