<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }




/**
     * Get a JWT via given registeration.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function register(Request $request)
    {

        $rules = [
            'name' => 'required|string|max:255|min:5',
            'phone' => 'required|string|max:255|starts_with:+|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'timezone' => 'required|string|max:255|timezone',
            'callingcode' => 'required|string|max:255|starts_with:+',
            'password' => 'required|string|min:6|confirmed',
        ];

        $messages = [
            'required' => ':attribute is required!',
            'email.email' => 'mail is not well written',
            'phone.starts_with' => 'phone number must starts with a plus sign for international code',
            'phone.unique' => 'this phone number already exists in our database',
            'email.unique' => 'this email address already exists in our database',
            'max' => ':attribute is too long',
            'min' => ':attribute is too short',
            'password.confirmed' => 'Passwords does not match'
        
        ];
        
        $validator = Validator::make($request->all(), $rules,$messages);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'timezone' => $request->timezone,
            'callingcode' => $request->callingcode,
            'password' => bcrypt($request->password),
         ]); 

        $token = auth()->login($user);

        return $this->respondWithToken($token);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
//Request $request;
    	//return request();
        $credentials = request(['email', 'password']);

        //return auth()->attempt($credentials);

//return auth()->payload();

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return redirect("/personal?token=".$token);

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(Request $request)
    {
       
        return response()->json($request);

        //return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}