<?php
$api_key = 'f45d9079a27239171d4eef51b5ba7ec1-us13';
$list_endpoint = 'https://us13.api.mailchimp.com/3.0/lists'; //

$list_data = array(
    'name' => 'Korn',
    'contact' => array(
        'company' => 'Korn Company',
        'email' => 'kkornzaza200@gmail.com',
        'address' => array(
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'zip' => '10800'
        )
    ),
    'permission_reminder' => 'You are receiving this email because...',
    'campaign_defaults' => array(
        'from_name' => 'Korn Name',
        'from_email' => 'Kornzaza2@gmail.com',
        'subject' => 'Subject',
        'language' => 'Language'
    )
);

$ch = curl_init($list_endpoint);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($list_data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$response = curl_exec($ch);
curl_close($ch);

// Decode and print the response
echo $response;
?>
