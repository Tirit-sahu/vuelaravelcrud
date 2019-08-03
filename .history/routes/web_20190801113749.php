<?php

Route::get('/', function () {
    return view('post');
});


Route::get('/{any}', function () {
    return view('post');
  })->where('any', '.*');