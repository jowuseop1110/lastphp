(function($){
    //첫번째 유형 this: 자기 자신만 찾는 선택자
    // $(".nav > ul > li").mouseover(function(){
    //     $(this).find(".submenu").css("display","block");
    // });
    // $(".nav > ul > li").mouseout(function(){
    //     $(this).find(".submenu").css("display","none");
    // });

    //두번째 유형 // foreach 같은 전체 선택자
    // $(".nav > ul > li").mouseover(function(){
    //     $(".nav > ul > li").find(".submenu").css("display","block");
    // });
    // $(".nav > ul > li").mouseout(function(){
    //     $(".nav > ul > li").find(".submenu").css("display","none");
    // });

    // $(".nav > ul > li").mouseover(function(){
    //     $(this).find(".submenu").stop().show(500);
    // });
    // $(".nav > ul > li").mouseout(function(){
    //     $(this).find(".submenu").stop().hide(500);
    // });

    // $(".nav > ul > li").mouseover(function(){
    //     $(this).find(".submenu").stop().slideDown(500);
    // });
    // $(".nav > ul > li").mouseout(function(){
    //     $(this).find(".submenu").stop().slideUp(500);
    // });
    // 헤더 메뉴
    $(".nav > ul > li").mouseover(function(){
        $(".nav > ul > li").find(".submenu").stop().slideDown(500);
    });
    $(".nav > ul > li").mouseout(function(){
        $(".nav > ul > li").find(".submenu").stop().slideUp(500);
    });

    //탭 메뉴
    var tabMenu = $(".notice");

    tabMenu.find("ul> li > ul").hide();
    tabMenu.find("ul> li.active > ul").show();

    function tabList(e){
        e.preventDefault();
        var target = $(this);   //사용자가 클릭한 메뉴
        target.next().show().parent("li").addClass("active").siblings("li").removeClass("active").find("ul").hide();
                                                            //형제
    }
    tabMenu.find("ul > li > a").click(tabList)
   
})(jQuery);