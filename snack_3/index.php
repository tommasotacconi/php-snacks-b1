<?php
/*  Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */
$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <main class="p-3">
    <div class="bg-secondary">
      <h1>Teachers:</h1>
      <ul>
        <?php
        $teachers = $db['teachers'];
        foreach ($teachers as $teacher) { ?>
        <li>
          <span class="info">Teacher's firstname:</span> <?=  $teacher['name']; ?><br>
          <span class="info">Teacher's surname:</span> <?=  $teacher['lastname']; ?>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div class="bg-success-subtle">
      <h1>Pms:</h1>
      <ul>
        <?php
        $pms = $db['pm'];
        foreach ($pms as $pm) { ?>
        <li>
          <span class="info">Pm's firstname:</span> <?=  $pm['name']; ?><br>
          <span class="info">Pm's surname:</span> <?=  $pm['lastname']; ?>
        </li>
        <?php } ?>
      </ul>
    </div>
  </main>
  
</body>
</html>