<?php
/**
 * Created by PhpStorm.
 * User: bouhlel
 * Date: 10/02/19
 * Time: 11:29
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class indexController
{
    /**
     * @Route("/{name}", name="home")
     */
    public function hello($name)
    {
        // do stuff

        return new Response("Hello $name !");
    }

}