<?php
//Pics_model.php
class Pics_model extends CI_Model {
    
        public function get_pics($tags = FALSE)
        {
            $api_key = '7d57870b34a4dc962282ee7747daab77';
            $perPage = 25;
            $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
            $url.= '&api_key=' . $api_key;
            $url.= '&tags=' . $tags;
            $url.= '&per_page=' . $perPage;
            $url.= '&format=json';
            $url.= '&nojsoncallback=1';
            
            $response = json_decode(file_get_contents($url));
            return $response->photos->photo;
            
        }
}