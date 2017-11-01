<?

$toName = "이승화님에게";                   // 받는 사람 이름
$toMail = "lsh01310313@gmail.com";       //받는이 메일

$content = "너에게 평생 개발만 시킬..";  //메일 내용
$subject = "열어보아라 중생아";            //메일 제목

$fromName = "개발의신";                      //보내는이 이름
$fromMail = "lsh01310313@gmail.com";  //보내는이 메일주소

 

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

$rs = mail("$toName <$toMail>",$subject,$content,$headers);
echo $rs;

/*
if( $rs ) //전송성공
else //전송실패
*/

?>
