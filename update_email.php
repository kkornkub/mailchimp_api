<?php
$subscriber_email = 'kkornzaza20@gmail.com'; // อีเมลที่ต้องการอัพเดท
$update_endpoint = 'https://us13.api.mailchimp.com/3.0/lists/c9ca3a1bf5/members/' . md5($subscriber_email);
$api_key = 'f45d9079a27239171d4eef51b5ba7ec1-us13';

$update_data = array(
    'status' => 'subscribed' // subscribed หรือ unsubscribed
);

$ch = curl_init($update_endpoint);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($update_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
