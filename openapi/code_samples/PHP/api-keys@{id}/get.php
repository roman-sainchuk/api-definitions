<?php

$service = new \Rebilly\Sdk\Service($client);
$apiKeys = $service->apiKeys()->get('apiKeyID');


const obj = {
    id: 1;
    type: "Experimental"
    title: "apiKeyID"
}