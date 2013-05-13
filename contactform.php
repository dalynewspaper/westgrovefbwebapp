<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/contact.css" />
        <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
        <!--hosted jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>



    </head>

<body>

            <div class="container">
            <header>
                <h1> <span> Contact Us</span></h1>
                <h2>Please feel free to contact is at any time. If you would like to call us our number is 045 989900 </h2>
               
				<p class="codrops-demos">
					<a href="index.php">home</a>
					<a href="index2.php">hotel</a>
					<a href="index3.php">weddings</a>
                                        <a class="current-demo" href="contactform.php">contact us</a>
					<a href="index4.php">facebook competition</a>
				</p>

            </div>

                <div id="top_right">
                <a href="https://twitter.com/westgrovehotel" class="twitter-follow-button" data-show-count="false">Follow @westgrovehotel </a>

                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                 if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                </script>

          
                </div>


        <form name="contactform" method="post" action="send_form_email.php">
        <table width="450px">
        <tr>
         <td valign="top">
        <label for="first_name">First Name </label>
         </td>
         <td valign="top">
          <input  type="text" name="first_name" maxlength="50" size="30">
         </td>
        </tr>  
         <tr>
         <td valign="top"">
         <label for="last_name">Last Name </label>
         </td>
         <td valign="top">
          <input  type="text" name="last_name" maxlength="50" size="30">
         </td>
        </tr>
        <tr>
         <td valign="top">
          <label for="email">Email Address</label>
         </td>
         <td valign="top">
          <input  type="text" name="email" maxlength="80" size="30">
         </td>
        </tr>
        <tr>
         <td valign="top">
          <label for="telephone">Telephone Number</label>
         </td>
         <td valign="top">
          <input  type="text" name="telephone" maxlength="30" size="30">
         </td>
        </tr>
        <tr>
         <td valign="top">
          <label for="comments">Comments</label>
         </td>
         <td valign="top">
          <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
         </td>
        </tr>
        <tr>
         <td colspan="2" style="text-align:center">
          <input type="submit" value="Submit">  
         </td>
        </tr>
        </table>
        </form>

    </body>
</html>