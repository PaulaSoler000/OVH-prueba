<?php

try{
    $base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET UTF8");
    

    
        
}catch (Exception $e){
    die ("Error: " . $e->getMessage());

 echo "La linea del error es: " . $e->getLine();
    
}
//finally{
 //   $base=null;  /*con esto vaciamos la memoria*/
//}
?>