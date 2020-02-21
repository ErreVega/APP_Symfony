<?php
// src/Controller/EjemploPlantillas.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class EjemploPlantillas extends AbstractController{
	 /**
     * @Route("/saludo/{nombre}", name="saludo")	 
     */
	 public function saludo($nombre){
		return $this->render('saludo.html.twig',
				array ( 'nombre' => $nombre));
	 }
	 /**
     * @Route("/positivo/{num}", name="positivo")
     */
	public function positivo($num){
		return $this->render('if.html.twig', array ( 'numero' => $num));
	}
	 /**
     * @Route("/tabla/", name="tabla")	 
     */
	 public function tabla(){
		$filas = array(array('codigo'=> '1', 'nombre' =>'Sevilla' ),
						array('codigo'=> '2', 'nombre' =>'Madrid' ));
		
		return $this->render('tabla.html.twig', array ( 'filas' => $filas));
	 }
	 /**
     * @Route("/plantillabase", name="plantillabase")
     */
	public function plantillabase(){
		return $this->render('baseAPP.html.twig');
	}
	/**
     * @Route("/plantillacats", name="plantillacats")
     */
	public function plantillacats(){
		$cats = array(array('Codigo'=> '1', 'Nombre' =>'Comida' ),
						array('Codigo'=> '2', 'Nombre' =>'Bebida' ));
		return $this->render('categorias.html.twig'
		, array ( 'categorias' => $cats));
	}
	 
}