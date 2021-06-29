<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client; 
use Google_Service_YouTube;

class YoutubeController extends Controller
{
    public function show(Request $request)
    {
        $search =   $request->input('search');

        $DEVELOPER_KEY = 'AIzaSyBrlma-MWW7y4ssn1d3_8s1zyBprSabYLk';

       try {
        $client = new Google_Client();
        $client->setDeveloperKey($DEVELOPER_KEY);

        $youtube = new Google_Service_YouTube($client);

        $searchResponse = $youtube->search->listSearch('id,snippet', array(
            'q' => $search,
            'maxResults' => 10,
        ));

        if(sizeof($searchResponse['items']) == 0){ 
            return(json_encode(['message' => 'No se encontraron coincidencias']));
        }

        $response = [];

        foreach ($searchResponse['items'] as $searchResult) {
            
            $item = [];
            $extraInfo = [];

            $item['published_at']   =   $searchResult['snippet']['publishedAt'];
            $item['id']             =   $searchResult['id']['videoId'];
            $item['title']          =   $searchResult['snippet']['title'];
            $item['description']    =   $searchResult['snippet']['description'];
            $item['thumbnail']      =   $searchResult['snippet']['thumbnails']['high']['url'];
            
            $item['extra']['published by']  =   $searchResult['snippet']['channelTitle'];
            
            array_push($response, $item);
        }

        return json_encode($response);

    }catch (Google_Service_Exception $e) {

       return $e->getMessage();

    }catch (Google_Exception $e) {

        return $e->getMessage();
    }

    }
}
