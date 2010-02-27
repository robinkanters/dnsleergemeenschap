<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class leerlijnLeerjaar extends BaseleerlijnLeerjaar
{
	public function getNameSlug(){
	  	return DNS::slugify($this->getName());
	}
	public function save(Doctrine_Connection $con = null){
		if(($fileName = $this->getImage())){			
			DNS::resizeImage(150, 150, $fileName, sfConfig::get('sf_upload_dir').'/leerlijn/', sfConfig::get('sf_upload_dir').'/leerlijn/small/');
			DNS::resizeImage(200, 200, $fileName, sfConfig::get('sf_upload_dir').'/leerlijn/', sfConfig::get('sf_upload_dir').'/leerlijn/big/');
		}
		
		parent::save($con);
	}
	public function removeImages($filename){
		if(is_file(sfConfig::get('sf_upload_dir').'/leerlijn/'.$filename)){
			unlink(sfConfig::get('sf_upload_dir').'/leerlijn/'.$filename);
			unlink(sfConfig::get('sf_upload_dir').'/leerlijn/big/'.$filename);
			unlink(sfConfig::get('sf_upload_dir').'/leerlijn/small/'.$filename);
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