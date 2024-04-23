
<?php
    $myVar = "Greetings";
    echo $myVar;

?><br>
<?php
$x =5;
$y =10;
$xy =5*10;
echo $xy;
?><br>
<!-- -------------------variables------------------ -->
<?php
$a = array(
    "k" => "King",
    "q" => "Queen",
);
$b = array(
    "k" => "King",
    "q" => "Queen",
);
var_dump($a == $b);
?><br>
<!-- // -----returns true if $a and $b have the same value-------- -->
<?php
$a = array(
    "k" => "King",
    "q" => "Queen",
);
$b = array(
    "p" => "prince",
    "pc" => "Princess",
);
var_dump($a == $b);
?><br>

<!-- // ------return false because $a and $b haven't the same value-- -->
<!-- -------It's called Equality------- -->
<?php
var_dump($a!=$b)
?><br>
<!-- --Returns true if $a is not equal to $b-- -->



<?php
$c =4;
$d =6;

echo $c / $d . "\n";
echo $c % $d;
?><br>
<!-- ---arithmetic operator--- -->
<!-- ------here . "\n" means line break-- -->

<?php
$e = 4;
$e *= 6;
echo $e;
?><br>
<!-- ---assignment operator--- -->

<?php
$s = 3;
$u = 7;
echo ++$s . "\n";
echo --$u;
?><br>
<!-- ------increment and decrement operators--- -->

<?php
    $marks = 28;
    if($marks <= 100 and $marks>=80)
    {
        echo "Grade A+";
    }
    elseif ($marks < 80 and $marks >=70)
    {
        echo "Grade A";
    }
    elseif ($marks < 70 and $marks >=60)
    {
        echo "Grade A-";
    }
    elseif ($marks < 60 and $marks >=50)
    {
        echo "Grade B-";
    }
    elseif ($marks < 50 and $marks >=40)
    {
        echo "Grade C";
    }
    elseif ($marks < 40 and $marks >=33)
    {
        echo "Grade D";
    }
    else
    {
        echo "Fail";
    }
    ?><br>
<!-- --------if else statements-------- -->

<?php
for ($i =0; $i < 100; $i++)
{
    echo $i . "\n";
}
?><br>
<!-- ------------------for loop------------------ -->

<?php
$t = 0;
while($t < 50)
{
    echo $t++ . "\n";
}
?><br>
<!-- ---------------while loop---------------- -->
<?php
function greetings(){
    echo "Greetings";
}
greetings();
?>

<!-- -----------declare a function------- -->



