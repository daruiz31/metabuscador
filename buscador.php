<?php

//recibir datos:
$termino = $_POST["termino"];
$motor = $_POST["btnB"];

echo $termino, $motor;
switch ($motor) {
    //redireccionar a google
    case 1: 
        header("Location:https://www.google.com.co/search?#q=$termino");
        break;
    
    case 2: 
        header("Location:http://mx.ask.com/web?q=$termino");
        break;

    case 3:
        header("Location:https://www.bing.com/search?q=$termino");
        break;        
    
    case 4: 
        header("Location:http://buscar.hispavista.com/?q=$termino");
        break;
        
    
    case 5: 
        header("Location:http://search.infospace.com/search/web?q=$termino");
        break;
        
    
    case 6:
        header("Location:https://es.search.yahoo.com/?q=$termino");
        
        break;       
    
    case 7: 
        header("Location:http://search.lycos.es/web/?q=$termino");        
        break;
    
    case 8: 
        header("Location:https://www.yandex.com/search/?text=$termino");
        break;
    
    case 9: 
        header("Location:https://www.youtube.com/results?search_query=$termino");
        break;
    
    case 10: 
        header("Location:http://www.refseek.com/search?q=$termino");
        break;
}



