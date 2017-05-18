<html>
  <head>
    <title> ERS </title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link href="css/APPLICATION.css" rel="stylesheet" media="screen">
  </head>


<body>

<div id="MAIN_WRAP">

<div class="NAV"> 

  <div class="LOGO">
    <a href="index.php">
    <img src="img/ER.png">
    </a>
  </div>

  <div class="NAV_ITEMS">
    <a href="studioA.php">Studio A</a>
    <a href="studioB.php">Studio B</a>
    <a href="staff.php">Staff</a>
    <a href="">Artists</a>
    <a href="contact.php">Contact</a>
  </div>

</div>



<div id="MARGIN_WRAP">

  <div class="BLOCKS">
  		<h1>Contact Us</h1>

      <div>
        Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Nullam quis risus eget urna mollis ornare vel eu leo.

      </div>

      <h1>Call Us at <a>913-645-5961</a></h1>

        <a href="https://www.facebook.com/elementrecordingstudios/" target="_blank">
          <img src="img/FB.png">
        </a>

        <a href="https://twitter.com/ElementRecord" target="_blank">
          <img src="img/TWIT.png">
        </a>

        <a href="https://soundcloud.com/element-recording" target="_blank">
          <img src="img/SC.png">
        </a>

        <a href="">
          <img src="img/YT.png" target="_blank">
        </a>
  </div>



  <div class="BLOCKS">
  		<form id="ajax-contact" method="post" action="mailer.php">
        
        <div class="FORM1">
          MESSAGE*<br>
          <textarea id="message" name="message" class="MESSAGE" required></textarea><br>
        </div>
        
        <div class="FORM0">
          NAME*<br>      
          <input type="text" id="name" name="name" required><br>
          E-MAIL*
          <input type="text" id="email" name="email" required><br>
          <input class="SEND" type="submit" value="SEND">
        </div>
      </form>
  </div>

</div>



   


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="js/jquery.superslides.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>