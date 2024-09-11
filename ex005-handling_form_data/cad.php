<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Result from form</h1>
  </header>

  <main>
    <?php
    // $_REQUEST is a super global variable compound by => $_GET + $_POST + $_COOKIES
    // $_GET => on form get request
    // $_POST => on form post request
    $n = $_GET['name'] ?? "Unknown"; // php v7+
    $l = $_GET['lastName'] ?? "Name";

    echo "<p>It's a pleasure, <strong>$n $l</strong> this is a my first website in php!</p>"
    ?>

    <br />
    <a href="javascript:history.go(-1)">Back</a>
  </main>
</body>

</html>