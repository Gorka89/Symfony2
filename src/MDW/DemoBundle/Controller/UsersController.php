<?php

namespace MDW\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use MDW\DemoBundle\Entity\Users;
use MDW\DemoBundle\Form\LoginType;

use Doctrine\ORM\EntityRepository;

use Symfony\Component\HttpFoundation\Session\Session;

class UsersController extends Controller
{
	
	public function listAction()
	{
	
		$em = $this->getDoctrine()->getManager();

		$users = $em->getRepository('MDWDemoBundle:Users')->findAll();

		return $this->render('MDWDemoBundle:Users:listar.html.twig', array('users' => $users));
		
		

	}
	
	public function traslatetestAction()
	{
		//se recoge el idioma de locale
		/*$request = $this->getRequest();
		$locale = $request->getLocale();
		
		echo 'locale es '.$locale;
		
		//se puede setear la variable locale
		$this->get('session')->set('_locale', 'es');
		
		echo 'locale tras setear es '.$request->getLocale();
		
		$name = "Paco";
		
		$t = $this->get('translator')->trans('Hello %name%', array('%name%' => $name));

		return new Response($t);*/
		
		//$t = $this->get('translator')->trans('Symfony2 is great');
		
		return $this->render('MDWDemoBundle:Users:traslate.html.twig');

		//return new Response($t);
		

	}
	
	public function existsAction()
	{
	
		$em = $this->getDoctrine()->getManager();
		$articulos = $em->getRepository('MDWDemoBundle:Users')->existsUser('John Doe');

	}
	
	public function showUsersAction()
	{
	
		return $this->render('MDWDemoBundle:Users:show_users.html.twig', array());

	}

	public function createAction()
	{
	
		$user = new Users();
		$user->setLogin('user de ejemplo 1');
		$user->setPassword('John Doe');
		$user->setCountry('ejemplo');
		$user->setCompanyId(1);
		$user->setEmail('ejemplo@algo.com');
		
		/*$errors = $this->get('validator')->validate($user);
		
		if(!empty($errors))
		{
			foreach($errors as $error)
			echo $error->getMessage();

			return new Response();
		}*/
		
		$em = $this->getDoctrine()->getManager();
		$em->persist($user);
		$em->flush();
		
		return $this->render('MDWDemoBundle:Blog:show.html.twig', array('name' => 'User Inserted','articulo' => 'insert correcto'));

	}

	/*public function editAction($id)
	{
	
		$em = $this->getDoctrine()->getManager();

		$user = $em->getRepository('MDWDemoBundle:Users')->find($id);

		$user->setPassword('user pass modificado');

		$em->persist($user);
		$em->flush();
		
		return $this->render('MDWDemoBundle:Blog:h.html.twig', array('articulo' => 'edit bienn'));

	}*/
	
	

  public function editAction($id){
    \YsJQuery::useComponent(\YsJQueryConstant::COMPONENT_JQPLOT);
    /* New Plot
     * The first argument is the Plot Id
     * The second argument is the Plot Title
     */

    $plot = new \YsPlot('chartdiv', 'Exponential Line');

    /*
     * The first serie
     * The first argument is the value of the label in legend (optional)
     */

    $serie1 = new \YsPlotSerie("Serie Number 1");


    // Adding data to the serie
    $serie1->addData(1,2);
    $serie1->addData(3,5.12);
    $serie1->addData(5,13.1);
    $serie1->addData(7,33.6);
    $serie1->addData(9,85.9);
    $serie1->addData(11,219.9);

    // Adding style to the serie

    $marker = new \YsPlotMarker();
    $marker->setStyle($marker::$STYLE_DIAMOND);
    $serie1->setShowLine(false);
    $serie1->setMarkerOptions($marker);

    /*
     * The second serie
     */
    $serie2 = new \YsPlotSerie();

    // The label in the legend
    $serie2->setLabel("Serie Number 2");

    // Adding style to the serie

    $serie2->addData(1,219.9);
    $serie2->addData(3,85.9);
    $serie2->addData(5,33.6);
    $serie2->addData(7,13.1);
    $serie2->addData(9,5.12);
    $serie2->addData(11,2);

    // The graphic legend
    $legend = new \YsPlotLegend(\YsLocation::$N);
    $legend->setShow(true);

    //adding the series and legend
    $plot->setSeries($serie1, $serie2);
    $plot->setLegend($legend);
    //return array('plot' => $plot);
	
	
	return $this->render('MDWDemoBundle:Blog:h.html.twig', array('plot' => $plot));
	
  }
	
	

	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$articulo = $em->getRepository('MDWDemoBundle:Users')->find($id);

