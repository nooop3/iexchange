<?php

namespace Addons\Fancybox;
use Common\Controller\Addon;

/**
 * 图片弹出播放插件
 * @author che1988  zhuxiulai@qq.com
 */

    class FancyboxAddon extends Addon{

        public $info = array(
            'name'=>'Fancybox',
            'title'=>'图片弹出播放',
            'description'=>'让文章内容页的图片有弹出图片播放的效果',
            'status'=>1,
            'author'=>'che1988',
            'version'=>'0.1'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的documentDetailAfter钩子方法
        public function documentDetailAfter($param){
			$this->assign('addons_config', $this->getConfig());
			$this->display('content');
        }

    }