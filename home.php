<?php
echo <<< __HTML__
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  __HTML__.
  printTitle();
  <<< __HTML__
        <link rel="stylesheet" href="aux/default.css">
    </head>
  __HTML__.
  printHome();
    <<< __HTML__
    </html>
  __HTML__;

function printTitle() {
  echo <<< __HTML__
  <title>Title</title>
  __HTML__;
}

function printHome() {
  echo <<< __HTML__
  <body>
    <header>
      <nav class="user">
          <ul>
              <li><a href="http://localhost/Github/index.php?pg=account">My Account</a></li>
              <li><a href="#">Wish List</a></li>
              <li><a href="#">Shopping Cart</a></li>
          </ul>
      </nav>
      <h1>Art Store</h1>
      <nav>
          <ul>
              <li><a href="http://localhost/Github/home.php">Home</a></li>
              <li><a href="http://localhost/Github/aboutUs.php">About Us</a></li>
              <li><a href="#">Art Works</a></li>
              <li><a href="#">Artists</a></li>
          </ul>
      </nav>
    </header>
    <main>
    <p> Welcome to the Art Store. <p>
    </main>
  </body>
  __HTML__;
}
?>
