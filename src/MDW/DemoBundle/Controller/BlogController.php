<?php

namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use MDW\DemoBundle\Entity\Users;

class BlogController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MDWDemoBundle:Blog:index.html.twig', array('name' => $name));
    }
	
	public function crear()
    {
        return $this->render('MDWDemoBundle:Blog:index.html.twig', array('name' => $name));
    }
	
	public function showAction(Request $peticion, $slug)
    {
		/*$articulo = $peticion->get('slug'); // otra forma para obtener comodines, GET o POST
		$metodo = $peticion->getMethod();
        return $this->render('MDWDemoBundle:Blog:index.html.twig', array('name' => $slug,'metodo' => $metodo));*/
		
		$em = $this->getDoctrine()->getEntityManager();
		
		$em->getRepository('MDWDemoBundle:Users');
		
		$articulos = $em->getRepository('MDWDemoBundle:Users')->findBy(
			array(
				'login' => 'John Doe',
				'password' => 'Symfony'
			)
		);
		
		$connection = $em->getConnection();
   
		$sth = $connection->prepare("INSERT INTO USERS(login) VALUES ('VAAAAAAA')");
		$sth->execute();
		
		return $this->render('MDWDemoBundle:Blog:show.html.twig', array('name' => $slug,'articulo' => 'artic1'));
    }
}
