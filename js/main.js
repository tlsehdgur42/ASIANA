$(document).ready(function(){
    $(".menu1 nav ").hover(function(){
        // 서브메뉴 내려옴
        $('.menu1 .sub').stop().slideDown();
        // 서브메뉴배경 내려옴
        $('.sub_bg').stop().slideDown();
    }, function(){
        // 서브메뉴 올라감
        $('.menu1 .sub').stop().slideUp();
        // 서브메뉴배경 올라감
        $('.sub_bg').stop().slideUp();
    });
    $(".menu2 nav ").hover(function(){
        // 서브메뉴 내려옴
        $('.menu2 .sub').stop().slideDown();
        // 서브메뉴배경 내려옴
        $('.sub_bg').stop().slideDown();
    }, function(){
        // 서브메뉴 올라감
        $('.menu2 .sub').stop().slideUp();
        // 서브메뉴배경 올라감
        $('.sub_bg').stop().slideUp();
    });
    // header영역 안에 있는 검색 버튼을 클릭하면 검색영역이 내려옴.
    $('.search3 a').click(function(){
        // 검색 영역이 내려옴
        $('.search_area').stop().slideDown({
            duration : 500,
            easing : "easeOutBack"
        });
    });
    $('.search_area > a').click(function(){
        // 검색 영역이 올라감
        $('.search_area').stop().slideUp();
    });
    var swiper = new Swiper(".mySwiper", {
        // spaceBetween : 100 슬라이드 사이 여백 100주기
        spaceBetween : 100,
        // loop : true ; 마지막 슬라이드가 끝나면 다시 처음으로 되돌아가기
        loop : true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
    });
    // section.tab 탭메뉴
    // 탭메뉴 영역의 버튼에 클릭 이벤트 설정
    $('.tab_btn ul li a').click(function(e){
        // a태그의 링크 속성을 막음
        e.preventDefault();
        // 클릭한 버튼(a태그)의 부모객체(li)의 인덱스 번호를 읽어서 변수 btnNum에 저장
        var btnNum=$(this).parent('li').index();
        // 만약 클릭한 버튼(a태그)에 active속성이 없다면
        // ! : not(논리연산자) ~가 아니면이라는 뜻
        // hasClass() : 클래스 속성을 갖고 있는지 검사
        if(!($(this).hasClass('active'))){
        // 모든 버튼(a태그)의 active제거
        $('.tab_btn ul li a').removeClass('active');
        // 클릭한 버튼(a태그)에만 active 설정
        $(this).addClass('active');
        // 이미지가 움직이는 기능을 가진 함수 호출
        // 인덱스번호(btnNum)을 함수의 매개변수로 넘기기
        imgMove(btnNum);
        // 설명 영역의 li가 아래에서 위로 이동하는 기능을 가진 함수 호출
        desMove(btnNum);
        }
    });
    function imgMove(btnNum){
        // 이미지(li)의 가로크기를 읽어서 imgMidth변수에 저장
        var imgWidth=$('.tab_img ul li').width();
        // 클릭한 버튼의 인덱스번호* 이미지의 가로길이만큼 왼쪽으로 이동
        var moving=-(btnNum*imgWidth);
        $('.tab_img ul').stop().animate({
            left:moving
        });
    }
    // .tab_des ul li의 첫번째 객체를 currentDes에 저장
    var currentDes=$('.tab_des ul li:first');
    // 이전 li객체를 저장하는 변수 선언
    var oldDes='';
    // 설명이 움직이는 기능을 가진 함수 선언
    function desMove(btnNum){
            // desNum에 해당하는 설명(li)를 currentDes에 저장
            oldDes=currentDes;
            // 지금 현재 눈에 보이는 설명(li)를 oLdDes에 저장
            currentDes=$('.tab_des ul li').eq(btnNum);
            // oLdDes에 있는 li객체는 위로 이동하면서 사라짐
            oldDes.stop().animate({
                opacity:0,
                top:-700
                // 500(실행시간, 0.5초동안 animate 실행)
                // animate실행 후 function(){} 명령어 실행
                // dldDes에 있는 li객체를 위로 사라진 후에 다시 아래로 이동
            },function(){
                oldDes.css({
                    opacity:0,
                    top:700,
                });
            });
            // currentDes에 있는 li객체는 아래에서 올라오면서 나타남
            // delay(500) : 0.5초 기다렸다가 animate()실행
            currentDes.delay(700).stop().animate({
                opacity:1,
                top:0,
            },500);
    } //desMove 함수 끝
    // 신제품 , 인기제품
    $('.t1').addClass('active');
    $('.t2').removeClass('active');
    $('.new').click(function(e){
        e.preventDefault();
        $('.t1').addClass('active');
        $('.t2').removeClass('active');
        $('.new').addClass('active');
        $('.best').removeClass('active');
    });
    $('.best').click(function(e){
        e.preventDefault();
        $('.t1').removeClass('active');
        $('.t2').addClass('active');
        $('.new').removeClass('active');
        $('.best').addClass('active');
    });
    // swiper2
    var swiper2 = new Swiper(".mySwiper2", {
        // spaceBetween : 100 슬라이드 사이 여백 100주기
        spaceBetween : 50,
        navigation: {
          nextEl: ".myNext2",
          prevEl: ".myPrev2",
        },
        scrollbar: {
            el : ".bar1",
            hide : false
        },
    });
    // swiper3
    var swiper3 = new Swiper(".mySwiper3", {
        // spaceBetween : 100 슬라이드 사이 여백 100주기
        spaceBetween : 50,
        navigation: {
          nextEl: ".myNext3",
          prevEl: ".myPrev3",
        },
        scrollbar: {
            el : ".bar2",
            hide : false
        },
    });
    // width()속성은 이미지(li)의 가로길이 인식하는 메서드
    // innerWidth()속성은 padding을 포함한 가로길이 인식하는 메서드
    // outerWidth()속성은 margin을 포함한 가로길이 인식하는 메서드
    var bannerWidth=$('.banner_img ul li').innerWidth();
    // banner 버튼을 클릭하면 이미지가 좌우로 이동
    $('.banner_btn a').click(function(e){
        // a태그를 클릭했을 때 위로 올라가는거 방지
        e.preventDefault();
        // .banner_btn의 모든 버튼에서 active제거
        $('.banner_btn a').removeClass('active');
        // 클릭한 버튼만 active 추가
        $(this).addClass('active');
        // 클릭한 버튼의 인덱스번호를 bannerNum변수에 저장
        var bannerNum=$(this).index();
        // 인덱스번호에 이미지(li)의 넓이 곱해서 bannerMove변수에 저장
        var bannerMove=bannerNum*bannerWidth;
        // 이미지(ul)가 bannerMove값 만큼 왼쪽이나 오른쪽으로 이동
        $('.banner_img ul').animate({
            left : -bannerMove
        });
    });
    // 윈도우의 가로길이에서 .site_menu의 가로길이 뺌
    var siteWidth=$(window).width()-$('.site_menu').width();
    // .site_map의 가로길이를 sitWidth값으로 설정
    $('.site_map').css('width',siteWidth);
    // top버튼을 클릭하면 body문서의 맨 위로 이동
    $('.top').click(function(){
        $('html,body').animate({
            scrollTop:0
        });
    });
    // .site_map의 가로길이를 siteWidth값으로 설정
    $('.site_map').css('width',siteWidth);
    // .total_menu(카테고리)버튼 클릭이벤트 설정
    $('.search1').click(function(){
        // .site나옴
        $('.site').animate({
            right : 0
        },700, function(){
            // 함수호출
            navAnil();
        });
    });
    // .site_cLose버튼 클릭이벤트 설정
    $('.site_close').click(function(){
        $('.site').animate({
            right : '-100%'
        }, 700, function(){
            // 함수 호출
            navAniEnd();
        });
    });
    // navAniEnd() 함수 선언
    function navAniEnd(){
        $('body').removeClass('active');
        $('.site nav > ul > li').css({
            'opacity' : 0,
            'margin-top' : '50px'
        });
        $('.site .site_nav > ul > li').css({
            'opacity' : 0,
            'margin-top' : '30px'
        });
        $('.site .site_banner  ul  li').css({
            'opacity' : 0,
            'margin-top' : 0
        });
    }
    navAniEnd();
    // navAnil함수 선언
    function navAnil(){
        $('body').addClass('active');
        // .site영역의 nav의 주메뉴 애니메이션
    $('.site nav > ul > li').each(function(){
        var liNum=$(this).index();
        $(this).delay(100*liNum).animate({
            'opacity' : 1,
            'margin-top' : 0
        });
    });
    $('.site .site_nav  ul  li').each(function(){
        var siteliNum=$(this).index();
        $(this).delay(100*siteliNum).animate({
            'opacity' : 1,
            'margin-top' : 0
        });
    });
    $('.site .site_banner  ul  li').each(function(){
        var bannerliNum=$(this).index();
        $(this).delay(100*bannerliNum).animate({
            'opacity' : 1,
            'margin-top' : 0
        });
    });
    }
        $('.site_bg ul li').removeClass('active');
        $('.site_bg ul li:first').addClass('active');
    // .site영역의 .site_meun의 nav주메뉴에 마우스 오버하면 배경과 서브메뉴 나타나기
    $('.site_menu nav > ul > li > a').hover(function(){
        // 만약 클릭한 메뉴(a태그)에 active가 없으면
        if(!($(this).parent('li').hasClass('active'))){
            // 모든 메뉴에서 active제거
            $('.site_menu nav > ul > li').removeClass('active');
            // 클릭한 a태그만 active클래스 추가
            $(this).parent('li').addClass('active');
            var siteNum=$(this).parent('li').index();
            // 배경 바뀜
        $('.site_bg ul li').each(function(){
            if(siteNum==$(this).index()){
               // $('.site_bg ul li').hide();
                $('.site_bg ul li').removeClass('active');
                //$(this).show();
                $(this).addClass('active');
            }
        });
        // 라인 애니메이션
        $('.site_menu nav > ul > li > p').removeClass('active');
        $(this).next().addClass('active');
        $('.site_menu nav .sub').hide();
        $(this).next().next().slideDown();
        } // if문 받기

    });
    // .site_menu nav ul li a에서 마우스아웃했을 때
    $('.site_menu nav > ul > li').mouseleave(function(){
        $(this).removeClass('active');
        $(this).find('p').removeClass('active');
        $(this).find('.sub').hide();
        $('.site_bg ul li').removeClass('active');
        $('.site_bg ul li:first').addClass('active');
    });
    // top버튼이 아래쪽에서 조금 위쪽에 위치되어 있다가 홈페이지를 위로 올리면 (footer높이만큼) 브라우저 오른쪽아래에 고정되도록 하는 코드
    // 윈도우에 스크롤 이벤트 설정
    $(window).scroll(function(){
        // 만약 윈도우 아래쪽에서 footer높이만큼 스크롤되면
        // $(window).scroLLTop()은 body문서의 맨 위쪽 위치값
        // $(window).height() : 브라우저의 높이값
        // $('footer').offset().top : footer의 위쪽 위치값이 브라우저의 높이값과 떨어져 있는 거리
        if($(window).scrollTop()+$(window).innerHeight() >= $ ('footer').offset().top){
            // .top에 active클래스 추가
            $('.top').addClass('active');
        // else : 그렇지 않으면
        }else{
            // .top에 active 클래스 제거
            $('.top').removeClass('active');
        }
    })
});