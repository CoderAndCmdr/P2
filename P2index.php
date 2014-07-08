<?php
/*error_reporting(-1);
ini_set('display_errors', 1);
*/?>
<!DOCTYPE html>
<html>

<head>
	<title>David's xkcd password generator</title>
	<link rel="stylesheet" type="text/css" href="P2style.css">
	<?php require 'dictionary.php'; ?>
	<?php require 'P2logic.php'; ?> 
</head>

<body>
<h1>xkcd Password Generator</h1>
<p class='password'>
<?php	
echo $password_string;
?>
</p>
	<form action='P2index.php' method='POST'>
			<label for='number_of_words'># of Words</label>
		<input type='text' name='number_of_words' id='number of words'
		       maxlength=1 value=''>
		<br>
        <label for ='add_a_number'>Add a number</label>
        <input type='checkbox' name='add_a_number' id='add_a_number'>
        <br>
        <label for ='add_a_symbol'>Add a symbol</label>
        <input type='checkbox' name='add_a_symbol' id='add_a_symbol'>
        <br>
        <label for ='uppercase'>Uppercase first letter</label>
        <input type='checkbox' name='uppercase' id='uppercase'>
        <br>
        <br>
	    <input type='submit' class='btn btn-default' value='Generate Password'>
    </form>
	<br>
	<a href='http://xkcd.com/936/'>
	<img src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
	</a>
</body>
</html>
