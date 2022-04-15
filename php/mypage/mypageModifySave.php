<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <?php
         include "../connect/connect.php";
         include "../connect/session.php";
            
            $youEmail = $_POST['youEmail'];
            $memberID = $_SESSION['memberID'];
            $youNickName = $_POST['youNickName'];
            $youPass = $_POST['youPass'];
            $youName = $_POST['youName'];
            $youBirth = $_POST['youBirth'];
            $youPhone = $_POST['youPhone'];
        
            echo  $memberID;
            echo  $youEmail;
            echo  $youNickName;
            echo  $youName;
            echo  $youBirth;
            echo  $youPhone;
            echo  $youPass;
            $youEmail = $connect -> real_escape_string(trim($_POST['youEmail']));
            $youNickName = $connect -> real_escape_string(trim($_POST['youNickName']));
            $youPass = $connect -> real_escape_string(trim($_POST['youPass']));
            $youName = $connect -> real_escape_string(trim($_POST['youName']));
            $youBirth = $connect -> real_escape_string(trim($_POST['youBirth']));
            $youPhone = $connect -> real_escape_string(trim($_POST['youPhone']));
            
            $sql = "SELECT * FROM myMember";
            $result = $connect -> query($sql);
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
            // 정보 수정 
            // echo"<pre>"
            // var_dump($memberInfo);
            // echo"</pre>"
    
            if($memberInfo['youPass'] ===  $youPass){
                $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youNickName = '{$youNickName}', youName = '{$youName}', youBirth = '{$youBirth}', youPhone = '{$youPhone}' WHERE memberID = '{$memberID}'";
                $connect -> query($sql);
                echo "<script>alert('회원정보가 수정되었습니다.');</script>";
            }else {
                echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번확인해주세요!'); history.back(1)</script>";
             }   
        ?>  
        <script>
            location.href = "../login/login.php";
        </script>
</body>
</html>