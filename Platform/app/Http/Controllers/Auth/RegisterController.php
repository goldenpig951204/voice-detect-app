<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return User::create($data);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $data = $request->all();
        $data['domain'] = "http://local.saas.com";
        $result = $this->sendUserInfoAndGengerateSaaS($data);
        if(isset($result['token'])) {
            $data['api_token'] = $result['token'];
            $data['password'] = Hash::make($data['password']);
            $user = $this->create($data);
            return response()->json(["user" => $user]);
        } else {
            return response()->json(["error" => $result["error"]]);
        }
    }

    public function sendUserInfoAndGengerateSaaS(array $data) {
        $cpanel = App::make('cpanel');

        // create subdomain
        $addsubdomain = $cpanel->api2('lena', 'SubDomain', 'addsubdomain', array(
            'domain' => $data['name'],
            'rootdomain' => 'voxnet.tech',
            'disallowdot' => '1'
        ));
        // source move to the subdomain directory
        $extractsource = $cpanel->api('lena', 'Fileman', 'fileop', array(
            'op' => 'extract',
            'sourcefiles' => '/public_html/saas.zip',
            'destfiles' => '/public_html/' . $data['name'],
            'doubledecode' => '1'
        ));

        // 

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:3000/owner/register',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => http_build_query($data)
        ));
        $result = curl_exec($curl);
        if (curl_errno($curl)) {
            return NULL;
        }
        curl_close($curl);
        $result = json_decode($result, true);
        return $result;
    }
}
