<?php

$number = $_POST[number_of_words];
$password[0] = '';

for ($i=0; $i<$number; $i++)
{
	$password[$i] = $words[rand(0,10)];
}
if ($_POST[add_a_number] == on)
{
	$password[$number] = rand(0,9);
}
if ($_POST[add_a_symbol] == on)
{
	$password[$number+1] = $symbols[rand(0,9)];
}
$count = count($password);