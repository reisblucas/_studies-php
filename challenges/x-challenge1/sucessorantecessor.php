<?php
  $isSubmitted = false;

  function showForm () {
    global $isSubmitted;
    echo "Test $isSubmitted";
    $isSubmitted = !$isSubmitted;
  }

  // prevent default from script
  // was preventing the page update
  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['number'])) {
    showForm();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sucessor and Antecessor</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <h1>Sucessor and Antecessor</h1>
  </header>

  <main>
    <section>
      <h2>Inform some number:</h2>

      <?php if (!$isSubmitted): ?>
      <form method="POST">
        <label for="number">Number</label>
        <input name="number" type="number" required>
        <button type="submit">Send</button>
      </form>
      <?php else: ?>
      <p>
        You choose number: <span><?php $num = $_POST['number'] ?? M_PI; echo $num ?></span>
        <br />
        Sucessor: <span><?php echo $num + 1 ?></span>
        <br />
        Antecessor: <span><?php echo $num - 1 ?></span>
      </p>

      <form method="post">
        <button type="submit">Try another number!</button>
      </form>
      <?php endif; ?>

      <div class="home-container">
        <a class="home-button" href="index.php">Home</a>
      </div>
    </section>
  </main>
</body>

<script>
const formSucessorAntecessor = document.getElementById("form-sucessor-antecessor");

if (formSucessorAntecessor) {
  formSucessorAntecessor.addEventListener('submit', (event) => {
    event.preventDefault();
    // alert('Prevented')
    console.log('Prevented')
  })
}
</script>

</html>