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
                    <h3 class="section__title">게시글 작성하기</h3>
                    <p class="section__desc">블로그입니다 .블로그 글을 작성해주세요!</p>
                    <div class="blog__inner">
                        <div class="blog__write">
                            <form action="blogModifySave.php" name="blogWrite" method="post" enctype="multipart/form-data"> <!-- <---- 이미지 파일 거져올려면 설정 해야함 enctype="multipart/form-data"-->
                                <fieldset>
                                    <legend class="ir_so">블로그 게시글 작성 영역</legend>
                                        <div>
                                            <label for="blogCate">카테고리</label>
                                            <?php
                                            $blogID = $_GET['blogID'];
                                            echo $blogID;
                                            $sql = "SELECT * FROM myBlog WHERE blogID = {$blogID}";
                                            $result = $connect -> query($sql);
                                            if($result){
                                                $blogInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                                echo "<pre>";
                                                var_dump($blogInfo);
                                                echo "</pre>";
                                            }
                                            ?>
                                            <select name="blogCate" id="blogCate">
                                                <option value="<?=$blogInfo['blogCategory']?>"><?=$blogInfo['blogCategory']?></option>
                                                <option value="javascript">javascript</option>
                                                <option value="jquery">jquery</option>
                                                <option value="html">html</option>
                                                <option value="css">css</option>
                                            </select>
                                        </div>
                                        <div>
                                        <div>
                                            <label for="blogTitle">제목</label>
                                            <input type="text" name="blogTitle" id="blogTitle" value="<?=$blogInfo['blogTitle']?>" require>
                                            <input style="display:none"type="text" name="blogID" value="<?=$blogInfo['blogID']?>" require>
                                        </div>
                                        <div>
                                            <label for="blogContents">내용</label>
                                            <textarea name="blogContents" id="blogContents"><?=$blogInfo['blogContents']?></textarea>
                                        </div>
                                        <div>
                                            <span class="blogSpan">기본 이미지</span>
                                            <img src="../assets/img/blog/<?=$blogInfo['blogImgFile']?>" alt="수정 이미지" class="blogFile_img">
                                            <label for="blogFile">파일</label>
                                            <input type="file" name="blogFile" id="blogFile"  placeholder="사진을 넣어주세요 사진은 jpg, gif, png 파일만 지원이 됩니다." require>
                                        </div>
                                            <button type="submit" value="수정하기">수정하기</button>
                                            
                                </fieldset>
                            </form>
                        </div>
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