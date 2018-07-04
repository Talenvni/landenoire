<?php namespace action\core\common\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\Validator;

class ProfilCommonEdit {
	/**
	 * @return null Edit paragraph
	 */
	public static function editParagraph() {
		if ( isset( $_POST['descriptif_submit'] ) ) :
			foreach ( $_POST as $key => $value ) :

				if ( $value == 'yes' ) :

					$head = Database::getQuery( '
					SELECT id, name
					FROM ln_users_heading
					WHERE name = ?', [ ucfirst( $key ) ] )->fetch( \PDO::FETCH_OBJ );

					Database::getQuery( '
						UPDATE ln_users_paragraph
						SET showContent = 1
						WHERE idUser = ? AND idHeading = ?', [
						$_GET['account_id'],
						$head->id
					] );

				endif;

				if ( $value == 'no' ) :

					$head = Database::getQuery( '
					SELECT id, name
					FROM ln_users_heading
					WHERE name = ?', [ ucfirst( $key ) ] )->fetch( \PDO::FETCH_OBJ );

					Database::getQuery( '
						UPDATE ln_users_paragraph
						SET showContent = 0
						WHERE idUser = ? AND idHeading = ?', [
						$_GET['account_id'],
						$head->id
					] );

				endif;
			endforeach;
			MessageFlash::setFlash( 'success', 'Descriptif mis à jour' );
			Helper::redirection( '/account/character-' . $_GET['account_id'] );
		endif;

		return null;
	}

	/**
	 * @return mixed|null Change password via account
	 */
	public static function editPassword() {
		// Need password form.
		if ( isset( $_POST['changePassword'] ) ) :
			$_POST['userPassword']   = $_SESSION['user']->password;
			$_POST['changePassword'] = Helper::secureString( $_POST['changePassword'] );
			$_POST['changeConfirm']  = Helper::secureString( $_POST['changeConfirm'] );
			$_POST['changeOld']      = Helper::secureString( $_POST['changeOld'] );

			$changePassword = new Validator( $_POST );
			$changePassword->isEqual( 'changePassword', 'changeConfirm', 'Mot de passe incorrect (correspondance)' );
			$changePassword->isDiff( 'changeOld', 'changePassword', 'Mot de passe incorrect (identique à l\'ancien' );
			$changePassword->isVerify( 'changeOld', 'userPassword', 'Mot de passe actuel incorrect' );
			$changePassword->isPreg(
				'/^[a-zA-Z0-9]{8,}$/',
				'changePassword',
				'Mot de passe incorrect (8 caractères minimum)'
			);

			// If password sounds good.
			if ( empty( $changePassword->getFail() ) ) :
				$passwordHash = password_hash( $_POST['changePassword'], PASSWORD_BCRYPT );

				Database::getQuery(
					'
						UPDATE ln_users
						SET password = ?
						WHERE id = ?',
					[ $passwordHash, $_SESSION['user']->id ]
				);

				MessageFlash::setFlash( 'success', 'Mot de passe mis à jour' );
				Helper::redirection( '/sign-out' );
			else :
				return $changePassword->getFail();
			endif;
		endif;

		return null;
	}

	/**
	 * @return mixed|null Change email via account
	 */
	public static function editEmail() {
		// Need password form.
		if ( isset( $_POST['newEmailSubmit'] ) ) :
			$_POST['userPassword']  = $_SESSION['user']->password;
			$_POST['emailPassword'] = Helper::secureString( $_POST['emailPassword'] );
			$_POST['newEmail']      = Helper::secureString( $_POST['newEmail'] );

			$changeEmail = new Validator( $_POST );
			$changeEmail->isEmail( 'newEmail', 'Email invalide (champ@domaine.ext)' );
			$changeEmail->isVerify( 'emailPassword', 'userPassword', 'Mot de passe incorrect' );


			// If password sounds good.
			if ( empty( $changeEmail->getFail() ) ) :

				Database::getQuery(
					'
						UPDATE ln_users
						SET email = ?
						WHERE id = ?',
					[ $_POST['newEmail'], $_SESSION['user']->id ]
				);

				MessageFlash::setFlash( 'success', 'Email mis à jour' );
				Helper::redirection( '/sign-out' );
			else :
				return $changeEmail->getFail();
			endif;
		endif;

		return null;
	}

