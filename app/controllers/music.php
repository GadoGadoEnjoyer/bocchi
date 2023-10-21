<?php

class music extends Controller{
    public function index($id = NULL){

        $clientId = API_SPOTIFY_ID;
        $clientSecret = API_SPOTIFY_SECRET;

        // Set your Spotify API credentials
        $apiCredentials = base64_encode($clientId . ':' . $clientSecret);

        // Define the POST data
        $postData = [
            'grant_type' => 'client_credentials',
        ];

        $ch = curl_init('https://accounts.spotify.com/api/token');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Basic ' . $apiCredentials,
            'Content-Type: application/x-www-form-urlencoded',
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));

        $response = curl_exec($ch);
        $data = json_decode($response, true);

        $accessToken = $data['access_token'];

        $artistId = "2nvl0N9GwyX69RRBMEZ4OD";

        $ch = curl_init("https://api.spotify.com/v1/artists/$artistId/albums?include_groups=album,single");
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $accessToken,
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $response = curl_exec($ch);
        $albums = json_decode($response, true);
        
        foreach($albums['items'] as $album){
            echo("<img src='".$album['images'][1]['url']."'/>");
        }
        
    }
}

?>