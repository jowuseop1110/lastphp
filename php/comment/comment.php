<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>댓글</title>
    <?php
    include "../include/style.php";
    ?>
    <!-- //style -->

</head>
<body>
<?php
    include "../include/header.php";
    ?>
    <!--//header  -->
    <?php
    include "../include/skip.php";
    ?>
    <!--//skip  -->

  <main id="contents">
        <h2 class="ir_so">컨텐츠 영역</h2>
       
            <section id="card-type" class="section center">
            <div class="container">
                <h3 class="section__title">CODING</h3>
                <p class="section__desc">
                코딩은 ‘code’와 ‘ing’의 합성어로, 여기서 코드(code)란 ‘프로그램에서 작업을 수행하기 위하여<BR>
                 사용되는 하나의 명령어 또는 몇 개의 명령어들로 구성된 부분’을 뜻합니다.
                </p>
                <div class="card__inner">
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/coding1.jpg" alt="이미지1">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">웹표준 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/coding2.jpg" alt="이미지2">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">반응형 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <article class="card">
                        <figure class="card__header">
                            <img class="card__img" src="../assets/img/coding3.jpg" alt="이미지3">
                        </figure>
                        <div class="card__body">
                            <h3 class="card__title">기업 사이트 만들기</h3>
                            <p class="card__desc">사이트를 만들기 위한 기초 강의입니다. 기본 코딩에 대한 감각을 익히고, 웹 표준을 준수하면서 코딩하는 방법을 익힙니다. 다양한 예제를 통해 사이트를 만드는 기본 강의입니다.</p>
                            <a class="card__btn" href="#">
                                더 자세히 보기
                                <svg width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51.3536 4.35355C51.5488 4.15829 51.5488 3.84171 51.3536 3.64645L48.1716 0.464466C47.9763 0.269204 47.6597 0.269204 47.4645 0.464466C47.2692 0.659728 47.2692 0.976311 47.4645 1.17157L50.2929 4L47.4645 6.82843C47.2692 7.02369 47.2692 7.34027 47.4645 7.53553C47.6597 7.7308 47.9763 7.7308 48.1716 7.53553L51.3536 4.35355ZM0 4.5H51V3.5H0V4.5Z" fill="#5B5B5B"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div> 
            </div>
            </section>
            <!-- //cart-type -->

            <section id="comment-type" class="section center purple">
                <h3 class="section__title">강의 신청하기</h3>
                <p class="section__desc">강의 신청하기는 누구나 댓글을 달 수 있습니다. 회원가입 하지 않아도 신청 가능 합니다.</p>
                <div class="comment__inner">
                    <div class="comment__form">
                        <form action="commentSave.php" method="post" name="comment">
                            <fieldset>
                                <legend class="ir_so">댓글쓰기</legend>
                                <div class="comment__wrap">
                                    <div>
                                        <label for="youName" class="ir_so">이름</label>
                                        <input type="text" name="youName" id="youName" class="input__style" placeholder="이름" autocomplete="off" required>
                                    </div>
                                    <div>
                                        <label for="youText" class="ir_so">댓글 쓰기</label>
                                        <input type="text" name="youText" id="youText" class="input__style width" placeholder="시간, 날짜, 강의 제목을 적어주세요!" autocomplete="off" required>
                                    </div>
                                    <button class="comment__btn" type="submit" value ="댓글 작성하기">작성하기</button> 
                                </div>
                               
                            </fieldset>
                        </form>
                    </div>
                    <div class="comment__list">
                        <!-- <div class="list">
                            <p class="comment__desc">저 신청할게요! 5월 강의 신청합니다.</p>
                            <div class="comment__icon">
                                    <span><img src="../assets/img/Group.png" alt="얼굴"></span>
                                    <span class="name">조운섭</span>
                                    <span class="date">2022-03-11</span>
                            </div>
                        </div> -->
                        <?php 
                            include "../connect/connect.php";

                            $sql = "SELECT * FROM myComment";
                            $result = $connect -> query($sql);

                            // $commentInfo = $result -> fetch_array(MYSQLI_ASSOC);

                            // echo "<pre>";
                            // var_dump($commentInfo);
                            // echo "</pre>";
                            if($result){
                                $count =  $result -> num_rows;
                                if($count > 0){
                                    for($i=1; $i<=$count; $i++){
                                        $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                    echo "<div class='list'>";
                                    echo "<div class='comment__icon'>";
                                    echo "<p class='comment__desc'>".$boardInfo['youText']."</p>";
                                    echo "<span class='face'><img src='../assets/img/Group.png' alt='얼굴'></span>";
                                    echo "<span class='name'>".$boardInfo['youName']."</span>";
                                    echo "<span class='date'>".date('Y-m-d', $boardInfo['regTime'])."</span>";       
                                    echo "</div>";
                                    echo "</div>";
                                    }
                                }
                            }
                            ?>                       
                         <!-- for문 숙제 -->           
                    </div>                  
                </div>
            </section>
    </main>
<?php
    include "../include/footer.php";
    ?>
    <!--//footer  -->
</body>
</html>