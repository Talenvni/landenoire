<?php namespace action\core\common\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\TwigLabs;
use action\general\Validator;
use Twig_Error_Loader;
use Twig_Error_Runtime;
use Twig_Error_Syntax;

class NewTopicCommonEdit {
	/**
	 * Render New topic view
	 */
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/forum/newTopicCommonEdit.twig', [
				'title'    => 'Nouveau sujet',
				'addTopic' => self::newTopic(),
			] );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}

	private static function newTopic() {
		if ( isset( $_POST['newTopicSubmit'] ) ) :
			$topic = new Validator( $_POST );
			$topic->isPreg( '/((^.{3,50}$))/', 'topicSubject', 'Sujet invalide' );
			$topic->isPreg( '/.{2,}+/', 'topicContent', 'Contenu invalide' );

			if ( empty( $topic->getFail() ) ) :
				$subcategory = Database::getQuery( '
					SELECT id, slug
					FROM ln_forum_subcategory 
					WHERE slug = ?', [ $_GET['subcategory_tab'] ] )->fetch( \PDO::FETCH_OBJ );

				$subCat = new Validator();
				$subCat->isDiff( $subcategory, null, 'La sous-catégorie n\'existe pas' );

				if ( empty( $subCat->getFail() ) ) :
					$secureSubject = Helper::secureString( $_POST['topicSubject'] );
					$secureContent = ucfirst( $_POST['topicContent'] );

					Database::getQuery( '
						INSERT INTO ln_forum_topic (idUser, idSubcategory, subject, datePub)
						VALUES (?, ?, ?, NOW())',
						[ $_SESSION['user']->id, $subcategory->id, $secureSubject ]
					);

					$last_id = Database::lastInsertId();

					Database::getQuery( '
						INSERT INTO ln_forum_message (idTopic, idUser, content, datePub)
						VALUES (?, ?, ?, NOW())',
						[ $last_id, $_SESSION['user']->id, $secureContent ]
					);

					$user = Database::getQuery( '
					SELECT coin FROM ln_users_info WHERE idUser = ?',
						[ $_SESSION['user']->id ] )->fetch( \PDO::FETCH_OBJ );

					Database::getQuery( '
					UPDATE ln_users_info 
					SET coin = (? + ?)
					WHERE idUser = ?', [ $user->coin, 100, $_SESSION['user']->id ] );

					MessageFlash::setFlash( 'success', 'Sujet crée' );
					Helper::redirection( '/forum/' . $subcategory->slug . '/topics/' . $last_id );
				else :
					return $subCat->getFail();
				endif;
			else :
				return $topic->getFail();
			endif;
		endif;

		return null;
	}
}
