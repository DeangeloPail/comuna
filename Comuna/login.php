<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            
    <title>C.C Las Margaritas|Login</title>

</head>
<body>
   
<div class="box">
    <div class="container">

    <?php
    include "includes/conectado.php";
    include "controlador.php";

    ?>
<form method="post" action=""class="input-field" >
                        
                        <div class="top">
                        <header>Iniciar Sesion</header>
                        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="username" name="username">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" id="password" name="password">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Ingresar" id="btningresar" name="btningresar">
        </div>
</form>

</body>
</html>