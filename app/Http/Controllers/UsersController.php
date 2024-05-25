<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['user'] = User::all();
        return view('userspage', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['users'] = User::all();
        return view('users.createadmin', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        // $request->validate([
        //     'number' =>  'required',
        //     'password' => 'required',
        // ],[
        //     'number.required' => 'nomer tidak boleh kosong',
        //     'password.required' => 'password tidak boleh kosong'
        // ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.createadmin');
    }

    public function regis(Request $request)
    {        
        // $request->validate([
        //     'number' =>  'required',
        //     'password' => 'required',
        // ],[
        //     'number.required' => 'nomer tidak boleh kosong',
        //     'password.required' => 'password tidak boleh kosong'
        // ]);

        User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email dan Password tidak sesuai',
        ]);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['cari'] = User::find($id);
        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::find($id);
        $password = $request->password;

        if (empty($password)) {
            $data->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'role' => $request->role,
                'email' => $request->email,
            ]);
        } else {
            $data->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'role' => $request->role,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }

        return redirect()->route('users.createadmin');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect()->route('users.createadmin');

    }
}
