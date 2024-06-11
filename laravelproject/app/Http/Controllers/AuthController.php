<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }public function registerPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'ville' => 'required|array',
        ]);
        $user = new User();
        $user->name = $request->input('username');
        $user->ville = implode(',', $request->input('ville')); // Concatenate selected cities
        $user->save();
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }
    

    public function login()
    {
        return view('auth.login');
    }
public function loginPost(Request $request)
{
    $credentials = [
        'name' => $request->input('name')
    ];

    $user = User::where('name', $credentials['name'])->first();

    if ($user) {
        Auth::login($user);
        return redirect('/home')->with('success', 'Login Success');
    }

    return back()->with('error', 'User not found');
}
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}





