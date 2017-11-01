<?
	$subject = "회원가입";            //메일 제목
	$fromName = "이승화";                      //보내는이 이름
	$fromMail = "lsh01310313@gmail.com";  //보내는이 메일주소

	$toName=$_POST[mb_name];
	$toMail=$_POST[mb_email];
	//한글 깨짐을 막기 위해 인코딩을 해준다.
	//참고로 $content( 메일 내용 )는 인코딩 하지 않는다... 하면 오히려 깨짐..-_-^
	$toName='=?UTF-8?B?'.base64_encode( $toName ).'?=';
	$subject ='=?UTF-8?B?'.base64_encode( $subject ).'?=';
	$fromName='=?UTF-8?B?'.base64_encode( $fromName ).'?=';

	//인코딩에 관하여 자세히 포스팅 하였으니 참고하길.

	// http://keepingstar.tistory.com/22

	$headers = "Return-Path: <".$fromMail.">\n";
	$headers .= "From: ".$fromName." <".$fromMail.">\n";
	$headers .= "X-Sender: <".$fromMail.">\n";
	$headers .= "X-Mailer: PHP\n";
	$headers .= "Reply-To: ".$fromName." <".$fromMail.">\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: text/html;charset=UTF-8\n";

	$content = "회원가입에 성공했습니다."
	$rs = mail("$toName <$toMail>",$subject,$content,$headers);
	echo $rs;

	/*
	if( $rs ) //전송성공
	else //전송실패
	*/
?>