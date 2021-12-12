<?php
   
   //아이디와 패스워드를 받아옴
$user_id 	= $_GET["id"];
$user_pass 	= $_GET["password"];

//info.ini 파일 내용을 result 라는 배열에 한줄한줄씩 박음
$result = array(); 
$lines = @file("./info.ini") or $result = "파일을 읽을 수 없습니다."; 

if ($lines != null){ 
	for($i = 1;$i < count($lines);$i++){
		//$result[] .= ($i + 1) . ": " . $lines[$i] . "<br>";
		array_push($result, $lines[$i]);
	}
}

// 메모장 내용 한줄한줄씩 마다 매칭 시킴
for($i = 0;$i < count($result);$i++){
	// | 로 잘라서 매칭확인
	$member_arr = explode('|', $result[$i]);
	
	//아이디 , 비밀번호 매칭 되는지 여부체크
	if($user_id == $member_arr[1] && $user_pass == $member_arr[2]){			
		
		$memberseq 	= $member_arr[0];	//idx
		$userId 	= $member_arr[1];	//아이디
		$userPass 	= $member_arr[2];   //비밀번호
		
        // 매칭되면 바로 break 로 for 문 빠져나옴
		break;

	}else{
		continue;
	}
}    
    ?>