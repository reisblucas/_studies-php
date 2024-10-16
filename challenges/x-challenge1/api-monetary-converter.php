<?php
  $converted = false;
  $exchangeRateData = null;
  $url = "https://economia.awesomeapi.com.br/last/USD-BRL,EUR-BRL,BTC-BRL";

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['money'])) {
    $converted = true;
    $ci = curl_init($url);
    curl_setopt($ci, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ci);
    $exchangeRateData = json_decode($response);
    curl_close($ci);
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
    $converted = false;
  }
  
  /**
   * @param {"USDBRL"|"EURBRL"|"BTCBRL"} $currencyTarget blablabla
   */
  function moneyConverter ($currencyTarget, $moneyInAccount) {
    global $exchangeRateData;

    if ($exchangeRateData === null) return;

    $coinToBrlData = $exchangeRateData->{$currencyTarget};
    $apiCallTime = $coinToBrlData->create_date;
    $coinValueNow = round(floatval($coinToBrlData->bid), 2);
    $moneyConverted = $moneyInAccount / $coinValueNow;

    return new class ($apiCallTime, $coinToBrlData, $coinValueNow, $moneyConverted) {
      public $apiCallTime;
      public $coinToBrlData;
      public $coinValueNow;
      public $moneyConverted;

      public function __construct($apiCallTime, $coinToBrlData, $coinValueNow, $moneyConverted)
      {
        $this->apiCallTime = $apiCallTime;
        $this->coinToBrlData = $coinToBrlData;
        $this->coinValueNow = $coinValueNow;
        $this->moneyConverted = $moneyConverted;
      }
    }; 
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>API Monetary Converter</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <haeder>
    <h1>API Monetary Converter</h1>
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

        $balance = (float) $_POST['money'];
        $usdBrlData = moneyConverter("USDBRL", $balance);
        $eurBrlData = moneyConverter("EURBRL", $balance);
        $btcBrlData = moneyConverter("BTCBRL", $balance);

        $apiCallTime = $usdBrlData->apiCallTime;

        $real = $fmtREAL->formatCurrency($balance, 'BRL');
        $usd = $fmtUSD->formatCurrency($usdBrlData->moneyConverted, 'USD');
        $eur = $fmtUSD->formatCurrency($eurBrlData->moneyConverted, 'EUR');
        $btc = $btcBrlData->moneyConverted;
      ?>
      <p>Exchange Rate - <?php echo $apiCallTime ?>
        <br />
        <br />
        Balance: <?php echo $real ?>
        <br />
        <br />
        Dollar: <strong><?php echo $usd ?>*</strong>
        <br />
        Euro: <strong><?php echo $eur ?>*</strong>
        <br />
        Bitcoin: <strong><?php echo "BTC $btc" ?>*</strong>
        <br />
        <br />
        Value used from API below
        <br />
        <?php echo $url ?>
      </p>
      <form method="POST">
        <button type="submit" name="reset">Convert Again</button>
      </form>

      <?php endif; ?>

    </section>
  </main>
</body>

</html>