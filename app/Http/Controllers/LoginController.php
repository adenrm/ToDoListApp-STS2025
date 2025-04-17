<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\pelaksana;
use App\Models\penugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnValue;

class LoginController extends Controller
{

    public function index() {
        return view('login');
    }
    public function signIn(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        // $akun = admin::where('email', $email);
        // if ($akun){
        //     $checkPw = Hash::check($password, $request->input('password'));
        //     if ($checkPw){
        //         return view('admin');
        //     }
        // } else {
        //     return view('login');
        // }
        // $checkPw = Hash::check('password123', $request->input('password'));

        $akunAdmin = admin::where('email', $email)->pluck('email');
        $passwordAdmin = admin::where('email', $email)->pluck('password');
        $passwordPenugas = penugas::where('email', $email)->pluck('password');
        $passwordPelaksana = pelaksana::where('email', $email)->pluck('password');
        $jabatanPenugas = penugas::where('email', $email)->pluck('jabatan');
        $passwordAdmin = admin::where('email', $email)->pluck('password');
        $passwordAdmin = admin::where('email', $email)->pluck('password');
        $passwordnye = '["'.$password.'"]';
        if ($akunAdmin == null){
            echo "Email tidak ada";
            return view('login');
        }
            if ($passwordnye == $passwordAdmin){
               return redirect()->action([PageController::class, 'admin']);
            } elseif ($passwordnye == $passwordPenugas){
                if($jabatanPenugas == '["Manager"]'){
            return redirect()->action([managerController::class, 'index']);   
                } elseif ($jabatanPenugas == '["Ceo"]'||'["ceo"]') {
            return redirect()->action([ceoController::class, 'index']);   
                }
            } elseif ($passwordnye == $passwordPelaksana){
            return redirect()->action([PelaksanaController::class, 'index']);
            } else {
                echo "Password/Email salahh";
                return view('login');
            }


        // $akunPenugas = penugas::where('email', $email);
        // if ($akunPenugas){
        //     if ($akunPenugas->password == $password){
        //         if ($akunPenugas->jabatan == 'Manager'||'manager'){
        //             return view('manager');
        //         }
        //         if ($akunPenugas->jabatan == 'Ceo'||'ceo'){
        //             return view('ceo');
        //         }
        //     }
        // }

        // $akunPelaksana = pelaksana::where('email', $email);
        // if ($akunPelaksana){
        //     if ($akunPelaksana->password == $password){
        //        return view('pelaksana');
        //     }
        // }
    }
}
