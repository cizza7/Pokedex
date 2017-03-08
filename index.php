<?php

?>

<!DOCTYPE html>
<html>
<head>

    <title> Home </title>

    <script src="js/common.js"> </script>
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/index.css"  />

</head>
<body>

    <!-- LA NAVBAR COMUNE A TUTTE LE PAGINE -->
    <ul class="topnav" id="myTopnav">
        <li><a href="index.php">Home</a></li>
        <li><a href="php/search.php">Cerca pokemon</a></li>
        <li><a href="php/login.php">Login</a></li>
        <li><a href="php/registrati.php">Registrati</a></li>
        <li><a href="docum.html">Documentazione</a></li>
        <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
        </li>
    </ul>

    <!-- IL CORPO DELL?ENCICLOPEDIA -->
    <div id="dex-body">

        <img id="pokedex-up" src="img/up.png" alt="there was an error" />
        <div>

<!-- TODO: Inserire il corpo vero e proprio dell'enciclopedia -->

        </div>
        <img id="pokedex-down" src="img/down.png" alt="there was an error" />

    </div>

</body>
</html>
