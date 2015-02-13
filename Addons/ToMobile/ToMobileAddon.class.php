<?php

namespace Addons\ToMobile;
use Common\Controller\Addon;

/**
 * 转向手机页面插件
 * @author flutesing<www.flutesing.com>
 */

    class ToMobileAddon extends Addon{
        public $info = array(
            'name'=>'ToMobile',
            'title'=>'转向手机页面',
            'description'=>'转向手机页面，切换到手机页面',
            'status'=>1,
            'author'=>'flutesing<www.flutesing.com>',
            'version'=>'2014.5.25'
        );

        public function install(){
            return true;
        }

        public function uninstall(){
            return true;
        }

        //实现的pageHeader钩子方法
        public function pageHeader(){
            $config = $this->getConfig();
            if($config['to_mobile_type'] != '1') return FALSE;
            if($config['js_to_mobile_type'] == '1') $this->assign('url',$config['js_url']);
            else{
                $url = $_SERVER["SERVER_PORT"]== '80' ? $_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]:$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; 
                $find = explode('|', $config['js_replace_url']);
                $url = str_replace($find, '##########', $url);
                $url = str_replace('##########',$config['js_url'], $url);
                $this->assign('url',$url);
            }
            $this->display('to_mobile');
        }
        
        public function app_begin(){
            $config = $this->getConfig();
            if($config['to_mobile_type'] != 2) return FALSE;
            if(is_mobile()){ //header('Location: http://www.example.com/');
                C('DEFAULT_THEME', $config['mobile_theme']);
            }
        }
        public function AdminIndex(){
//            P(__ROOT__.__SELF__);
            P($config=$this->getConfig('to_mobile_type'));P($config['js_url'].__SELF__);
        }

    }
  
    function is_mobile() {
	static $is_mobile;

	if ( isset($is_mobile) )
		return $is_mobile;

	if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
		$is_mobile = false;
	} elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false // many mobile devices (all iPhone, iPad, etc.)
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
		|| strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
			$is_mobile = true;
	} else {
		$is_mobile = false;
	}

	return $is_mobile;
}
