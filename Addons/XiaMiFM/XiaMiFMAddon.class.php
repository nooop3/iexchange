<?php

namespace Addons\XiaMiFM;
use Common\Controller\Addon;

/**
 * 豆瓣FM插件
 * @author Moobusy
 */

    class XiaMiFMAddon extends Addon{

        public $info = array(
            'name'=>'XiaMiFM',
            'title'=>'虾米音乐电台',
            'description'=>'虾米音乐电台',
            'status'=>1,
            'author'=>'Moobusy',
            'version'=>'0.1'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的pageFooter钩子方法
        public function pageFooter($param){
            $config = $this->getConfig();
            if ($config['onuse']==1) {
                $this->display('index');
            }
        }

    }