<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class DefoultController extends AbstractController
{
    /**
     * @Route("/", name="defoult")
     */
    public function index() {
        $message = 'I\'m index method!';
        return $this->render(
            'default/index.html.twig',
            [
                'mess' => $message,
            ]
            );
    }

}