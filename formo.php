<?PHP
error_reporting(0);
function receivePOST($var)
{
    return htmlspecialchars($_POST[$var]);
}

$r1 = receivePOST("q1");
$r2 = receivePOST("q2");
$r3 = receivePOST("q3");

$cor = 0;

if($r1 == "TTAGGG")
{
    
    $cor = $cor + 1;
}

if($r2 == "c")
{
    $cor = $cor + 1;
}

if($r3 == "c")
{
    $cor = $cor + 1;
}

echo "You have answered correctly to $cor/3 questions <br>";

if($cor == 3)
{
    echo "Nice job!";
}
else
{
    echo "You can do better!";
}
?>