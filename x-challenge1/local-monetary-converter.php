<?php
  $converted = false;

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['money'])) {
    $converted = true;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
    $converted = false;
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Local Monetary Converter</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <haeder>
    <h1>Local Monetary Converter</h1>
  </haeder>

  <main>
    <section>
      <?php if (!$converted): ?>
      <form method="POST">
        <label for="money">My currency</label>
        <input type="number" name="money" id="money">
        <button type="submit">Convert</button>
      </form>
      <?php else: ?>
      <?php
        $fmtUSD = new NumberFormatter("en_US", NumberFormatter::CURRENCY );
        $fmtREAL = new NumberFormatter("pt_BR", NumberFormatter::CURRENCY );
        $moneyInAccount = (int) $_POST['money'];
        $moneyConverted = (int) $_POST['money'] * 5.66;
        $usd =  $fmtUSD->formatCurrency($moneyConverted, 'USD');
        $real =  $fmtUSD->formatCurrency($moneyInAccount, 'BRL');

        echo "Dollar Today: 09/12/2024 - 11:33 GMT-3";
        echo "<br/>";
        echo "Real: $real";
        echo "<br/>";
        echo "Dollar: $usd";
        echo "<br/>";
      ?>
      <form method="POST">
        <button type="submit" name="reset">Convert Again</button>
      </form>

      <?php endif; ?>

    </section>
  </main>
</body>

</html>