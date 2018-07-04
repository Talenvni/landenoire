<?php namespace action\general;

use Twig_Environment;
use Twig_Error_Loader;
use Twig_Extension_Debug;
use Twig_Loader_Filesystem;
use Twig_Extensions_Extension_Date;
use Twig_Extensions_Extension_I18n;
use Twig_Extensions_Extension_Intl;
use Twig_Extensions_Extension_Text;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

class TwigLabs {
	/**
	 * @return Twig_Environment Twig template
	 */
	public static function loadTwig() {
		$loader = new Twig_Loader_Filesystem( 'view' );
		try {
			$loader->addPath( 'view/admin/index' );
			$loader->addPath( 'view/admin/edit' );
			$loader->addPath( 'view/common/index' );
			$loader->addPath( 'view/common/edit' );
			$loader->addPath( 'view/redirect' );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM LOADER TWIG : ' . $e->getMessage() );
		}
		try {
			$loader->addPath( 'view/redirect' );
		} catch ( Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
		$twig = new Twig_Environment( $loader, [
			'debug' => true,
			'cache' => __DIR__ . '/cache'
		] );
		// Set language to French
		putenv( 'LC_ALL=fr_FR' );
		setlocale( LC_ALL, 'fr_FR' );
		// Choose timezone
		date_default_timezone_set( 'Europe/Paris' );
		// Choose domain
		textdomain( 'translation' );
		$translator = new Translator( 'fr_FR' );
		$translator->addLoader( 'array', new ArrayLoader() );
		$translator->addResource( 'array', array(
			'diff.ago.second' => '%count% seconde|%count% secondes',
			'diff.ago.minute' => '%count% minute|%count% minutes',
			'diff.ago.hour'   => '%count% heure|%count% heures',
			'diff.ago.day'    => '%count% jour|%count% jours',
			'diff.ago.month'  => '%count% mois',
			'diff.ago.year'   => '%count% an|%count% ans',
			'diff.in.second'  => '%count% seconde|%count% secondes',
			'diff.in.minute'  => '%count% minute|%count% minutes',
			'diff.in.hour'    => '%count% heure|%count% heures',
			'diff.in.day'     => '%count% jour|%count% jours',
			'diff.in.month'   => '%count% mois',
			'diff.in.year'    => '%count% an|%count% ans',
		), 'fr_FR', 'date' );
		$twig->addExtension( new Twig_Extension_Debug() );
		$twig->addExtension( new Twig_Extensions_Extension_Intl() );
		$twig->addExtension( new Twig_Extensions_Extension_Date( $translator ) );
		$twig->addExtension( new Twig_Extensions_Extension_Text() );
		$twig->addExtension( new Twig_Extensions_Extension_I18n() );
		$twig->addGlobal( 'sessionUser', $_SESSION['user'] = $_SESSION['user'] ?? null );
		$twig->addGlobal( 'flashMessage', MessageFlash::getFlash() );

		return $twig;
	}
}
