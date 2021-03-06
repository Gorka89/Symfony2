<?php

namespace MDW\DemoBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UsersRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsersRepository extends EntityRepository
{

	public function existsUser($login,$pass){
		
		$em = $this->getEntityManager();
		
		$dql = "select a from MDWDemoBundle:Users a where a.login=:login AND a.password=:password";
		$query = $em->createQuery($dql);
		$query->setParameter('login', $login);
		$md5 = md5($pass);
		$query->setParameter('password',$md5);

		$users = $query->getResult();
		
		foreach($users as $user)
		{
			$id = $user->getLogin();
			$title = $user->getPassword();
			return true;
		}
		
		return false;
		
	}
	
	public function insertUser($user_login){
	
		$user = new Users();
		$user->setLogin($user_login);
		$user->setPassword('assae');
		$user->setCountry('ejemplo');
		$user->setCompanyId(1);
		$user->setEmail('ejemplo@algo.com');
		
		$em = $this->getDoctrine()->getEntityManager();
		$em->persist($user);
		$em->flush();
		
		return;
		
	}
	
	public function getCompanyByLogin($login){
	
		$em = $this->getEntityManager();
		
		$dql = "select a from MDWDemoBundle:Users a where a.login=:login";
		$query = $em->createQuery($dql);
		$query->setParameter('login', $login);
		$users = $query->getResult();
		
		//$company_id = $users[0]['companyId']->getCompanyId();
		//return $company_id;
		foreach($users as $user)
		{
			$company_id = $user->getCompanyId();
			return $company_id;
		}

		return -1;
	
	}


}
