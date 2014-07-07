<?php

$number = $_POST[number_of_words];
$password[0] = '';

for ($i=0; $i<$number; $i++)
{
	$password[$i] = $words[rand(0,10)];
}
for ($i=0; $i<$number-1; $i++)
{
	$password_string .= $password[$i] . '-';
}

$password_string = $password_string . $password[$number-1];

if ($_POST[add_a_number] == on)
{
	$password[$number] = rand(0,9);
	$password_string = $password_string . $password[$number];
}
if ($_POST[add_a_symbol] == on)
{
	$password[$number+1] = $symbols[rand(0,9)];
	$password_string = $password_string . $password[$number+1];
}

if ($_POST[uppercase] == on)
{
	$password_string = ucfirst($password_string);
}