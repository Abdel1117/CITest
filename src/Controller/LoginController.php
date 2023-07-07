<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        $User = new User();
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUserNamer = $authenticationUtils->getLastUsername();
        
        return $this->render('login/index.html.twig', [
            "last_username" => $lastUserNamer,
            "error" => $error,

        ]);
    }
}