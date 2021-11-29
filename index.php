<?php
$context = Timber::context();

$modules = array();

if(have_rows('blocks')) {
	while(have_rows('blocks')) {
		the_row();
		$module_name = get_row_layout();
		$module = array();

		switch ($module_name) {
			case 'hero':
				$module['name'] = $module_name;
				$module['foo'] = get_sub_field('bar');
				// ...
				break;

			
			default:
				// ...
				break;
		}
		array_push($modules, $module);
	}
}

$context['modules'] = $modules;

Timber::render( 'index.twig', $context ); 