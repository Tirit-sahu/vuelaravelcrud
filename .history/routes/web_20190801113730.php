<?php

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/{any}', function () {
    return view('post');
  })->where('any', '.*');