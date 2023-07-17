<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = new User();
        $users = User::all()->toQuery()->paginate(5);
        return view('admin.users.index', [
            'title' => 'Users List',
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create', [
            'user' => new User(),
            'status_options' => User::status_option(),
            'user_types' => User::user_types(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'type' => ['required', 'in:normal_user,author_user,admin,super-admin'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'status' => ['required', 'in:active,inactive,blocked'],
        ]);
        
        $user = new User();
        $user->email = $request->input("email");
        $user->name = $request->input("name");
        $user->password = Hash::make($request->password);
        $user->type = $request->input("type");
        $user->status = $request->input("status");
        $user->save();

        if($request->input("type") == 'admin' || $request->input("type") == 'super-admin' || $request->input("type") == 'author_user'){
            $name = explode(" ",$request->input("name"));

            $author = new Author();
            $author->user_id = $user->id;
            $author->first_name = $name[0];
            $author->last_name = $name[1];
            $author->email = $request->input('email');
            $author->save();
        }

        return redirect()->route('users.index')->with('success', "User ({$user->name}) Created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', [
            'user' => $user,
            'status_options' => User::status_option(),
            'user_types' => User::user_types(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'type' => ['required', 'in:normal_user,author_user,admin,super-admin'],
            'status' => ['required', 'in:active,inactive,blocked'],
        ]);

        $user = User::findOrFail($id);

        $user->email = $request->input("email");
        $user->name = $request->input("name");
        $user->type = $request->input("type");
        $user->status = $request->input("status");
        $user->save();

        return redirect()->route('users.index')->with('success', "User ({$user->name}) Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', "User ({$user->name}) Deleted");
    }
}
