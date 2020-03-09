<?php
namespace Views;


class ShowOembed {
    public function __invoke(){
        $base_url = 'http://www.youtube.com';
        $url = 'http://www.youtube.com/watch?v=gc0_Acq8dV4';

        
        $client = new \GuzzleHttp\Client([
            'base_uri' => $base_url,
        ]);

        $method = 'GET';
        $path = 'oembed?format=json&url=';
        $options = ['allow_redirects' => true];
        $response = $client->request($method, $path . $url, $options);

        $json = \json_decode($response->getBody());
        // var_dump($json);


        ob_start();
        echo $json->{'html'};
        return ob_get_clean();
    }
}
