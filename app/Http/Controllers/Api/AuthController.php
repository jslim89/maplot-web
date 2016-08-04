<?php

namespace App\Http\Controllers\Api;

use App\Libraries\ApiResponse;

use Illuminate\Http\Request;

class AuthController extends \App\Http\Controllers\Controller
{

    /**
     * logout
     * 
     * @param Request $request 
     * @return Illuminate\Http\JsonResponse
     */
    public function getLogout(Request $request)
    {
        $response = new ApiResponse();

        \Auth::logout();
        \Session::flush();

        $response->setMessage('You\'ve logged out.');
        return $response->get();
    }
    
    /**
     * login
     * 
     * @param Request $request 
     * @return Illuminate\Http\JsonResponse
     */
    public function postLogin(Request $request)
    {
        $response = new ApiResponse();

        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];

        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $response->setStatus(400);
            $response->setMessage($validator->errors()->first());
            return $response->get();
        }
        $remember = !empty($request->get('remember_me', false));
        if (\Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')], $remember)) {
            $response->setMessage(sprintf('Welcome back \'%s\'.', $request->get('username')));
            return $response->get();
        }

        $response->setStatus(401);
        $response->setMessage('Invalid username or password.');
        return $response->get();
    }
}
