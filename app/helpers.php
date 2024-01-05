<?php

use App\Models\portofolio;
use App\Models\section;

function get_section_data($key){
    $data = section::where('post_as',$key)->first();
    if(isset($data)){
        return $data;
    }
}

function get_katalog(){
    $data = portofolio::all();
    return $data;
}
