<!DOCTYPE html>
<head>

  <meta charset="UTF-8">
  <title>Upload Challenge</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,900" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script type="text/javascript" src="Main.js"></script>
</head>
<html lang="en">
<body>
<div class= "fixed-top"> <!--all of navbar is fixed to top-->

  <div id="showBanner1"> <!-- ShowBanner1 and 2 are only used for javascript-->

    <div class="bannerSmall d-none d-md-block fixed-top"> <!-- fixed top has priority z-index, so it allows us to change margin of bigheader without changing height-->
      <div><a class="about" href="">about</a></div>
    </div>

    <div class="bannerBig d-none d-md-block">
      <div id="bigHeader" ><p>Hangman</p></div>
      <div id="tagLine"><p>A GAME THAT WILL MAKE YOU SAY "WORD!"</p></div>
    </div>
  </div>

  <div id="showBanner2">

    <div class="collapseBanner d-none d-md-block">
      <div><p>Hangman</p></div> <!--This banner only shows when screen is larger then md-->
    </div>

  </div>


  <nav class="navbar navbar-expand-md navbar-light" style="background-color: #272727;">
    <!--navbar-dark/light changes font colors-->
    <!--Put id to collapse here-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> <!--This creates that button that allows us to expand the nav items when collapsed at sm-->
    </button>

    <div class="d-md-none collapseHeader">Hangman</div>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <!-- name id if want to collapse-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  menuSectionColor1" href="index.php">MAIN MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menuSectionColor2" href="singleplayer.php">SINGLE PLAYER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menuSectionColor3" href="multiplayer.php">MULTIPLAYER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menuSectionColor4" href="uploadchallenge.php">UPLOAD CHALLENGE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menuSectionColor5" href="reportbug.php">REPORT BUG</a>
        </li>
        <li class="nav-item">
          <a class="aboutNav nav-link menuSectionColor7" href="">About us</a>
        </li>
      </ul>
    </div>
  </nav>

</div>



<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-7 roboFont">
      <h1 id="aboutHeader">Upload Challenge</h1>
      <br/>
      <br/>


<form action="writeData.php" method="post">
<label>Word:</label>
<input type="text" name="word"/><br>
<label>Hint:</label>
<input type="text" name="hint"/><br>
<input type="submit" name=submit value="Submit"/>
</form>
<br/>
      <!-- <form>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"> Enter a hint that will help the player guess the correct word.</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="He lives in a pineapple" rows="1" name="hint"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1"> Enter a word or phrase the player needs to guess.</label>
          <textarea class="form-control" id="exampleFormControlTextarea2" placeholder="SpongeBob SquarePants" rows="1"
          name="word"></textarea>
          <br/>
          <button type="button" id ="mynewbutton" class="btn btn-primary">SUBMIT</button>

        </div>
      </form> -->
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
    </div>




  </div>
</div>

<div class="bottomBanner container-fluid">
  <div class="row justify-content-center align-items-center">
    <div class="coll-md-7">
      <p class="txtr">COPYRIGHT &copy; 2018 WASHINGTON STATE UNIVERSITY VANCOUVER</p>
    </div>
  </div>

</div>
<script type="text/javascript" src="jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
<script type="text/javascript">

  $(".menuSectionColor4").css("border-top-color", "#87C232");
  $(".menuSectionColor4").css("borderWidth", "5px");

  $(".nav-link").hover(function () {
    if(this.textContent === "REPORT BUG"){
      $(this).css("border-top-color", "#FF7572");
    }
    else {
      $(this).css("border-top-color", "#87C232"); //generate random color for border
    }
    if(this.textContent !== "UPLOAD CHALLENGE"){
      $(this).stop().animate({ //executes this while hovering

        borderWidth: "5px", //increase width of border
      }, 200);}
  }, function () { //executes when done hovering
    if(this.textContent !== "UPLOAD CHALLENGE"){
      $(this).stop().animate({

        borderWidth: "0px", //decrease width of border
      }, 200);}
  });

  $('#showBanner2').hide(); //initially hide small banner


  if ($(window).scrollTop() > 100 && $(window).width() > 768) { //initial check of how far user has scrolled
    $('#showBanner1').hide();                                 //when refreshing page.
    $("#showBanner2").show();
    //  $(".navbar").css("margin-top", "-50px");
  }
  ///////////////Function to animate banner when scrolling.
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() > 100 && $(window).width() > 768) {
        $('#showBanner1').hide();
        $('#showBanner2').show();
        // $(".navbar").css("margin-top", "-50px");
      }
      else {
        $('#showBanner1').show();
        $('#showBanner2').hide();
        // $(".navbar").css("margin-top", "-80px");

      }
    });
  });

</script>
</body>
</html>