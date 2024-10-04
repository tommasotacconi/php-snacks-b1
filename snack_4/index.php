<?php
// File with data
include 'Classi-per-131.php';

$students_properties = array_keys($classi["Classe 1A"][0]);
// var_dump(array_keys($students_properties)[0]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students of code</title>
  <!-- Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <main>
    <div class="container-md">
      <h1 class="text-center py-2 mb-3">Students of coding language</h1>
      <section class="classes-cards">
        <div class="row">
          <?php foreach($classi as $class_name => $class_array) { ?>
          <div class="col single-class">
            <h2 class="text-center"><?= $class_name; ?></h2>
            <?php foreach ($class_array as $student) { ?>
            <h3><?= $student["nome"] . " " . $student["cognome"]; ?></h3>
            <ul>
              <li>
                <span class="student-property">
                  <?= $students_properties[0]; ?>:
                </span>
                <?= $student["id"]; ?>
              </li>
              <li>
                <span class="student-property">
                  <?= $students_properties[3]; ?>:
                </span>
                <?= $student["anni"]; ?>
              </li>
              <li>
                <span class="student-property">
                  <?= $students_properties[4]; ?>:
                </span>
                <?= $student["voto_medio"]; ?>
              </li>
              <li>
                <span class="student-property">
                  <?= $students_properties[5]; ?>:
                </span>
                <?= $student["linguaggio_preferito"]; ?>
              </li>
              <li>
                <span class="student-property">
                  <?= $students_properties[6]; ?>:
                </span>
                <?= $student["immagine"]; ?>
              </li>
            </ul>
            <?php } ?>
          </div>
          <?php } ?>
        </div>
      </section>
    </div>
  </main>
</body>
</html>