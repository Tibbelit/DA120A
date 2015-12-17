<!DOCTYPE html>  
<html>  
  <head>  
    <meta charset="utf-8">
    <title>Svarskript</title>   
  </head>  
  <body> 
<?php
$i=0;
if(isset($_GET) || isset($_POST))
{
/* */
 echo("<p><strong>Du skickade följande data:</strong></p>");
 echo ("<table border=\"1\"><tr><th>Nyckel</th><th>Värde</th></tr>");
 if(!empty($_GET)){
   $data=@$_GET;
 }
 else{ //if it? not a get it must be sent by post
   $data=@$_POST; 
 }
 
$test=array_keys($data);	  //skapar en vektor av nycklarna till arrayen innehållande den inkommande datan
  foreach ($data as $value){  //data=inkommande vektor av både varibel=värde och variabel=array
    if (is_array($value))     // om variabel=array
	  {// Denna avstickare är till för att hantera inskickade vektorer
	   foreach ($value as $key)   //value=värde som hanteras varje gång key=nyckel som hanteras varje gång
		{
	  	  echo ("\t<tr><td>".$test[$i]."</td>");
		  echo ("<td>".$key."</td></tr>\n");
		}
		$i++;
	  }
	else{
	echo ("\t<tr><td>".$test[$i]."</td>");
    echo ("<td>".$value."</td></tr>\n");
    $i++;
	}

 }
echo ("</table>");
}
else 
 {
  echo("<p>Du skickade ingenting.</p>");
 }
//print_r (array_keys($_POST));

?>

  </body>  
</html>  