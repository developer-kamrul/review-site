@extends('layouts.front_end')
<!-- this section for setting title according to pages -->
@section('title','Home')
@section('content')

<!-- start View Single Product -->

<div class="bg-white my_container mt-3">
	<div class="row border-bottom py-1 mb-2 mb-md-3">
        <div class="col-md-7 col-8">
            <h3>Samsung Galuxy f 10 (gorilla glass)</h3>
        </div>
        <div class="text-end col-md-5 col-4">
            <a class="btn btn-outline-warning btn-sm my-md-2 font-12" href="#">
                <!-- for mobile view -->
                <span class="d-block d-md-none" style="font-size:9px;">
                    <span class="fa fa-heart"><sub><span class="fa fa-plus"></span></sub></span>
                </span>
                <!-- for desktop view -->
                <span class="d-none d-md-block">
                    <span class="fa fa-heart"><sub><span class="fa fa-plus"></span></sub></span>&nbsp;Shortlist
                </span>

            </a>
            <a class="btn btn-outline-primary btn-sm my-md-2 font-12" href="#">
                <!-- for mobile view -->
                <span class="d-block d-md-none" style="font-size:9px;">
                    <span class="fa fa-plus px-1"></span>
                </span>
                <!-- for desktop view -->
                <span class="d-none d-md-block">
                    <span class="fa fa-plus"></span>&nbsp;Add compare
                </span>
                
            </a>
        </div>
    </div>
    <div class="row font-14">
        <!-- for mobile+desktop view -->
        <div class="col-md-4">
            
            <div class="border mx-2 mx-md-0">
                <img id="featured" class="h-75 w-100 img-fluid rounded" src="product3.png" >
            </div>
            <div id="slider-wrapper">
            <div id="slider">
                <!-- left arrow -->
                <i class="fal fa-chevron-left display-6 mt-4 mt-md-3 arrow"></i>

                <img class="thumbnail active" src="product1.png" onmouseover="imageView(this)">
                <img class="thumbnail" src="product2.png" onmouseover="imageView(this)">
                <img class="thumbnail" src="product3.png" onmouseover="imageView(this)">
                <img class="thumbnail" src="product4.png" onmouseover="imageView(this)">
                <img class="thumbnail" src="product5.png">
                <img class="thumbnail" src="product3.png">
                <img class="thumbnail" src="product6.png">

                
            </div>
                <!-- right arrow -->
                <i class="fal fa-chevron-right display-6 mt-2 arrow ms-1"></i>
            </div>
        </div>
        <div class="col-md-8">
            <!-- for desktop view -->
            <div class="d-none d-md-block">
                <div class="row border-bottom pb-3">
                    <div class="col-md-4">
                        <span>Market Status: aaa</span>
                        <span class="float-md-end">|</span>
                    </div>
                    <div class="col-md-4">
                        <span>Launch Date: 22 March, 2020</span>
                        <span class="float-md-end">|</span>
                    </div>
                    <div class="col-md-4">
                        <span><a class="text-decoration-none" href="#">Official Website</a></span>
                    </div>
                </div>
            </div>
            <div class="row border-bottom py-1 pt-3">
                <div class="col-md-7 col-7">
                    <div>
                        <span class="text-secondary">Price Updated On *****</span>
                    </div>
                    <div>
                        <span class="fw-bold">Best Price: TK. ***</span>
                    </div>
                </div>
                <div class="col-md-5 col-5">
                    <!-- for desktop view -->
                    <div class="d-none d-md-block">
                        <span>Variant</span>
                    </div>
                    <div>
                        <!-- for mobile view -->
                        <select class="py-0">
                            <option>*******</option>
                            <option>*******</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- for Mobile view -->
            <div class="d-block d-md-none">
                <div class="row bg-light my-1 p-2">
                    <div class="col-2 border-end border-3 border-white">
                        <span class="fas fa-mobile-android-alt h4"></span>
                    </div>
                    <div class="col-10">
                        <div class="fw-bold">
                            heading
                        </div>
                        <div>
                            content
                        </div>
                    </div>
                </div>
                <div class="row bg-light my-1 p-2">
                    <div class="col-2 border-end border-3 border-white">
                        <span class="fas fa-camera h4"></span>
                    </div>
                    <div class="col-10">
                        <div class="fw-bold">
                            heading
                        </div>
                        <div>
                            content
                        </div>
                    </div>
                </div>
                <div class="row bg-light my-1 p-2">
                    <div class="col-2 border-end border-3 border-white">
                        <span class="fas fa-camera-retro h4"></span>
                    </div>
                    <div class="col-10">
                        <div class="fw-bold">
                            heading
                        </div>
                        <div>
                            content
                        </div>
                    </div>
                </div>
            </div>
            <!-- for desktop view -->
            <div class="d-none d-md-block">
                <div class="fw-bold pt-3">
                    <span style="font-size: 24px;">Key Specifications</span>
                </div>
                <div class="col-6 col-md-4 py-2">
                    <div style="font-size:18px;">
                        <span class="fab fa-android text-success"></span>&nbsp;
                        Android v11
                    </div>
                </div>
                <div class="row py-1 mb-md-3">
                    <div class="col-6 col-md-4 py-2">
                        <div class="font-18">
                            <span class="fas fa-mobile-android-alt"></span>&nbsp;
                            Display
                        </div>
                        <div>
                            dddddd
                        </div>
                    </div>
                    <div class="col-6 col-md-4 py-2">
                        <div class="font-18">
                            <span class="fa fa-camera"></span>&nbsp;
                            Rear Camera
                        </div>
                        <div>
                            dddddd
                        </div>
                    </div>
                    <div class="col-6 col-md-4 py-2">
                        <div class="font-18">
                            <span class="fa fa-camera-retro"></span>&nbsp;
                            Front Camera
                        </div>
                        <div>
                            dddddd
                        </div>
                    </div>
                    <div class="col-6 col-md-4 py-2">
                        <div class="font-18">
                            <span class="fa fa-sd-card"></span>&nbsp;
                            ROM
                        </div>
                        <div>
                            dddddd
                        </div>
                    </div>
                    <div class="col-6 col-md-4 py-2">
                        <div class="font-18">
                            <span class="fa fa-memory"></span>&nbsp;
                            RAM
                        </div>
                        <div>
                            dddddd
                        </div>
                    </div>
                    <div class="col-6 col-md-4 py-2">
                        <div class="font-18">
                            <span class="fa fa-battery-full"></span>&nbsp;
                            Battery
                        </div>
                        <div>
                            dddddd
                        </div>
                    </div>
                </div>
            </div>
            <!-- for mobile view -->
            <div class="py-1 border-top border-3 text-center d-block d-md-none">
                <span class="far fa-fingerprint mx-2"></span>
                <span class="fab fa-usb mx-2"></span>
                <img class="mx-2" src="4g-svg.png" width="20" height="20"/>
                <span class="fas fa-tint mx-2"></span>
                <span class="fas fa-wifi mx-2"></span>
                <span class="fal fa-mobile mx-2"></span>                    
            </div>
            <!-- for desktop view -->
            <div class="row py-1 border-top border-3 d-none d-md-block">
                <div class="float-end col-md-4 py-2">
                    <span class="far fa-fingerprint"></span>
                    &nbsp;&nbsp;Fingerprint Sensor
                </div>
                <div class="float-end col-md-4 py-2">
                    <span class="fab fa-usb"></span>
                    &nbsp;&nbsp;USB OTG Support
                </div>
                <div class="float-end col-md-4 py-2">
                    <img src="4g-svg.png" width="20" height="20"/>
                    &nbsp;&nbsp;Supprots Indian Brands
                </div>
                <div class="float-end col-md-4 py-2">
                    <span class="fas fa-tint"></span>
                    &nbsp;&nbsp;Waterproof, IP68
                </div>
                <div class="float-end col-md-4 py-2">
                    <span class="fas fa-wifi"></span>
                    &nbsp;&nbsp;Wireless charging
                </div>
                <div class="float-end col-md-4 py-2">
                    <span class="fal fa-mobile"></span>
                    &nbsp;&nbsp;Gorilla Glass 5
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white my-2 d-none d-md-block">
    <a class="m-2 px-5 btn btn-success btn-sm">Compare Prices</a>
    <a class="m-2 px-5 btn btn-success btn-sm">Specifications</a>
    <a class="m-2 px-5 btn btn-success btn-sm">Expert Reviews</a>
    <a class="m-2 px-5 btn btn-success btn-sm">User Reviews</a>
    <a class="m-2 px-5 btn btn-success btn-sm">Discussions</a>
