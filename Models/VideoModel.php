<?php
namespace Models;

class VideoModel {
    public function convertOembed(string $url){
        $base_url = 'http://www.youtube.com';

        
        $client = new \GuzzleHttp\Client([
            'base_uri' => $base_url,
        ]);

        $method = 'GET';
        $path = 'oembed?format=json&url=';
        $options = ['allow_redirects' => true];
        $response = $client->request($method, $path . $url, $options);

        $json = \json_decode($response->getBody());

        return (string)$json->{'html'};
    }
    
}
