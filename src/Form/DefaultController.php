<?php 
namespace App\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use App\Entity\Contact;
class DefaultController extends AbstractController
{
    /**
    * @Route("/form", name="homepage")
    */
  public function createAction(Request $request)
   {
      $contact = new Contact;     
     # Add form fields
       $form = $this->createFormBuilder($contact)
       ->add('name', TextType::class, array('label'=> 'name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
       ->add('email', TextType::class, array('label'=> 'email','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
       ->add('subject', TextType::class, array('label'=> 'subject','attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
       ->add('message', TextareaType::class, array('label'=> 'message','attr' => array('class' => 'form-control')))
       ->add('Save', SubmitType::class, array('label'=> 'submit', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-top:15px')))
       ->getForm();
     # Handle form response
       $form->handleRequest($request); }}