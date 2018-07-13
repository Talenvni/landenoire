<?php namespace action\core\common\edit;

use action\general\Database;
use action\general\Helper;
use action\general\MessageFlash;
use action\general\Validator;

class ProfilCommonEdit {
	/**
	 * @return null
	 */
	public static function clearInventory() {
		if ( isset( $_POST['inventory_submit'] ) ) :
			$user = Database::getQuery( '
			SELECT coin
			FROM ln_users_info
			WHERE idUser = ?', [ $_GET['account_id'] ] )->fetch( \PDO::FETCH_OBJ );

			foreach ( $_POST as $key => $value ) :
				if ( isset( $value ) && $key != 'inventory_submit' ) :
					$gain = null;
					$key == 'commun' ? $gain = 10 : null;
					$key == 'rare' ? $gain = 100 : null;
					$key == 'épique' ? $gain = 1000 : null;
					$key == 'légendaire' ? $gain = 10000 : null;

					Database::getQuery( '
					UPDATE ln_users_info
					SET coin = (? + ?)
					WHERE idUser = ?', [
						$user->coin,
						$gain,
						$_GET['account_id']
					] );

					Database::getQuery( '
					DELETE FROM ln_users_inventory
					WHERE id = ?', [ $value ] );

					MessageFlash::setFlash( 'success', 'Inventaire vidé' );
					Helper::redirection( '/account/character-' . $_GET['account_id'] . '/preference' );
				endif;
			endforeach;

			MessageFlash::setFlash( 'warning', 'Veuillez choisir un objet' );
			Helper::redirection( '/account/character-' . $_GET['account_id'] . '/preference' );
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

			if ( $create->avatar == null ) :
				$img = 'default.png';
			endif;

			$_POST['avatar'] = $_FILES['avatar']['name'];
			$verify          = new Validator();
			$verify->isDiff( $_POST['uploadOk'], 0, 'Image invalide' );
			$verify->isDiff( $create, null, 'Compte invalide' );

			if ( empty( $verify->getFail() ) ) :

				if ( $create->avatar == $_FILES['avatar']['name'] || $_FILES['avatar']['name'] == null ) :
					$img = $create->avatar;
				endif;

				// Delete old Avatar
				if ( $create->avatar != $_FILES['avatar']['name'] && ! empty( $_FILES['avatar']['name'] ) ) :
					if ( file_exists( $_SERVER['DOCUMENT_ROOT'] . '/web/img/avatar/' . $create->avatar ) && $create->avatar != 'default.png' ) {
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

			$_POST['alignText'] = ucfirst( $_POST['alignText'] );
			$_POST['align']     = ucfirst( $_POST['align'] );

			Database::getQuery( '
				UPDATE ln_users_info
				SET alignement = ?
				WHERE idUser = ?', [
				$_POST['align'],
				$_GET['account_id']
			] );

			MessageFlash::setFlash( 'success', 'Alignement mis à jour' );
			Helper::redirection( '/account/character-' . $_GET['account_id'] );
		endif;

		// Admin edit
		if ( isset( $_POST['infoAdminSubmit'] ) ) :
			if ( is_numeric( $_POST['coin'] ) && is_numeric( $_POST['reputation'] ) && is_numeric( $_POST['exp'] ) )  :

				$minDate = date_create();
				date_sub( $minDate, date_interval_create_from_date_string( '1115 years' ) );
				$conditionMinDate = date_format( $minDate, 'Y-m-d' );

				$maxDate = date_create();
				date_sub( $maxDate, date_interval_create_from_date_string( '815 years' ) );
				$conditionMaxDate = date_format( $maxDate, 'Y-m-d' );

				if ( $_POST['age'] > $conditionMinDate && $_POST['age'] < $conditionMaxDate ) :

					if ( $_POST['gold'] >= 0 && $_POST['silver'] >= 0 && $_POST['copper'] >= 0 && $_POST['exp'] >= 0 ) :
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
						SET age = ?, sexe = ?, race = ?, coin = ?, reputation = ?, characterValide = ?, experience = ?
						WHERE idUser = ?', [
							$_POST['age'],
							$_POST['sexe'],
							$_POST['race'],
							$_POST['coin'],
							$_POST['reputation'],
							$character,
							$_POST['exp'],
							$_GET['account_id']
						] );

