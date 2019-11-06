<?php

Route::get('fooecom', function(){
    return "This is DEMO PACKAGES";
});

Route::get('sample',  'Fooecom\Sample\SampleController@index'
);
