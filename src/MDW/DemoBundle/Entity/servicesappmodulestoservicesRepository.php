<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * servicesappmodulestoservicesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class servicesappmodulestoservicesRepository extends EntityRepository
{

	/**
	* Devuelve los nombres de los modulos de servicio $id pasada por param
	*/
	public function getNameServicesAppModules($id){
	
		$em = $this->getEntityManager();
		//$em = $this->getDoctrine()->getManager();
		
		$dql = "select a from MDWDemoBundle:servicesappmodulestoservices a where a.idServiceToCompany=:id";		
		
		$query = $em->createQuery($dql);
		$query->setParameter('id', $id);

		$id_module = $query->getResult();

		$name_modules = array();
		
		foreach($id_module as $module){
		
			$idModule = $module->getIdModule();
			
			$dql2 = "select a from MDWDemoBundle:serviceappmodules a where a.id=:idmodule";		
		
			$query = $em->createQuery($dql2);
			$query->setParameter('idmodule', $idModule);
			
			$modules = $query->getResult();			
			
			foreach($modules as $module_names){
				$name_module = $module_names->getName();
				$name_modules[] = $name_module;
			}						
			
		}
		
		//Devuelve el nombre de los modulos del servicio app entrante
		//echo 'EL name_modules ES:';echo '<br>';
		//var_dump($name_modules);
		return $name_modules;
	
	}
	
	
	/**
	* Devuelve el php de los modulos de servicio $id pasada por param
	*/
	public function getPhpServicesAppModules($id){
	
		$em = $this->getEntityManager();
		
		$dql = "select a from MDWDemoBundle:servicesappmodulestoservices a where a.idServiceToCompany=:id";		
		
		$query = $em->createQuery($dql);
		$query->setParameter('id', $id);

		$id_module = $query->getResult();
		
		foreach($id_module as $module){
		
			$idModule = $module->getIdModule();
		}
		
		$dql2 = "select a.php from MDWDemoBundle:serviceappmodules a where a.id=:idmodule";		
		
		$query = $em->createQuery($dql2);
		$query->setParameter('idmodule', $idModule);
		
		$php_module = $query->getResult();
		
		return $php_module;
	
	}


}
