<?php
$message=$_POST['msg2'];

$to = 'tgolbasi09@gmail.com';
$subject = "Message from Visitor.";
$from = "tgolbasi09@gmail.com";
print_r($_FILES);
echo 
	//Get uploaded file data using $_FILES array
	$tmp_name = $_FILES['file2']['tmp_name']; // get the temporary file name of the file on the server
	$name	 = $_FILES['file2']['name']; // get the name of the file
	$size	 = $_FILES['file2']['size']; // get size of the file for size validation
	$type	 = $_FILES['file2']['type']; // get type of the file
	$error	 = $_FILES['file2']['error']; // get the error (if any)

	//validate form field for attaching the file
	if($error > 0)
	{
		die('Upload error or No files uploaded');
	}

	//read from the uploaded file & base64_encode content
	$handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
	$content = fread($handle, $size); // reading the file
	fclose($handle);				 // close upon completion

	$encoded_content = chunk_split(base64_encode($content));
	$boundary = md5("random"); // define boundary with a md5 hashed value

	//header
	$headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
	$headers .= "From:".$from."\r\n"; // Sender Email
	$headers .= "Reply-To: ".$from."\r\n"; // Email address to reach back
	$headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
	$headers .= "boundary = $boundary\r\n"; //Defining the Boundary
		
	//plain text
	$body = "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
	$body .= "Content-Transfer-Encoding: base64\r\n\r\n";
	$body .= chunk_split(base64_encode($message));
		
	//attachment
	$body .= "--$boundary\r\n";
	$body .="Content-Type: $type; name=".$name."\r\n";
	$body .="Content-Disposition: attachment; filename=".$name."\r\n";
	$body .="Content-Transfer-Encoding: base64\r\n";
	$body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
	$body .= $encoded_content; // Attaching the encoded file with email
	
	echo $body;
	$sentMailResult = mail($to, $subject, $body, $headers);
    
	if($sentMailResult )
	{
	echo "<h3>File Sent Successfully.<h3>";
	// unlink($name); // delete the file after attachment sent.
	}
	else
	{
	die("Sorry but the email could not be sent.
					Please go back and try again!");
	}

?>