						MessageFlash::setFlash( 'success', 'Profil de ' . $info->pseudo . ' mis à jour' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] );
					else :
						MessageFlash::setFlash( 'warning', 'Les champs de richesse et d\'expérience doivent être positif' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] . '/parameter' );
					endif;
				else :
					MessageFlash::setFlash( 'warning', 'Date de naissance entre le ' . date_format( $minDate, 'd-m-Y' ) . ' et le ' . date_format( $maxDate, 'd-m-Y' ) );
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

	public static function preferenceSheet() {
		if ( isset( $_POST['sheet_submit'] ) ) :
			$intel     = $_POST['intellect'];
			$physique  = $_POST['physique'];
			$dext      = $_POST['dexterite'];
			$social    = $_POST['social'];
			$artisanat = $_POST['artisanat'];

			// if numeric
			if ( is_numeric( $artisanat ) && is_numeric( $social ) && is_numeric( $physique ) && is_numeric( $dext ) && is_numeric( $intel ) ) :

				// if positif
				if ( $artisanat >= 0 && $social >= 0 && $physique >= 0 && $dext >= 0 && $intel >= 0 ) :

					// if < 40
					if ( $intel + $physique + $dext + $social + $artisanat <= 40 ):

						$minDate = date_create();
						date_sub( $minDate, date_interval_create_from_date_string( '1115 years' ) );
						$conditionMinDate = date_format( $minDate, 'Y-m-d' );

						$maxDate = date_create();
						date_sub( $maxDate, date_interval_create_from_date_string( '815 years' ) );
						$conditionMaxDate = date_format( $maxDate, 'Y-m-d' );

						if ( $_POST['age'] > $conditionMinDate && $_POST['age'] < $conditionMaxDate ) :

							Database::getQuery( '
						UPDATE ln_users_traits
						SET physique = ?, intellect = ?, dexterite = ?, social = ?, artisanat = ?
						WHERE idUser = ?', [
								$physique,
								$intel,
								$dext,
								$social,
								$artisanat,
								$_GET['account_id']
							] );

							Database::getQuery( '
						UPDATE ln_users_info
						SET age = ?, sexe = ?, race = ?, has_edit = 1
						WHERE idUser = ?', [
								$_POST['age'],
								$_POST['sexe'],
								$_POST['race'],
								$_GET['account_id']
							] );

							MessageFlash::setFlash( 'success', 'Fiche de personnage mise à jour' );
							Helper::redirection( '/account/character-' . $_GET['account_id'] . '/preference' );

						else :
							MessageFlash::setFlash( 'warning', 'Date de naissance entre le ' . date_format( $minDate, 'd-m-Y' ) . ' et le ' . date_format( $maxDate, 'd-m-Y' ) );
							Helper::redirection( '/account/character-' . $_GET['account_id'] . '/preference' );
						endif;

					else:
						MessageFlash::setFlash( 'warning', 'Maximum 40 points dans les caractéristiques' );
						Helper::redirection( '/account/character-' . $_GET['account_id'] . '/preference' );
					endif; // if < 40

				else:
					MessageFlash::setFlash( 'warning', 'Veuillez choisir des nombres positifs' );
					Helper::redirection( '/account/character-' . $_GET['account_id'] . '/preference' );
				endif; // if positif

			else:
				MessageFlash::setFlash( 'warning', 'Veuillez entrer des valeurs numériques' );
				Helper::redirection( '/account/character-' . $_GET['account_id'] . '/preference' );
			endif; // if numeric
		endif;

		return null;
	}
}