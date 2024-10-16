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
        // ways to format
        // // 1 - Professional with Internationalization - extension intl
        // $pattern = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // // $pattern = numfmt_create("us_US", NumberForma tter::CURRENCY); // $1,000.00
        // numfmt_format_currency($pattern, $value, "BRL") // R$1.000,00
        // numfmt_format_currency($pattern, $value, "USD") // US$1,000.00
        //
        // // 2 - Not professional:
        // $usd = $real / $usdToRealNow;
        // echo "Your value is R$". number_format($value, 2, '.', ',') ."equivalent to US$". number_format($usd, 2);
        //
        // // 3 - Professional and verbose, first try that I did:
        $fmtUSD = new NumberFormatter("en_US", NumberFormatter::CURRENCY );
        $fmtREAL = new NumberFormatter("pt_BR", NumberFormatter::CURRENCY );
        $moneyInAccount = (int) $_POST['money'];
        $moneyConverted = (int) $_POST['money'] / 5.66;
        $usd =  $fmtUSD->formatCurrency($moneyConverted, 'USD');
        $real =  $fmtUSD->formatCurrency($moneyInAccount, 'BRL');

        echo "Dollar Today: 09/12/2024 - 11:33 GMT-3";
        echo "<br/>";
        echo "<br/>";
        echo "Real: $real";
        echo "<br/>";
        echo "Dollar: <strong>$usd*</strong>";
        echo "<br/>";
      ?>
      <p>This is a hardcoded exchange rate*</p>

      <form method="POST">
        <button type="submit" name="reset">Convert Again</button>
      </form>

      <?php endif; ?>

    </section>
  </main>
</body>

</html>