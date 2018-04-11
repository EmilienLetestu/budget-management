<?php
/**
 * Created by PhpStorm.
 * User: emilien
 * Date: 31/03/2018
 * Time: 18:48
 */
namespace App\Action;



use App\Action\Interfaces\HomeActionInterface;
use App\Entity\Operation;
use App\Form\Type\EditOperationType;
use App\Handler\EditOperationHandler;
use App\Responder\HomeResponder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class HomeAction implements HomeActionInterface
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;
    private $addOperationHandler;
    private $urlGenerator;
    private $doctrine;

    /**
     * HomeAction constructor.
     * @param FormFactoryInterface $formFactory
     * @param EditOperationHandler $addOperationHandler
     * @param UrlGeneratorInterface $urlGenerator
     * @param EntityManagerInterface $doctrine
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        EditOperationHandler $addOperationHandler,
        UrlGeneratorInterface $urlGenerator,
        EntityManagerInterface $doctrine
    )
    {
        $this->formFactory = $formFactory;
        $this->addOperationHandler = $addOperationHandler;
        $this->urlGenerator = $urlGenerator;
        $this->doctrine = $doctrine;
    }


    /**
     *
     * @Route("/", name="home")
     *
     * @param Request $request
     * @param HomeResponder $responder
     * @return Response
     */
    public function __invoke(Request $request, HomeResponder $responder):Response
    {

        $operation = new Operation();

        $form = $this->formFactory
            ->create(EditOperationType::class,$operation)
            ->handleRequest($request)
        ;

        if($this->addOperationHandler->handle($form, $operation))
        {

            $this->doctrine->getRepository(Operation::class);
            $this->doctrine->persist($operation);


            $this->doctrine->flush();

            return new RedirectResponse(
                $this->urlGenerator->generate('home')
            );

        }

        return $responder(
            $form->createView()
        );
    }
}
