<?php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
 //require("sendgrid-php/sendgrid-php.php");
// download sendgrid-php.zip from the latest release here,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("aakashbhatia031@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("aakashbhatia030@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
