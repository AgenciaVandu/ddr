<?php

use App\Mail\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view ('index');
});


Route::post('/send-mail',function(Request $request){
    Mail::to('contacto@ddrproyectos.mx')->send(new Form($request->nombre,$request->empresa,$request->telefono));
    return response()->download(public_path('documents/CV_DDR_SA_CV_ESPAÑOL.pdf'));
})->name('send.form');