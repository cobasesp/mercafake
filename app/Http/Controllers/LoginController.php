<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use App\User;
use App\Producto;
use Exception;

class LoginController extends Controller
{

    public function doLogin(Request $request)
    {
        // Obtengo el token
        $jwt = $request->get('login_token');
        if ($jwt == null || $jwt == '') {
            return $this->jsonResponse(["error" => true, "msg" => "Token de login necesario para esta petición"], 400);
        }

        // Decodifico el token y obtngo los datos
        try {
            $secret = env('JWT_SECRET');
            $decoded = JWT::decode($jwt, $secret, array('HS256'));
        } catch (Exception $e) {
            return $this->jsonResponse(["error" => true, "msg" => "El token enviado es inválido"], 400);
        }

        // Obtengo el usuario que esta haciendo el login
        $users = User::get()
            ->where('email', $decoded->email)
            ->where('password', $decoded->password);

        foreach ($users as $user) {
            $obj = [
                "name" => $user->name,
                "email" => $user->email,
                "address" => $user->address,
                "token_created" => time(),
                "token_expire" => time() + 300, // +5 min
            ];

            $jwt_obj = JWT::encode($obj, $secret);
            return $this->jsonResponse(["error" => false, "msg" => "El token enviado es inválido", "token" => $jwt_obj], 200);
        }

        return $this->jsonResponse(["error" => true, "msg" => "Usuario o contraseña incorrectos"], 200);
    }

    public function checkToken($jwt)
    {
        if ($jwt == null || $jwt == '') {
            return $this->jsonResponse(["error" => true, "msg" => "Token de login necesario para esta petición"], 400);
        }

        try {
            $secret = env('JWT_SECRET');
            $decoded = JWT::decode($jwt, $secret, array('HS256'));
        } catch (Exception $e) {
            return $this->jsonResponse(["error" => true, "msg" => "No tienes permisos para realizar esta acción"], 400);
        }

        return true;
    }
}
