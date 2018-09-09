<?php
$Subject = "Skyrie booking";
//$EmailTo = "hannahcoutts@gmail.com";
$EmailTo = "contact@skyrie.co.uk";

$Name = Trim(stripslashes($_POST['name']));
$Email = Trim(stripslashes($_POST['email']));
$Address = Trim(stripslashes($_POST['address']));
$Phone = Trim(stripslashes($_POST['phone']));
$EventDesc = Trim(stripslashes($_POST['eventDesc']));
$DateEvent = Trim(stripslashes($_POST['dateEvent']));
$Start = Trim(stripslashes($_POST['start']));
$Finish = Trim(stripslashes($_POST['finish']));
$EventType = Trim(stripslashes($_POST['eventType']));
$Own1 = Trim(stripslashes($_POST['own1']));
$Own2 = Trim(stripslashes($_POST['own2']));
$Own3 = Trim(stripslashes($_POST['own3']));
$Own4 = Trim(stripslashes($_POST['own4']));
//$Own5 = Trim(stripslashes($_POST['own5']));
$Vaddress = Trim(stripslashes($_POST['vaddress']));
$AdditionalInfo = Trim(stripslashes($_POST['additionalInfo']));

// validation
$validationOK=true;
if (!$validationOK) {
  echo "please check your details";
  header("Location: http://yourdommain.co.uk/contact.php");
  exit;
}

// prepare email body text

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Client address : ";
$Body .= $Address;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Description of event: ";
$Body .= $EventDesc;
$Body .= "\n";
$Body .= "Date of event: ";
$Body .= $DateEvent;
$Body .= "\n";
$Body .= "Start time: ";
$Body .= $Start;
$Body .= "\n";
$Body .= "Finish time: ";
$Body .= $Finish;
$Body .= "\n";
//$Body .= "Select Basic: ";
//$Body .= $EventType;
//$Body .= "\n";
$Body .= "Design your own: ";
$Body .= $Own1;
$Body .= ", ";
$Body .= $Own2;
$Body .= ", ";
$Body .= $Own3;
$Body .= ", ";
$Body .= $Own4;
//$Body .= ", ";
//$Body .= $Own5;
$Body .= "\n";
$Body .= "Venue address: ";
$Body .= $Vaddress;
$Body .= "\n";
$Body .= "Any additional info: ";
$Body .= $AdditionalInfo;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// redirect to success page
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"1;URL=bookingSuccess.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"1;URL=bookingFailure.html\">";
}
?>
