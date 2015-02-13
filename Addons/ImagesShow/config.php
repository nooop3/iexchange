<?php

return array(
    'group' => array(//配置在表单中的键名 ,这个会是config[group]
        'type' => 'group',
        'options' => array(
            'basicsettings' => array(
                'tip' => '必须在这里开启以后才能使用此功能',
                'title' => '基本设置',
                'options' => array(
                    'codelogin' => array(
                        'title' => '是否启用图片展示插件:',
                        'type' => 'radio',
                        'options' => array(
                            '1' => '开启',
                            '0' => '关闭'
                        ),
                        'value' => 1,
                    )
                )
            ),
            
        )
    ),
);

