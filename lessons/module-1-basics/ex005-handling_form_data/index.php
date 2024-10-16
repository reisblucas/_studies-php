<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handling Form Data</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <!-- Required in all forms in php:
    Method
    Action 
    -->

  <!-- Input:
    Name
    Value
    -->

  <header>
    <h1>Handling Form Data</h1>
  </header>

  <section>
    <form action="cad.php" method="get">
      <label for="name">Name</label>
      <input id="idname" name="name" type="text">

      <label for="lastName">Last name</label>
      <input id="idLastName" name="lastName" type="text">

      <input type="submit" value="Send">
    </form>
  </section>
</body>

</html>