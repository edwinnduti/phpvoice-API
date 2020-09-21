<?php
// First read in a couple of POST variables passed in with the request
// This is a unique ID generated for this call
$sessionId = $_POST['sessionId'];
// Check to see whether this call is active
$isActive  = $_POST['isActive'];                      
if ($isActive == 1)  {
    // Get the location of previously recorded voicemail and play back the file. Make sure its a valid web address that starts with http
    $response  = '<?xml version="1.0" encoding="UTF-8"
?>';
    $response .= '<Response>';
 //   $response .= '<GetDigits timeout="4" callbackUrl="https://pceanyaga.000webhostapp.com/voice/renderaudio.php" >';
  //  $response .= '<Play url="https://pceanyaga.000webhostapp.com/audio/karibu.mp3"/>'; 
    $response .= '<Play url="https://pceanyaga.000webhostapp.com/audio/pceamay31.mp3"/>';
//    $response .= '</GetDigits>';
    $response .= '</Response>';
}                                                    
// Print the response onto the page so that our gateway can read it                                 
header('Content-type: text/plain');
echo $response;

?>

