<?php

$root = dirname(__FILE__);
$page = isset($_GET['view']) ? $_GET['view'] : 'index';

switch ($page) {
    case 'index':
        include "$root/view/pages/index.html.php";
        break;
    case 'generic':
        include "$root/view/pages/generic.html.php"; 
        break;
    case 'elements':
        include "$root/view/pages/elements.html.php";
        break;
}

?>
