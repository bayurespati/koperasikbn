<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use App\Services\UserService;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /** 
     * Data of a user
     * 
     */
    public function user()
    {
        $data = User::find(Auth::user()->id);

        return response()->json([
            'status'  => 'Success',
            'message' => 'User',
            'data'    => $data
        ], 200);
    }


    /** 
     * Data of a users
     * 
     */
    public function index()
    {
        $data = User::with('role', 'divisi.unit')->where('role_id', '!=', 1)->get();

        return response()->json([
            'status'  => 'Success',
            'message' => 'Users',
            'data'    => $data
        ], 200);
    }


    /** 
     * Data of a roles 
     * 
     */
    public function roles()
    {
        $data = Role::where('name', '!=', 'Super Admin')->get();

        return response()->json([
            'status'  => 'Success',
            'message' => 'Users',
            'data'    => $data
        ], 200);
    }


    /** 
     * Store a newly created resource in storage. 
     * 
     */
    public function store(UserCreateRequest $request)
    {
        $userService = $this->userService->create($request);

        if (!$userService)
            return response()->json(['errors' => [
                'error' => ['Fail create user']
            ]], 400);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Success create user',
            'data'    => $userService
        ], 200);
    }


    /** 
     * Update the specified resource in storage. 
     * 
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        $userService = $this->userService->update($request, $user);

        if (!$userService)
            return response()->json(['errors' => [
                'error' => ['Fail update user']
            ]], 400);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Success update user',
            'data'    => $userService
        ], 200);
    }


    /** 
     * Remove the specified resource from storage. 
     * 
     */
    public function destroy(User $user)
    {
        $userService = $this->userService->delete($user);

        if (!$userService)
            return response()->json(['errors' => [
                'error' => ['Fail delete user']
            ]], 400);

        return response()->json([
            'status'  => 'Success',
            'message' => 'Success delete user',
            'data'    => $userService
        ], 200);
    }
}
