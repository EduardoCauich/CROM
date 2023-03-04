<?php
$nivel="";
    $pagina = $_SERVER['PHP_SELF'];
    $contar_slashes = substr_count($pagina, '/')-1;
    if($contar_slashes==1){
        $nivel="";
    }else{
        for($i=1;$i<$contar_slashes;$i++){
            $nivel .= "../";
        }
    }
    
?>