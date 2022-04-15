<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $boardID = $_POST['boardID'];
        $boardTitle = $_POST['boardTitle'];
        $boardContents = $_POST['boardContents']; 
        $memberID = $_SESSION['memberID'];
        $boardTitle = $connect -> real_escape_string($boardTitle);
        $boardContents = $connect -> real_escape_string($boardContents);
        echo $memberID;
        // 쿼리문 작성
        $sql = "SELECT memberID FROM myMember3 WHERE memberID = {$memberID}";      
        $result = $connect -> query($sql);
        echo $sql;
        $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
        echo "<pre>";
        var_dump($memberInfo);
        echo "</pre>";
        if($memberID ==  $memberInfo['memberID']) {
                  
        $sql = "UPDATE myBoard2 SET boardTitle = '{$boardTitle}', boardContents = '{$boardContents}' WHERE boardID = '{$boardID}'";
        $connect -> query($sql);
        echo $sql;
    }
      
    ?>
    <script>
        location.href = "board2.php";
    </script>
</body>
</html>