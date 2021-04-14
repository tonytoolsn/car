<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>JUIRNI</title>
        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet"
        />

        <!-- Vendor CSS Files -->
        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
        <!-- Template Main CSS File -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

        <!-- jQuery v1.9.1 -->
        <script src="{{asset('assets/vendor/calendar/js/jquery-1.9.1.min.js') }}"></script>
        <!-- Moment.js v2.20.0 -->
        <script src="{{asset('assets/vendor/calendar/js/moment.min.js') }}"></script>
        <!-- FullCalendar v3.8.1 -->
        <link href="{{asset('assets/vendor/Calendar/css/fullcalendar.min.css') }}" rel="stylesheet" />
        <script src="{{asset('assets/vendor/calendar/js/fullcalendar.min.js') }}"></script>
        <link href="{{asset('assets/css/style2.css') }}" rel="stylesheet" />
    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
                <h1 class="logo mr-auto"><a href="{{ url('/car') }}">JUIRNI</a></h1>
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="#about">關於我們</a></li>
                        <li><a href="#services">服務特色</a></li>
                        <li><a href="#schedule">出租排程</a></li>
                        <li><a href="#motorcycle">重機出租</a></li>
                        <li><a href="#question">常見問題</a></li>
                        <li><a href="#order">租車表單</a></li>
                        @if (session('name'))
                        <li><a href="{{url('car/member')}}">會員專區</a></li>
                        {{-- <li><a href="{{ url('car/member'}}">會員專區</a></li>  --}}
                        {{--  <li><a href='{{ url("car/member/".session('name'))}}'>會員專區</a></li>  --}}
                        {{--  <li><a href="{{url('car')}}">登出</a></li>  --}}
                        @else
                        <li><a onclick="document.getElementById('id01').style.display='block'" href="#header" >登入</a></li>
                        <li><a onclick="document.getElementById('id02').style.display='block'" href="#header">註冊</a></li>
                        @endif





                        {{--  @if (session('name'))
    <div class="alert alert-success">
        {{ session('name') }}
    {{ session('email') }}
    {{ session('phone') }}
    </div>

@endif  --}}

                    </ul>
                </nav>
                <!-- .nav-menu -->

            </div>
            @if (session('msg'))
            <div id="msgalert" class="alert alert-danger " style="margin-bottom: -15px; text-align: center">
            {{ session('msg') }}
            </div>
            @endif
        </header>

        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">
                <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                    <div class="carousel-inner" role="listbox">
                        <!-- Slide 1 -->
                        <div
                            class="carousel-item active"
                            style="
                                background: url({{ url('storage/img/slide/slide-1.jpg') }});
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center;
                                background-attachment: fixed;
                            "
                        >
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">讓我們一起去騎車吧</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div
                            class="carousel-item"
                            style="
                                background: url({{ url('storage/img/slide/slide-2.jpg') }});
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center;
                                background-attachment: fixed;
                            "
                        >
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">遠離城市喧囂為忙碌生活充電</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div
                            class="carousel-item"
                            style="
                                background: url({{ url('storage/img/slide/slide-3.jpg') }});
                                background-size: cover;
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center;
                                background-attachment: fixed;
                            "
                        >
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2 class="animate__animated animate__fadeInDown">無拘無束享受個人時光</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-xl-12 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                            <div class="content d-flex flex-column justify-content-center">
                                <div class="section-title">
                                    <h2>關於我們</h2>
                                    <p>
                                        勁璿新興重機出租店，由於經營的心態與觀念都符合消費者的期待，秉持提供顧客安全舒適的車輛！全車系均為全新款式！定期保養，期滿汰舊更換新車，提供重機出租，給您最專業、貼心、便利的用車服務。
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 icon-box">
                                        <i class="bx bx-bullseye"></i>
                                        <h4>企業理念</h4>
                                        <p>勁璿品牌，對我們來說，把每一日都當成是創業的第一天，從不忘初衷。</p>
                                    </div>
                                    <div class="col-md-6 icon-box">
                                        <i class="bx bx-check-square"></i>
                                        <h4>車輛最新</h4>
                                        <p>秉持提供顧客安全舒適的車輛！全車系均為全新款式！定期保養，期滿汰舊更換新車！</p>
                                    </div>
                                    <div class="col-md-6 icon-box">
                                        <i class="bx bx-map"></i>
                                        <h4>服務最好</h4>
                                        <p>提供重機出租，給您最專業、貼心、便利的用車服務。</p>
                                    </div>
                                    <div class="col-md-6 icon-box">
                                        <i class="bx bx-cycling"></i>
                                        <h4>價格最優</h4>
                                        <p>讓您使用的車像您自己的車一樣舒服，是台中勁璿租車秉持不變的服務原則。要租車就選勁璿租車！</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End .content-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Section -->

            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients section-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="{{ url('storage/img/clients/client-1.png') }}" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="{{ url('storage/img/clients/client-2.png') }}" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="{{ url('storage/img/clients/client-3.png') }}" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="{{ url('storage/img/clients/client-4.png') }}" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="{{ url('storage/img/clients/client-5.png') }}" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="{{ url('storage/img/clients/client-6.png') }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Clients Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">
                    <div class="section-title">
                        <h2>服務特色</h2>
                        <p>勁瑞租車提供您最專業的租車服務，合法經營、手續簡便、不簽本票、不押證件，以信用卡付費不外加手續費用喔</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="icofont-credit-card"></i></div>
                            <h4 class="title"><a href="">全車系均為全新款式</a></h4>
                            <p class="description">秉持提供顧客安全舒適的車輛！全車系均為全新款式！定期保養，期滿汰舊更換新車！</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
                            <h4 class="title"><a href="">滿足您多元需求</a></h4>
                            <p class="description">
                                提供汽車、貨車、機車、重機出租，多樣化的交通工具選擇，並依客戶需求提供客製化的租車服務，給您最專業、貼心、便利的用車服務。
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="icofont-earth"></i></div>
                            <h4 class="title"><a href="">安全有保障</a></h4>
                            <p class="description">合法經營、手續簡便，車輛均有保險及定期保養及維修，保障顧客用車安全放心無後顧之憂</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="icofont-image"></i></div>
                            <h4 class="title"><a href="">交通方便、租車容易</a></h4>
                            <p class="description">鄰近逢甲夜市及東海商圈、台中高鐵站及台中客運站(朝馬站、中港轉運站)</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="icofont-settings"></i></div>
                            <h4 class="title"><a href="">重機出租</a></h4>
                            <p class="description">提供機車出租服務，機車出租提供多款全新車輛，定期保養維修，歡迎來電諮詢。</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box">
                            <div class="icon"><i class="icofont-tasks-alt"></i></div>
                            <h4 class="title"><a href="">租車安心，用車放心</a></h4>
                            <p class="description">
                                讓您使用的車像您自己的車一樣舒服，全程無微不至的尊榮服務，是台中勁璿租車秉持不變的服務原則。要租車就選泰欣租車！
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Services Section -->

            <!-- =======schedule Section ======= -->
            <section id="schedule" class="faq section-bg">
                <div class="container">
                    <div class="section-title">
                        <h2>出租排程</h2>
                        <p>填寫租車表單時，<span class="text-danger">請登入會員，並查看月曆</span>，確認您所選的重機是否已租借，在進行表單填寫，謝謝!!</p>
                    </div>
                    <div class="row bg-white p-5 rounded">
                        <div class="col-lg-12 mt-4 mt-lg-0">
                            <div id="example"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End schedule Section -->

            <!-- ======= motorcycle Section ======= -->
            <section id="motorcycle" class="portfolio">
                <div class="container">
                    <div class="section-title">
                        <h2>重機出租</h2>
                        <p>
                            提供機車出租服務，機車出租提供多款全新車輛，定期保養維修，讓您享受到可靠的機車出租服務。具有經驗的人員會針對您的喜好，推薦不同的車款，是您市區輕旅行或洽公最好的選擇，歡迎來電諮詢。
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                {{--  foreach li 分類 --}}
                                <li data-filter=".S1">S1</li>
                                <li data-filter=".S2">S2</li>
                                <li data-filter=".S3">S3</li>
                                <li data-filter=".S4">S4</li>
                                {{--end  foreach li 分類 --}}
                            </ul>
                        </div>
                    </div>
                    <div class="row portfolio-container">
                          {{--  foreach 有幾個洞  1.{分類} 2.圖片url  3.商品名 4.座高 5.油箱容量 6.乾燥重量 7.最大馬力 8.最大扭力 9.車長x車寬x車高 10.NT3000  --}}
                      @foreach ($products as $product)
                      <div class="col-lg-4 col-md-6 portfolio-item {{$product->cgy}}">
                        <div class="portfolio-wrap">
                            <img src="{{ url('storage/img/portfolio/'.$product->img.'.jpg') }}" class="img-fluid" alt="" style="height: 230px; width: 100%" />
                            <div class="portfolio-info">
                                <h4>{{$product->pattern}}</h4>
                                <p>座高 :{{$product->seatheight}}</p>
                                <p>油箱容量 : {{$product->tankcapacity}}</p>
                                <p>乾燥重量 : {{$product->weight}}</p>
                                <p>最大馬力 : {{$product->horsepower}}</p>
                                <p>最大扭力 : {{$product->torque}}</p>
                                <p>車長x車寬x車高 : {{$product->cariwh}}</p>
                                <div class="portfolio-links">
                                    <a href="{{ url('storage/img/portfolio/'.$product->img.'.jpg') }}" data-gall="portfolioGallery" class="venobox" title="img"
                                        ><i class="bx bx-plus"></i
                                    >$NT{{$product->prcie}}/日</a>
                                </div>
                            </div>
                        </div>
                    </div>
                      @endforeach
                    </div>
                </div>
            </section>
            <!-- End motorcycle Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="question" class="faq section-bg">
                <div class="container">
                    <div class="section-title">
                        <h2>常見問題</h2>
                    </div>

                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" class="collapse" href="#faq-list-1"
                                    >租車需要預付訂金嗎？ <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                                ></a>
                                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                                    <p>
                                        預定租車，需要預付訂金。<br />
                                        可以利用勁璿官網訂車系統，利用線上刷卡付訂。<br />
                                        也可以銀行匯入訂金後，提供門市人員帳戶後五碼，確認匯款成功後，保留該車輛。<br />
                                        「取消訂單會有費用產生，詳情請參閱租賃規章」
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" href="#faq-list-2" class="collapsed"
                                    >租賃規章！ <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                                ></a>
                                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                                    <p>
                                        第一條、關於訂車：租車預約請先繳付訂金，繳交完成方得以完成預約手續保留車輛。 <br />

                                        第二條、合約審閱期：勁璿租賃於官網公布制式化合約，承租人須於承租七日前自行前往審閱。 <br />

                                        第三條、租車手續：車輛預訂、取車還車，請於本公司營業時間之內辦理。 <br />

                                        第四條、取車手續：請攜帶身分證與有效駕照即可辦理。 <br />

                                        第五條、預約租車，最久只能預訂 45天內完成還車手續的訂單。 <br />

                                        第六條、分級騎乘3-2-1辦法：大型重型機車無論在馬力、扭力上均較國產機車大上甚多，勁璿誠懇呼籲您在未熟悉車輛
                                        性能前，請遵循”分級騎乘3-2-1辦法”承租車輛，並務必小心駕駛，畢竟車友的安全是我們最關心的事。 <br />

                                        （一）擁有「普通重型機車」駕照而還未考取”大型重型機車”駕照的車友來店租車時，本公司只能租予250cc以下之車輛。
                                        <br />

                                        （二）擁有「大型重型機車」駕照的車友來店租車時，本公司規定由600cc級距雙缸車輛以下開始承租，且租賃三次適應
                                        其馬力後，始可升級。(有提出曾騎乘大型重型之經驗可免) 。 <br />

                                        （三）升級後可進階租賃600cc級距車輛，租賃二次適應其馬力後，即可升級。(有提出曾騎乘大型重型之經驗可免) 。
                                        <br />

                                        （四）升級後可進階租賃900cc級數車輛，租賃一次適應其馬力後，即可租賃所有車種任其駕馭。 <br />

                                        （五）以上辦法由客服人員控管實行，若有車友已經是駕馭高手或自身擁有大型重型機車者，請其提出佐證，證實後，
                                        即可以其級數承租車輛。 <br />

                                        第七條、租車期間延長續租辦法：
                                        （一）請聯絡租車出發的營業處，若是沒有其他客人預約並經門市主管同意，就可以為您辦理延長。 <br />

                                        （二）若有其他預約就無法依照您的需求進行延長，請事先了解。 <br />

                                        （三）延長當日還車時間，將加收延後還車費用 200元，延後時間不得超過當日下班時間。 <br />

                                        （四）如果延後還車超過下班時間或是延至隔日還車，將加收該級距訂金費用。 <br />

                                        當顧客預約租時，便會被要求預付訂金。但如果因為個人因素需要取消訂單，以下為標準作業。 <br />

                                        第八條、甲方（消費者）解約時，得要求乙方（勁璿租賃事業聯盟）依下列標準返還已繳之定金： <br />

                                        （一）甲方取消或延期，甲方需支付乙方作業手續費 80元，並同意從訂金中扣除。 <br />

                                        （二）甲方解約通知於預定取車日 4日以上（96小時），得請求乙方扣除作業手續費 80元後，退還已付訂金餘額。 <br />

                                        （三）甲方解約通知於預定取車日 2至 4日內者（24 - 96小時），乙方得請求扣除作業手續費 80元後與已付訂金 50%後，
                                        退還已付訂金餘額。 <br />

                                        （四）甲方解約通知於預定取車日前 1日內或怠於通知者，乙方得不退還甲方已付全部訂金。 <br />

                                        （五）甲方如果有使用租車電子優惠卷，乙方退還甲方訂金以實際支付金額扣除手續費 80元與應扣訂金後返還。 <br />

                                        （六）不可歸責於雙方之處理：因不可抗力因素，致本契約無法履行時，乙方應無息返還甲方已支付之全部費用。 <br />

                                        備註：手續費為「金流公司 」、「刷卡費 2%」、「發票折讓」、「訂金退回」以及「人工作業費」。 <br />

                                        第九條、退款範例： （一）甲方預定 A車 2020/12/31且預約提前取車，繳交訂金 400元。但是因為有事無法成行，於
                                        2020/12/21 取消訂單。 <br />

                                        解約時間距離取車日有 4日以上（96小時），訂金扣除手續費 80元後，匯回 320元，乙方同時發票折讓 320元。 <br />

                                        （二）甲方預定 A車 2020/12/31且預約提前取車，繳交訂金 400元。但是因為有事無法成行，於 2020/12/29 取消訂單。
                                        <br />

                                        解約時間為取車日 2-4日內，訂金需扣抵 50% 200元，扣除手續費 80元後，乙方匯回 120元給甲方，同時發票折讓 120元。
                                        <br />

                                        （三）甲方預定 A車 2020/12/31且預約提前取車，繳交訂金 400元。但是因為有事無法成行，於 2020/12/30 取消訂單。
                                        <br />

                                        因為解約時間為取車日 1日以內，乙方不退還甲方訂金，手續費 80元乙方吸收，發票無需作廢。 <br />

                                        （四）甲方預定 A車 2020/12/31且預約提前取車，應付訂金 400元，但是使用租車優惠卷 100元，實際支付訂金 300元。
                                        <br />

                                        但是因為有事無法成行，於 2020/12/29 取消訂單。 <br />

                                        解約為取車日 2-4日內，訂金需扣抵 50% 200元，扣除手續費 80元後，乙方匯回 70元給甲方，同時發票折讓 70元。 <br />

                                        第十條、天候不佳：如果因為天候不佳因素要退車，須於預定取車日 4日前取消，否則將依照租賃規章第七條辦理。 <br />

                                        第十一條、車輛故障：如果因為車輛機械故障，非人為損壞，勁璿需要提供相同級距的替代車輛給承租人使用。如果承租人
                                        不願意更換車輛，承租方應退回租賃費用。承租人不得以任何形式自述損失，向勁璿求償該筆租金以外費用。 <br />

                                        第十二條、車輛保險：目前各保險公司都不接受租賃車保險，承租車目前僅有提供強制險。勁璿另外安心專案可以加購。
                                        <br />
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" href="#faq-list-3" class="collapsed"
                                    >租車時需要準備哪些東西? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                                ></a>
                                <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                                    <p>需要準備「身分證」、「駕照」、「信用卡」或「現金」。</p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" href="#faq-list-4" class="collapsed"
                                    >租車使用途中可延長租車時間嗎? <i class="bx bx-chevron-down icon-show"></i
                                    ><i class="bx bx-chevron-up icon-close"></i
                                ></a>
                                <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                                    <p>
                                        租車期間延長續租辦法：<br />

                                        （一）請聯絡租車出發的營業處，若是沒有其他客人預約並經門市主管同意，就可以為您辦理延長。<br />

                                        （二）若有其他預約就無法保證能依照您的需求進行延長，請事先了解。<br />

                                        （三）延長當日還車時間，將加收延後還車費用 200元，延後時間不得超過當日下班時間。<br />

                                        （四）如果延後還車超過下班時間或是延至隔日還車，將加收該級距訂金費用。<br />
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" href="#faq-list-5" class="collapsed"
                                    >取消訂單怎麼退費？ <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                                ></a>
                                <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                                    <p>
                                        當顧客預約租時，便會被要求預付訂金。但如果因為個人因素需要取消訂單，以下為標準作業。<br />

                                        第一條、甲方（消費者）解約時，得要求乙方（勁璿租賃事業聯盟）依下列標準返還已繳之定金：<br />

                                        （一）甲方取消或延期，甲方需支付乙方作業手續費 80元，並同意從訂金中扣除。<br />

                                        （二）甲方解約通知於預定取車日 4日以上（96小時），得請求乙方扣除作業手續費 80元後，退還已付訂金餘額。<br />

                                        （三）甲方解約通知於預定取車日 2至 4日內者（24 - 96小時），乙方得請求扣除作業手續費 80元後與已付訂金 50%後，
                                        退還已付訂金餘額。<br />

                                        （四）甲方解約通知於預定取車日前 1日內或怠於通知者，乙方得不退還甲方已付全部訂金。<br />

                                        （五）甲方如果有使用租車電子優惠卷，乙方退還甲方訂金以實際支付金額扣除手續費 80元與應扣訂金後返還。<br />

                                        （六）不可歸責於雙方之處理：因不可抗力因素，致本契約無法履行時，乙方應無息返還甲方已支付之全部費用。<br />

                                        備註：手續費為「金流公司 」、「刷卡費 2%」、「發票折讓」、「訂金退回」以及「人工作業費」。<br />

                                        第二條、退款範例：<br />

                                        （一）甲方預定 A車 2020/12/31且預約提前取車，繳交訂金 400元。但是因為有事無法成行，於 2020/12/21 取消訂單。<br />

                                        解約時間距離取車日有 4日以上（96小時），訂金扣除手續費 80元後，匯回 320元，乙方同時發票折讓 320元。<br />

                                        （二）甲方預定 A車 2020/12/31且預約提前取車，繳交訂金 400元。但是因為有事無法成行，於 2020/12/29 取消訂單。<br />

                                        解約時間為取車日 2-4日內，訂金需扣抵 50% 200元，扣除手續費 80元後，乙方匯回 120元給甲方，同時發票折讓
                                        120元。<br />

                                        （三）甲方預定 A車 2020/12/31且預約提前取車，繳交訂金 400元。但是因為有事無法成行，於 2020/12/30 取消訂單。<br />

                                        因為解約時間為取車日 1日以內，乙方不退還甲方訂金，手續費 80元乙方吸收，發票無需作廢。<br />

                                        （四）甲方預定 A車 2020/12/31且預約提前取車，應付訂金 400元，但是使用租車優惠卷 100元，實際支付訂金 300元。<br />

                                        但是因為有事無法成行，於 2020/12/29 取消訂單。<br />

                                        解約為取車日 2-4日內，訂金需扣抵 50% 200元，扣除手續費 80元後，乙方匯回 70元給甲方，同時發票折讓 70元。<br />

                                        第三條、天候不佳：如果因為天候不佳因素要退車，須於預定取車日 4日前取消，否則將依照租賃規章第一條辦理。<br />
                                    </p>
                                </div>
                            </li>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" href="#faq-list-6" class="collapsed"
                                    >營業時間以外的時間可以租車、還車嗎? <i class="bx bx-chevron-down icon-show"></i
                                    ><i class="bx bx-chevron-up icon-close"></i
                                ></a>
                                <div id="faq-list-6" class="collapse" data-parent=".faq-list">
                                    <p>
                                        目前租車還車都已各營業門市營業時間內辦理，如果有特殊需求需要再訂車前與營業門市確認是否可以配合。<br />
                                        如果無法配合，敬請依照勁璿租賃規章辦理，如果違約將依照租賃規章加計租金核算。<br />
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" href="#faq-list-7" class="collapsed"
                                    >租賃車有保險嗎? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                                ></a>
                                <div id="faq-list-7" class="collapse" data-parent=".faq-list">
                                    <p>
                                        目前國內產險公司都不接受租賃車的失竊險、碰撞險、駕駛人險等業務，所以除了法定第三人強制險以外，皆沒有其他保險。
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i>
                                <a data-toggle="collapse" href="#faq-list-8" class="collapsed"
                                    >道路救援需要收費嗎?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i
                                ></a>
                                <div id="faq-list-8" class="collapse" data-parent=".faq-list">
                                    <p>
                                        第一條：道路救援計價：09:00 – 19:00出車費 1500元，前 10公里免費，超過 10公里每公里 50元。<br />

                                        第二條：公里數計價：門市出發點>拖救點>指定點>原門市 Google 地圖總里程計算1/2公里數。<br />

                                        第三條：道路救援特殊加價：<br />

                                        （一）危險路段：加價 1500元。<br />

                                        （二）夜間救援：加價 1500元。(19:00 之後出發)<br />

                                        （三）農曆年間：加價 3000元。<br />

                                        （四）等待費：每小時 300元。（請託人需要協助醫院等待、警局筆錄等等無法逕自回廠。）<br />

                                        （五）吊掛作業：勁璿道路救援不含「吊掛作業」，如果需要吊掛，將協助委託，除了加計「等待費」之外，吊掛作業費由委託人實支實付給業者。<br />

                                        （六）保管費：道路救援僅只提供「車輛拖救」，車輛暫停於門市超過三日，將收取每日100元的保管費。<br />

                                        第四條：危險路段定義：<br />

                                        （一）由於危險的路段一般都屬於狹小山道或是快速道路，風險大增，所以有時需要二人同行。<br />

                                        （二）全國性：「全國高架道路」、「全國快速道路」。<br />

                                        （三）北區：「北宜公路」、「北橫」、「陽金公路」、「五指山」、「蘇花公路」。<br />

                                        （四）中區：「中橫」、「台 14線」、「天冷路段」、「新中橫」、「阿里山公路」。<br />

                                        （五）南區：「南迴公路」、「南橫」。<br />
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- End Frequently Asked Questions Section -->

            <!-- ======= Contact Section ======= -->
            <section id="order" class="contact">
                <div class="container">
                    <div class="section-title">
                        <h2>租車表單</h2>
                    </div>

                    <div class="row contact-info">
                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="icofont-google-map"></i>
                                <h3>地址</h3>
                                <address>A108 Adam Street, NY 535022, TW</address>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="icofont-phone"></i>
                                <h3>電話號碼</h3>
                                <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="icofont-envelope"></i>
                                <h3>電子郵件</h3>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="form">
                        <form action="{{ url('/car/order') }}" method="post">
                            {{ csrf_field() }}

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="承租人(必填)"  required />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="電話(必填)"  required/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="電子郵件(必填)" required />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="pattern" id="pattern" placeholder="預定車型(必填)" required />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="rent" class="form-control" id="rent" placeholder="總計租金(必填)" required />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="deposit" id="deposit" placeholder="訂金金額(必填)總計租金x30%"   required/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="place" class="form-control" id="place" placeholder="租車地點" value="楊梅幼獅店"  required/>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="fawdays" id="fawdays" placeholder="共計幾天"  required/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="usedate" class="form-control" id="usedate" placeholder="使用日期(例如:2020/01/01)"  required/>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" class="form-control" name="returndate" id="returndate" placeholder="還車日期(例如:2020/01/01)" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="remark" id="remark"   rows="5" placeholder="備註"></textarea>
                            </div>
                            <input type="hidden" name="orderstatus" id="orderstatus"  value="已下訂單">
                            <input type="hidden" name="men_name" value="{{session('name')}}">
                            <input type="hidden" name="mem_phone" value="{{session('phone')}}">
                            <input type="hidden" name="mem_email" value="{{session('email')}}">
                            <div class="text-center"><button type="submit" class="btn btn-danger form-control">送出</button></div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="footer-info">
                                <h3>JUIRNI</h3>
                                <p>
                                    <!-- A108 Adam Street <br />
                                    NY 535022, USA<br /><br /> -->
                                    <strong>地址:</strong> A108 Adam Street, NY 535022, TW<br />
                                    <strong>電話號碼:</strong> +1 5589 55488 55<br />
                                    <strong>電子郵件:</strong> info@example.com<br />
                                </p>
                                <div class="social-links mt-3">
                                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4 footer-links">
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#about">關於我們</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#services">服務特色</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#schedule">出租排程</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-md-4 footer-links">
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#motorcycle">重機出租</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#question">常見問題</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#order">租車表單 </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>JUIRNI</span></strong
                    >. All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

        <div id="id01" class="modal">
            <form class="modal-content animate" action="{{url('car/member/login')}}" method="post">
                {{ csrf_field() }}
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                    <label for="uname" class="pt-2"><b>帳號</b></label>
                    <input type="text" placeholder="請輸入名稱" name="name" required class="form-control bg-transparent" />
                    <label for="psw" class="pt-2"><b>密碼</b></label>
                    <input type="password" placeholder="請輸入密碼" name="password" required class="form-control bg-transparent" />
                    <div class="text-center pt-4"><button type="submit" class="btn btn-danger form-control">送出</button></div>
                </div>
            </form>
        </div>
        <div id="id02" class="modal">
            <form class="modal-content animate" action="{{url('car/member/create')}}" method="post">
                 {{ csrf_field() }}
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                    <label for="uname" class="pt-2"><b>會員帳號</b></label>
                    <input type="text" placeholder="請輸入帳號" name="name" required class="form-control bg-transparent" />
                    <label for="psw" class="pt-2"><b>會員密碼</b></label>
                    <input type="password" placeholder="請輸入密碼" name="password" required class="form-control bg-transparent" />
                    <label for="email" class="pt-2"><b>電子郵件</b></label>
                    <input type="email" placeholder="請輸入電子郵件" name="email" required class="form-control bg-transparent" />
                    <label for="phone" class="pt-2"><b>電話</b></label>
                    <input type="text" placeholder="請輸入電話" name="phone" required class="form-control bg-transparent" />
                    <div class="text-center pt-4"><button type="submit" class="btn btn-danger form-control">送出</button></div>
                </div>
            </form>
        </div>
        <script>

            $('#example').fullCalendar({
                // 參數設定[註1]
                header: {
                    // 頂部排版
                    left: 'prev,next today', // 左邊放置上一頁、下一頁和今天
                    center: 'title', // 中間放置標題
                    right: 'month,basicWeek,basicDay', // 右邊放置月、周、天
                },
                defaultDate: '2020-12-12', // 起始日期
                weekends: true, // 顯示星期六跟星期日
                editable: true, // 啟動拖曳調整日期
                events: [
                    {{--  有3個洞 --}}
                   {{--  {
                        // 事件(包含跨日開始時間、結束時間)
                        title: '2020 DCF 出租中',
                        start: '2020-12-07',
                        end: '2020-12-10',
                    },  --}}
                    @foreach ($calendars as $calendar)
                    {
                        // 事件(包含跨日開始時間、結束時間)
                        title: '{{ $calendar->title}}',
                        start: '{{ $calendar->start}}',
                        end: '{{ $calendar->end}}',
                    },
                    @endforeach

                ],
            });
        </script>
        <script src="{{asset('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{asset('assets/vendor/counterup/counterup.min.js') }}"></script>
        <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{asset('assets/vendor/venobox/venobox.min.js') }}"></script>
        <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{asset('assets/js/main.js') }}"></script>
    </body>
</html>
