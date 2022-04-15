<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>
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
    $youEmail = $_POST['youEmail'];
    $youName = $_POST['youName'];
    $youBirth = $_POST['youBirth'];
    $youPhone = $_POST['youPhone'];
    $youPass = $_POST['youPass'];  //내가 입력한 비밀번호
    $memberID = $_SESSION['memberID'];
    $youEmail = $connect -> real_escape_string($youEmail);
    $youName = $connect -> real_escape_string($youName);
    $youBirth = $connect -> real_escape_string($youBirth);
    echo  $youPhone;

    $sql = "SELECT youPass, memberID FROM myMember WHERE memberID = {$memberID}";
    $result = $connect -> query($sql);

    $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);  //memberInfo(memberID, youPass) -> 계정의 비밀번호
    //   echo "<pre>";
    // var_dump($memberInfo);
    // echo "</pre>";

    if($youPass ==  $memberInfo['youPass']) {
     
    // echo "<pre>";
    // var_dump($result);
    // echo "</pre>";

          
                $sql = "UPDATE myMember SET youEmail = '{$youEmail}', youName = '{$youName}', youBirth = '{$youBirth}', youPhone = '{$youPhone}' WHERE memberID ='{$memberID}'";
                $connect -> query($sql);
            
                echo "<pre>";
                echo  $sql;
                echo "</pre>";
         
        
        }else {
            echo "<script>alert('비밀번호가 일치하지 않습니다. 다시 한번확인해주세요!'); history.back(1)</script>";
    }

    ?>
    <script>
        location.href = "mypage.php";
    </script>

</body>
</html>