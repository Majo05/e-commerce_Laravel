<?php

namespace App\Http\Controllers;

use App\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class ProfileController extends Controller
{
    public function view()
    {
        $data = User::findOrFail(Auth::user()->id);

        return view('profile', [
            'name' => $data['name'],
            'id' => $data['id'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'doctype_id' => $data['doctype_id'],
            'nroDoc' => $data['nroDoc'],
            'phone' => $data['phone'],
            'avatar'=> "/storage/avatars/".$data['avatar'],
            'address' => $data['address'],
            'types' => Type::all(),
        ]);
    }

    public function update(Request $request) {
        
        $profile = User::findOrFail(Auth::user()->id);

        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:100'],
            'doctype_id' => ['required'],
            'nroDoc' => ['required', 'numeric'],
            'phone' => ['required', 'numeric'],
            'address' => ['required', 'string', 'max: 255'],
        ]);

        $path = $request['avatar'];

        if (!is_null($path)) {
            $filename = $path->store('public/avatars');
            $dbFilename = explode('/', $filename);
            $filename = $dbFilename[2];
           
        }
        
        if(isset($filename)) {
            $profile->avatar = $filename;
        }

        /*
        // para cambiar password
        if( $request->input("password") && 
            $request->input("password-confirm") && 
            $request->input("password-confirm") == $request->input("password")
        ) {
            $profile->password = Hash::make($request->input("password"));
        }*/

        $profile->name = $request->input("name");
        $profile->lastname = $request->input("lastname");
        $profile->email = $request->input("email");
        $profile->doctype_id = $request->input("doctype_id");
        $profile->nroDoc = $request->input("nroDoc");
        $profile->phone = $request->input("phone");
        $profile->address = $request->input("address");

        $profile->save();

        return redirect('/profile')->with('status', 'Perfil actualizado!');
    }
}
