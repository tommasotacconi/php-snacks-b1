<?php
// File with data
include 'Classi-per-131.php';

// Define properties for a students in a indexe array
$students_properties = array_keys($classi["Classe 1A"][0]);
// var_dump(array_keys($students_properties)[0]);

// Initialize a variable to store filter result
$filtered_classes = [];

// Filter students per student's school average above 6
/* foreach ($classi as $class_name => $class) {
  $filtered_class = [];
  foreach ($class as $student) {
    if ($student["voto_medio"] >= 6) {
      $filtered_class[] = $student;
    }
  }
  $filtered_classes[$class_name] = $filtered_class;
}
 */

// Initialize a maximum average to use it whes set from form
$max_average;
// Filter students per school average under selected mean vote
if (isset($_GET['max-average'])) {
  $max_average = $_GET['max-average'];
  // echo '$max_average vale ' . $max_average;
  foreach ($classi as $class_name => $class) {
    $filtered_class = [];
    foreach ($class as $student) {
      if ($student["voto_medio"] <= $max_average) {
        $filtered_class[] = $student;
      }
    }
    $filtered_classes[$class_name] = $filtered_class;
  }
}

// Set var $classi equal to filter result ($filtered_class)
if(isset($filtered_classes) && !empty($filtered_classes)) {
  // echo 'if di settaggio $classi';
  $classi = $filtered_classes;
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students of code</title>
  <!-- Link -->
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- style -->
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  <h1 class="text-center py-2 mb-3">Students of coding language</h1>
  
  <div class="container-md">
    <!-- Form -->
    <form action="" class="form-control py-2 my-4 w-50 m-auto">
      <label class="mb-1" for="max-average">Max school average visible</label><br>
      <select class="form-select w-25" name="max-average" id="max-average">
        <?php for($i = 1; $i <= 10; $i++) { ?>
        <option name="<?= $i; ?>" value="<?= $i; ?>">
        <?= $i; ?>
        </option>
        <?php }; ?>
      </select>

      <!-- Buttons -->
      <button class="btn btn-info mt-4">Submit</button>
    </form>

    <!-- Page contents -->
    <main>
      <?php foreach($classi as $class_name => $class_array) { ?>
      <section class="class border border-3 border-info-subtle p-4 my-5 rounded-2">
        <!-- Class name -->
        <h2 class="text-center mb-3"><?= strtoupper($class_name); ?></h2>
        <div class="row row-cols-4 gy-4">
          <!-- Single student column and card -->
          <?php foreach ($class_array as $student) { ?>
          <div class="col">
            <div class="card">

              <!-- Card image -->
              <img src="<?= $student["immagine"]; ?>" alt="" class="card-img-top">
              
              <!-- Card body -->
              <div class="card-body">
                <!-- Card title -->
                <h3 class="card-title"><?= $student["nome"] . " " . $student["cognome"]; ?></h3>
                <!-- Card text -->
                <div class="card-text">
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
                      <a href="<?= $student["immagine"]; ?>"><?= $students_properties[6]; ?></a>
                    </li>
                  </ul>
                </div>                
              </div>

            </div>
          </div>
          <?php } ?>
        </div>
      </section>
      <?php } ?>
    </main>
</body>
</html>