<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(Request $request)
{
    // Validación de datos con mensajes personalizados
    $messages = [
        'email.unique' => 'El correo electrónico ya está registrado.',
        'num_doc.unique' => 'El número de documento ya está registrado.',
    ];

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:usuarios,correo_usuario', // Verifica que el correo sea único en la tabla 'usuarios'
        'password' => 'required|min:8',
        'fecha_nac' => 'required|date',
        'num_doc' => 'required|unique:usuarios,numero_documento_usuario', // Verifica que el número de documento sea único en la tabla 'usuarios'
        'telefono' => 'required',
        'tipo_doc' => 'required',
    ], $messages);

    // Creación de usuario
    $user = new User();
    $user->nombre_usuario = $request->name;
    $user->correo_usuario = $request->email;
    $user->contraseña_usuario = Hash::make($request->password);
    $user->fecha_nacimiento_usuario = $request->fecha_nac;
    $user->numero_documento_usuario = $request->num_doc;
    $user->telefono_usuario = $request->telefono;
    $user->id_tipo_documento = $request->tipo_doc;
    $user->id_rol = 3;
    $user->save();

    return redirect()->route('inicio')->with('success', 'Usuario registrado con éxito!');
}

public function login(Request $request)
{
    $user = User::where("correo_usuario", $request->email)->first();

    if ($user !== null) {
        if (Hash::check($request->password, $user->contraseña_usuario)) {
            Auth::login($user);
            if ($user->id_rol === 1) {
                return redirect('/dashboard'); // Redirigir a la página del dashboard
            } else {
                return redirect('/')->with('nombre_usuario', $user->nombre_usuario);
            }
        } else {
            return redirect('/login')->with('error', 'Las credenciales no son válidas.');
        }
    } else {
        return redirect('/loginn')->with('error', 'Usuario no encontrado.');
    }
}
}