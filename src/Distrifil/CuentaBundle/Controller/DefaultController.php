<?php

namespace Distrifil\CuentaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Samson\Bundle\AutocompleteBundle\SamsonAutocompleteBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Distrifil\CuentaBundle\Form\LineaFacturaType;
use Distrifil\CuentaBundle\Form\ClienteType;
use Distrifil\CuentaBundle\Entity\LineaFactura;
use Distrifil\CuentaBundle\Entity\Factura;
use Distrifil\CuentaBundle\Entity\Cuenta;
use Distrifil\CuentaBundle\Entity\Producto;
use Distrifil\CuentaBundle\Entity\Cliente;

class DefaultController extends Controller
{
    /**
     * @Route("inicio/", name="inicio")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("buscarcli/" , name="buscarcli")
     * @Template()
     */
    public function buscarCliAction(){
       
        $em = $this->getDoctrine()->getManager();

        $clientes = $em->getRepository('DistrifilCuentaBundle:Cliente')->findAll();

        return array(
            'clientes' => $clientes,
        );
      
    }
    
    /**
     * @Route("buscarcli/cliente/{term}", name="cliente")
     * 
     * @Template()
     */
//    public function clienteAction($term){
//        
//        $em = $this->getDoctrine()->getEntityManager();
//        $cliente = $em->createQuery('SELECT c FROM DistrifilCuentaBundle:Cliente c WHERE c.descli LIKE :id')
//                ->setParameter('id',$term.'%')->getResult();
//              
//
//            return array(
//            'cliente'=>$cliente,
//                );
//                    
//    }

    

    /**
     * @Route("facturar/" , name="facturar")
     * @Method("POST")
     * @Template()
     */
    public function facturarAction(Request $request)
    {   
//        $entity = new Cuenta();
//        $factura = new Factura();
//        $linea = new LineaFactura;
//        //$factura->addLinea($linea);
//        $entity->addFactura($factura);
//        $form   = $this->createForm(new CuentaType(), $entity);
//
//        return array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        );
        $cli = $request->request->get('cliente');
        $em = $this->getDoctrine()->getManager();
        $cliente = $clientes = $em->getRepository('DistrifilCuentaBundle:Cliente')->find($cli);
        $sesion = $this->getRequest()->getSession();
        $sesion->set('id', $cliente->getId());
        $sesion->set('nombre', $cliente->getDescli());
        return array(
          'cliente'=> $sesion->get('nombre'),  
        );
    }
    
}
