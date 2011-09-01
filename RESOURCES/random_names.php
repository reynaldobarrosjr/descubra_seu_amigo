<?php
$homepage=file_get_contents('https://graph.facebook.com/me/friends?access_token=145781085505624|2.AQDHpp61Dt0wGF5n.3600.1314910800.1-663149157|jv2dicuZHaH2EVZ5Y1BKoMojs-I');
//echo $homepage;   
$json_a=json_decode($homepage,true);
//echo  $json_a[data][name];        
                  
echo "Nœmero de amigos:</br>\n" ;
echo count($json_a[data])."</br>\n";   

$rand_keys = array_rand($json_a[data], 1);   
echo "Array escolhido indice:</br>\n";
echo $rand_keys."</br>\n";  
echo "Nome do Amigo Escolhido:</br>\n". $json_a[data][$rand_keys][name];  





?>
             