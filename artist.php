<?php
 class Artist extends Database{
   public function get($id){

   }

   public function update($array){

   }

   public function saveData($save){

   }

   public function deleteData(){

   }

   public function getHtml(){
     echo <<< __HTML__
         <!DOCTYPE html>
         <html lang="en">
         <head>
             <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
             <title>Title</title>
             <link rel="stylesheet" href="aux/default.css">
         </head>
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
                         <li><a href="#">Home</a></li>
                         <li><a href="#">About Us</a></li>
                         <li><a href="#">Art Works</a></li>
                         <li><a href="#">Artists</a></li>
                     </ul>
                 </nav>
             </header>
             <main>
                 <form action="index.php" method="POST">
                   <p><label>Username: </label><input type="text" name="username" value="{$_POST['username']}" /></p>
                   <p><label>Password: </label><input type="text" name="password" value="{$_POST['password']}" /></p>
                   <p><label>Address Line 1: </label><input type="text" name="address1" value="{$_POST['address1']}" /></p>
                   <p><label>Address Line 2: </label><input type="text" name="address2" value="{$_POST['address2']}" /></p>
                   <p><label>City: </label><input type="text" name="city" value="{$_POST['city']}" /></p>
                   <p><label>State: </label><input type="text" name="state" value="{$_POST['state']}" /></p>
                   <p><label>Zipcode: </label><input type="text" name="zip" value="{$_POST['zip']}" /></p>
                   <input type="submit" value="Save Changes" />
                 </form>
             </main>

         </body>
         </html>
       __HTML__;

 }
?>
