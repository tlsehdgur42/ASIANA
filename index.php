<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>아시아나 항공</title>
    <!-- 파비콘 -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- 스와이퍼(swiper) css를 cdn으로 연결 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!-- 외부 css -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- 제이쿼리 라이브러리 -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- easing 플러그인 -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- 스와이퍼(swiper) js를 cdn으로 연결 -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- 외부 js -->
    <script src="js/main.js"></script>
</head>
<body>
    <div class="wrap">
        <!-- header -->
        <? include "header.html"; ?>
        <!-- section -->
        <section class="visual">
            <!-- swiper 플러그인 -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide s1"><a href="#"><img src="img/a1.jpg" alt="아시아나 항공 미주노선"></a></div>
                  <div class="swiper-slide s2"><a href="#"><img src="img/a2.png" alt="모바일 APP에서 빠른 예약으로"></a></div>
                  <div class="swiper-slide s3"><a href="#"><img src="img/a3.jpg" alt="아시아나 듀얼마일리지 신규 발급하기"></a></div>
                  <div class="swiper-slide s4"><a href="#"><img src="img/a4.jpg" alt="슬로베니아"></a></div>
                  <div class="swiper-slide s5"><a href="#"><img src="img/a5.jpg" alt="바다로 떠나자~"></a></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
        </section>
        <section class="tab">
            <section class="tab_container">
                <h1>최저가 간편 보기</h1>
                    <p>오늘부터 6개월 내 출발하는 항공편의 최저가와 출발일을 간편하게 보실수 있습니다.</p>
                <div class="tab_in">
                    <div class="tab_btn">
                        <ul>
                            <li><a href="#" class="active"><div>ICN <br><span>서울/인천</span></div><div><img src="img/b-button.png" alt="비행기버튼"></div><div>SPN <br><span>사이판</span></div></a></li>
                            <li><a href="#"><div>ICN <br><span>서울/인천</span></div><div><img src="img/b-button.png" alt="비행기버튼"></div><div>SYD <br><span>시드니</span></div></a></li>
                            <li><a href="#"><div>ICN <br><span>서울/인천</span></div><div><img src="img/b-button.png" alt="비행기버튼"></div><div>HNL <br><span>호놀룰루</span></div></a></li>
                            <li><a href="#"><div>ICN <br><span>서울/인천</span></div><div><img src="img/b-button.png" alt="비행기버튼"></div><div>JFK <br><span>뉴욕</span></div></a></li>
                            <li><a href="#"><div>ICN <br><span>서울/인천</span></div><div><img src="img/b-button.png" alt="비행기버튼"></div><div>LAX <br><span>로스엔젤레스</span></div></a></li>
                        </ul>
                    </div>
                    <div class="tab_img">
                        <ul>
                            <li><a href="#"><img src="img/b1.png" alt="사이판"></a></li>
                            <li><a href="#"><img src="img/b2.png" alt="시드니"></a></li>
                            <li><a href="#"><img src="img/b3.png" alt="호놀룰루"></a></li>
                            <li><a href="#"><img src="img/b4.png" alt="뉴욕/존 F 케네디"></a></li>
                            <li><a href="#"><img src="img/b5.png" alt="로스엔젤레스"></a></li>
                        </ul>
                    </div>
                    <div class="tab_des">
                        <ul>
                            <li><p>이코노미/왕복총액/단위: KRW<br>
                                <span>2022.04 [561,800~]<br>
                                    2022.05 [571,800~]<br>
                                    <i>2022.06 [501,800~]</i><br>
                                    2022.07[641,800~]<br>
                                    2022.08[641,800~]<br>
                                    2022.09[751,800~]<br>
                                    </span>
                                    2022.04.14 AM 02:01 기준
                            </p></li>
                            <li><p>이코노미/왕복총액/단위: KRW<br>
                                <span>2022.04 [3,561,800~]<br>
                                    2022.05 [1,571,800~]<br>
                                    2022.06 [1,701,800~]<br>
                                    2022.07[1,781,800~]<br>
                                    <i>2022.08[1,637,800~]<br>
                                    2022.09[1,637,800~]<br></i>
                                    </span>
                                    2022.04.14 AM 02:01 기준
                            </p></li>
                            <li><p>이코노미/왕복총액/단위: KRW<br>
                                <span>2022.04 [1,461,800~]<br>
                                    2022.05 [1,606,800~]<br>
                                    2022.06 [1,461,800~]<br>
                                    2022.07[1,541,800~]<br>
                                    2022.08[1,541,800~]<br>
                                    <i>2022.09[1,361,800~]<br></i>
                                    </span>
                                    2022.04.14 AM 02:01 기준
                            </p></li>
                            <li><p>이코노미/왕복총액/단위: KRW<br>
                                <span>2022.04 [1,857,800~]<br>
                                    2022.05 [2,062,800~]<br>
                                    2022.06 [2,062,800~]<br>
                                    2022.07[2,182,800~]<br>
                                    2022.08[2,182,800~]<br>
                                    <i>2022.09[1,751,800~]<br></i>
                                    </span>
                                    2022.04.14 AM 02:01 기준
                            </p></li>
                            <li><p>이코노미/왕복총액/단위: KRW<br>
                                <span>2022.04 [1,662,800~]<br>
                                    <i>2022.05 [1,512,800~]</i><br>
                                    2022.06 [1,757,800~]<br>
                                    2022.07[1,832,800~]<br>
                                    2022.08[1,757,800~]<br>
                                    <i>2022.09[1,512,800~]</i><br>
                                    </span>
                                    2022.04.14 AM 02:01 기준
                            </p></li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>
        <section class="collection">
            <h1>EVENT</h1>
            <p>아시아나 항공만의 특별한 혜택을 누려보세요.</p>
            <div class="tab_slide">
                <div class="tab_title">
                    <a href="#" class="new active">New EVENT</a>
                    <a href="#" class="best">Best EVENT</a>
                </div>
                <div class="tab_slide_con">
                    <div class="tab_slide_list t1 active">
                        <!-- 신규 EVENT -->
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide new1"><a href="#"><span>VIEW</span></a></div>
                              <div class="swiper-slide new2"><a href="#"><span>VIEW</span></a></div>
                              <div class="swiper-slide new3"><a href="#"><span>VIEW</span></a></div>
                            </div>
                            <!-- swiper 왼쪽, 오른쪽 버튼 -->
                            <div class="swiper-button-next myNext2"></div>
                            <div class="swiper-button-prev myPrev2"></div>
                            <!-- swiper 스크롤바 -->
                            <div class="swiper-scrollbar bar1"></div>
                          </div>
                    </div>
                    <div class="tab_slide_list t2">
                        <!-- 인기 EVENT -->
                        <div class="swiper mySwiper3">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide best1"><a href="#"><span>VIEW</span></a></div>
                              <div class="swiper-slide best2"><a href="#"><span>VIEW</span></a></div>
                              <div class="swiper-slide best3"><a href="#"><span>VIEW</span></a></div>
                            </div>
                            <!-- swiper 왼쪽, 오른쪽 버튼 -->
                            <div class="swiper-button-next myNext3"></div>
                            <div class="swiper-button-prev myPrev3"></div>
                            <!-- swiper 스크롤바 -->
                            <div class="swiper-scrollbar bar2"></div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner">
            <section class="banner_in">
                <h1>공지사항</h1>
                <div class="banner_box">
                    <div class="banner_title">
                        <p>아시아나 항공의<br>새로운 소식을 알려드립니다.</p>
                    </div>
                    <div class="banner_img">
                        <ul>
                            <li><a href="#"><img src="img/d1.png" alt="d1"></a></li>
                            <li><a href="#"><img src="img/d2.png" alt="d2"></a></li>
                            <li><a href="#"><img src="img/d3.png" alt="d3"></a></li>
                        </ul>
                    </div>
                    <div class="banner_btn">
                        <a href="#" class="active"><span>아시아나클럽 우수회원 승급<br><br> 및 자격 유지 기준  변경 안내</span><br><p>2022.03.23</p></a>
                        <a href="#"><span>하와이 5일간(4/15~4/19) 특별 가격</span><br><p>2022.04.15</p></a>
                        <a href="#"><span>일본 노선 5월~6월 운항 스케줄 안내</span><br><p>2022.04.14</p></a>
                    </div>
                </div>
            </section>
        </section>
        <section class="sns">
            <section class="sns_in">
                <h1>NOW SNS</h1>
                <section class="sns_list">
                    <ul>
                        <li><a href="#"><div class="sns_img"><img src="img/sns1.png" alt="sns1"></div></a></li>
                        <li><a href="#"><div class="sns_img"><img src="img/sns2.png" alt="sns2"></div></a></li>
                        <li><a href="#"><div class="sns_img"><img src="img/sns3.png" alt="sns3"></div></a></li>
                        <li><a href="#"><div class="sns_img"><img src="img/sns4.png" alt="sns4"></div></a></li>
                        <li><a href="#"><div class="sns_img"><img src="img/sns5.png" alt="sns5"></div></a></li>
                        <li><a href="#"><div class="sns_img"><img src="img/sns6.png" alt="sns6"></div></a></li>
                        <li><a href="#"><div class="sns_img"><img src="img/sns7.png" alt="sns7"></div></a></li>
                        <li><a href="#"><div class="sns_img"><img src="img/sns8.png" alt="sns8"></div></a></li>
                    </ul>
                </section>
                <section class="sns_icon">
                    <a href="#"><img src="img/sns-icon.png" alt="icon"></a>
                </section>
            </section>
        </section>
        <section class="map">
            <h1>오시는 길</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.394545522093!2d126.79563571558798!3d37.54576723307444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9d21338f66f3%3A0xcf1f081e16e26a42!2z7JWE7Iuc7JWE64KY7ZWt6rO1KOyjvCk!5e0!3m2!1sko!2skr!4v1650860413942!5m2!1sko!2skr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="map2">
                <!-- <p>현재 고객님과 가까운<br>공항을 안내해 드립니다.<br><input type="text" placeholder="공항 및 지역검색"><img src="img/icon1.png" alt="검색기능"></p> -->
            </div>
        </section>
        <section class="icons">
            <div class="icons_in">
                <ul>
                    <li><a href="#"><img src="img/tell-icon2.png" alt="고객문의"><p>고객문의</p></a></li>
                    <li><a href="#"><img src="img/tell-icon1.png" alt="자주묻는 질문"><p>자주 묻는 질문</p></a></li>
                </ul>
            </div>
        </section>
        <section class="info">
            <div class="custom">
                <div class="custom_center">
                    <h4>고객센터</h4>
                    <p>1599 - 1205</p>
                    <span>(09:30 ~ 18:30, 토요일&공휴일 휴무)</span>
                </div>
                <div class="as">
                    <h4>문의</h4>
                    <p>080 - 735 - 7123</p>
                    <span>(09:30 ~ 18:30, 토요일&공휴일 휴무)</span>
                </div>
            </div>
            <div class="app">
                <p>언제 어디서든 아시아드 항공의<br>AR APP으로 만나보세요!</p>
                <a href="#"><img src="img/google.png" alt="구글앱"></a>
                <a href="#"><img src="img/apple.png" alt="애플앱"></a>
            </div>
        </section>
        <!-- footer -->
        <? include "footer.html"; ?>
    </div>
    <!-- top버튼 -->
    <div class="top">TOP</div>
    <!-- 사이트맵 카테고리 -->
    <? include "site.html"; ?>
</body>
</html>