<?php

namespace Addons\ImagesShow;
use Common\Controller\Addon;

/**
 * 图片墙插件
 * @author Marvin9002
 */

    class ImagesShowAddon extends Addon{

        public $info = array(
            'name'=>'ImagesShow',
            'title'=>'图片墙',
            'description'=>'用于多图片显示或相册,以瀑布流形式展现',
            'status'=>1,
            'author'=>'Marvin9002',
            'version'=>'0.1'
        );

        public function install(){
            return true;
            
        }

        public function uninstall(){
            return true;
        }

        //实现的showImages钩子方法
        public function showImages($param){
            $config = $this->getConfig();
            if (!$config['codelogin']){
                die('没有启用图片展示插件') ;
            }
            $db=M('picture');
            if($param=='pubu'){//如果传入的参数为pubu则以瀑布流形式展示
                $nr=M('document')->where(array('status'=>1))->select();
                $pic='';
                $nr['pic']=array();
                foreach ($nr as $cover){
                    if($cover['cover_id']==0){
                        continue; 
                    }
                    $cover['pict']=$db->where(array('id'=>$cover['cover_id']))->select();
                    $pic[]=$cover;
                }
               // print_r($pic);
                $this->assign('pic',$pic);
                $this->display('PuBu');
            }else{//传入参数为关联图片ID则显示内容相册
                $id=$param;
                $map['id']=array('in',$id);
                $pic=$db->where($map)->select(); 
                if(!empty($pic)){//如果没有多图不显示相册
                    $this->assign('pic',$pic);
                    $this->display('Images');
                }
                
            }
            
        }
       

    }