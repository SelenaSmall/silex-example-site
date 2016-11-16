<?php
 	namespace voicemail\web\Entity\Traits\LoggedTrait;

	trait LoggedTrait {

		# region Properties

		protected $createdAt;
		protected $modifiedAt;

		# endregion Properties

		# region Public

		# region Setters

		/**
		 * Set createdAt
		 *
		 * @param \DateTime $createdAt
		 * @return $this
		 */
		public function setCreatedAt(\DateTime $createdAt) {
			$this->createdAt = $createdAt;

			return $this;
		}

		/**
		 * Set modifiedAt
		 *
		 * @param \DateTime $modifiedAt
		 * @return $this
		 */
		public function setModifiedAt(\DateTime $modifiedAt) {
				$this->modifiedAt = $modifiedAt;

			return $this;
		}

		# endregion Setters

		# region Getters

		/**
		 * Get createdAt
		 *
		 * @return \DateTime
		 */
		public function getCreatedAt() {
			return $this->createdAt;
		}

		/**
		 * Get modifiedAt
		 *
		 * @return \DateTime
		 */
		public function getmodifiedAt() {
			return $this->modifiedAt;
		}

		# endregion Getters

		# endregion Public
	}
	