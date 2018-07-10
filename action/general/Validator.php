<?php namespace action\general;

class Validator {
	private $fail;
	private $field;

	/**
	 * ValidatorCore constructor
	 *
	 * @param $field
	 */
	public function __construct( $field = null ) {
		$this->field = $field;
	}

	/**
	 * @param mixed $field
	 * @param string $fail_msg
	 *
	 * @return bool Email verification
	 */
	public function isEmail( $field, string $fail_msg ) {
		if ( ! filter_var( $this->getField( $field ), FILTER_VALIDATE_EMAIL ) ) :
			$this->fail[ $field ] = $fail_msg;

			return false;
		endif;

		return true;
	}

	/**
	 * @param $match
	 * @param $field
	 * @param $fail_msg
	 *
	 * @return bool Check PregMatch
	 */
	public function isPreg( $match, $field, $fail_msg ) {
		if ( ! preg_match( $match, $this->getField( $field ) ) ) :
			$this->fail[ $field ] = $fail_msg;

			return false;
		endif;

		return true;
	}

	/**
	 * @param $field
	 * @param $match
	 * @param $fail_msg
	 *
	 * @return bool Check passwords
	 */
	public function isVerify( $field, $match, $fail_msg ) {
		if ( ! password_verify( $this->getField( $field ), $this->getField( $match ) ) ) :
			$this->fail[ $field ] = $fail_msg;

			return false;
		endif;

		return true;
	}

	/**
	 * @param $field
	 * @param $field2
	 * @param $fail_msg
	 *
	 * @return bool Check equality
	 */
	public function isEqual( $field, $field2, $fail_msg ) {
		if ( $this->getField( $field ) != $this->getField( $field2 ) ) :
			$this->fail[ $field ] = $fail_msg;

			return false;
		endif;

		return true;
	}

	/**
	 * @param $field
	 * @param $field2
	 * @param $fail_msg
	 *
	 * @return bool Check different
	 */
	public function isDiff( $field, $field2, $fail_msg ) {
		if ( $this->getField( $field ) == $this->getField( $field2 ) ) :
			$this->fail[ $field ] = $fail_msg;

			return false;
		endif;

		return true;
	}

	/**
	 * @param string|int $field
	 * @param string|int $field2
	 * @param $fail_msg
	 *
	 * @return bool Check equal ou minus
	 */
	public function isMinusOrEqual( $field, $field2, $fail_msg ) {
		if ( $this->getField( $field ) <= $this->getField( $field2 ) ) :
			$this->fail[ $field ] = $fail_msg;

			return false;
		endif;

		return true;
	}

	/**
	 * @param string|int $field
	 * @param string|int $field2
	 * @param $fail_msg
	 *
	 * @return bool Check equal ou plus
	 */
	public function isPlusOrEqual( $field, $field2, $fail_msg ) {
		if ( $this->getField( $field ) >= $this->getField( $field2 ) ) :
			$this->fail[ $field ] = $fail_msg;

			return false;
		endif;

		return true;
	}

	/**
	 * @return mixed Catch errors
	 */
	public function getFail() {
		return $this->fail;
	}

	/**
	 * @param mixed $field
	 *
	 * @return null Check if $_VARIABLE or not
	 */
	private function getField( $field ) {
		if ( ! isset( $this->field ) ) :
			return $field;
		endif;

		return $this->field[ $field ];
	}
}
