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
                <main id="contents">
            <h2 class="ir_so">컨텐츠 영역</h2>
            <section id="board-type" class="section center mb100">
                <div class="container">
                    <h3 class="section__title">자유 게시판</h3>
                    <div class="board__inner">
                        <div class="board__search">
                            <form action="boardSearch.php" name="boardSearch" method="GET">
                                <fieldset>
                                    <legend class="ir_so">게시판 검색 영역</legend>
                                    <div>
                                        <input type="search" name="searchKeyword" class="search-form"
                                            placeholder="검색어를 입력하세요!" aria-label="search" required>
                                    </div>
                                    <div>
                                        <select name="searchOption" class="search-option">
                                            <option value="title">제목</option>
                                            <option value="content">내용</option>
                                            <option value="name">등록자</option>
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="search-btn">검색</button>
                                    </div>
                                    <div>
                                        <a href="boardWrite2.php" class="search-btn black">글쓰기</a>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="board__table">
                            <table class="hover">
                                <colgroup>
                                    <col style="width: 5%;">
                                    <col>
                                    <col style="width: 10%;">
                                    <col style="width: 12%;">
                                    <col style="width: 7%;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>번호</th>
                                        <th>제목</th>
                                        <th>등록자</th>
                                        <th>등록일</th>
                                        <th>조회수</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
   
   if(isset($_GET['page'])){
    $page = (int) $_GET['page'];
   } else {
    $page = 1;
   }
    $PageView = 10;
    $PageLimit = ($PageView * $page) - $PageView;

    $sql = "SELECT b.boardID, b.boardTitle, m.youName, b.regTime, b.boardView FROM myBoard2 b JOIN myMember3 m ORDER BY boardID DESC LIMIT {$PageLimit}, {$PageView}";
    
    $result = $connect -> query($sql);
    
    
    if($result){
        $count = $result -> num_rows;
        
        if($count > 0){
            for($i=1; $i<=$count; $i++){
                $board2Info = $result -> fetch_array(MYSQLI_ASSOC);
                echo "<tr>";
                echo "<th>".$board2Info['boardID']."</th>";
                echo "<td class='left'><a href='boardView2.php?boardID={$board2Info['boardID']}'>".$board2Info['boardTitle']."</a></td>";
                echo "<td>".$board2Info['youName']."</td>";
                echo "<td>".date('Y-m-d', $board2Info['regTime'])."</td>";
                echo "<td>".$board2Info['boardView']."</td>";
                echo "</tr>";
            }
        }
    }
?>
  
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="board__pages">
                            <ul>
                        <?php
                       include "boardPage2.php";
                        ?>
                           
                              
              
                            </ul>
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