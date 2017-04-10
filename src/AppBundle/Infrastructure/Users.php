<?php
/**
 * User: jairo
 * Date: 8/04/17
 * Time: 12:37 PM
 */

namespace AppBundle\Infrastructure;


use AppBundle\Entity\User;

class Users
{
    private $manager;
    private $container;

    /**
     * Report constructor.
     */
    public function __construct($repository = null, $container)
    {
        $this->manager = $repository;
        $this->container = $container;
    }

    public function ObtainAll()
    {
        $users = $this->manager->getRepository(User::class)->findAll();
        return $users;
    }
}