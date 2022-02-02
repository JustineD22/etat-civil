<?php
require_once './include/nav.php';
?>

<h1> Etat Civil </h1>
<?php 

$files = glob('./include/*.inc.php');
$page = $_GET['page'] ?? 'home';

$pageTest = './include/' . $page .'.inc.php';

if (!in_array($pageTest, $files)) {
    require_once './include/home.inc.php';
}
else {
    require_once $pageTest;
}