<?php
/**
 * Menu Items
 * All Project Menu
 * @category  Menu List
 */

class Menu{
	
	
			public static $navbarsideleft = array(
		array(
			'path' => 'home', 
			'label' => 'Home', 
			'icon' => '<i class="fa fa-home "></i>'
		),
		
		array(
			'path' => 'pengguna', 
			'label' => 'Pengguna', 
			'icon' => '<i class="fa fa-user "></i>'
		),
		
		array(
			'path' => 'surat_masuk', 
			'label' => 'Surat Masuk', 
			'icon' => '<i class="fa fa-inbox "></i>'
		),
		array(	
		),
		
		array( array(
		array(
			'path' => 'roles', 
			'label' => 'Wewenang', 
			'icon' => '<i class="fa fa-key "></i>'
		),
		
		array(
			'path' => 'role_permissions', 
			'label' => 'Hak Akses', 
			'icon' => '<i class="fa fa-key "></i>'
		)
	)
		)
	);
		
	
	
}