<?php

namespace App\Interfaces;

use App\Entity\User;

interface GenericTraitInterface
{
    /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     *
     * @param \DateTime $creationDateAt
     *
     * @return GenericTraitInterface
     */
    public function setCreationDateAt(?\DateTime $creationDateAt);

    /**
     *
     * @return \DateTime
     */
    public function getCreationDateAt();

    /**
     *
     * @param \DateTime $updateDateAt
     *
     * @return GenericTraitInterface
     */
    public function setUpdateDateAt(?\DateTime $updateDateAt);

    /**
     *
     * @return \DateTime
     */
    public function getUpdateDateAt();

    /**
     *
     * @param User $createdBy
     *
     * @return GenericTraitInterface
     */
    public function setCreatedBy(?User $createdBy = null);

    /**
     *
     * @return User
     */
    public function getCreatedBy();

    /**
     *
     * @param User $updateBy
     *
     * @return GenericTraitInterface
     */
    public function setUpdateBy(?User $updateBy = null);

    /**
     * Get modifiePar.
     *
     * @return User
     */
    public function getUpdateBy();
}
