<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ControllerMahasiswa@index');
Route::get('/passing','ControllerMahasiswa@passingBanyak');
Route::get('/passing-banyak',function(){
    $dataParsing = [
        [
            'nim'=>'10112299',
        ]
    ];
    return view('passing-banyak',['dataInput'=>$dataParsing]);
});
Route::get('/query-parameter',function(){
    $listMahasiswa = [
            [
                'nim'=>'10112299',
                'nama'=>'ilman'
            ]
        ];
    $nameInput = request('nameInput');
    return view('query-parameter',[
        'listMahasiswa'=>$listMahasiswa,
        'nameInput'=>$nameInput
    ]);
});
Route::get('/route-parameter/{id}',function($id){
    return view('route-parameter',['id'=>$id]);
});