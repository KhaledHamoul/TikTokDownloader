<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte;

class MainController extends Controller
{   

    public function test(){
        $scraper = Goutte::request('GET','http://vm.tiktok.com/JfS7yj/');
        $html = $scraper->html();
        dd($html);
    }



    public function crawlData(Request $request){
        $scraper = Goutte::request('GET', $request->page);
        $html = $scraper->html();
        $video = $this->get_string_between($html,'"play_addr":{"url_list":["\/\/','","');
        $response = array(
            'status' => 'success',
            'video' => $video
        );
        return response()->json($response);
    }


    public function downloadVideo(Request $request){
        $video_link = $request->url;
        header('Content-Type: application/octet-stream');
        header('Content-Transfer-Encoding: Binary'); 
        $file_name = 'video.mp4';
        header('Content-disposition: attachment; filename=' . $file_name); 
        header('Content-Length: ' . $this->retrieve_remote_file_size($video_link));
        readfile($video_link);
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


    private function retrieve_remote_file_size($url){
        $ch = curl_init($url);
   
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, TRUE);
        curl_setopt($ch, CURLOPT_NOBODY, TRUE);
   
        $data = curl_exec($ch);
        $size = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);
   
        curl_close($ch);
        return $size;
   }
    
}
