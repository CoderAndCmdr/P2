<!DOCTYPE html>
<html>
<head>
	<title>David's xkcd password generator</title>
	<style>
	
	</style>
</head>

<body>
	<form action = 'P2index.php' method='POST'>

		<label for='number_of_words'># of Words</label>
		<input type='text' name='number_of_words' id='number of words'
		       maxlength=1 value=''>
		<br>
        <label for ='add_a_number'>Add a number</label>
        <input type='checkbox' name='add_a_number' id='add_a_number'
        <br>
        <label for ='add_a_symbol'>Add a symbol</label>
        <input type='checkbox' name='add_a_symbol' id='add_a_symbol'
         <br>
         <br>
    <input type='submit' class='btn btn-default' value='Generate Password'>
    </form>
</body>
<html>
