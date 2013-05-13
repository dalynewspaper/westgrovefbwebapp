 <?php
        //Add our Facebook SDK Dependancy
        require 'facebook-php-sdk/src/facebook.php';

        //Make our Facebook Object
        $facebook = new Facebook(array(
          'appId'  => '253770041416929',
          'secret' => 'e0cada66b97cf293d02cfb750cdd3467',
        ));


        //Check if a user is logged in
        $user_id = $facebook->getUser();
        
        if($user_id){ //Is logged in
                //Get the users info from facebook
                $fb_user = $facebook->api('/me');


                //connect to DB
                mysql_connect("localhost", "root", "root");
                mysql_select_db("westgrove_database");

                // Check connection
                if (mysql_errno()){
                  echo "Failed to connect to MySQL: " . mysql_errno();
                  exit();
                }

                //Check if they already entered by selecting all users in db who have the authenticated user id
                //note the ` around the fb-id, that indicates a field name
                $check_SQL = "SELECT * FROM users WHERE `fb-id` = '".$user_id."'";
                $check_query = mysql_query($check_SQL);
                $user_check = mysql_fetch_array($check_query, MYSQL_NUM);


               //count the result if there is 1 or more it means they are in the db, therefore already entered

                if(count($user_check) > 1){
                        //user already in db, tell them where to go
                        echo "you have already entered";
                        exit();
                }

                //Make query string and insert FB Data into DB


                $SQL = "INSERT INTO users (name, email, gender, hometown, facebook_id, date_of_birth)
                VALUES ('".$fb_user["name"]."', '".$fb_user["email"]."','".$fb_user["gender"]."',
                '".$fb_user["hometown"]."','".$fb_user["facebook_id"]."', '".$fb_user["date_of_birth"]."', '".$user_id."')";

                mysql_query($SQL);

                if (mysql_errno()){
                  echo "Failed to connect to MySQL: " . mysql_errno();
                  exit();
                }



      //Close connection
                mysql_close();
               
                echo "<a href='".$facebook->getLogoutUrl()."'>Log out</a>";
        }
        else { //is not logged in
                echo "Log in please <br />";
                echo "<a href='".$facebook->getLoginUrl()."'>Log in </a>";
        }



?>