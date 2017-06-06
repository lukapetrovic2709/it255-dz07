<!DOCTYPE html>
<html>
<body>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
function gcd($a, $b) {
    if ($a == 0 || $b == 0)
        return abs(max(abs($a), abs($b)));
    $r = $a % $b;
    return ($r != 0) ? gcd($b, $r) : abs($b);
}
header("Content-type: application/json");
$test_array = array ('rezultat' => gcd($a,$b),);
echo json_encode($test_array);
?>
</body>
</html>

