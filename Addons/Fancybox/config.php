<?php
return array(
	'group'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'是否开启图片分组:',//表单的文字
		'type'=>'radio',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>array(		 //select 和radion、checkbox的子选项
			'1'=>'开启',		 //值=>文字
			'0'=>'关闭',
		),
		'value'=>'1',			 //表单的默认值
	),
	'transitionIn'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'动画进入效果:',//表单的文字
		'type'=>'radio',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>array(		 //select 和radion、checkbox的子选项
			'elastic'=>'弹性弹出',		 //值=>文字
			'fade'=>'渐变的',
			'none'=>'没有效果',
		),
		'value'=>'fade',			 //表单的默认值
	),
	'transitionOut'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'动画消失效果:',//表单的文字
		'type'=>'radio',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>array(		 //select 和radion、checkbox的子选项
			'elastic'=>'弹性弹出',		 //值=>文字
			'fade'=>'渐变的',
			'none'=>'没有效果',
		),
		'value'=>'fade',			 //表单的默认值
	),
	'padding'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'浏览框内边距:',//表单的文字
		'type'=>'text',		 //表单的类型：text、textarea、checkbox、radio、select等
		'value'=>'10',			 //表单的默认值
	),
	'hideOnContentClick'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'是否点击图片关闭:',//表单的文字
		'type'=>'radio',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>array(		 //select 和radion、checkbox的子选项
			'true'=>'是',		 //值=>文字
			'false'=>'否',
		),
		'value'=>'false',			 //表单的默认值
	),
	'easingIn'=>array(//配置在表单中的键名 ,这个会是config[random]
		'title'=>'为elastic设置动画属性(具体效果请查阅Easing属性效果):',//表单的文字
		'type'=>'select',		 //表单的类型：text、textarea、checkbox、radio、select等
		'options'=>array(		 //select 和radion、checkbox的子选项
			'linear'=>'linear',		 
			'swing'=>'swing',
			'jswing'=>'jswing',		
			'easeInQuad'=>'easeInQuad',
			'easeOutQuad'=>'easeOutQuad',		
			'easeInOutQuad'=>'easeInOutQuad',
			'easeInCubic'=>'easeInCubic',		 
			'easeOutCubic'=>'easeOutCubic',
			'easeInOutCubic'=>'easeInOutCubic',		 
			'easeInQuart'=>'easeInQuart',
			'easeOutQuart'=>'easeOutQuart',		
			'easeInOutQuart'=>'easeInOutQuart',
			'easeInQuint'=>'easeInQuint',		
			'easeOutQuint'=>'easeOutQuint',
			'easeInOutQuint'=>'easeInOutQuint',		 
			'easeInSine'=>'easeInSine',
			'easeOutSine'=>'easeOutSine',		 
			'easeInOutSine'=>'easeInOutSine',
			'easeInExpo'=>'easeInExpo',		
			'easeOutExpo'=>'easeOutExpo',
			'easeInOutExpo'=>'easeInOutExpo',		
			'easeInCirc'=>'easeInCirc',
			'easeOutCirc'=>'easeOutCirc',		 
			'easeInOutCirc'=>'easeInOutCirc',
			'easeInElastic'=>'easeInElastic',		 
			'easeOutElastic'=>'easeOutElastic',
			'easeInOutElastic'=>'easeInOutElastic',		
			'easeInBack'=>'easeInBack',
			'easeOutBack'=>'easeOutBack',		
			'easeInOutBack'=>'easeInOutBack',
			'easeInBounce'=>'easeInBounce',		 
			'easeOutBounce'=>'easeOutBounce',
			'easeInOutBounce'=>'easeInOutBounce'
		),
		'value'=>'easeOutCubic',			 //表单的默认值
	),
);
					