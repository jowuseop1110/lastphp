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
                        <div class="intro">안녕하세요 조운섭 입니다.</div>
                    </div>
                    <div class="join-info">
                        <ul>
                            <li>
                                <strong>이메일</strong>
                                
                                <input type="email" id="youEmail" class="mypage" name="youEmail" placeholder="Sample@naver.com" required>
                            </li>
                            <li>
                                <strong>닉네임</strong>
                                <input type="name" id="youNickName" class="mypage" name="youNickName" placeholder="닉네임을 적어주세요!" required>
                            </li>
                            <li>
                                <strong>이름</strong>
                                <input type="text" id="youName" class="mypage" name="youName" maxlength="5" placeholder="이름을 적어주세요!" required>
                            </li>
                            <li>
                                <strong>생년월일</strong>
                                <input type="text" id="youBirth" class="mypage" name="youBirth" placeholder="YYYY-MM-DD" maxlength="12">
                            </li>
                            <li>
                                <strong>휴대폰 번호</strong>
                                <input type="text" id="youPhone" class="mypage" name="youPhone" placeholder="000-0000-0000" maxlength="15">
                            </li>
                         
                        </ul>
                    </div>
                    <div class="join-btn">
                        <a href="mypagrModify.php">수정하기</a>
                        <a href="mypagrRemove.php">탈퇴하기</a>
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