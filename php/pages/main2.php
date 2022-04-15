<?php
    include "../connect/connect.php";
    include "../connect/session.php";
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
                <!-- Banner -->
                    <section id="banner">
                        <div class="content">
                            <header>
                                <h1>요리보고 조리보고<br />
                               초간단 편의점<br /> 레시피</h1>
                            </header>
                            <p>요리하기 힘든 자취생을 위한 초간단 <br>편의점 레시피를 모아서 누구나 따라하기 쉽게!</p>
                        </div>
                        <span class="image object">
                            <img src="../Html/Img/pic10.jpg" alt="" />
                        </span>
                    </section>
                <!-- Section -->
                    <section>
                        <header class="major">
                            <h2>오늘의 랭킹!</h2>
                        </header>
                        <div class="posts">
                            <article>
                                <a href="#" class="image"><img src="../Html/Img/pic01.jpg" alt="" /></a>
                                <h3>마크 정식</h3>
                                <p>GOT7의 멤버 마크의 팬이<br>마크를 알리고자 붙인 메뉴</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">더보기</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="#" class="image"><img src="../Html/Img/pic02.jpg" alt="" /></a>
                                <h3>삼각 김밥 비빔밥</h3>
                                <p>‘맛있는 녀석들’의 유민상 레시피로<br>유명한 비빔밥!</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">더보기</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="#" class="image"><img src="../Html/Img/pic03.jpg" alt="" /></a>
                                <h3>부대찌개 컵라면</h3>
                                <p>편의점 음식의 조합으로 부대찌개를<br> 만들수 있어 인기만점</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">더보기</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="#" class="image"><img src="../Html/Img/pic04.jpg" alt="" /></a>
                                <h3>불닭치즈 볶음밥</h3>
                                <p>면과 밥과 매콤한 소스의 묘한 조합이<br일품인 불닭치즈 볶음밥</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">더보기</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="#" class="image"><img src="../Html/Img/pic05.jpg" alt="" /></a>
                                <h3>사리곰탕 만둣국</h3>
                                <p>다른 메뉴 없이 오직 컵라면과<br>편의점 만두로 만들 수 있는 사리곰탕 만둣국</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">더보기</a></li>
                                </ul>
                            </article>
                            <article>
                                <a href="#" class="image"><img src="../Html/Img/pic06.jpg" alt="" /></a>
                                <h3>오지치즈 후라이</h3>
                                <p>패밀리 레스토랑에서 맛볼 수 있는 인기 메뉴를편의점에서도 간단하게!</p>
                                <ul class="actions">
                                    <li><a href="#" class="button">더보기</a></li>
                                </ul>
                            </article>
                        </div>
                    </section>
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