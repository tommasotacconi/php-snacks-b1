<?php 

require_once (__DIR__ . '/functions.php');

// Execute control for palindrome word
$result;
$not;
if (isset($_GET['palindrome-control'])) {
  $result = isPalindrome($_GET['palindrome-control']);
  
  // Decide to put 'not'
  $not = $result ? '' : 'non';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
  <main>
    <h1>Palindrome words checker</h1>
    <form action="" method="$_GET">
      <label for="palidrome_controll">Word to check</label>
      <input type="text" name="palindrome-control" id="palindrome-control">
    </form>

    <?php if (isset($_GET['palindrome-control'])) { ?>
      <p>La parola che hai inserito <?= $not; ?> è palindroma.</p>
    <?php } ?>
    
  </main>  
  </div> 
</body>
</html>