<?php

// Set page options
$title = "Eventful API - Services_Eventful PEAR package for PHP5";
$header = 'Services_Eventful PHP Package';
$breadcrumbs = array('<a href="/">Eventful API</a>',$header);

require_once 'top.php';
$smarty->display('libs/php/Services_Eventful.tpl');
require_once 'bottom.php';
