<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>
</head>
<body>
    <?php
        include "../connect/connect.php";
        include "../connect/session.php";
        include "../connect/sessionCheck.php";

        $memberID = $_SESSION['memberID']; //mymember에 회원 가입한 번호(memberID)
        $boardTitle = $_POST['boardTitle'];//$_POST(전송된 데이터 받기)
        $boardContents = $_POST['boardContents'];
        $boardView = 1;
        $regTime = time();
        // echo  $regTime;

        $boardTitle = $connect -> real_escape_string($boardTitle); //특수문자 방지
        $boardContents = $connect -> real_escape_string($boardContents); //특수문자 방지

        $sql = "INSERT INTO myBoard2(memberID, boardTitle, boardContents, boardView, regTime) VALUES('$memberID', '$boardTitle', '$boardContents', '$boardView', '$regTime')";
        $connect -> query($sql);

        Header("Location: ../board/board2.php");
    ?>
</body>
</html>