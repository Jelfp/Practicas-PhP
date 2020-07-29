
<?php
    function Validaciones($arreglo){ //Esta funcion de saneamiento de todos los datos.
       
        $datos=[];
        /* $errores;
        $i=0; */ 

        foreach($arreglo as $dato=> $value){
            //Elimina los caracteres especiales
                trim($value);
                $datos[$dato]=htmlspecialchars($value);
                $datos[$dato]=filter_var($value , FILTER_SANITIZE_STRING); 
                $datos[$dato]=str_replace(' ', '', $value);
           
        }
       
        return ($datos);
    }
    $usuario =[] ;
    $usuario= Validaciones($_POST);
    function errores( $error, $dato ){


            if(empty($dato[$error]) and !empty($dato['Submit'])){ //indica los datos o errores en el formulario
              echo '<i class="fas fa-exclamation-circle" id="icon__color"></i>';
           

        }
         
    }
    
    function success($end){ //verifica que todos los datos esten
        $i=0;
        $contador2=0;
        
        foreach($end as $name => $valor){
            if(!empty($end[$name])){
                $i++;
            }
            else{
                $contador2++;
            }
        }
        if(($i>= ($i + $contador2)) and ($contador2!= 0 or $i!=0)){
            echo  '<div class="success">
                        <h3>success<i class="fas fa-check-circle"></i></h3>
                    </div>' ;
        }
        
    }
   
    
    require'index.view.php';
?>

