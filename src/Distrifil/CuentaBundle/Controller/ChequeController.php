<?php

namespace Distrifil\CuentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Distrifil\CuentaBundle\Entity\Cheque;
use Distrifil\CuentaBundle\Form\ChequeType;

/**
 * Cheque controller.
 *
 * @Route("/cheque")
 */
class ChequeController extends Controller
{
    /**
     * Lists all Cheque entities.
     *
     * @Route("/", name="cheque")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DistrifilCuentaBundle:Cheque')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Cheque entity.
     *
     * @Route("/{id}/show", name="cheque_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrifilCuentaBundle:Cheque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cheque entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Cheque entity.
     *
     * @Route("/new", name="cheque_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Cheque();
        $form   = $this->createForm(new ChequeType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Cheque entity.
     *
     * @Route("/create", name="cheque_create")
     * @Method("POST")
     * @Template("DistrifilCuentaBundle:Cheque:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Cheque();
        $form = $this->createForm(new ChequeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cheque_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cheque entity.
     *
     * @Route("/{id}/edit", name="cheque_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrifilCuentaBundle:Cheque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cheque entity.');
        }

        $editForm = $this->createForm(new ChequeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Cheque entity.
     *
     * @Route("/{id}/update", name="cheque_update")
     * @Method("POST")
     * @Template("DistrifilCuentaBundle:Cheque:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrifilCuentaBundle:Cheque')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cheque entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ChequeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cheque_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Cheque entity.
     *
     * @Route("/{id}/delete", name="cheque_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DistrifilCuentaBundle:Cheque')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cheque entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cheque'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
