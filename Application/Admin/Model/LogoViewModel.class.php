<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class LogoViewModel extends ViewModel {   
	public $viewFields = array(     
		'Logo'=>array('id','title','pic','time','_type'=>'LEFT'),    
		'Navigation'=>array('catename','_on'=>'Logo.cateid=Navigation.id'),     
      ); 
    }
?>