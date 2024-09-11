<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math Functions in PHP</title>
</head>

<body>
  <header>
    <h1>Math Functions in PHP</h1>
  </header>

  <h2>abs()</h2>
  <?php
    $abs = abs(-500);

    echo "My absolute value is $abs";
    echo "<br/>";
  ?>

  <h2>base_convert()</h2>
  <?php
    $b10toOctal = base_convert(254, 10, 8);
    $b10toHexa = base_convert(254, 10, 16);

    echo "My absolute value is $b10toOctal";
    echo "<br/>";
    echo "My absolute value is $b10toHexa";
    echo "<br/>";
  ?>

  <h2>ceil(), floor() and round()</h2>
  <?php
    const NUM = 4.2;
    $ceil = ceil(NUM);
    $floor = floor(NUM);
    $round = round(NUM);

    echo <<< ROUND
    The result of rounded number of 2.5 is:
    <br/>
    Ceil: $ceil
    <br/>
    Floor: $floor
    <br/>
    Round: $round
    ROUND;
  ?>

  <h2>hypot()</h2>
  <?php
    $hypot = hypot(3, 4);

    echo "My hypotenuse is $hypot";
  ?>

  <h2>intdiv()</h2>
  <?php
    $intdiv = intdiv(5, 2);

    echo "Integer division: $intdiv";
  ?>

  <h2>min()</h2>
  <?php
    $arr = [2, 3, 4, 5, 75, 80, -1];
    $min = min($arr);
    $max = max($arr);

    echo "Min: $min";
    echo "<br/>";
    echo "Max: $max";
    echo "<br/>";
    
    // intentional test to try if has error
    $err = [1, 3, 40, false];
    $min = min($err);

    // array to string convertion here line 80 and why not in line 79?
    // echo "Min with possible error: $err";
    // echo "<br/>";
  ?>

  <h2>pi()</h2>
  <?php
    $pi = pi();
    $piConst = M_PI;
    echo "$pi";
    echo "<br/>";
    echo "$piConst";
  ?>

  <h2>pow()</h2>
  <?php
    $pow = pow(2, 10);
    echo "Power: $pow";
  ?>

  <h2>sin(), cos() and tan()</h2>
  <?php
    $sin = sin(45 * M_PI / 180); // 45 degree in radians
    $radtodegree = rad2deg($sin);
  ?>

  <h2>sqrt()</h2>
  <?php
    $sqrt = sqrt(9);
    echo "My sqrt is $sqrt"
  ?>
</body>

</html>