<?php 

/* SWITCH */
switch ($var)
{
	case '1':
		break;
	case '2':
		break;
	case '3':
		break;
}

/* IF */
if ($a > $b)
    echo "a is bigger than b";

if ($a > $b)
{   echo "a is bigger than b";
    $b = $a;}

/* IF ELSE */
if ($a > $b)
{   echo "a is greater than b";}
else
{   echo "a is NOT greater than b";}

/* IF ELSEIF ELSE */
if ($a > $b)
{   echo "a is bigger than b";}
elseif ($a == $b)
{   echo "a is equal to b";}
else
{   echo "a is smaller than b";}

if($a > $b):
    echo $a." is greater than ".$b;
elseif($a == $b): // Note the combination of the words.
    echo $a." equals ".$b;
else:
    echo $a." is neither greater than or equal to ".$b;
endif;

/* WHILE */
while ($i <= 10)
{   echo $i++;  }

while ($i <= 10):
    echo $i;
    $i++;
endwhile;












?>
