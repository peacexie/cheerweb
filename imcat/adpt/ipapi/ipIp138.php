<?php
namespace imcat;

// ��ȡip��ַ-Ip138
class ipIp138{
	
	public $url = 'http://www.ip138.com/ips138.asp?action=2&ip='; 
	public $cset = 'gb2312';
	
	// ��ȡ����
    //function getAddr($ip, $text=1){}
	
	// ���˴���
	function fill($addr){
		//����ʡ�γ���  ��ͨ
		//<ul class="ul1"><li>��վ�����ݣ�����ʡ�γ���  ��ͨ</li><li>�ο�����һ������ʡ�γ��� ��ͨ</li></ul>
		$arrText = array('<ul class="ul1"><li>','</li><li>'); 
		$addr = basElm::getVal($addr, $arrText);
		$addr = substr($addr,15) ;
		return $addr;
	}
}

