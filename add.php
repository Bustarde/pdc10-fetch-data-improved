<?php

include "vendor/autoload.php";

$mustache = new Mustache_Engine([
	'loader' => new Mustache_Loader_FilesystemLoader('templates')
]);

$template = $mustache->loadTemplate('add');
echo $template->render();