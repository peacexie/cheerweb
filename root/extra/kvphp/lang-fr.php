<?php
(!defined('RUN_INIT')) && die('No Init');
// supml -> bdpart-multi-language

$_cbase['lang']['fr']["i_about"] = array(
    'profile' => array (
      'title' => 'Société',
    ),
    'awhua' => array (
      'title' => 'Culture d `entreprise',
    ),
    'aserv' => array (
      'title' => 'Contenu du Service',
    ),
    'anews' => array (
      'title' => 'Info',
    ),
    'apics' => array (
      'title' => 'Société',
    ),
    'afqas' => array (
      'title' => 'Questions courantes',
    ),
    'alink' => array (
      'title' => 'Contactez - nous.',
    ),
    'aduty' => array (
      'title' => 'Déclaration de responsabilité',
    ),
);
$_cbase['lang']['fr']["i_news"] = array(
    'n1012' => array (
      'title' => 'Business News',
    ),
    'n1014' => array (
      'title' => 'Info',
    ),
    'n1016' => array (
      'title' => 'Info',
    ),
    'n1018' => array (
      'title' => 'International News',
    ),
    'nsys' => array (
      'title' => 'Info',
    ),
    'ntmp' => array (
      'title' => 'Test de démonstration',
    ),
);
$_cbase['lang']['fr']["i_cargo"] = array(
    'p1012' => array (
      'title' => 'Accessoires de téléphone mobile',
    ),
    'p1014' => array (
      'title' => 'Livre audio',
    ),
    'p1016' => array (
      'title' => 'Vêtements',
    ),
    'p1018' => array (
      'title' => 'Mobilier',
    ),
    // Personnaliser...
);

$_cbase['lang']['fr']["i_hinfo"] = array(
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
$_cbase['lang']['fr']["i_brand"] = array(
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

$_cbase['lang']['fr']["f_need"] = array(
    'ntype' => array (
      'title' => 'Catégorie',
      'cfgs' => "b1=Acheter\nc2=Consulter\nc3=Je veux savoir.\nd4=Je voulais me tromper.\nd5=Vouloir porter plainte",
    ),
    'mname' => array (
      'title' => 'Nom de membre',
      'vtip' => '2-24Caractères',
    ),
    'mtel' => array (
      'title' => 'Téléphone',
      'vtip' => '2-24Caractères',
    ),
);
$_cbase['lang']['fr']["f_nrem"] = array(
    'title' => array (
      'title' => 'Titre',
      'vtip' => 'Titre 2 - 60 caractères',
    ),
    'detail' => array (
      'title' => 'Contenu',
      'vtip' => 'Contenu au - dessus de 10 caractères',
    ),
    'mname' => array (
      'title' => 'Surnom',
      'vtip' => '2-24Caractères',
    ),
);
$_cbase['lang']['fr']["f_crem"] = $_cbase['lang']['fr']["f_nrem"];
$_cbase['lang']['fr']["f_gbook"] = $_cbase['lang']['fr']["f_nrem"];
$_lxarr = array ( // leixing
  'title' => 'type',
  'cfgs' => "t124=Consultation\nt128=Recommandations\nt132=Plainte\nt136=Remerciements\nt148=Aider",
);
$_lxstr = json_encode($_lxarr);
$_cbase['lang']['fr']["f_gbook"]['leixing'] = json_decode($_lxstr,1);
