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
    <title>PHP 사이트</title>
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
    include "../include/header.php";
    ?>
    <!--//header  -->
    
    
    <main id="contents">    
                 <!-- 이미지 슬라이드 -->
    <section id="sliderType03">
                    <div class="slider__wrap">
                        <div class="slider__img">
                            <div class="slider__inner">
                                <!-- slider*5>img[src="img/img$$.jpg" alt="이미지$"] -->
                                <div class="slider s1"><img src="../assets/img/slider_bg01.jpg" alt="이미지1"><div class="s_text"><h2>JAVASCRIPT</h2><span>배워보자01</span></div></div>
                                <div class="slider s2"><img src="../assets/img/slider_bg02.jpg" alt="이미지2"><div class="s_text"><h2>HTML</h2><span>배워보자02</span></div></div>
                                <div class="slider s3"><img src="../assets/img/slider_bg03.jpg" alt="이미지3"><div class="s_text"><h2>JQUERY</h2><span>배워보자03</span></div></div>
                                <div class="slider s4"><img src="../assets/img/slider_bg04.jpg" alt="이미지4"><div class="s_text"><h2>PHP</h2><span>배워보자04</span></div></div>
                                <div class="slider s5"><img src="../assets/img/slider_bg05.jpg" alt="이미지5"><div class="s_text"><h2>REACT</h2><span>배워보자05</span></div></div>
                                
                            </div>
                        </div>
                        <div class="btn">
                                    <a href="#" class="white">자세히 보기</a>
                                    <a href="#" class="black">사이트 보기</a>
                                </div>
                        <div class="slider__btn">
                            <a href="#" class="prev">prev</a>
                            <a href="#" class="next">next</a>
                        </div>
                        <div class="slider__dot">
                            <!-- <a href="#" class="dot active"></a>
                            <a href="#" class="dot"></a>
                            <a href="#" class="dot"></a>
                            <a href="#" class="dot"></a>
                            <a href="#" class="dot"></a> -->
                        </div>
                    </div>
                </section>
                <!-- //이미지 슬라이드 -->  
        <h2 class="ir_so">컨텐츠 영역</h2>
        <section id="blog-type" class="section center type">
           
            <div class="container">  
                                    
                <h3 class="section__title">새로운 수업</h3>
                <p class="section__desc">수업과 간련된 블로그입니다. 다양한 정보를 확인하세요!</p>
                <div class="blog__inner">
                    <div class="blog__cont">
                    <?php
                    $sql ="SELECT * FROM myBlog LIMIT 9 ";
                    $result = $connect -> query($sql);             
                    ?>
                    <?php foreach($result as $blog){ ?>
                        <article class="blog">
                                <figure class="blog__header">
                                   <a href="../blog/blogView.php?blogID=<?=$blog['blogID']?>" style="background-image:url(../assets/img/blog/<?=$blog['blogImgFile']?>)"></a>                                 
                                </figure>
                                <div class="blog__body">
                                    <span class="blog__cate"><?=$blog['blogCategory']?></span>
                                    <div class="blog__title"><?=$blog['blogTitle']?></div>
                                    <div class="blog__desc"><?=$blog['blogContents']?></div>
                                    <div class="blog__info">
                                        <span class="author"><a href="#"><?=$blog['blogAuthor']?><a href="#"></a></span>
                                        <span class="date"><?=date('Y-m-d', $blog['blogRegTime'])?></span>                               
                                    </div>
                                </div>
                        </article>
                        <?php } ?> 
                    </div> 
                    <div class="blog__btn">
                        <a href="../blog/blog.php">더 보기</a>
                    </div>    
                </div>             
            </div>
        </section>   
        <!-- //blog-type -->

        <section id="quiz-type" class="section center gray">
            <div class="container">
                <h3 class="section__title">새로운<span></span> 퀴즈</h3>
                <p class="section__desc">
                    웹디자이너, 웹 퍼블리셔, 프론트앤드 개발자를 위한 강의 퀴즈입니다.
                </p>
                <div class="quiz__inner">
                    <div class="quiz__header">
                    <div class="quiz__subject">
                    <label for="quizSubject">과목 선택</label>
                            <select name="quizSubject" id="quizSubject">
                                <option value="javascript">javascript</option>
                                <option value="jquery">jquery</option>
                                <option value="html">html</option>
                                <option value="css">css</option>
                            </select>
                        </div>
                    </div>
                    <div class="quiz__body">
                        <div class="title">
                            <span class="quiz__num"></span> . 
                            <span class="quiz__ask"></span>
                            <div class="quiz__desc">
                                
                            </div>
                        </div>
                        <div class="contents">
                            <div class="quiz__selects">
                                <label for="select1">
                                    <input class="select" type="radio" id="select1" name="select" value="1">
                                    <span class="choice"></span>
                                </label>
                                <label for="select2">
                                    <input class="select" type="radio" id="select2" name="select" value="2">
                                    <span class="choice"></span>
                                </label>
                                <label for="select3">
                                    <input class="select" type="radio" id="select3" name="select" value="3">
                                    <span class="choice"></span>
                                </label>
                                <label for="select4">
                                    <input class="select" type="radio" id="select4" name="select" value="4">
                                    <span class="choice"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="quiz__footer">
                        <div class="quiz__btn">
                            <button class="comment Rainy none">해설 보기</button>
                            <button class="next Frozen ml10 right none">다음 문제</button>
                            <button class="confirm Lady ml10 right">정답 확인</button>                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //quiz -->

        <section id ="notice-type" class="section center">
            <div class="container">
                <h3 class="section__title">새로운 소식</h3>
                <p class="section__desc">수업과 간련된 소식입니다. 다양한 정보를 확인하세요!</p>
                <div class="notice__inner">
                <article class="notice">
                        <h4>게시판</h4>
                        <ul>
                        <?php
                            $sql = "SELECT boardTitle, regTime, boardID FROM myBoard ORDER BY boardID DESC LIMIT 4";
                            $result = $connect -> query($sql);
                            foreach($result as $board){ 
                        ?>
                                <li>
                                    <a href="../board/boardView.php?boardID=<?=$board['boardID']?>"><?=$board['boardTitle']?></a><span class="time"><?=date('Y-m-d', $board['regTime'])?></span>
                                </li>
                        <?php ; } ?>
                        </ul>
                        <a href="../board/board.php" class="more">더보기</a>
                    </article>
                    <article class="notice">
                        <h4>댓글</h4>
                        <?php
                            $sql = "SELECT youText, regTime FROM myComment ORDER BY commentID DESC LIMIT 4";
                            $result = $connect -> query($sql);
                            foreach($result as $comment){
                        ?>
                                <li>
                                    <a href="../comment/comment.php"><?=$comment['youText']?></a><span class="time"><?=date('Y-m-d', $comment['regTime'])?></span>
                                </li>
                        <?php } ?>
                        </ul>
                        <a href="../comment/comment.php" class="more">더보기</a>
                    </article>
                </div>   
            </div>              
        </section>   
        <!-- //notice-type -->

        
        
    </main>
