<?php
/**
 * get_class_methods···返回由类的方法组成的数组
 * ·格式:array get_class_methods(mixed $class_name);
 * 返回由 class_name指定的类中定义的方法名所组成的数组。如果出错，则返回NULL
 * 从PHP4.0.6开始，可以指定对象本身来代替class_name
 */
class person {
	public function say() {
		echo "say...";
	}
	public function run() {}
	protected function write() {}
	private function eat() {}

}
$class = new person();
/**
 * get_class_methods() 得到类或对象中的成员方法组成的数组
 * 如果是私有的或受保护的成员方法就不会被得到
 * 参数可以传类名也可以传对象
 */
var_dump(get_class_methods($class));