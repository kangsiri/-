<?php
namespace Home\Controller;
class UserController extends CommonController {
	//1.构造方法：
	public function __construct() {
		parent::__construct(); //(1)先登录父类CommonController的构造方法---验证是否可以免登录。
		$allow_action = array( //(2)指定免检方法列表,例如login
			'login','captcha','register'
		); //(3)如果(1)返回变量userInfo=false并且login不在免检方法列表中，就需要去登录login
		if($this->userInfo === false && !in_array(ACTION_NAME,$allow_action)){
			$this->error('请先登录。',U('User/login'));
		}
	}
	//2.欢迎来到会员中心index()
	public function index(){
		$this->display();
	}
	//3.用户登录login()
	public function login() {
		//处理表单
		if (IS_POST) {
			//判断验证码
			$this->checkVerify(I('post.captcha'));//I()过滤方法读取POST方式传递的captcha变量
			//判断用户名和密码
			$name = I('post.user','','trim');//I()过滤方法读取POST方式传递的user变量
			$pwd = I('post.pwd','','trim');//I()过滤方法读取POST方式传递的pwd变量
			//调用成员模型类MemberModel.class.php方法：1.校验用户名和密码checkUser($name,$pwd)
			$rst = D('member')->checkUser($name,$pwd);
			if($rst!==true){
				$this->error($rst);//错误显示：用户名不存在或密码错误
			}
			$this->success('登录成功，请稍后',U('Index/index'));//成功跳转主页
			return;
		}
		$this->display();
	}
	//4.退出logout()
	public function logout(){
		session('[destroy]');
		$this->success('退出成功',U('Index/index'));
	}
	//5.注册新用户register()
	public function register() {
		if(IS_POST){
			$this->checkVerify(I('post.captcha'));//I()过滤方法读取POST方式传递的captcha变量
			$rst = $this->create('member','add');//调用CommonController的创建插入方法create 
			if($rst===false){
				$this->error($rst->getError());
			}
			$this->success('用户注册成功',U('Index/index'));
			//注册后自动登录
			$name = I('post.user','','trim');
			$pwd = I('post.pwd','','trim');
			D('member')->checkUser($name,$pwd);
			return ;
		}
		$this->display();
	}
	//6.生成验证码captcha()
	public function captcha() {
		$verify = new \Think\Verify();
		return $verify->entry();
	}
	//7.检查验证码checkVerify()
	private function checkVerify($code, $id = '') {
		$verify = new \Think\Verify();
		$rst = $verify->check($code, $id);
		if($rst!==true){
			$this->error('验证码输入有误');
		}
	}
	//8.查看收件地址addr()
	public function addr(){
		$mid = $this->userInfo['mid'];
		$data['addr'] = D('member')->getAddr($mid);
		$this->assign($data);
		$this->display();
	}
	//9.修改收件地址addrEdit()
	public function addrEdit(){
		if(IS_POST){
			$mid = $this->userInfo['mid'];
			$rst = $this->create('member','save',2,"mid=$mid");
			if($rst===false){
				$this->error('修改失败');
			}
			$this->redirect('User/addr');
			return;
		}
		$this->addr();
	}
}