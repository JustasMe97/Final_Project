<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Managers\UsersManager;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct(protected UsersManager $manager)
    {
    }

    public function index()
    {
        $users = $this->manager->getUsers();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserStoreRequest $request)
    {
        $user = $this->manager->createUser($request);
        return redirect()->route('users.show', $user);
    }

    public function show(User $user)
    {
        return view('admin.users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user=$this->manager->updateUser($request,$user);
        return redirect()->route('users.show', $user);
    }

    public function destroy(User $user)
    {
        $this->manager->deleteUser($user);
        return redirect()->route('users.index');
    }
}
