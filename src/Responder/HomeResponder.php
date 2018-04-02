<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 31/03/2018
 * Time: 18:49
 */

namespace App\Responder;



use Symfony\Component\HttpFoundation\Response;

class HomeResponder
{
    private $twig;

    /**
     *
     * HomeResponder constructor.
     * @param \Twig_Environment $twig
     */
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @return Response
     */
    public function __invoke()
    {
       return new Response(
           $this->twig->render('base.html.twig')
       );
    }
}
