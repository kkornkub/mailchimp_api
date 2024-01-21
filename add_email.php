<?php
$member_endpoint = 'https://us13.api.mailchimp.com/3.0/lists/c9ca3a1bf5/members';
$api_key = 'f45d9079a27239171d4eef51b5ba7ec1-us13';

$member_data = array(
    'email_address' => 'kkornzaza20@gmail.com',
    'status' => 'subscribed'
);

$ch = curl_init($member_endpoint);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($member_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$response = curl_exec($ch);
curl_close($ch);

// Decode and print the response
echo $response;
?>
