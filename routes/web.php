<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::post('/login', function(Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        
        if (Auth::user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    } else {
        // Autenticación fallida
        return redirect()->route('index')->with('error', 'Credenciales inválidas');
    }
})->name('pruebas.login');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');



Route::get('/', function () {
    return view('welcome');
});



Route::get('/crear-cuenta', function () {
    return view('pruebas.CrearCuenta');
})->name('crear-cuenta');




Route::get('/Olvido-su-contraseña', function () {
    return view('pruebas.OlvidoContraseña');
})->name('Olvido-su-contraseña');



Route::get('/Inicio-sesion', function () {
    return view('pruebas.index');
})->name('Inicio-sesion');
    
Route::get('/Terminos-De-Servicio', function () {
    return view('pruebas.TerminosDeServicio');
})->name('Terminos-De-Servicio');

Route::get('/Politica-De-Privacidad', function () {
    return view('pruebas.PoliticaDePrivacidad');
})->name('Politica-De-Privacidad');

Route::get('/Confirmacion', function () {
    return view('pruebas.Confirmacion');
})->name('Confirmacion');

Route::get('/Principal1', function () {
    return view('pruebas.Principal1');
})->name('Principal1');

Route::get('/Contactanos', function () {
    return view('pruebas.Contactanos');
})->name('Contactanos');

Route::get('/Servicio', function () {
    return view('pruebas.Servicio');
})->name('Servicio');


Route::get('/usuarios', function () {
    return view('pruebas.usuarios');
})->name('usuarios');

route::resource('prueba',PruebasController::class);


