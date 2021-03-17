<?php
 echo <<< __HTML__
  <html>
    <body>
      <form action="reviewsystem.php" method="POST" />
        <legend>Review feature</legend>
        <p>
          <label>Rate 1 (Worst) out of 5 (Best)</label><br>
          <input type="range" name="Rating" min="1" max="5" />
        </p>
        <p>
          <textarea name="Review" rows="8" cols="80"
          placeholder="Write your review here..."></textarea>
        </p>
        <input type="submit" />
      </form>
    </body>
  </html>
 __HTML__;

 if($_POST["Rating"] != ""){
   echo $_POST["Rating"];
 }
 echo "<br>";
 if($_POST["Review"] != ""){
   echo $_POST["Review"];
 }
?>
