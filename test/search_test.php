<?php

	//APERTURA CONNESSIONE CON DATABASE
	$conn=mysqli_connect("localhost","root","");

    //VERIFICA AVVENUTA CONNESSIONE
	if(! $conn){
		die('Errore durante la connesione'.mysql_error());
	}
		
	//SELEZIONE DEL DATABASE Pokedex
	$db=mysqli_select_db($conn,'pokedex');

    //VERIFICA AVVENUTA APERTURA DEL DATABASE
	if(!$db){
		die('Accesso al database non riuscito'.mysql_error());
	}

?>

<html>
<head><head>
<body>

<!-- CREAZIONE DEL FORM  -->
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">     <!-- Si usa POST in modo da non visualizzare nell'url --> 

<!-- CREAZIONE SELECT SCELTA ID POKEMON -->
<input list="idPokemon" name="idPokemon">
<datalist id="idPokemon">
<?php
	$query="SELECT id from pokemon";
	$risultato=mysqli_query($conn,$query) or die("Errore nella query: " . mysqli_error($conn));
	while($riga=mysqli_fetch_array($risultato))
	{
		echo "<option value=\"".$riga["id"]."\">".$riga["id"];//."</option>\n";		//CREAZIONE DELLE VARIE OPZIONI
	}
?>
</datalist>
<!-- CREAZIONE SELECT SCELTA TIPO POKEMON -->
<input list="tipo" name="tipo">
<datalist id="tipo">
<?php
	$query="SELECT nome from tipo";
	$risultato=mysqli_query($conn,$query) or die("Errore nella query: " . mysqli_error($conn));
	while($riga=mysqli_fetch_array($risultato))
	{
		echo "<option value=\"".$riga["nome"]."\">".$riga["nome"];		//CREAZIONE DELLE VARIE OPZIONI
	}
mysql_close($conn);
?>
</datalist>
<input type="submit">
</form>
</body>
</html>

 <?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html> 
