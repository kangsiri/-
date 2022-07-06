<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
	protected $userInfo = false;  //用户登录信息（未登录为false）
	//1.构造方法:执行checkUser()看看是否已登录
	public function __construct() {
		parent::__construct();
		//登录检查
		$this->checkUser();
	}
	//2.定义检查用户登录方法checkUser()
	private function checkUser(){
		if(session('?user_id')){ //用户号存在就读取
			$userinfo = array(
				'mid' => session('user_id'),       //会员id
				'mname' => session('user_name'),  //用户名
			);
			$this->userInfo = $userinfo;    //保存登录后的信息
			$this->assign($userinfo);     //为模板分配用户信息变量
		}
	}
	//3.公共数据创建并插入表方法
	 /** @param string $tablename 表名
	 * @param string $func 操作方法
	 * @param int $type 验证时机
	 * @param string/array $where 查询条件
	 * @return mixed 操作结果
	 */
	protected function create($tablename,$func,$type='',$where=array()){
		$Model = D($tablename);//具体模型类对象也继承了基础模型类对象的8个方法
		if(!$Model->create(I('post.'),$type)){ //调用用户模型类create方法创建数据(继承来的)
			$this->error($Model->getError());
		}
		if(empty($where)){
			return $Model->$func();//条件为空返回$Model->$func() ,传递过来add参数
		}
		return $Model->where($where)->$func();//条件不为空返回$Model->where($where)->$func()
	}
}
