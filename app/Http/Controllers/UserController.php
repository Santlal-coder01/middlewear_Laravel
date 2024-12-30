<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Show the login form.
     */

    //  public function __construct()
    //  {
    //      $this->middleware('right');
    //  }

    public function showRegisterForm()
    {
        return view('register');
    }

    // Handle user registration
    public function register(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create the new user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Return a JSON response upon successful registration
        return response()->json([
            'message' => 'User registered successfully!',
            'status' => true,
            'user' => $user,  // Optionally, you can return the created user data
        ], 201); // 201 status code for "Created"
    }

     public function login()
     {
         return view('index');
     }
  

    /**
     * Handle login submission.
     */
    public function loginPost(Request $request)
    {
    

    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validation error',
            'errors' => $validator->errors(),
        ], 422);
    }

   
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
      
        $user = Auth::user();


        return response()->json([
            'success' => true,
            'message' => 'Login successful!',
            'data' => [
                'user_id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,    
            ],
        ]);
    }

    return response()->json([
        'success' => false,
        'message' => 'Invalid credentials, please try again.',
    ], 401);
}
}
