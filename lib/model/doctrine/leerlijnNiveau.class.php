<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class leerlijnNiveau extends BaseleerlijnNiveau
{
	public function save(Doctrine_Connection $con = null){
		if(($fileName = $this->getImage())){			
			DNS::resizeImage(100, 100, $fileName, sfConfig::get('sf_upload_dir').'/leerlijn/tiny/');
		}
		
		parent::save($con);
	}
	public function getNameSlug(){
		return DNS::slugify($this->getName());
	}
	public function removeImages($filename){
		if(is_file(sfConfig::get('sf_upload_dir').'/leerlijn/tiny/'.$filename)){
			unlink(sfConfig::get('sf_upload_dir').'/leerlijn/tiny/'.$filename);
		}
	}
	public function delete(Doctrine_Connection $con = null){
		if($this->getImage()){
			$this->removeImages($this->getImage());
		}
		parent::delete($con);
	}
	public function set($field, $data, $load=null){
		if(strtolower($field)=='image'){
			if($data != $this->getImage()){
				$this->removeImages($this->getImage());
			}
		}
		parent::set($field, $data, $load);
	}
}