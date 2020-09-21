<?php

// This is the second request from handlecall.php script
// Configure the events URL for your phone number
// points to the location of the audio file selected
// An  array mapping the user input to the audio files
    $audioArr = array(
    '1' => "https://pceanyaga.000webhostapp.com/audio/pceamay3.mp3",
    '2' => "https://pceanyaga.000webhostapp.com/audio/pceamay10.mp3",
);                              // Read the dtmf digits
    $audioNumber = $_POST['dtmfDigits'];                    
    // Read the audio info from the array if necessary    
    if ( array_key_exists($audioNumber, $audioArr) ) {        $audio = $audioArr[$audioNumber];
    }                                                     
    // Compose the response
    $response  = '<?xml version="1.0" encoding="UTF-8"?>'; 
    $response .= '<Response>';
    $response .= '<Play url="'.$audio.'"/>';
    $response .= '</Response>';                                         
    // Print the response onto the page so that our gateway can read it
    header('Content-type: text/plain');
    echo $response;
    ?>
