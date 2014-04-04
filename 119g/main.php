<?php

define('ROOTPATH',dirname(__FILE__));
require_once ROOTPATH.'/config.php';
require_once ROOTPATH.'/phpcurl.php';

$curl = new CurlModel();

foreach($userqueue as $uinfo){
   login119g();
//exit;
   $curl->config['url'] = $domain.'disk.aspx';
   $html = $curl->getHtml();   
//var_dump($curl);
//   file_put_contents('logined.html',$html);
//exit;
   $secend = mt_rand(10,30);
   sleep($secend);
}

function login119g(){
   global $uinfo,$domain,$curl;
   $curl->config['url'] = $domain;
   $curl->config['cookie'] = '119g'.$uinfo['uid'];
   $html = $curl->getHtml();

   if(false != stripos($html,'退出登录')){
      echo $curl->config['cookie']," Login Success!\n";return true;
   }

   preg_match('#<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="([^"]+)" />#is',$html,$match);
   if(!isset($match[1])){
      die("Get formhash Error!\n");
   }
   $formhash = $match[1];
   $curl->postval = array(
   'CheckBox1' => 'on',
   'Image1.x' => 63,
   'Image1.y' => 23,
   '__VIEWSTATE' => $formhash,
   'txtPwd' => $uinfo['upwd'],
   'txtUserName' => $uinfo['uname']
   );
   $curl->config['url'] = $domain.'default.aspx';
   $html = $curl->getHtml();
   $curl->postval = array();
//   file_put_contents('login.html',$html);
   if(false != stripos($html,'登录成功')){
      preg_match_all('#src="([^"]+)" reload="1"#Uis',$html,$match);
      foreach($match[1] as $url){
         $url = str_ireplace('\/','/',$url);
//echo $url,"\n";
         $curl->config['url'] = $url;
         $curl->getHtml();
      }
   }
   $curl->config['url'] = $domain.'disk.aspx#wellcome.aspx';
   $html = $curl->getHtml();
   if(false != stripos($html,'退出</a>')){
      echo $curl->config['cookie']," Login Success!\n";return true;
   }
   echo $curl->config['cookie']," Login Failed!\n";return false; 
}

