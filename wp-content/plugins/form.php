
<?php
/*
Plugin Name: Contact Form
Version: 1.0.1
Author: Isha
Author URI: www.contactform.com
License: GPL

*/

add_shortcode("contact",contact_admin);
add_action('admin_menu','contact_admin_actions');
	function contact_admin_actions(){
		add_options_page('contact','contact','manage_options',_FILE_,'contact_admin');
	
	}
	
	function contact_admin()
	{ 
    
		
extract($_POST);
if(isset($submit))
{
				
	global $wpdb;
	//$wpdb->query("");
	//wpdb->get_results("select * from `tablename`");
	//$sel = $wpdb->get_results->insert($wpdb->wp_contact,
	//array("name"=>$name, "email"=>$email, "sub"=>$sub, "msg"=>$msg),
	//array(
	//'%s',
	//'%s',
	//'%s',
	//'%s'));
	
	$sel=$wpdb->query("insert into wp_contact values('$name','$email','$sub','$msg')");
	if($sel)
	{
		
	echo "send";
	}
	else
	{
	echo "not send";
	}
	

	
}
	
?>

<form method="post">
  <table width="325" height="246" border="0">
    <tr>
    <td height="52" colspan="2"><div align="center"><strong>Contact Form</strong></div></td>
    </tr>
  <tr>
    <td width="106"><div align="center"><strong>Name</strong></div></td>
    <td width="209"><input name="name" type="text" required></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Email</strong></div></td>
    <td><input name="email" type="text" required></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Subject</strong></div></td>
    <td><input name="sub" type="text" required></td>
  </tr>
  <tr>
    <td><div align="center"><strong>Message</strong></div></td>
    <td><input name="msg" type="text" required></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <strong>
      <input type="submit" name="submit" value="Submit">
      </strong></div></td>
    </tr>
</table>
</form>
	
<?php	
		
	}
?>




