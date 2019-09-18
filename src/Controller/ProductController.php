<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ProductController extends Controller
{
    /**
     * @Route("/", name="products-list")
     * @Method({"GET"})
     */
    public function index()
    {
        $products = ['A','B','C'];

        return $this->render('products/index.html.twig', array('products' => $products));
    }
}
