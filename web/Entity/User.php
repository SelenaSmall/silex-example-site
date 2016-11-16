<?php
	namespace voicemail\web\Entity\Ticket;

	/**
	 * Handle user data interactions with the databse
	 */
	class User {

	# region Properties

	protected $username;
	protected $password;
	protected $lastLogin;
	protected $createdAt;

	# endregion Properties

	# region Construct

		public function __construct() { 
			$this->lastLogin	= false;
			$this->createdAt	= new \DateTime();
		}

	# endregion Construct

	# region Public

	# region Getters

	/**
	 * Get username
	 *
	 * @param string $username
	 * @return $this
	 */
	public function getUsername($username) {
		$this->username = $username;

		return $this;
	}

	/**
	 * Get password
	 *
	 * @param string $password
	 * @return $this
	 */
	public function getPassword($password) {
		$this->password = $password;

		return $this;
	}

	/**
	 * Get lastLogin
	 *
	 * @param DateTinme $lastLogin
	 * @return $this
	 */
	public function getLastLogin($lastLogin) {
		$this->lastLogin = $lastLogin;

		return $this;
	}


	# region Checkers

	/**
	 * Check isUsername
	 *
	 * @return boolean
	 */
	public function isUsername() {
		

		return true;
	}

	/**
	 * Check isPassword
	 *
	 * @return boolean
	 */
	public function isPassword() {
		
		
		return true;
	}

	# endregion Public

	}

?>