<?php
$to = 'elmirnicolas@gmail.com';
$subject = 'From Carpolo Website';
$name = $_POST['#name_box'];
$from = $_POST['#email_box'];
$text = $_POST['#message_box'];

$message = <<<EMAIL
From: $name , $from
Message:
$text
EMAILs;

if($_POST){
mail($to ,  $subject,  $message )
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Carpolo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="image/ico" href="assets/img/logo.png"/>
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/bootstrap/fonts/font-awesome.min.css">
</head>

<body>

<!-- header  start-->
<div class="row">
    <div class="col-md-12">
      <nav id="navbar" style="background:transparent;" class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                  <div class="navbar-header"><a style="color:#5E6263;" class="navbar-brand navbar-link" href="#"><img src="assets/img/0.png" width="100px" height="100px" style="margin-top:-40px;" alt="" /></a>
                      <button class="navbar-toggle collapsed" style="border-color:transparent;" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span  class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                  </div>
                  <div class="collapse navbar-collapse" id="navcol-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li  role="presentation"><a id="navbar-li" style="color:white;" href="#section2">The App </a></li>
                          <li  role="presentation"><a id="navbar-li3" style="color:white;" href="#section4">Contact </a></li>
                          <li  role="presentation"><a id="navbar-li4" style="color:white;" href="#section5">Awards </a></li>
                          <li  role="presentation"><a id="navbar-li4" style="color:white;" href="#section5">Get The App</a></li>
                      </ul>
                  </div>
              </div>
          </nav>
    </div>
</div><!-- header  end -->



<!-- mobile demo start -->
    <div id="" style="background-image:url('assets/img/landingPage.jpg');" class="jumbotron hero-technology">
      <img src="assets/img/logo.png" width="150px" height="150px" style="text-align:center;" alt=""  />

        <p class="hero-subtitle">Real Time, Community Based, and Achievements Driven Carpooling Mobile App</p>
        <p></p>
    </div>
    <div id="section2" class="row row1">
        <div class="col-md-4 phone1">
            <div class="iphone-mockup"><img src="assets/img/iphone.svg" class="device">
                <div class="screen"><img src="assets/img/20151223141224 (1).jpg" class="phoneimg"></div>
            </div>
            <h2 class="under-title">Choose your commuting Mode</h2>
            <div class="alert alert-success two" role="alert"><span> </span></div>
        </div>
        <div class="col-md-4 phone2">
            <div class="iphone-mockup"><img src="assets/img/iphone.svg" class="device">
                <div class="screen"><img src="assets/img/20151223141224 (2).jpg" class="phoneimg"></div>
            </div>
            <h2 class="under-title">Center your map for start and end locations</h2>
            <div class="alert alert-success one" role="alert"><span> </span></div>
        </div>
        <div class="col-md-4 phone3">
            <div class="iphone-mockup"><img src="assets/img/iphone.svg" class="device">
                <div class="screen"><img src="assets/img/20151223141224.jpg" class="phoneimg"></div>
            </div>
            <h2 class="under-title">View li ve locations of accepted carpoolers</h2>
            <div class="alert alert-success" role="alert"><span> </span></div>
        </div>
    </div>
    <div id="section3" class="row section3">

<div class="col-md-4"></div> <!-- mobile demo end -->

       <!-- vote section starts -->
        <div class="col-md-4">
            <h1 class="uni title">Add your university it needs t o be 2 lines </h1>
            <button  class="btn btn-default uni button" id="uni-btn" type="button" data-toggle="modal" data-target="#unimodal">Hurry up </button>
        </div>

        <div class="col-md-4"></div><!-- vote section end -->



    </div>
  </div> <!-- Contact Start -->
    <div style="margin-top:0px"; id="section4" class="row contact-row">
        <div class="col-md-12">
            <h1 class="text-center">Say Hi ! </h1></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">

        <form class="" method="post">
            <div class="form-group">
              <input type="text" class="form-control hide-s" id="name_box" placeholder="Name">
            </div>

            <div class="form-group">
              <input type="text" class="form-control hide-s" id="email_box" placeholder="Email Addres">
            </div>

            <div class="form-group">
              <textarea class="form-control" rows="5" id="message_box" placeholder="Say something"></textarea>
            </div>

            <button type="button" class="btn btn-default send" name="button">Send</button>
          </form>

        </div><!-- Contact end -->
        <div id="section5" class="col-md-12"><!-- Footer starts -->
            <footer class="site-footer">
                <div id="middle">
                  <a href="https://www.aub.edu.lb/news/2015/Pages/carpooling-abillama.aspx"><img alt="AUB Logo" height="50" src="assets/img/1.png" width="72"></a>
                  <img alt="NCC Logo" height="50" src="assets/img/2.jpg" width="72"> <img alt="SCAEEE Logo" height="40" src="assets/img/3_t.jpg" width="75"> <a href="http://speedlebanon.com/startups/"><img alt="SpeedAcclerator Logo" height="50" src="assets/img/4.png" width="80"></a> <a href="http://www.bau.edu.lb/North_Startup_Weekend_Tripoli"><img alt="StartupWeekend Logo" height="50" src="assets/img/5.png" width="85"></a> <a href="http://www.wamda.com/2015/09/ride-sharing-app-wins-20k-in-aub-contest"><img alt="wambda Logo" height="50" src="assets/img/6.jpg" width="80"></a> <a href="http://news.arabnet.me/startups-beirut-speed-accelerator-siliconvalley"><img alt="arabnet Logo" height="50" src="assets/img/7_t.png" width="95"></a> <a href="http://www.lorientlejour.com/article/946786/speed-accelere-sa-premiere-promotion-de-start-up.html"><img alt="lorientlejour Logo" height="50" src="assets/img/8.png" width="72"></a></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Carpolo © 2016</h5></div>
                        <div class="col-sm-6 social-icons"><a href="#"><span class="fa fa-facebook"></span></a><a href="#"><span class="fa fa-twitter"></span></a><a href="#"><span class="fa fa-instagram"></span></a></div>
                    </div>
                </div>
            </footer>
        </div>
    </div><!-- Footer end -->

<!-- Voting Modal starts here -->
<div class="modal fade" id="unimodal" role="dialog">
       <div class="modal-dialog">
         <!-- Modal content-->
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title" style="text-align:center;">Vote for your uni !</h4>
           </div>
           <div class="modal-body">
              <input id="uni-email" class="form-control" type="email" name="email" value="" placeholder="Your University Email">

              <div style="text-align:left; margin-top:20px;">
                       <select id="uni-name" class="form-control" id="sel1">
                           <option value="select">Select your university</option>
                           <option value="AUB">AUB</option>
                           <option value="BAU">BAU</option>
                           <option value="LAU">LAU</option>
                           <option value="USEK">USEK</option>
                           <option value="USJ">USJ</option>
                       </select>

            <div id="results_container">
                <h5 class="vote_item">AUB: <span id="aubres"></span> votes</h5>
                <h5 class="vote_item">BAU: <span id="baures"></span> votes</h5>
                <h5 class="vote_item">LAU: <span id="laures"></span> votes</h5>
                <h5 class="vote_item">USEK: <span id="usekres"></span> votes</h5>
                <h5 class="vote_item">USJ: <span id="usjres"></span> votes</h5>
            </div>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default"  data-toggle="modal" data-target="#thanksmodal"  id="uni-submit">Done , See results !</button>
           </div>
         </div>
       </div>
     </div> <!-- Voting Modal ends here -->


    <section class="testimonials"></section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://parse.com/downloads/javascript/parse-1.6.12.js"></script>
    <script src="http://underscorejs.org/underscore.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js" type="text/javascript"></script>
</body>

<script type="text/javascript">

$(document).ready(function(event){
  $("#results_container").hide();
//on scroll for navbar
  $(document).scroll(function(){
        $("#navbar").css("background-color", "#5E6263");
        $("#navbar-li").css("color", "white");
        $("#navbar-li2").css("color", "white");
        $("#navbar-li3").css("color", "white");
        $("#navbar-li4").css("color", "white");
    });
//iniatializing parse
  Parse.initialize("aOXZ3I0TAEEqKGZmBcsZKA9lPhduk9uYviqlGwBM", "7xnzHZK7mxCoK0jrDUwY01hB7KlWRbB8e6YUpImN");
  var user = Parse.Object.extend("User");

  //getting the votes and priting it to the dom
function getVotes(){

      var  theforce=[];
var query = new Parse.Query(user);
  query.find({
    success: function(results) {
        for(var i in results){
      var uni=results[i].get("university");
      theforce.push(uni);
     }
    // console.log(theforce)
      var arrow = _.countBy(theforce);
      $('#aubres').html(arrow.AUB);
      $('#baures').html(arrow.BAU);
      $('#laures').html(arrow.LAU);
      $('#usekres').html(arrow.USEK);
      $('#usjres').html(arrow.USJ);
    },
    error: function(error) {
      console.log("Query error:"+error.message);
    }
    });
}
getVotes();

//signin up to parse and checking the email address
 $("#uni-submit").click(function(event){
   event.preventDefault();

   var email = $("#uni-email").val();
   var pass = "passs";
   var university = $("#uni-name").val();

   var newUser = new user();
   newUser.set("email",email);
   newUser.set("password",pass);
   newUser.set("username",email);
   newUser.set("university",university);

//saving the user
   newUser.save(null,{success:function(){
      console.log('Success');
      $(".modal-title").html("You Did it !");
      $(".modal-title").css("color", "white");
      $(".modal-header").css("background-color", "lightgreen");
   }, error: function(user , error){
      console.log("There's an error , change your email !");
      $(".modal-title").html("This email was used before");
      $(".modal-title").css("color", "white");
      $(".modal-header").css("background-color", "red");
   }});

//shwing votes  container
 $("#results_container").show();

  });

//some css changes
 $("#uni-btn").click(function(event){
   $(".modal-title").html("Vote for you uni !");
   $(".modal-title").css("color", "black");
   $(".modal-header").css("background-color", "transparent");
 });




});

  </script>
</html>
