<?php
// src/Controller/EjemploRutaBase.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use App\Entity\Equipo;
class EjemploBaseDatos extends AbstractController{
	 /**
     * @Route("/mostrar_equipo")	 
     */
	 public function mostrar_equipo(){
        $entityManager = $this->getDoctrine()->getManager();
		$eq = $entityManager->find(Equipo::class, 1);
		$nombre = $eq->getNombre();
        return new Response('<html><body>'. $nombre . '</body></html>');
	 }
	 /**
     * @Route("/correo")	 
     */
	 public function prueba_correo(MailerInterface $mailer){


		$message = new Email();
        $message->from('pruebas@consymfony.com');
        $message->to('errevega1991@gmail.com');
        $message->html("Pruebas");
		$mailer->send($message);	
		return new Response('<html><body>Enviado</body></html>');
	
	 }

    /**
     * @Route("/correoForm")
     */
    public function correoForm(MailerInterface $mailer, Request $request){



        $form = $this->createFormBuilder()
            ->add('from', TextType::class)
            ->add('to', TextType::class)
            ->add('body', TextType::class)
            ->add('Enviar', SubmitType::class, array('label' => 'Enviar'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $datos = $form->getData();

            $message = new Email();
            $message->from($datos["from"]);
            $message->to($datos["to"]);
            $message->html($datos["body"]);
            $mailer->send($message);
            return new Response('<html><body>Enviado</body></html>');
        }

        return $this->render('formuHola.html.twig', array(
            'form' => $form->createView()));

    }




}