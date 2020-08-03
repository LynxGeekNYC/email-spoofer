<?php
//fake mail sender


define("PASSWORD","pizdets");


$validpw = false;


if(!isset($_POST['password']) || $_POST['password'] == '')
{
	$mail = '<div style="color:red">You need a password to send mail.  Be sure to enter it.</div>';
	$validpw = false;
} elseif($_POST['password'] != PASSWORD)
{
	$mail = '<div style="color:red">Invalid password.</div>';
	$validpw = false;
} else {
	$validpw = true;
}


if(isset($_POST['to']) && isset($_POST['from']) && isset($_POST['fromname']) && isset($_POST['replyto']) && isset($_POST['subject']) && isset($_POST['message']) && $validpw)
{
	$headers = 'From: '.$_POST['fromname'].' <'.$_POST['from'].'>' . "\r\n" .
	    'Reply-To: '. $_POST['replyto'] . "\r\n";

	$mail = mail($_POST['to'],$_POST['subject'],$_POST['message'],$headers);

	if($mail)
	{
		$mail = '<div style="color:green">Mail sent.</div>';
	} else {
		$mail = '<div style="color:red">Error</div>';
	}
} else {
	if(!isset($mail))
	{
		$mail = '<div style="color:red">Fill in all inputs</div>';
	}
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>E-Mail Sender</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >

	<img id="top" src="top.png" alt="">
	<div id="form_container">

		<h1><a>Untitled Form</a></h1>
		<form id="form_119884" class="appnitro" enctype="multipart/form-data" method="post" action="index.php">
					<div class="form_description">
			<h2>E-Mail Spoofer</h2>
			<p></p>
		</div>
			<ul >

					<li id="li_1" >
		<label class="description" for="element_1">To: </label>
		<div>
			<input id="element_1" name="to" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Fake From: </label>
		<div>
			<input id="element_2" name="from" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Fake From Name: </label>
		<div>
			<input id="element_3" name="fromname" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Reply To: </label>
		<div>
			<input id="element_4" name="replyto" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Subject: </label>
		<div>
			<input id="element_5" name="subject" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Message: </label>
		<div>
			<textarea id="element_6" name="message" class="element textarea medium"></textarea>
		</div>
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Upload a File </label>
		<div>
			<input id="element_7" name="upload" class="element file" type="file"/>
		</div>
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Password: </label>
		<div>
			<input id="element_8" name="password" class="element text medium" type="text" maxlength="255" value=""/>
		</div>
		</li>

					<li class="buttons">
			    <input type="hidden" name="form_id" value="119884" />

				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>
		<div id="footer">
			Createdd by <a href="https://www.youtube.com/channel/UCAhfUHcEm_qQzhlLw5DnDsg">LynxGeeks</a>
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>
