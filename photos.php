<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Photos</title>
  <meta name= "description" content= "A collection of photos i have for sale">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" media="print" href="css/print.css">

    <!-- JavaScript for slideshow starts here -->
  
  <!-- Load JQuery from Google so we can do fancy things -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
  <!-- a file named 'responsiveslides.min.js' is inside a directory named 'js' -->
  <script src="js/responsiveslides.min.js"></script>
  
<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>
<body>

<div class= "wrapper">


<header class="site-banner"> 
<img class= "cat"  src= "images/cat.png" alt= "A small cat logo">
 Welcome to my site!
<img class= "cat" src= "images/cat.png" alt= "A small cat logo">
</header>

<main class="main"> 

  <h2>PHOTOS</h2>
  
   <!-- HTML for the slideshow below -->

    <ul class="rslides">
      <li><img src="images/1.jpg" alt="black butterfly sitting on a leaf" width="800" height="400"></li>
      <li><img src="images/2.jpg" alt="purple flower in a field" width="800" height="400"></li>
      <li><img src="images/3.jpg" alt="building silohuette at sunset" width="800" height="400"></li>
    </ul>
	
<!-- HTML for the slideshow above -->


  
  
  
  <a href="#">Back to Top</a>
 
 
 
 </main>
  <aside class="sidebar">
<nav class="primary-menu">
   <ul>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="about-me.php">About Me</a></li>
	  <li><a href="photos.php">Photos</a></li>
	  <li><a href="paintings.php">Paintings</a></li>
	  <li><a href="contact-me.php">Contact Me</a></li>
   </ul>
   </nav>
</aside>

<footer class="site-footer"> <?php include('includes/footer.php');?> </footer>

 
</div> <!-- end of wrapper-->





</body>
</html>
  
 