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
    <a href="/">
    <img src="img/ER.png">
    </a>
  </div>

  <div class="NAV_ITEMS">
    <a href="/studioA.php">Studio A</a>
    <a href="/studioB.php">Studio B</a>
    <a href="/staff.php">Staff</a>
    <a href="artists.php">Artists</a>
    <a href="/contact.php">Contact</a>
  </div>

</div>



<div id="MARGIN_WRAP">

  <div class="BLOCKS">
  		<h1>Contact Us</h1>

      <p>
        Interested in booking time with us?<br>
        Feel free to hollar via phone call or email. <br>
        You can also submit a direct message via the form to the right. <br>
      </p>

      <p>
        Pricing, rates, and policy information can be found on our<br>
        <a href="staff.php">Staff</a> page.
      </p>

      <p>
        Gear, space, and software information can be found on our<br>
        <a href="studioA.php">Studio A</a> and  <a href="studioB.php">Studio B</a> pages.
      </p>


      <h2>Phone: <a> 913-645-5961</a></h2>
      <h2>Email: <a> elementrecordingstudios@hotmail.com</a></h2>

  </div>



  <div class="BLOCKS">
  		<form id="ajax-contact" method="post" action="mailer.php">
        

          <span>NAME</span>     
          <input class="FORM0" type="text" id="name" name="name" required><br>
          <span>E-MAIL</span>
          <input class="FORM0" type="text" id="email" name="email" required><br>
          

        <div class="FORM1">
          <span>MESSAGE</span>
          <textarea id="message" name="message" class="MESSAGE" required></textarea>
          <br>
        </div>

        <input class="SEND" type="submit" value="SEND">

      </form>
  </div>

</div>


<footer>
  
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

  <div>2017 <span>|</span> Element Recording <span>Studios</span> </div>

</footer>
   


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="js/jquery.superslides.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>