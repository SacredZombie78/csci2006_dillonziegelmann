<?php
 class Artwork extends Database{

   private $variable1;

   public static function getAllArtwork(){
     $pdo = Connect();
     $sql = "SELECT artwork_id, artwork_name FROM artwork";
   
     $result = $pdo->query($sql);

     $artworkArray = [];

     while ($row = $result->fetch()){
       $artworkArray[$row['artwork_id']] = $row['artwork_fullName'];
     }
     return $artworkArray;
   }

   public function get($id){
     $pdo = Connect();
     $sql = "SELECT * FROM artwork WHERE artwork_id = $id";

     $result = $pdo->query($sql);

     while ($row = $result->fetch()){
       return $row;
     }
   }

   public function getArtworkArtist(){
     return $this->variable1['artwork_artist'];
   }

   public function getArtworkName(){
     return $this->variable1['artwork_name'];
   }

   public function getArtworkReprintPrice(){
     return $this->variable1['artwork_reprintPrice'];
   }

   public function getArtworkDesc(){
     return $this->variable1['artwork_desc'];
   }

   public function update($array){
     $pdo = Connect();
     $sql = "UPDATE artwork SET WHERE artwork_id = $id";

     $result = $pdo->query($sql);
   }

   public function saveData($save){
     $pdo = Connect();
     $sql = "PHP to be type here";

     $result = $pdo->query($sql);
   }

   public function deleteData(){
     $pdo = Connect();
     $sql = "DELETE FROM artwork WHERE artwork_id = $id";

     $result = $pdo->query($sql);
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
                   <li><a href="http://localhost/Github/home.php">Home</a></li>
                   <li><a href="http://localhost/Github/aboutUs.php">About Us</a></li>
                   <li><a href="http://localhost/Github/index.php?pg=artwork">Art Works</a></li>
                   <li><a href="http://localhost/Github/index.php?pg=artist">Artists</a></li>
                   </ul>
               </nav>
           </header>
           <main>
               <h2>getArtworkName();</h2>
               <p><a href="http://localhost/Github/index.php?pg=artist&id=$id">Artist</a></p>
               <p>ReprintPrice: getArtworkReprintPrice();</P>
               <p>Description: getArtworkDesc();</p>
           </main>
       </body>
         </html>
       __HTML__;

   }

   function __construct($id){
     parent::__construct($id);
     $this->variable1 = $this->get($id);
   }

 }
?>
