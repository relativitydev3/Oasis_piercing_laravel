<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        
        $user = new User();

        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request): RedirectResponse
    {
        
        $data = $request->validated();

        // Encriptar la contraseña si se proporciona
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
    
        User::create($data);
        // User::create($request->validated());

        return Redirect::route('user.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user): RedirectResponse
    {

        $data = $request->validated();

        // Solo encriptar la contraseña si el usuario ingresó una nueva
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            // No actualizar la contraseña si está vacía
            unset($data['password']);
        }
    
        // $user->update($request->validated());
        $user->update($data);

        return Redirect::route('user.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        User::find($id)->delete();

        return Redirect::route('user.index')
            ->with('success', 'User deleted successfully');
    }
}
