<?php namespace action\general;

use action\core\admin\edit\CategoryAdminEdit;
use action\core\admin\edit\CreateForumAdminEdit;
use action\core\admin\edit\CreateNewsAdminEdit;
use action\core\admin\edit\HeadingAdminEdit;
use action\core\admin\edit\HomeAdminEdit;
use action\core\admin\edit\NewsAdminEdit;
use action\core\admin\edit\SubcategoryAdminEdit;
use action\core\admin\index\ForumAdminIndex;
use action\core\admin\index\HomeAdminIndex;
use action\core\admin\index\NewsAdminIndex;
use action\core\common\edit\CloseTopicCommonEdit;
use action\core\common\edit\EditMessageCommonEdit;
use action\core\common\edit\EditTopicCommonEdit;
use action\core\common\edit\NewsCommonEdit;
use action\core\common\edit\NewTopicCommonEdit;
use action\core\common\edit\ProfilCommonEdit;
use action\core\common\index\CategoryCommonIndex;
use action\core\common\index\CodexCommonIndex;
use action\core\common\index\MessageCommonIndex;
use action\core\common\index\SubcategoryCommonIndex;
use action\core\common\index\TavernCommonIndex;
use action\core\common\index\TopicCommonIndex;
use Exception;
use AltoRouter;
use action\core\common\index\HomeCommonIndex;
use action\core\common\index\SignupCommonIndex;
use action\core\common\index\ProfilCommonIndex;
use action\core\common\index\SigninCommonIndex;
use action\core\common\index\SignoutCommonIndex;
use action\core\common\index\AllNewsCommonIndex;
use action\core\common\index\SingleNewsCommonIndex;
use action\core\common\index\ChangePasswordCommonIndex;
use action\core\common\index\ForgotPasswordCommonIndex;

