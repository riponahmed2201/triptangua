@extends('master')

@section('home-content')
    <!-- Slider -->
    @include('frontend.layouts.slider')

    <!-- About -->
    <section class="about cover section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="owl-theme owl-carousel">
                        <div class="item">
                            <div class="img"><img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid"
                                    alt=""></div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="{{ asset('frontend/assets/img/about2.jpg') }}" class="img-fluid"
                                    alt=""></div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="{{ asset('frontend/assets/img/about3.jpg') }}" class="img-fluid"
                                    alt=""></div>
                        </div>
                        <div class="item">
                            <div class="img"><img src="{{ asset('frontend/assets/img/about4.jpg') }}" class="img-fluid"
                                    alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle">↗ Since 1880</div>
                    <div class="section-title">Harbour Yachting</div>
                    <p>Lorem ipsum elementum sesue in the aucanion vestibulum aliquam usto inthe sapien rutrum volutate
                        inthemiss quis the pellentesque donec velit arcution mosuere blane nestibulum suam the monte
                        nellen.</p>
                    <ul class="list-unstyled about-list mb-30">
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Highly trained captains and crew</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>Experienced service staff</p>
                            </div>
                        </li>
                        <li>
                            <div class="about-list-icon"> <span class="ti-check"></span> </div>
                            <div class="about-list-text">
                                <p>5-Star rated customer services</p>
                            </div>
                        </li>
                    </ul>
                    <div class="line-dec"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-call">
                                <div class="call-icon"><i class="fa-light fa-phone fa-beat"></i></div>
                                <div class="media-body">
                                    <p>Call To Ask Any Queary</p>
                                    <p class="call-number"><a href="tel:0800333444">+8801886795753</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iconso"><span class="flaticon-rudder"></span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Yachts -->
    <section class="yachts1 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 text-center">
                    <div class="section-subtitle">↗ Premium Yachts</div>
                    <div class="section-title whte">Yachts & Boats</div>
                </div>
            </div>
            <div class="yachts1-carousel owl-theme owl-carousel">
                <div class="item">
                    <div class="img"> <img src="{{ asset('frontend/assets/img/yachts/01.jpg') }}" alt=""> </div>
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="title"><a href="#">60ft Yacht - Gamator</a></div>
                                <div class="details"> <span><i class="flaticon-art-and-design"></i> Length: 18m
                                        (60ft)</span> <span><i class="flaticon-user"></i> Guests: 6</span> <span><i
                                            class="flaticon-rudder"></i> Build: 2016</span> </div>
                            </div>
                            <div class="col-md-2 justify-content-end">
                                <div class="arrow"> <a href="yachts-details.html"><span class="ti-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="{{ asset('frontend/assets/img/yachts/02.jpg') }}" alt=""> </div>
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="title"><a href="#">70ft Yacht - Dandelion</a></div>
                                <div class="details"> <span><i class="flaticon-art-and-design"></i> Length: 21m
                                        (70ft)</span> <span><i class="flaticon-user"></i> Guests: 8</span> <span><i
                                            class="flaticon-rudder"></i> Build: 2013</span> </div>
                            </div>
                            <div class="col-md-2 justify-content-end">
                                <div class="arrow"> <a href="yachts-details.html"><span class="ti-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="{{ asset('frontend/assets/img/yachts/03.jpg') }}" alt=""> </div>
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="title"><a href="#">90ft Yacht - Norcon</a></div>
                                <div class="details"> <span><i class="flaticon-art-and-design"></i> Length: 28m
                                        (90ft)</span> <span><i class="flaticon-user"></i> Guests: 10</span> <span><i
                                            class="flaticon-rudder"></i> Build: 2012</span> </div>
                            </div>
                            <div class="col-md-2 justify-content-end">
                                <div class="arrow"> <a href="yachts-details.html"><span
                                            class="ti-arrow-right"></span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="{{ asset('frontend/assets/img/yachts/04.jpg') }}" alt="">
                    </div>
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="title"><a href="#">100ft Yacht - Patara</a></div>
                                <div class="details"> <span><i class="flaticon-art-and-design"></i> Length: 31m
                                        (100ft)</span> <span><i class="flaticon-user"></i> Guests: 12</span> <span><i
                                            class="flaticon-rudder"></i> Build: 2017</span> </div>
                            </div>
                            <div class="col-md-2 justify-content-end">
                                <div class="arrow"> <a href="yachts-details.html"><span
                                            class="ti-arrow-right"></span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="{{ asset('frontend/assets/img/yachts/05.jpg') }}" alt="">
                    </div>
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="title"><a href="#">105ft Yacht - Vivanta</a></div>
                                <div class="details"> <span><i class="flaticon-art-and-design"></i> Length: 32m
                                        (105ft)</span> <span><i class="flaticon-user"></i> Guests: 6</span> <span><i
                                            class="flaticon-rudder"></i> Build: 2018</span> </div>
                            </div>
                            <div class="col-md-2 justify-content-end">
                                <div class="arrow"> <a href="yachts-details.html"><span
                                            class="ti-arrow-right"></span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="img"> <img src="{{ asset('frontend/assets/img/yachts/06.jpg') }}" alt="">
                    </div>
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="title"><a href="#">120ft Yacht - Dorothea</a></div>
                                <div class="details"> <span><i class="flaticon-art-and-design"></i> Length: 37m
                                        (120ft)</span> <span><i class="flaticon-user"></i> Guests: 10</span> <span><i
                                            class="flaticon-rudder"></i> Build: 2009</span> </div>
                            </div>
                            <div class="col-md-2 justify-content-end">
                                <div class="arrow"> <a href="yachts-details.html"><span
                                            class="ti-arrow-right"></span></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Watersports -->
    <section class="watersports section-padding bg-lightblue" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 text-center">
                    <div class="section-subtitle">↗ Our Activities</div>
                    <div class="section-title">Water Sports</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-theme owl-carousel">
                        <div class="watersports">
                            <figure><img src="{{ asset('frontend/assets/img/watersports/banana-boat.jpg') }}"
                                    alt="" class="img-fluid">
                            </figure>
                            <div class="caption padding-left">
                                <h4><a href="watersports-details.html">Banana Boats</a></h4>
                                <p>Hit the waves of gulf on a banana boat. Nesudea senocen misuscipit non sagie in miss
                                    rana duru the fermen.</p>
                                <div class="ullist">
                                    <ul>
                                        <li>Lorem amet ipsum.</li>
                                        <li>Molestie elit vel cursus.</li>
                                    </ul>
                                </div>
                                <div class="line-dec"></div>
                                <div class="book">
                                    <div><a href="watersports-details.html" class="button-1">Know More</a></div>
                                    <div><span>From</span>
                                        <div class="price">$400 <span>/ Hour</span></div>
                                    </div>
                                </div>
                                <div class="iconso"><span class="flaticon-rudder"></span></div>
                            </div>
                        </div>
                        <div class="watersports left">
                            <figure><img src="{{ asset('frontend/assets/img/watersports/speed-jet-boat.jpg') }}"
                                    alt="" class="img-fluid">
                            </figure>
                            <div class="caption padding-left">
                                <h4><a href="watersports-details.html">Speed Jet Boat</a></h4>
                                <p>Get insane with this thrilling speed jet boat ride. Nesudea seneoice misuscipit non
                                    sagie the fermen artine.</p>
                                <div class="ullist">
                                    <ul>
                                        <li>Lorem amet ipsum.</li>
                                        <li>Molestie elit vel cursus.</li>
                                    </ul>
                                </div>
                                <div class="line-dec"></div>
                                <div class="book">
                                    <div><a href="watersports-details.html" class="button-1">Know More</a></div>
                                    <div><span>From</span>
                                        <div class="price">$500 <span>/ Hour</span></div>
                                    </div>
                                </div>
                                <div class="iconso"><span class="flaticon-rudder"></span></div>
                            </div>
                        </div>
                        <div class="watersports">
                            <figure><img src="{{ asset('frontend/assets/img/watersports/donut-boat.jpg') }}"
                                    alt="" class="img-fluid">
                            </figure>
                            <div class="caption padding-left">
                                <h4><a href="watersports-details.html">Donut Boat Ride</a></h4>
                                <p>Chase the speed while having fun on donut boats. Nesudea seneoice misuscipit non
                                    sagie the fermen artine.</p>
                                <div class="ullist">
                                    <ul>
                                        <li>Lorem amet ipsum.</li>
                                        <li>Molestie elit vel cursus.</li>
                                    </ul>
                                </div>
                                <div class="line-dec"></div>
                                <div class="book">
                                    <div><a href="watersports-details.html" class="button-1">Know More</a></div>
                                    <div><span>From</span>
                                        <div class="price">$400 <span>/ Hour</span></div>
                                    </div>
                                </div>
                                <div class="iconso"><span class="flaticon-rudder"></span></div>
                            </div>
                        </div>
                        <div class="watersports left">
                            <figure><img src="{{ asset('frontend/assets/img/watersports/para-sailing.jpg') }}') }}"
                                    alt="" class="img-fluid">
                            </figure>
                            <div class="caption padding-left">
                                <h4><a href="watersports-details.html">Parasailing</a></h4>
                                <p>Explore the adrenaline activities. Go parasailing! Nesudea seneoice misuscipit non
                                    sagie the fermen artine.</p>
                                <div class="ullist">
                                    <ul>
                                        <li>Lorem amet ipsum.</li>
                                        <li>Molestie elit vel cursus.</li>
                                    </ul>
                                </div>
                                <div class="line-dec"></div>
                                <div class="book">
                                    <div><a href="watersports-details.html" class="button-1">Know More</a></div>
                                    <div><span>From</span>
                                        <div class="price">$350 <span>/ Hour</span></div>
                                    </div>
                                </div>
                                <div class="iconso"><span class="flaticon-rudder"></span></div>
                            </div>
                        </div>
                        <div class="watersports">
                            <figure><img src="{{ asset('frontend/assets/img/watersports/flyboard.jpg') }}" alt=""
                                    class="img-fluid">
                            </figure>
                            <div class="caption padding-left">
                                <h4><a href="watersports-details.html">Flyboard</a></h4>
                                <p>Soar high on waters like a superman. Nesudea seneoice misuscipit non sagie the fermen
                                    artine.</p>
                                <div class="ullist">
                                    <ul>
                                        <li>Lorem amet ipsum.</li>
                                        <li>Molestie elit vel cursus.</li>
                                    </ul>
                                </div>
                                <div class="line-dec"></div>
                                <div class="book">
                                    <div><a href="watersports-details.html" class="button-1">Know More</a></div>
                                    <div><span>From</span>
                                        <div class="price">$250 <span>/ Hour</span></div>
                                    </div>
                                </div>
                                <div class="iconso"><span class="flaticon-rudder"></span></div>
                            </div>
                        </div>
                        <div class="watersports left">
                            <figure><img src="{{ asset('frontend/assets/img/watersports/jetski.jpg') }}" alt=""
                                    class="img-fluid"></figure>
                            <div class="caption padding-left">
                                <h4><a href="watersports-details.html">Jet Ski</a></h4>
                                <p>Get your heart racing with this recreational water sports. Lorem amen the dolor sit
                                    amet in the elit.</p>
                                <div class="ullist">
                                    <ul>
                                        <li>Lorem amet ipsum.</li>
                                        <li>Molestie elit vel cursus.</li>
                                    </ul>
                                </div>
                                <div class="line-dec"></div>
                                <div class="book">
                                    <div><a href="watersports-details.html" class="button-1">Know More</a></div>
                                    <div><span>From</span>
                                        <div class="price">$300 <span>/ Hour</span></div>
                                    </div>
                                </div>
                                <div class="iconso"><span class="flaticon-rudder"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services 1 -->
    <section class="services1 section-padding">
        <div class="container">
            <div class="row mb-30">
                <div class="col-md-12 text-center">
                    <div class="section-subtitle whte">↗ Explore</div>
                    <div class="section-title whte">Choose Type Of Yacht</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-theme owl-carousel">
                        <div class="item bg-img" data-background="{{ asset('frontend/assets/img/yachts/16.jpg') }}">
                            <div class="content">
                                <div class="icon"> <i class="flaticon-boat"></i> </div>
                                <h5>Sailing Yachts</h5>
                                <p>Nulla tincidunt ante the sit amet intona icition ulamcorpen risustion the sapien
                                    vivera edio inthe fermen.</p>
                                <a href="yachts1.html" class="icon-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item bg-img" data-background="{{ asset('frontend/assets/img/yachts/01.jpg') }}">
                            <div class="content">
                                <div class="icon"> <i class="flaticon-boat-3"></i> </div>
                                <h5>Motor Boats</h5>
                                <p>Nulla tincidunt ante the sit amet intona icition ulamcorpen risustion the sapien
                                    vivera edio inthe fermen.</p>
                                <a href="yachts2.html" class="icon-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="item bg-img"
                            data-background="{{ asset('frontend/assets/img/gallery/catamarans01.jpg') }}">
                            <div class="content">
                                <div class="icon"> <i class="flaticon-catamaran"></i> </div>
                                <h5>Catamarans</h5>
                                <p>Nulla tincidunt ante the sit amet intona icition ulamcorpen risustion the sapien
                                    vivera edio inthe fermen.</p>
                                <a href="yachts3.html" class="icon-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Destinations -->
    <section class="destinations section-padding bg-lightblue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 text-center">
                    <div class="section-subtitle">↗ Have a look at our</div>
                    <div class="section-title">Popular Destinations</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/rome1.jpg') }}" alt="">
                            </div> <span class="category"><a href="#0">$1.500</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Rome</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 3 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/venice1.jpg') }}" alt="">
                            </div> <span class="category"><a href="#">$1.300</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Venice</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 8+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/milano.jpg') }}" alt="">
                            </div> <span class="category"><a href="#0">$1.500</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Milan</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 6 Days</li>
                                            <li><i class="ti-user"></i> 4+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/perugia1.jpg') }}" alt="">
                            </div> <span class="category"><a href="#0">$1.750</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Perugia</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 5+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/parma1.jpg') }}" alt="">
                            </div> <span class="category"><a href="#0">$1.200</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Parma</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 8+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/aosta1.jpg') }}" alt="">
                            </div> <span class="category"><a href="#0">$3.000</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Aosta</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 9 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> Italy</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/france-paris1.jpg') }}"
                                    alt=""></div> <span class="category"><a href="#0">$1.250</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Paris</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 12+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/france-lyon1.jpg') }}" alt="">
                            </div> <span class="category"><a href="#0">$1.500</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Lyon</a> </h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 4 Days</li>
                                            <li><i class="ti-user"></i> 6+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/france-cannes1.jpg') }}"
                                    alt=""></div> <span class="category"><a href="#0">$1.750</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Cannes</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 7 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/france-normandiya1.jpg') }}"
                                    alt=""></div> <span class="category"><a href="#0">$2.500</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Normandiya</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 12 Days</li>
                                            <li><i class="ti-user"></i> 10+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/france-bordeaux1.jpg') }}"
                                    alt=""></div> <span class="category"><a href="#">$1.500</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Bordeaux</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 6 Days</li>
                                            <li><i class="ti-user"></i> 5+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="position-re o-hidden"><img
                                    src="{{ asset('frontend/assets/img/destination/france-marsielle1.jpg') }}"
                                    alt=""></div> <span class="category"><a href="#0">$1.750</a></span>
                            <div class="con">
                                <h5><a href="tour-details.html">Marseille</a></h5>
                                <div class="line"></div>
                                <div class="row facilities">
                                    <div class="col col-md-12">
                                        <ul>
                                            <li><i class="ti-time"></i> 5 Days</li>
                                            <li><i class="ti-user"></i> 7+</li>
                                            <li><i class="ti-location-pin"></i> France</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="section-padding bg-navy">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-30">
                    <div class="section-subtitle">↗ What Our Customers</div>
                    <div class="section-title whte"><span>Say</span> About Us</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials left">
                        <figure> <img src="{{ asset('frontend/assets/img/events/05.jpg') }}" alt=""
                                class="img-fluid rounded-1"> </figure>
                        <div class="caption testimonials">
                            <div class="owl-carousel owl-theme">
                                <div class="item-box">
                                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                                    <div class="rating"><i class="star active"></i><i class="star active"></i><i
                                            class="star active"></i><i class="star active"></i><i
                                            class="star active"></i></div>
                                    <h5>Highly recommended!</h5>
                                    <p>Fantastic service from Harbour, very easy to deal with, very smooth transaction
                                        and very happy with the boat. Thank you.</p>
                                    <div class="line-dec"></div>
                                    <div class="info">
                                        <div class="author-img"> <img
                                                src="{{ asset('frontend/assets/img/team/c1.png') }}" alt="">
                                        </div>
                                        <div class="cont">
                                            <h6>Martin Brown</h6> <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-box">
                                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                                    <div class="rating"><i class="star active"></i><i class="star active"></i><i
                                            class="star active"></i><i class="star active"></i><i
                                            class="star active"></i></div>
                                    <h5>Highly recommend Harbour!</h5>
                                    <p>Not a lot to say apart from a superb service from start to finish. Would highly
                                        recommend the team in Harbour. Thank you.</p>
                                    <div class="line-dec"></div>
                                    <div class="info">
                                        <div class="author-img"> <img
                                                src="{{ asset('frontend/assets/img/team/c2.png') }}" alt="">
                                        </div>
                                        <div class="cont">
                                            <h6>Olivia White</h6> <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-box">
                                    <span class="quote"><i class="fa fa-quote-left"></i></span>
                                    <div class="rating"><i class="star active"></i><i class="star active"></i><i
                                            class="star active"></i><i class="star active"></i><i
                                            class="star active"></i></div>
                                    <h5>Excellent and friendly!</h5>
                                    <p>Excellent, friendly and professional service through the process of buying our
                                        new boat. Thanks you.</p>
                                    <div class="line-dec"></div>
                                    <div class="info">
                                        <div class="author-img"> <img
                                                src="{{ asset('frontend/assets/img/team/c3.png') }}" alt="">
                                        </div>
                                        <div class="cont">
                                            <h6>Daniel Woodman</h6> <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog 2 -->
    <section class="blog2 section-padding bg-lightblue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-30 text-center">
                    <div class="section-subtitle">↗ News & Blog</div>
                    <div class="section-title">Articles About Yacht</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item mb-15">
                            <div class="img">
                                <a href="post.html"><img src="{{ asset('frontend/assets/img/news/1.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="wrapper">
                                <div class="category"> <a href="#"><span>↗</span> Yachts</a> </div>
                                <div class="title"> <a href="post.html">Off-Season Yacht Charter Destinations</a>
                                </div>
                                <div class="con">
                                    <div class="avatar"><img src="{{ asset('frontend/assets/img/team/c1.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="info"> <a href="#" class="date" tabindex="0">27 Dec,
                                            2024</a>
                                        <p class="author">by Micheal Brown</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-15">
                            <div class="img">
                                <a href="post.html"><img src="{{ asset('frontend/assets/img/news/2.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="wrapper">
                                <div class="category"> <a href="#"><span>↗</span> Yachts</a> </div>
                                <div class="title"> <a href="post.html">Summer Yacht Rental Destinations</a> </div>
                                <div class="con">
                                    <div class="avatar"><img src="{{ asset('frontend/assets/img/team/c2.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="info"> <a href="#" class="date" tabindex="0">25 Dec,
                                            2024</a>
                                        <p class="author">by Betty White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-15">
                            <div class="img">
                                <a href="post.html"><img src="{{ asset('frontend/assets/img/news/3.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="wrapper">
                                <div class="category"> <a href="#"><span>↗</span> Yachts</a> </div>
                                <div class="title"> <a href="post.html">Tips For Safe And Comfortable Cruising</a>
                                </div>
                                <div class="con">
                                    <div class="avatar"><img src="{{ asset('frontend/assets/img/team/c3.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="info"> <a href="#" class="date" tabindex="0">23 Dec,
                                            2024</a>
                                        <p class="author">by Dan Martin</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-15">
                            <div class="img">
                                <a href="post.html"><img src="{{ asset('frontend/assets/img/news/4.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="wrapper">
                                <div class="category"> <a href="#"><span>↗</span> Yachts</a> </div>
                                <div class="title"> <a href="post.html">A Guide To Responsible Social Distancing</a>
                                </div>
                                <div class="con">
                                    <div class="avatar"><img src="{{ asset('frontend/assets/img/team/c1.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="info"> <a href="#" class="date" tabindex="0">21 Dec,
                                            2024</a>
                                        <p class="author">by Micheal Brown</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-15">
                            <div class="img">
                                <a href="post.html"><img src="{{ asset('frontend/assets/img/news/5.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="wrapper">
                                <div class="category"> <a href="#"><span>↗</span> Yachts</a> </div>
                                <div class="title"> <a href="post.html">How Luxury Yachting Can Fulfill Your
                                        Dream</a> </div>
                                <div class="con">
                                    <div class="avatar"><img src="{{ asset('frontend/assets/img/team/c2.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="info"> <a href="#" class="date" tabindex="0">20 Dec,
                                            2024</a>
                                        <p class="author">by Betty White</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item mb-15">
                            <div class="img">
                                <a href="post.html"><img src="{{ asset('frontend/assets/img/news/6.jpg') }}"
                                        alt="" class="img-fluid"></a>
                            </div>
                            <div class="wrapper">
                                <div class="category"> <a href="#"><span>↗</span> Yachts</a> </div>
                                <div class="title"> <a href="post.html">How Are Prestige Yachts Designed?</a> </div>
                                <div class="con">
                                    <div class="avatar"><img src="{{ asset('frontend/assets/img/team/c3.png') }}"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="info"> <a href="#" class="date" tabindex="0">18 Dec,
                                            2024</a>
                                        <p class="author">by Dan Martin</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Popup Video -->
    <section class="video-popup section-padding bg-img bg-fixed" data-overlay-dark="7"
        data-background="{{ asset('frontend/assets/img/slider/2.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <div class="section-subtitle">↗ Discover</div>
                    <div class="section-title"><span>Watch Yacht Video</span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a class="vid" href="https://youtu.be/CA39EOk73dg">
                        <div class="vid-butn"> <span class="icon"><i class="flaticon-play-button"></i></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
