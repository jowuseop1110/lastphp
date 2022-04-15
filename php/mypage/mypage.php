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
    <title>회원 정보</title>
    <?php
    include "../include/style.php";
    ?>
    <!-- //style -->
</head>
<body>
    <?php
        include "../include/skip.php";
    ?>
        <!--//skip  -->
    <?php
        include "../include/header.php";
    ?>
        <!--//header  -->
        <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section class="join-type gray">
            <div class="member-form">
                <h3>회원 정보</h3>
                <div class="join-intro">
                    <div class="face">
                        <img src="../assets/img/mypage/default.svg" alt="기본이미지">
                        <div class="intro">자기소개를 해주세요!.</div>
                    </div>
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
        $youNickName = $_POST['youNickName'];
        $youName = $_POST['youName'];
        $youBirth = $_POST['youBirth'];
        $youPhone = $_POST['youPhone'];
        $youGender = $_POST['youGender'];
        $youIntro = $_POST['youIntro'];
        $sql = "SELECT youEmail, youNickName, youName, youBirth, youPhone, youGender, youIntro FROM myMember";
        $result = $connect -> query($sql);
        $mypageInfo = $result -> fetch_array(MYSQLI_ASSOC);
        if($result){
            echo "<li><strong>이메일</strong><span>".$mypageInfo['youEmail']."</span></li>";
            echo "<li><strong>닉네임</strong><span>".$mypageInfo['youNickName']."</span></li>";
            echo "<li><strong>이름</strong><span>".$mypageInfo['youName']."</span></li>";
            echo "<li><strong>생년월일</strong><span>".$mypageInfo['youBirth']."</span></li>";
            echo "<li><strong>휴대폰 번호</strong><span>".$mypageInfo['youPhone']."</span></li>";
            echo "<li><strong>성별</strong><span>".$mypageInfo['youGender']."</span></li>";
            echo "<li><strong>사이트</strong><span></span></li>";
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
                    <a href="mypageModify.php">수정하기</a>
                    <a href="mypageRemove.php">탈퇴하기</a>
                </div>
            </div>
        </section>
    </main>
    <!-- //main -->  


    <?php
        include "../include/footer.php";
    ?>
    <!--//footer  -->

    
</body>
</html>