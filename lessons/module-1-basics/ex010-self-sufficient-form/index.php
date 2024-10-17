<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Self-sufficient Forms(calls SELF)</title>
  <link rel="stylesheet" href="../../../styles/style.css">
</head>

<body>
  <?php
  // Nullish coalescing operator only works on PHP v7+
    $value1 = $_GET['value1'] ?? 0;
    $value2 = $_GET['value2'] ?? 0;
  ?>

  <main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="value1">Value 1</label>
      <input type="number" name="value1" min="0" value="<?= $value1 ?>">
      <label for="value2">Value 2</label>
      <input type="number" name="value2" min="1" value="<?= $value2 ?>">
      <input type="submit" value="Sum">
    </form>

    <?php
      $queryStringExist = isset($_GET['value1']) || isset($_GET['value2']);

      if ($queryStringExist):
    ?>
    <section id="result">
      <h2>Sum result</h2>

      <?php
        $sum = $value1 + $value2;

        echo "<p>Sum of Value 1 and Value 2 is $sum</p>";
      ?>
    </section>
    <?php endif; ?>
  </main>
</body>

</html>