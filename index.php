<?php
error_reporting(E_ALL);
 include 'database.php';
 include 'artwork.php';
 include 'artist.php';
require("util.php");
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
  printBody();
    <<< __HTML__
    </html>
  __HTML__;

function printTitle() {
  echo <<< __HTML__
  <title>Title</title>
  __HTML__;
}

function printBody() {
  switch ($_GET['pg']) {

    case 'artwork':
    if(isset($_GET['id'])){
      $artwork = new Artwork($_GET['id']);
      echo $artwork->getHtml();
    }
    else{
      $artworkList = Artwork::getAllArtwork();
      foreach($artworkList as $id => $name){
        echo <<< __HTML__
        <li><a href="?pg=artwork&id=$id">$name</a></li>
        __HTML__;
      }
    }
    break;

    case 'artist':
    if(isset($_GET['id'])){
      $artist = new Artist($_GET['id']);
      echo $artist->getHtml();
    }
    else{
      $artistList = Artist::getAllArtists();
      foreach($artistList as $id => $name){
        echo <<< __HTML__
        <li><a href="?pg=artist&id=$id">$name</a></li>
        __HTML__;
      }
    }
    break;

    default:
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
                    <li><a href="http://localhost/Github/index.php?pg=artwork">Art Works</a></li>
                    <li><a href="http://localhost/Github/index.php?pg=artist">Artists</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <article class="artwork">
                <h2 class="art_title">Self-portrait in a Straw Hat</h2>
                <p class="artist">By <a href="#">Louise Elisabeth Lebrun</a></p>uo
                <figure><img src="artwork/medium/13.jpg" alt="Self-portrait in a Straw Hat" title="Self-portrait in a Straw Hat">
                    <figcaption>
                        <p>The painting appears, after cleaning, to be an autograph replica of a picture, the original of which was painted in Brussels in 1782 in free imitation of Rubens’s ’Chapeau de Paille’, which LeBrun had seen in Antwerp. It was
                            exhibited in Paris in 1782 at the Salon de la Correspondance. LeBrun’s original is recorded in a private collection in France.</p>
                        <p class="list_price">$700</p>
                        <div class="actions"><a href="#">Add to Wish List</a><a href="#">Add to Shopping Cart</a></div>
                        <table class="artwork_info">
                            <caption>Product Details</caption>
                            <tbody>
                                <tr>
                                    <td class="facet">Date:</td>
                                    <td class="value">1782</td>
                                </tr>
                                <tr>
                                    <td class="facet">Medium:</td>
                                    <td class="value">Oil on canvas</td>
                                </tr>
                                <tr>
                                    <td class="facet">Dimension:</td>
                                    <td class="value">98cm x 71cm</td>
                                </tr>
                                <tr>
                                    <td class="facet">Home:</td>
                                    <td class="value"><a href="#">National Gallery, London</a></td>
                                </tr>
                                <tr>
                                    <td class="facet">Genres:</td>
                                    <td class="value"><a href="#">Realism</a>, <a href="#">Rococo</a></td>
                                </tr>
                                <tr>
                                    <td class="facet">Subjects:</td>
                                    <td class="value"><a href="#">People</a>, <a href="#">Arts</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </figcaption>
                </figure>
            </article>
            <h2>Similar Artwork</h2>
            <article class="related">
                <div class="relatedArt">
                    <figure><img src="artwork/small/293.jpg" alt="Still Life with Flowers in a Glass Vase" title="Still Life with Flowers in a Glass Vase">
                        <figcaption>
                            <p><a href="#293">Still Life with Flowers in a Glass Vase</a></p>
                        </figcaption>
                    </figure>
                    <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
                </div>
                <div class="relatedArt">
                    <figure><img src="artwork/small/183.jpg" alt="Portrait of Alida Christina Assink" title="Portrait of Alida Christina Assink">
                        <figcaption>
                            <p><a href="#183">Portrait of Alida Christina Assink</a></p>
                        </figcaption>
                    </figure>
                    <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
                </div>
                <div class="relatedArt">
                    <figure><img src="artwork/small/820.jpg" alt="Self-portrait" title="Self-portrait">
                        <figcaption>
                            <p><a href="#820">Self-portrait</a></p>
                        </figcaption>
                    </figure>
                    <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
                </div>
                <div class="relatedArt">
                    <figure><img src="artwork/small/374.jpg" alt="William II, Prince of Orange, and his Bride, Mary Stuart" title="William II, Prince of Orange, and his Bride, Mary Stuart">
                        <figcaption>
                            <p><a href="#374">William II, Prince of Orange, and his Bride, Mary Stuart</a></p>
                        </figcaption>
                    </figure>
                    <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
                </div>
                <div class="relatedArt">
                    <figure><img src="artwork/small/849.jpg" alt="Milkmaid" title="Milkmaid">
                        <figcaption>
                            <p><a href="#849">Milkmaid</a></p>
                        </figcaption>
                    </figure>
                    <div class="actions"><a href="#">View</a><a href="#">Wish</a><a href="#">Cart</a></div>
                </div>
            </article>
        </main>
        <footer>
            <p>All images are copyright to their owners. This is just a hypothetical site ©2020 Copyright Art Store</p>
        </footer>

    </body>
    __HTML__;
      break;

    case 'account':
      accountDetails();
      break;
  }
}

function accountDetails() {
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
  __HTML__;
}
?>
