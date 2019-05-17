<?php
namespace imcat;
// 建立在libmemcached的基础上，memcached版本的功能更全一些。 
class cacheMemd {
    private $mmc = NULL;
    private $group = ''; 
    private $ver = 0;
    function __construct( $mcfgs = array() ) {
        $this->mmc = new Memcached;
        if( empty($mcfgs) ) {
            $mcfgs['MEM_SERVER'] = array(array('127.0.0.1', 11211));
            $mcfgs['MEM_GROUP'] = $mcfgs['prefix'];
        }
        foreach($mcfgs['MEM_SERVER'] as $config) {
            call_user_func_array(array($this->mmc, 'addServer'), $config);
        }
        $this->group = $mcfgs['MEM_GROUP'];
        $this->ver = intval( $this->mmc->get($this->group.'_ver') );
    }

    //读取缓存
    function get($key) {
        return $this->mmc->get($this->group.'_'.$this->ver.'_'.$key);
    }
    
    //设置缓存
    function set($key, $value, $expire = 1800) {
        return $this->mmc->set($this->group.'_'.$this->ver.'_'.$key, $value, $expire);
    }
    
    //自增1
    function inc($key, $value = 1) {
         return $this->mmc->increment($this->group.'_'.$this->ver.'_'.$key, $value);
    }
    
    //自减1
    function des($key, $value = 1) {
         return $this->mmc->decrement($this->group.'_'.$this->ver.'_'.$key, $value);
    }
    
    //删除
    function del($key) {
        return $this->mmc->delete($this->group.'_'.$this->ver.'_'.$key);
    }
    
    //全部清空
    function clear() {
        return  $this->mmc->set($this->group.'_ver', $this->ver+1); 
    }    
}
