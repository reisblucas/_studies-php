<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Math Division Anatomy</title>
  <link rel="stylesheet" href="../../styles/style.css">
</head>

<body>
  <?php
    $dividend = $_GET['dividend'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;
  ?>

  <main>
    <form action="" method="get">
      <label for="dividend">Dividend</label>
      <input type="number" name="dividend" value="<?= $dividend ?>">
      <label for="divisor">Divisor</label>
      <input type="number" name="divisor" min="1" value="<?= $divisor ?>">
      <input type="submit" value="Divide">
    </form>
  </main>

  <section>
    <h2>Division Structure</h2>

    <ul>
      <?php
        $quotient = (int) ($dividend / $divisor);
        // $quotient = intdiv($dividend, $divisor);
        $remainder = $dividend % $divisor;
      ?>

      <table class="divisao">
        <tr>
          <td><?= $dividend ?></td>
          <td><?= $divisor ?></td>
        </tr>
        <tr>
          <td><?= $remainder ?></td>
          <td><?= $quotient ?></td>
        </tr>
      </table>
    </ul>
  </section>
</body>

</html>