<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $users = User::select('name', 'email','password','is_admin','image')->get();

        return view('pages.users.index')->with(['users' => $users]);
    }


    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        User::create([
            'name'      => $request->get('name'),
            'email'     => $request->get('email'),
            'password'  => bcrypt($request->get('password'))
        ]);

        return redirect('users')
            ->with('flash_notification.message', 'User registered successfully')
            ->with('flash_notification.level', 'success');
    }

     /**
     * Show User Profile
     *
     * @param User $user
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {

        $user = User::find($id);

        return view('pages.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Material
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
        $user = User::find($user->id);

        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required'
        ]);

        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
        if($request->get('password') !== ''){
            $user->password = bcrypt($request->get('password'));
        }

        if($request->image != ''){        
            
            //code for remove old file
            if($user->image != ''  && $user->image != null){
                 $file_old = $user->image;
                 
            }

  
            // Get Image File
            $imagePath = $request->file('image');
            // Define Image Name
            $imageName = $user->id . '_' . time() . '_' . $imagePath->getClientOriginalName();
            // Save Image on Storage
            $path = $request->file('image')->storeAs('images/users/' . $user->id, $imageName, 'public');
            //Save Image Path
            $user->image = $path;
       }
       
        $user->save();
        
        if ($file_old != "") {

            Storage::disk('public')->delete($file_old);
        }

        return redirect('users')
            ->with('flash_notification.message', 'Profile updated successfully')
            ->with('flash_notification.level', 'success');
    }

    public function destroy(User $user)
    {
        Storage::deleteDirectory('public/images/users/' . $user->id);
        
        $user->delete();

        return redirect('users')->with('status', 'Eliminado com sucesso');
    }
}