	public static function editInfo() {
		// Avatar edit
		if ( isset( $_POST['infoSubmit'] ) ) :
			if ( ! empty( $_FILES['avatar']['name'] ) ) :
				$target_dir    = $_SERVER['DOCUMENT_ROOT'] . '/web/img/avatar/';
				$target_file   = $target_dir . basename( $_FILES['avatar']['name'] );
				$imageFileType = strtolower( pathinfo( $target_file, PATHINFO_EXTENSION ) );

				// Check if image file is a actual image or fake image
				if ( ! empty( $_FILES['avatar']['tmp_name'] ) ) :
					$check = getimagesize( $_FILES['avatar']['tmp_name'] );
					if ( $check !== false ) {
						$uploadOk = 1;
					} else {
						$uploadOk = 0;
					}
				endif;

				// Check file size
				if ( $_FILES['avatar']['size'] > 1000000 ) {
					$uploadOk = 0;
				}

				// Allow certain file formats
				if ( $imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
				     && $imageFileType != 'gif' ) {
					$uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ( $uploadOk == 0 ) {
					$_POST['uploadOk'] = 0;
					// if everything is ok, try to upload file
				} else {
					move_uploaded_file( $_FILES["avatar"]["tmp_name"], $target_file );
					$_POST['uploadOk'] = 1;
				}
			else:
				$_POST['uploadOk'] = 1;
			endif;

			$create = Database::getQuery( '
				SELECT avatar
				FROM ln_users_info i
				WHERE idUser = ?', [ $_GET['account_id'] ] )->fetch( \PDO::FETCH_OBJ );

			$_POST['avatar'] = $_FILES['avatar']['name'];
			$verify          = new Validator();
			$verify->isDiff( $_POST['uploadOk'], 0, 'Image invalide' );
			$verify->isDiff( $create->avatar, null, 'Compte invalide' );

			if ( empty( $verify->getFail() ) ) :

				if ( $create->avatar == $_FILES['avatar']['name'] || $_FILES['avatar']['name'] == null ) :
					$img = $create->avatar;
				endif;

				// Delete old Avatar
				if ( $create->avatar != $_FILES['avatar']['name'] && ! empty( $_FILES['avatar']['name'] ) ) :
					if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/web/img/avatar/' . $create->avatar ) ) {
						unlink( $_SERVER['DOCUMENT_ROOT'] . '/web/img/avatar/' . $create->avatar );
					}
					if ( ! empty( $_FILES['avatar']['name'] ) ) :
						$img = $_FILES['avatar']['name'];
					else:
						$img = $create->avatar;
					endif;
				endif;

				Database::getQuery( '
						UPDATE ln_users_info
						SET avatar = ?, creditAvatar = ?
						WHERE idUser = ?', [
					$img,
					$_POST['creditAvatar'],
					$_GET['account_id']
				] );

				MessageFlash::setFlash( 'success', 'Avatar mis à jour' );
				Helper::redirection( '/account/character-' . $_GET['account_id'] );
			else:
				return $verify->getFail();
			endif;
		endif;

		// Alignement edit
		if ( isset( $_POST['alignSubmit'] ) ) :
			$verification = strlen( $_POST['alignText'] );
			$_POST['255'] = 255;

			$align = new Validator();
			$align->isMinusOrEqual( 255, $verification, 'Le descriptif doit faire entre 1-255 caractères' );

			if ( empty( $align->getFail() ) ) :
				$_POST['alignText'] = ucfirst( $_POST['alignText'] );
				$_POST['align']     = ucfirst( $_POST['align'] );

				Database::getQuery( '
					UPDATE ln_users_info
					SET alignement = ?, alignText = ?
					WHERE idUser = ?', [
					$_POST['align'],
					$_POST['alignText'],
					$_GET['account_id']
				] );

				MessageFlash::setFlash( 'success', 'Alignement mis à jour' );
				Helper::redirection( '/account/character-' . $_GET['account_id'] );
			else:
				return $align->getFail();
			endif;
		endif;

		// Admin edit
		if ( isset( $_POST['infoAdminSubmit'] ) ) :
			if ( is_numeric( $_POST['gold'] ) && is_numeric( $_POST['silver'] ) && is_numeric( $_POST['copper'] ) && is_numeric( $_POST['reputation'] ) )  :

