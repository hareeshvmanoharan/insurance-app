<?php

namespace AppBundle\Controller;
use AppBundle\Form\Profile\UsersType;
use AppBundle\Entity\Profile\Users;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = new Users();
        $form = $this->createForm(UsersType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('plans',[ 'id' => $user->getId()]);
        }
        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/plans/{id}", name="plans")
     */
    public function plansAction($id)
    {
        if($id){
            $repo = $this->getDoctrine()->getRepository('AppBundle:Profile\Users');
            $found = $repo->find($id);
            if($found){

                $userDetails = [
                    'name' => $found->getName(),
                    'email' => $found->getEmail(),
                    'phone' => $found->getPhone(),
                    'dob' => $found->getDob()->format('Y-m-d'),
                ];

                $repository = $this->getDoctrine()->getRepository('AppBundle:Insurance\Providers');
                $age =  $repository->getAge($found->getDob()->format('Y-m-d'));
                $premiums = $repository->prepareViewData($repository->findAll(), $age);
                return $this->render('insurance/insurance.html.twig', [ 'user' => $userDetails, 'premiums' => $premiums]);
            }

        }

        return $this->redirectToRoute('',[]);
    }
}
