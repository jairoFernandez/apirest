<?php
 
namespace AppBundle\Api\v1;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UsersController extends Controller
{
    public function getUsersAction(Request $request)
    {
        //$em = $this->getRepository(User::class)->findAll();
        $usuarios = $this->get('users')->ObtainAll();
        $usuarioActual =  $this->getUser();
        return $usuarioActual;
    }
 
}