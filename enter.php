<?php
        //Add our Facebook SDK Dependancy
        require 'facebook.php';

        //Make our Facebook Object
        $facebook = new Facebook(array(
          'appId'  => '253770041416929',
          'secret' => 'e0cada66b97cf293d02cfb750cdd3467',
        ));


        //Check if a user is logged in
        $user_id = $facebook->getUser();
?>

<head>
    <title>Competition.</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style4.css" />
</head>
<body>

<?php
        if($user_id){ //Is logged in
                //Get the users info from facebook
                $fb_user = $facebook->api('/me');


                //connect to DB
                mysql_connect("ec2-50-19-213-178.compute-1.amazonaws.com:3360", "dalynewspaper", "Pa55w0rdPa55w0rd");
                mysql_select_db("westrgrovedatabase");

                // Check connection
                if (mysql_errno()){
                  echo "Failed to connect to MySQL: " . mysql_errno();
                  exit();
                }

                //Check if they already entered by selecting all users in db who have the authenticated user id
                //note the ` around the fb-id, that indicates a field name
                $check_SQL = "SELECT * FROM `westgrove_database` WHERE `facebook_id` = '".$user_id."'";
                $check_query = mysql_query($check_SQL);
                $user_check = mysql_fetch_array($check_query, MYSQL_NUM);


               //count the result if there is 1 or more it means they are in the db, therefore already entered


                if(count($user_check) > 1){
                        //user already in db, tell them where to go

                        echo "you have already entered";
                        exit();
                        }
               

                //Make query string and insert FB Data into DB


                $SQL = "INSERT INTO `westgrove_database` (name, email, gender, hometown, facebook_id, date_of_birth)
                VALUES ('".$fb_user["name"]."', '".$fb_user["email"]."','".$fb_user["gender"]."',
                '".$fb_user["hometown"]."','".$user_id."', '".$fb_user["date_of_birth"]."')";

                mysql_query($SQL);

                if (mysql_errno()){
                  echo "Failed to connect to MySQL: " . mysql_errno();
                  exit();
                }



      //Close connection
                mysql_close();

                ?>

   <div class="container">
    <div class="success">
         <h1> Thank you for entering our competition.</h1>

        <p class="codrops-demos">
        	<a href="index.php">home</a>
                <a href="index2.php">hotel</a>
                <a href="index3.php">weddings</a>
                <a href="contactform.php">contact us</a>
                <a class="current-demo" href="index4.php">facebook competition</a>
	</p>


        <h2 class="glow" align="center">Best of luck!</h2>
    </div>
   </div>

<?php

                echo "<a href='".$facebook->getLogoutUrl()."'>Log out</a>";
            }
            else { //is not logged in

            ?>
         <div class="container">
    <div class="success">
         <h1><a href='<?php echo $facebook->getLoginUrl(); ?>'>Please log to enter, click here</a></h1>
       
        <p class="codrops-demos">
        	<a href="index.php">home</a>
                <a href="index2.php">hotel</a>
                <a href="index3.php">weddings</a>
                <a href="contactform.php">contact us</a>
                <a class="current-demo" href="index4.php">facebook competition</a>
	</p>
    </div>
         </div>

        <h2 class="glow">Best of luck!</h2>
        <?php
            }

echo "<a href='".$facebook->getLogoutUrl()."'>Log out</a>";

?>

