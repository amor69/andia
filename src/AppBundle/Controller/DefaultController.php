<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       
        return $this->render('@App/index.html.twig');
           
    }

    /**
     * @Route("/home2", name="homepage2")
     */
    public function index2Action(Request $request)
    {

        return $this->render('@App/index-2.html.twig');

    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {

        return $this->render('@App/about.html.twig');

    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {

        return $this->render('@App/contact.html.twig');

    }

    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function porfolioAction(Request $request)
    {

        return $this->render('@App/portfolio.html.twig');

    }

    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricingAction(Request $request)
    {

        return $this->render('@App/pricing-tables.html.twig');

    }

    /**
     * @Route("/services", name="services")
     */
    public function servicesAction(Request $request)
    {

        return $this->render('@App/services.html.twig');

    }
}
