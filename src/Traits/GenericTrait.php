<?php

namespace App\Traits;

use App\Entity\User;

trait GenericTrait
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $creationDateAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $updateDateAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="createdBy", referencedColumnName="id", nullable=true)
     */
    protected $createdBy;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="updatedBy", referencedColumnName="id", nullable=true)
     */
    protected $updatedBy;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    public function setCreationDateAt(?\DateTime $creationDateAt): self
    {
        $this->creationDateAt = $creationDateAt;

        return $this;
    }


    public function getCreationDateAt(): \DateTime
    {
        return $this->creationDateAt;

    }


    public function setUpdateDateAt(?\DateTime $updateDateAt): self
    {
        $this->updateDateAt = $updateDateAt;
        return $this;

    }


    public function getUpdateDateAt(): ?\DateTime
    {
        return $this->updateDateAt;
    }


    public function setCreatedBy(?User $createdBy = null): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     *
     * @return User
     */
    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }


    public function setUpdateBy(?User $updateBy = null): self
    {
        $this->updatedBy = $updateBy;
        return $this;
    }


    public function getUpdateBy(): ?User
    {
        return $this->updatedBy;
    }

}