				$minDate = date_create();
				date_sub( $minDate, date_interval_create_from_date_string( '1115 years' ) );
				$conditionMinDate = date_format( $minDate, 'Y-m-d' );

				$maxDate = date_create();
				date_sub( $maxDate, date_interval_create_from_date_string( '815 years' ) );
				$conditionMaxDate = date_format( $maxDate, 'Y-m-d' );

				if ( $_POST['age'] > $conditionMinDate && $_POST['age'] < $conditionMaxDate ) :

					if ( $_POST['gold'] >= 0 && $_POST['silver'] >= 0 && $_POST['copper'] >= 0 ) :
						$info = Database::getQuery( '
							SELECT pseudo
							FROM ln_users
							WHERE id = ?', [ $_GET['account_id'] ] )->fetch( \PDO::FETCH_OBJ );

						if ( $_POST['character_valide'] ):
							$character = 1;
						else:
							$character = 0;
						endif;

						Database::getQuery( '
						UPDATE ln_users_info
						SET age = ?, sexe = ?, race = ?, gold = ?, silver = ?, copper = ?, reputation = ?, characterValide = ?
						WHERE idUser = ?', [
							$_POST['age'],
							$_POST['sexe'],
							$_POST['race'],
							$_POST['gold'],
							$_POST['silver'],
							$_POST['copper'],
							$_POST['reputation'],
							$character,
							$_GET['account_id']
						] );