</div>


<div class="row">
    <!-- main body -->
    <div class="col-md-8 col-lg-9">
        <!-- Description -->
        <div class="bg-white py-2 px-3 my-2">
            <div class="border-bottom">
                <h4>Product Title - description</h4>
            </div>
            <div style="text-align: justify;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <!-- Review Section -->
        <div class="bg-white py-1 px-3 my-2">
            <div class="border-bottom">
                <h4>Reviews</h4>
            </div>
            <div class="row pt-1">
                <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                    <div class="border-bottom border-white">
                        <span>Battery</span>&nbsp;
                        <span>4.7</span>
                    </div>
                    <div>
                        <span>*****</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                    <div class="border-bottom border-white">
                        <span>Battery</span>&nbsp;
                        <span>4.7</span>
                    </div>
                    <div>
                        <span>*****</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                    <div class="border-bottom border-white">
                        <span>Battery</span>&nbsp;
                        <span>4.7</span>
                    </div>
                    <div>
                        <span>*****</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                    <div class="border-bottom border-white">
                        <span>Battery</span>&nbsp;
                        <span>4.7</span>
                    </div>
                    <div>
                        <span>*****</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                    <div class="border-bottom border-white">
                        <span>Battery</span>&nbsp;
                        <span>4.7</span>
                    </div>
                    <div>
                        <span>*****</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-lg-2 bg-light bg-gradient border border-2 border-white">
                    <div class="border-bottom border-white">
                        <span>Battery</span>&nbsp;
                        <span>4.7</span>
                    </div>
                    <div>
                        <span>*****</span>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Good and Bad section -->
        <div class="row">
            <div class="col-md-6" style="max-height: 300px;">
                <div class="bg-white m-2" style="border: 1px white; border-radius: 15px;">
                    <div class="d-flex justify-content-between border-bottom p-2">
                        <span class="text-success fw-bold ms-3">Good</span>
                        <span class="fal fa-thumbs-up pe-2"></span>
                    </div>
                    <div class="p-2">
                        <ul>
                            <li>jjjjjjjjj</li>
                            <li>wwwwwwww</li>
                            <li>sssssssss</li>
                            <li>rrrrrrrr</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="max-height: 300px;">
                <div class="bg-white m-2" style="border: 1px white; border-radius: 15px;">
                    <div class="d-flex justify-content-between border-bottom p-2">
                        <span class="text-danger fw-bold ms-3">Bad</span>
                        <span class="fal fa-thumbs-down pe-2"></span>
                    </div>
                    <div class="p-2">
                        <ul>
                            <li>jjjjjjjjj</li>
                            <li>wwwwwwww</li>
                            <li>sssssssss</li>
                            <li>rrrrrrrr</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!-- Specifications -->
        <div class="bg-white my-2">
            <h4 class="py-1 px-3">Specifications</h4>
        <!--  -->
            <div class="bg_spec">
                <h5 class="pt-1 px-3">dddd</h5>
                <div class="bg-white px-2 font-14">
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="bg_spec">
                <h5 class="pt-1 px-3">dddd</h5>
                <div class="bg-white px-2 font-14">
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="bg_spec">
                <h5 class="pt-1 px-3">dddd</h5>
                <div class="bg-white px-2 font-14">
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                    <div class="row px-1">
                        <div class="col-4 col-md-3 border-top bg-light fw-bold py-1">
                            Rear Camera
                        </div>
                        <div class="col-8 col-md-9 bg-white border-top py-1">
                             Yes, Available. release 2020, February 14 
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    <!-- End Specifications -->

    <!-- Compare Prices for desktop -->
        <div class="bg-white my-2">
            <h4 class="py-1 px-3 border-bottom mb-0">Compare price</h4>
            <div>
                <table class="table table-bordered table-hover text-center font-14">
                    <tr class="bg_spec">
                        <th class="border-0" colspan="2">Various List</th>
                        <th class="border-0">General</th>
                        <th class="border-0">Price</th>
                        <th class="border-0">Details</th>
                    </tr>
                    <tr>
                        <td class="text-start" colspan="2">Redmi Note 7 pro (6GB+64GB)</td>
                        <td>Unofficial</td>
                        <td>TK 20,000</td>
                        <td><a href="#" class="btn btn-outline-primary btn-sm py-0 px-1 font-10 h6-md">Shop Now</a></td>
                    </tr>
                    <tr>
                        <td class="text-start" colspan="2">Redmi Note 7 pro (6GB+64GB)</td>
                        <td>Unofficial</td>
                        <td>TK 20,000</td>
                        <td><a href="#" class="btn btn-outline-primary btn-sm py-0 px-1 font-10">Shop Now</a></td>
                    </tr>
                    <tr>
                        <td class="text-start" colspan="2">Redmi Note 7 pro (6GB+64GB)</td>
                        <td>Unofficial</td>
                        <td>TK 20,000</td>
                        <td><a href="#" class="btn btn-outline-primary btn-sm py-0 px-1 font-10">Shop Now</a></td>
                    </tr>
                    <tr>
                        <td class="text-start" colspan="2">Redmi Note 7 pro (6GB+64GB)</td>
                        <td>Unofficial</td>
                        <td>TK 20,000</td>
                        <td><a href="#" class="btn btn-outline-primary btn-sm py-0 px-1 font-10">Shop Now</a></td>
                    </tr>
                </table>
            </div>
        </div>
    <!-- End Compare Prices for desktop -->

    <!-- start Videos -->
        <div class="bg-white my-2">
            <h4 class="py-1 px-3 border-bottom">Videos</h4>
            <div class="row">
                <div class="col-md-7 col-lg-8 pe-md-0">
                    <iframe id="played_video" style="width:100%;" height="345" src="" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-5 col-lg-4">
                    <form>
                        <div class="row py-2 mx-md-0 border-top border-bottom mx-1 video_link" id="videoDiv1" onclick="abc1();">
                            <input type="text" id="video1" hidden="hidden" value="kk https://www.youtube.com/embed/uMfxNFg1LdY">
                            <div class="col-4 col-md-3 m-md-0 p-md-0" style="height: 50px;">
                                <img src="kk http://img.youtube.com/vi/uMfxNFg1LdY/0.jpg" class="w-100 h-100">
                            </div>
                            <div class="col-8 col-md-9">
                                <h6 class="p-0 m-0">Video title here Video title here Video t kjdfh</h6>
                            </div>
                        </div>
                        <div class="row py-2 mx-md-0 border-top border-bottom mx-1 video_link" id="videoDiv2" onclick="abc2();">
                            <input type="text" id="video2" hidden="hidden" value="kk https://www.youtube.com/embed/Cx2d6amq0sY">
                            <div class="col-4 col-md-3 m-md-0 p-md-0" style="height: 50px;">
                                <img src="kk http://img.youtube.com/vi/Cx2d6amq0sY/0.jpg" class="w-100 h-100">
                            </div>
                            <div class="col-8 col-md-9">
                                <h6 class="p-0 m-0">Video title here Video title here Video t kjdfh</h6>
                            </div>
                        </div>
                        <div class="row py-2 mx-md-0 border-top border-bottom mx-1 video_link" id="videoDiv3" onclick="abc3();">
                            <input type="text" id="video3" hidden="hidden" value="kk https://www.youtube.com/embed/zozZw7t1ShE">
                            <div class="col-4 col-md-3 m-md-0 p-md-0" style="height: 50px;">
                                <img src="kk http://img.youtube.com/vi/zozZw7t1ShE/0.jpg" class="w-100 h-100">
                            </div>
                            <div class="col-8 col-md-9">
                                <h6 class="p-0 m-0">Video title here Video title here Video t kjdfh</h6>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- End videos -->

    <!-- start Discussion -->
        <div class="my-2 px-3 bg_discussion pb-2">
            <form>
                <h4 class="py-1 px-3">Discussion</h4>
                <div class="row border-top border-bottom pt-2">
                    <div class="col-md-9">
                        <textarea class="form-control" rows="1" placeholder="Add a new comment"></textarea>
                    </div>
                    <div class="col-md-3 text-end pt-1">
                        <input type="text" name="" class="btn btn-primary btn-sm px-3" value="Comment">
                    </div>
                </div>
                <div class="row mt-2 border-bottom pb-2">
                    <div class="col-2 col-md-1 pe-0 me-0">
                        <img class="img img-rounded rounded-circle" width="100%" height="40" src="product2.png">
                    </div>
                    <div class="col-10 col-md-10">
                        <div>
                            <h6>Lorem</h6>
                        </div>
                        <div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>
                        <div class="border-bottom pb-2">
                            <div class="mb-2">
                                <span id="reply_btn" class="btn btn-outline-primary btn-sm py-0 px-2" style="font-size:12px;" onclick="show_reply_field();">Reply</span>
                            </div>
                        <!-- comment's reply field -->
                            <div id="reply_field" style="display:none;">
                                <form method="POST" action="">
                                    <div>
                                        <input type="text" name="user_name" hidden="hidden" value="">
                                        <input type="text" name="post_id" hidden="hidden" value="">
                                        <textarea class="form-control" rows="1" placeholder="Write a new reply"></textarea>
                                    </div>
                                    <div class="mb-1">
                                        <button class="btn btn-primary btn-sm py-0 px-2">Post The Reply</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <!-- Comment's Reply -->
                        <div class="row mt-2 pb-2">
                            <div class="col-2 col-md-1 pe-0 me-0">
                                <img class="img img-rounded rounded-circle" width="100%" height="35" src="product2.png">
                            </div>
                            <div class="col-10 col-md-10">
                                <div>
                                    <h6>John</h6>
                                </div>
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Comment's Reply -->
                    </div>
                </div>
            </form>
        </div>
    <!-- end discussion -->
        
        
    </div>

