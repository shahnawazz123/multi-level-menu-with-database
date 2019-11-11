<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_Model extends CI_Model 
	{
		public function show_menu(){
	// $connection = connect();

	$menus = '';

	$menus .= $this->generate_multilevel_menus(); 

	$menus = str_replace('<ul class="dropdown"></ul>', '', $menus); 
	

	return $menus;
}

public function generate_multilevel_menus($parent_id=NULL ){

	$menu = '';
	echo $menu;
	$sql = '';
	if( is_null($parent_id) ){
		$sql = "SELECT * FROM `menus` WHERE `parent_id` IS NULL ORDER BY `sort_order`"; 
	}
	else{                                                  
		$sql = "SELECT * FROM `menus` WHERE `parent_id`=$parent_id ORDER BY `sort_order`";
	}

	$row = $this->db->query($sql)->result_array();//echo "<pre>";
	//print_r($row[0]['id']);die;
	$i='0';
	for($i;count($row)>$i; $i++){

		if( $row[$i]['page'] ){
			$menu .= '<li><a href="'.$row[$i]['page'].'">'.$row[$i]['title'].'</a>';
		}
		else{
			$menu .= '<li><a href="#">'.$row[$i]['title'].'</a>';
		}
                                                                                  
		$menu .= '<ul class="dropdown">'.$this->generate_multilevel_menus($row[$i]['id']).'</ul>';
		
		$menu .= '</li>';
	}

	return $menu;
}	



	}
	