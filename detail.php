<?php 
    include('include/header.php');
    include('admin/db/database.php'); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homestays details</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5    .10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Link Swiper's CSS -->
        <!-- <link rel="stylesheet" href="swiper-bundle.min.css"> -->

        <link rel="stylesheet" href="css/style1.css"> 

        <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    </head>
    <body>
        <!--NAVIGATION-->
        <?php  
            if(isset($_GET["id_homestay"]))
            {
                $id_homestay = $_GET['id_homestay'];
                $sql = "SELECT * FROM `homestay` WHERE `id_homestay` = '$id_homestay';";                
                $homestay_detail = executeResult($sql);

                $query = "SELECT * FROM location INNER JOIN homestay ON location.id_location = homestay.location_id WHERE `id_homestay` = '$id_homestay'";
                $homestay_detail1 = executeResult($query);

                $sql = "SELECT * FROM imagesmall WHERE homestay_id=$id_homestay";
                $img = executeResult($sql);
            }
            
        ?>
        <section class="container sproduct" style="padding: 0px;">
            <div class="row mt-5">
                <?php foreach($homestay_detail as $key => $value): 
                ?>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="">
                        <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_19123123580086573478.jpg?ca=13&ce=1&s=1024x768" data-lightbox="mygallery"><img class="img-fluid w-100 pb-1" src="images/<?php echo $value['images'];?>" id="MainImg" alt=""></a>
                    </div>                    
                    <div class="small-img-group">   
                        <?php foreach($img as $key): 
                        ?>                  
                        <div class="small-img-col">
                            <a href="" data-lightbox="mygallery"><img src="images/<?php echo $key['images']?>" width="100%" class="small-img" alt="architecture"></a>                         
                        </div>   
                        <?php endforeach;?>
                        <!-- <div class="small-img-col">
                            <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" data-lightbox="mygallery"><img src="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" width="100%" class="small-img" alt="architecture"></a>                         
                        </div>   
                        <div class="small-img-col">
                            <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" data-lightbox="mygallery"><img src="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" width="100%" class="small-img" alt="architecture"></a>                         
                        </div>   
                        <div class="small-img-col">
                            <a href="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" data-lightbox="mygallery"><img src="https://pix8.agoda.net/hotelImages/119/11996526/11996526_20010100300086573634.jpg?ca=9&ce=1&s=1024x768" width="100%" class="small-img" alt="architecture"></a>                         
                        </div>                         -->
                    </div>
                </div>

                <div id="information" class="col-lg-6 col-md-12 col-12">
                    <?php foreach($homestay_detail1 as $key1 => $value1): 
                    ?>
                    <h6>Package / <?php echo($value1['name']) ?></h6>
                    <?php endforeach?>
                    <h3 class="name-homestay py-3"><?php echo $value['homestay_name'];?> </h3>
                    <h6><i class="fas fa-map-marked-alt"></i>  <?php echo $value['address'];?></h6>
                    <hr>
                    <h2 class="prices py-2"><?php echo number_format($value['price'])?><sup>đ</sup></del></small></i>&rarr;626,213<sup>đ</sup><i><small style="">/ngày</small></i></h2>
                    <div class="numbers">
                        <form action="book.php" method="">
                            <h3 style="font-family: 'Courier New', Courier, monospace; font-size: 25px;">Bạn muốn ở mấy ngày <input type="number" value="1" name="num[]" min=1></h3>
                            <button herf="book.php" class="buy-btn">Đặt phòng ngay!!!</button>
                        </form>
                    </div>
                    <div class="product-brands">
                        <div class="Box-sc-kv6pi1-0 cJiLOx sc-khAkjo iitXjH">
                            <div data-element-name="facility-highlights" class="Box-sc-kv6pi1-0 hRUYUu">
                                <div class="Box-sc-kv6pi1-0 jAzgrQ">
                                    <h4 class="Typographystyled__TypographyStyled-sc-j18mtu-0 eUDGCc kite-js-Typography ">Highlights</h4>
                                </div>
                                <div class="Box-sc-kv6pi1-0 kCNWwO">
                                    <div data-element-name="property-top-feature" data-element-value="-1" data-element-index="0" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/spray.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <div data-element-name="atf-property-highlight" data-element-value="review-scores" data-element-facility-id="-1" tabindex="0" aria-describedby="rc-tooltip-21" class="Box-sc-kv6pi1-0 hRUYUu">
                                            <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="cursor: pointer; text-overflow: ellipsis; overflow: hidden;">
                                                Sparkling clean 
                                                <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 iYeCAW" style="vertical-align: baseline; transform: translate(-1px, 2px);">
                                                    <path fill-rule="evenodd" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 1a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm.5 7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h1zM12 5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div data-element-name="property-top-feature" data-element-value="318" data-element-index="1" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/location.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="text-overflow: ellipsis; overflow: hidden;">Inside city center</p>
                                    </div>
                                    <div data-element-name="property-top-feature" data-element-value="-1" data-element-index="2" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/medal.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <div data-element-name="atf-property-highlight" data-element-value="review-scores" data-element-facility-id="-1" tabindex="0" aria-describedby="rc-tooltip-22" class="Box-sc-kv6pi1-0 hRUYUu">
                                            <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="cursor: pointer; text-overflow: ellipsis; overflow: hidden;">
                                                Top Value 
                                                <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 iYeCAW" style="vertical-align: baseline; transform: translate(-1px, 2px);">
                                                    <path fill-rule="evenodd" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 1a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm.5 7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h1zM12 5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                    <div data-element-name="property-top-feature" data-element-value="272" data-element-index="3" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/door.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="text-overflow: ellipsis; overflow: hidden;">
                                            Check-in [24-hour]
                                        </p>
                                    </div>
                                    <div data-element-name="property-top-feature" data-element-value="-1" data-element-index="4" data-element-count="0" class="Box-sc-kv6pi1-0 fklyKG">
                                        <div class="Box-sc-kv6pi1-0 bpSoIf">
                                            <img src="https://cdn6.agoda.net/images/property/highlights/bedKing.svg" alt="" width="auto" height="50px">
                                        </div>
                                        <div data-element-name="atf-property-highlight" data-element-value="review-scores" data-element-facility-id="-1" tabindex="0" aria-describedby="rc-tooltip-23" class="Box-sc-kv6pi1-0 hRUYUu">
                                            <p class="Typographystyled__TypographyStyled-sc-j18mtu-0 keaLUr kite-js-Typography " style="cursor: pointer; text-overflow: ellipsis; overflow: hidden;">
                                                Excellent room comfort &amp; quality 
                                                <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 iYeCAW" style="vertical-align: baseline; transform: translate(-1px, 2px);">
                                                    <path fill-rule="evenodd" d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zm0 1a9 9 0 1 0 0 18 9 9 0 0 0 0-18zm.5 7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h1zM12 5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php endforeach?>
        </section>

        <section class="container information_product my-5 pt-5">
            <div class="product-detail-under">
                <div class="product-detail-under-top" style="font-size:22px; width:300px;">
                    Thông tin homestay
                </div>
                <div class="product-detail-under-content-big">
                    <div class="d-flex flex-row">
                        <div class="p-2 chitiet">
                            <p>Chi tiết</p>
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 vanchuyen">
                            <p>Thông tin vận chuyển</p>
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 thanhtoan">
                            <p>Phương thức thanh toán</p>                    
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 doitra">
                            <p>Chính sách đổi & trả</p>                         
                        </div>
                    </div>
                    <div class="product-detail-under-content">
                        <div class="product-detail-under-content-chitiet">
                            <div class="row m-0 py-2">
                                <?php foreach($homestay_detail as $key => $value): ?>                                 
                                <div class="col-lg-6 col-md-6">
                                    <?php echo $value['descript']?>
                                </div>
                                <?php endforeach?>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="DetailsTable__Container-sc-6kksbc-0 kmjgzn">
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Value for money</span>
                                            <meta itemprop="sku" content="DW01200005">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">9.4</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Distance to city center</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">1km</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Location rating</span>
                                            <meta itemprop="productSupported" content="Apple Watch series 6, 5, 4 and SE">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">9.1</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Nearest airport</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">Da Nang International Airport (DAD)</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Distance to airport</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">24.8 Km</span>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="product-detail-under-content-vanchuyen">
                            <div class="row m-0 py-1">                    
                                <div class="Box-sc-kv6pi1-0 fuBtbe">
                                    <div data-element-name="property-info-section" data-element-value="drinkingAndDining" data-element-index="0" class="Box-sc-kv6pi1-0 daWRcw">
                                        <div class="Box-sc-kv6pi1-0 iyqcnt">
                                            <img alt="" src="//cdn6.agoda.net/images/staycation/default/DrinkingAndDining.svg" width="50px" height="50px">
                                        </div>
                                        <div class="Box-sc-kv6pi1-0 dLpjIL">
                                            <h5 class="sc-hKgILt sc-eCssSg iIDYBO clpWsV Box-sc-kv6pi1-0 bpSoIf">Food and Drinks</h5>
                                            <div tabindex="0" role="list" class="Box-sc-kv6pi1-0 cYZaSy">
                                                <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                    <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                        <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                            <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Room service [24-hour]</span>
                                                </div>
                                                <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                    <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                        <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                            <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Coffee shop</span>
                                                </div>
                                                <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                    <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                        <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                            <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Room service</span>
                                                </div>
                                            </div>                
                                        </div>
                                    </div>
                                    <div data-element-name="property-info-section" data-element-value="staycationWellness" data-element-index="1" class="Box-sc-kv6pi1-0 daWRcw">
                                        <div class="Box-sc-kv6pi1-0 iyqcnt">
                                            <img alt="" src="//cdn6.agoda.net/images/staycation/default/wellness.svg" width="50px" height="50px">
                                        </div>
                                        <div class="Box-sc-kv6pi1-0 dLpjIL">
                                            <h5 class="sc-hKgILt sc-eCssSg iIDYBO clpWsV Box-sc-kv6pi1-0 bpSoIf">Wellness</h5>
                                            <div tabindex="0" role="list" class="Box-sc-kv6pi1-0 cYZaSy">
                                                <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                    <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                        <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                            <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                        </svg>
                                                    </div>
                                                    <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Fitness center</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-element-name="property-info-section" data-element-value="activities" data-element-index="2" class="Box-sc-kv6pi1-0 daWRcw">
                                        <div class="Box-sc-kv6pi1-0 iyqcnt">
                                            <img alt="" src="//cdn6.agoda.net/images/staycation/default/activities.svg" width="50px" height="50px"></div>
                                            <div class="Box-sc-kv6pi1-0 dLpjIL">
                                                <h5 class="sc-hKgILt sc-eCssSg iIDYBO clpWsV Box-sc-kv6pi1-0 bpSoIf">Activities</h5>
                                                <div tabindex="0" role="list" class="Box-sc-kv6pi1-0 cYZaSy">
                                                    <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                        <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                            <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                                <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Swimming pool [indoor]</span>
                                                    </div>
                                                    <div tabindex="0" role="listitem" class="Box-sc-kv6pi1-0 ezDdvM">
                                                        <div class="Box-sc-kv6pi1-0 hRUYUu">
                                                            <svg width="1em" height="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="SvgIconstyled__SvgIconStyled-sc-1i6f60b-0 dwMBzZ">
                                                                <path d="M17.942 3.206l-8.76 8.761-3.124-3.123a2 2 0 0 0-2.828 0L1 11.074a2 2 0 0 0 0 2.828l6.767 6.767a2 2 0 0 0 2.828 0L23 8.264a2 2 0 0 0 0-2.828l-2.23-2.23a2 2 0 0 0-2.828 0z"></path>
                                                            </svg>
                                                        </div>
                                                        <span class="Spanstyled__SpanStyled-sc-16tp9kb-0 cUindZ kite-js-Span Box-sc-kv6pi1-0 dnWyNl">Swimming Pool</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        <div class="product-detail-under-content-thanhtoan">
                            <div class="row m-0 py-1">
                                <div class="col-lg-10 col-md-6">
                                    <p>Simple Watch cung cấp các phương thức thanh toán an toàn và bạn có thể chọn thanh toán bằng Visa, Mastercard, JCB, thanh toán qua tiền mặt, internet banking hoặc trả góp 0%.</p>
                                    <div class="logo-chuyen-phat">
                                        <div class="row m-0 py-0">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="max-width: 100px;" src="images/Phương thức thanh toán/visa.svg">
                                            &ensp;
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="max-width: 100px;" src="images/Phương thức thanh toán/mastercard.svg">
                                            &ensp;
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="max-width: 100px;" src="images/Phương thức thanh toán/jcb.svg">
                                            &ensp;                                                                                                                        
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="max-width: 100px;" src="images/Phương thức thanh toán/thanhtoantienmat.png">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="max-width: 100px;" src="images/Phương thức thanh toán/internetBanking.png">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="max-width: 100px;" src="images/Phương thức thanh toán/tragop.png">
                                        </div>
                                    </div>                                                                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="product-detail-under-content-doitra">
                            <div class="row m-0 py-1">
                                <div class="col-lg-10 col-md-6">
                                    <p>
                                        • <i>Đối với chính sách đổi phòng</i>: Nếu khách hàng muốn đổi phòng qua 1 hạng phòng cao cấp hơn thì sẽ phụ thu theo 
                                        chênh lệch hạng phòng mà khách hàng muốn đổi. Trong trường hợp khách hàng muốn đổi xuống hạng phòng thấp hơn hạng phòng mà quý khách đã đặt 
                                        hoặc đang ở thì có thể sẽ không hoàn lại số tiền chênh lệch cho khách hàng và vấn đề được hoàn lại số tiền chênh 
                                        lệch hay không còn tùy thuộc vào ngày mà khách hàng quyết định đổi.
                                        <br><br>
                                        • <i>Đối với chính sách hủy phòng</i>: trường hợp khách hàng đã hoàn thành việc đặt phòng và hoàn thành việc thanh 
                                        toán cho homestay nhưng lại không thể tiến hành chuyến đi của mình, có thể liên hệ với homestay qua số hotline hoặc qua email để được hỗ trợ việc hủy phòng. Điều khoản, chi phí phát sinh 
                                        trong quá trình hủy phòng, dời ngày đặt sẽ được tính theo quy định hủy phòng riêng của từng khách sạn.
                                        <br><br>
                                        • <i>Đối với chính sách đảm bảo hoàn tiền</i>: Trong trường hợp khách hàng đã thanh toàn tiền cọc, thanh toán đầy đủ tiền 
                                        đặt phòng. Nhưng do điều kiện khách quan nên hủy chuyến đi của mình thì homestay sẽ hoàn lại số tiền 
                                        cho khách hàng bằng tiền mặt hoặc chuyển khoản qua thông tin mà khách hàng cung cấp cho homestay. Việc 
                                        hoàn tiền sẽ dựa vào quy định của mỗi booking phòng khác nhau. Vì sẽ có những booking sẽ hoàn tiền 100%, 70%, 50%, 
                                        30%... Việc hoàn tiền này sẽ được nhân viên của homestay sẽ thông báo cho khách hàng qua điện thoại hoặc email.                                        
                                    </p>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Phần chữ đánh giá của khách hàng -->
        <!-- <section style="font-size:15px; padding-bottom:0px;">
            <hr class="mx-auto">
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral">Đánh giá của khách hàng</h1>
            <p class="text-center">Dưới đây là một số đánh giá của khách hàng khi họ đã trải nghiệm sản phẩm của chúng tôi.</p>
        </section> -->

        <!-- <section class="danh-gia-khach-hang">            
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">                        
                        <div class="card swiper-slide">                            
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/pic-1.png" alt="" class="card-img">
                                </div>
                            </div>                                
                            <div class="card-content">
                                <h2 class="name"></h2>
                                <p class="description"></p>    
                            </div>                            
                        </div>                        
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section> -->

        <section class="comment-box">
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral">Bình luận</h1>
            <p class="text-center">Nếu bạn có những thắc mắc gì, hay có những đánh giá gì về sản phẩm của chúng tôi thì hãy gửi nhận xét ở phần phía dưới nhé!!!</p>
            <div class="row">
                <form action="" class="frame">
                    <input type="text" name="full-name" placeholder="Họ và tên...">
                    <input type="email" name="email" placeholder="Địa chỉ email...">
                    <textarea name="comment" placeholder="Hãy viết nhận xét của bạn ở đây..."></textarea>
                    <button type="submit">Gửi bình luận</button>                
                </form>
            </div>
            
        </section>

        <?php include('include/footer.php');?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
        <!--Chuyển đổi ảnh trong phần Product Details-->
        <script>
            var MainImg = document.getElementById('MainImg');
            var smalling = document.getElementsByClassName('small-img');

            smalling[0].onclick = function(){
                MainImg.src = smalling[0].src;
            }
            smalling[1].onclick = function(){
                MainImg.src = smalling[1].src;
            }
            smalling[2].onclick = function(){
                MainImg.src = smalling[2].src;
            }
            smalling[3].onclick = function(){
                MainImg.src = smalling[3].src;
            }
        </script>

        <!--Product-information-->
        <script>
            const doitra = document.querySelector(".doitra");
            const chitiet = document.querySelector(".chitiet");
            const thanhtoan = document.querySelector(".thanhtoan");
            const vanchuyen = document.querySelector(".vanchuyen");

            if(doitra){
                doitra.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "block";
                })
            }
            if(chitiet){
                chitiet.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "block";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                })
            }
            if(thanhtoan){
                thanhtoan.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "block";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                })
            }
            if(vanchuyen){
                vanchuyen.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "block";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                })
            }
        </script>

        <!-- Nút sổ của product_detail -->
        <script>
            const butTon = document.querySelector(".product-detail-under-top");
            if(butTon){
                butTon.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-big").classList.toggle("activeB");
                })
            }
        </script>

        <script>
            var swiper = new Swiper(".slide-content", {
                slidesPerView: 3,
                spaceBetween: 25,
                loop: true,
                centerSlide:'true',
                fade:'true',
                grabCursor: 'true',
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation:{
                    nextEl:".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints:{
                    0: {
                        slidesPerView: 1,
                    },
                    520: {
                        slidesPerView: 2,
                    },
                    950: {
                        slidesPerView: 3,
                    }
                }
            });
        </script>

        <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

    </body>

</html>
