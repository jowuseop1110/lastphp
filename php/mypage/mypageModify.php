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
                <form action="mypageModifySave.php" name="join" method="post" onsubmit = "return joinChecks()">
                    <fieldset>
                        <legend class="ir_so">회원가입 입력폼</legend>
                        <div class="join-box">
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
                            echo" <div class='overlap'>";
                            echo"     <label for='youEmail'>이메일</label>";
                            echo"     <input type='email' id='youEmail' name='youEmail' value='".$mypageInfo['youEmail']."' placeholder='Sample@naver.com' required>";
                            echo"     <p class='comment' id='youEmailComment'></p>";

                            echo" </div>";
                            echo" <div class='overlap'>";
                            echo"     <label for='youNickName'>닉네임</label>";  
                            echo"     <input type='name' id='youNickName' name='youNickName' value='".$mypageInfo['youNickName']."' placeholder='닉네임을 적어주세요!' required>";
                            echo"     <p class='comment' id='youNickNameComment'></p>";

                            echo" </div>";
                            echo" <div class='basic'>";
                            echo"     <label for='youName'>이름</label>";
                            echo"     <input type='text' id='youName' name='youName' maxlength='5' value='".$mypageInfo['youName']."' placeholder='이름을 적어주세요!' required>";
                            echo"     <p class='comment' id='youNameComment'></p>";

                            echo" </div>";
                            echo" <div class='basic'>";
                            echo"     <label for='youBirth'>생년월일</label>"; 
                            echo"     <input type='text' id='youBirth' name='youBirth' value='".$mypageInfo['youBirth']."' placeholder='YYYY-MM-DD' maxlength='12'>";
                            echo"     <p class='comment' id='youBirthComment'></p>";

                            echo" </div>";
                            echo" <div class='basic'>";
                            echo"     <label for='youPhone'>휴대폰 번호</label>";  
                            echo"     <input type='text' id='youPhone' name='youPhone' value='".$mypageInfo['youPhone']."' placeholder='000-0000-0000' maxlength='15'>";
                            echo"     <p class='comment' id='youPhoneComment'></p>";

                            echo" </div>";

                            echo"<div class='basic'>";
                            echo"    <label for='youPass'>비밀번호</label>";
                            echo"    <input type='password' id='youPass' name='youPass' maxlength='20' placeholder='비밀번호를 적어주세요!' required>";
                            echo"    <p class='comment' id='youPassComment'></p>";
  
                            echo"</div>";
        }
?>                            
                    </div>
                </div>
                <div class="join-btn">
                <a href=""><button type="submit" value="수정하기">수정하기</button></a>
                    <a href="mypageRemove.php">탈퇴하기</a>
                </div>
                </fieldset>
                </form>
            </div>
        </section>
    </main>
    <!-- //main -->  


    <?php
        include "../include/footer.php";
    ?>
    <!--//footer  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        let emailCheck = false;
        let nickCheck = false;
        
        function emailChecking(){
            let youEmail = $("#youEmail").val();
            if(youEmail == null || youEmail ==''){
                $("#youEmailComment").text("이메일을 입력해주세요")
            } else {
                $.ajax({
                type : "POST",
                url : "joinCheck.php",
                data : {"youEmail": youEmail, "type": "emailCheck"},
                dataType : "json",
                success : function(data){
                    if(data.result == "good"){
                        $("#youEmailComment").text("사용 가능한 이메일입니다.");
                        emailCheck = true;
                    } else {
                        $("#youEmailComment").text("이미 존재하는 이메일입니다. 로그인을 해주세요!");
                        emailCheck = false;
                    }
                },
                error : function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            });
            }
        }
        function nickChecking(){
            let youNickName = $("#youNickName").val();
            if(youNickName == null || youNickName ==''){
                $("#youNickNameComment").text("닉네임을 입력해주세요");
            } else {
                $.ajax({
                type : "POST",
                url : "joinCheck.php",
                data : {"youNickName": youNickName, "type": "nickCheck"},
                dataType : "json",
                success : function(data){
                    if(data.result == "good"){
                        $("#youNickNameComment").text("사용 가능한 닉네임입니다.");
                        nickCheck = true;
                    } else {
                        $("#youNickNameComment").text("이미 존재하는 닉네임입니다. 변경해주세요!");
                        nickCheck = false;
                    }
                },
                error : function(request, status, error){
                    console.log("request" + request);
                    console.log("status" + status);
                    console.log("error" + error);
                }
            });
            }
        }

        function joinChecks(){
           

            //이메일 공백 검사
            if($("#youEmail").val() == ""){
                $("#youEmailComment").text("이메일을 입력해주세요!");
                return false;
            }

            //이메일 유효성 검사
            let getMail = RegExp(/^[A-Za-z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-]+/);
            if(!getMail.test($("#youEmail").val())){
                $("#youEmailComment").text("이메일 형식에 맞게 작성해주세요!");
                $("#youEmail").val("");
                return false;
            }


            //닉네임 공백 검사
            if($("#youNickName").val() == ""){
                $("#youNickNameComment").text("닉네임을 입력해주세요!");
                return false;
            }

            //닉네임 유효성 검사
            let getNick = RegExp(/^[가-힣|0-9]+$/);
            if(!getNick.test($("#youNickName").val())){
                $("#youNickNameComment").text("닉네임은 한글 숫자만 사용할 수 있습니다!");
                $("#youNickName").val("");
                return false;
            }


            //비밀번호 공백 검사
            if($("#youPass").val() == ""){
                $("#youPassComment").text("비밀번호를 입력해주세요!");
                return false;
            }


            //이름 공백 확인
            if($("#youName").val() == ""){
                $("#youNameComment").text("이름을 입력해주세요!");
                return false;
            }

            //이름 유효성 검사
            let getName = RegExp(/^[가-힣]+$/);
            if(!getName.test($("#youName").val())){
                $("#youNameComment").text("이름은 한글만 사용할 수 있습니다!");
                $("#youName").val("");
                return false;
            }

            //생년월일 공백 확인
            if($("#youBirth").val() == ""){
                $("#youBirthComment").text("생년월일(YYYY-MM-DD)을 공백없이 입력해주세요!");
                return false;
            }

            //생년월일 유효성 검사
            let getBirth = RegExp(/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/);
            if(!getBirth.test($("#youBirth").val())){
                $("#youBirthComment").text("생년월일은 숫자만 입력해주세요!");
                return false;
            }

            //휴대폰 번호 공백 확인
            if($("#youPhone").val() == ""){
                $("#youPhoneComment").text("휴대폰번호를 공백없이 입력해주세요!");
                return false;
            }

            //휴대폰 번호 유효성 검사
            let getPhone = RegExp(/^[0-9]{2,3}-[0-9]{3,4}-[0-9]{4}/);
            if(!getPhone.test($("#youPhone").val())){
                $("#youPhoneComment").text("휴대폰 번호를 숫자만 입력해주세요!");
                return false;
            }
    }

                    
    </script>
    
</body>
</html>