<?php
header('content-type:text/html;charset=utf-8');
function curlRequest($url,$postData=array(),$ispost=false){

   if (empty($url) ) {         
      return false;       
      }            
     $o = "";
     foreach ( $postData as $k => $v )  {
             $o.= "$k=" . urlencode( $v ). "&" ;
        }

     $postData = substr($o,0,-1);

//      $key=base64_encode($postData);

     if($ispost){
        $url=$url;
      }else{
       $url = $url.'?'.$postData;

     }
//
//      $curlPost = 'key='.$key;

	// 初始化一个 cURL 对象  
	$curl = curl_init();  
	// 设置你需要抓取的URL  
	curl_setopt($curl, CURLOPT_URL, $url);  
	// 设置header  
	curl_setopt($curl, CURLOPT_HEADER, 0);  
	// 设置cURL 参数，要求结果(1保存到字符串中)还是(0输出到屏幕上)。
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  

	if(!empty($postData)){
		curl_setopt($curl, CURLOPT_POST, 1);

		curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
	}

	// 运行cURL，请求网页  
	$html = curl_exec($curl);  
	// 关闭URL请求  
	curl_close($curl);
	return $html;
}
function p($data){
	echo "<pre>";
	print_r($data);
}

