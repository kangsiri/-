<?php
namespace Admin\Model;
use Think\Model;
class AttributeModel extends Model {
	protected $insertFields = 'cid,aname,a_def_val';
	protected $updateFields = 'aname,a_def_val';
	protected $_validate = array(
		array('aname','require','属性名不能为空'),
		array('cid','require','父级分类不能为空',0,'regex',1),
	);
	protected $_auto = array(
		array('aname','trim',3,'function'),
		array('a_def_val','trim',3,'function'),
	);
	//取出属性数据
	public function getData($where){
		$data = $this->field('aid,aname,a_def_val')->where($where)->select();
		if($data==null){
			return false;
		}
		//整理数据
		valToArr($data,'a_def_val');
		return $data;
	}
}
