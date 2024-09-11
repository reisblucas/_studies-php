<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Manipulation</title>
</head>

<body>
  <!-- Simple -->
  <!-- single quoted - only show content without interpretation -->
  <!-- double quoted - interpretated content -->
  <?php
    $course = "Course";
    $language = "PHP";

    echo $course;
    echo "<br />";
    echo $language;

    echo "<br />";
    // Concatenation operator -> .
    // Javascript it is overloaded operator "+" because we use it to addition and concatenation
    echo $course . " " . $language;
  ?>

  <br />

  <h3>Double quotes: Interpretated content with double quotes("")</h3>
  <?php
    // skip sequence
    echo "PHP \u{1F418}"
  ?>


  <h3>Single quotes: Not interpretated content</h3>
  <?php
    echo 'PHP \u{1F418}'
  ?>

  <br />
  <h3>Printing constant variables</h3>
  <?php
    const STATE = 'RJ';
    echo "Live in " . STATE
  ?>

  <br />
  <h3>Heredoc syntax:</h3>
  <p>Use any phase after <<<, format only text not HTML, HAS INTERPRETATION LIKE DOUBLE QUOTE</p>
      <?php
    echo <<< TEST
      Hast du etwas Zeit für mich
      Dann singe ich ein Lied für dich
      Von neunundneunzig Luftballons
      Auf ihrem weg zum Horizont
      Denkst du vielleicht gerad' an mich
      Dann singe ich ein Lied für dich
      Von neunundneunzig Luftballons
      Und dass so was von so was kommt
    TEST;
  ?>

      <br />
      <h3>Nowdoc syntax:</h3>
      <p>Same as Heredoc without variable interpretation, like single quotes</p>
      <?php
    echo <<< 'TEST'
      Hast du etwas Zeit für mich
      Dann singe ich ein Lied für dich
      Von neunundneunzig Luftballons
      Auf ihrem weg zum Horizont
      Denkst du vielleicht gerad' an mich
      Dann singe ich ein Lied für dich
      Von neunundneunzig Luftballons
      Und dass so was von so was kommt
    TEST;
  ?>
</body>

</html>