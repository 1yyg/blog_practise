<?php

class UserController extends BaseController {
     
    public function __construct() {
       $this->beforeFilter('csrf', array('on'=>'post'));
          $this->beforeFilter('auth', array('only'=>array('getDashboard')));
   }    

                /**
                 * 显示给定用户的资料。
                 */
            public function getRegister() {
                $this->layout->content = View::make('users.register');
            }

            /**
             * 注册
             *
             * @var array
             */
            public function postCreate() {
                $validator = Validator::make(Input::all(), User::$rules);

                    if ($validator->passes()) {
                        // 验证通过就存储用户数据
                        $user = new User;//实例化User对象
                        $user->username = Input::get('username');
                        $user->email = Input::get('email');
                        $user->password = Hash::make(Input::get('password'));
                        $user->save();

                        return Redirect::to('users/login')->with('message', '欢迎注册，好好玩耍!');    
                    } else {
                        // 验证没通过就显示错误提示信息   
                     return Redirect::to('users/register')->with('message', '请您正确填写下列数据')->withErrors($validator)->withInput();           
                    }

            }

            /**
             * 登录视图
             *
             * @var array
             */
            public function getLogin() {
                $this->layout->content = View::make('users.login');
            }

            /**
             * 登录验证
             *
             * @var array
             */
               public function postSignin() {
                if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
                    return Redirect::to('users/dashboard')->with('message', '欢迎登录');
                } else {
                    return Redirect::to('users/login')->with('message', '用户名或密码错误')->withInput();
                }
            }
            /**
             * 登进
             *
             * @var array
             */
            public function getDashboard() {
                $this->layout->content = View::make('users.dashboard');
            }

            /**
             * 登出
             *
             * @var array
             */
            public function getLogout() {
                    if(Auth::check())
                    {
                        Auth::logout();
                    }
                return Redirect::to('users/login')->with('message','你现在已经退出登录了!');
                }

}
