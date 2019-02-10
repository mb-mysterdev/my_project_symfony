<?php
/**
 * Created by PhpStorm.
 * User: bouhlel
 * Date: 10/02/19
 * Time: 11:29
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class indexController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function hello()
    {

        $languages = [
            'Demain',
            'Lola',
            'Central Park',
            'Hier',
            "l'indian",
        ];

        return $this->render('index.html.twig' , [

                'languages' => $languages

    ]);
    }

    /**
     * @Route("/{language}", name="show")
     */
    public function index($language)
    {
        // do stuff

        return $this->render('show.html.twig', [
            'select_language' => $language,
        ]);

    }

    /**
     * @Route("/symfony/contact", name="contact")
     */
    public function contact()
    {
        // do stuff

        return $this->render('contact.html.twig');

    }


}