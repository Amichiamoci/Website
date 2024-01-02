<?php

if (!isset($_POST["user_btn"]))
{
    header("location: index.php?mail_result=failure#contacts");
}

if ((isset($_POST["user_name"])) && 
	(isset($_POST["user_mail"])) &&
    (isset($_POST["user_msg"])))
{
    $name = $_POST["user_name"];
    $mail = $_POST["user_mail"];
    $msg  = $_POST["user_msg"];

    if ((!empty($name)) && (!empty($mail)) && (!empty($msg)))
    {
        $dest    = "info@amichiamoci.it";
        $object  = "Cliente Sito - " . $name;
		$headers = "From: " . $mail;
        $content = $msg;
		
		if (mail($dest, $object, $content, $headers))
		{
			header("location: index.php?mail_result=success#contacts");
		}
        else
		{
			header("location: index.php?mail_result=failure#contacts");
		}
    }
    else
    {
        header("location: index.php?mail_result=failure#contacts");
    }
}

?>