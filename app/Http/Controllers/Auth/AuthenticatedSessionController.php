<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function createAdmin():View
    {
        return view('auth.login-admin');
    }

    public function createFuncionario()
    {
        return view('auth.login-funcionario');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
    
            // Redirecionar com base no papel do usuário
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif (Auth::user()->role === 'funcionario') {
                return redirect()->intended('/funcionario/dashboard');
            } else {
                return redirect('/'); // Ou outra página padrão
            }
        }
    
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }


    public function storeAdmin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Verifique se o usuário é um administrador
        if (Auth::attempt($request->only('email', 'password')) && Auth::user()->role === 'admin') {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros ou você não tem permissão para acessar.',
        ]);
    }

    /**
     * Handle an incoming employee authentication request.
     */
    public function storeFuncionario(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Verifique se o usuário é um funcionário
        if (Auth::attempt($request->only('email', 'password')) && Auth::user()->role === 'funcionario') {
            $request->session()->regenerate();
            return redirect()->intended('/funcionario/dashboard');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros ou você não tem permissão para acessar.',
        ]);
    }


    /**
     
    *public function store(LoginRequest $request): RedirectResponse
    *{
    *   $request->validate([
    *        'email' => ['required', 'email'],
    *        'password' => ['required'],
    *   ]);
    *
    *   if (Auth::attempt($request->only('email', 'password'))) {
    *      $request->session()->regenerate();
    *
    *       // Redirecionar com base no papel do usuário
    *            if (Auth::user()->role === 'admin') {
    *            return redirect()->intended('/admin/dashboard');
    *       } elseif (Auth::user()->role === 'funcionario') {
    *          return redirect()->intended('/funcionario/dashboard');
    *     } else {
    *         return redirect('/'); // Ou outra página padrão
    *     }
    * }
    *
    *   return back()->withErrors([
    *        'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
    *   ]);
    * }

    */



    public function destroy(Request $request) 
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
