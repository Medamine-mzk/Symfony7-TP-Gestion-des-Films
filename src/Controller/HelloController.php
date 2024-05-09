<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    #[Route('/', name: 'app_home')]//annotation
    public function index(): Response
    {
        return $this->render('hello/index.html.twig');
    }


    //------------------------------------------
    #[Route('/calc/{x}/{y}', name: 'app_calc')]
    public function calc($x=1,$y=2): Response
    {
        $res=$x*$y;
        return $this->render('calc/calc.html.twig',[
            'res'=>$res,
            'x'=>$x,
            'y'=>$y
        ]);
    }

    //------------------------------------------

    #[Route('/first/{myName}')]//annotation
    public function firstFN($myName)
    {
        return new Response("Hello World ! ".$myName);
    }

    #[Route('/test/{x}')]//annotation
    public function test1($x)
    {   
        $res=$x%2==0?"Pair":"Impair";
        return new Response("le nombre $x est ".$res);
    }

    #[Route('/add/{x}/{y}', name: 'addURL')]//annotation
    public function test2($x,$y)
    {   $res=$x+$y;
        return new Response("<h1><u>$x + $y = $res </u></h1>");
    }

}
