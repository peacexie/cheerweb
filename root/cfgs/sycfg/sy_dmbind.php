<?php
$_sy_dmbind = array(

	// /xvars/html/cargo/2015-9c/h3h1.html
	// http://pro.my_domain.com/2015-9c/h3h1.html
	/*
	array(
		'{html}/xxx_cargo/`d#`', //��`d#`,`w#` �ֱ��������� (\d+)(\w+)
		'http://pro.my_domain.com/\\1-', //ʹ��\1����ʽ��ʵ�ַ�������
		'1', //1-������-�Զ���ʽ��
	),*/
	
);

/*

// /xvars/html/cargo/2015-9c/h3h1.html
// /pro1/2015-9c/h3h1.html
array(
	'{html}/cargo/', //{html}=PATH_HTML��/run/_init.php�ж��壬html�ĵ������Ŀ¼
	'/pro1/',
	'0', //0-��������
),

// /xvars/html/cargo/2015-9c/h3h1.html
// http://pro2.my_domain.com/2015-9c/h3h1.html
array(
	'{html}/cargo/`d#`', //��`d#`,`w#` �ֱ��������� (\d+)(\w+)
	'http://pro2.my_domain.com/\\1-', //ʹ��\1����ʽ��ʵ�ַ�������
	'1', //1-������-�Զ���ʽ��
),

// Ч��ͬ��/08tools/yssina/xvars/html/
array(
	'{html}\\/cargo\\/(\d+)\\-', 
	'http://pro3.my_domain.com/\\1-', 
	'2', //2-������-����д����
),

// ����������ʽ�����ַ��У� . \ + * ? [ ^ ] $ ( ) { } = ! < > | : - 

*/
		