						MessageFlash::setFlash( 'success', 'Profil de ' . $info->pseudo . ' mis à jour' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] );
					else :
						MessageFlash::setFlash( 'warning', 'Les champs de richesse doivent être positif' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] . '/parameter' );
					endif;
				else :
					MessageFlash::setFlash( 'warning', 'Date de naissance entre l\'an 903 et l\'an 1203' );
					Helper::redirection( '/account/character-' . $_GET['account_id'] . '/parameter' );
				endif;
			else:
				MessageFlash::setFlash( 'warning', 'Les champs [richesse, réputation] doivent être de type numérique' );
				Helper::redirection( '/account/character-' . $_GET['account_id'] . '/parameter' );
			endif;
		endif;

		// Heading edit
		if ( isset( $_POST['headingSubmit'] ) ) :

			foreach ( $_POST as $key => $value ) :

				if ( $key != 'headingSubmit' ) :
					$value = ucfirst( $value );

					$head = Database::getQuery( '
					SELECT id, name
					FROM ln_users_heading
					WHERE name = ?', [ substr( $key, 4 ) ] )->fetch( \PDO::FETCH_OBJ );

					Database::getQuery( '
						UPDATE ln_users_paragraph
						SET content = ?
						WHERE idUser = ? AND idHeading = ?', [
						$value,
						$_GET['account_id'],
						$head->id
					] );

				endif;

			endforeach;

			MessageFlash::setFlash( 'success', 'Profil mis à jour' );
			Helper::redirection( '/account/character-' . $_GET['account_id'] );
		endif;

		return null;
	}

	/**
	 * @return null Edit relation
	 */
	public static function editRelation() {
		if ( isset( $_POST['friend'] ) ) :
			$user = Database::getQuery( '
			SELECT id
			FROM ln_users
			WHERE id = ?', [ $_GET['account_id'] ] )->rowCount();

			if ( $user > 0 ) :
				$vote = Database::getQuery( '
					SELECT idUser, idPoster
					FROM ln_users_vote
					WHERE idUser = ? AND idPoster = ?', [ $_GET['account_id'], $_SESSION['user']->id ] )->rowCount();

				if ( $vote > 0 ) :
					$friend = Database::getQuery( '
					SELECT liked, disliked
					FROM ln_users_vote
					WHERE idUser = ? AND idPoster = ?', [
						$_GET['account_id'],
						$_SESSION['user']->id
					] )->fetch( \PDO::FETCH_OBJ );

					if ( $friend->liked == 1 ) :
						MessageFlash::setFlash( 'warning', 'Vous êtes déjà amical avec cette personne' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] );
					endif;

					if ( $friend->liked == 0 && $friend->disliked == 0 ) :
						Database::getQuery( '
						UPDATE ln_users_vote
						SET liked = 1
						WHERE idUser = ? AND idPoster = ?', [ $_GET['account_id'], $_SESSION['user']->id ] );

						Database::getQuery( '
						UPDATE ln_users_info
						SET reputation = reputation + 1
						WHERE idUser = ?', [ $_GET['account_id'] ] );

						MessageFlash::setFlash( 'success', 'Vous êtes amical avec cette personne' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] );
					endif;

					if ( $friend->liked == 0 && $friend->disliked == 1 ) :
						Database::getQuery( '
						UPDATE ln_users_vote
						SET liked = 1, disliked = 0
						WHERE idUser = ? AND idPoster = ?', [ $_GET['account_id'], $_SESSION['user']->id ] );

						Database::getQuery( '
						UPDATE ln_users_info
						SET reputation = reputation + 2
						WHERE idUser = ?', [ $_GET['account_id'] ] );

						MessageFlash::setFlash( 'success', 'Vous êtes amical avec cette personne' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] );
					endif;
				endif;

				if ( $vote == 0 ) :
					Database::getQuery( '
					INSERT INTO ln_users_vote (idUser, idPoster, liked)
					VALUES (?, ?, 1)', [ $_GET['account_id'], $_SESSION['user']->id ] );

					Database::getQuery( '
						UPDATE ln_users_info
						SET reputation = reputation + 1
						WHERE idUser = ?', [ $_GET['account_id'] ] );

					MessageFlash::setFlash( 'success', 'Vous êtes amical avec cette personne' );
					Helper::redirection( '/account/character-' . $_GET['account_id'] );
				endif;
			endif;
		endif;

		if ( isset( $_POST['ennemi'] ) ) :
			$user = Database::getQuery( '
			SELECT id
			FROM ln_users
			WHERE id = ?', [ $_GET['account_id'] ] )->rowCount();

			if ( $user > 0 ) :
				$vote = Database::getQuery( '
					SELECT idUser, idPoster
					FROM ln_users_vote
					WHERE idUser = ? AND idPoster = ?', [ $_GET['account_id'], $_SESSION['user']->id ] )->rowCount();

				if ( $vote > 0 ) :
					$friend = Database::getQuery( '
					SELECT liked, disliked
					FROM ln_users_vote
					WHERE idUser = ? AND idPoster = ?', [
						$_GET['account_id'],
						$_SESSION['user']->id
					] )->fetch( \PDO::FETCH_OBJ );

					if ( $friend->disliked == 1 ) :
						MessageFlash::setFlash( 'warning', 'Vous êtes déjà hostile avec cette personne' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] );
					endif;

					if ( $friend->liked == 0 && $friend->disliked == 0 ) :
						Database::getQuery( '
						UPDATE ln_users_vote
						SET disliked = 1
						WHERE idUser = ? AND idPoster = ?', [ $_GET['account_id'], $_SESSION['user']->id ] );

						Database::getQuery( '
						UPDATE ln_users_info
						SET reputation = reputation - 1
						WHERE idUser = ?', [ $_GET['account_id'] ] );

						MessageFlash::setFlash( 'danger', 'Vous êtes hostile avec cette personne' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] );
					endif;

					if ( $friend->liked == 1 && $friend->disliked == 0 ) :
						Database::getQuery( '
						UPDATE ln_users_vote
						SET liked = 0, disliked = 1
						WHERE idUser = ? AND idPoster = ?', [ $_GET['account_id'], $_SESSION['user']->id ] );

						Database::getQuery( '
						UPDATE ln_users_info
						SET reputation = reputation - 2
						WHERE idUser = ?', [ $_GET['account_id'] ] );

						MessageFlash::setFlash( 'danger', 'Vous êtes hostile avec cette personne' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] );
					endif;
				endif;

				if ( $vote == 0 ) :
					Database::getQuery( '
					INSERT INTO ln_users_vote (idUser, idPoster, disliked)
					VALUES (?, ?, 1)', [ $_GET['account_id'], $_SESSION['user']->id ] );

					Database::getQuery( '
						UPDATE ln_users_info
						SET reputation = reputation - 1
						WHERE idUser = ?', [ $_GET['account_id'] ] );

					MessageFlash::setFlash( 'danger', 'Vous êtes hostile avec cette personne' );
					Helper::redirection( '/account/character-' . $_GET['account_id'] );
				endif;
			endif;
		endif;

		return null;
	}
}