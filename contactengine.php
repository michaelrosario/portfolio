<?php

$EmailFrom = "Atlantic Construction";
$EmailTo = "email@atlanticconstructionny.com";

if(isset($_POST['subject'])){ 
	$Subject = Trim(stripslashes($_POST['subject'])); 
} else {
	$Subject = "ATLANTIC CONSTRUCTION : Email Message";
}
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 
$Phone = Trim(stripslashes($_POST['phone'])); 
$From = "'From: ".$Name." <".Trim(stripslashes($_POST['email'])).">'";

$headers = 'From: '.$Name.' <'.$Email.'>' . "\r\n";
$headers .= 'Bcc: Michael Rosario <michael@elementoinc.com>' . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

// validation
$validationOK=true;
if(filter_var($Email, FILTER_VALIDATE_EMAIL)) {} else { $validationOK=false; }
if(strlen($Message)>=3){ } else { $validationOK=false; }
if(strlen($Name)>=3){ } else { $validationOK=false; }


if (!$validationOK) {
	header( 'Location: http://www.atlanticconstructionny.com/index.php?q=error' );
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?q=error\">";
  exit;
}


// prepare email body text
$Body = "We received the following email from our contact form:";
$Body .= "\n";
$Body .= "_____________________________________________________________";

$Body .= "\n";
$Body .= "\n";
$Body .= "NAME: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "\n";
$Body .= "EMAIL: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "\n";
$Body .= "PHONE: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "\n";
if(isset($_POST['message'])){ 
$Body .= "MESSAGE: ";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";
$Body .= "\n";
}

// send email 
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page 
if ($success){
	header( 'Location: http://www.atlanticconstructionny.com/index.php?q=thanks' );
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?q=thanks\">";
    exit;
}
else{
	header( 'Location: http://www.atlanticconstructionny.com/index.php?q=error' );
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?q=error\">";
    exit;
}
?>