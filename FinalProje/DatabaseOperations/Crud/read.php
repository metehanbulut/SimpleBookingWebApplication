<link rel="stylesheet" href="/FinalProje/DatabaseOperations/Crud/crud.css" type="text/css">
<?php 
// require_once "../Connect/veritabaniBaglantisi.php";
require_once(realpath(dirname(__FILE__) . '/..') . '/Connect/veritabaniBaglantisi.php');

$data=$db->prepare("select * from guv_sorular");
	$data->execute();
	// $duzenlenenData=$data->fetch(PDO::FETCH_ASSOC);

	$result=array();

	while($duzenlenenData=$data->fetch(PDO::FETCH_ASSOC))
	{
		array_push($result, $duzenlenenData);
	}

?>