		$em->remove($articulo);
		$em->flush();

		return $this->redirect(
			$this->generateUrl('articulo_listar')
		);
	}

	
	public function loginAction(){
	
		//-- Obtenemos el request que contendrá los datos
		$request = $this->getRequest();
		
		$user = new Users();
		$form = $this->createForm(new LoginType(), $user);
		
		//-- En caso de que el request haya sido invocado por POST
		//   procesaremos el formulario
		if($request->getMethod() == 'POST')
		{
			//-- Pasamos el request el método bindRequest() del objeto 
			//   formulario el cual obtiene los datos del formulario
			//   y los carga dentro del objeto User que está contenido
			//   también dentro del objeto Type
			$form->bind($request);

			//-- Con esto nuestro formulario ya es capaz de decirnos si
			//   los dato son válidos o no y en caso de ser así
			if($form->isValid())
			{
				//-- Procesamos los datos que ya están automáticamente
				//   cargados dentro de nuestra variable $articulo, ya sea
				//   grabándolos en la base de datos, enviando un mail, etc
				
				$em = $this->getDoctrine()->getManager();
				$name = $user->getLogin();
				$pass = $user->getPassword();
				$exists = $em->getRepository('MDWDemoBundle:Users')->existsUser($name,$pass);
				
				if ($exists){
					//el usuario ya existe se crea la sesion y se va a la pagina de acceso
					$session = $request->getSession();					

					// guarda un atributo para reutilizarlo durante una
					// posterior petición del usuario
					$session->set('login', $name);	

					//company
					$company_id = $em->getRepository('MDWDemoBundle:Users')->getCompanyByLogin($name);
					$session->set('idcompany', $company_id);
					
					//consigo SERVICIOS de la company
					$services = $em->getRepository('MDWDemoBundle:servicestocompanies')->getServicesByCompany($company_id);
					$session->set('services', $services);
					
					return $this->redirect($this->generateURL('user_access'));
				}
				else{
					//el usuario no existe, se redirecciona al login de nuevo
					return $this->redirect($this->generateURL('user_login'));
				}

			}
			else{
				return $this->render('MDWDemoBundle:Users:errorlogin.html.twig');
			}
		}
		
		return $this->render('MDWDemoBundle:Users:login.html.twig', array(
			'form' => $form->createView(),
		));
	}
	
	public function accessAction(){
	
		$session = $this->getRequest()->getSession();
		$login = $session->get('login');
		if ($login != ""){
			
			//se recoge la variable de session al loguear correctamente
			$session = $this->getRequest()->getSession();		
			// en otro controlador por otra petición
			$login = $session->get('login');
			$idcompany = $session->get('idcompany');
			$services = $session->get('services');
			
			//print_r($services);
			
			/*echo 'SERVICIOSOOSO: '.$services[0]->getName().'<br>';
			
			echo 'login es: '.$login;
			echo 'idcompany es: '.$idcompany;*/
			
			$em = $this->getDoctrine()->getManager();
			
			$services_name = array();
			$services_id = array();
			$services_app_modules_name = array();
			$services_app_modules_php = array();
			$services_to_company_id = array();
			
			foreach ($services as $service){
			
				$idservice = $service->getIdService();
				$id = $service->getId();
				
				$services_id[]  = $idservice;
				
				$services_to_company_id[] = $id;
			
				$name = $em->getRepository('MDWDemoBundle:SERVICES')->getServiceName($idservice);				
				
				//Vemos si es servicio landing o APP
				//$name = $service->getName();
				$services_name[] = $name;			
				
				if (strcasecmp($name,'app') == 0){
					//Obtengo los nombres de serviceappmodules y el php que usa, y lo paso a un array de la plantilla
					$names_app_modules = $em->getRepository('MDWDemoBundle:servicesappmodulestoservices')->getNameServicesAppModules($id);
					
					foreach($names_app_modules as $name_app_modules){
						//echo 'name_app_modules es: '.$name_app_modules.'<br>';
						$services_app_modules_name[] = $name_app_modules;
					}
				}
				
				//Obtengo los phps de serviceappmodules y el php que usa, y lo paso a un array de la plantilla
				//$php_app_modules = $em->getRepository('MDWDemoBundle:servicesappmodulestoservices')->getPhpServicesAppModules($id);
				//$services_app_modules_php[] = $php_app_modules;
				
		
			}
			
			//print_r($services_name);
			/*
			echo '------------------------NOMBRES DE MODULOS-----------------------<br>';
			print_r($services_app_modules_name);
			
			echo '------------------------NOMBRES DE PHP USADO POR EL MODULO-----------------------<br>';
			print_r($services_app_modules_php);*/
			
			$em = $this->getDoctrine()->getManager();
			
			return $this->render('MDWDemoBundle:Users:access.html.twig', array('services' => $services, 'servicesname' => $services_name, 'modulesid' => $services_to_company_id, 'modulesphp' => $services_app_modules_php));
		
		}
		else{
			//La sesion no se ha iniciado
			return $this->render('MDWDemoBundle:Users:sessioncontrol.html.twig');
		}
	
	
	}
	

	public function moduleslistAction($id){

		$em = $this->getDoctrine()->getManager();

		//Obtengo los nombres de serviceappmodules y el php que usa, y lo paso a un array de la plantilla
		$names_app_modules = $em->getRepository('MDWDemoBundle:servicesappmodulestoservices')->getNameServicesAppModules($id);
		
		foreach($names_app_modules as $name_app_modules){
			//echo 'name_app_modules es: '.$name_app_modules.'<br>';
			$services_app_modules_name[] = $name_app_modules;
		}
		
		//var_dump($services_app_modules_name);
		
		return $this->render('MDWDemoBundle:Users:index.html.twig', array('name' => 'User Inserted','id' => $id,'modulesname' => $services_app_modules_name));

	}
	
	public function modulephpAction($name){
	
		$em = $this->getDoctrine()->getManager();
		
		
		//Aqui se gestionan todos los modulos
		switch (strtolower($name)){
		
			case "voting":
			  return $this->render('MDWDemoBundle:Users:vote.html.twig', array('name' => $name));
			  //break;
			
			case "menudeldia":
				return $this->render('MDWDemoBundle:Users:vote.html.twig', array('name' => $name));
				
			case "calendario":
				return $this->render('MDWDemoBundle:Modules:calendarmodule.html.twig', array('name' => $name));
			
			default:
				$users = $em->getRepository('MDWDemoBundle:Users')->findAll();
				return $this->render('MDWDemoBundle:Users:listar.html.twig', array('users' => $users));
				
		}
		
		/*if (strcasecmp($name,'voting') == 0){
		
			return $this->render('MDWDemoBundle:Users:vote.html.twig', array('name' => $name));
		}
		
		else{
		
			return $this->render('MDWDemoBundle:Users:appmodules.html.twig', array('name' => $name));
		
		}*/

	}
	
	public function appserviceAction($id){
	
		$em = $this->getDoctrine()->getManager();
		
		$id = 4;
		
		return $this->render('MDWDemoBundle:Users:index.html.twig', array('name' => 'User Inserted','id' => $id));

		//return $this->render('MDWDemoBundle:Users:listar.html.twig', array('users' => $users));

	}
	
	public function landingserviceAction($id){
	
		//Aqui se gestiona el menu opciones de las landings
		
			/*$services_name = array();
			
			foreach ($services as $service){
			
				$idservice = $service->getIdService();
				
				echo 'idservice es: '.$idservice.'<br>'; 
			
				$name = $em->getRepository('MDWDemoBundle:SERVICES')->getServiceName($idservice);
				
				//Vemos si es servicio landing o APP
				//$name = $service->getName();
				$services_name[] = $name;
				//echo 'name es: '.$name.'<br>';
				//echo 'servicio: '.$desc[0];
		
			}
	
		$em = $this->getDoctrine()->getManager();*/
		
		return $this->render('MDWDemoBundle:Users:indexlanding.html.twig');

		//return $this->render('MDWDemoBundle:Users:listar.html.twig', array('users' => $users));

	}
	
	
	public function graphicstatsAction(){
	
		\YsJQuery::useComponent(\YsJQueryConstant::COMPONENT_JQPLOT);
		/* New Plot
		 * The first argument is the Plot Id
		 * The second argument is the Plot Title
		 */

		$plot = new \YsPlot('chartdiv', 'Exponential Line');

		/*
		 * The first serie
		 * The first argument is the value of the label in legend (optional)
		 */

		$serie1 = new \YsPlotSerie("Serie Number 1");


		// Adding data to the serie
		$serie1->addData(1,2);
		$serie1->addData(3,5.12);
		$serie1->addData(5,13.1);
		$serie1->addData(7,33.6);
		$serie1->addData(9,85.9);
		$serie1->addData(11,219.9);

		// Adding style to the serie

		$marker = new \YsPlotMarker();
		$marker->setStyle($marker::$STYLE_DIAMOND);
		$serie1->setShowLine(false);
		$serie1->setMarkerOptions($marker);

		/*
		 * The second serie
		 */
		$serie2 = new \YsPlotSerie();

		// The label in the legend
		$serie2->setLabel("Serie Number 2");

		// Adding style to the serie

		$serie2->addData(1,219.9);
		$serie2->addData(3,85.9);
		$serie2->addData(5,33.6);
		$serie2->addData(7,13.1);
		$serie2->addData(9,5.12);
		$serie2->addData(11,2);

		// The graphic legend
		$legend = new \YsPlotLegend(\YsLocation::$N);
		$legend->setShow(true);

		//adding the series and legend
		$plot->setSeries($serie1, $serie2);
		$plot->setLegend($legend);
		//return array('plot' => $plot);
		
		
		return $this->render('MDWDemoBundle:Users:stats.html.twig', array('plot' => $plot));
	
	}
	
	
	public function loadstatsAction(){
	
		

	}
	

	
	public function exportcsvAction() {
 
		$repository = $this->getDoctrine()->getRepository('MDWDemoBundle:Registers');
		$query = $repository->createQueryBuilder('s');
		$query->orderBy('s.id', 'DESC');
		 
		$data = $query->getQuery()->getResult(); $filename = "export_".date("Y_m_d_His").".csv";
		$response = $this->render('MDWDemoBundle:Users:export.csv.twig', array('data' => $data));
		 
		$response->setStatusCode(200);
		$response->headers->set('Content-Type', 'text/csv');
		$response->headers->set('Content-Description', 'Submissions Export');
		$response->headers->set('Content-Disposition', 'attachment; filename='.$filename);
		$response->headers->set('Content-Transfer-Encoding', 'binary');
		$response->headers->set('Pragma', 'no-cache');
		$response->headers->set('Expires', '0');
		
		$response->sendHeaders();
		$response->sendContent();
		
		return $response;
	}
	
	public function loadregistersAction($id){
	
		$em = $this->getDoctrine()->getManager();
		
		return $this->render('MDWDemoBundle:Users:index.html.twig', array('name' => 'User Inserted','id' => $id));

		//return $this->render('MDWDemoBundle:Users:listar.html.twig', array('users' => $users));

	}
	
	public function loadexportAction($id){
	
		$em = $this->getDoctrine()->getManager();

		$users = $em->getRepository('MDWDemoBundle:Users')->findAll();

		return $this->render('MDWDemoBundle:Users:listar.html.twig', array('users' => $users));

	}
	
	
	public function paginationAction()
	{
		$em    = $this->get('doctrine.orm.entity_manager');
		$dql   = "SELECT a FROM MDWDemoBundle:Registers a";
		$query = $em->createQuery($dql);

		$paginator  = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
			$query,
			$this->get('request')->query->get('page', 1)/*page number*/,
			10/*limit per page*/
		);

		// parameters to template
		return $this->render('MDWDemoBundle:Users:pagination.html.twig', array('pagination' => $pagination));
	}
	
	
}
