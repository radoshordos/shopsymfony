<?php

namespace Admin\Prod\DphBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Admin\Prod\DphBundle\Entity\Dph;

/**
 * Dph controller.
 *
 * @Route("/dph")
 */
class DphController extends Controller
{

    /**
     * Lists all Dph entities.
     *
     * @Route("/", name="dph")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminProdDphBundle:Dph')->findAll();

        return array(
            'entities' => $entities,
        );
    }


}
