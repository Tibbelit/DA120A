<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">  
<html lang="sv">  
  <head>  
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- charset=iso-8859-1"> -->
    <title>Svarskript</title>   
	<!-- Kod skriven av John Niubo (2010 - 2013). Modifierad av Attila Konrad 2014-09-23, Uppdaterad 2014-03-05 -->
  </head>  
  <body> 

<?php
$i=0;
if(isset($_GET) || isset($_POST))
{
/* */
 echo("<p><strong>Du skickade följande frågeformulär till oss:</strong></p>");
 echo ("<table border=\"1\"><tr><th>Variabelnamn</th><th>Värde</th></tr>");
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
 
echo("<p>Vi vill tacka dig för din medverkan då all feedback är viktig för oss!!</p>");
}
else 
 {
  echo("<p>Du skickade ingenting.</p>");
 }
//print_r (array_keys($_POST));

?>

  </body>  
</html>  