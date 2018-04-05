<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 31/03/2018
 * Time: 18:49
 */


namespace App\Responder;



use App\Responder\Interfaces\HomeResponderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;


class HomeResponder implements HomeResponderInterface
{
    private $twig;


    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @param FormView $formView
     * @return Response
     */
    public function __invoke(FormView $formView):Response
    {
       return new Response(
           $this->twig->render('base.html.twig',[
               'form' => $formView
           ])
       );
    }
}
