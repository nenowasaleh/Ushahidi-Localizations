<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-08-25 00:04+0000
// PO revision date:  2012-08-20 03:02+0000
$lang = array(
	'allow_comments' => array(
		'between' => '允许评论栏格式错误',
		'required' => '允许评论为必选项',
	) ,
	'allow_feed' => array(
		'between' => '包括反馈栏格式错误',
		'required' => '包括反馈为必选项',
	) ,
	'allow_alerts' => array(
		'between' => '允许警示字段似乎并不包含一个有效的值',
		'required' => '允许警示字段为必填项。',
	) ,
	'allow_reports' => array(
		'between' => '允许报告栏格式错误',
		'required' => '允许报告为必填项',
	) ,
	'allow_stat_sharing' => array(
		'between' => '数据分享栏格式错误',
		'required' => '数据分享为必选项',
	) ,
	'api' => array(
		'default_record_limit' => '默认记录数量为每个API请求所获得的数量',
		'maximum_record_limit' => '最大记录数量为每个API请求所获得的数量',
		'maximum_requests_per_ip_address' => '每个IP地址最大的API请求数量',
	) ,
	'api_akismet' => array(
		'alpha_numeric' => 'Akismet 栏格式错误',
		'length' => 'Akismet 栏格式错误',
	) ,
	'banner_image' => array(
		'default' => '您的横幅图片上传错误',
		'size' => '横幅的大小超过此上传大小限制。',
	) ,
	'cache_pages' => array(
		'between' => '缓存网页为必选项',
		'required' => '缓存网页格式错误',
	) ,
	'cache_pages_lifetime' => array(
		'in_array' => '缓存网页时间格式错误',
		'required' => '缓存网页时间为必填项',
	) ,
	'cleanurl' => array(
		'clean_url_disabled' => '您的服务器看起来配置为非简洁链接。您将需要更改您的服务器的配置，才可以启用简洁链接。更多信息请参阅如何启用简洁链接的 <a href="http://forums.ushahidi.com/topic/server-configuration-for-apache-mod-rewrite" target="_blank">这个论坛的帖子</a>',
		'clean_url_enabled' => '此选项使 Ushahidi 通过简洁链接的网址（不包括“index.php”的 URL 中）访问。',
		'enable_clean_url' => '允许清除链接',
		'title' => '清除链接',
	) ,
	'clickatell_api' => array(
		'length' => 'Clickatell API 号码不得长于20个字符',
		'required' => 'Clickatell API 号码为必填项',
	) ,
	'clickatell_password' => array(
		'length' => 'Clickatell 密码长度须在5到50个字符之间',
		'required' => 'Clickatell 密码为必填项',
	) ,
	'clickatell_username' => array(
		'length' => 'Clickatell 用户名不得长于50个字符',
		'required' => 'Clickatell 用户名为必填项',
	) ,
	'configure_map' => '地图设置',
	'default_location' => '默认地址',
	'default_map_all' => array(
		'alpha_numeric' => '颜色值格式错误',
		'length' => '颜色值长度应是6个字符',
		'required' => '颜色值为必填项',
	) ,
	'default_map_view' => '查看默认地图',
	'default_zoom_level' => '默认缩放度',
	'download_city_list' => '从城市地名检索',
	'email_host' => array(
		'length' => '邮件服务器端口过长',
		'numeric' => '邮件服务器端口只能包含数字',
	) ,
	'email_password' => array(
		'length' => '邮件服务器密码必须在5到50个字符之间',
		'required' => '邮件服务器密码为必填项',
	) ,
	'email_port' => array(
		'length' => '邮件服务器端口过长',
		'numeric' => '邮件服务器端口只能包含数字',
	) ,
	'email_servertype' => array(
		'length' => '邮件服务器端口过长',
		'required' => '邮件服务器类型为必填项',
	) ,
	'email_username' => array(
		'length' => '邮件服务器用户名不得长于50个字符',
		'required' => '邮件服务器用户名为必填项',
	) ,
	'facebook' => array(
		'title' => 'Facebook 安装选项',
		'description' => '要获取信息，您将需要创建一个新的 Facebook 的应用',
	) ,
	'google_analytics' => array(
		'length' => 'Google Analytics 中必须包含有效的网站内容 ID，格式为UA-XXXXX-XX',
	) ,
	'https' => array(
		'enable_https' => '启用 HTTPS',
		'https_disabled' => '该选项使 Ushahidi 以不安全的模式访问；<strong>不包括</strong> "https://" URL 前缀',
		'https_enabled' => '该选项使 Ushahidi 以安全的模式访问；<strong>包括</strong> "https://" URL 前缀',
	) ,
	'items_per_page' => array(
		'between' => '每页项目数（前端）格式错误',
		'required' => '每页项目数（前端）为必填项',
	) ,
	'items_per_page_admin' => array(
		'between' => '每页项目数（管理员）格式错误',
		'required' => '每页项目数（管理员）格式错误',
	) ,
	'map' => array(
		'default_location' => '设置地图提供商的过程非常简单。选择提供商，从提供商的网站获得 API 密匙，然后输入该密匙即可。',
		'zoom' => '缩放',
	) ,
	'map_provider' => array(
		'choose' => '选择地图提供商',
		'enter_api' => '输入新的 API 密匙',
		'get_api' => '获得 API 密匙',
		'info' => '设置地图提供商的过程非常简单。选择提供商，从提供商的网站获得 API 密匙，然后输入该密匙即可。',
		'name' => '地图提供商',
	) ,
	'map_settings' => '地图设置',
	'multiple_countries' => '该 Ushahidi 布署是否跨越多个国家',
	'select_default_location' => '请选择默认的国家',
	'set_location' => '点击并拖动地图选择确切的位置',
	'site' => array(
		'allow_clustering' => '在地图上生成群报告',
		'allow_comments' => '允许所有用户对报告进行评论',
		'allow_feed' => '包括网站上的 RSS 新闻源',
		'allow_alerts' => '允许用户订阅事件报告警示',
		'allow_reports' => '允许用户提交报告',
		'api_akismet' => 'Akismet 密匙',
		'banner' => '网站横幅',
		'blocks_per_row' => '块数每行',
		'cache_pages' => '缓存页',
		'cache_pages_lifetime' => '缓存页保存时间',
		'checkins' => '启用签入',
		'copyright_statement' => '网站版权描述',
		'default_category_colors' => '为所有分类采用默认颜色',
		'default_category_icons' => '类别的默认图标',
		'delete_banner_image' => '删除横幅图片',
		'delete_default_map_all_icon' => '删除默认图标',
		'display_contact_page' => '显示联系页面',
		'display_howtohelp_page' => '显示 "帮助" 页',
		'email_alerts' => '事件报告警示邮件地址',
		'email_notice' => '<span>如果想通过电子邮件接收报告，请在此设置您的电子邮件账号。</span>',
		'email_site' => '网站电子邮件地址',
		'google_analytics' => '谷歌分析',
		'google_analytics_example' => '网页内容ID - 格式：UA-XXXXX-XX',
		'items_per_page' => '每页项目数量（前端）',
		'items_per_page_admin' => '每页项目数量（管理员）',
		'kismet_notice' => '防止垃圾评论使用 <a href="http://akismet.com/" target="_blank">Akismet</a> 自动处理. <BR />你可以得到免费的密钥注册一个 <a href="http://en.wordpress.com/api-keys/" target="_blank">WordPress.com 用户账户</a>',
		'laconica_configuration' => 'Laconica 证书',
		'laconica_site' => 'Laconica 网站',
		'language' => '网站语言',
		'manually_approve_users' => '手动批准用户',
		'message' => '网站信息',
		'name' => '网站名称',
		'private_deployment' => '隐私设置',
		'require_email_confirmation' => '需要用户的电子邮件确认',
		'submit_report_message' => '提交事件报告的信息',
		'share_site_stats' => '允许数据存储在 Ushahidi 的服务器',
		'tagline' => '网站标签',
		'timezone' => '时区',
		'title' => '网站设置',
		'twitter_configuration' => '推特(Twitter)搜索关键词',
		'twitter_hashtags' => '标签，以英文逗号分隔',
	) ,
	'site_email' => array(
		'email' => '网站电子邮箱格式无效',
		'length' => '网站电子邮箱地址长度须在4到100个字符之间',
	) ,
	'site_name' => array(
		'length' => '网站名称长度须在3到50个字符之间',
		'required' => '网站名称为必填项',
	) ,
	'site_tagline' => array(
		'length' => '标签栏长度须在3到100个字符之间',
		'required' => '标签栏为必选项',
	) ,
	'sms' => array(
		'clickatell_api' => '您的 Clickatell API 号码',
		'clickatell_check_balance' => '查看您的 Clickatell 帐户余额',
		'clickatell_load_balance' => '读取帐户余额',
		'clickatell_password' => '您的 Clickatell 密码',
		'clickatell_text_1' => '<a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">点击这里</a>注册 Clickatell 服务',
		'clickatell_text_2' => '在此输入您的 Clickatell 登录信息',
		'clickatell_username' => '您的 Clickatell 用户名',
		'flsms_description' => 'Frontline SMS 是一款免费开源软件，可以将笔记本或移动电话变成中央通讯枢纽。安装该软件之后，便可以通过手机向大量用户发送短信。点击灰色按钮开始从 FrontlineSMS.com 下载软件。',
		'flsms_download' => '下载 Frontline SMS 并在您的计算机上安装',
		'flsms_instructions' => '消息接收到 Frontline SMS 集线器可以与同步 Ushahidi。详细说明如何同步可以到<strong><a href="http://wiki.ushahidi.com/display/WIKI/How+to+Set-up+FrontlineSMS+and+Ushahidi" target="_blank">这里</a></strong>. 你将需要重点和下面的链接建立同步Front lineSMS',
		'flsms_key' => '您的 Ushahidi 同部密匙',
		'flsms_link' => 'Frontline SMS HTTP Post LINK',
		'flsms_synchronize' => '与Ushahidi同步',
		'flsms_text_1' => '在下方输入连入 Frontline SMS 的电话号码',
		'flsms_text_2' => '请输入电话号码，不包含“+”和“-”',
		'option_1' => '选项1：使用 Frontline SMS',
		'option_2' => '选项2：使用 Global SMS 接口',
		'title' => 'SMS 设置选项',
	) ,
	'sms_no1' => array(
		'length' => '电话号码1格式错误',
		'numeric' => '电话号码1只能包括数字',
	) ,
	'sms_no2' => array(
		'length' => '电话号码2过长',
		'numeric' => '电话号码2只能包括数字',
	) ,
	'sms_no3' => array(
		'length' => '电话号码3过长',
		'numeric' => '电话号码3只能包括数字',
	) ,
);