class AltoRoute {
	/**
	 * Load AltoRouter
	 */
	public static function loadRouter() {
		$router = new AltoRouter();
		$router->addMatchTypes( [ 's' => '[a-z0-9\-]++' ] ); // Slug pattern
		$router->addMatchTypes( [ 't' => '(topics)' ] ); // Slug topics
		$router->addMatchTypes( [ 'e' => '(edit)' ] ); // Slug edit
		try {
			// ------------
			// Beautify URL
			// ------------
			if ( strlen( $_SERVER['REQUEST_URI'] ) === 1 ) :
				Helper::redirection( '/home', 307 );
			endif;
			if ( substr( $_SERVER['REQUEST_URI'], - 1 ) === '/' ) :
				$uri = substr( $_SERVER['REQUEST_URI'], 0, - 1 );
				Helper::redirection( $uri, 307 );
			endif;
			// -----------
			// Get Sign in
			// -----------
			$router->map( 'GET|POST', '/sign-in', function () {
				if ( ! isset( $_SESSION['user'] ) ) :
					SigninCommonIndex::catchTwig();
				endif;
				if ( isset( $_SESSION['user'] ) ) :
					MessageFlash::setFlash( 'warning', 'Vous êtes déjà connecté' );
					Helper::redirection( '/account/character-' . $_SESSION['user']->id, 307 );
				endif;
			} );
			// -----------
			// Get Sign up
			// -----------
			$router->map( 'GET|POST', '/sign-up/[i:last_id]?&?[a:signup_token]?', function () {
				if ( ! isset( $_SESSION['user'] ) ) :
					SignupCommonIndex::catchTwig();
				endif;
			} );
			// ---------------
			// Forgot password
			// ---------------
			$router->map( 'GET|POST', '/forgot-password/[i:forgot_id]?&?[a:forgot_token]?',
				function () {
					if ( ! isset( $_SESSION['user'] ) ) :
						if ( ! isset( $_GET['forgot_id'], $_GET['forgot_token'] ) ):
							ForgotPasswordCommonIndex::catchTwig();
						endif;
						if ( isset( $_GET['forgot_id'], $_GET['forgot_token'] ) ):
							ChangePasswordCommonIndex::catchTwig();
						endif;
					endif;
				} );
			// ------------
			// Get Sign out
			// ------------
			$router->map( 'GET|POST', '/sign-out', function () {
				if ( isset( $_SESSION['user'] ) ) :
					SignoutCommonIndex::signOut();
				endif;
				if ( ! isset( $_SESSION['user'] ) ) :
					MessageFlash::setFlash( 'warning', 'Veuillez vous connecter' );
					Helper::redirection( '/home', 307 );
				endif;
			} );
			// --------
			// Get Home
			// --------
			$router->map( 'GET', '/home', function () {
				HomeCommonIndex::catchTwig();
			} );
			// ---------
			// Get Codex
			// ---------
			$router->map( 'GET|POST', '/codex/[a:codex]?', function () {
				CodexCommonIndex::catchTwig();
			} );
			// --------
			// Get News
			// --------
			$router->map( 'GET|POST', '/news/[s:news_slug]?/[i:news_edit]?', function () {
				if ( ! $_GET ):
					AllNewsCommonIndex::catchTwig();
				endif;
				if ( isset( $_GET['news_slug'] ) ):
					if ( ! isset( $_GET['news_edit'] ) ) :
						SingleNewsCommonIndex::catchTwig();
					endif;
					if ( isset( $_GET['news_edit'] ) ) :
						NewsCommonEdit::catchTwig();
					endif;
				endif;
			} );
			// ----------
			// Get Tavern
			// ----------
			$router->map( 'GET|POST', '/tavern', function () {
				if ( isset( $_SESSION['user'] ) ):
					TavernCommonIndex::catchTwig();
				endif;
				if ( ! isset( $_SESSION['user'] ) ):
					MessageFlash::setFlash( 'warning', 'Connexion requise ' );
					Helper::redirection( '/sign-in', 307 );
				endif;
			} );
			// -----------
			// Get Account
			// -----------
			$router->map( 'GET|POST', '/account/character-[i:account_id]/[a:profil_tab]?',
				function () {
					if ( isset( $_SESSION['user'] ) ):
						ProfilCommonEdit::editInfo();
						ProfilCommonEdit::editParagraph();
						ProfilCommonEdit::editEmail();
						ProfilCommonEdit::editPassword();
						ProfilCommonEdit::editRelation();
						ProfilCommonIndex::catchTwig();
					endif;
					if ( ! isset( $_SESSION['user'] ) ):
						MessageFlash::setFlash( 'warning', 'Connexion requise ' );
						Helper::redirection( '/sign-in', 307 );
					endif;
				} );
			// -----------
			// Get Forum
			// -----------
			$router->map( 'GET|POST', '/forum/[s:subcategory_tab]?/[t:section]?/[i:topic_id]?/[e:edit]?/[i:message_id]?/[subject:subject]?/[i:topic_edit]?/[newtopic:newtopic]?',
				function () {
					if ( isset( $_GET['newtopic'] ) ) :
						NewTopicCommonEdit::catchTwig();
					endif;
					if ( isset( $_GET['topic_edit'] ) ) :
						if ( ! isset( $_GET['newtopic'] ) ) :
							EditTopicCommonEdit::catchTwig();
						endif;
					endif;
					if ( isset( $_POST['close_subject'] ) ) :
						CloseTopicCommonEdit::closeTopic();
					endif;
					if ( isset( $_GET['message_id'], $_GET['edit'] ) ) :
						if ( ! isset( $_GET['topic_edit'] ) ) :
							EditMessageCommonEdit::catchTwig();
						endif;
					endif;
					if ( ! isset( $_GET['subcategory_tab'] ) ) :
						CategoryCommonIndex::catchTwig();
					endif;
					if ( isset( $_GET['subcategory_tab'] ) ) :
						if ( ! isset( $_GET['section'] ) ) :
							SubcategoryCommonIndex::catchTwig();
						endif;
					endif;
					if ( isset( $_GET['section'] ) ) :
						if ( ! isset( $_GET['topic_id'] ) ) :
							TopicCommonIndex::catchTwig();
						endif;
					endif;
					if ( isset( $_GET['topic_id'] ) ) :
						if ( ! isset( $_GET['message_id'] ) ) :
							MessageCommonIndex::catchTwig();
						endif;
					endif;
				} );


			// ---------
			// Get Admin
			// ---------
			$router->map( 'GET|POST', '/oversight/[user:user]?-?[i:userId]?',
				function () {
					if ( isset( $_SESSION['user'] ) && $_SESSION['user']->idGroup == 3 ):
						if ( isset( $_GET['user'], $_GET['userId'] ) ) :
							HomeAdminEdit::catchTwig();
						endif;
						if ( empty( $_GET ) ) :
							HomeAdminIndex::catchTwig();
						endif;
					else:
						MessageFlash::setFlash( 'warning', 'Action refusée' );
						Helper::redirection( '/home', 307 );
					endif;
				} );
			$router->map( 'GET|POST', '/oversight/news/[i:news_id]?/[create:create]?',
				function () {
					if ( isset( $_SESSION['user'] ) && $_SESSION['user']->idGroup == 3 ):
						if ( isset( $_GET['news_id'] ) ) :
							if ( ! isset( $_GET['create'] ) ):
								NewsAdminEdit::catchTwig();
							endif;
						endif;
						if ( isset( $_GET['create'] ) ) :
							CreateNewsAdminEdit::catchTwig();
						endif;
						if ( empty( $_GET ) ) :
							NewsAdminIndex::catchTwig();
						endif;
					else:
						MessageFlash::setFlash( 'warning', 'Action refusée' );
						Helper::redirection( '/home', 307 );
					endif;
				} );
			$router->map( 'GET|POST', '/oversight/forum/[a:edit]?/[i:forum_id]?/[a:create]?',
				function () {
					if ( isset( $_SESSION['user'] ) && $_SESSION['user']->idGroup == 3 ):
						if ( isset( $_GET['edit'] ) ) :
							if ( ! isset( $_GET['create'] ) ) :
								if ( $_GET['edit'] == 'heading' ) :
									HeadingAdminEdit::catchTwig();
								endif;
								if ( $_GET['edit'] == 'category' ) :
									CategoryAdminEdit::catchTwig();
								endif;
								if ( $_GET['edit'] == 'subcategory' ) :
									SubcategoryAdminEdit::catchTwig();
								endif;
							endif;
						endif;
						if ( isset( $_GET['create'] ) ) :
							CreateForumAdminEdit::catchTwig();
						endif;
						if ( empty( $_GET ) ) :
							ForumAdminIndex::catchTwig();
						endif;
					else:
						MessageFlash::setFlash( 'warning', 'Action refusée' );
						Helper::redirection( '/home', 307 );
					endif;
				} );
		} catch ( Exception $e ) {
			die( 'ERROR FROM ROUTER : ' . $e->getMessage() );
		}
		$match = $router->match();
		if ( $match && is_callable( $match['target'] ) ) :
			$_GET = $match['params'];
			call_user_func_array( $match['target'], $match['params'] );
		else:
			try {
				echo TwigLabs::loadTwig()->render( '/404.twig', [
					'title' => 'Erreur 404'
				] );
			} catch ( \Twig_Error_Loader $e ) {
				die( 'ERROR LOADER TWIG : ' . $e->getMessage() );
			} catch ( \Twig_Error_Runtime $e ) {
				die( 'ERROR RUNTIME TWIG : ' . $e->getMessage() );
			} catch ( \Twig_Error_Syntax $e ) {
				die( 'ERROR SYNTAX TWIG : ' . $e->getMessage() );
			}
		endif;
	}
}
