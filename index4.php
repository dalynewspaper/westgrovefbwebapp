<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Facebook Competition</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style4.css" />
        <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
        <!--hosted jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>



    </head>

    <?php if ($_GET['wrong'] == "1"): ?>
    <script type="text/javascript">
     alert('Wrong Answer, please try again');
    </script>
    <?php endif; ?>

    <body id="page">
<div id="fb-root"></div>
<script>
    
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '253770041416929', // App ID
    channelUrl : '//westgrovefbwebapp.azurewebsites.net/channel.html', // Channel File
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true  // parse XFBML
  });

  FB.getLoginStatus(function (response) {
  console.log(response);
  
      if (response === "connected")
          $('#competition-form').show();
      
  });

  // Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
  // for any auth related change, such as login, logout or session refresh. This means that
  // whenever someone who was previously logged out tries to log in again, the correct case below
  // will be handled.
  FB.Event.subscribe('auth.authResponseChange', function(response) {
    // Here we specify what we do with the response anytime this event occurs.
    if (response.status === 'connected') {
      // The response object is returned with a status field that lets the app know the current
      // login status of the person. In this case, we're handling the situation where they
      // have logged in to the app.
      $('#competition-form').show(); /* jquery to display the form after login*/

    } else if (response.status === 'not_authorized') {
      // In this case, the person is logged into Facebook, but not into the app, so we call
      // FB.login() to prompt them to do so.
      // In real-life usage, you wouldn't want to immediately prompt someone to login
      // like this, for two reasons:
      // (1) JavaScript created popup windows are blocked by most browsers unless they
      // result from direct user interaction (such as a mouse click)
      // (2) it is a bad experience to be continually prompted to login upon page load.
      FB.login();
    } else {
      // In this case, the person is not logged into Facebook, so we call the login()
      // function to prompt them to do so. Note that at this stage there is no indication
      // of whether they are logged into the app. If they aren't then they'll see the Login
      // dialog right after they log in to Facebook.
      // The same caveats as above apply to the FB.login() call here.
      FB.login();
    }
  });
  };

  // Load the SDK asynchronously
  (function(d){
   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement('script'); js.id = id; js.async = true;
   js.src = "https://connect.facebook.net/en_US/all.js";
   ref.parentNode.insertBefore(js, ref);
  }(document));

  // Here we run a very simple test of the Graph API after login is successful.
  // This testAPI() function is only called in those cases.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Good to see you, ' + response.name + '.');
    });
  }
</script>
                

        <div class="container">
        
            <header>

                <h1> <span>Facebook Comepetition</span></h1>
                <h2>Enter our competition to be in with a chance of winning</h2>
				<p class="codrops-demos">
					<a href="index.php">home</a>
					<a href="index2.php"> hotel</a>
					<a href="index3.php">weddings</a>
                                        <a href="contactform.php">contact us</a>
					<a class="current-demo" href="index4.php">facebook competition</a>
				</p>
                <div id="top_right">
                    <a href="https://twitter.com/westgrovehotel" class="twitter-follow-button" data-show-count="false">Follow @westgrovehotel </a>

                <script align="right">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                 if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                </script>

                </div>
            </header>
        </div>






    <!--style="display:none"-->

<h2>Welcome To Our Facebook Competition</h2>
<p>Please login via Facebook to enter!</p>
<!--Below we include the Login Button social plugin. This button uses the JavaScript SDK to-->
<!--present a graphical Login button that triggers the FB.login() function when clicked.-->
<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>

<br />

<p class="comp_enter">To be in with the chance of winning 2 nights Bed and Breakfast and an evening meal for 2 please tell us which town the Westgrove Hotel is located in:</p>

<div id="competition-form" width="450px">
    
<form method="post" action="enter.php">
<input type="radio" name="town" value="naas">Naas<br>
<input type="radio" name="town" value="newbridge">Newbridge<br>
<input type="radio" name="town" value="clane">Clane<br>
<input type="radio" name="town" value="sallins">Sallins

<br /> <br /> <input type="submit" align="center">

</form>

</div>

    </body>
</html>