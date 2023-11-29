<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.user-form', [
            'users' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //dd('STORE', $request);
        $user = User::create($request->only('name', 'email', 'password'));

        if ($request->input('action') === 'save') {
            return redirect()->route('users.edit', ['user' => $user->id])
                ->with([
                    'message' => 'User <b>'.$user->name.'</b> created successfully.',
                    'alert' => 'primary' // primary | success | warning | danger
                ]);
        }

        if ($request->input('action') === 'save&exit') {
            return redirect()->route('users.index')
                ->with([
                    'message' => 'User <b>'.$user->name.'</b> created successfully.',
                    'alert' => 'primary' // primary | success | warning | danger
                ]);
        }

        return redirect()->back()
            ->with([
                'message' => 'Something went wrong 8)',
                'alert' => 'danger'
            ]);

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
        return view('users.user-form', [
            'user' => User::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, string $id)
    {
        //dd('UPDATE', $id, $request);
        $user = User::findOrFail($id);
        /*$user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);*/
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->filled('password')) {
            //$user->password = bcrypt($request->input('password'));
            $user->password = $request->input('password');
        }
        $user->save();

        if ($request->input('action') === 'save') {
            return redirect()->route('users.edit', ['user' => $user->id])
                ->with([
                    'message' => 'User <b>'.$user->name.'</b> updated successfully.',
                    'alert' => 'primary' // primary | success | warning | danger
                ]);
        }

        if ($request->input('action') === 'save&exit') {
            return redirect()->route('users.index')
                ->with([
                    'message' => 'User <b>'.$user->name.'</b> updated successfully.',
                    'alert' => 'primary' // primary | success | warning | danger
                ]);
        }

        return redirect()->back()
            ->with([
                'message' => 'Something went wrong 8)',
                'alert' => 'danger'
            ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')
            ->with([
                'message' => 'User <b>'.$user->name.'</b> deleted successfully.',
                'alert' => 'primary' // primary | success | warning | danger
            ]);
    }
}
