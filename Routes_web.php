<?php

use Illuminate\Support\Facades\Route;

Route::get('/view', function () {
    $biodata = [
        'nama' => 'Karimatul Laili',
        'umur' => 21,
        'alamat' => 'Kemulah',
        'email' => 'Laili@gmail.com',
        'pekerjaan' => 'Web Developer'
        
    ];
    
    return view('biodata', ['biodata' => $biodata]);
});