<?php
    include "../include/footer.php";
    ?>
    <!--//footer  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const sliderWrap = document.querySelector(".slider__wrap")
        const sliderImg = document.querySelector(".slider__img") //이미지 보이는 영역
        const sliderInner = document.querySelector(".slider__inner") //이미지 움직이는 영역
        const slider = document.querySelectorAll(".slider") //5개의 이미지 저장
        const sliderBtn = document.querySelector(".slider__btn");
        const sliderBtnPrev = sliderBtn.querySelector(".prev");
        const sliderBtnNext = sliderBtn.querySelector(".next");
        const sliderDot = document.querySelector(".slider__dot");

        console.log(slider);
        

        let currentIndex = 0;
        let sliderWidth = sliderImg.offsetWidth;   //이미지 가로 값
        let sliderLength = slider.length;   //이미지 갯수
        let sliderFirst = slider[0];     //첫번째 이미지
        let sliderLast = slider[sliderLength - 1];  //마지막 이미지
        let cloneFirst = sliderFirst.cloneNode(true);  // 첫 번째 이미지 복사
        let cloneLast = sliderLast.cloneNode(true)     // 마지막 이미지 복사
        let position = "";
        let dotIndex = "";
        let sliderTimer = "";
        let interval = 2000;
        let dotActive; 

        console.log(sliderFirst)
        console.log(sliderWidth)
        //이미지 복사 appendTo/prependTo : append/prepend

        sliderInner.appendChild(cloneFirst);
        sliderInner.insertBefore(cloneLast, sliderFirst);
        
        function gotoSlider(index){ //index라는 매개변수
            sliderInner.classList.add("transition");
            //1 2 3 4 5
             sliderInner.style.left = -sliderWidth * (index+1) + "px";
             
             //위에서 (index+1)로 인해 슬라이드가 바뀔때마다 index값이 1, 2, 3, 4, 5, 1, 2, 3, 4, 5......
             currentIndex = index
             console.log(currentIndex);
            //두번째 이미지 : left =-1600px
            //세번째 이미지 : left =-2400px
            //네번째 이미지 : left =-3200px
            //다섯번째 이미지 : left =-4000px
             dotActive = document.querySelectorAll(".slider__dot .dot");
             dotActive.forEach(el => {              
                  el.classList.remove("active");
                  if(currentIndex < 5){
                  dotActive[currentIndex].classList.add("active")
                  } else {
                    sliderDot.firstElementChild.classList.add("active");  
                  }
             })
             document.querySelectorAll(".slider__dot .dot").forEach((dot, index) => {
                dot.addEventListener("click", () => {
                    gotoSlider(index)
            });
        });           
        };
  
            function dotInit(){
            for(let i=0; i<sliderLength; i++){
                dotIndex += "<a href='#1' class='dot'></a>";
            }
            dotIndex += "<a href='#1' class='play'>play</a>";
            dotIndex += "<a href='#1' class='stop show'>stop</a>";
            sliderDot.innerHTML = dotIndex;
            //첫 번째 닷버튼한테 "active"활성화
            sliderDot.firstElementChild.classList.add("active");       
        }
        dotInit();

    

        function autoPlay(){
            sliderTimer = setInterval(() => {
                gotoSlider(currentIndex + 1);
            }, interval)
        }
        autoPlay()

        function stopPlay(){
            clearInterval(sliderTimer);
        }

        sliderBtnPrev.addEventListener("click", ()=> {
            let prevIndex = currentIndex - 1;
            gotoSlider(prevIndex)
        });
        sliderBtnNext.addEventListener("click", ()=> {
            let nextIndex = currentIndex + 1;
            gotoSlider(nextIndex)
        });


        sliderInner.addEventListener("transitionend", ()=> {
            sliderInner.classList.remove("transition");
            if(currentIndex == -1){
                sliderInner.style.left = -(sliderLength * sliderWidth) + "px";
                currentIndex = sliderLength -1;
            }
            if(currentIndex == sliderLength){
                sliderInner.style.left = -(1 * sliderWidth) + "px";
                currentIndex = 0;
            }
        });

        sliderInner.addEventListener("mouseover", () => {
            // document.querySelector(".play").classList.add("show");
            // document.querySelector(".stop").classList.remove("show");
            stopPlay();
        });

        sliderInner.addEventListener("mouseleave", () => {
            if(document.querySelector(".play").classList.contains("show")){
                stopPlay();
            } else {
                autoPlay();
            }  
        });

        document.querySelector(".play").addEventListener("click", ()=> {
            document.querySelector(".play").classList.remove("show");
            document.querySelector(".stop").classList.add("show");
            autoPlay();
     
        });
        document.querySelector(".stop").addEventListener("click", ()=> {
            document.querySelector(".stop").classList.remove("show");
            document.querySelector(".play").classList.add("show");
            stopPlay();
    
        });
 

        //새로운 퀴즈
        let quizAnswer = "";

        function quizView(view){
            $(".quiz__num").text(view.quizID);
            $(".section__title span").text(view.quizSubject);
            $(".quiz__ask").text(view.quizAsk);
            $("#select1 + span").text(view.quizChoice1);
            $("#select2 + span").text(view.quizChoice2);
            $("#select3 + span").text(view.quizChoice3);
            $("#select4 + span").text(view.quizChoice4);
            quizAnswer = view.quizAnswer;
        }

        //정답 체크
        function quizCheck(){
            let selectCheck = $(".quiz__selects input:checked").val();
            //정답을 체크 안했으면
            if(selectCheck == null || selectCheck == ''){
                alert('정답을 체크해주세요!!')
            } else {
                $(".quiz__btn .next").fadeIn();
                //정답을 체크 했으면
                if(selectCheck == quizAnswer){
                    //정답
                    $(".quiz__selects #select" + quizAnswer).addClass("correct");
                }else {
                    //오답
                    $(".quiz__selects #select" + selectCheck).addClass("incorrect");
                    $(".quiz__selects #select" + quizAnswer).addClass("correct");
                }
            }
        }


        //문제 데이터 가져오기
        function quizData(){
            let quizSubject = $("#quizSubject").val();

            $.ajax({
                url: "../quiz/quizinfo.php",
                method: "POST",
                data: {"quizSubject": quizSubject},
                dataType: "json",
                success: function(data){
                    console.log(data.quiz);
                    quizView(data.quiz);
                },
                error: function(reqeust, status, error){
                    console.log('reqeust' + reqeust);
                    console.log('status' + status);
                    console.log('error' + error);
                }
            })
        }
        quizData();
        
        //과목 선택
        $("#quizSubject").change(function(){
            quizData();
        })

        //정답 확인
        $(".quiz__btn .confirm").click(function(){
            //정답을 클릭했는지 안했는지 판단
            quizCheck();
        });

        //다음 문제 버튼
        $(".quiz__btn .next").click(function(){
            quizData();
            $(".quiz__selects input").prop("checked", false);
            $(".quiz__selects input").removeClass("correct");
            $(".quiz__selects input").removeClass("incorrect");
            $(".quiz__btn .next").fadeOut(); 
        })
    </script>
</body>
</html>