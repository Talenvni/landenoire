<?php namespace action\core\common\edit;


use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;

class CloseTopicCommonEdit {
	public static function closeTopic() {
		$subject = Database::getQuery( '
			SELECT t.id, t.is_closed, t.subject, s.slug
			FROM ln_forum_topic t 
			LEFT JOIN ln_forum_subcategory s on t.idSubcategory = s.id
			WHERE t.id = ?', [ $_GET['topic_id'] ] )->fetch( \PDO::FETCH_OBJ );
		if ( isset( $subject->id ) ) :
			if ( $subject->is_closed == 0 ) :
				Database::getQuery( '
					UPDATE ln_forum_topic
					SET is_closed = ?
					WHERE id = ?', [ 1, $_GET['topic_id'] ] );
				MessageFlash::setFlash( 'success', $subject->subject . ' a bien été clôturé.' );
				Helper::redirection( '/forum/' . $subject->slug . '/topics' );
			endif;
			if ( $subject->is_closed == 1 ) :
				Database::getQuery( '
					UPDATE ln_forum_topic
					SET is_closed = ?
					WHERE id = ?', [ 0, $_GET['topic_id'] ] );
				MessageFlash::setFlash( 'success', $subject->subject . ' a été rouvert.' );
				Helper::redirection( '/forum/' . $subject->slug . '/topics' );
			endif;
		endif;

		return null;
	}
}