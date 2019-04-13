<?php

$token = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';  // 作成したトークンを書く
$header = [
    'User-Agent: Awesome-Octocat-App',
    'Authorization: Bearer ' . $token,
    'Content-Type: application/json',
];
$query = ['query' => 
    'query {
        viewer {
            login
        }
    }'
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://api.github.com/graphql'); 
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($query));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
echo $response;
echo "\n";

curl_close($curl);
