<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: ./");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/dashboard.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar"></nav>
    <br>
    <p>Selamat datang <?php echo $_SESSION["username"];?>. Kamu sebagai <?php echo $_SESSION["type"];?></p><br>
    <br>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut odio sequi
      blanditiis omnis at nihil. Exercitationem dolor doloribus voluptatem culpa
      hic nemo nostrum ut veniam recusandae, vel eligendi incidunt optio eum
      natus unde corporis libero ullam voluptate dolore ipsum cumque aperiam
      consequatur accusantium iure! Deleniti ab, beatae sit provident dicta
      exercitationem nisi consequuntur atque est aspernatur rem sapiente iste
      aliquam debitis eum ea eveniet, quisquam ratione! Accusantium similique
      aspernatur eveniet nobis? Dolore corporis incidunt quas veniam non quasi
      dolores nam qui sequi asperiores? Nulla quam modi inventore, deserunt
      ratione quod iusto amet doloribus, beatae, aperiam excepturi similique hic
      animi maxime!
    </p>
    <br />
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut odio sequi
      blanditiis omnis at nihil. Exercitationem dolor doloribus voluptatem culpa
      hic nemo nostrum ut veniam recusandae, vel eligendi incidunt optio eum
      natus unde corporis libero ullam voluptate dolore ipsum cumque aperiam
      consequatur accusantium iure! Deleniti ab, beatae sit provident dicta
      exercitationem nisi consequuntur atque est aspernatur rem sapiente iste
      aliquam debitis eum ea eveniet, quisquam ratione! Accusantium similique
      aspernatur eveniet nobis? Dolore corporis incidunt quas veniam non quasi
      dolores nam qui sequi asperiores? Nulla quam modi inventore, deserunt
      ratione quod iusto amet doloribus, beatae, aperiam excepturi similique hic
      animi maxime!
    </p>
    <br />
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut odio sequi
      blanditiis omnis at nihil. Exercitationem dolor doloribus voluptatem culpa
      hic nemo nostrum ut veniam recusandae, vel eligendi incidunt optio eum
      natus unde corporis libero ullam voluptate dolore ipsum cumque aperiam
      consequatur accusantium iure! Deleniti ab, beatae sit provident dicta
      exercitationem nisi consequuntur atque est aspernatur rem sapiente iste
      aliquam debitis eum ea eveniet, quisquam ratione! Accusantium similique
      aspernatur eveniet nobis? Dolore corporis incidunt quas veniam non quasi
      dolores nam qui sequi asperiores? Nulla quam modi inventore, deserunt
      ratione quod iusto amet doloribus, beatae, aperiam excepturi similique hic
      animi maxime!
    </p>
    <br />
    <a href="logout.php">Logout</a>
  </body>
</html>
