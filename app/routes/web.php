<?php

use Illuminate\Support\Facades\Route;

// use Illuminate\Support\Facades\Route;
use App\Services\Data;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function(){
    $data = Data::$contacts_data;
    //return view('contacts.index',['data' => $data]);
    //return view('contacts.index', compact('data'));
    return view('contacts.index')->with('data', $data);
})->name('contacts.index');

Route::get('/contacts/{id}', function($id){
    $contactsData = Data::$contacts_data;
    // Abort with a 404 error if the ID does not exist in the data
    abort_if(!isset($contactsData[$id]), 404, 'Contact not found.');
    // Abort with a 404 error unless the ID exists in the data
    //abort_unless(isset($contactsData[$id]), 404, 'Contact not found.');
    $data = $contactsData[$id];
    return view('contacts.show', compact('data'));
})->name('contacts.show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts/create', function(){
    return view('contacts.create');
})->name('contacts.create');
