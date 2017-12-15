<?php

namespace Admin\Controller;

use Think\Controller;

class UploadsController extends Controller {

	public function uploadPic() {
		$upload = new \Think\Upload();
		$upload->maxSize	= 3145728;	//设置附件上传大小
		$upload->exts 		= array('jpg','gif','png');	//设置上传文件类型
		$upload->rootPath	= './Uploads/Picture/';	//设置附件上传(子)目录
		$info = $upload->upload();
		if (!$info) {
			$this->ajaxReturn(['info'=>$upload->getError(),'status'=>0]);
		} else {
            $files=$info['file'];
            //判断图片是否已经存在
            $pic = M('Picture')->where(['md5'=>$files['md5'],'sha1'=>$files['sha1']])->find();
            if($pic){
                $this->ajaxReturn(['data'=>['id'=>$pic['id']],'info'=>'上传成功','status'=>1]);
            }else{
                $data = array(
                    'path' => 'Uploads/picture/'.$files['savepath'].$files['savename'],
                    'md5'  => $files['md5'],
                    'sha1' => $files['sha1'],
                    'create_time' => time()
                );
                $picture = M('Picture');
                $id = $picture->add($data);
                if($id){
                    $this->ajaxReturn(['data'=>['id'=>$id],'info'=>'上传成功','status'=>1]);
                }
            }			
		}
	}

}