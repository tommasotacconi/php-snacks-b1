<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Title -->
  <title>Posts list</title>
  <!-- Link -->
  <link rel="stylesheet" href="./style/style.css">
</head>
<body>
  <main>
    <div class="container">
      <h1>Lista dei post</h1>
      <ul>
        <?php foreach ($posts as $postDate => $postDateArray) { ?>
        <h1>Post date: <?= $postDate ?></h1>  
        <?php foreach ($postDateArray as $post) { ?>
        <ul>
          <li>
          <h2><?= $post['title'] ?>:</h2>
          <span class="post-author">Autore del post</span> <span class="author-text-content"><?= $post['author'] ?></span><br>
          <span class="post-text">Testo</span> <span class="post-text-content"><?= $post['text'] ?></span>
          </li>
        </ul>
          <?php } ?>
        <?php } ?>
      </ul>
    </div>
  </main>
</body>
</html>