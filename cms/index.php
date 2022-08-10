<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>
<?php //echo latest("slider","gallery",3,100);?>
<div class="sejin_wrap">
    <section id="main">
        <div class="swiper">
            
            <div class="swiper-wrapper">
                
                <div class="swiper-slide sbg0"></div>
                <div class="swiper-slide sbg1"></div>
                <div class="swiper-slide sbg2"></div>    
            </div>
           
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
        </div>
    </section>



    <section id="firstbanner" class="d-flex flex-column justify-content-center text-center">
        <div class="para">
            <h2>세럼라이프의 시작</h2>
            <p>피부는 복잡한 존재지만 원하는 것은 단순합니다.<br>
            과잉된 세심함보다 피부가 진정 필요로 하는 '하나'에 집중하는 것.<br>
            그래서 우리는 피부 고민을 위한 가장 이상적인 해답을 '세럼'에서 찾습니다.
            </p>
        </div>
    </section>



    <section id="promise" class="d-flex justify-content-center text-center">
        <div class="container">
            <div class="text_img"><img src="/sejin/promisetext.png" alt="promise" width=600px;></div>
            <div class="depth_01">
                <ul class='d-flex text-center'>
                    <li class='col-3'>
                        <img src="/sejin/promise_1.png" alt="clean">
                        <h5>CLAEN</h5>
                        <h4>깨끗한 효능</h4>
                        <p>자연 그대로의 희귀/희소 원료를<br>
                        유해성분과 동물성 원료 없이 전달하는<br>
                        클린 앤 비건 성분</p>
                    </li>
                    <li class='col-3'>
                        <img src="/sejin/promise_2.png" alt="CONCENTRATED">
                        <h5>CONCENTRATED</h5>
                        <h4>높은 효능</h4>
                        <p>최상의 효능이 나오는 함량으로<br>
                        각 피부 고민별 해결에 집중한<br>
                        고농축 & 고함량 포뮬라</p>
                    </li>
                    <li class='col-3'>
                        <img src="/sejin/promise_3.png" alt="CLINICALLY">
                        <h5>CLINICALLY-PROVEN</h5>
                        <h4>검증된 효능</h4>
                        <p>모든 세럼의 기대 효과를<br>
                        과학적으로 하나하나 증명해<br> 
                        믿고 사용 하는 임상 케어</p>
                    </li>
                    <li class='col-3'>
                        <img src="/sejin/promise_4.png" alt="COORDINATED">
                        <h5>COORDINATED</h5>
                        <h4>조화로운 효능</h4>
                        <p>사용자의 피부와 삶<br>
                        모두의 조화와 균형을 생각하는<br>
                        ‘싱글 케어‘기반 뷰티 솔루션</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>



    <section id="bestproducts" class="flex-column text-center">
        <div class="container">
            <div class="text_img"><img src="/sejin/best_text.png" alt="best products" width=900px;></div>
            <div class="depth_01">
                    <ul class="text-center">
                        
                        <li class='col-9 d-flex'>
                            <img src="/sejin/best_1.png" alt="best1">
                            <div class="best_01">
                                <p>STRENGTHENING & MOISTURIZING</p>
                                <h2>딥 안타틱 드롭</h2>
                                <h5>DEEP ANTARCTIC DROP</h5>

                                <h5>빙하 속 강인한 생명력이 전하는 탄력에너지<br>
                                    남극 미생물 – 안타티신이 피부 리프팅을 개선하고<br>
                                    견고한 보습 효과를 지속시키는 '탄력 세럼’.
                                </h5>
                                <p>NEEDS<p>

                                <p>노화로 인한 탄력저하를 관리하고 싶은 피부<br>
                                푸석하고 건조한 피부에 깊은 보습이 필요한 피부</p>

                                <a href="https://serumkind.co.kr/product/detail.html?product_no=24&cate_no=29&display_group=1#none" target="_blank">
                                    <button>BUY</button>
                                </a>
                            </div>
                            
                        </li>
                        <li class='col-9 d-flex'>
                            
                            <div class="best_02">
                                <p>CALMING & NOURISHING</p>
                                <h2>퍼플 캐비지 드롭</h2>
                                <h5>PURPLE CABBAGE DROP</h5>

                                <h5>적양배추로 시작하는 보랏빛 진정 케어<br>
                                    자연의 깨끗함을 담은 제주 유기농 적양배추 추출물과<br>
                                    베타글루칸으로 지친 피부를 충전하는 ‘진정 세럼'.<br>
                                </h5>
                                <p>NEEDS</p>

                                <p>노화로 인한 탄력저하를 관리하고 싶은 피부<br>
                                푸석하고 건조한 피부에 깊은 보습이 필요한 피부</p>

                                <a href="https://serumkind.co.kr/product/detail.html?product_no=17&cate_no=29&display_group=1" target="_blank">
                                    <button>BUY</button>
                                </a>
                            </div>
                            <img src="/sejin/best_2.png" alt="best2">
                            
                        </li>
                        <li class='col-9 d-flex'>
                            <img src="/sejin/best_3.png" alt="best3">
                            <div class="best_03">
                                <p>HYDRATING & SOOTHING</p>
                                <h2>아이슬란드 모스 드롭</h2>
                                <h5>ICELAND MOSS DROP</h5>

                                <h5>메마른 피부에 수분을 가득 채워주는 워터풀 그린의<br>
                                    강인한 생명력으로 널리 알려진 아이슬란드 이끼 추출물이<br>
                                    끈적임 없이 산뜻하게 피부 속 수분을 가득 채워주는 ‘수분 세럼’.
                                </h5>
                                <p>NEEDS</p>

                                <p>노화로 인한 탄력저하를 관리하고 싶은 피부<br>
                                푸석하고 건조한 피부에 깊은 보습이 필요한 피부</p>

                                <a href="https://serumkind.co.kr/product/detail.html?product_no=28&cate_no=29&display_group=1" target="_blank">
                                    <button>BUY</button>
                                </a>
                            </div>
                            
                        </li>
 
                    </ul>
                </div>
        </div>
    </section>
   


    <section id="all">
        <!-- <div class="container"> -->
                <div class="depth_01">
                        <ul class='d-flex text-center'>
                        <li class="col-3">
                            <img src="/sejin/serum01.png" alt="serum1">
                        </li>
                        <li class="col-3">
                            <img src="/sejin/serum02.png" alt="serum2">
                        </li>
                        <li class="col-3">
                            <img src="/sejin/serum03.png" alt="serum3">
                        </li>
                        <li class="col-3">
                            <img src="/sejin/serum04.png" alt="serum4">
                        </li>
                        <li class="col-3">
                            <img src="/sejin/serum05.png" alt="serum5">
                        </li>
                        </ul>
                </div>
        </div>
    </section>


    
    <section id="secondbanner">
    </section>


    <section id="productsArea" class="d-flex flex-column justify-content-center">
        <div class="container">
            <div class="depth_01">
                    <ul class='d-flex text-center'>
                        <div class="btns flex-column justfy-content-center">
                            <h4>더 많은 제품<br>
                            구매하기</h4>
                            <p>WE BELIEVE IN DAILY BEAUTY<br>
                            AND<br>
                            HEALTHY LIFE FORM A KIND MIND.</p>
                            <a href="https://serumkind.co.kr/product/list.html?cate_no=24" target="_blank">
                                <button>VIEW MORE</button>
                            </a>
                        </div>
                        <li class='col-3'>
                            <a href="https://serumkind.co.kr/product/detail.html?product_no=42&cate_no=24&display_group=1" target="_blank">
                                <img src="/sejin/all_03.png" alt="BODY SERUM">
                            </a>
                            <h4>아킬레아 리질리언스 바디 세럼</h4>
                            <p>ACHILLEA RESILIENCE BODY SERUM
                                
                            </p>
                            <p>불가리아 서양톱풀추출물</p>
                            <h4>36,000</h4>
                        </li>
                        <li class='col-3'>
                            <a href="https://serumkind.co.kr/product/detail.html?product_no=20&cate_no=24&display_group=1" target="_blank">
                            <img src="/sejin/all_01.png" alt="HAND SERUM">
                            </a>
                            <h4>블랙 블라썸 핸드세럼</h4>
                            <p>BLACK BLOSSOM HAND SERUM

                            </p>
                            <p>피치 | 플로럴 | 우디 머스크</p>
                            <h4>22,000</h4>
                        </li>
                        <li class='col-3'>
                            <a href="https://serumkind.co.kr/product/detail.html?product_no=22&cate_no=24&display_group=1" target="_blank">
                            <img src="/sejin/all_02.png" alt="LIP SERUM">
                            </a>
                            <h4>유스 앤 글로우 립 세럼</h4>
                            <p>YOUTH & GLOW LIP SERUM

                            </p>
                            <p>붉은 자근 오일 | 씨벅톤 오일</p>
                            <h4>18,000</h4>
                        </li>
                    
                    </ul>
            </div>
        </div>
    </section>



    <section id="event">
        <div class="imgbox d-flex justfy-content-between">
            <img class="left" src="/sejin/event_1.png" alt="event">
            <img class="right" src="/sejin/summerweek.png" alt="summerweek" width="350px" height="150px">
        </div>
        <div class="container d-flex flex-column justify-content-center">
            <h5>클린 케어 키트</h5>
            <h4>CLEAN CARE KIT</h4>
            <p>하루를 가득 채우는 완벽한 클린 케어</p>

            <p>피부 고민과 일상에 필요한 루틴을 동시에 해결할 수 있는<br>
            세럼카인드만의 특별한 클린 케어 키트로<br>
            이번 여름에 나에게 필요한 세럼을 특별한 이벤트 할인으로 만나보세요.</p>
        </div>
        <div class="buying d-flex">
            <ul>
                <li><img src="/sejin/kits_1.png" alt="kits1"></li>
                <li><img src="/sejin/kits_2.png" alt="kits2"></li>
            </ul>
        </div>
	


    </section>



    <section id="form" class="bg-light py-2 py-md-4 py-lg-5">

    <div class="container px-lg-5 flex-column justify-content-center">
      <h3 class="text-center mb-0 text-primary">
        세럼카인드 스타터 키트 신청하기
      </h3>
      <p class="d-flex justify-content-center align-items-center">
      회원 가입 시 나의 피부유형에 맞게 케어할 수 있는 키트를 무료로 드립니다. *배송비별도 </p>

      <form action="data를 전송할 페이지 경로" id="member" name="member">
        
        <div class="formtable col-md-6 m-auto border-top border-white">
          <ul>
            <li class="py-1 py-lg-3 d-md-flex">
              <strong class="col-md-3 pl-0 req">이    름</strong>
              <div class="col pr-0"><input type="text" class="w-100 border" placeholder="성함을 입력해주세요.">
              </div>
            </li>

            <li class="py-1 py-lg-3 d-md-flex">
              <strong class="col-md-3 pl-0 req">생년월일</strong>
              <div class="col pr-0"><input type="text" class="w-100 border" placeholder="생년월일을 입력해주세요.(예 : 2022-05-03)">
              </div>
            </li>

            <li class="py-1 py-lg-3 d-md-flex">
              <strong class="col-md-3 pl-0 req">연락처</strong>
              <div class="col pr-0"><input type="text" class="w-100 border" placeholder="전화번호를 입력해주세요.">
              </div>
            </li>

            <li class="py-1 py-lg-3 d-md-flex">
              <strong class="col-md-3 pl-0 req">주   소</strong>
              <div class="col pr-0"><input type="text" class="w-100 border" placeholder="주소를 입력해주세요.">
              </div>
            </li>

            <li class="py-1 py-lg-3 d-md-flex">
              <strong class="col-md-3 pl-0 req">이메일</strong>
              <div class="col pr-0"><input type="text"class="w-100 border" placeholder="메일주소를 입력해주세요.">
              </div>
            </li>
          </ul>

          <div class="agree-wrap d-flex text-center border-top border-white justify-content-center">
				<input type="checkbox" id="termAgree" name="agree" value="agree" class="require">
				<label class="check" for="termAgree"></label>
                <p> 개인정보 수집 및 활용 동의 </p> 
                <a href="#none" onclick="layer_popup()">내용보기</a>
			</div>
            <div class="d-flex justify-content-center text-center">
			<button type="button" id="purchaseApply" class="purchase_btn">신청하기</button>
		    </div>
        </div>
        <!-- <img src="/sejin/form_2.png" alt="formimage"> -->

      </form>
    </div>

    
    </section>



    <section id="insta" class="d-flex justify-content-center text-center">
        <div class="container">
            <div class="text_img"><img src="/sejin/instagram.png" alt="instagram" width=250px;></div>
            <p>SERUMKIND 공식 인스타그램</p>
            <a href="https://www.instagram.com/serumkind/" target="_blank">@serumkind</a>

            <img src="/sejin/insta.png" alt="insta">
    </section>
    


    <section id="map" class="d-flex justify-content-center text-center">
        <div class="container">
            <h4>(주) 컴플리톤코리아 오시는 길</h4>
            <img src="/sejin/map.png" alt="googlemap" width= 550px></img>

            <div class="info d-flex">
            <a href="https://goo.gl/maps/ax9wfPjnoUZwpAH78" target="_blank"><button>구글 지도 보기</button></a>
                <h5>Address</h5>
                <ul>
                    <li>서울특별시 서초구 효령로 234 (남부터미널역 5번 출구에서 도보 10분)</li>
                    <li>서울특별시 서초구 서초동 1485-6, 우편번호06709</li>
                </ul>
            </div>

    </section>




</div>


<?php
include_once(G5_PATH.'/tail.php');