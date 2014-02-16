<?php

namespace Admin\Tools\CalculatorBundle\Controller;

use Admin\Tools\CalculatorBundle\Form\CalculatorType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/tools/calculator", name="_tools_calculator")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $form = $this->createForm(new CalculatorType());
        $data = $request->request->all();
        if ($data) {
            $form->get('md5')->setData(md5($data['calculator']['string']));
            $form->get('sha1')->setData(sha1($data['calculator']['string']));
            $form->get('time')->setData(date("d.m.Y H:i", intval($data['calculator']['string'])));
        }
        $form->handleRequest($request);

        return array('form' => $form->createView());

    }
}
