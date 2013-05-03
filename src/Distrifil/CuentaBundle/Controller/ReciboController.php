<?php

namespace Distrifil\CuentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Distrifil\CuentaBundle\Entity\Recibo;
use Distrifil\CuentaBundle\Form\ReciboType;
use Distrifil\CuentaBundle\Entity\Cheque;

/**
 * Recibo controller.
 *
 * @Route("/distrifil/recibo")
 */
class ReciboController extends Controller
{
    /**
     * Lists all Recibo entities.
     *
     * @Route("/", name="distrifil_recibo")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DistrifilCuentaBundle:Recibo')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Recibo entity.
     *
     * @Route("/{id}/show", name="distrifil_recibo_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrifilCuentaBundle:Recibo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recibo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Recibo entity.
     *
     * @Route("/new", name="distrifil_recibo_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Recibo();
        $cheque = new Cheque();
        $entity ->addCheque($cheque);
        $form   = $this->createForm(new ReciboType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Recibo entity.
     *
     * @Route("/create", name="distrifil_recibo_create")
     * @Method("POST")
     * @Template("DistrifilCuentaBundle:Recibo:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Recibo();
        $form = $this->createForm(new ReciboType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('distrifil_recibo_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Recibo entity.
     *
     * @Route("/{id}/edit", name="distrifil_recibo_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrifilCuentaBundle:Recibo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recibo entity.');
        }

        $editForm = $this->createForm(new ReciboType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Recibo entity.
     *
     * @Route("/{id}/update", name="distrifil_recibo_update")
     * @Method("POST")
     * @Template("DistrifilCuentaBundle:Recibo:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrifilCuentaBundle:Recibo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Recibo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ReciboType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('distrifil_recibo_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Recibo entity.
     *
     * @Route("/{id}/delete", name="distrifil_recibo_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DistrifilCuentaBundle:Recibo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Recibo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('distrifil_recibo'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
