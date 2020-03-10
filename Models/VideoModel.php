<?php
namespace Models;

class VideoModel {

    public $title;
    public $autor_name;
    public $autor_url;
    public $type;
    public $provider_name;
    public $provider_url;
    public $height;
    public $width;
    public $thumbnail_url;
    public $thumbnail_height;
    public $thumbnail_width;
    public $html;


    public function __invoke(string $url) {
        $base_url = 'http://www.youtube.com';

        $client = new \GuzzleHttp\Client([
            'base_uri' => $base_url,
        ]);
        $method = 'GET';
        $path = 'oembed?format=json&url=';
        $options = ['allow_redirects' => true];
        $response = $client->request($method, $path . $url, $options);

        $json = \json_decode($response->getBody());
        $this->parseJson((string)$json);

    }

    private function parseJson(string $json){
        $this->version = $json->{'version'};
        $this->title = $json->{'title'};
        $this->autor_name = $json->{'autor_name'};
        $this->autor_url = $json->{'autor_url'};
        $this->type = $json->{'type'};
        $this->provider_name = $json->{'provider_name'};
        $this->provider_url = $json->{'provider_url'};
        $this->height = $json->{'height'};
        $this->width = $json->{'width'};
        $this->thumbnail_url = $json->{'thumbnail_url'};
        $this->thumbnail_height = $json->{'thumbnail_height'};
        $this->thumbnail_width = $json->{'thumbnail_width'};
        $this->html = $json->{'html'};
    }
}
