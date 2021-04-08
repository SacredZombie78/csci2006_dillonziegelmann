<?php
 class Artist extends Database{

   private $variable1;

   public static function getAllArtists(){
     $pdo = Connect();
     $sql = "SELECT artist_id, artist_fullName FROM artist";

     $result = $pdo->query($sql);

     $artistArray = [];

     while ($row = $result->fetch()){
       $artistArray[$row['artist_id']] = $row['artist_fullName'];
     }
     return $artistArray;
   }

   public function get($id){
     $pdo = Connect();
     $sql = "SELECT * FROM artist WHERE artist_id = $id";

     $result = $pdo->query($sql);

     while ($row = $result->fetch()){
       return $row;
     }
   }

   public function getArtistName(){
     return $this->variable1['artist_fullName'];
   }

   public function getArtistLastName(){
     return $this->variable1['artist_lastName'];
   }

   public function getArtistBirthdate(){
     return $this->variable1['artist_born'];
   }

   public function getArtistDeathdate(){
     return $this->variable1['artist_died'];
   }

   public function getArtistOrigin(){
     return $this->variable1['artist_origin'];
   }

   public function getArtistInfluence(){
     return $this->variable1['artist_influence'];
   }

   public function getArtistDesc(){
     return $this->variable1['artist_desc'];
   }

   public function update($array){
     $pdo = Connect();
     $sql = "UPDATE artist SET artist_fullName = {$this->variable1}, artist_lastName = {$this->variables1}, artist_born = {$this->variables1}, artist_died = {$this->variables1},
      artist_origin = {$this->variable1}, artist_influence = {$this->variables1}, artist_desc = {$this->variable1} WHERE artist_id = $id";

     $result = $pdo->query($sql);
   }

   public function saveData($save){
     $pdo = Connect();
     $sql = "INSERT INTO";

     $result = $pdo->query($sql);
   }

   public function deleteData(){
     $pdo = Connect();
     $sql = "DELETE FROM artist WHERE artist_id = $id";

     $result = $pdo->query($sql);
   }

   public function getHtml(){

     $fullName = $this->getArtistName();
     $lastName = $this->getArtistLastName();
     $born = $this->getArtistBirthdate();
     $dead = $this->getArtistDeathdate();
     $origin = $this->getArtistOrigin();
     $influence = $this->getArtistInfluence();
     $desc = $$this->getArtistDesc();

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
                 <h2>$fullName</h2>
                 <p>Artist Lastname: $lastName</p>
                 <p>Artist Birthdate: $born</p>
                 <p>Artist Deathdate: $dead</p>
                 <p>Artist Origin:  $origin</p>
                 <p>Artist Influence: $influence</p>
                 <p>Artist Description: $desc</p>
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
