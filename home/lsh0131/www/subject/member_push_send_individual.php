<?php
include_once("./_common.php");

if ($_POST['content'] == "") {
    alert("내용을 입력해주세요.");
}

$app_code   = $config['cf_server_push_num'];
$title      = $_POST['title'];
$content    = $_POST['content'];
$open_url   = $_POST['open_url'];


$url = 'http://serverpush.jnsinc.co.kr/index.php?/push/send_all';
$post_data['app_code'] = $config['cf_server_push_num'];
$post_data['title']    = $_POST['title'];
$post_data['content']  = $_POST['content'];
$post_data['open_url'] = $_POST['open_url'];


$curlsession = curl_init(); 
curl_setopt ($curlsession, CURLOPT_URL, $url); 
curl_setopt($curlsession, CURLOPT_HEADER, 1);
curl_setopt ($curlsession, CURLOPT_POST, 1); 
curl_setopt ($curlsession, CURLOPT_POSTFIELDS, $post_data); 
//curl_setopt ($curlsession, CURLOPT_POSTFIELDSIZE, 0); 
curl_setopt ($curlsession, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec ($curlsession); 
 
curl_close($curlsession); 


// history DB 입력
$sql = " INSERT INTO {$g4['push_history_table']}
            SET mb_id			= '{$member['mb_id']}',
				mh_name			= '{$member['mb_name']}',
				mh_title		= '{$_POST['title']}',
				mh_content		= '{$_POST['content']}',
				mh_open_url		= '{$_POST['open_url']}',
				mh_datetime		= now(),
				mh_ip			= '$REMOTE_ADDR' ";
sql_query($sql);

sleep(2); // 반환값 받기 위해서 잠시 기다리기

goto_url("./member_send_list.php?listType=P", false);
?>