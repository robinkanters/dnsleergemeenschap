<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class leerlijnSleutelinzichtTable extends Doctrine_Table
{
	function createProgressQueryForUser($name, $user=null){
		if(!$user){
			$user_id=sfContext::getInstance()->getUser()->getGuardUser()->getId();
		}elseif(get_class($user)=='myUser'){
			$user_id=$user->getGuardUser()->getId();
		}elseif(get_class($user)=='sfGuardUser'){
			$user_id=$user->getId();
		}elseif(is_int($user)){
			$user_id=$user;
		}
		
		return $this->createQuery($name)
			->leftJoin($name.'.Status')
			//->addSelect(sprintf('COUNT(%s.Status.User.id) as status_count', $name))
			//->where($name.'.Status.User.id = ?', $user_id)
			//->orWhere('count('.$name.'.Status.id) = ?', null)
			->orderBy($name.'.niveau.position')
			->addHaving('COUNT('.$name.'.Status.id) = 0')
		;
	}
	function getGlobalProgress(){
		return $this->createProgressQueryForUser('q')->execute();
	}
}