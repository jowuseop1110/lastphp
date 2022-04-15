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
    <title>요복조복</title>
    <?php
        include "../include/style2.php";
    ?>
</head>
<body>
    <div id="wrapper">
        <!-- Main -->
        <div id="main">
            <div class="inner">
            <?php
            include "../include/header2.php";
            ?>
            <!--//header-->
            <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
            <div class="member-form gray">
                <h3>마이페이지</h3>
                <div class="join-intro">
                    <div class="face">
                        <img src="../assets/img/mypage/default.svg" alt="기본이미지">
                     
                    </div>
                    <div class="intro">사진 변경</div>
<?php
    //youEmail, youNickName, youName, youBirth, youPhone, youGender, youSite, youIntro
                    // <div class="intro">웹과 코딩에 관심이 많은 웹스토리보이입니다.</div>
?>
                </div>
                <div class="join-info">
                    <ul>
<?php
        $memberID = $_SESSION['memberID'];
        $youEmail = $_POST['youEmail'];
        $youName = $_POST['youName'];
        $youBirth = $_POST['youBirth'];
        $youPhone = $_POST['youPhone'];
        echo $memberID;
        $sql = "SELECT youEmail, youName, youBirth, youPhone FROM myMember3";
        $result = $connect -> query($sql);
        $mypageInfo = $result -> fetch_array(MYSQLI_ASSOC);
        if($result){
            echo "<li><strong>이메일</strong></li>";
            echo "<li><span>".$mypageInfo['youEmail']."</span></li>";
            echo "<li><strong>이름</strong></li>";
            echo "<li><span>".$mypageInfo['youName']."</span></li>";
            echo "<li><strong>생년월일</strong></li>";
            echo "<li><span>".$mypageInfo['youBirth']."</span></li>";
            echo "<li><strong>휴대폰 번호</strong></li>";
            echo "<li><span>".$mypageInfo['youPhone']."</span></li>";
        }
    //이메일
    //닉네임
    //이름
    //생일
    //번호
    //성별
    //사이트
?>
<li>
                             
                    </ul>
                </div>
                <div class="join-btn">
                    <a href="mypageModify2.php">수정하기</a>
                    <a href="mypageRemove.php">탈퇴하기</a>
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->  
                  
                  
            </div>
        </div>
        <?php
             include "../include/sidebar.php";
        ?>
        
      <!-- Scripts -->
      <script src="../html/assets/js/jquery.min.js"></script>
        <script src="../html/assets/js/browser.min.js"></script>
        <script src="../html/assets/js/breakpoints.min.js"></script>
        <script src="../html/assets/js/util.js"></script>
        <script src="../html/assets/js/main.js"></script>
</body>
      
</html>