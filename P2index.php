<?php
/*error_reporting(-1);
ini_set('display_errors', 1);
*/?>
<!DOCTYPE html>
<html>
<head>
	<title>David's xkcd password generator</title>
	<style>
	body
	{
		text-align: center;
	}
    </style>
	<?php require 'dictionary.php'; ?>
	<?php require 'P2logic.php'; ?> 

		
</head>

<body>

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
    <input type='submit' class='btn btn-default' value='Generate Password'>
    </form>
<br>
<br>

<p>

<?php	

for ($i=0; $i<$number-1; $i++)
{
	echo $password[$i];
	echo '-';
}
echo $password[$number-1];
echo $password[$number];
echo $password[$number+1];
?>

</p>

</body>
</html>
