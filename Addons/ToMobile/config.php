<?php
return array(
        'to_mobile_type' => array(
            'title' => '选择转向模式',
            'type'  => 'select',
            'options' =>array('1'  =>'脚本转向',
                              '2'  =>'主题切换'),
            'value' => '1',
        ),
        
//        'to_mobile_replace' => array(
//            'title' => '脚本转向类型',
//            'type'  => 'select',
//            'options'=>array(
//                    '1' => '统一转向',
//                    '2' => '替换转向',
//                ),
//            'value' => '1',
//            'tip' => '统一转向是转向移动页面入口，替换转向是转向对应移动页面',
//        ),
//    
//        'url'    => array(
//            'title' => '移动地址',
//            'type'  => 'text',
//            'value' => 'm.flutesing.com',
//            'tip'   => '统一转向的移动地址,如果为替换转向则是替换后的地址',
//        ),
//        'replace_url' => array(
//            'title' => '被替换地址',
//            'type'  => 'text',
//            'value' => 'www.flutesing.com|flutesing.com',
//            'tip'   => '如果为统一转向时可以为空',
//        ),
//    
        'group' => array(
            'type'  =>  'group',
            'options'   => array(
                'js'    => array(
                        'title' => '脚本转向配置',
                        'options' => array(
                                'js_to_mobile_type' => array(
                                        'title' => '转向类型',
                                        'type'  => 'radio',
                                        'options'=>array(
                                                '1' => '统一转向',
                                                '2' => '替换转向',
                                            ),
                                        'value' => '1',
                                        'tip' => '统一转向是转向移动页面入口，替换转向是转向对应移动页面',
                                    ),
                                'js_url'    => array(
                                        'title' => '移动地址',
                                        'type'  => 'text',
                                        'value' => 'm.flutesing.com',
                                        'tip'   => '统一转向的移动地址,如果为替换转向则是替换后的地址',
                                    ),
                                'js_replace_url' => array(
                                        'title' => '被替换地址',
                                        'type'  => 'text',
                                        'value' => '127.0.0.1|www.flutesing.com|flutesing.com',
                                        'tip'   => '如果为统一转向时可以为空',
                                    ),
                                
                            ),
                    ),
                'theme'         => array(
                        'title' => '主题切换配置',
                        'options' => array(
                                'mobile_theme' => array(
                                    'title' => '移动主题名称',
                                    'type'  => 'text',
                                    'value' => 'mobile',
                                    'tip'   => '当用手机访问时，自动切换到该主题',
                                ),
                            ),
                    ),
            ),
        ),
    
        
);
					