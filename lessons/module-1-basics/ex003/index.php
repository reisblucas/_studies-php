<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primitive Types in PHP</title>
</head>

<body>
  <h1>Primitive Types in PHP</h1>
  <?php
    // 0x - hexadecimal
    // 0b - binary
    // 0 - octal
    $num = 0x1A;
    echo "The variable value is $num"
  ?>

  <?php 
    $num = 10;
    $str = "string";
    $float = 10.5;
    $bool = true;

    var_dump($num);
    var_dump($str);
    var_dump($float);
    var_dump($bool);
  ?>

  <br />

  <?php
    // y x (10 ^ x)
    // 3 x (10 ^ 2)
    $power = 3e2; // power always is represented by float
    $powerInt = (int) 3e2; // type coercion
    
    var_dump($power);
    var_dump($powerInt);
  ?>

  <br />

  <!-- As expected the transformation of bool values as javascript -->
  <?php
    $trueStringValue = (bool) "string";
    $falseStringValue = (bool) "";

    var_dump($trueStringValue);
    var_dump($falseStringValue);
  ?>
  <br />

  <?php
    $trueIntegerValue = (bool) 1;
    $falseIntegerValue = (bool) 0;

    var_dump($trueIntegerValue);
    var_dump($falseIntegerValue);
  ?>
  <br />

  <?php
    // boolean type representation on echo is:
    // true -> 1
    // false -> empty
    $boolT = true;
    $boolF = false;

    echo "Representation of true boolean value on string: $boolT";
    echo "<br/>";
    echo "Representation of false boolean value on string: $boolF";
  ?>

  <br />
  <!-- compound data type / tipo de dado composto -->
  <?php
    $vector = [6, 1, 2, 3, 4, 5];
    $vectorWithMultipleDataType = [6, 1.5, "Teste", true, "false"];
    // echo "Cannot print some array $vector";
    var_dump($vector);
    echo "<br />";
    var_dump($vectorWithMultipleDataType);
  ?>

  <br />
  <br />
  <h2>Object</h2>
  <?php
    class People {
      public string $name;
    }

    $p = new People;

    echo "<br />";
    var_dump($p);
  ?>
</body>

</html>