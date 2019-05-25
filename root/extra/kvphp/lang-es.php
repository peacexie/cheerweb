<?php
(!defined('RUN_INIT')) && die('No Init');
// supml -> bdpart-multi-language

$_cbase['lang']['es']["i_about"] = array(
    'profile' => array (
      'title' => 'Perfil de empresa',
    ),
    'awhua' => array (
      'title' => 'Cultura empresarial',
    ),
    'aserv' => array (
      'title' => 'Contenido del servicio',
    ),
    'anews' => array (
      'title' => 'Empresas News',
    ),
    'apics' => array (
      'title' => 'Imagen de la empresa',
    ),
    'afqas' => array (
      'title' => 'Preguntas frecuentes',
    ),
    'alink' => array (
      'title' => 'Llámanos.',
    ),
    'aduty' => array (
      'title' => 'Declaración de autoridad',
    ),
);
$_cbase['lang']['es']["i_news"] = array(
    'n1012' => array (
      'title' => 'Business News',
    ),
    'n1014' => array (
      'title' => 'Periodismo Industrial',
    ),
    'n1016' => array (
      'title' => 'Noticias nacionales',
    ),
    'n1018' => array (
      'title' => 'Información internacional',
    ),
    'nsys' => array (
      'title' => 'Información del sistema',
    ),
    'ntmp' => array (
      'title' => 'Ensayo de demostración',
    ),
);
$_cbase['lang']['es']["i_cargo"] = array(
    'p1012' => array (
      'title' => 'Accesorios de teléfono',
    ),
    'p1014' => array (
      'title' => 'Libros y vídeos',
    ),
    'p1016' => array (
      'title' => 'Prendas de vestir',
    ),
    'p1018' => array (
      'title' => 'Muebles domésticos',
    ),
    // Definición...
);

$_cbase['lang']['es']["i_hinfo"] = array(
    'home' => array (
      'title' => '首页推荐',
    ),
    'pindao' => array (
      'title' => '频道推荐',
    ),
    'zhuanti' => array (
      'title' => '专题推荐',
    ),
    'hmob' => array (
      'title' => '手机首页',
    ),
);
$_cbase['lang']['es']["i_brand"] = array(
    'aimo' => array (
      'title' => '爱慕',
    ),
    'bailian' => array (
      'title' => '百利安',
    ),
    'huawei' => array (
      'title' => '华为',
    ),
    // ...
);

$_cbase['lang']['es']["f_need"] = array(
    'ntype' => array (
      'title' => 'Categoría',
      'cfgs' => "b1=Quiero comprar\nc2=quiero consultar\nc3=quiero saber\nd4=quiero reportar un error\nd5=quiero presentar una queja.",
    ),
    'mname' => array (
      'title' => 'Nombre del miembro',
      'vtip' => '2-24Carácter',
    ),
    'mtel' => array (
      'title' => 'Teléfono',
      'vtip' => '2-24Carácter',
    ),
);
$_cbase['lang']['es']["f_nrem"] = array(
    'title' => array (
      'title' => 'Título',
      'vtip' => 'Caracteres 2-60',
    ),
    'detail' => array (
      'title' => 'Contenido',
      'vtip' => 'Más de 10 caracteres',
    ),
    'mname' => array (
      'title' => 'Apodo',
      'vtip' => '2-24Carácter',
    ),
);
$_cbase['lang']['es']["f_crem"] = $_cbase['lang']['es']["f_nrem"];
$_cbase['lang']['es']["f_gbook"] = $_cbase['lang']['es']["f_nrem"];
$_lxarr = array ( // leixing
  'title' => 'type',
  'cfgs' => "t124=Consulta\nt128=recomendación\nt132=denuncia\nt136=agradecimiento\nt148=ayuda",
);
$_lxstr = json_encode($_lxarr);
$_cbase['lang']['es']["f_gbook"]['leixing'] = json_decode($_lxstr,1);
