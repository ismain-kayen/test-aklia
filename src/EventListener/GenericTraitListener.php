<?php

namespace App\EventListener;

use App\Entity\User;
use App\Interfaces\GenericTraitInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Security;

/**
 * Custom login listener.
 */
class GenericTraitListener
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    private function logAction(LifecycleEventArgs $args)
    {
        /* @var $entity GenericTraitInterface */
        $entity = $args->getEntity();

        if (!$entity instanceof GenericTraitInterface) {
            return;
        }

        /** @var User $user */
        $user = $this->security->getUser();

        // Log de l'action de modification
        $entity->setUpdateBy($user);
        $entity->setUpdateDateAt(new \DateTime('now'));

        // Log de l'action de création
        if (null === $entity->getId()) {
            $entity->setCreatedBy($user);
            $entity->setUpdateDateAt(new \DateTime('now'));
        }
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $this->logAction($args);
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $this->logAction($args);
    }
}
