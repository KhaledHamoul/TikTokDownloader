<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;

class MainController extends Controller
{    



    public function test(){
        $scraper = Goutte::request('GET','http://vm.tiktok.com/JUj3rf/');
        $html = $scraper->html();
        dd($html);
        $cover = $this->get_string_between($html,'"origin_cover":{"url_list":["','","');
        $video = $this->get_string_between($html,'"play_addr":{"url_list":["','","');
    }

    public function test2(Request $request){
        $response = array(
            'status' => 'success',
            'myresponse' => 'myresponse'
        );
        return response()->json($response);
    }
    public function crawlData(Request $request){
        $scraper = Goutte::request('GET', $request->page);
        $html = $scraper->html();
        $cover = $this->get_string_between($html,'"origin_cover":{"url_list":["','","');
        $video = $this->get_string_between($html,'"play_addr":{"url_list":["','","');
        $response = array(
            'status' => 'success',
            'cover' => $cover,
            'video' => $video
        );
        return response()->json($response);
    }


    /* Helper functions */
    private function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }
}
