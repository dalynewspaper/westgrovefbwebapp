
  <?php require_once("facebook.php");
//requesting information from facebook user
  $config = array();
  $config['appId'] = '253770041416929';
  $config['secret'] = 'e0cada66b97cf293d02cfb750cdd3467';
  $config['fileUpload'] = false; // optional

  $facebook = new Facebook($config);

  //Get the input from the user
  $answer=$_POST['town'];

  //Validate the input

  if ($answer != 'clane'){
      header("Location: http://westgrove.azurewebsites.net/web/CSS3FullscreenSlideshow/index4.php?wrong=1");
      exit();
  }


//Fetch data from FB via FB API
  $user = $this->facebook->api('/me');

  //Connect to database

  //Insert Data to Database
  INSERT into entries (name, gender, )
