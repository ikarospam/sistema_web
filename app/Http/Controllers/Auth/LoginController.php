<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/sistema/inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Method to customize the username field for authentification
     * @return string
     */
    public function username() {
        return 'usuario';
    }

    /**

     * Funcion para obtener el campo del passwor que se usara en el logueo del
     * sistema.
     * @return string
     */
    public function password()
    {
        return 'password';
    }

    /**
     * Method rewrite login
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request) {

        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Funcion sobre escrita para la validacion del login genrado permitiendo
     * cambiar los datos de acceso como son el usuario y contraseña
     * @param Request $request
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            $this->password() => 'required|string'
        ], [
            'usuario.required' => 'El usuario no puede ir vacio',
            'password.required' => 'La contraseña no puede ir vacia'
        ]);
    }

    
}
