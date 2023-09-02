<?php

namespace App\Http\Controllers;

use App\Mail\Toursim;
use App\Models\Admin;
use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use function Symfony\Component\Translation\t;
use App\Notifications\RegisterNotifaication;
use App\Notifications\EmailVerificationNotification;

class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (User::where('email', '=', $request['email'])->first()) {
            return response()->json(['message' => 'please change the email']);
        }
        $data = Validator::make($request->all(), [
            'First_name' => 'required|min:3',
            'Last_name' => 'required|min:3',
            'nationality' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6'
        ]);
        if ($data->fails()) {
            return response()->json(['message' => $data->errors()]);
        }
        $user = User::create([
            'First_name' => $request['First_name'],
            'Last_name' => $request['Last_name'],
            'nationality' => $request['nationality'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        $token = $user->createToken('authToken')->plainTextToken;
     //   $user->notify(new RegisterNotifaication());
       // $user->notify(new EmailVerificationNotification());
        return response()->json([
            'token' => $token,
            'state' => 200
        ]);
    }
    public function login(Request $request)
    {
        $admin = Admin::query();
        if ($admin->where('email', '=', $request['email'])->exists()) {
            if (!Auth::guard('admin')->attempt($request->only('email', 'password'))) {
                return Response()->json(['message' => 'password invalid']);
            }
            return redirect()->route('dashboard');
        } else {
            $user = User::query();
            if ($user->where('email', '=', $request['email'])->exists()) {
                if (!Auth::attempt($request->only('email', 'password'))) {
                    return Response()->json(['message' => 'password invalid', 'token' => null]);
                }
                $user = User::where('email', $request['email'])->firstorfail();
                $token = $user->createToken('authToken')->plainTextToken;
                return Response()->json(['user' => $user->only('First_name','Last_name','nationality'), 'token' => $token]);
            } else {
                return response()->json(['message' => 'you should signup before login']);
            }
        }

    }

    public function logout()
    {
        $token = \auth()->user()->tokens();
        $token->delete();
        return Response()->json(['massage' => 'logged out successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function profile()
    {
        $user = User::query()->find(Auth::user()->id);
        if ($user->gender != null && $user->image != null) {
            return response()->json([$user->only('First_name', 'Last_name', 'nationality', 'gender', 'image')]);
        } else if ($user->gender != null) {
            return $user->only('First_name', 'Last_name', 'nationality', 'gender');
        }
        if ($user->image != null) {
            return $user->only('First_name', 'Last_name', 'nationality', 'image');
        }
        return $user->only('First_name', 'Last_name', 'nationality');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if (!$request['image']) {
            $user->update($request->all());
            $user->save();
            return response()->json(['state' => 200]);
        } else {

            if ($request['image']) {
                if ($request->hasFile('image')) {
                    //GET filename with extension
                    $filenameWithExt = $request->file('image')->getClientOriginalName();
                    //Get just the filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    //Get extension
                    $extension = $request->file('image')->getClientOriginalExtension();
                    //Create new filename
                    $filenameToStore = $filename . '_' . time() . '_' . $extension;
                    //upload image
                    $path = $request->file('image')->storeAs('image', $filenameToStore);
                }
                $user['image'] = URL::asset('storage' . $path);
                $user->update($request->all());
                $user->save();
                return response()->json(['state' => 200]);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find(Auth::user()->id);
        $user->delete();
        return response()->json(['state' => 200]);
    }

}
