<?php


namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefoultController extends AbstractController
{
    /**
     * @Route("/", name="defoult")
     */
    public function index(ProductRepository $productRepository) {
        $products = $productRepository->findby(
        ['isTop'=> true],
            ['name'=> 'ASC']
        );
        return $this->render(
            'default/index.html.twig',
            [
                'products' => $products,
            ]
            );
    }

}