<?php

namespace StudentHandler;
require "init.php";
require "StudentHandler.php";
require_once __DIR__ . '/vendor/autoload.php';

use \StudentHandler;

$template = $mustache->loadTemplate('add');
echo $template->render();