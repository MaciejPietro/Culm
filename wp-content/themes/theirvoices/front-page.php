<?php
$context = Timber::context();

$modules = array();

if(have_rows('homepage')) {
	while(have_rows('homepage')) {
		the_row();
		$module_name = get_row_layout();
		$module = array();

		if($module_name == 'home') {
			$title = get_sub_field('title_of_baner');


			$module['type'] = $module_name;


		}
		array_push($modules, $module);
	}
}

$context['modules'] = $modules;

Timber::render( 'front-page.twig', $context ); 