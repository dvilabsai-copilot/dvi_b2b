<?php
$_module_title_name = breadcrumbTITLE($currentpage);

if ((isset($_GET['route'])) && $_GET['route'] != '') :
    $add_route = $_GET['route'];
endif;
$pageTITLE = $lang["__" . $_module_title_name . "title" . $add_route];

echo $pageTITLE;
