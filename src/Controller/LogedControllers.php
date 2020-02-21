<?php


namespace App\Controller;

use App\Entity\Messages;
use App\Entity\MsgReceived;
use App\Entity\User;
use App\Repository\UserRepository;
use PhpParser\Node\Expr\Array_;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 *
 * @IsGranted("ROLE_USER", statusCode=401, message="NO autorizado")
 */
class LogedControllers extends AbstractController
{
    /**
     * @Route("/mensaje/{num}", name="mensaje")
     */
    public function getMessage($num)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $res = $entityManager->find(Messages::class, $num);
        if (!$res) {
            $res = False;
        }
        return $this->render("email.html.twig", array(
            "sender" => $res->getSenderId()->getUserName(),
            "to" => "TODO",
            "subject" => $res->getSubject(),
            "date" => date_format($res->getDate(), 'Y-m-d H:i:s'),
            "body" => $res->getBody()
        ));
    }

    /**
     * @Route("/profile/{num}", name="profile")
     */
    public function profile($num)
    {
        $res = $this->getDoctrine()->getManager()->getRepository(User::class)->find($num);
        if (!$res) {
            $res = False;
        }
        return $this->render("profile.html.twig", [
            "consulted_user_id" => $res->getUserId(),
            "photo_path"=> $res->getPhotoPath(),
            "user_name"=> $res->getUserName(),
            "description" => $res->getDescription(),
            "age" => $res->getAge(),
            "address" => $res->getAddress()]);
    }

    /**
     * @Route("/received", name="received")
     */
    public function received()
    {
        $userID = $this->getUser()->getUserId();
        $userMsgReceiv = $this->getDoctrine()->getManager()->getRepository(MsgReceived::class)->findMsgBy($userID);
        $msgs =  $this->getDoctrine()->getManager()->getRepository(Messages::class)->getMessages($userMsgReceiv);
        //return new Response(var_dump($msgs));

        return $this->render("msgRec.html.twig", ["mails" => $msgs]);
    }
    /**
     * @Route("/sended", name="sended")
     */
    public function sended()
    {
        $res = $this->getUser()->getMessagesSend();
        return $this->render("msgSend.html.twig", ["mails" => $res]);
    }


}
