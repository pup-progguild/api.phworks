<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Province;
use App\Municipality;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

use DB;

class UserController extends Controller
{
    public function __construct()
    {
        // Apply the jwt.auth middleware to all methods in this controller
        // except for the authenticate method. We don't want to prevent
        // the user from retrieving their token if they don't already have it
        JWTAuth::setIdentifier('user_id');
        $this->middleware('jwt.auth', ['except' => ['authenticate']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return User::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        try {
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // if no errors are encountered we can return a JWT
        return response()->json(compact('token'));
    }

    public function getAuthenticatedUser()
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        $user['provname'] = Province::where('provcode', '=', $user['provcode'])->get(array('provname'));
        $user['cityname'] = Municipality::where('citycode', '=', $user['citycode'])->get(array('city_name'));

        $user['provname'] = $user['provname'][0]['provname'];
        $user['cityname'] = $user['cityname'][0]['city_name'];

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }

    public function getEmployees()
    {
        header('Access-Control-Allow-Methods: GET, POST, OPTIONS');


        $employees = DB::table('users')
                        ->where('role', '=', 'employee')
                        ->join('provinces', 'provinces.provcode' , '=', 'users.provcode')
                        ->join('field', 'field.field_id' , '=', 'users.field_id')
                        ->join('municipality', 'municipality.citycode' , '=', 'users.citycode')
                        ->select('users.*', 'provinces.provname', 'municipality.city_name', 'field_name')
                        ->get();
        return $employees;                        
    }
}
