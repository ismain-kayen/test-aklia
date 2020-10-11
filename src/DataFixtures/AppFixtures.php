<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {

        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('Hugues')
            ->setEmail('Hugues@yopmail.com')
            ->setPhone("0600000000")
            ->setRoles(['ROLE_USER'])
        ;
        $password =  $this->encoder->encodePassword($user,'test');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();
    }
}
