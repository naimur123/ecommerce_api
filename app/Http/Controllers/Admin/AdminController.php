<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware( 'auth:admin-api', [ 'except' => [ 'login','register' ] ] );
        // $this->admin = new Admin;

    }

    //Login
    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email'    => 'required|email',
                'password' => 'required|string|min:6',
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $token_validity = (24 * 60);

        $this->guard()->factory()->setTTL($token_validity);

        if (!$token = $this->guard()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);

    }

    //register
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required|string|between:2,100',
                'email'    => 'required|email|unique:admins',
                'phone'    => 'required',
                'password' => 'required|confirmed|min:6',
            ]
        );

        if ($validator->fails()) {
            return response()->json(
                [$validator->errors()],
                422
            );
        }
        $groups = Groups::all()->get('id');
        $admin = Admin::create(
            array_merge(
                $validator->validated(),
                ['group_id' => $groups],
                ['password' => bcrypt($request->password)]
            )
        );

        return response()->json(['message' => 'Admin created successfully', 'admin' => $admin]);

    }

    //logout
    public function logout()
    {
        $this->guard()->logout();

        return response()->json(['message' => 'User logged out successfully']);

    }


    //profile
    public function profile()
    {
        return response()->json($this->guard()->admin());

    }


    //New Token
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());

    }


    //Token Response
    protected function respondWithToken($token)
    {
        return response()->json(
            [
                'token'          => $token,
                'token_type'     => 'bearer',
                'token_validity' => ($this->guard()->factory()->getTTL() * 60),
            ]
        );

    }


    protected function guard()
    {
        return Auth::guard();

    }
}
