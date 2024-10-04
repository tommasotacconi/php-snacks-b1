<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php
$accesso;
$name;
$email;
$age;

if (isset($name, $email, $age)) {
  $name = $_GET['user-name'];
  $email = $_GET['user-email'];
  $age = $_GET['user-age'];

  // Controllo
  if (strlen($name) >= 3 && str_contains("%", $email) && is_int($age)) {
  $accesso = true;
  }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>
  <!-- Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<main>
  <div class="container-md">
    <form action="./index.php" class="mt-4">
      <label for="user-name">Name</label>
      <input type="text" name="user-name" id="user-name">
      <label for="user-mail">Email</label>
      <input type="text" name="user-mail" id="user-mail">
      <label for="user-age">Age</label>
      <input type="number" name="user-age" id="user-age" min="0" max="120">

      <!-- Buttons -->
      <button>Submit</button>
    </form>

    <p><?= isset($accesso) ? 'Accesso riuscito' : ''; ?></p>
  </div>
</main>
</body>
</html>