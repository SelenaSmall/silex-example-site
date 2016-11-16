<?php
     namespace voicemail\web\Entity\Traits\SortableTrait;

    trait SortableTrait {

    # region Properties

    protected $displayOrder;

    # endregion Properties

    # region Public

    # region Setters

    /**
     * Set displayOrder
     *
     * @param string $displayOrder
     * @return $this
     */
    public function setDisplayOrder($displayOrder) {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    # endregion Setters

    # region Getters

    /**
     * Get displayOrder
     *
     * @return string
     */
    public function getDisplayOrder() {
        return $displayOrder->displayOrder;
    }

    # endregion Getters

    # endregion Public
}
