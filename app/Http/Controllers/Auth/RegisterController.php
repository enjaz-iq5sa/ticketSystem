<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\invitations;
use App\Mail\InvitationMail;
use App\Providers\RouteServiceProvider;
use App\User;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\users_roles;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('authLayer2');
    }

    public function showRegistrationForm(){
        $userRoles = users_roles::all();
        return view("auth.register",["title"=>"Add new user","roles"=> $userRoles]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function invitationValidator(array $data)
    {

        return Validator::make($data, [
            'user_name' => ['required', 'string', 'max:255'],
            'user_email' => ['required', 'string', 'email', 'max:255'],
            'user_role'=>['required',"integer",Rule::in(users_roles::all()->pluck("role_id")->toArray())]
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        return User::create([
//            'user_name' => $data['user_name'],
//            'user_email' => $data['user_email'],
////            'password' => Hash::make($data['password']),
//        ]);
    }



    public function register(Request $request){
        $mutable = Carbon::now();
        $immutable = CarbonImmutable::now();
        $modifiedMutable = $mutable->add(1, 'day');
        $modifiedMutable->toDateTimeString();

        $validate = $this->invitationValidator($request->all());

        if ($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();

        }

        $find_user = User::all()->where("email","=",$request->input("user_email"));
        if ($find_user->count() >=1)
            return redirect()->back()->with("error","Email already registered");



        //save the invitation into table

        $saveInvi = new invitations();
        $saveInvi->user_id = Auth::id();
        $saveInvi->sentTo = $request->input("user_email");
        $saveInvi->name = $request->input("user_name");
        $saveInvi->role_id = $request->user_role;
        $saveInvi->expire_date = $modifiedMutable;

        $saveInvi->save();
        Mail::to($request->input("user_email"))->send(new InvitationMail([$this->generateInvitationUrl()]));

        return redirect()->back()->with(["status"=>"Added Successful and mail sent to " . $request->input("user_email")]);



    }


    public function generateInvitationUrl(){
        $invitation_id = invitations::all()->last()->id;
        return route("invitation",[$invitation_id]);

    }


}
