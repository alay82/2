<?php include('includes/process.php');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact Me</title>
  <meta name= "description" content= "You can message me or purchase a photo or painting">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
    
<script>
 
function printDate() {
    var d = new Date();
    var day = d.getDate();
    var month = d.getMonth() + 1;
    var year = d.getFullYear();
    var hours = d.getHours();
    var minutes = d.getMinutes();
     
    if (minutes < 10) {
        minutes = "0" + minutes;
    }
 
    var suffix = "AM";
    if (hours >= 12) {
        suffix = "PM";
        hours = hours - 12;
    }
     
    if (hours == 0) {
        hours = 12;
    }
   document.write("It is " + hours + ":" + minutes + " " + suffix + " on " + month + "/" + day + "/" + year);
}
 
</script>

<?php print $formMessage;?>
<form class="assignment-form" method="post" action="index.php">
 
 
 <header class="site-banner"> 
<img class= "cat"  src= "images/cat.png" alt= "A small cat logo">
Contact Me
<img class= "cat" src= "images/cat.png" alt= "A small cat logo">
 
 <br>
 

</header>
  <div class= "wrapper">

<main class="main"> 
<img class= "picture" src= "images/Untitled.png" alt = "black and white painting">

    

 
<fieldset>
 
  <legend>Important Information</legend>
   
 
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
 
  <br>
  <br>
  
  <label for="email">Email:</label>
  <input type="text" id="email" name="email">
 
  <br>
  <br>
  
  <fieldset>
 
    <legend>Would you like to:</legend>
     
        <input type="radio" name="Baseball team" id="Cubs" value="Cubs">
     <label for="Cubs">Message me</label>
	 
	 <br>
	 
        <input type="radio" name="Baseball team" id="dislike" value="dislike">
	<label for="dislike">Purchase an item</label>
	
	<p>If you are looking to purchase an item, please put the corresponding letter or number in the comment box below.</p>
	
 
  </fieldset>
   
     
</fieldset> <!-- end of the parent "Personal Information" fieldset -->
 
<fieldset>
 
  <legend>Shipping</legend>
 
  <label for="moon">Do you live in the United States or Canada?</label>
  <select name="moon" id="moon">
    <option value="yes">Yes</option>
<option value="no">No</option>
  </select>
 
  <br>
  <br>
 
  <label for="comments">Comments</label>
  <br>
  <textarea name="comments" id="comments"></textarea>
 
</fieldset>
 
<input type="submit" value="submit">

 </main> 
 <aside class="sidebar">
<nav class="primary-menu">
   <ul>
      <li><a href="homepage.php">Home</a></li>
      <li><a href="about-me.php">About Me</a></li>
	  <li><a href="photos.php">Photos</a></li>
	  <li><a href="paintings.php">Paintings</a></li>
	  <li><a href="contact-me.php">Contact me</a></li>
   </ul>
   </nav>
</aside>
  </div>
   
  <footer class="site-footer"> <?php include('includes/footer.php');?> </footer>
 </form>