<?php



require_once '../config.php';

include_once('../views/nav.view.php');
$data = [
    'pageTitle' => 'Cayden | Resume',
    'header' => 'IN PROGRESS - testing...',
];
include_once('../views/head.view.php');
include_once('../views/header.view.php');

?>
<embed src="../media/resume.pdf" type="application/pdf" width="80%" height="80%">

<?php 
include_once('../views/footer.view.php');


?>
