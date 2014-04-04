<?php
function getHtml($param){
	 //open connection  
	 $ch = curl_init() ;  
	 //set the url, number of POST vars, POST data  
	 curl_setopt($ch, CURLOPT_URL,$param['url']) ;  
	 unset($param['url']);
	 curl_setopt($ch, CURLOPT_POST,count($param)) ; // 启用时会发送一个常规的POST请求，类型为：application/x-www-form-urlencoded，就像表单提交的一样。  
	 curl_setopt($ch, CURLOPT_POSTFIELDS,$param); // 在HTTP中的“POST”操作。如果要传送一个文件，需要一个@开头的文件名  
	 //curl_setopt($ch,CURLOPT_PROTOCOLS,CURLPROTO_HTTPS);
	 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
	 $html=curl_exec($ch);  
	 if($html===false){
		echo 'Curl error: ' . curl_error($ch); 
	 }

	 //close connection  
	 curl_close($ch) ;   
	 return $html;
}

?>
