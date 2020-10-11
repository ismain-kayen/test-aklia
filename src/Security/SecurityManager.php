<?php


namespace App\Security;


use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityManager
{
    /**
     * @var EntityManagerInterface
     */
    private $em;
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(EntityManagerInterface $em,
                                UserPasswordEncoderInterface $encoder
    ){

        $this->em = $em;
        $this->encoder = $encoder;
    }
    public function register(User $user)
    {
        $password = $this->encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($password);
        $user->setRoles(['ROLE_USER']);

        $this->em->persist($user);
        $this->em->flush();


    }

}