<?php
    namespace voicemail\web\Entity\Traits\EntityTrait;

    /**
     * Base entity
     */
    abstract class Entity {

        # region Properties

        protected $id;

        # endregion Properties

        # region Public

        # region Getters
        
        /**
         * Get id
         */
        public function getId() {
            return $this->id;
        }

        # endregion Getters

        # endregion Public
    }
    