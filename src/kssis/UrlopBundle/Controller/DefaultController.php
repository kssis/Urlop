<?php namespace kssis\UrlopBundle\Controller;

use kssis\UrlopBundle\Entity\Pracownik;
use kssis\UrlopBundle\Form\Type\PracownikType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Form;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('kssisUrlopBundle:urlop:index.html.twig');
    }
    
    public function add_employeeAction(Request $request){
        
        
        $pracownik = new Pracownik();
        
        //$pracownik->getFirstName();
                
        $form = $this->createForm('formAddPracownik', $pracownik );
        
        $pracownik = $form->getData();
        
        $form->handleRequest($request);

    if ($form->isValid()) {
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($pracownik);
        $em->flush();

        //exit (\Doctrine\Common\Util\Debug::dump($pracownik));
     
       return $this->redirect($this->generateUrl('kssis_urlop_add_employee_success'));
   }
        
        
        return $this->render('kssisUrlopBundle:urlop:add_employee.html.twig', array(
            'form' => $form->createView(),
            ));
        
    }
    
    
    public function add_employee_successAction() {
        
        
        return $this->render('kssisUrlopBundle:urlop:add_employee_success.html.twig');
        
    }
    
       public function edit_employee_successAction() {
        
        
        return $this->render('kssisUrlopBundle:urlop:edit_employee_success.html.twig');
        
    }
    
    
     public function ManagePracownicyAction() {
             
         
         
             $repository = $this->getDoctrine()
                     ->getRepository('kssisUrlopBundle:Pracownik');
                     
             $pracownik = $repository->findAll();
         
           // exit (\Doctrine\Common\Util\Debug::dump($pracownik));
             
             
             return $this->render('kssisUrlopBundle:urlop:ManagePracownicy.html.twig', array(
                 'array_pracownicy' => $pracownik ));
    
}


    public function EdytujPracownikaAction ($id, Request $request) {
        
        
        $repository = $this->getDoctrine()
                     ->getRepository('kssisUrlopBundle:Pracownik');
                     
        $pracownik = $repository->findOneById($id);
                     
        $form = $this->createForm('formEditPracownik', $pracownik );
        
        $pracownik = $form->getData();
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($pracownik);
        $em->flush();

        //exit (\Doctrine\Common\Util\Debug::dump($pracownik));
     
       return $this->redirect($this->generateUrl('kssis_urlop_edit_employee_success'));
            }
        
        return $this->render('kssisUrlopBundle:urlop:edytujPracownika.html.twig', array(
            'form' => $form->createView(),
            ));
        
    }
            
    public function urlopyAction() {
        
        
        $repository = $this->getDoctrine()
                     ->getRepository('kssisUrlopBundle:Pracownik');
                     
             $pracownik = $repository->findAll();
         
          
             
             
             return $this->render('kssisUrlopBundle:urlop:urlopy.html.twig', array(
                 'array_pracownicy' => $pracownik ));
        
    }
    
    public function pokazPracownikaAction($id) {
        
             $repository = $this->getDoctrine()
                     ->getRepository('kssisUrlopBundle:Pracownik');
                     
             $pracownik = $repository->findOneById($id);
     
            //exit (\Doctrine\Common\Util\Debug::dump($pracownik));
             
             return $this->render('kssisUrlopBundle:urlop:pokazPracownika.html.twig', array ('array_pracownicy'));
             
             
    }

}