<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {

    public function index() {
        $this->display();
    }
    /**
     * 验证码
     */
    public function verify() {
        $config = [
            'fontSize' => 34,
            'length'   => 4,
        ];
        $verify = new \Think\Verify($config);
        $verify->entry();
    }
    
    public function login() {

        $verify = new \Think\Verify();
        if(!$verify->check(I('verify'))){
            $this->error("验证码不正确!");
        }        
        $user = M('user')->where(array('uname' => I('uname','','htmlspecialchars')))->find();
        if (!$user || $user['pwd'] != I('pwd', '', 'MD5')) {
            $this->error('用户名或密码错误');
        }

        $data = array(
            'last_time' => date('Y-m-d H:i:s'),
            'last_ip' => get_client_ip()
        );
        $db = M('user')->where('id='.$user['id'])->save($data);

        //写入session
        session('admin_id',$user['id']);
        session('admin_username',$res['username']);
        $this->success("登录成功!",U('Index/index'));

    }
    
    public function logout() {
        session(null);
        $this->redirect('Login/index');
    }
}
