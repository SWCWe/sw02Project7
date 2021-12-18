<?php

      //<!--php부분 form에 입력한 내용을 데이터베이스와 비교해서 로그인 여부를 알려준다.-->
      if(isset($_POST['uid'])&&isset($_POST['password'])){//post방식으로 데이터가 보내졌는지?
        $username=$_POST['uid'];//post방식으로 보낸 데이터를 username이라는 변수에 넣는다.
        $userpw=$_POST['password'];//post방식으로 보낸 데이터를 userpw라는 변수에 넣는다.
        //mysql root계정으로 접속.
        //비밀번호는 123456이다.
        //test라는 데이터베이스에 접근.s
        $connnect= mysqli_connect("localhost", "root", "123456", "test");
        //sql문을 sql변수에 저장해놓는다.
        $sql="SELECT * FROM test where id='$username' && password='$userpw'";
        if($result=mysqli_fetch_array(mysqli_query($connnect,$sql))){//쿼리문을 실행해서 결과가 있으면 로그인 성공
          header('Location: ./main.html');
        }
        else{//쿼리문의 결과가 없으면 로그인 fail을 출력한다.
          echo "login fail";
        }
      }

    
    ?>
