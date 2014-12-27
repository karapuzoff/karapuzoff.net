<?
$data = array(
	"image" 			=> "images/1.jpg",
	"date" 				=> "1",
	"author" 			=> "2",
	"title" 			=> $_GET['index'],
	"title_secondary" 	=> "4",
	"content" 			=> "5"
);

$jsontext = "{";
foreach($data as $key => $value) {
    $jsontext .= "\"".addslashes($key)."\":\"".addslashes($value)."\",";
}
$jsontext = substr_replace($jsontext, '', -1); // to get rid of extra comma
$jsontext .= "}";

echo $jsontext;
?>