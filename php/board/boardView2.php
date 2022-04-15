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
                    <h3 class="section__title">게시글 보기</h3>
                    <div class="board__inner">
                        <div class="board__table">
                            <table>
                                <colgroup>
                                    <col style="width: 20%">
                                    <col>
                                    <col style="width: 20%">
                                </colgroup>
                                <tbody>
                                    <?php
                                    $boardID = $_GET['boardID']; //게시글 번호
                                    
                                    $sql = "SELECT boardTitle, m.youName, b.regTime, b.boardView, boardContents FROM myBoard2 b JOIN myMember3 m WHERE boardID = {$boardID}";
                                    $result = $connect -> query($sql);
                                    
                                    $sql = "UPDATE myBoard2 SET boardView = boardView + 1 WHERE boardID = {$boardID}";
                                    $connect -> query($sql);

                                    if($result){
                                        $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);

                                        echo "<tr>";
                                        echo "<th>제목</th>";
                                        echo "<td class='left'>".$boardInfo['boardTitle']."</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<th>작성자</th>";
                                        echo "<td class='left'>".$boardInfo['youName']."</td>";
                                        echo "<td>".date('Y-m-d H:i',$boardInfo['regTime'])."</td>";
                                        echo "<td>".$boardInfo['boardView']."</td>";
                                        echo "</tr>";
                                        echo "<tr>";
                                        echo "<td class='height' colspan='4'>".$boardInfo['boardContents']."</td>";
                                        echo "</tr>";
                                    }


                                    ?>
                                    
                                    <!-- <tr>
                                        <th>제목</th>
                                        <td class="left">이번주 숙제 내용입니다. 숙제 확인하고 꼭 제출하세요!</td>
                                    </tr>
                                    <tr>
                                        <th>작성자</th>
                                        <td class="left">박근혁</td>
                                        <td>2022.03.22</td>
                                        <td>조회수</td>
                                    </tr>
                                    <tr>
                                        <td class="height" colspan="4">
                                            웹을 제작하다보면
                                            이런식으로
                                            select 나 input 박스가 아이폰(아이패드)에서만 
                                            둥그런 기본 스타일이 적용 되어서
                                            디자인이 틀어지는 경우가 있어요.
                                            기껏 디자인했는데 틀어지면 마음아프잖아여... 
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="board__btn">
                            <a href="board2.php">목록보기</a>
                            <a href="boardRemove2.php?boardID=<?=$boardID?>" onclick="return noticeRemove();">삭제하기</a>
                            <a href="boardModify2.php?boardID=<?=$boardID?>">수정하기</a>
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