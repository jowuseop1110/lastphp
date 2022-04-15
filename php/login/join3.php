<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원 가입</title>

    <?php
    include "../include/style2.php";
    ?>
    <!-- //style -->
</head>
<body>
 
    <?php
    include "../include/header2.php";
    ?>
    <!--//header  -->
    <?php
    include "../include/skip.php";
    ?>
    <!--//skip  -->
    <main id="contents">
            <h2 class="ir_so">컨텐츠 영역</h2>
            <section class="join-type">
                <div class="member-form">
                    <h3>환영합니다!</h3>
                    <form action="joinSave3.php" name="join2" method="post">
                        <fieldset>
                            <legend class="ir_so">로그인 입력폼</legend>
                            <div class="join-box">
                                <div>
                                    <label for="youEmail">이메일</label>
                                    <input type="email" id="youEmail"  name="youEmail" maxlength="20"
                                        placeholder="이메일" autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youName">닉네임</label>
                                    <input type="name" id="youPass" name="youName" maxlength="10"
                                        placeholder="닉네임" autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youPass">비밀번호</label>
                                    <input type="password" id="youPass" name="youPass" placeholder="비밀번호"
                                        autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="youPassC">비밀번호 확인</label>
                                    <input type="password" id="youPassC" name="youPassC" placeholder="비밀번호 확인"
                                        autocomplete="off" required>
                                </div>
                                <div>
                                    <label for="youBirth">생년월일</label>
                                    <input type="name" id="youBirth" name="youBirth" maxlength="10"
                                        placeholder="생년월일" autocomplete="off" autofocus required>
                                </div>
                                <div>
                                    <label for="youPhone">핸드폰 번호</label>
                                    <input type="name" id="youPhone" name="youPhone" maxlength="13"
                                        placeholder="핸드폰 번호" autocomplete="off" autofocus required>
                                </div>
                            </div>
                            <button id="joinBtn" class="join-submint" type="submint">회원가입 완료</button>
                        </fieldset>
                    </form>
                </div>
            </section>
        </main>
    <!-- //main -->   
 
</body>
</html>