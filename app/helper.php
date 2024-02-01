<?php 


if(!function_exists('p')){

    //This function is for formatted print data
    function p($data){

        echo '<pre>';
        print_r($data);
        echo '</pre>';

    }
}

if(!function_exists('get_formatted_date')){

    //This function is for formatted date
    function get_formatted_date($date, $format){

        $formattedDate = date($format, srttotime($format));
        return $formattedDate;
    };
}