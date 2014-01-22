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

    /**
     * Finds and displays a Dph entity.
     *
     * @Route("/{id}", name="dph_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminProdDphBundle:Dph')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dph entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
