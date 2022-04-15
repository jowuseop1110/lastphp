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
    <title>블로그 글 쓰기</title>
    <?php
    include "../include/style.php";
    ?>
    <!-- //style -->
    <style>
        #footer {
            background: #f5f5f5;
        }
    </style>
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
        <section id="board-type" class="section center mb100">
            <div class="container">
                <h3 class="section__title">검색 결과 블로그</h3>
                <p class="section__desc">수업과 간련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__search">
                        <?php
                            function msg($alert){
                                echo "<p class='result'>총 ".$alert." 건이 검색되었습니다.</p>";
                            }                
                            $blogSearch = $_GET['blogSearch'];  
                        ?>
                    <!-- 여기까지 완료함 blogSearch 불러옴!! -->
                        <form action="blogSearch.php" method="get">
                            <fieldset>
                                <legend class="ir_so">검색 영역</legend>               
                                <input type="search" name="blogSearch" id="blogSearch" class="search" placeholder="검색어를 입력해주세요!">
                                <label for="blogSearch" class="ir_so">검색</label>
                                <button class="button">검색</button>
                            </fieldset>
                        </form>
                        <div class="blog__btn">
                        <a href="blogWrite.php">글쓰기</a>
                    </div>
                    </div>
                    <div class="blog__cont">

                    <?php
              

            
                    $sql ="SELECT * FROM myBlog WHERE blogTitle LIKE '%$blogSearch%' or blogContents LIKE '%$blogSearch%' or blogCategory LIKE '%$blogSearch%' or blogAuthor LIKE '%$blogSearch%'";
                    $result = $connect -> query($sql);
                    $count = $result -> num_rows;
                    msg($count)  
                    ?>

<?php foreach($result as $blog){ ?>
    <article class="blog">
        <figuer class="blog__header">
            <a href="blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['blogImgFile']?>)"></a>
        </figuer>
        <div class="blog__body">
            <span class="blog__cate"><?=$blog['blogCategory']?></span>
            <div class="blog__title"><a href="blogView.php?blogID=<?=$blog['blogID']?>"><?=$blog['blogTitle']?></a></div>
            <div class="blog__desc"><?=$blog['blogContents']?></div>
            <div class="blog__info">
                <span class="author"><a href="#"><?=$blog['blogAuthor']?></a></span>
                <span class="date"><?=date('Y-m-d', $blog['blogRegTime'])?></span>
                <span class="modify"><a href="blogModify.php?blogID=<?=$blog['blogID']?>">수정</a></span>
                <span class="delete"><a href="blogRemove.php?blogID=<?=$blog['blogID']?>" onclick="return noticeRemove();">삭제</a></span>
            </div>
        </div>
    </article>
<?php } ?>
                    
                   

                                            <!-- for($i=1; $i<=$count; $i++){
                                               $boardInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                               echo "<tr>";
                                               echo "<td>".$boardInfo['boardID']."</td>";
                                               echo "<td class='left'><a href='boardView.php?boardID={$boardInfo['boardID']}'>".$boardInfo['boardTitle']."</a></td>";                                             
                                               echo "<td>".$boardInfo['youName']."</td>";
                                               echo "<td>".date('Y-m-d', $boardInfo['regTime'])."</td>";
                                               echo "<td>".$boardInfo['boardView']."</td>";
                                               echo "</tr>"; 
                                           } -->


                       
                        <!-- <article class="blog"></article>
                        <article class="blog"></article>
                        <article class="blog"></article>
                        <article class="blog"></article> -->

                    
                    </div>
                    
                   
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php
    include "../include/footer.php";
    ?>
    <!--//footer  -->
    <script>
        function noticeRemove() {
            let notice = confirm("정말 삭제하시겠습니까?","");
            return notice;
        }
    </script>
</body>
</html>