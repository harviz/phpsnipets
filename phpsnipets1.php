<?php 

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

/* DO WHILE */
$i = 0;
do
{   echo $i;}
while ($i > 0);

/* FOR */
for ($i = 1; $i <= 10; $i++)
{   echo $i;}
/**/
for ($i = 1; ; $i++)
{   if ($i > 10)
    {   break;   }
    echo $i;}
/**/
$i = 1;
for (;;)
{   if ($i > 10)
    {   break;   }
    echo $i;
    $i++;}
/**/
for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

/* FOREACH */
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value)
{    $value = $value * 2;   }
/**/
$a = array(1, 2, 3, 17);
foreach ($a as $v)
{    echo "Current value of \$a: $v.\n";    }
/**/
$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);
foreach ($a as $k => $v)
{    echo "\$a[$k] => $v.\n";   }
/* foreach example 4: multi-dimensional arrays */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";
foreach ($a as $v1)
{   foreach ($v1 as $v2)
    {    echo "$v2\n";    }
}
/* foreach example 5: dynamic arrays */
foreach (array(1, 2, 3, 4, 5) as $v)
{    echo "$v\n";   }
/**/
$array = [
    [1, 2],
    [3, 4],
];
foreach ($array as list($a, $b))
{   // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A: $a; B: $b\n";
}
/* BREAK */
//break ends execution of the current for, foreach, while, do-while or switch structure.

/* CONTINUE */
// continue is used within looping structures to skip the rest of the current loop iteration and
// continue execution at the condition evaluation and then the beginning of the next iteration.

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

?>
