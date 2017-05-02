<?php
  require 'vendor/autoload.php';
  use GuzzleHttp\Client;

  $book_service_client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://shopping-service-p2017.herokuapp.com',
    // You can set any number of default request options.
    'timeout'  => 32.0,
  ]);


$response = $book_service_client->request('GET', 'book');

 echo "Reponse ==> " + $response;
