
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/Style.css">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/normalize.css">
    <script src="https://kit.fontawesome.com/cff125160c.js" crossorigin="anonymous"></script>
    <title>Sign Up</title>
</head>
<body>
    
  

    <div class="Grid__container">
            <div class="User__login">
               <h3>Sign up</h3>
                <div class="User__data">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
                        <i class="fas fa-user"></i><input type="text" name="ID__usuario" placeholder="Ingrese su ID" class="User__in"><?php errores('ID__usuario', $usuario); ?>
                        
                        <i class="fas fa-envelope"></i><input type="email" name="Email__usuario" placeholder="ingrese su correo" class="User__in"><?php errores('Email__usuario', $usuario); ?>

                        <i class="fas fa-lock"></i><input type="password" name="Password__usuario" placeholder="Ingrese su password" class="User__in"><?php errores('Password__usuario', $usuario); ?>

                        <div class="User__gender">
                            <i class="fas fa-male"></i><label for="Hombre"  class="User__men"> Hombre</label>
                            <input type="radio" name="Sexo" value="Hombre" required>
                            <i class="fas fa-female"></i><label for="Mujer" class="User__woman"> Mujer</label>
                            <input type="radio" name="Sexo" value="Mujer" required> 
                        </div>    
                        <div class="Button__box"> 
                            <div id="Button__style">
                            <button type="submit" class="Button__submit" name="Submit" value="ready">Sign Up</button> 
                        </div>
                                
                    </div> 
                      
                        
                    </form>
                    <?php success($usuario);?>
            </div>
            
        
    </div>

</body>
</html>
