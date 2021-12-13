<?php

namespace App\Http\Livewire\Login;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login.login');
    }

    public function login(){
        $datos = $this->validate();
        // dd($datos);
        if(Auth::attempt($datos)){
            return redirect(route('libros.index'));
        }else{
            $this->emit('alerta', 'Tu correo o contraseña es incorrecto');
            // Limpiar los campos
            // $this->email = null;
            // $this->password = null;
        }

    }

    public function rules(){
        return [
            'email' => 'required|email',
            'password' => 'min:8|string|required'
        ];
    }
}
