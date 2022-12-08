
<!doctype html>


<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>  
    
    <div id="contenedor">
      
        <img src="../login/logo.png" >
        
            <div id="central">

                <div id="login">
                    <div class="titulo">
                        <strong> INICIO DE SESIÓN </strong>
                    </div>
                    <form action="../CRUD_1/validar.php" method="post">
                    <div id="loginform">
                        <div class="email">
                         
                            <img src="../login/img/Mail.png" class="iconosIS"></i></i> <input type="text" name="usuario" placeholder="Usuario" class="IS" required>
                        </div>
                        <br>
                        </span>
                        <div class="email">
                            <img src="../login/img/Pass.png" class="iconosIS"> <input type="password" placeholder="Contraseña" name="contraseña" class="IS" required>
                           
                        </div>
                  
                    
                </div>
                        
                    
                    <!-- <div class="pie-form">
                        <a href="_blank">¿Olvidaste tu contraseña?</a>
                    </div> -->
                <div class="pie-form1">
                        <button type="submit" title="Ingresar" name="Ingresar">Ingresar</button></a>
                        <button class="volverbtn"><a href="../../index.php">Volver</a></button>
                        
                 </div>
            </div>
                 </form>
            </div>
 </div>
            
    </body>
</html>