<!-- Right sidebar beside description -->
    <div class="col-md-4 col-lg-3 my-2 ps-md-0">
        <!-- all Brand -->
        <div class="bg-white py-2 px-1" style="max-height: 300px;">
            <div class="d-flex justify-content-between border-bottom py-1 px-1">
                <span class="fw-bold">Mobile Brands</span>
                <span class="font-12">
                    <a href="#">See All Brands</a>
                </span>
            </div>
            <div class="row">
                <div class="col-6 col-md-4">
                    <span>Kolam</span>
                </div>
                <div class="col-6 col-md-4">
                    <span>Kolam</span>
                </div>
                <div class="col-6 col-md-4">
                    <span>Kolam</span>
                </div>
            </div>
        </div>
        <!-- // all brand -->

        <!-- all Mobile -->
        <div class="bg-white py-2 px-1 my-3">
            <div class="d-flex justify-content-between border-bottom py-1 px-1">
                <span class="fw-bold">All Mobiles</span>
                <span class="font-12">
                    <a href="#">See All Mobiles</a>
                </span>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- // all Mobile -->

        <!-- all Brand -->
        <div class="bg-white py-2 px-1 my-3" style="max-height: 300px;">
            <div class="border-bottom py-1 px-1">
                <span class="fw-bold">Latest News</span>
            </div>
            <div class="row pt-1 pb-2 border-bottom my-1 mx-1">
                <div class="col-4 px-0">
                    <img class="w-100" src="flower.jpg" height="50">
                </div>
                <div class="col-8 pe-0 h6">
                    <span>Samsang Galaxy s10 nice effect</span>
                </div>
            </div>
            <div class="row pt-1 pb-2 border-bottom my-1 mx-1">
                <div class="col-4 px-0">
                    <img class="w-100" src="flower.jpg" height="50">
                </div>
                <div class="col-8 pe-0 h6">
                    <span>Samsang Galaxy s10 nice effect</span>
                </div>
            </div>
            <div class="row pt-1 pb-2 border-bottom my-1 mx-1">
                <div class="col-4 px-0">
                    <img class="w-100" src="flower.jpg" height="50">
                </div>
                <div class="col-8 pe-0 h6">
                    <span>Samsang Galaxy s10 nice effect</span>
                </div>
            </div>
            <div class="text-end">
                <span class="font-12">
                    <a href="#">See All News</a>
                </span>
            </div>
        </div>
        <!-- // all brand -->


         <!-- Top Rated Mobile -->
        <div class="bg-white py-2 p-1 my-3">
            <div class="d-flex justify-content-between border-bottom py-1 px-1">
                <span class="fw-bold">Top Rated Mobiles</span>
                <span class="font-12">
                    <a href="#">See All Mobiles</a>
                </span>
            </div>
            <div class="row">
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
                <div class="col-6 col-md-4 fw-bold text-center py-3" style="font-size:11px;">
                    <div class="pb-1">
                        <img src="product5.png" height="45" width="40">
                    </div>
                    <div>
                        <span>Samsung</span>
                    </div>
                    <div>
                        <span>Mi 10 5g pro</span>
                    </div>
                    <div class="text-primary">
                        <span>Coming soon</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Top Rated Mobile -->

    </div>
<!-- end Right sidebar beside description -->
</div>
 <!-- End View Single Product -->

 @endsection
