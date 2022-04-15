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
            <main id="contents">
            <h2 class="ir_so">컨텐츠 영역</h2>
            <section id="board-type" class="section center mb100">
                <div class="container">
                    <h3 class="section__title">게시글 작성하기</h3>
                    <div class="board__inner">
                        <div class="board__modify">
                            <form action="boardModifySave2.php" name="boardModify" method="post">
                                <fieldset>
                                    <?php
                                       $boardID =$_GET['boardID'];

                                        $sql = "SELECT * FROM myBoard2 WHERE boardID = {$boardID}";
                                        $result = $connect -> query($sql);
                                        if($result){
                                            $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                            echo "<div><label for='boardID'>번호</label><input type='text' name='boardID' id='boardID' value='".$boardInfo['boardID']."'></div>";
                                            echo "<legend class='ir_so'>게시판 작성 영역</legend>";
                                            echo "<div><label for='boardTitle'>제목</label><input type='text' name='boardTitle' id='boardTitle' value='".$boardInfo['boardTitle']."'></div>";
                                            echo "<div><label for='boardContents'>내용</label><textarea name='boardContents' id='boardContents' rows='15'>".$boardInfo['boardContents']."</textarea></div>";
                                        }
                                    ?>
                                    <div class="board__btn">
                                        <button type="submit" value="저장하기">저장하기</button>
                                        <a href = "board2.php">목록보기</a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </section>
        </main>
                   
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