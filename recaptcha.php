<?php

/*  
    Don't Remove this comment!.
    
    Recaptcha Generator
    Input: None
    Output: A random captcha a math puzzle or random string in image
    Condition: Must be secure
    
    Your can create as many as auxillary functions you need.
*/
// Write your php fucntion below

          require_once('recaptchalib.php');
          $publickey = "your_public_key"; // you got this from the signup page
          echo recaptcha_get_html($publickey);
      

?>
