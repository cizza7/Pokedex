<?php

  // Apro la connessione col server
  $conn = mysqli_connect( "localhost", "root", "" );

  // Controllo che la connessione sia avvenuta correttamente
  if( !$conn ) die( 'Errore durante la connesione' . mysql_error() );
		
  // Mi connetto al database corretto sul server
  $db = mysqli_select_db( $conn, 'pokedex' );

  // Verifico che la connessione al database sia avvenuta correttamente
  if( !$db ) die( 'Accesso al database non riuscito' . mysql_error() );

?>

<!DOCTYPE html>
<html>
<head>

  <title> Home </title>

  <!-- Linko gli script e i fogli di stile comuni a tutte le pagine -->
  <script src="js/common.js"> </script>
  <link rel="stylesheet" href="css/common.css" />

  <!-- Linko il foglio di stile che descrive gli elementi presenti solo nell'index -->
  <link rel="stylesheet" href="css/index.css"  />

</head>
<body>

  <!-- LA NAVBAR COMUNE A TUTTE LE PAGINE -->
  <!-- La navbar è fatta mediante una lista non ordinata in cui gli 
        elementi sono link alle altre pagine del sito -->
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

  <!-- IL CORPO DELL'ENCICLOPEDIA -->
  <div id="dex-container">

    <!-- Il lato sinistro del pokedex -->
    <img id="pokedex-left" class="initial-values" src="img/up.png" alt="there was an error" />

    <!-- La lista vera e propria, riempita coi dati contenuti nel database -->
    <span id="dex-body">
      <ol>
        <?php 

          // Eseguo la query che restituisce tutti i pokemon
          $query = "SELECT nome FROM pokemon";
          $risultato = mysqli_query( $conn, $query ) or die( "Errore nella query: " . mysqli_error( $conn ) );

          // Stampo la lista di tutti i pokemon
          while( $riga = mysqli_fetch_array( $risultato ) )
            echo "<li> <a href=\"\"> " . $riga['nome'] . "</a></li>";

          // Chiudo la connessione al database
          mysql_close( $conn );

              ?>
          </ol>
      </span>

      <!-- Il lato destro del pokedex -->
      <img id="pokedex-right" class="initial-values" src="img/down.png" alt="there was an error" />

  </div>

</body>
</html>
