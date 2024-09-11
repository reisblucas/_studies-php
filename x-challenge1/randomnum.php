<?php
  $generatedNum = null;

  
  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['submit'])) {
    $generatedNum = random_int(0, 100);
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
    $generatedNum = null;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Generate random numbers</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Generate random numbers:</h1>
  </header>

  <main>
    <section>
      <p>Generate a randomized number from 0 to 100</p>
      <?php if ($generatedNum): ?>
      <p>The generated value is <strong><?php echo $generatedNum ?></strong></p>
      <?php else: ?>
      <p>Generate a number to start!</p>
      <?php endif; ?>
      <form method="POST">
        <input type="submit" name="submit" value="Generate Number">
        <input type="submit" name="reset" value="Reset">
      </form>
    </section>
  </main>
</body>

</html>