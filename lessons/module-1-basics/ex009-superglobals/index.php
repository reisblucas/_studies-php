<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Superglobals</title>
  <link rel="stylesheet" href="../../../styles/style.css">
</head>

<body>
  <main>
    <button onclick="javascript:window.location.href='form-get.html'">Form GET</button>
    <button onclick="javascript:window.location.href='form-post.html'">Form POST</button>
    <button onclick="javascript:window.location.href='form-get-post.html'">Form GET &amp; POST</button>

    <pre>
      <?php
        echo "<h1>Superglobal GET</h1>";
        var_dump($_GET);
        
        echo "<h1>Superglobal POST</h1>";
        var_dump($_POST);

        echo "<h1>Superglobal REQUEST</h1>";
        var_dump($_REQUEST);

        $cookieDuration = time() + 3600;
        setcookie('weekday', 'wednesday', $cookieDuration);

        echo "<h1>Superglobal COOKIE</h1>";
        var_dump($_COOKIE);

        $_SESSION["TEST"] = "WORK";
        echo "<h1>Superglobal SESSION</h1>";
        var_dump($_SESSION["TEST"]);

        echo "<h1>Superglobal ENV</h1>";
        var_dump($_ENV);
        
        // foreach (getenv() as $key => $value) {
        //   echo "<br /> $c -> $v";
        // }
        
        echo "<h1>Superglobal SERVER</h1>";
        var_dump($_SERVER);
        
        echo "<h1>Superglobal GLOBALS</h1>";
        var_dump($GLOBALS);
        ?>
    </pre>
  </main>
</body>

</html>