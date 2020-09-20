<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $loginRequest)
    {
        try {
            $credentials = self::credentials($loginRequest);
            if (!$token = auth('user')->attempt($credentials)) {
                return json_fail('账号或者用户名错误!',null,100 );
            }
            if (auth('user')->state == 0){
                return json_fail('该用户已禁用，请联系管理员!',null,100 );
            }
            return self::respondWithToken($token, '登陆成功!');
        } catch (\Exception $e) {
            return json_fail('登陆失败!',null,500,   500);
        }
    }

    public function logout()
    {
        try {
            auth()->logout();
        } catch (\Exception $e) {

        }
        return auth()->check() ?
            json_fail('注销登陆失败!', null,100 ) :
            json_success('注销登陆成功!',null,200  );
    }

    public function refresh()
    {
        try {
            $newToken = auth()->refresh();
        } catch (\Exception $e) {
        }
        return $newToken != null ?
            self::respondWithToken($newToken, '刷新成功!') :
            json_fail('刷新token失败!',null, 100);
    }

    protected function credentials($request)
    {
        return ['work_id' => $request['work_id'], 'password' => $request['password']];
    }

    protected function respondWithToken($token, $msg)
    {
        return json_success($msg, array(
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'type'=>auth()->type()
        ),200);
    }

    public function getinfo(Request $request){
        return bcrypt($request["password"]) ;
    }


//    public function registered(Request $registeredRequest)
//    {
//        return User::createUser(self::userHandle($registeredRequest)) ?
//            response()->success(200, '注册成功!', null) :
//            response()->fail(100, '注册失败!', null);
//    }
//
//    /**
//     * 用户信息处理
//     * @param $request
//     * @return array
//     */
//    protected function userHandle($request)
//    {
//        $registeredInfo = $request->except('password_confirmation');
//        $registeredInfo['password'] = bcrypt($registeredInfo['password']);
//        $registeredInfo['work_id'] = $registeredInfo['work_id'];
//        return $registeredInfo;
//    }
}
