<?php namespace action\core\common\index;

use action\general\TwigLabs;

class CodexCommonIndex {
	public static function catchTwig(): void {
		try {
			echo TwigLabs::loadTwig()->render( '/codex/codexCommonIndex.twig', [
				'title'   => 'Codex',
				'codexTab'     => $_GET['codex'] = $_GET['codex'] ?? null,
				'subCodex'     => $_GET['codex'] = $_GET['subcodex'] ?? null
			] );
		} catch ( \Twig_Error_Loader $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Runtime $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		} catch ( \Twig_Error_Syntax $e ) {
			die( 'ERROR FROM TWIG : ' . $e->getMessage() );
		}
	}
}