<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 4/18/18
 * Time: 6:56 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response('Under the sea!');
    }
}