<?php
/*
Plugin Name: Sumit
Plugin URI: http://sumit.com/
Description: use shortcode [sumit]
Version: 3.1.10
Author: Sumit Joshi
Author URI: http://xyz.com/
License: GPLv2 or later
Text Domain: sumit
*/
function des()
{
	?>
    <form id="contacts-form" action="#" method="post">
          <fieldset>
            <div class="field">
              <label>Your Name:</label>
              <input type="text" value="" name="nam"/>
            </div>
            <div class="field">
              <label>Your E-mail:</label>
              <input type="text" value="" name="email"/>
            </div>
            <div class="field">
              <label>Your Website:</label>
              <input type="text" value="" name="web"/>
            </div>
            <div class="field">
              <label>Your Message:</label>
              <textarea cols="1" rows="1" name="mesg"></textarea>
            </div>
            <div class="wrapper"><input type="submit" name="sub" value="Submit"/></div>
          </fieldset>
        </form>
    <?php
	
}
function cod()
{
global $wpdb;
 extract($_POST);
 if(isset($sub))
 {
	if($wpdb->insert("contact",array('name'=>$nam,'email'=>$email,'website'=>$web,'message'=>$mesg)))
	{
		echo "Contact Send"; 
	}
 }	
}
function mai()
{
   cod();
   des();	
}
add_shortcode("xyz","mai");
?>