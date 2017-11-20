<!doctype html>
<html lang="en-US" class="desktop landscape">
<head >
    <script>
        var require = {
            "baseUrl": "http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US"
        };
    </script>
    <meta charset="utf-8"/>
    <meta name="description" content="S-market is a Fantastic Responsive Magento 2 Theme for any e-store, especially fashion items. Take to your pocket and build your own business as you want!"/>
    <meta name="keywords" content="responsive magento 2 theme, fashion magento 2, magento 2 theme for fashion, best magento theme, responsive magento"/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>S-market - Fluid Responsive Magento Theme</title>
    <link  rel="stylesheet" type="text/css"  media="all" href="http://magento2.flytheme.net/themes/sm_smarket/pub/static/_cache/merged/4bc45bcb33f0f23dbec77141ec384b0b.min.css" />
    <link  rel="stylesheet" type="text/css"  media="screen and (min-width: 768px)" href="http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/css/styles-l.min.css" />
    <link  rel="stylesheet" type="text/css"  media="print" href="http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/css/print.min.css" />
    <link  rel="icon" type="image/x-icon" href="http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/Magento_Theme/favicon.ico" />
    <link  rel="shortcut icon" type="image/x-icon" href="http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/Magento_Theme/favicon.ico" />
    <script  type="text/javascript"  src="http://magento2.flytheme.net/themes/sm_smarket/pub/static/_cache/merged/8495ae5ee7a1045b2a4b0845eedd49cd.min.js"></script>
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Poppins:400' />
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' />
    <link  rel="stylesheet" type="text/css"  media="all" href="http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/css/config_1.css" />
    <!--CUSTOM CSS-->
    <style>
    </style>
    <script type="text/javascript">
        require([
            'domReady!',
            'jquerybootstrap',
            'yttheme'
        ], function ($) {
            //console.log('Test Done');
        });
    </script>
    <!--CUSTOM JS-->
    <script type="text/javascript">
        require([
            'jquery',
            'domReady!'
        ], function ($) {
            if($('.breadcrumbs').length == 0){
                $('body').addClass("no-breadcrumbs");
            }
        });

    </script>
    <!--LISTING CONFIG-->
    <style>
        .g2font,.header-bottom, .sm-listing-tabs .ltabs-wrap .ltabs-tabs-container .ltabs-tabs li, .block.latest-post-container .slider-post-container .info-blog .date-post-title .postTitle , .bs-pretext , .deals-countdown{
            font-family:Roboto;
        }
        @media (min-width: 1200px) {
            .container{
                padding-left:0;
                padding-right:0;
                max-width: 1170px;
                width: 1170px;
            }
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item{
                width: 25%;
            }
            .col1-layout .category-product.products-grid .item:nth-child(4n+1){
                clear:both;
            }
            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item{
                width: 33.333333333333%;
            }
            .col2-layout .category-product.products-grid .item:nth-child(3n+1){
                clear:both;
            }
            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item{
                width: 50%;
            }
            .col3-layout .category-product.products-grid .item:nth-child(2n+1){
                clear:both;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item{
                width: 25%;
            }
            .col1-layout .category-product.products-grid .item:nth-child(4n+1){
                clear:both;
            }
            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item{
                width: 33.333333333333%;
            }
            .col2-layout .category-product.products-grid .item:nth-child(3n+1){
                clear:both;
            }
            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item{
                width: 50%;
            }
            .col3-layout .category-product.products-grid .item:nth-child(2n+1){
                clear:both;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item{
                width: 33.333333333333%;
            }
            .col1-layout .category-product.products-grid .item:nth-child(3n+1){
                clear:both;
            }
            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item{
                width: 33.333333333333%;
            }
            .col2-layout .category-product.products-grid .item:nth-child(3n+1){
                clear:both;
            }
            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item{
                width: 50%;
            }
            .col3-layout .category-product.products-grid .item:nth-child(2n+1){
                clear:both;
            }
        }
        @media (min-width: 481px) and (max-width: 767px) {
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item{
                width: 50%;
            }
            .col1-layout .category-product.products-grid .item:nth-child(2n+1){
                clear:both;
            }
            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item{
                width: 50%;
            }
            .col2-layout .category-product.products-grid .item:nth-child(2n+1){
                clear:both;
            }
            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item{
                width: 100%;
            }
            .col3-layout .category-product.products-grid .item:nth-child(1n+1){
                clear:both;
            }
        }
        @media (max-width: 480px) {
            /*==1 COLUMN==*/
            .col1-layout .category-product.products-grid .item{
                width: 100%;
            }
            .col1-layout .category-product.products-grid .item:nth-child(1n+1){
                clear:both;
            }
            /*==2 COLUMNS==*/
            .col2-layout .category-product.products-grid .item{
                width: 100%;
            }
            .col2-layout .category-product.products-grid .item:nth-child(1n+1){
                clear:both;
            }
            /*==3 COLUMNS==*/
            .col3-layout .category-product.products-grid .item{
                width: 100%;
            }
            .col3-layout .category-product.products-grid .item:nth-child(1n+1){
                clear:both;
            }
        }
    </style>
</head>
<body data-container="body" data-mage-init='{"loaderAjax": {}, "loader": { "icon": "http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/loader-2.gif"}}' class="header-1-style home-1-style footer-1-style layout-wide  cms-home-demo-01 cms-index-index page-layout-1column">
<script>
    require.config({
        deps: [
            'jquery',
            'mage/translate',
            'jquery/jquery-storageapi'
        ],
        callback: function ($) {
            'use strict';

            var dependencies = [],
                versionObj;

            $.initNamespaceStorage('mage-translation-storage');
            $.initNamespaceStorage('mage-translation-file-version');
            versionObj = $.localStorage.get('mage-translation-file-version');

            if (versionObj.version !== '11abc0b73f3038719ebe512cdf88a30d47848a76') {
                dependencies.push(
                    'text!js-translation.json'
                );

            }

            require.config({
                deps: dependencies,
                callback: function (string) {
                    if (typeof string === 'string') {
                        $.mage.translate.add(JSON.parse(string));
                        $.localStorage.set('mage-translation-storage', string);
                        $.localStorage.set(
                            'mage-translation-file-version',
                            {
                                version: '11abc0b73f3038719ebe512cdf88a30d47848a76'
                            }
                        );
                    } else {
                        $.mage.translate.add($.localStorage.get('mage-translation-storage'));
                    }
                }
            });
        }
    });
</script>
<script type="text/x-magento-init">
         {
             "*": {
                 "mage/cookies": {
                     "expires": null,
                     "path": "/themes/sm_smarket",
                     "domain": ".magento2.flytheme.net",
                     "secure": false,
                     "lifetime": "3600"
                 }
             }
         }
      </script>
<noscript>
    <div class="message global noscript">
        <div class="content">
            <p>
                <strong>JavaScript seems to be disabled in your browser.</strong>
                <span>For the best experience on our site, be sure to turn on Javascript in your browser.</span>
            </p>
        </div>
    </div>
</noscript>
<!-- BEGIN GOOGLE ANALYTICS CODE -->
<script>
    //<![CDATA[
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');


    ga('create', 'UA-34732571-1', 'auto');
    ga('send', 'pageview');

    //]]>
</script>
<!-- END GOOGLE ANALYTICS CODE -->
<div class="page-wrapper">
    <div class="header-container header-style-1">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6  col-xs-6 language-currency-top">
                        <div class="call-us">
                            <span>Call Us Now: </span>
                            0123-444-666654123
                        </div>
                        <div class="language-wrapper">
                            <div class="switcher language switcher-language" data-ui-id="language-switcher" id="switcher-language-nav">
                                <strong class="label switcher-label"><span>Language</span></strong>
                                <div class="actions dropdown options switcher-options">
                                    <div class="action toggle switcher-trigger" id="switcher-language-trigger-nav">
                                        <strong style="background-image:url('http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/flags/flag_default.png');" class="view-default">
                                            <span>English</span>
                                        </strong>
                                    </div>
                                    <ul class="dropdown switcher-dropdown"
                                        data-mage-init='{"dropdownDialog":{
                                    "appendTo":"#switcher-language-nav > .options",
                                    "triggerTarget":"#switcher-language-trigger-nav",
                                    "closeOnMouseLeave": false,
                                    "triggerClass":"active",
                                    "parentClass":"active",
                                    "buttons":null}}'>
                                        <li class="view-french switcher-option">
                                            <a style="background-image:url('http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/flags/flag_french.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/stores\/store\/switch\/","data":{"___store":"french","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}'>
                                                French</a>
                                        </li>
                                        <li class="view-german switcher-option">
                                            <a style="background-image:url('http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/flags/flag_german.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/stores\/store\/switch\/","data":{"___store":"german","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}'>
                                                German</a>
                                        </li>
                                        <li class="view-argentina switcher-option">
                                            <a style="background-image:url('http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/flags/flag_argentina.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/stores\/store\/switch\/","data":{"___store":"argentina","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}'>
                                                Argentina</a>
                                        </li>
                                        <li class="view-benin switcher-option">
                                            <a style="background-image:url('http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/flags/flag_benin.png');" href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/stores\/store\/switch\/","data":{"___store":"benin","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}'>
                                                Benin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="currency-wrapper">
                            <div class="switcher currency switcher-currency" id="switcher-currency-nav">
                                <strong class="label switcher-label"><span>Currency</span></strong>
                                <div class="actions dropdown options switcher-options">
                                    <div class="action toggle switcher-trigger" id="switcher-currency-trigger-nav">
                                        <strong class="language-USD">
                                            <span>USD</span>
                                        </strong>
                                    </div>
                                    <ul class="dropdown switcher-dropdown" data-mage-init='{"dropdownDialog":{
                                    "appendTo":"#switcher-currency-nav > .options",
                                    "triggerTarget":"#switcher-currency-trigger-nav",
                                    "closeOnMouseLeave": false,
                                    "triggerClass":"active",
                                    "parentClass":"active",
                                    "buttons":null}}'>
                                        <li class="currency-EUR switcher-option">
                                            <a href="#" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/directory\/currency\/switch\/","data":{"currency":"EUR","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}'>EUR - Euro</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  col-xs-6 header-top-links">
                        <div class="toplinks-wrapper">
                            <ul class="header links">
                                <li class="myaccount-link">
                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/customer/account/" title="My Account">My Account</a>
                                </li>
                                <li class="link wishlist" data-bind="scope: 'wishlist'">
                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/wishlist/">
                                        My Wish List        <!-- ko if: wishlist().counter -->
                                        <span data-bind="text: wishlist().counter" class="counter qty"></span>
                                        <!-- /ko -->
                                    </a>
                                </li>
                                <script type="text/x-magento-init">
                                 {
                                     "*": {
                                         "Magento_Ui/js/core/app": {
                                             "components": {
                                                 "wishlist": {
                                                     "component": "Magento_Wishlist/js/view/wishlist"
                                                 }
                                             }
                                         }
                                     }
                                 }

                              </script>
                                <li class="checkout-link">
                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/" title="Checkout">Checkout</a>
                                </li>
                                <li class="authorization-link" data-label="or">
                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/customer/account/login/">
                                        Sign In    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 logo-header">
                        <div class="logo-wrapper">
                            <h1 class="logo-content">
                                <strong class="logo">
                                    <a class="logo" href="http://magento2.flytheme.net/themes/sm_smarket/default/" title="Magento Commerce">
                                        <img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/logo/websites/1/logo.png"
                                             alt="Magento Commerce"
                                             width="134"				 height="46"			/>
                                    </a>
                                </strong>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="searchbox-header">
                            <div class="search-wrapper">
                                <div id="sm_searchbox9995243031507176662" class="sm-searchbox">
                                    <div class="sm-searchbox-content">
                                        <form class="form minisearch" id="searchbox_mini_form" action="http://magento2.flytheme.net/themes/sm_smarket/default/catalogsearch/result/" method="get">
                                            <div class="field searchbox">
                                                <div class="control">
                                                    <select class="cat searchbox-cat" name="cat">
                                                        <option value="">All Categories</option>
                                                        <option value="97"  >- - shop</option>
                                                        <option value="185"  >- - - - Clothing</option>
                                                        <option value="186"  >- - - - Backpack</option>
                                                        <option value="187"  >- - - - Leather Shoes</option>
                                                        <option value="188"  >- - - - Watches</option>
                                                        <option value="98"  >- - Outerwear</option>
                                                        <option value="164"  >- - - -  Gear</option>
                                                        <option value="165"  >- - - - Swim Gear</option>
                                                        <option value="166"  >- - - - Cycling Gear</option>
                                                        <option value="99"  >- - Jackets</option>
                                                        <option value="189"  >- - - - Bath & Body</option>
                                                        <option value="190"  >- - - - Shaving & Hair Removal</option>
                                                        <option value="191"  >- - - - Fragrances</option>
                                                        <option value="192"  >- - - - Salon & Spa Equipment</option>
                                                        <option value="100"  >- - Dresses</option>
                                                        <option value="201"  >- - - - Walkera</option>
                                                        <option value="202"  >- - - - FPV system & Parts</option>
                                                        <option value="203"  >- - - - RC Cars & Parts</option>
                                                        <option value="204"  >- - - - Helicopters & Parts</option>
                                                        <option value="101"  >- - Jumpsuits</option>
                                                        <option value="212"  >- - - - Living room</option>
                                                        <option value="213"  >- - - - Out door</option>
                                                        <option value="214"  >- - - - Kitchens</option>
                                                        <option value="215"  >- - - - Lighting</option>
                                                        <option value="216"  >- - - - Sofa & Chair</option>
                                                        <option value="217"  >- - - - Office</option>
                                                        <option value="218"  >- - - - Bathroom</option>
                                                        <option value="222"  >- - - - Hot Items</option>
                                                        <option value="102"  >- - Shorts</option>
                                                        <option value="103"  >- - T-Shirts</option>
                                                        <option value="197"  >- - - - Men Watches</option>
                                                        <option value="198"  >- - - - Wedding Rings</option>
                                                        <option value="199"  >- - - - Earrings</option>
                                                        <option value="200"  >- - - - Necklaces</option>
                                                        <option value="105"  >- - Shoes</option>
                                                        <option value="114"  >- - - - Motorcycle</option>
                                                        <option value="115"  >- - - - Car Lights</option>
                                                        <option value="116"  >- - - - Car Accessories</option>
                                                        <option value="117"  >- - - - Motorcycle Gadgets</option>
                                                        <option value="106"  >- - Sunglasses</option>
                                                        <option value="144"  >- - - - Cycling Gear</option>
                                                        <option value="145"  >- - - - Camping & Hiking Gear</option>
                                                        <option value="146"  >- - - - Swim Gear</option>
                                                        <option value="110"  >- - Apparel</option>
                                                        <option value="219"  >- - - - Women</option>
                                                        <option value="220"  >- - - - Men</option>
                                                        <option value="221"  >- - - - Fashion</option>
                                                        <option value="223"  >- - - - Hot</option>
                                                        <option value="112"  >- - About Us</option>
                                                        <option value="113"  >- - Contact Us</option>
                                                        <option value="205"  >- - Product Types</option>
                                                    </select>
                                                    <input id="searchbox"
                                                           data-mage-init='{"quickSearch":{
                                                "formSelector":"#searchbox_mini_form",
                                                "url":"http://magento2.flytheme.net/themes/sm_smarket/default/search/ajax/suggest/",
                                                "destinationSelector":"#searchbox_autocomplete"}
                                                }'
                                                           type="text"
                                                           name="q"
                                                           onfocus="if(this.value=='Enter keywords to search...') this.value='';" onblur="if(this.value=='') this.value='Enter keywords to search...';" value="Enter keywords to search..."
                                                           class="input-text input-searchbox"
                                                           maxlength="128"
                                                           role="combobox"
                                                           aria-haspopup="false"
                                                           aria-expanded="true"
                                                           aria-autocomplete="both"
                                                           autocomplete="off"/>
                                                    <div id="searchbox_autocomplete" class="search-autocomplete"></div>
                                                </div>
                                            </div>
                                            <div class="actions">
                                                <button type="submit" title="Search" class="btn-searchbox">
                                                    <span>Search</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="sm-searchbox-popular">
                                        <div class="sm-searchbox-popular-title">Top Search:</div>
                                        <div class="sm-searchbox-keyword">
                                            <ul class="sm-searchbox-keyword-list">
                                                <li><a href="http://magento2.flytheme.net/themes/sm_smarket/default/catalogsearch/result/?q=config">config</a></li>
                                                <li><a href="http://magento2.flytheme.net/themes/sm_smarket/default/catalogsearch/result/?q=Configurable+Product">Configurable Product</a></li>
                                                <li><a href="http://magento2.flytheme.net/themes/sm_smarket/default/catalogsearch/result/?q=product">product</a></li>
                                                <li><a href="http://magento2.flytheme.net/themes/sm_smarket/default/catalogsearch/result/?q=toma">toma</a></li>
                                                <li><a href="http://magento2.flytheme.net/themes/sm_smarket/default/catalogsearch/result/?q=xatem">xatem</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    require([
                                        'jquery'
                                    ], function ($) {
                                        var searchbox = $('#sm_searchbox9995243031507176662');
                                        var firt_load = 5;

                                        clickMore($('.sm-searchbox-more', searchbox));
                                        function clickMore(more)
                                        {
                                            more.click(function () {
                                                var that = $(this);
                                                var sb_ajaxurl = that.attr('data-ajaxmore');
                                                var count = that.attr('data-count');
                                                count = parseInt(count);
                                                if (firt_load >= count) {
                                                    count = count + parseInt(firt_load);
                                                }
                                                $.ajax({
                                                    type: 'POST',
                                                    url: sb_ajaxurl,
                                                    data: {
                                                        is_ajax: 1,
                                                        count_term: count
                                                    },
                                                    success: function (data) {
                                                        $('.sm-searchbox-keyword', searchbox).html(data.htm);
                                                        clickMore($('a.sm-searchbox-more',searchbox));
                                                        $('a.sm-searchbox-more', searchbox).attr({
                                                            'data-count': count + parseInt(firt_load)
                                                        });
                                                    },
                                                    dataType: 'json'
                                                });
                                            });
                                        }

                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 header-middle-right">
                        <div class="middle-right-content">
                            <div class="customer-action-hd">
                                <a href="http://magento2.flytheme.net/themes/sm_smarket/default/customer/account/login/" title="Login">Login </a>/								 <a href="http://magento2.flytheme.net/themes/sm_smarket/default/customer/account/create/" title="Register">Register</a>
                                <span class="welcome-text">
                              Welcome Guest
                              </span>
                            </div>
                            <div class="minicart-header">
                                <div class="minicart-content">
                                    <div class="cart-wrapper">
                                        <div data-block="minicart" class="minicart-wrapper">
                                            <a class="action showcart" href="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/"
                                               data-bind="scope: 'minicart_content'">
                                                <span class="text"><span class="df-text">My Cart</span><span class="hidden">My Cart - </span></span>
                                                <span class="counter qty empty"
                                                      data-bind="css: { empty: !!getCartParam('summary_count') == false }, blockLoader: isLoading">
                                             <span class="counter-number">
                                                <!-- ko text: getCartParam('summary_count') --><!-- /ko -->
                                             </span>
                                             <span class="counter-label">
                                                <!-- ko if: getCartParam('summary_count') -->
                                                 <!-- ko text: getCartParam('summary_count') --><!-- /ko -->
                                                 <!-- ko i18n: 'items' --><!-- /ko -->
                                                 <!-- /ko -->
                                                 <!-- ko if: getCartParam('summary_count') == 0 -->
                                                 <!-- ko i18n: '0 item' --><!-- /ko -->
                                                 <!-- /ko -->
                                             </span>
                                             <span class="price-minicart">
                                                <!-- ko foreach: getRegion('subtotalContainer') -->
                                                 <!-- ko template: getTemplate() --><!-- /ko -->
                                                 <!-- /ko -->
                                             </span>
                                          </span>
                                            </a>
                                            <div class="block block-minicart empty"
                                                 data-role="dropdownDialog"
                                                 data-mage-init='{"dropdownDialog":{
                                          "appendTo":"[data-block=minicart]",
                                          "triggerTarget":".showcart",
                                          "timeout": "2000",
                                          "closeOnMouseLeave": false,
                                          "closeOnEscape": true,
                                          "triggerClass":"active",
                                          "parentClass":"active",
                                          "buttons":[]}}'>
                                                <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                                                    <!-- ko template: getTemplate() --><!-- /ko -->
                                                </div>
                                            </div>
                                            <script>
                                                window.checkout = {"shoppingCartUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/checkout\/cart\/","checkoutUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/checkout\/","updateItemQtyUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/checkout\/sidebar\/updateItemQty\/","removeItemUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/checkout\/sidebar\/removeItem\/","imageTemplate":"Magento_Catalog\/product\/image_with_borders","baseUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/","minicartMaxItemsVisible":5,"websiteId":"1","maxItemsToDisplay":10,"customerLoginUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/customer\/account\/login\/","isRedirectRequired":false,"autocomplete":"off","captcha":{"user_login":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/captcha\/refresh\/","isRequired":false},"guest_checkout":{"isCaseSensitive":false,"imageHeight":50,"imageSrc":"","refreshUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/captcha\/refresh\/","isRequired":false}}};
                                            </script>
                                            <script type="text/x-magento-init">
                                          {
                                              "[data-block='minicart']": {
                                                  "Magento_Ui/js/core/app": {"components":{"minicart_content":{"children":{"subtotal.container":{"children":{"subtotal":{"children":{"subtotal.totals":{"config":{"display_cart_subtotal_incl_tax":0,"display_cart_subtotal_excl_tax":1,"template":"Magento_Tax\/checkout\/minicart\/subtotal\/totals"},"children":{"subtotal.totals.msrp":{"component":"Magento_Msrp\/js\/view\/checkout\/minicart\/subtotal\/totals","config":{"displayArea":"minicart-subtotal-hidden","template":"Magento_Msrp\/checkout\/minicart\/subtotal\/totals"}}},"component":"Magento_Tax\/js\/view\/checkout\/minicart\/subtotal\/totals"}},"component":"uiComponent","config":{"template":"Magento_Checkout\/minicart\/subtotal"}}},"component":"uiComponent","config":{"displayArea":"subtotalContainer"}},"item.renderer":{"component":"uiComponent","config":{"displayArea":"defaultRenderer","template":"Magento_Checkout\/minicart\/item\/default"},"children":{"item.image":{"component":"Magento_Catalog\/js\/view\/image","config":{"template":"Magento_Catalog\/product\/image","displayArea":"itemImage"}},"checkout.cart.item.price.sidebar":{"component":"uiComponent","config":{"template":"Magento_Checkout\/minicart\/item\/price","displayArea":"priceSidebar"}}}},"extra_info":{"component":"uiComponent","config":{"displayArea":"extraInfo"}},"promotion":{"component":"uiComponent","config":{"displayArea":"promotion"}}},"config":{"itemRenderer":{"default":"defaultRenderer","simple":"defaultRenderer","virtual":"defaultRenderer"},"template":"Magento_Checkout\/minicart\/content"},"component":"Magento_Checkout\/js\/view\/minicart"}},"types":[]}        },
                                              "*": {
                                                  "Magento_Ui/js/block-loader": "http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/loader-1.gif"
                                              }
                                          }
                                       </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="col-lg-2 col-xs-2  sidebar-megamenu">
                    <div class="megamenu-content-sidebar">
                        <div class="btn-megamenu g2font">
                            <a href="javascript:void(0)" title="All Categories">Categories</a>
                        </div>
                        <div class="menu-ver-content">
                            <div class="navigation-megamenu-wrapper">
                                <nav class="sm_megamenu_wrapper_vertical_menu sambar" id="sm_megamenu_menu59d5b0d6613b3" data-sam="250214081507176662">
                                    <div class="sambar-inner">
                                    <span class="btn-sambar" data-sapi="collapse" data-href="#sm_megamenu_menu59d5b0d6613b3">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </span>
                                        <ul class="sm-megamenu-hover sm_megamenu_menu sm_megamenu_menu_black" data-jsapi="on">
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear.html"  id="sm_megamenu_231">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Outerwear</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop sm_megamenu_haschild" href="http://magento2.flytheme.net/themes/sm_smarket/default/shop.html"  id="sm_megamenu_268">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Jackets</span>
                                          </span>
                                                </a>
                                                <div class="sm-megamenu-child sm_megamenu_dropdown_4columns ">
                                                    <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_4 sm_megamenu_firstcolumn    ">
                                                        <div data-link="" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    remove-padding ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <div data-link="" class="sm_megamenu_col_3    remove-padding ">
                                                                        <div class="sm_megamenu_head_item">
                                                                            <div class="sm_megamenu_title  ">
                                                                                <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    margin-bottom">
                                                                                    <div class="sm_megamenu_head_item">
                                                                                        <div class="sm_megamenu_title  ">
                                                                                            <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear.html"  ></a>
                                                                                            <div class="sm_megamenu_title">
                                                                                                <h3 class="sm_megamenu_nodrop  title-cat"> Gear</h3>
                                                                                            </div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/hammock.html" ><span class="sm_megamenu_title_lv-4">Hammock</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/telescope.html" ><span class="sm_megamenu_title_lv-4">Telescope</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/hat.html" ><span class="sm_megamenu_title_lv-4">Hat</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/tent.html" ><span class="sm_megamenu_title_lv-4">Tent</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/sleeping-bag.html" ><span class="sm_megamenu_title_lv-4">Sleeping Bag</span></a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                                                    <div class="sm_megamenu_head_item">
                                                                                        <div class="sm_megamenu_title  ">
                                                                                            <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear.html"  ></a>
                                                                                            <div class="sm_megamenu_title">
                                                                                                <h3 class="sm_megamenu_nodrop  title-cat">Swim Gear</h3>
                                                                                            </div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/women-s-swimwear.html" ><span class="sm_megamenu_title_lv-4">Women's Swimwear</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/men-s-swimwear.html" ><span class="sm_megamenu_title_lv-4">Men's Swimwear</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/kid-s-swimwear.html" ><span class="sm_megamenu_title_lv-4">Kid's Swimwear</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/swim-accessories.html" ><span class="sm_megamenu_title_lv-4">Swim Accessories</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/umbrella-raincoat.html" ><span class="sm_megamenu_title_lv-4">Umbrella & Raincoat</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/other-outdoor-gear.html" ><span class="sm_megamenu_title_lv-4">Other Outdoor Gear</span></a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-link="" class="sm_megamenu_col_3    ">
                                                                        <div class="sm_megamenu_head_item">
                                                                            <div class="sm_megamenu_title  ">
                                                                                <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    margin-bottom">
                                                                                    <div class="sm_megamenu_head_item">
                                                                                        <div class="sm_megamenu_title  ">
                                                                                            <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear.html"  ></a>
                                                                                            <div class="sm_megamenu_title">
                                                                                                <h3 class="sm_megamenu_nodrop  title-cat">Cycling Gear</h3>
                                                                                            </div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-protective-gears.html" ><span class="sm_megamenu_title_lv-4">Cycling Protective Gears</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-accessories.html" ><span class="sm_megamenu_title_lv-4">Cycling Accessories</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-clothing.html" ><span class="sm_megamenu_title_lv-4">Cycling Clothing</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/bicycles-frames.html" ><span class="sm_megamenu_title_lv-4">Bicycles Frames</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/bicycle-lights.html" ><span class="sm_megamenu_title_lv-4">Bicycle Lights</span></a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                                                    <div class="sm_megamenu_head_item">
                                                                                        <div class="sm_megamenu_title  ">
                                                                                            <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear.html"  ></a>
                                                                                            <div class="sm_megamenu_title">
                                                                                                <h3 class="sm_megamenu_nodrop  title-cat">Swim Gear</h3>
                                                                                            </div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/women-s-swimwear.html" ><span class="sm_megamenu_title_lv-4">Women's Swimwear</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/men-s-swimwear.html" ><span class="sm_megamenu_title_lv-4">Men's Swimwear</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/kid-s-swimwear.html" ><span class="sm_megamenu_title_lv-4">Kid's Swimwear</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/swim-accessories.html" ><span class="sm_megamenu_title_lv-4">Swim Accessories</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/umbrella-raincoat.html" ><span class="sm_megamenu_title_lv-4">Umbrella & Raincoat</span></a></div>
                                                                                            <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/other-outdoor-gear.html" ><span class="sm_megamenu_title_lv-4">Other Outdoor Gear</span></a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets.html"  id="sm_megamenu_269">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Dresses</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/dresses.html"  id="sm_megamenu_270">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Jumpsuits</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop sm_megamenu_haschild" href="http://magento2.flytheme.net/themes/sm_smarket/default/t-shirts.html"  id="sm_megamenu_275">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Trousers & Jeans</span>
                                          </span>
                                                </a>
                                                <div class="sm-megamenu-child sm_megamenu_dropdown_4columns ">
                                                    <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_4 sm_megamenu_firstcolumn    ">
                                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_3    margin-bottom">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle.html"  ></a>
                                                                    <div class="sm_megamenu_title">
                                                                        <h3 class="sm_megamenu_nodrop  title-cat">Motorcycle</h3>
                                                                    </div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/diagnostic-tools.html" ><span class="sm_megamenu_title_lv-2">Diagnostic Tools</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/motorcycle-fairings.html" ><span class="sm_megamenu_title_lv-2">Motorcycle Fairings</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/car-gps-accessories.html" ><span class="sm_megamenu_title_lv-2">Car GPS & Accessories</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/car-dvrs.html" ><span class="sm_megamenu_title_lv-2">Car DVRs</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/car-electronics.html" ><span class="sm_megamenu_title_lv-2">Car Electronics</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/car-decals-stickers.html" ><span class="sm_megamenu_title_lv-2">Car Decals & Stickers</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/car-lighting.html" ><span class="sm_megamenu_title_lv-2">Car Lighting</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/car-parts-exterior-accessories.html" ><span class="sm_megamenu_title_lv-2">Car Parts & Exterior Accessories</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/motorcycle-helmets.html" ><span class="sm_megamenu_title_lv-2">Motorcycle Helmets</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/motorcyle-lighting.html" ><span class="sm_megamenu_title_lv-2">Motorcyle Lighting</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/motorcycle-accessories.html" ><span class="sm_megamenu_title_lv-2">Motorcycle Accessories</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle/car-interior-accessories.html" ><span class="sm_megamenu_title_lv-2">Car Interior Accessories</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_3 sm_megamenu_firstcolumn    margin-bottom">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/car-accessories.html"  ></a>
                                                                    <div class="sm_megamenu_title">
                                                                        <h3 class="sm_megamenu_nodrop  title-cat">Car Accessories</h3>
                                                                    </div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/car-accessories/car-chargers-adapters.html" ><span class="sm_megamenu_title_lv-2">Car Chargers & Adapters</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/car-accessories/car-decorations.html" ><span class="sm_megamenu_title_lv-2">Car Decorations</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/car-accessories/car-thermometers.html" ><span class="sm_megamenu_title_lv-2">Car Thermometers</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_3 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle-gadgets.html"  ></a>
                                                                    <div class="sm_megamenu_title">
                                                                        <h3 class="sm_megamenu_nodrop  title-cat">Motorcycle Gadgets</h3>
                                                                    </div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle-gadgets/motorcycle-gear.html" ><span class="sm_megamenu_title_lv-2">Motorcycle Gear</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle-gadgets/motorcycle-lights.html" ><span class="sm_megamenu_title_lv-2">Motorcycle Lights</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle-gadgets/motorcycle-decorations.html" ><span class="sm_megamenu_title_lv-2">Motorcycle Decorations</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle-gadgets/motorcycle-parts-accessories.html" ><span class="sm_megamenu_title_lv-2">Motorcycle Parts & Accessories</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle-gadgets/mirrors.html" ><span class="sm_megamenu_title_lv-2">Mirrors</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/bags-shoes/motorcycle-gadgets/other-gadgets.html" ><span class="sm_megamenu_title_lv-2">Other Gadgets</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/shop.html"  id="sm_megamenu_276">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Sports</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/shop.html"  id="sm_megamenu_277">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Sunglasses</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits.html"  id="sm_megamenu_271">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Furniture</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear.html"  id="sm_megamenu_272">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">T-Shirts</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets.html"  id="sm_megamenu_278">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Cameras</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/apparel.html"  id="sm_megamenu_273">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Shorts</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/t-shirts.html"  id="sm_megamenu_274">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Flashlights</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets.html"  id="sm_megamenu_279">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Gifts</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/shop.html"  id="sm_megamenu_280">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Apparel</span>
                                          </span>
                                                </a>
                                            <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                                <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/dresses.html"  id="sm_megamenu_281">
                                          <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                          <span class="sm_megamenu_title">Bags & Shoes</span>
                                          </span>
                                                </a>
                                        </ul>
                                    </div>
                                </nav>
                                <script type="text/javascript">
                                    require(["jquery", "mage/template"], function($) {
                                        var menu_width = $('.sm_megamenu_wrapper_horizontal_menu').width();
                                        $('.sm_megamenu_wrapper_horizontal_menu .sm_megamenu_menu > li > div').each(function () {
                                            $this = $(this);
                                            var lv2w = $this.width();
                                            var lv2ps = $this.position();
                                            var lv2psl = $this.position().left;
                                            var sw = lv2w + lv2psl;
                                            if (sw > menu_width) {
                                                $this.css({'right': '0'});
                                            }
                                        });
                                        var _item_active = $('div.sm_megamenu_actived');
                                        if(_item_active.length){
                                            _item_active.each(function(){
                                                var _self = $(this), _parent_active =  _self.parents('.sm_megamenu_title') ,_level1 = _self.parents('.sm_megamenu_lv1');
                                                if(_parent_active.length  ){
                                                    _parent_active.each(function(){
                                                        if(!$(this).hasClass('sm_megamenu_actived'))
                                                            $(this).addClass('sm_megamenu_actived');
                                                    });
                                                }

                                                if(_level1.length && !_level1.hasClass('sm_megamenu_actived')){
                                                    _level1.addClass('sm_megamenu_actived');
                                                }
                                            });
                                        }
                                    });
                                </script>
                                <script type="text/javascript">
                                    require([
                                        'jquery',
                                        'domReady!'
                                    ], function ($) {
                                        var limit;
                                        limit = 9;
                                        var i;
                                        i=0;
                                        var items;
                                        items = $('.sm_megamenu_wrapper_vertical_menu .sm_megamenu_menu > li').length;

                                        if(items > limit){
                                            $('.sm_megamenu_wrapper_vertical_menu .sambar-inner').append('<div class="more-w"><span class="more-view">More Categories</span></div>');

                                            $('.sm_megamenu_wrapper_vertical_menu .sm_megamenu_menu > li').each(function(){
                                                i++;
                                                if( i > limit ){
                                                    $(this).css('display', 'none');
                                                }
                                            });

                                            $('.sm_megamenu_wrapper_vertical_menu .sambar-inner .more-w > .more-view').click(function(){
                                                if($(this).hasClass('open')){
                                                    i=0;
                                                    $('.sm_megamenu_wrapper_vertical_menu .sm_megamenu_menu > li').each(function(){
                                                        i++;
                                                        if(i>limit){
                                                            $(this).slideUp(200);
                                                        }
                                                    });
                                                    $(this).removeClass('open');
                                                    $('.more-w').removeClass('active-i');
                                                    $(this).text('More Categories');
                                                }else{
                                                    i=0;
                                                    $('.sm_megamenu_wrapper_vertical_menu ul.sm_megamenu_menu > li').each(function(){
                                                        i++;
                                                        if(i>limit){
                                                            $(this).slideDown(200);
                                                        }
                                                    });
                                                    $(this).addClass('open');
                                                    $('.more-w').addClass('active-i');
                                                    $(this).text('Close Menu');
                                                }
                                            });

                                        }

                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-mobile-container">
                        <!--COLLAPSE-->
                        <!--SIDEBAR-->
                        <div class="nav-mobile-container sidebar-type">
                            <div class="btn-mobile">
                                <a id="sidebar-button" class="button-mobile sidebar-nav" title="Categories"><i class="fa fa-bars"></i><span class="hidden">Categories</span></a>
                            </div>
                            <nav class="navigation-mobile">
                                <ul>
                                    <li  class="level0 nav-1 first level-top parent">
                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/shop.html"  class="level-top" ><span>shop</span></a>
                                        <ul class="level0 submenu">
                                            <li  class="level1 nav-1-1 first"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/shop/women-s-clothing.html" ><span>Clothing</span></a></li>
                                            <li  class="level1 nav-1-2"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/shop/headphones-headsets.html" ><span>Backpack</span></a></li>
                                            <li  class="level1 nav-1-3 last"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/shop/leather-shoes.html" ><span>Leather Shoes</span></a></li>
                                        </ul>
                                    </li>
                                    <li  class="level0 nav-2 level-top parent">
                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear.html"  class="level-top" ><span>Outerwear</span></a>
                                        <ul class="level0 submenu">
                                            <li  class="level1 nav-2-1 first parent">
                                                <a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear.html" ><span> Gear</span></a>
                                                <ul class="level1 submenu">
                                                    <li  class="level2 nav-2-1-1 first"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/hammock.html" ><span>Hammock</span></a></li>
                                                    <li  class="level2 nav-2-1-2"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/telescope.html" ><span>Telescope</span></a></li>
                                                    <li  class="level2 nav-2-1-3"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/hat.html" ><span>Hat</span></a></li>
                                                    <li  class="level2 nav-2-1-4"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/tent.html" ><span>Tent</span></a></li>
                                                    <li  class="level2 nav-2-1-5 last"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/sleeping-bag.html" ><span>Sleeping Bag</span></a></li>
                                                </ul>
                                            </li>
                                            <li  class="level1 nav-2-2 parent">
                                                <a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear.html" ><span>Swim Gear</span></a>
                                                <ul class="level1 submenu">
                                                    <li  class="level2 nav-2-2-1 first"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/women-s-swimwear.html" ><span>Women's Swimwear</span></a></li>
                                                    <li  class="level2 nav-2-2-2"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/men-s-swimwear.html" ><span>Men's Swimwear</span></a></li>
                                                    <li  class="level2 nav-2-2-3"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/kid-s-swimwear.html" ><span>Kid's Swimwear</span></a></li>
                                                    <li  class="level2 nav-2-2-4"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/swim-accessories.html" ><span>Swim Accessories</span></a></li>
                                                    <li  class="level2 nav-2-2-5"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/umbrella-raincoat.html" ><span>Umbrella &amp; Raincoat</span></a></li>
                                                    <li  class="level2 nav-2-2-6 last"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/other-outdoor-gear.html" ><span>Other Outdoor Gear</span></a></li>
                                                </ul>
                                            </li>
                                            <li  class="level1 nav-2-3 last parent">
                                                <a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear.html" ><span>Cycling Gear</span></a>
                                                <ul class="level1 submenu">
                                                    <li  class="level2 nav-2-3-1 first"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-protective-gears.html" ><span>Cycling Protective Gears</span></a></li>
                                                    <li  class="level2 nav-2-3-2"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-accessories.html" ><span>Cycling Accessories</span></a></li>
                                                    <li  class="level2 nav-2-3-3"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-clothing.html" ><span>Cycling Clothing</span></a></li>
                                                    <li  class="level2 nav-2-3-4"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/bicycles-frames.html" ><span>Bicycles Frames</span></a></li>
                                                    <li  class="level2 nav-2-3-5 last"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/bicycle-lights.html" ><span>Bicycle Lights</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li  class="level0 nav-3 level-top parent">
                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets.html"  class="level-top" ><span>Jackets</span></a>
                                        <ul class="level0 submenu">
                                            <li  class="level1 nav-3-1 first"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/bath-body.html" ><span>Bath &amp; Body</span></a></li>
                                            <li  class="level1 nav-3-2"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/shaving-hair-removal.html" ><span>Shaving &amp; Hair Removal</span></a></li>
                                            <li  class="level1 nav-3-3"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/fragrances.html" ><span>Fragrances</span></a></li>
                                            <li  class="level1 nav-3-4 last"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/salon-spa-equipment.html" ><span>Salon &amp; Spa Equipment</span></a></li>
                                        </ul>
                                    </li>
                                    <li  class="level0 nav-4 level-top parent">
                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/dresses.html"  class="level-top" ><span>Dresses</span></a>
                                        <ul class="level0 submenu">
                                            <li  class="level1 nav-4-1 first"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/dresses/walkera.html" ><span>Walkera</span></a></li>
                                            <li  class="level1 nav-4-2"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/dresses/fpv-system-parts.html" ><span>FPV system &amp; Parts</span></a></li>
                                            <li  class="level1 nav-4-3"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/dresses/rc-cars-parts.html" ><span>RC Cars &amp; Parts</span></a></li>
                                            <li  class="level1 nav-4-4 last"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/dresses/helicopters-parts.html" ><span>Helicopters &amp; Parts</span></a></li>
                                        </ul>
                                    </li>
                                    <li  class="level0 nav-5 level-top parent">
                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits.html"  class="level-top" ><span>Jumpsuits</span></a>
                                        <ul class="level0 submenu">
                                            <li  class="level1 nav-5-1 first"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits/living-room.html" ><span>Living room</span></a></li>
                                            <li  class="level1 nav-5-2"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits/out-door.html" ><span>Out door</span></a></li>
                                            <li  class="level1 nav-5-3"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits/kitchens.html" ><span>Kitchens</span></a></li>
                                            <li  class="level1 nav-5-4"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits/lighting.html" ><span>Lighting</span></a></li>
                                            <li  class="level1 nav-5-5"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits/sofa-chair.html" ><span>Sofa &amp; Chair</span></a></li>
                                            <li  class="level1 nav-5-6"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits/office.html" ><span>Office</span></a></li>
                                            <li  class="level1 nav-5-7"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits/bathroom.html" ><span>Bathroom</span></a></li>
                                            <li  class="level1 nav-5-8 last"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/jumpsuits/hot-items.html" ><span>Hot Items</span></a></li>
                                        </ul>
                                    </li>
                                    <li  class="level0 nav-6 level-top"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/about-us.html"  class="level-top" ><span>About Us</span></a></li>
                                    <li  class="level0 nav-7 level-top"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/contact-us.html"  class="level-top" ><span>Contact Us</span></a></li>
                                    <li  class="level0 nav-8 last level-top"><a href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/"  class="level-top" ><span>Blog</span></a></li>
                                </ul>
                            </nav>
                            <script type="text/javascript">
                                require([
                                    'jquery'
                                ], function ($) {
                                    $('#sidebar-button').click(function(){
                                        $('body').toggleClass('navbar-active');
                                        $(this).toggleClass('active');
                                    });

                                    $('.navigation-mobile > ul li').has('ul').append( '<span class="touch-button"><span>open</span></span>' );

                                    $('.touch-button').click(function(){
                                        $(this).prev().slideToggle(200);
                                        $(this).toggleClass('active');
                                        $(this).parent().toggleClass('parent-active');
                                    });

                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 hidden-sm hidden-xs main-megamenu">
                    <nav class="sm_megamenu_wrapper_horizontal_menu sambar" id="sm_megamenu_menu59d5b0d813baf" data-sam="17384230801507176664">
                        <div class="sambar-inner">
                           <span class="btn-sambar" data-sapi="collapse" data-href="#sm_megamenu_menu59d5b0d813baf">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           </span>
                            <ul class="sm-megamenu-hover sm_megamenu_menu sm_megamenu_menu_black" data-jsapi="on">
                                <li class="home-item-parent other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                    <a class="sm_megamenu_head sm_megamenu_drop sm_megamenu_haschild" href="javascript:void(0)"  id="sm_megamenu_285">
                                 <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                 <span class="sm_megamenu_title">Home</span>
                                 </span>
                                    </a>
                                    <div class="sm-megamenu-child sm_megamenu_dropdown_6columns ">
                                        <div data-link="" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    home-item">
                                            <div data-link="" class="sm_megamenu_col_6    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <div class="sm_megamenu_content">
                                                            <div class="mega-home-content">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-4 feature-column">
                                                                        <h3 class="feature-title">Layouts</h3>
                                                                        <ul>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/default">Homepage Default</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/french">Layout Boxed</a></li>
                                                                        </ul>
                                                                        <h3 class="feature-title">Listing Layouts</h3>
                                                                        <ul>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/french/jackets.html">Without Sidebar</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/shop.html">Left Sidebar</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/french/dresses.html">Right Sidebar</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/french/jumpsuits.html">Left - Right Sidebar</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 feature-column">
                                                                        <h3 class="feature-title">Detail Layouts</h3>
                                                                        <ul>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/tikam-sacen-facen-bonzan.html">Product Detail - Full</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/saceam-mirea-dacema-giren.html">Product Detail - Left Sidebar</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/gima-sere-maze-dumas.html">Product Detail - Right Sidebar</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/saceam-mirea-dacema-giren.html">Thumb Horizontal</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/german/saceam-mirea-dacema-giren.html">Thumb Vertical</a></li>
                                                                        </ul>
                                                                        <h3 class="feature-title">Tab Types</h3>
                                                                        <ul>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren.html">Horizontal</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/french/saceam-mirea-dacema-giren.html">Vertical</a></li>
                                                                            <li><a href="http://magento2.flytheme.net/themes/sm_smarket/german/saceam-mirea-dacema-giren.html">Accordion</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-4 feature-column">
                                                                        <h3 class="feature-title">page Bonus</h3>
                                                                        <ul class="page-list">
                                                                            <li><a title="Pricing" href="http://magento2.flytheme.net/themes/sm_smarket/default/pricing/">Pricing</a></li>
                                                                            <li><a title="Team" href="http://magento2.flytheme.net/themes/sm_smarket/default/team/">Team</a></li>
                                                                            <li><a title="Categories" href="http://magento2.flytheme.net/themes/sm_smarket/default/categories-page/">Categories</a></li>
                                                                            <li><a title="FAQ" href="http://magento2.flytheme.net/themes/sm_smarket/default/faqs/">FAQ</a></li>
                                                                            <li><a title="Search" href="http://magento2.flytheme.net/themes/sm_smarket/default/popular-search/">Search</a></li>
                                                                            <li><a title="Sitemap Categories" href="http://magento2.flytheme.net/themes/sm_smarket/default/site-map/">Sitemap Categories</a></li>
                                                                            <li><a title="Country" href="http://magento2.flytheme.net/themes/sm_smarket/default/country-support/">Country</a></li>
                                                                            <li><a title="Testimonials" href="http://magento2.flytheme.net/themes/sm_smarket/default/testimonials/">Testimonials</a></li>
                                                                            <li><a title="Typography" href="http://magento2.flytheme.net/themes/sm_smarket/default/typography/">Typography</a></li>
                                                                            <li><a title="Newsletter Popup" href="http://magento2.flytheme.net/themes/sm_smarket/default/popup-newsletter/">Newsletter Popup</a></li>
                                                                            <li><a title="Partners" href="http://magento2.flytheme.net/themes/sm_smarket/default/partners/">Partners</a></li>
                                                                            <li><a title="Event" href="http://magento2.flytheme.net/themes/sm_smarket/default/events/">Event</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="drop-border-parent other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                    <a class="sm_megamenu_head sm_megamenu_drop sm_megamenu_haschild" href="http://magento2.flytheme.net/themes/sm_smarket/default/shop.html"  id="sm_megamenu_286">
                                 <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                 <span class="sm_megamenu_title">Shop</span>
                                 </span>
                                    </a>
                                    <div class="sm-megamenu-child sm_megamenu_dropdown_6columns ">
                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    drop-border">
                                            <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_2    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear.html"  ></a>
                                                        <div class="sm_megamenu_title">
                                                            <h3 class="sm_megamenu_nodrop  title-cat"> Gear</h3>
                                                        </div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/hammock.html" ><span class="sm_megamenu_title_lv-2">Hammock</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/telescope.html" ><span class="sm_megamenu_title_lv-2">Telescope</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/hat.html" ><span class="sm_megamenu_title_lv-2">Hat</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/tent.html" ><span class="sm_megamenu_title_lv-2">Tent</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/sleeping-bag.html" ><span class="sm_megamenu_title_lv-2">Sleeping Bag</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_2    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear.html"  ></a>
                                                        <div class="sm_megamenu_title">
                                                            <h3 class="sm_megamenu_nodrop  title-cat">Swim Gear</h3>
                                                        </div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/women-s-swimwear.html" ><span class="sm_megamenu_title_lv-2">Women's Swimwear</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/men-s-swimwear.html" ><span class="sm_megamenu_title_lv-2">Men's Swimwear</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/kid-s-swimwear.html" ><span class="sm_megamenu_title_lv-2">Kid's Swimwear</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/swim-accessories.html" ><span class="sm_megamenu_title_lv-2">Swim Accessories</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/swim-gear/umbrella-raincoat.html" ><span class="sm_megamenu_title_lv-2">Umbrella & Raincoat</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_2    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear.html"  ></a>
                                                        <div class="sm_megamenu_title">
                                                            <h3 class="sm_megamenu_nodrop  title-cat">Cycling Gear</h3>
                                                        </div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-protective-gears.html" ><span class="sm_megamenu_title_lv-2">Cycling Protective Gears</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-accessories.html" ><span class="sm_megamenu_title_lv-2">Cycling Accessories</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/cycling-clothing.html" ><span class="sm_megamenu_title_lv-2">Cycling Clothing</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/bicycles-frames.html" ><span class="sm_megamenu_title_lv-2">Bicycles Frames</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/cycling-gear/bicycle-lights.html" ><span class="sm_megamenu_title_lv-2">Bicycle Lights</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_2 sm_megamenu_firstcolumn    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear.html"  ></a>
                                                        <div class="sm_megamenu_title">
                                                            <h3 class="sm_megamenu_nodrop  title-cat"> Gear</h3>
                                                        </div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/hammock.html" ><span class="sm_megamenu_title_lv-2">Hammock</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/telescope.html" ><span class="sm_megamenu_title_lv-2">Telescope</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/hat.html" ><span class="sm_megamenu_title_lv-2">Hat</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/tent.html" ><span class="sm_megamenu_title_lv-2">Tent</span></a></div>
                                                        <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear/gear/sleeping-bag.html" ><span class="sm_megamenu_title_lv-2">Sleeping Bag</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                    <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/under-price"  id="sm_megamenu_288">
                                 <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                 <span class="sm_megamenu_title">Under $100</span>
                                 </span>
                                    </a>
                                <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                    <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear.html"  id="sm_megamenu_287">
                                 <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                 <span class="sm_megamenu_title">Outerwear</span>
                                 </span>
                                    </a>
                                <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                    <a class="sm_megamenu_head sm_megamenu_drop sm_megamenu_haschild" href="http://magento2.flytheme.net/themes/sm_smarket/default/outerwear.html"  id="sm_megamenu_289">
                                 <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                 <span class="sm_megamenu_title">Collection</span>
                                 </span>
                                    </a>
                                    <div class="sm-megamenu-child sm_megamenu_dropdown_6columns ">
                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                            <div data-link="" class="sm_megamenu_col_2    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <div data-link="" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <div class="sm_megamenu_content"><a href="#" class="banner2"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/mega-menu/1.jpg" alt="Static Image" /></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets.html"  ></a>
                                                                    <div class="sm_megamenu_title">
                                                                        <h3 class="sm_megamenu_nodrop  title-cat">Jackets</h3>
                                                                    </div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/bath-body.html" ><span class="sm_megamenu_title_lv-3">Bath & Body</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/shaving-hair-removal.html" ><span class="sm_megamenu_title_lv-3">Shaving & Hair Removal</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/fragrances.html" ><span class="sm_megamenu_title_lv-3">Fragrances</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/salon-spa-equipment.html" ><span class="sm_megamenu_title_lv-3">Salon & Spa Equipment</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-link="" class="sm_megamenu_col_2    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <div data-link="" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <div class="sm_megamenu_content"><a href="#" class="banner2"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/mega-menu/2.jpg" alt="Static Image" /></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets.html"  ></a>
                                                                    <div class="sm_megamenu_title">
                                                                        <h3 class="sm_megamenu_nodrop  title-cat">Jackets</h3>
                                                                    </div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/bath-body.html" ><span class="sm_megamenu_title_lv-3">Bath & Body</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/shaving-hair-removal.html" ><span class="sm_megamenu_title_lv-3">Shaving & Hair Removal</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/fragrances.html" ><span class="sm_megamenu_title_lv-3">Fragrances</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/salon-spa-equipment.html" ><span class="sm_megamenu_title_lv-3">Salon & Spa Equipment</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-link="" class="sm_megamenu_col_2    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <div data-link="" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <div class="sm_megamenu_content"><a href="#" class="banner2"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/mega-menu/3.jpg" alt="Static Image" /></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets.html"  ></a>
                                                                    <div class="sm_megamenu_title">
                                                                        <h3 class="sm_megamenu_nodrop  title-cat">Jackets</h3>
                                                                    </div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/bath-body.html" ><span class="sm_megamenu_title_lv-3">Bath & Body</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/shaving-hair-removal.html" ><span class="sm_megamenu_title_lv-3">Shaving & Hair Removal</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/fragrances.html" ><span class="sm_megamenu_title_lv-3">Fragrances</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/salon-spa-equipment.html" ><span class="sm_megamenu_title_lv-3">Salon & Spa Equipment</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-link="" class="sm_megamenu_col_2 sm_megamenu_firstcolumn    ">
                                                <div class="sm_megamenu_head_item">
                                                    <div class="sm_megamenu_title  ">
                                                        <div data-link="" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <div class="sm_megamenu_content"><a href="#" class="banner2"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/mega-menu/4.jpg" alt="Static Image" /></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div data-link="http://magento2.flytheme.net/themes/sm_smarket/default" class="sm_megamenu_col_6 sm_megamenu_firstcolumn    ">
                                                            <div class="sm_megamenu_head_item">
                                                                <div class="sm_megamenu_title  ">
                                                                    <a  class="sm_megamenu_nodrop " href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets.html"  ></a>
                                                                    <div class="sm_megamenu_title">
                                                                        <h3 class="sm_megamenu_nodrop  title-cat">Jackets</h3>
                                                                    </div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/bath-body.html" ><span class="sm_megamenu_title_lv-3">Bath & Body</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/shaving-hair-removal.html" ><span class="sm_megamenu_title_lv-3">Shaving & Hair Removal</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/fragrances.html" ><span class="sm_megamenu_title_lv-3">Fragrances</span></a></div>
                                                                    <div class="sm_megamenu_title "><a class="sm_megamenu_nodrop" href="http://magento2.flytheme.net/themes/sm_smarket/default/jackets/salon-spa-equipment.html" ><span class="sm_megamenu_title_lv-3">Salon & Spa Equipment</span></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                    <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/about-us.html"  id="sm_megamenu_291">
                                 <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                 <span class="sm_megamenu_title">About Us</span>
                                 </span>
                                    </a>
                                <li class="other-toggle 							sm_megamenu_lv1 sm_megamenu_drop parent    ">
                                    <a class="sm_megamenu_head sm_megamenu_drop " href="http://magento2.flytheme.net/themes/sm_smarket/default/contact-us.html"  id="sm_megamenu_290">
                                 <span class="sm_megamenu_icon sm_megamenu_nodesc">
                                 <span class="sm_megamenu_title">Contact Us</span>
                                 </span>
                                    </a>
                            </ul>
                        </div>
                    </nav>
                    <script type="text/javascript">
                        require(["jquery", "mage/template"], function($) {
                            var menu_width = $('.sm_megamenu_wrapper_horizontal_menu').width();
                            $('.sm_megamenu_wrapper_horizontal_menu .sm_megamenu_menu > li > div').each(function () {
                                $this = $(this);
                                var lv2w = $this.width();
                                var lv2ps = $this.position();
                                var lv2psl = $this.position().left;
                                var sw = lv2w + lv2psl;
                                if (sw > menu_width) {
                                    $this.css({'right': '0'});
                                }
                            });
                            var _item_active = $('div.sm_megamenu_actived');
                            if(_item_active.length){
                                _item_active.each(function(){
                                    var _self = $(this), _parent_active =  _self.parents('.sm_megamenu_title') ,_level1 = _self.parents('.sm_megamenu_lv1');
                                    if(_parent_active.length  ){
                                        _parent_active.each(function(){
                                            if(!$(this).hasClass('sm_megamenu_actived'))
                                                $(this).addClass('sm_megamenu_actived');
                                        });
                                    }

                                    if(_level1.length && !_level1.hasClass('sm_megamenu_actived')){
                                        _level1.addClass('sm_megamenu_actived');
                                    }
                                });
                            }
                            $(' .sm_megamenu_wrapper_horizontal_menu li.home-item-parent > a.sm_megamenu_head ').attr('href', 'http://magento2.flytheme.net/themes/sm_smarket/default/');
                        });
                    </script>
                    <div class="black-friday pull-right hidden-xs hidden-sm hidden-md"><a class="special" href="http://magento2.flytheme.net/themes/sm_smarket/default/daily-deals/">Special Offer!</a> <a class="buzz" href="#">Black Friday</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="display-popup" style="display:none;">
        <div id="newsletter-popup">
            <div class="promotional-popup">
                <div class="pop-subscribe">
                    <form class="form subscribe"
                          novalidate
                          action="http://magento2.flytheme.net/themes/sm_smarket/default/newsletter/subscriber/new/"
                          method="post"
                          data-mage-init='{"validation": {"errorClass": "mage-error"}}'
                          id="newsletter-validate-detail">
                        <div class="w-newsletter">
                            <div class="newsletter-info">
                                <h3 class="title">Sign Up For Newsletter</h3>
                                <div class="short-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et<br />dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                                <div class="form-newsletter-popup">
                                    <div class="input-box">
                                        <input name="email" type="email" id="newsletter" class="input-text" onfocus="if(this.value=='Your email address') this.value='';" onblur="if(this.value=='') this.value='Your email address';" value="Your email address" data-validate="{required:true, 'validate-email':true}"/>
                                    </div>
                                    <div class="action-newsletter">
                                        <button class="action subscribe primary" title="Subscribe" type="submit">
                                            <span>Subscribe</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="subscribe-bottom">
                                    <div id="uniform-dont-show-again" class="checker"><span><input id="dont-show-again" type="checkbox"></span></div>
                                    <label for="dont-show-again">Don't show this popup again</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        require([
            'jquery',
            'jquerycookie',
            'jqueryfancyboxpack'
        ], function ($) {
            var check_cookie = jQuery.cookie('newsletter_popup');
            if(check_cookie == null || check_cookie == 'shown') {
                popupNewsletter();
            }
            jQuery('#newsletter-popup .subscribe-bottom input').on('click', function(){
                if(jQuery(this).parent().find('input:checked').length){
                    var check_cookie = jQuery.cookie('newsletter_popup');
                    if(check_cookie == null || check_cookie == 'shown') {
                        jQuery.cookie('newsletter_popup','dontshowitagain');
                    }
                    else
                    {
                        jQuery.cookie('newsletter_popup','shown');
                        popupNewsletter();
                    }
                } else {
                    jQuery.cookie('newsletter_popup','shown');
                }
            });
        });

        function popupNewsletter() {
            jQuery(document).ready(function($) {
                $.fancybox.open('#newsletter-popup');
            });
        };
    </script>
    <main id="maincontent" class="page-main">
        <a id="contentarea" tabindex="-1"></a>
        <div class="columns col1-layout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="page messages">
                            <div data-placeholder="messages"></div>
                            <div data-bind="scope: 'messages'">
                                <div data-bind="foreach: { data: cookieMessages, as: 'message' }" class="messages">
                                    <div data-bind="attr: {
                                    class: 'message-' + message.type + ' ' + message.type + ' message',
                                    'data-ui-id': 'message-' + message.type
                                    }">
                                        <div data-bind="html: message.text"></div>
                                    </div>
                                </div>
                                <div data-bind="foreach: { data: messages().messages, as: 'message' }" class="messages">
                                    <div data-bind="attr: {
                                    class: 'message-' + message.type + ' ' + message.type + ' message',
                                    'data-ui-id': 'message-' + message.type
                                    }">
                                        <div data-bind="html: message.text"></div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/x-magento-init">
                              {
                                  "*": {
                                      "Magento_Ui/js/core/app": {
                                          "components": {
                                                  "messages": {
                                                      "component": "Magento_Theme/js/view/messages"
                                                  }
                                              }
                                          }
                                      }
                              }
                           </script>
                        </div>
                        <div class="column main">
                            <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />
                            <div id="authenticationPopup" data-bind="scope:'authenticationPopup'" style="display: none;">
                                <script>
                                    window.authenticationPopup = {"customerRegisterUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/customer\/account\/create\/","customerForgotPasswordUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/customer\/account\/forgotpassword\/","baseUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/"};
                                </script>
                                <!-- ko template: getTemplate() --><!-- /ko -->
                                <script type="text/x-magento-init">
                                 {
                                     "#authenticationPopup": {
                                         "Magento_Ui/js/core/app": {"components":{"authenticationPopup":{"component":"Magento_Customer\/js\/view\/authentication-popup","children":{"messages":{"component":"Magento_Ui\/js\/view\/messages","displayArea":"messages"},"captcha":{"component":"Magento_Captcha\/js\/view\/checkout\/loginCaptcha","displayArea":"additional-login-form-fields","formId":"user_login","configSource":"checkout"}}}}}            },
                                     "*": {
                                         "Magento_Ui/js/block-loader": "http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/loader-1.gif"
                                     }
                                 }
                              </script>
                            </div>
                            <script type="text/x-magento-init">
                              {"*":{"Magento_Customer\/js\/section-config":{"sections":{"stores\/store\/switch":"*","directory\/currency\/switch":"*","*":["messages"],"customer\/account\/logout":"*","customer\/account\/loginpost":"*","customer\/account\/createpost":"*","customer\/ajax\/login":["checkout-data","cart"],"catalog\/product_compare\/add":["compare-products"],"catalog\/product_compare\/remove":["compare-products"],"catalog\/product_compare\/clear":["compare-products"],"sales\/guest\/reorder":["cart"],"sales\/order\/reorder":["cart"],"checkout\/cart\/add":["cart"],"checkout\/cart\/delete":["cart"],"checkout\/cart\/updatepost":["cart"],"checkout\/cart\/updateitemoptions":["cart"],"checkout\/cart\/couponpost":["cart"],"checkout\/cart\/estimatepost":["cart"],"checkout\/cart\/estimateupdatepost":["cart"],"checkout\/onepage\/saveorder":["cart","checkout-data","last-ordered-items"],"checkout\/sidebar\/removeitem":["cart"],"checkout\/sidebar\/updateitemqty":["cart"],"rest\/*\/v1\/carts\/*\/payment-information":["cart","checkout-data","last-ordered-items"],"rest\/*\/v1\/guest-carts\/*\/payment-information":["cart","checkout-data"],"rest\/*\/v1\/guest-carts\/*\/selected-payment-method":["cart","checkout-data"],"rest\/*\/v1\/carts\/*\/selected-payment-method":["cart","checkout-data"],"multishipping\/checkout\/overviewpost":["cart"],"paypal\/express\/placeorder":["cart","checkout-data"],"paypal\/payflowexpress\/placeorder":["cart","checkout-data"],"review\/product\/post":["review"],"authorizenet\/directpost_payment\/place":["cart","checkout-data"],"braintree\/paypal\/placeorder":["cart","checkout-data"],"wishlist\/index\/add":["wishlist"],"wishlist\/index\/remove":["wishlist"],"wishlist\/index\/updateitemoptions":["wishlist"],"wishlist\/index\/update":["wishlist"],"wishlist\/index\/cart":["wishlist","cart"],"wishlist\/index\/fromcart":["wishlist","cart"],"wishlist\/index\/allcart":["wishlist","cart"],"wishlist\/shared\/allcart":["wishlist","cart"],"wishlist\/shared\/cart":["cart"],"cartquickpro\/cart\/add":["cart"],"cartquickpro\/cart\/delete":["cart"],"cartquickpro\/sidebar\/removeitem":["cart"],"cartquickpro\/sidebar\/updateitemqty":["cart"],"cartquickpro\/cart\/updateitemoptions":["cart"],"cartquickpro\/product_compare\/add":["compare-products"],"cartquickpro\/product_compare\/remove":["compare-products"],"cartquickpro\/product_compare\/clear":["compare-products"],"cartquickpro\/wishlist_index\/add":["wishlist"],"cartquickpro\/wishlist_index\/remove":["wishlist"],"cartquickpro\/wishlist_index\/updateitemoptions":["wishlist"],"cartquickpro\/wishlist_index\/update":["wishlist"],"cartquickpro\/wishlist_index\/cart":["wishlist","cart"],"cartquickpro\/wishlist_index\/fromcart":["cart","checkout-data","wishlist"],"cartquickpro\/wishlist_index\/allcart":["wishlist","cart"]},"clientSideSections":["checkout-data"],"baseUrls":["http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/"]}}}
                           </script>
                            <script type="text/x-magento-init">
                              {"*":{"Magento_Customer\/js\/customer-data":{"sectionLoadUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/customer\/section\/load\/","cookieLifeTime":"3600","updateSessionUrl":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/customer\/account\/updateSession\/"}}}
                           </script>
                            <script type="text/x-magento-init">
                              {
                                  "body": {
                                      "pageCache": {"url":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/page_cache\/block\/render\/","handles":["default","cms_index_index","cms_page_view","cms_index_index_id_home-demo-01"],"originalRequest":{"route":"cms","controller":"index","action":"index","uri":"\/themes\/sm_smarket\/default"},"versionCookieName":"private_content_version"}        }
                              }
                           </script>
                            <div class="section1">
                                <div class="row">
                                    <div class="col-md-9 wrapper-slider">
                                        <div class="slidershow-home owl-carousel">
                                            <div class="item"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/slide1.jpg" alt="" /></div>
                                            <div class="item"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/slide2.jpg" alt="" /></div>
                                            <div class="item"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/slide3.jpg" alt="" /></div>
                                        </div>
                                        <script type="text/javascript" xml="space">
                                            require([
                                                'jquery',
                                                'owlcarousel'
                                            ], function ($) {
                                                $(".slidershow-home").owlCarousel({
                                                    nav: false,
                                                    dots:true,
                                                    margin: 30,
                                                    items:1
                                                });
                                            });
                                        </script>
                                    </div>
                                    <div class="col-md-3 hidden-sm hidden-xs  wrapper-banner"><a class="banner mr10" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/1.jpg" alt="" /></a> <a class="banner mr10" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/2.jpg" alt="" /></a> <a class="banner mr10" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/3.jpg" alt="" /></a></div>
                                </div>
                            </div>
                            <div class="section2 mr30">
                                <div class="block sm-filter-products">
                                    <div class="title-home">
                                        <h3>today deals</h3>
                                    </div>
                                    <div id="filterproducts_0" class="slider-wrapper-grid slider-wrapper products-grid">
                                        <div class="owl-carousel block-content-products product-slider block-content-slider">
                                            <div class="item product product-item product-item-info">
                                                <div class="item-inner clearfix">
                                                    <div class="box-image ">
                                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html" class="product photo product-item-photo" tabindex="-1">
                                                <span class="product-image-container">
                                                <span class="product-image-wrapper">
                                                <img class="product-image-photo"
                                                     src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/1/11_4.jpg"
                                                     width="235"
                                                     height="235"
                                                     alt="Toma kimas darem motram"/>
                                                </span>
                                                </span>
                                                        </a>
                                                        <!--LABEL PRODUCT-->
                                                        <div class="label-product label-sale"><span class="sale-product-icon">-29%</span></div>
                                                        <div class="label-product label-new">
                                                            <span class="new-product-icon">New</span>
                                                        </div>
                                                        <!--END LABEL PRODUCT-->
                                                    </div>
                                                    <div class="product details product-item-details box-info ">
                                                        <div class="product-reviews-summary short empty">
                                                            <div class="reviews-actions">
                                                                <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html#review-form">
                                                                    Be the first to review this product        </a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product name product-item-name product-name">
                                                            <a class="product-item-link"
                                                               href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html">
                                                                Toma kimas darem motram								</a>
                                                        </h2>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="2624">
                                                   <span class="special-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Special Price</span>
                                                   <span  id="product-price-2624"                data-price-amount="60"
                                                          data-price-type="finalPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$60.00</span>    </span>
                                                   </span>
                                                   </span>
                                                            <span class="old-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Regular Price</span>
                                                   <span  id="old-price-2624"                data-price-amount="84"
                                                          data-price-type="oldPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$84.00</span>    </span>
                                                   </span>
                                                   </span>
                                                        </div>
                                                        <div class="bottom-action">
                                                            <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2624/" method="post">
                                                                <input type="hidden" name="product" value="2624">
                                                                <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNC8,">
                                                                <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />											<button type="submit"
                                                                                                                                                                                    title="Add to Cart"
                                                                                                                                                                                    class="action tocart primary  btn-cart">
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </form>
                                                            <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2624","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                <span>Add to Wish List</span>
                                                            </a>
                                                            <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2624","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                <span>Add to Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="deals-countdown clearfix" data-timer="2019/08/04 00:00:00"></div>
                                                </div>
                                            </div>
                                            <div class="item product product-item product-item-info">
                                                <div class="item-inner clearfix">
                                                    <div class="box-image ">
                                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html" class="product photo product-item-photo" tabindex="-1">
                                                <span class="product-image-container">
                                                <span class="product-image-wrapper">
                                                <img class="product-image-photo"
                                                     src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/3/13_4.jpg"
                                                     width="235"
                                                     height="235"
                                                     alt="Suretin mipen ruma pasen"/>
                                                </span>
                                                </span>
                                                        </a>
                                                        <!--LABEL PRODUCT-->
                                                        <div class="label-product label-sale"><span class="sale-product-icon">-27%</span></div>
                                                        <div class="label-product label-new">
                                                            <span class="new-product-icon">New</span>
                                                        </div>
                                                        <!--END LABEL PRODUCT-->
                                                    </div>
                                                    <div class="product details product-item-details box-info ">
                                                        <div class="product-reviews-summary short empty">
                                                            <div class="reviews-actions">
                                                                <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html#review-form">
                                                                    Be the first to review this product        </a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product name product-item-name product-name">
                                                            <a class="product-item-link"
                                                               href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html">
                                                                Suretin mipen ruma pasen								</a>
                                                        </h2>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="2625">
                                                   <span class="special-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Special Price</span>
                                                   <span  id="product-price-2625"                data-price-amount="40"
                                                          data-price-type="finalPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$40.00</span>    </span>
                                                   </span>
                                                   </span>
                                                            <span class="old-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Regular Price</span>
                                                   <span  id="old-price-2625"                data-price-amount="55"
                                                          data-price-type="oldPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$55.00</span>    </span>
                                                   </span>
                                                   </span>
                                                        </div>
                                                        <div class="bottom-action">
                                                            <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2625/" method="post">
                                                                <input type="hidden" name="product" value="2625">
                                                                <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNS8,">
                                                                <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />											<button type="submit"
                                                                                                                                                                                    title="Add to Cart"
                                                                                                                                                                                    class="action tocart primary  btn-cart">
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </form>
                                                            <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2625","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                <span>Add to Wish List</span>
                                                            </a>
                                                            <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2625","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                <span>Add to Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="deals-countdown clearfix" data-timer="2019/08/04 00:00:00"></div>
                                                </div>
                                            </div>
                                            <div class="item product product-item product-item-info">
                                                <div class="item-inner clearfix">
                                                    <div class="box-image ">
                                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-5.html" class="product photo product-item-photo" tabindex="-1">
                                                <span class="product-image-container">
                                                <span class="product-image-wrapper">
                                                <img class="product-image-photo"
                                                     src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/4/14_5.jpg"
                                                     width="235"
                                                     height="235"
                                                     alt="Xatem mitrum facen pizane"/>
                                                </span>
                                                </span>
                                                        </a>
                                                        <!--LABEL PRODUCT-->
                                                        <div class="label-product label-sale"><span class="sale-product-icon">-49%</span></div>
                                                        <div class="label-product label-new">
                                                            <span class="new-product-icon">New</span>
                                                        </div>
                                                        <!--END LABEL PRODUCT-->
                                                    </div>
                                                    <div class="product details product-item-details box-info ">
                                                        <div class="product-reviews-summary short empty">
                                                            <div class="reviews-actions">
                                                                <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-5.html#review-form">
                                                                    Be the first to review this product        </a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product name product-item-name product-name">
                                                            <a class="product-item-link"
                                                               href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-5.html">
                                                                Xatem mitrum facen pizane								</a>
                                                        </h2>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="2626">
                                                   <span class="special-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Special Price</span>
                                                   <span  id="product-price-2626"                data-price-amount="45"
                                                          data-price-type="finalPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$45.00</span>    </span>
                                                   </span>
                                                   </span>
                                                            <span class="old-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Regular Price</span>
                                                   <span  id="old-price-2626"                data-price-amount="89"
                                                          data-price-type="oldPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$89.00</span>    </span>
                                                   </span>
                                                   </span>
                                                        </div>
                                                        <div class="bottom-action">
                                                            <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2626/" method="post">
                                                                <input type="hidden" name="product" value="2626">
                                                                <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNi8,">
                                                                <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />											<button type="submit"
                                                                                                                                                                                    title="Add to Cart"
                                                                                                                                                                                    class="action tocart primary  btn-cart">
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </form>
                                                            <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2626","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                <span>Add to Wish List</span>
                                                            </a>
                                                            <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2626","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                <span>Add to Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="deals-countdown clearfix" data-timer="2019/08/10 00:00:00"></div>
                                                </div>
                                            </div>
                                            <div class="item product product-item product-item-info">
                                                <div class="item-inner clearfix">
                                                    <div class="box-image ">
                                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/juma-rema-pola-mazen.html" class="product photo product-item-photo" tabindex="-1">
                                                <span class="product-image-container">
                                                <span class="product-image-wrapper">
                                                <img class="product-image-photo"
                                                     src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/8/_/8_4.jpg"
                                                     width="235"
                                                     height="235"
                                                     alt="Juma rema pola mazen"/>
                                                </span>
                                                </span>
                                                        </a>
                                                        <!--LABEL PRODUCT-->
                                                        <div class="label-product label-sale"><span class="sale-product-icon">-38%</span></div>
                                                        <div class="label-product label-new">
                                                            <span class="new-product-icon">New</span>
                                                        </div>
                                                        <!--END LABEL PRODUCT-->
                                                    </div>
                                                    <div class="product details product-item-details box-info ">
                                                        <div class="product-reviews-summary short empty">
                                                            <div class="reviews-actions">
                                                                <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/juma-rema-pola-mazen.html#review-form">
                                                                    Be the first to review this product        </a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product name product-item-name product-name">
                                                            <a class="product-item-link"
                                                               href="http://magento2.flytheme.net/themes/sm_smarket/default/juma-rema-pola-mazen.html">
                                                                Juma rema pola mazen								</a>
                                                        </h2>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="2627">
                                                   <span class="special-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Special Price</span>
                                                   <span  id="product-price-2627"                data-price-amount="40"
                                                          data-price-type="finalPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$40.00</span>    </span>
                                                   </span>
                                                   </span>
                                                            <span class="old-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Regular Price</span>
                                                   <span  id="old-price-2627"                data-price-amount="65"
                                                          data-price-type="oldPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$65.00</span>    </span>
                                                   </span>
                                                   </span>
                                                        </div>
                                                        <div class="bottom-action">
                                                            <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2627/" method="post">
                                                                <input type="hidden" name="product" value="2627">
                                                                <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNy8,">
                                                                <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />											<button type="submit"
                                                                                                                                                                                    title="Add to Cart"
                                                                                                                                                                                    class="action tocart primary  btn-cart">
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </form>
                                                            <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2627","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                <span>Add to Wish List</span>
                                                            </a>
                                                            <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2627","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                <span>Add to Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="deals-countdown clearfix" data-timer="2019/08/25 00:00:00"></div>
                                                </div>
                                            </div>
                                            <div class="item product product-item product-item-info">
                                                <div class="item-inner clearfix">
                                                    <div class="box-image ">
                                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/jasem-dima-pkase-mase.html" class="product photo product-item-photo" tabindex="-1">
                                                <span class="product-image-container">
                                                <span class="product-image-wrapper">
                                                <img class="product-image-photo"
                                                     src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/7/_/7_5.jpg"
                                                     width="235"
                                                     height="235"
                                                     alt="Jasem dima pkase mase"/>
                                                </span>
                                                </span>
                                                        </a>
                                                        <!--LABEL PRODUCT-->
                                                        <div class="label-product label-sale"><span class="sale-product-icon">-14%</span></div>
                                                        <div class="label-product label-new">
                                                            <span class="new-product-icon">New</span>
                                                        </div>
                                                        <!--END LABEL PRODUCT-->
                                                    </div>
                                                    <div class="product details product-item-details box-info ">
                                                        <div class="product-reviews-summary short empty">
                                                            <div class="reviews-actions">
                                                                <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/jasem-dima-pkase-mase.html#review-form">
                                                                    Be the first to review this product        </a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product name product-item-name product-name">
                                                            <a class="product-item-link"
                                                               href="http://magento2.flytheme.net/themes/sm_smarket/default/jasem-dima-pkase-mase.html">
                                                                Jasem dima pkase mase								</a>
                                                        </h2>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="2628">
                                                   <span class="special-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Special Price</span>
                                                   <span  id="product-price-2628"                data-price-amount="60"
                                                          data-price-type="finalPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$60.00</span>    </span>
                                                   </span>
                                                   </span>
                                                            <span class="old-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Regular Price</span>
                                                   <span  id="old-price-2628"                data-price-amount="70"
                                                          data-price-type="oldPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$70.00</span>    </span>
                                                   </span>
                                                   </span>
                                                        </div>
                                                        <div class="bottom-action">
                                                            <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2628/" method="post">
                                                                <input type="hidden" name="product" value="2628">
                                                                <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyOC8,">
                                                                <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />											<button type="submit"
                                                                                                                                                                                    title="Add to Cart"
                                                                                                                                                                                    class="action tocart primary  btn-cart">
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </form>
                                                            <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2628","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                <span>Add to Wish List</span>
                                                            </a>
                                                            <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2628","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                <span>Add to Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="deals-countdown clearfix" data-timer="2019/08/08 00:00:00"></div>
                                                </div>
                                            </div>
                                            <div class="item product product-item product-item-info">
                                                <div class="item-inner clearfix">
                                                    <div class="box-image ">
                                                        <a href="http://magento2.flytheme.net/themes/sm_smarket/default/fumase-dame-ruma-polam.html" class="product photo product-item-photo" tabindex="-1">
                                                <span class="product-image-container">
                                                <span class="product-image-wrapper">
                                                <img class="product-image-photo"
                                                     src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/9/-/9-1.jpg"
                                                     width="235"
                                                     height="235"
                                                     alt="Fumase dame ruma polam"/>
                                                </span>
                                                </span>
                                                        </a>
                                                        <!--LABEL PRODUCT-->
                                                        <div class="label-product label-sale"><span class="sale-product-icon">-35%</span></div>
                                                        <div class="label-product label-new">
                                                            <span class="new-product-icon">New</span>
                                                        </div>
                                                        <!--END LABEL PRODUCT-->
                                                    </div>
                                                    <div class="product details product-item-details box-info ">
                                                        <div class="product-reviews-summary short empty">
                                                            <div class="reviews-actions">
                                                                <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/fumase-dame-ruma-polam.html#review-form">
                                                                    Be the first to review this product        </a>
                                                            </div>
                                                        </div>
                                                        <h2 class="product name product-item-name product-name">
                                                            <a class="product-item-link"
                                                               href="http://magento2.flytheme.net/themes/sm_smarket/default/fumase-dame-ruma-polam.html">
                                                                Fumase dame ruma polam								</a>
                                                        </h2>
                                                        <div class="price-box price-final_price" data-role="priceBox" data-product-id="2629">
                                                   <span class="special-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Special Price</span>
                                                   <span  id="product-price-2629"                data-price-amount="55"
                                                          data-price-type="finalPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$55.00</span>    </span>
                                                   </span>
                                                   </span>
                                                            <span class="old-price">
                                                   <span class="price-container price-final_price tax weee"
                                                   >
                                                   <span class="price-label">Regular Price</span>
                                                   <span  id="old-price-2629"                data-price-amount="85"
                                                          data-price-type="oldPrice"
                                                          class="price-wrapper "
                                                   >
                                                   <span class="price">$85.00</span>    </span>
                                                   </span>
                                                   </span>
                                                        </div>
                                                        <div class="bottom-action">
                                                            <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2629/" method="post">
                                                                <input type="hidden" name="product" value="2629">
                                                                <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyOS8,">
                                                                <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />											<button type="submit"
                                                                                                                                                                                    title="Add to Cart"
                                                                                                                                                                                    class="action tocart primary  btn-cart">
                                                                    <span>Add to Cart</span>
                                                                </button>
                                                            </form>
                                                            <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2629","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                <span>Add to Wish List</span>
                                                            </a>
                                                            <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2629","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                <span>Add to Compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="deals-countdown clearfix" data-timer="2019/08/24 00:00:00"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    require([
                                        'jquery'
                                    ], function ($) {
                                        var $element = $('#filterproducts_0');

                                        function CountDown(date,id){
                                            dateNow = new Date();
                                            amount = date.getTime() - dateNow.getTime();
                                            delete dateNow;
                                            if(amount < 0){
                                                id.html("Now!");
                                            } else{
                                                days=0;hours=0;mins=0;secs=0;out="";
                                                amount = Math.floor(amount/1000);
                                                days=Math.floor(amount/86400);
                                                amount=amount%86400;
                                                hours=Math.floor(amount/3600);
                                                amount=amount%3600;
                                                mins=Math.floor(amount/60);
                                                amount=amount%60;
                                                secs=Math.floor(amount);
                                                out += "<div class='deals-time time-day'><div class='num-time'>"+ days +"</div><div class='title-time'>"+((days==1)?"Day":"Days")+"</div></div>";
                                                out += "<div class='deals-time time-hours'><div class='num-time'>"+ hours +"</div><div class='title-time'>"+((hours==1)?"Hour":"Hours")+"</div></div>";
                                                out += "<div class='deals-time time-mins'><div class='num-time'>"+ mins +"</div><div class='title-time'>"+((mins==1)?"Min":"Mins")+"</div></div>";
                                                out += "<div class='deals-time time-secs'><div class='num-time'>"+ secs +"</div><div class='title-time'>"+((secs==1)?"Sec":"Secs")+"</div></div>";
                                                out = out.substr(0,out.length-2);
                                                id.html(out);
                                                setTimeout(function(){CountDown(date,id)}, 1000);
                                            }
                                        }
                                        $( ".deals-countdown",$element).each(function() {
                                            var timer = $(this).data('timer');
                                            var data = new Date(timer);
                                            CountDown(data,$(this));
                                        });
                                    });
                                </script>
                                <script type="text/x-magento-init">
                                 {
                                     "[data-role=tocart-form], .form.map.checkout": {
                                         "catalogAddToCart": {}
                                     }
                                 }
                              </script>
                            </div>
                            <script type="text/javascript" xml="space">
                                require([
                                    'jquery',
                                    'owlcarousel'
                                ], function ($) {
                                    $(".sm-filter-products .owl-carousel").owlCarousel({
                                        nav: true,
                                        dots:false,
                                        margin:0,
                                        responsive: {
                                            0: {
                                                items: 1
                                            },
                                            480: {
                                                items: 2
                                            },
                                            768: {
                                                items: 3
                                            },
                                            991: {
                                                items: 4
                                            },
                                            1200: {
                                                items: 5
                                            }
                                        }
                                    });
                                });
                            </script>
                            <div class="section3 mr30"><a class="banner" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/4.jpg" alt="" /></a></div>
                            <div class="section4">
                                <div id="sm_listing_tabs_listingtabs_0" class="block sm-listing-tabs ltabs-loading-first slidertype">
                                    <div class="ltabs-loading-css">
                                        <div class="cssload-loader">
                                            <div class="cssload-inner cssload-one"></div>
                                            <div class="cssload-inner cssload-two"></div>
                                            <div class="cssload-inner cssload-three"></div>
                                        </div>
                                    </div>
                                    <div class="title-home">
                                        <h3>Weekly Best Sellers</h3>
                                    </div>
                                    <div class="ltabs-wrap">
                                        <div class="ltabs-tabs-container"
                                             data-ajaxurl="http://magento2.flytheme.net/themes/sm_smarket/default/listingtabs/index/index"
                                             data-modid="listingtabs_0">
                                            <!--Begin Tabs-->
                                            <div class="ltabs-tabs-wrap" tabindex="-1">
                                                <span class="ltabs-current-select"></span>
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab   tab-sel tab-loaded  "
                                                        data-tab-id="97" data-catids="97,185,186,187,188">
                                                <span
                                                        class="ltabs-tab-label">
                                                shop				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="98" data-catids="98,164,165,166,167,168,169,170,171,172,173,174,175,176,177,180,181,182,183,184">
                                                <span
                                                        class="ltabs-tab-label">
                                                Outerwear				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="99" data-catids="99,189,190,191,192">
                                                <span
                                                        class="ltabs-tab-label">
                                                Jackets				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="100" data-catids="100,201,202,203,204">
                                                <span
                                                        class="ltabs-tab-label">
                                                Dresses				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="101" data-catids="101,212,213,214,215,216,217,218,222">
                                                <span
                                                        class="ltabs-tab-label">
                                                Jumpsuits				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="102" data-catids="102">
                                                <span
                                                        class="ltabs-tab-label">
                                                Shorts				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="103" data-catids="103,197,198,199,200">
                                                <span
                                                        class="ltabs-tab-label">
                                                T-Shirts				</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Tabs-->
                                        <div class="ltabs-items-container ">
                                            <!--Begin Items-->
                                            <div class="ltabs-items  ltabs-items-selected ltabs-items-loaded  ltabs-items-97">
                                                <div class="ltabs-items-inner">
                                                    <div class="grid products-grid">
                                                        <div class="products list items product-items   owl-carousel "  >
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/_/1.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Saceam mirea dacema giren"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren.html">
                                                                                    Saceam mirea dacema giren								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2595">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span  id="product-price-2595"                data-price-amount="100"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$100.00</span>    </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2595/" method="post">
                                                                                    <input type="hidden" name="product" value="2595">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjU5NS8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2595","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2595","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/french/tikam-sacen-facen-bonzan.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/2/_/2_1.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Tikam sacen facen bonzan"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/french/tikam-sacen-facen-bonzan.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/french/tikam-sacen-facen-bonzan.html">
                                                                                    Tikam sacen facen bonzan								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2596">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span  id="product-price-2596"                data-price-amount="90"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$90.00</span>    </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2596/" method="post">
                                                                                    <input type="hidden" name="product" value="2596">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjU5Ni8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2596","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2596","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/gima-sere-maze-dumas.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/3/_/3_2.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Gima sere maze dumas"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/gima-sere-maze-dumas.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/gima-sere-maze-dumas.html">
                                                                                    Gima sere maze dumas								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2597">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span  id="product-price-2597"                data-price-amount="65"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$65.00</span>    </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2597/" method="post">
                                                                                    <input type="hidden" name="product" value="2597">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjU5Ny8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2597","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2597","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/benin/configurable-product.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/4/_/4_3.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Configurable Product"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/benin/configurable-product.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/benin/configurable-product.html">
                                                                                    Configurable Product								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2618">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span  id="product-price-2618"                data-price-amount="100"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$100.00</span>    </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/benin/configurable-product.html?options=cart" method="post">
                                                                                    <input type="hidden" name="product" value="2618">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9iZW5pbi9jb25maWd1cmFibGUtcHJvZHVjdC5odG1sP29wdGlvbnM9Y2FydA,,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2618","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2618","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/1/11_4.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Toma kimas darem motram"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <div class="label-product label-sale"><span class="sale-product-icon">-29%</span></div>
                                                                            <div class="label-product label-new">
                                                                                <span class="new-product-icon">New</span>
                                                                            </div>
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html">
                                                                                    Toma kimas darem motram								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2624">
                                                                  <span class="special-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Special Price</span>
                                                                  <span  id="product-price-2624"                data-price-amount="60"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$60.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                                <span class="old-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Regular Price</span>
                                                                  <span  id="old-price-2624"                data-price-amount="84"
                                                                         data-price-type="oldPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$84.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2624/" method="post">
                                                                                    <input type="hidden" name="product" value="2624">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNC8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2624","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2624","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/3/13_4.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Suretin mipen ruma pasen"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <div class="label-product label-sale"><span class="sale-product-icon">-27%</span></div>
                                                                            <div class="label-product label-new">
                                                                                <span class="new-product-icon">New</span>
                                                                            </div>
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html">
                                                                                    Suretin mipen ruma pasen								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2625">
                                                                  <span class="special-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Special Price</span>
                                                                  <span  id="product-price-2625"                data-price-amount="40"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$40.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                                <span class="old-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Regular Price</span>
                                                                  <span  id="old-price-2625"                data-price-amount="55"
                                                                         data-price-type="oldPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$55.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2625/" method="post">
                                                                                    <input type="hidden" name="product" value="2625">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNS8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2625","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2625","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-98">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-99">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-100">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-101">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-102">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-103">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Items-->
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    require(['jquery' , 'owlcarousel'], function ($) {
                                        ;(function (element) {
                                            var el = $(element),
                                                tabs_wrap = $('.ltabs-tabs-wrap',el),
                                                tab = $('.ltabs-tab', el),
                                                tab_active = $('.ltabs-tab.tab-sel .ltabs-tab-label',tabs_wrap),
                                                tab_content = $('.ltabs-items', el),
                                                ajax_url = $('.ltabs-tabs-container', el).attr('data-ajaxurl'),
                                                btn_loadmore = $('.ltabs-loadmore-btn', el),
                                                type_loadmore = false,
                                                place_holder_tab = $('.ltabs-current-select', el),
                                                nb_column1 = 1, nb_column2 = 2, nb_column3 = 3, nb_column4 = 4, nb_column5 = 5, margin = 0; stagePadding = 0;





                                            var _interval = setInterval(function() {
                                                if(document.readyState === 'complete') {
                                                    clearInterval(_interval);
                                                    el.removeClass('ltabs-loading-first');
                                                    _runAllScript();
                                                }
                                            }, 500);
                                            function _runAllScript () {
                                                place_holder_tab.text(tab_active.text());
                                                tabs_wrap.on('click', function(e){
                                                    e.preventDefault();
                                                    var _that = $(this);
                                                    _that.toggleClass('active');
                                                    return false;
                                                });
                                                tab.off('click').on('click', function (e) {
                                                    e.preventDefault();
                                                    var _self = $(this);
                                                    if (_self.hasClass('tab-sel')) return false;
                                                    tab.removeClass('tab-sel');
                                                    _self.addClass('tab-sel');
                                                    place_holder_tab.text($('.ltabs-tab-label', _self).text());
                                                    var tab_id = _self.attr('data-tab-id'),
                                                        catids = _self.attr('data-catids'),
                                                        items_active = $('.ltabs-items-'+tab_id, el),
                                                        loading = $('.ltabs-loading', items_active),
                                                        loaded = items_active.hasClass('ltabs-items-loaded');
                                                    tab_content.removeClass('ltabs-items-selected');
                                                    items_active.addClass('ltabs-items-selected');

                                                    if (!loaded && !items_active.hasClass('ltabs-process')) {
                                                        items_active.addClass('ltabs-process');
                                                        loading.show();
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: ajax_url,
                                                            data: {
                                                                is_ajax_listing_tabs: 1,
                                                                ajax_listingtabs_start: 0,
                                                                tab_id: tab_id,
                                                                catids: catids,
                                                                config: 'eyJpc2FjdGl2ZSI6IjEiLCJ0aXRsZSI6IldlZWtseSBCZXN0IFNlbGxlcnMiLCJ0eXBlX3Nob3ciOiJzbGlkZXIiLCJ0eXBlX2xpc3RpbmciOiJhbGwiLCJ1bmRlcl9wcmljZSI6IjQuOTkiLCJkaXNwbGF5X2NvdW50ZG93biI6IjAiLCJkaXNwbGF5X3RpdGxlIjoiMSIsInRhcmdldCI6Il9zZWxmIiwiY2xhc3Nfc3VmZml4Ijoic21fbGlzdGluZ3RhYiIsInNob3dfbG9hZG1vcmVfc2xpZGVyIjoic2xpZGVyIiwibmJfY29sdW1uMSI6IjQiLCJuYl9jb2x1bW4yIjoiMyIsIm5iX2NvbHVtbjMiOiIzIiwibmJfY29sdW1uNCI6IjIiLCJuYl9jb2x1bW41IjoiMSIsIm5iX3Jvd3MiOiIxIiwidHlwZV9maWx0ZXIiOiJjYXRlZ29yaWVzIiwiZmllbGRfdGFicyI6Im5hbWUiLCJjYXRlZ29yeV90YWJzIjoiOTcsOTgsOTksMTAwLDEwMSwxMDIsMTAzIiwib3JkZXJfYnkiOiJjcmVhdGVkX2F0Iiwib3JkZXJfZGlyIjoiQVNDIiwibGltaXRhdGlvbiI6IjYiLCJmaWx0ZXJfdHlwZSI6ImNhdGVnb3JpZXMiLCJwcm9kdWN0X2NhdGVnb3J5IjoiOTcsOTgsMTAzIiwiZmlsdGVyX29yZGVyX2J5IjoibGFzdGVzdF9wcm9kdWN0IiwiY2hpbGRfY2F0ZWdvcnlfcHJvZHVjdHMiOiIwIiwibWF4X2RlcHRoIjoiMTIiLCJwcm9kdWN0X2ZlYXR1cmVkIjoiMCIsInByb2R1Y3Rfb3JkZXJfZGlyIjoiQVNDIiwicHJvZHVjdF9saW1pdGF0aW9uIjoiOCIsImNhdGVnb3J5X3ByZWxvYWQiOiI5NyIsInByb2R1Y3Rfb3JkZXJfYnkiOiJiZXN0X3NhbGVzIiwidGFiX2FsbF9kaXNwbGF5IjoiMCIsImNhdF90aXRsZV9tYXhsZW5ndGgiOiIxNTAiLCJjYXRlZ29yeV9vcmRlcl9ieSI6Im5hbWUiLCJjYXRlZ29yeV9vcmRlcl9kaXIiOiJBU0MiLCJpY29uX2Rpc3BsYXkiOiIwIiwiaW1nY2ZnY2F0X29yZGVyIjoiY2F0ZWdvcnlfaW1hZ2UsY2F0ZWdvcnlfZGVzY3JpcHRpb24iLCJpbWdjZmdjYXRfZnVuY3Rpb24iOiIxIiwiaW1nY2ZnY2F0X3dpZHRoIjoiMzAiLCJpbWdjZmdjYXRfaGVpZ2h0IjoiMzAiLCJpbWdjZmdjYXRfYmFja2dyb3VuZCI6IkZGRkZGRiIsImltZ2NmZ2NhdF9wbGFjZWhvbGRlciI6InNtXC9saXN0aW5ndGFic1wvaW1hZ2VzXC9ub3Bob3RvLmpwZyIsImltZ2NmZ2NhdF9mcm9tX2NhdGVnb3J5X2ltYWdlIjoiMSIsImltZ2NmZ2NhdF9mcm9tX2NhdGVnb3J5X2Rlc2NyaXB0aW9uIjoiMSIsInByb2R1Y3RfdGl0bGVfZGlzcGxheSI6IjEiLCJwcm9kdWN0X3RpdGxlX21heGxlbmd0aCI6IjI1IiwicHJvZHVjdF9kZXNjcmlwdGlvbl9kaXNwbGF5IjoiMCIsInByb2R1Y3RfZGVzY3JpcHRpb25fbWF4bGVuZ3RoIjoiMTUwIiwicHJvZHVjdF9wcmljZV9kaXNwbGF5IjoiMSIsInByb2R1Y3RfcmV2aWV3c19jb3VudCI6IjEiLCJwcm9kdWN0X2FkZGNhcnRfZGlzcGxheSI6IjEiLCJwcm9kdWN0X2FkZHdpc2hsaXN0X2Rpc3BsYXkiOiIxIiwicHJvZHVjdF9hZGRjb21wYXJlX2Rpc3BsYXkiOiIxIiwicHJvZHVjdF9yZWFkbW9yZV9kaXNwbGF5IjoiMCIsInByb2R1Y3RfcmVhZG1vcmVfdGV4dCI6IkRldGFpbHMiLCJpbWdfZnJvbV9wcm9kdWN0X2ltYWdlIjoiMSIsImltZ19mcm9tX3Byb2R1Y3RfZGVzY3JpcHRpb24iOiIxIiwiaW1nX29yZGVyIjoicHJvZHVjdF9pbWFnZSwgcHJvZHVjdF9kZXNjcmlwdGlvbiIsImltZ19mdW5jdGlvbiI6IjEiLCJpbWdfd2lkdGgiOiIyNzAiLCJpbWdfaGVpZ2h0IjoiMjcwIiwiaW1nX2JhY2tncm91bmQiOiJGRkZGRkYiLCJpbWdfcmVwbGFjZW1lbnQiOiJzbVwvbGlzdGluZ3RhYnNcL2ltYWdlc1wvbm9waG90by5qcGciLCJlZmZlY3QiOiJmYWRlSW4iLCJkdXJhdGlvbiI6IjIwMCIsImRlbGF5IjoiNDAwIiwibmF2IjoiMSIsImxvb3AiOiIwIiwibWFyZ2luIjoiMzAiLCJzbGlkZUJ5IjoiMSIsImF1dG9wbGF5IjoiMCIsImF1dG9wbGF5SG92ZXJQYXVzZSI6IjEiLCJhdXRvcGxheVNwZWVkIjoiMTAwMCIsIm5hdlNwZWVkIjoiMTAwMCIsInN0YXJ0UG9zaXRpb24iOiIwIiwibW91c2VEcmFnIjoiMSIsInRvdWNoRHJhZyI6IjEiLCJ1c2VfY2FjaGUiOiIwIiwiY2FjaGVfdGltZSI6IjM2MDAiLCJjbGFzcyI6IlNtXFxMaXN0aW5nVGFic1xcQmxvY2tcXExpc3RpbmdUYWJzIiwibmFtZSI6Imxpc3Rpbmd0YWJzLmRlZmF1bHQiLCJhcyI6Imxpc3Rpbmd0YWJzX2RlZmF1bHQiLCJ0ZW1wbGF0ZSI6IlNtX0xpc3RpbmdUYWJzOjpkZWZhdWx0LnBodG1sIn0'
                                                            },
                                                            success: function (data) {
                                                                if (data.items_markup != '') {
                                                                    $('.ltabs-items-inner', items_active).html(data.items_markup);
                                                                    items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
                                                                    if (type_loadmore){
                                                                        $('.product-item', items_active).removeAttr('style');
                                                                        $('.product-items', items_active).removeClass('play');
                                                                        $('.product-item', items_active).addClass('ltabs-mark');
                                                                        animatesItems(items_active);
                                                                    }else{
                                                                        _runOwlCarousel(items_active);
                                                                    }
                                                                    $(document).trigger("afterAjaxProductsLoaded");
                                                                    loading.remove();
                                                                    updateStatus(items_active);
                                                                }
                                                            },
                                                            dataType: 'json'
                                                        });

                                                    }else{
                                                        if (type_loadmore){
                                                            $('.product-item', items_active).removeAttr('style');
                                                            $('.product-items', items_active).removeClass('play');
                                                            $('.product-item', items_active).addClass('ltabs-mark');
                                                            animatesItems(items_active);
                                                        }else{
                                                            var owl = $('.owl-carousel' , items_active);
                                                            owl = owl.data('owlCarousel');
                                                            if (typeof owl !== 'undefined')
                                                                owl.onResize();
                                                            else{
                                                                _runOwlCarousel(items_active);
                                                            }

                                                        }
                                                    }
                                                });

                                                btn_loadmore.off('click').on('click', function (e) {
                                                    e.preventDefault();
                                                    var _self = $(this);
                                                    if (_self.hasClass('loaded') || _self.hasClass('loading')) {
                                                        return false;
                                                    } else {
                                                        _self.addClass('loading');
                                                        $('.ltabs-image-loading', _self).css({display: 'inline-block'});
                                                        var rl_start = _self.parent().attr('data-rl_start'),
                                                            catids = _self.parent().attr('data-catids'),
                                                            tab_id = _self.parent().attr('data-tab-id'),
                                                            items_active = $('.ltabs-items-'+tab_id, el);
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: ajax_url,
                                                            data: {
                                                                is_ajax_listing_tabs: 1,
                                                                ajax_listingtabs_start: rl_start,
                                                                tab_id: tab_id,
                                                                catids: catids,
                                                                config: 'eyJpc2FjdGl2ZSI6IjEiLCJ0aXRsZSI6IldlZWtseSBCZXN0IFNlbGxlcnMiLCJ0eXBlX3Nob3ciOiJzbGlkZXIiLCJ0eXBlX2xpc3RpbmciOiJhbGwiLCJ1bmRlcl9wcmljZSI6IjQuOTkiLCJkaXNwbGF5X2NvdW50ZG93biI6IjAiLCJkaXNwbGF5X3RpdGxlIjoiMSIsInRhcmdldCI6Il9zZWxmIiwiY2xhc3Nfc3VmZml4Ijoic21fbGlzdGluZ3RhYiIsInNob3dfbG9hZG1vcmVfc2xpZGVyIjoic2xpZGVyIiwibmJfY29sdW1uMSI6IjQiLCJuYl9jb2x1bW4yIjoiMyIsIm5iX2NvbHVtbjMiOiIzIiwibmJfY29sdW1uNCI6IjIiLCJuYl9jb2x1bW41IjoiMSIsIm5iX3Jvd3MiOiIxIiwidHlwZV9maWx0ZXIiOiJjYXRlZ29yaWVzIiwiZmllbGRfdGFicyI6Im5hbWUiLCJjYXRlZ29yeV90YWJzIjoiOTcsOTgsOTksMTAwLDEwMSwxMDIsMTAzIiwib3JkZXJfYnkiOiJjcmVhdGVkX2F0Iiwib3JkZXJfZGlyIjoiQVNDIiwibGltaXRhdGlvbiI6IjYiLCJmaWx0ZXJfdHlwZSI6ImNhdGVnb3JpZXMiLCJwcm9kdWN0X2NhdGVnb3J5IjoiOTcsOTgsMTAzIiwiZmlsdGVyX29yZGVyX2J5IjoibGFzdGVzdF9wcm9kdWN0IiwiY2hpbGRfY2F0ZWdvcnlfcHJvZHVjdHMiOiIwIiwibWF4X2RlcHRoIjoiMTIiLCJwcm9kdWN0X2ZlYXR1cmVkIjoiMCIsInByb2R1Y3Rfb3JkZXJfZGlyIjoiQVNDIiwicHJvZHVjdF9saW1pdGF0aW9uIjoiOCIsImNhdGVnb3J5X3ByZWxvYWQiOiI5NyIsInByb2R1Y3Rfb3JkZXJfYnkiOiJiZXN0X3NhbGVzIiwidGFiX2FsbF9kaXNwbGF5IjoiMCIsImNhdF90aXRsZV9tYXhsZW5ndGgiOiIxNTAiLCJjYXRlZ29yeV9vcmRlcl9ieSI6Im5hbWUiLCJjYXRlZ29yeV9vcmRlcl9kaXIiOiJBU0MiLCJpY29uX2Rpc3BsYXkiOiIwIiwiaW1nY2ZnY2F0X29yZGVyIjoiY2F0ZWdvcnlfaW1hZ2UsY2F0ZWdvcnlfZGVzY3JpcHRpb24iLCJpbWdjZmdjYXRfZnVuY3Rpb24iOiIxIiwiaW1nY2ZnY2F0X3dpZHRoIjoiMzAiLCJpbWdjZmdjYXRfaGVpZ2h0IjoiMzAiLCJpbWdjZmdjYXRfYmFja2dyb3VuZCI6IkZGRkZGRiIsImltZ2NmZ2NhdF9wbGFjZWhvbGRlciI6InNtXC9saXN0aW5ndGFic1wvaW1hZ2VzXC9ub3Bob3RvLmpwZyIsImltZ2NmZ2NhdF9mcm9tX2NhdGVnb3J5X2ltYWdlIjoiMSIsImltZ2NmZ2NhdF9mcm9tX2NhdGVnb3J5X2Rlc2NyaXB0aW9uIjoiMSIsInByb2R1Y3RfdGl0bGVfZGlzcGxheSI6IjEiLCJwcm9kdWN0X3RpdGxlX21heGxlbmd0aCI6IjI1IiwicHJvZHVjdF9kZXNjcmlwdGlvbl9kaXNwbGF5IjoiMCIsInByb2R1Y3RfZGVzY3JpcHRpb25fbWF4bGVuZ3RoIjoiMTUwIiwicHJvZHVjdF9wcmljZV9kaXNwbGF5IjoiMSIsInByb2R1Y3RfcmV2aWV3c19jb3VudCI6IjEiLCJwcm9kdWN0X2FkZGNhcnRfZGlzcGxheSI6IjEiLCJwcm9kdWN0X2FkZHdpc2hsaXN0X2Rpc3BsYXkiOiIxIiwicHJvZHVjdF9hZGRjb21wYXJlX2Rpc3BsYXkiOiIxIiwicHJvZHVjdF9yZWFkbW9yZV9kaXNwbGF5IjoiMCIsInByb2R1Y3RfcmVhZG1vcmVfdGV4dCI6IkRldGFpbHMiLCJpbWdfZnJvbV9wcm9kdWN0X2ltYWdlIjoiMSIsImltZ19mcm9tX3Byb2R1Y3RfZGVzY3JpcHRpb24iOiIxIiwiaW1nX29yZGVyIjoicHJvZHVjdF9pbWFnZSwgcHJvZHVjdF9kZXNjcmlwdGlvbiIsImltZ19mdW5jdGlvbiI6IjEiLCJpbWdfd2lkdGgiOiIyNzAiLCJpbWdfaGVpZ2h0IjoiMjcwIiwiaW1nX2JhY2tncm91bmQiOiJGRkZGRkYiLCJpbWdfcmVwbGFjZW1lbnQiOiJzbVwvbGlzdGluZ3RhYnNcL2ltYWdlc1wvbm9waG90by5qcGciLCJlZmZlY3QiOiJmYWRlSW4iLCJkdXJhdGlvbiI6IjIwMCIsImRlbGF5IjoiNDAwIiwibmF2IjoiMSIsImxvb3AiOiIwIiwibWFyZ2luIjoiMzAiLCJzbGlkZUJ5IjoiMSIsImF1dG9wbGF5IjoiMCIsImF1dG9wbGF5SG92ZXJQYXVzZSI6IjEiLCJhdXRvcGxheVNwZWVkIjoiMTAwMCIsIm5hdlNwZWVkIjoiMTAwMCIsInN0YXJ0UG9zaXRpb24iOiIwIiwibW91c2VEcmFnIjoiMSIsInRvdWNoRHJhZyI6IjEiLCJ1c2VfY2FjaGUiOiIwIiwiY2FjaGVfdGltZSI6IjM2MDAiLCJjbGFzcyI6IlNtXFxMaXN0aW5nVGFic1xcQmxvY2tcXExpc3RpbmdUYWJzIiwibmFtZSI6Imxpc3Rpbmd0YWJzLmRlZmF1bHQiLCJhcyI6Imxpc3Rpbmd0YWJzX2RlZmF1bHQiLCJ0ZW1wbGF0ZSI6IlNtX0xpc3RpbmdUYWJzOjpkZWZhdWx0LnBodG1sIn0'
                                                            },
                                                            success: function (data) {
                                                                if (data.items_markup != '') {
                                                                    $('.product-item',$(data.items_markup)).insertAfter($('.product-item:last-child', items_active));
                                                                    $('.ltabs-image-loading', _self).css({display: 'none'});
                                                                    animatesItems(items_active);
                                                                    updateStatus(items_active);
                                                                    $(document).trigger("afterAjaxProductsLoaded");
                                                                }
                                                            }, dataType: 'json'
                                                        });
                                                    }
                                                    return false;
                                                });

                                                function animatesItems(elem){
                                                    var _item = $('.product-item.ltabs-mark', elem);
                                                    _item.stop(true, true).each(function (i) {
                                                        var newDelay = i * 200,
                                                            duration = 400;
                                                        $(this).attr("style", "-webkit-animation-delay:" + newDelay + "ms; "
                                                            + "-moz-animation-delay:" + newDelay + "ms; "
                                                            + "-o-animation-delay:" + newDelay + "ms; "
                                                            + "animation-delay:" + newDelay + "ms; "
                                                            + "-webkit-animation-duration:" + duration + "ms;"
                                                            + "-moz-animation-duration:" + duration + "ms;"
                                                            + "-o-animation-duration:" + duration + "ms;"
                                                            + "animation-duration:" + duration + "ms;");
                                                        if (i == _item.size()-1) {
                                                            $('.product-items', elem).fadeIn(newDelay).addClass("play");
                                                            $('.product-item', elem).removeClass('ltabs-mark');
                                                        }
                                                    });
                                                }

                                                function updateStatus($el) {
                                                    $('.ltabs-loadmore-btn', $el).removeClass('loading');
                                                    var countitem = $('.product-item', $el).length;
                                                    $('.ltabs-image-loading', $el).css({display: 'none'});
                                                    $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                                                    var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
                                                    var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
                                                    var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');

                                                    if (countitem >= rl_total) {
                                                        $('.ltabs-loadmore-btn', $el).addClass('loaded');
                                                        $('.ltabs-image-loading', $el).css({display: 'none'});
                                                        $('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
                                                        $('.ltabs-loadmore-btn', $el).removeClass('loading');
                                                    }
                                                    _displayCountDown($el);
                                                }

                                                function _countDown(date,id){
                                                    dateNow = new Date();
                                                    amount = date.getTime() - dateNow.getTime();
                                                    delete dateNow;
                                                    if(amount < 0){
                                                        id.html("Now!");
                                                    } else{
                                                        days=0;hours=0;mins=0;secs=0;out="";
                                                        amount = Math.floor(amount/1000);
                                                        days=Math.floor(amount/86400);
                                                        amount=amount%86400;
                                                        hours=Math.floor(amount/3600);
                                                        amount=amount%3600;
                                                        mins=Math.floor(amount/60);
                                                        amount=amount%60;
                                                        secs=Math.floor(amount);
                                                        out += "<div class='deals-time time-day'><div class='num-time'>"+ days +"</div><div class='title-time'>"+((days==1)?"Day":"Days")+"</div></div>";
                                                        out += "<div class='deals-time time-hours'><div class='num-time'>"+ hours +"</div><div class='title-time'>"+((hours==1)?"Hour":"Hours")+"</div></div>";
                                                        out += "<div class='deals-time time-mins'><div class='num-time'>"+ mins +"</div><div class='title-time'>"+((mins==1)?"Min":"Mins")+"</div></div>";
                                                        out += "<div class='deals-time time-secs'><div class='num-time'>"+ secs +"</div><div class='title-time'>"+((secs==1)?"Sec":"Secs")+"</div></div>";
                                                        out = out.substr(0,out.length-2);
                                                        id.html(out);
                                                        setTimeout(function(){_countDown(date,id)}, 1000);
                                                    }
                                                }
                                                function _displayCountDown ($el){
                                                    if ($( ".deals-countdown",$el).length){
                                                        $( ".deals-countdown",$el).each(function() {
                                                            var timer = $(this).data('timer');
                                                            var data = new Date(timer);
                                                            _countDown(data,$(this));
                                                        });
                                                    }
                                                }

                                                function _runOwlCarousel(el) {
                                                    $('.owl-carousel', el).owlCarousel({
                                                        loop:false,
                                                        nav:false,
                                                        dots: false,
                                                        autoplay: false,
                                                        autoplayHoverPause: true,
                                                        margin: margin,
                                                        stagePadding: stagePadding,
                                                        responsive: {
                                                            0: {
                                                                items: nb_column1
                                                            },
                                                            480: {
                                                                items: nb_column2
                                                            },
                                                            768: {
                                                                items: nb_column3
                                                            },
                                                            991: {
                                                                items: nb_column4
                                                            },
                                                            1200: {
                                                                items: nb_column5
                                                            }
                                                        }
                                                    });
                                                }
                                                if (type_loadmore){
                                                    animatesItems($('.ltabs-items.ltabs-items-selected', el));
                                                }else{
                                                    _runOwlCarousel($('.ltabs-items.ltabs-items-selected', el));
                                                }
                                                _displayCountDown($('.ltabs-items.ltabs-items-selected', el));
                                            }
                                        })("#sm_listing_tabs_listingtabs_0");
                                    });
                                </script>
                            </div>
                            <div class="section5">
                                <div class="row">
                                    <div class="col-xs-4"><a class="banner mr30" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/5.jpg" alt="" /></a></div>
                                    <div class="col-xs-4"><a class="banner mr30" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/6.jpg" alt="" /></a></div>
                                    <div class="col-xs-4"><a class="banner mr30" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/7.jpg" alt="" /></a></div>
                                </div>
                            </div>
                            <div class="section6">
                                <div id="sm_listing_tabs_listingtabs_1" class="block sm-listing-tabs ltabs-loading-first slidertype">
                                    <div class="ltabs-loading-css">
                                        <div class="cssload-loader">
                                            <div class="cssload-inner cssload-one"></div>
                                            <div class="cssload-inner cssload-two"></div>
                                            <div class="cssload-inner cssload-three"></div>
                                        </div>
                                    </div>
                                    <div class="title-home">
                                        <h3>New Arrivals</h3>
                                    </div>
                                    <div class="ltabs-wrap">
                                        <div class="ltabs-tabs-container"
                                             data-ajaxurl="http://magento2.flytheme.net/themes/sm_smarket/default/listingtabs/index/index"
                                             data-modid="listingtabs_1">
                                            <!--Begin Tabs-->
                                            <div class="ltabs-tabs-wrap" tabindex="-1">
                                                <span class="ltabs-current-select"></span>
                                                <ul class="ltabs-tabs cf">
                                                    <li class="ltabs-tab   tab-sel tab-loaded  "
                                                        data-tab-id="97" data-catids="97,185,186,187,188">
                                                <span
                                                        class="ltabs-tab-label">
                                                shop				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="98" data-catids="98,164,165,166,167,168,169,170,171,172,173,174,175,176,177,180,181,182,183,184">
                                                <span
                                                        class="ltabs-tab-label">
                                                Outerwear				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="99" data-catids="99,189,190,191,192">
                                                <span
                                                        class="ltabs-tab-label">
                                                Jackets				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="100" data-catids="100,201,202,203,204">
                                                <span
                                                        class="ltabs-tab-label">
                                                Dresses				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="101" data-catids="101,212,213,214,215,216,217,218,222">
                                                <span
                                                        class="ltabs-tab-label">
                                                Jumpsuits				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="102" data-catids="102">
                                                <span
                                                        class="ltabs-tab-label">
                                                Shorts				</span>
                                                    </li>
                                                    <li class="ltabs-tab   "
                                                        data-tab-id="103" data-catids="103,197,198,199,200">
                                                <span
                                                        class="ltabs-tab-label">
                                                T-Shirts				</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Tabs-->
                                        <div class="ltabs-items-container ">
                                            <!--Begin Items-->
                                            <div class="ltabs-items  ltabs-items-selected ltabs-items-loaded  ltabs-items-97">
                                                <div class="ltabs-items-inner">
                                                    <div class="grid products-grid">
                                                        <div class="products list items product-items   owl-carousel "  >
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/3/13_4.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Suretin mipen ruma pasen"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <div class="label-product label-sale"><span class="sale-product-icon">-27%</span></div>
                                                                            <div class="label-product label-new">
                                                                                <span class="new-product-icon">New</span>
                                                                            </div>
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/suretin-mipen-ruma-pasen.html">
                                                                                    Suretin mipen ruma pasen								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2625">
                                                                  <span class="special-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Special Price</span>
                                                                  <span  id="product-price-2625"                data-price-amount="40"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$40.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                                <span class="old-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Regular Price</span>
                                                                  <span  id="old-price-2625"                data-price-amount="55"
                                                                         data-price-type="oldPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$55.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2625/" method="post">
                                                                                    <input type="hidden" name="product" value="2625">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNS8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2625","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2625","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/juma-rema-pola-mazen.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/8/_/8_4.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Juma rema pola mazen"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <div class="label-product label-sale"><span class="sale-product-icon">-38%</span></div>
                                                                            <div class="label-product label-new">
                                                                                <span class="new-product-icon">New</span>
                                                                            </div>
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/juma-rema-pola-mazen.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/juma-rema-pola-mazen.html">
                                                                                    Juma rema pola mazen								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2627">
                                                                  <span class="special-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Special Price</span>
                                                                  <span  id="product-price-2627"                data-price-amount="40"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$40.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                                <span class="old-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Regular Price</span>
                                                                  <span  id="old-price-2627"                data-price-amount="65"
                                                                         data-price-type="oldPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$65.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2627/" method="post">
                                                                                    <input type="hidden" name="product" value="2627">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNy8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2627","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2627","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-5.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/4/14_5.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Xatem mitrum facen pizane"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <div class="label-product label-sale"><span class="sale-product-icon">-49%</span></div>
                                                                            <div class="label-product label-new">
                                                                                <span class="new-product-icon">New</span>
                                                                            </div>
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-5.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-5.html">
                                                                                    Xatem mitrum facen pizane								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2626">
                                                                  <span class="special-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Special Price</span>
                                                                  <span  id="product-price-2626"                data-price-amount="45"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$45.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                                <span class="old-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Regular Price</span>
                                                                  <span  id="old-price-2626"                data-price-amount="89"
                                                                         data-price-type="oldPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$89.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2626/" method="post">
                                                                                    <input type="hidden" name="product" value="2626">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNi8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2626","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2626","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/benin/configurable-product.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/4/_/4_3.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Configurable Product"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/benin/configurable-product.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/benin/configurable-product.html">
                                                                                    Configurable Product								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2618">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span  id="product-price-2618"                data-price-amount="100"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$100.00</span>    </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/benin/configurable-product.html?options=cart" method="post">
                                                                                    <input type="hidden" name="product" value="2618">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9iZW5pbi9jb25maWd1cmFibGUtcHJvZHVjdC5odG1sP29wdGlvbnM9Y2FydA,,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2618","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2618","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/fumase-dame-ruma-polam.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/9/-/9-1.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Fumase dame ruma polam"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <div class="label-product label-sale"><span class="sale-product-icon">-35%</span></div>
                                                                            <div class="label-product label-new">
                                                                                <span class="new-product-icon">New</span>
                                                                            </div>
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/fumase-dame-ruma-polam.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/fumase-dame-ruma-polam.html">
                                                                                    Fumase dame ruma polam								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2629">
                                                                  <span class="special-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Special Price</span>
                                                                  <span  id="product-price-2629"                data-price-amount="55"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$55.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                                <span class="old-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Regular Price</span>
                                                                  <span  id="old-price-2629"                data-price-amount="85"
                                                                         data-price-type="oldPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$85.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2629/" method="post">
                                                                                    <input type="hidden" name="product" value="2629">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyOS8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2629","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2629","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item product product-item ">
                                                                <div class="product-item-info" data-container="product-grid">
                                                                    <div class="item-inner">
                                                                        <div class="box-image">
                                                                            <a href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html" class="product photo product-item-photo" tabindex="-1">
                                                               <span class="product-image-container">
                                                               <span class="product-image-wrapper">
                                                               <img class="product-image-photo"
                                                                    src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/catalog/product/cache/small_image/235x235/beff4985b56e3afdbeabfc89641a4582/1/1/11_4.jpg"
                                                                    width="235"
                                                                    height="235"
                                                                    alt="Toma kimas darem motram"/>
                                                               </span>
                                                               </span>
                                                                            </a>
                                                                            <!--LABEL PRODUCT-->
                                                                            <div class="label-product label-sale"><span class="sale-product-icon">-29%</span></div>
                                                                            <div class="label-product label-new">
                                                                                <span class="new-product-icon">New</span>
                                                                            </div>
                                                                            <!--END LABEL PRODUCT-->
                                                                        </div>
                                                                        <div class="product details product-item-details box-info">
                                                                            <div class="product-reviews-summary short empty">
                                                                                <div class="reviews-actions">
                                                                                    <a class="action add" href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html#review-form">
                                                                                        Be the first to review this product        </a>
                                                                                </div>
                                                                            </div>
                                                                            <h2 class="product name product-item-name product-name">
                                                                                <a class="product-item-link"
                                                                                   href="http://magento2.flytheme.net/themes/sm_smarket/default/saceam-mirea-dacema-giren-3.html">
                                                                                    Toma kimas darem motram								</a>
                                                                            </h2>
                                                                            <div class="price-box price-final_price" data-role="priceBox" data-product-id="2624">
                                                                  <span class="special-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Special Price</span>
                                                                  <span  id="product-price-2624"                data-price-amount="60"
                                                                         data-price-type="finalPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$60.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                                <span class="old-price">
                                                                  <span class="price-container price-final_price tax weee"
                                                                  >
                                                                  <span class="price-label">Regular Price</span>
                                                                  <span  id="old-price-2624"                data-price-amount="84"
                                                                         data-price-type="oldPrice"
                                                                         class="price-wrapper "
                                                                  >
                                                                  <span class="price">$84.00</span>    </span>
                                                                  </span>
                                                                  </span>
                                                                            </div>
                                                                            <div class="bottom-action">
                                                                                <form data-role="tocart-form" action="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/add/uenc/aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0/product/2624/" method="post">
                                                                                    <input type="hidden" name="product" value="2624">
                                                                                    <input type="hidden" name="uenc" value="aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0L2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNEb3ZMMjFoWjJWdWRHOHlMbVpzZVhSb1pXMWxMbTVsZEM5MGFHVnRaWE12YzIxZmMyMWhjbXRsZEM5a1pXWmhkV3gwL3Byb2R1Y3QvMjYyNC8,">
                                                                                    <input name="form_key" type="hidden" value="FVd0siUEwl8nn7Zz" />												<button type="submit"
                                                                                                                                                                                                            title="Add to Cart"
                                                                                                                                                                                                            class="action tocart primary  btn-cart">
                                                                                        <span>Add to Cart</span>
                                                                                    </button>
                                                                                </form>
                                                                                <a href="#" class="action towishlist btn-action link-wishlist" title="Add to Wish List"  aria-label="Add to Wish List" data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/wishlist\/index\/add\/","data":{"product":"2624","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' data-action="add-to-wishlist"  role="button">
                                                                                    <span>Add to Wish List</span>
                                                                                </a>
                                                                                <a href="#"  class="action tocompare btn-action link-compare"  title="Add to Compare" aria-label="Add to Compare"  data-post='{"action":"http:\/\/magento2.flytheme.net\/themes\/sm_smarket\/default\/catalog\/product_compare\/add\/","data":{"product":"2624","uenc":"aHR0cDovL21hZ2VudG8yLmZseXRoZW1lLm5ldC90aGVtZXMvc21fc21hcmtldC9kZWZhdWx0"}}' role="button">
                                                                                    <span>Add to Compare</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-98">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-99">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-100">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-101">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-102">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ltabs-items  ltabs-items-103">
                                                <div class="ltabs-items-inner">
                                                    <div class="ltabs-loading">
                                                        <div class="cssload-loader">
                                                            <div class="cssload-inner cssload-one"></div>
                                                            <div class="cssload-inner cssload-two"></div>
                                                            <div class="cssload-inner cssload-three"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--End Items-->
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    require(['jquery' , 'owlcarousel'], function ($) {
                                        ;(function (element) {
                                            var el = $(element),
                                                tabs_wrap = $('.ltabs-tabs-wrap',el),
                                                tab = $('.ltabs-tab', el),
                                                tab_active = $('.ltabs-tab.tab-sel .ltabs-tab-label',tabs_wrap),
                                                tab_content = $('.ltabs-items', el),
                                                ajax_url = $('.ltabs-tabs-container', el).attr('data-ajaxurl'),
                                                btn_loadmore = $('.ltabs-loadmore-btn', el),
                                                type_loadmore = false,
                                                place_holder_tab = $('.ltabs-current-select', el),
                                                nb_column1 = 1, nb_column2 = 2, nb_column3 = 3, nb_column4 = 4, nb_column5 = 5, margin = 0; stagePadding = 0;





                                            var _interval = setInterval(function() {
                                                if(document.readyState === 'complete') {
                                                    clearInterval(_interval);
                                                    el.removeClass('ltabs-loading-first');
                                                    _runAllScript();
                                                }
                                            }, 500);
                                            function _runAllScript () {
                                                place_holder_tab.text(tab_active.text());
                                                tabs_wrap.on('click', function(e){
                                                    e.preventDefault();
                                                    var _that = $(this);
                                                    _that.toggleClass('active');
                                                    return false;
                                                });
                                                tab.off('click').on('click', function (e) {
                                                    e.preventDefault();
                                                    var _self = $(this);
                                                    if (_self.hasClass('tab-sel')) return false;
                                                    tab.removeClass('tab-sel');
                                                    _self.addClass('tab-sel');
                                                    place_holder_tab.text($('.ltabs-tab-label', _self).text());
                                                    var tab_id = _self.attr('data-tab-id'),
                                                        catids = _self.attr('data-catids'),
                                                        items_active = $('.ltabs-items-'+tab_id, el),
                                                        loading = $('.ltabs-loading', items_active),
                                                        loaded = items_active.hasClass('ltabs-items-loaded');
                                                    tab_content.removeClass('ltabs-items-selected');
                                                    items_active.addClass('ltabs-items-selected');

                                                    if (!loaded && !items_active.hasClass('ltabs-process')) {
                                                        items_active.addClass('ltabs-process');
                                                        loading.show();
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: ajax_url,
                                                            data: {
                                                                is_ajax_listing_tabs: 1,
                                                                ajax_listingtabs_start: 0,
                                                                tab_id: tab_id,
                                                                catids: catids,
                                                                config: 'eyJpc2FjdGl2ZSI6IjEiLCJ0aXRsZSI6Ik5ldyBBcnJpdmFscyIsInR5cGVfc2hvdyI6InNsaWRlciIsInR5cGVfbGlzdGluZyI6ImFsbCIsInVuZGVyX3ByaWNlIjoiNC45OSIsImRpc3BsYXlfY291bnRkb3duIjoiMCIsImRpc3BsYXlfdGl0bGUiOiIxIiwidGFyZ2V0IjoiX3NlbGYiLCJjbGFzc19zdWZmaXgiOiJzbV9saXN0aW5ndGFiIiwic2hvd19sb2FkbW9yZV9zbGlkZXIiOiJzbGlkZXIiLCJuYl9jb2x1bW4xIjoiNCIsIm5iX2NvbHVtbjIiOiIzIiwibmJfY29sdW1uMyI6IjMiLCJuYl9jb2x1bW40IjoiMiIsIm5iX2NvbHVtbjUiOiIxIiwibmJfcm93cyI6IjEiLCJ0eXBlX2ZpbHRlciI6ImNhdGVnb3JpZXMiLCJmaWVsZF90YWJzIjoibmFtZSIsImNhdGVnb3J5X3RhYnMiOiI5Nyw5OCw5OSwxMDAsMTAxLDEwMiwxMDMiLCJvcmRlcl9ieSI6InByaWNlIiwib3JkZXJfZGlyIjoiQVNDIiwibGltaXRhdGlvbiI6IjYiLCJmaWx0ZXJfdHlwZSI6ImNhdGVnb3JpZXMiLCJwcm9kdWN0X2NhdGVnb3J5IjoiOTcsOTgsMTAzIiwiZmlsdGVyX29yZGVyX2J5IjoibGFzdGVzdF9wcm9kdWN0IiwiY2hpbGRfY2F0ZWdvcnlfcHJvZHVjdHMiOiIwIiwibWF4X2RlcHRoIjoiMTIiLCJwcm9kdWN0X2ZlYXR1cmVkIjoiMCIsInByb2R1Y3Rfb3JkZXJfZGlyIjoiQVNDIiwicHJvZHVjdF9saW1pdGF0aW9uIjoiOCIsImNhdGVnb3J5X3ByZWxvYWQiOiI5NyIsInByb2R1Y3Rfb3JkZXJfYnkiOiJiZXN0X3NhbGVzIiwidGFiX2FsbF9kaXNwbGF5IjoiMCIsImNhdF90aXRsZV9tYXhsZW5ndGgiOiIxNTAiLCJjYXRlZ29yeV9vcmRlcl9ieSI6Im5hbWUiLCJjYXRlZ29yeV9vcmRlcl9kaXIiOiJBU0MiLCJpY29uX2Rpc3BsYXkiOiIwIiwiaW1nY2ZnY2F0X29yZGVyIjoiY2F0ZWdvcnlfaW1hZ2UsY2F0ZWdvcnlfZGVzY3JpcHRpb24iLCJpbWdjZmdjYXRfZnVuY3Rpb24iOiIxIiwiaW1nY2ZnY2F0X3dpZHRoIjoiMzAiLCJpbWdjZmdjYXRfaGVpZ2h0IjoiMzAiLCJpbWdjZmdjYXRfYmFja2dyb3VuZCI6IkZGRkZGRiIsImltZ2NmZ2NhdF9wbGFjZWhvbGRlciI6InNtXC9saXN0aW5ndGFic1wvaW1hZ2VzXC9ub3Bob3RvLmpwZyIsImltZ2NmZ2NhdF9mcm9tX2NhdGVnb3J5X2ltYWdlIjoiMSIsImltZ2NmZ2NhdF9mcm9tX2NhdGVnb3J5X2Rlc2NyaXB0aW9uIjoiMSIsInByb2R1Y3RfdGl0bGVfZGlzcGxheSI6IjEiLCJwcm9kdWN0X3RpdGxlX21heGxlbmd0aCI6IjI1IiwicHJvZHVjdF9kZXNjcmlwdGlvbl9kaXNwbGF5IjoiMCIsInByb2R1Y3RfZGVzY3JpcHRpb25fbWF4bGVuZ3RoIjoiMTUwIiwicHJvZHVjdF9wcmljZV9kaXNwbGF5IjoiMSIsInByb2R1Y3RfcmV2aWV3c19jb3VudCI6IjEiLCJwcm9kdWN0X2FkZGNhcnRfZGlzcGxheSI6IjEiLCJwcm9kdWN0X2FkZHdpc2hsaXN0X2Rpc3BsYXkiOiIxIiwicHJvZHVjdF9hZGRjb21wYXJlX2Rpc3BsYXkiOiIxIiwicHJvZHVjdF9yZWFkbW9yZV9kaXNwbGF5IjoiMCIsInByb2R1Y3RfcmVhZG1vcmVfdGV4dCI6IkRldGFpbHMiLCJpbWdfZnJvbV9wcm9kdWN0X2ltYWdlIjoiMSIsImltZ19mcm9tX3Byb2R1Y3RfZGVzY3JpcHRpb24iOiIxIiwiaW1nX29yZGVyIjoicHJvZHVjdF9pbWFnZSwgcHJvZHVjdF9kZXNjcmlwdGlvbiIsImltZ19mdW5jdGlvbiI6IjEiLCJpbWdfd2lkdGgiOiIyNzAiLCJpbWdfaGVpZ2h0IjoiMjcwIiwiaW1nX2JhY2tncm91bmQiOiJGRkZGRkYiLCJpbWdfcmVwbGFjZW1lbnQiOiJzbVwvbGlzdGluZ3RhYnNcL2ltYWdlc1wvbm9waG90by5qcGciLCJlZmZlY3QiOiJmYWRlSW4iLCJkdXJhdGlvbiI6IjIwMCIsImRlbGF5IjoiNDAwIiwibmF2IjoiMSIsImxvb3AiOiIwIiwibWFyZ2luIjoiMzAiLCJzbGlkZUJ5IjoiMSIsImF1dG9wbGF5IjoiMCIsImF1dG9wbGF5SG92ZXJQYXVzZSI6IjEiLCJhdXRvcGxheVNwZWVkIjoiMTAwMCIsIm5hdlNwZWVkIjoiMTAwMCIsInN0YXJ0UG9zaXRpb24iOiIwIiwibW91c2VEcmFnIjoiMSIsInRvdWNoRHJhZyI6IjEiLCJ1c2VfY2FjaGUiOiIwIiwiY2FjaGVfdGltZSI6IjM2MDAiLCJjbGFzcyI6IlNtXFxMaXN0aW5nVGFic1xcQmxvY2tcXExpc3RpbmdUYWJzIiwibmFtZSI6Imxpc3Rpbmd0YWJzLmRlZmF1bHQiLCJhcyI6Imxpc3Rpbmd0YWJzX2JveDIiLCJ0ZW1wbGF0ZSI6IlNtX0xpc3RpbmdUYWJzOjpkZWZhdWx0LnBodG1sIn0'
                                                            },
                                                            success: function (data) {
                                                                if (data.items_markup != '') {
                                                                    $('.ltabs-items-inner', items_active).html(data.items_markup);
                                                                    items_active.addClass('ltabs-items-loaded').removeClass('ltabs-process');
                                                                    if (type_loadmore){
                                                                        $('.product-item', items_active).removeAttr('style');
                                                                        $('.product-items', items_active).removeClass('play');
                                                                        $('.product-item', items_active).addClass('ltabs-mark');
                                                                        animatesItems(items_active);
                                                                    }else{
                                                                        _runOwlCarousel(items_active);
                                                                    }
                                                                    $(document).trigger("afterAjaxProductsLoaded");
                                                                    loading.remove();
                                                                    updateStatus(items_active);
                                                                }
                                                            },
                                                            dataType: 'json'
                                                        });

                                                    }else{
                                                        if (type_loadmore){
                                                            $('.product-item', items_active).removeAttr('style');
                                                            $('.product-items', items_active).removeClass('play');
                                                            $('.product-item', items_active).addClass('ltabs-mark');
                                                            animatesItems(items_active);
                                                        }else{
                                                            var owl = $('.owl-carousel' , items_active);
                                                            owl = owl.data('owlCarousel');
                                                            if (typeof owl !== 'undefined')
                                                                owl.onResize();
                                                            else{
                                                                _runOwlCarousel(items_active);
                                                            }

                                                        }
                                                    }
                                                });

                                                btn_loadmore.off('click').on('click', function (e) {
                                                    e.preventDefault();
                                                    var _self = $(this);
                                                    if (_self.hasClass('loaded') || _self.hasClass('loading')) {
                                                        return false;
                                                    } else {
                                                        _self.addClass('loading');
                                                        $('.ltabs-image-loading', _self).css({display: 'inline-block'});
                                                        var rl_start = _self.parent().attr('data-rl_start'),
                                                            catids = _self.parent().attr('data-catids'),
                                                            tab_id = _self.parent().attr('data-tab-id'),
                                                            items_active = $('.ltabs-items-'+tab_id, el);
                                                        $.ajax({
                                                            type: 'POST',
                                                            url: ajax_url,
                                                            data: {
                                                                is_ajax_listing_tabs: 1,
                                                                ajax_listingtabs_start: rl_start,
                                                                tab_id: tab_id,
                                                                catids: catids,
                                                                config: 'eyJpc2FjdGl2ZSI6IjEiLCJ0aXRsZSI6Ik5ldyBBcnJpdmFscyIsInR5cGVfc2hvdyI6InNsaWRlciIsInR5cGVfbGlzdGluZyI6ImFsbCIsInVuZGVyX3ByaWNlIjoiNC45OSIsImRpc3BsYXlfY291bnRkb3duIjoiMCIsImRpc3BsYXlfdGl0bGUiOiIxIiwidGFyZ2V0IjoiX3NlbGYiLCJjbGFzc19zdWZmaXgiOiJzbV9saXN0aW5ndGFiIiwic2hvd19sb2FkbW9yZV9zbGlkZXIiOiJzbGlkZXIiLCJuYl9jb2x1bW4xIjoiNCIsIm5iX2NvbHVtbjIiOiIzIiwibmJfY29sdW1uMyI6IjMiLCJuYl9jb2x1bW40IjoiMiIsIm5iX2NvbHVtbjUiOiIxIiwibmJfcm93cyI6IjEiLCJ0eXBlX2ZpbHRlciI6ImNhdGVnb3JpZXMiLCJmaWVsZF90YWJzIjoibmFtZSIsImNhdGVnb3J5X3RhYnMiOiI5Nyw5OCw5OSwxMDAsMTAxLDEwMiwxMDMiLCJvcmRlcl9ieSI6InByaWNlIiwib3JkZXJfZGlyIjoiQVNDIiwibGltaXRhdGlvbiI6IjYiLCJmaWx0ZXJfdHlwZSI6ImNhdGVnb3JpZXMiLCJwcm9kdWN0X2NhdGVnb3J5IjoiOTcsOTgsMTAzIiwiZmlsdGVyX29yZGVyX2J5IjoibGFzdGVzdF9wcm9kdWN0IiwiY2hpbGRfY2F0ZWdvcnlfcHJvZHVjdHMiOiIwIiwibWF4X2RlcHRoIjoiMTIiLCJwcm9kdWN0X2ZlYXR1cmVkIjoiMCIsInByb2R1Y3Rfb3JkZXJfZGlyIjoiQVNDIiwicHJvZHVjdF9saW1pdGF0aW9uIjoiOCIsImNhdGVnb3J5X3ByZWxvYWQiOiI5NyIsInByb2R1Y3Rfb3JkZXJfYnkiOiJiZXN0X3NhbGVzIiwidGFiX2FsbF9kaXNwbGF5IjoiMCIsImNhdF90aXRsZV9tYXhsZW5ndGgiOiIxNTAiLCJjYXRlZ29yeV9vcmRlcl9ieSI6Im5hbWUiLCJjYXRlZ29yeV9vcmRlcl9kaXIiOiJBU0MiLCJpY29uX2Rpc3BsYXkiOiIwIiwiaW1nY2ZnY2F0X29yZGVyIjoiY2F0ZWdvcnlfaW1hZ2UsY2F0ZWdvcnlfZGVzY3JpcHRpb24iLCJpbWdjZmdjYXRfZnVuY3Rpb24iOiIxIiwiaW1nY2ZnY2F0X3dpZHRoIjoiMzAiLCJpbWdjZmdjYXRfaGVpZ2h0IjoiMzAiLCJpbWdjZmdjYXRfYmFja2dyb3VuZCI6IkZGRkZGRiIsImltZ2NmZ2NhdF9wbGFjZWhvbGRlciI6InNtXC9saXN0aW5ndGFic1wvaW1hZ2VzXC9ub3Bob3RvLmpwZyIsImltZ2NmZ2NhdF9mcm9tX2NhdGVnb3J5X2ltYWdlIjoiMSIsImltZ2NmZ2NhdF9mcm9tX2NhdGVnb3J5X2Rlc2NyaXB0aW9uIjoiMSIsInByb2R1Y3RfdGl0bGVfZGlzcGxheSI6IjEiLCJwcm9kdWN0X3RpdGxlX21heGxlbmd0aCI6IjI1IiwicHJvZHVjdF9kZXNjcmlwdGlvbl9kaXNwbGF5IjoiMCIsInByb2R1Y3RfZGVzY3JpcHRpb25fbWF4bGVuZ3RoIjoiMTUwIiwicHJvZHVjdF9wcmljZV9kaXNwbGF5IjoiMSIsInByb2R1Y3RfcmV2aWV3c19jb3VudCI6IjEiLCJwcm9kdWN0X2FkZGNhcnRfZGlzcGxheSI6IjEiLCJwcm9kdWN0X2FkZHdpc2hsaXN0X2Rpc3BsYXkiOiIxIiwicHJvZHVjdF9hZGRjb21wYXJlX2Rpc3BsYXkiOiIxIiwicHJvZHVjdF9yZWFkbW9yZV9kaXNwbGF5IjoiMCIsInByb2R1Y3RfcmVhZG1vcmVfdGV4dCI6IkRldGFpbHMiLCJpbWdfZnJvbV9wcm9kdWN0X2ltYWdlIjoiMSIsImltZ19mcm9tX3Byb2R1Y3RfZGVzY3JpcHRpb24iOiIxIiwiaW1nX29yZGVyIjoicHJvZHVjdF9pbWFnZSwgcHJvZHVjdF9kZXNjcmlwdGlvbiIsImltZ19mdW5jdGlvbiI6IjEiLCJpbWdfd2lkdGgiOiIyNzAiLCJpbWdfaGVpZ2h0IjoiMjcwIiwiaW1nX2JhY2tncm91bmQiOiJGRkZGRkYiLCJpbWdfcmVwbGFjZW1lbnQiOiJzbVwvbGlzdGluZ3RhYnNcL2ltYWdlc1wvbm9waG90by5qcGciLCJlZmZlY3QiOiJmYWRlSW4iLCJkdXJhdGlvbiI6IjIwMCIsImRlbGF5IjoiNDAwIiwibmF2IjoiMSIsImxvb3AiOiIwIiwibWFyZ2luIjoiMzAiLCJzbGlkZUJ5IjoiMSIsImF1dG9wbGF5IjoiMCIsImF1dG9wbGF5SG92ZXJQYXVzZSI6IjEiLCJhdXRvcGxheVNwZWVkIjoiMTAwMCIsIm5hdlNwZWVkIjoiMTAwMCIsInN0YXJ0UG9zaXRpb24iOiIwIiwibW91c2VEcmFnIjoiMSIsInRvdWNoRHJhZyI6IjEiLCJ1c2VfY2FjaGUiOiIwIiwiY2FjaGVfdGltZSI6IjM2MDAiLCJjbGFzcyI6IlNtXFxMaXN0aW5nVGFic1xcQmxvY2tcXExpc3RpbmdUYWJzIiwibmFtZSI6Imxpc3Rpbmd0YWJzLmRlZmF1bHQiLCJhcyI6Imxpc3Rpbmd0YWJzX2JveDIiLCJ0ZW1wbGF0ZSI6IlNtX0xpc3RpbmdUYWJzOjpkZWZhdWx0LnBodG1sIn0'
                                                            },
                                                            success: function (data) {
                                                                if (data.items_markup != '') {
                                                                    $('.product-item',$(data.items_markup)).insertAfter($('.product-item:last-child', items_active));
                                                                    $('.ltabs-image-loading', _self).css({display: 'none'});
                                                                    animatesItems(items_active);
                                                                    updateStatus(items_active);
                                                                    $(document).trigger("afterAjaxProductsLoaded");
                                                                }
                                                            }, dataType: 'json'
                                                        });
                                                    }
                                                    return false;
                                                });

                                                function animatesItems(elem){
                                                    var _item = $('.product-item.ltabs-mark', elem);
                                                    _item.stop(true, true).each(function (i) {
                                                        var newDelay = i * 200,
                                                            duration = 400;
                                                        $(this).attr("style", "-webkit-animation-delay:" + newDelay + "ms; "
                                                            + "-moz-animation-delay:" + newDelay + "ms; "
                                                            + "-o-animation-delay:" + newDelay + "ms; "
                                                            + "animation-delay:" + newDelay + "ms; "
                                                            + "-webkit-animation-duration:" + duration + "ms;"
                                                            + "-moz-animation-duration:" + duration + "ms;"
                                                            + "-o-animation-duration:" + duration + "ms;"
                                                            + "animation-duration:" + duration + "ms;");
                                                        if (i == _item.size()-1) {
                                                            $('.product-items', elem).fadeIn(newDelay).addClass("play");
                                                            $('.product-item', elem).removeClass('ltabs-mark');
                                                        }
                                                    });
                                                }

                                                function updateStatus($el) {
                                                    $('.ltabs-loadmore-btn', $el).removeClass('loading');
                                                    var countitem = $('.product-item', $el).length;
                                                    $('.ltabs-image-loading', $el).css({display: 'none'});
                                                    $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_start', countitem);
                                                    var rl_total = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_total');
                                                    var rl_load = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_load');
                                                    var rl_allready = $('.ltabs-loadmore-btn', $el).parent().attr('data-rl_allready');

                                                    if (countitem >= rl_total) {
                                                        $('.ltabs-loadmore-btn', $el).addClass('loaded');
                                                        $('.ltabs-image-loading', $el).css({display: 'none'});
                                                        $('.ltabs-loadmore-btn', $el).attr('data-label', rl_allready);
                                                        $('.ltabs-loadmore-btn', $el).removeClass('loading');
                                                    }
                                                    _displayCountDown($el);
                                                }

                                                function _countDown(date,id){
                                                    dateNow = new Date();
                                                    amount = date.getTime() - dateNow.getTime();
                                                    delete dateNow;
                                                    if(amount < 0){
                                                        id.html("Now!");
                                                    } else{
                                                        days=0;hours=0;mins=0;secs=0;out="";
                                                        amount = Math.floor(amount/1000);
                                                        days=Math.floor(amount/86400);
                                                        amount=amount%86400;
                                                        hours=Math.floor(amount/3600);
                                                        amount=amount%3600;
                                                        mins=Math.floor(amount/60);
                                                        amount=amount%60;
                                                        secs=Math.floor(amount);
                                                        out += "<div class='deals-time time-day'><div class='num-time'>"+ days +"</div><div class='title-time'>"+((days==1)?"Day":"Days")+"</div></div>";
                                                        out += "<div class='deals-time time-hours'><div class='num-time'>"+ hours +"</div><div class='title-time'>"+((hours==1)?"Hour":"Hours")+"</div></div>";
                                                        out += "<div class='deals-time time-mins'><div class='num-time'>"+ mins +"</div><div class='title-time'>"+((mins==1)?"Min":"Mins")+"</div></div>";
                                                        out += "<div class='deals-time time-secs'><div class='num-time'>"+ secs +"</div><div class='title-time'>"+((secs==1)?"Sec":"Secs")+"</div></div>";
                                                        out = out.substr(0,out.length-2);
                                                        id.html(out);
                                                        setTimeout(function(){_countDown(date,id)}, 1000);
                                                    }
                                                }
                                                function _displayCountDown ($el){
                                                    if ($( ".deals-countdown",$el).length){
                                                        $( ".deals-countdown",$el).each(function() {
                                                            var timer = $(this).data('timer');
                                                            var data = new Date(timer);
                                                            _countDown(data,$(this));
                                                        });
                                                    }
                                                }

                                                function _runOwlCarousel(el) {
                                                    $('.owl-carousel', el).owlCarousel({
                                                        loop:false,
                                                        nav:false,
                                                        dots: false,
                                                        autoplay: false,
                                                        autoplayHoverPause: true,
                                                        margin: margin,
                                                        stagePadding: stagePadding,
                                                        responsive: {
                                                            0: {
                                                                items: nb_column1
                                                            },
                                                            480: {
                                                                items: nb_column2
                                                            },
                                                            768: {
                                                                items: nb_column3
                                                            },
                                                            991: {
                                                                items: nb_column4
                                                            },
                                                            1200: {
                                                                items: nb_column5
                                                            }
                                                        }
                                                    });
                                                }
                                                if (type_loadmore){
                                                    animatesItems($('.ltabs-items.ltabs-items-selected', el));
                                                }else{
                                                    _runOwlCarousel($('.ltabs-items.ltabs-items-selected', el));
                                                }
                                                _displayCountDown($('.ltabs-items.ltabs-items-selected', el));
                                            }
                                        })("#sm_listing_tabs_listingtabs_1");
                                    });
                                </script>
                            </div>
                            <div class="section7">
                                <div class="row">
                                    <div class="col-xs-6"><a class="banner mr30" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/8.jpg" alt="" /></a></div>
                                    <div class="col-xs-6"><a class="banner mr30" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/9.jpg" alt="" /></a></div>
                                </div>
                            </div>
                            <div class="section8 mr30">
                                <div class="block">
                                    <div class="title-home">
                                        <h3>HOT BRANDS</h3>
                                    </div>
                                    <ul class="inner-brand owl-carousel">
                                        <li class="item"><a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/1.jpg" alt="" /></a> <a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/2.jpg" alt="" /></a></li>
                                        <li class="item"><a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/3.jpg" alt="" /></a> <a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/8.jpg" alt="" /></a></li>
                                        <li class="item"><a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/4.jpg" alt="" /></a> <a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/9.jpg" alt="" /></a></li>
                                        <li class="item"><a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/5.jpg" alt="" /></a> <a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/10.jpg" alt="" /></a></li>
                                        <li class="item"><a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/6.jpg" alt="" /></a> <a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/1.jpg" alt="" /></a></li>
                                        <li class="item"><a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/7.jpg" alt="" /></a> <a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/brand/3.jpg" alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                            <script type="text/javascript" xml="space">
                                require([
                                    'jquery',
                                    'owlcarousel'
                                ], function ($) {
                                    $(".inner-brand").owlCarousel({
                                        nav: false,
                                        dots:false,
                                        margin:0,
                                        responsive: {
                                            0: {
                                                items: 2
                                            },
                                            480: {
                                                items: 3
                                            },
                                            768: {
                                                items: 4
                                            },
                                            991: {
                                                items: 5
                                            },
                                            1200: {
                                                items: 6
                                            }
                                        }
                                    });
                                });
                            </script>
                            <div class="section9 mr30">
                                <div class="block latest-post-container">
                                    <div class="title-home">
                                        <h3>OUR LATEST BLOGs</h3>
                                    </div>
                                    <div class="slider-post-container">
                                        <div class="owl-carousel slider-post">
                                            <div class="item item-post">
                                                <div class="image-blog static-image">
                                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/black-friday-event-dec-2016/" title="Black Friday event Dec 2016.">
                                                        <img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/magefan_blog\blo1.jpg" alt="Black Friday event Dec 2016." />
                                                    </a>
                                                </div>
                                                <div class="info-blog">
                                                    <div class="date-post-title">
                                                        <div class="date-post">
                                                            <i class="fa fa-calendar"></i>
                                                            June 19, 2017
                                                        </div>
                                                        <h2 class="postTitle">
                                                            <a class="post-item-link" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/black-friday-event-dec-2016/">
                                                                Black Friday event Dec 2016.								</a>
                                                        </h2>
                                                        <div class="post-cat">
                                                            <i class="fa fa-tags"></i>
                                                            <a title="News" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/news/">News,</a>
                                                            <a title="Hot" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/hot/">Hot,</a>
                                                            <a title="Relax" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/relax/">Relax,</a>
                                                            <a title="Fashion" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/fashion/">Fashion,</a>
                                                            <a title="Technologies" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/technologies/">Technologies,</a>
                                                        </div>
                                                    </div>
                                                    <a class="post-read-more" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/black-friday-event-dec-2016/" title="Black Friday event Dec 2016." >
                                                        <i class="fa fa-caret-right"></i> view more                        </a>
                                                </div>
                                            </div>
                                            <div class="item item-post">
                                                <div class="image-blog static-image">
                                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/how-to-install-magento-on-xampp/" title="How to install Magento  on XAMPP?">
                                                        <img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/magefan_blog\blo5.jpg" alt="How to install Magento  on XAMPP?" />
                                                    </a>
                                                </div>
                                                <div class="info-blog">
                                                    <div class="date-post-title">
                                                        <div class="date-post">
                                                            <i class="fa fa-calendar"></i>
                                                            June 19, 2017
                                                        </div>
                                                        <h2 class="postTitle">
                                                            <a class="post-item-link" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/how-to-install-magento-on-xampp/">
                                                                How to install Magento  on XAMPP?								</a>
                                                        </h2>
                                                        <div class="post-cat">
                                                            <i class="fa fa-tags"></i>
                                                            <a title="News" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/news/">News,</a>
                                                            <a title="Hot" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/hot/">Hot,</a>
                                                            <a title="Relax" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/relax/">Relax,</a>
                                                            <a title="Fashion" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/fashion/">Fashion,</a>
                                                            <a title="Technologies" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/technologies/">Technologies,</a>
                                                        </div>
                                                    </div>
                                                    <a class="post-read-more" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/how-to-install-magento-on-xampp/" title="How to install Magento  on XAMPP?" >
                                                        <i class="fa fa-caret-right"></i> view more                        </a>
                                                </div>
                                            </div>
                                            <div class="item item-post">
                                                <div class="image-blog static-image">
                                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/magento-community-edition-released/" title="Magento Community Edition Released">
                                                        <img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/magefan_blog\blo4.jpg" alt="Magento Community Edition Released" />
                                                    </a>
                                                </div>
                                                <div class="info-blog">
                                                    <div class="date-post-title">
                                                        <div class="date-post">
                                                            <i class="fa fa-calendar"></i>
                                                            June 19, 2017
                                                        </div>
                                                        <h2 class="postTitle">
                                                            <a class="post-item-link" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/magento-community-edition-released/">
                                                                Magento Community Edition Released								</a>
                                                        </h2>
                                                        <div class="post-cat">
                                                            <i class="fa fa-tags"></i>
                                                            <a title="News" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/news/">News,</a>
                                                            <a title="Hot" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/hot/">Hot,</a>
                                                            <a title="Relax" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/relax/">Relax,</a>
                                                            <a title="Fashion" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/fashion/">Fashion,</a>
                                                            <a title="Technologies" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/technologies/">Technologies,</a>
                                                        </div>
                                                    </div>
                                                    <a class="post-read-more" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/magento-community-edition-released/" title="Magento Community Edition Released" >
                                                        <i class="fa fa-caret-right"></i> view more                        </a>
                                                </div>
                                            </div>
                                            <div class="item item-post">
                                                <div class="image-blog static-image">
                                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/customer-support-notice-for-holiday/" title="Customer Support Notice for Holiday">
                                                        <img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/magefan_blog\blo3.jpg" alt="Customer Support Notice for Holiday" />
                                                    </a>
                                                </div>
                                                <div class="info-blog">
                                                    <div class="date-post-title">
                                                        <div class="date-post">
                                                            <i class="fa fa-calendar"></i>
                                                            June 19, 2017
                                                        </div>
                                                        <h2 class="postTitle">
                                                            <a class="post-item-link" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/customer-support-notice-for-holiday/">
                                                                Customer Support Notice for Holiday								</a>
                                                        </h2>
                                                        <div class="post-cat">
                                                            <i class="fa fa-tags"></i>
                                                            <a title="News" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/news/">News,</a>
                                                            <a title="Hot" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/hot/">Hot,</a>
                                                            <a title="Relax" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/relax/">Relax,</a>
                                                            <a title="Fashion" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/fashion/">Fashion,</a>
                                                            <a title="Technologies" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/technologies/">Technologies,</a>
                                                        </div>
                                                    </div>
                                                    <a class="post-read-more" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/customer-support-notice-for-holiday/" title="Customer Support Notice for Holiday" >
                                                        <i class="fa fa-caret-right"></i> view more                        </a>
                                                </div>
                                            </div>
                                            <div class="item item-post">
                                                <div class="image-blog static-image">
                                                    <a href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/8-ideas-to-get-your-site-ready/" title="8 Ideas to Get Your Site Ready">
                                                        <img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/magefan_blog\blo2.jpg" alt="8 Ideas to Get Your Site Ready" />
                                                    </a>
                                                </div>
                                                <div class="info-blog">
                                                    <div class="date-post-title">
                                                        <div class="date-post">
                                                            <i class="fa fa-calendar"></i>
                                                            June 19, 2017
                                                        </div>
                                                        <h2 class="postTitle">
                                                            <a class="post-item-link" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/8-ideas-to-get-your-site-ready/">
                                                                8 Ideas to Get Your Site Ready								</a>
                                                        </h2>
                                                        <div class="post-cat">
                                                            <i class="fa fa-tags"></i>
                                                            <a title="News" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/news/">News,</a>
                                                            <a title="Hot" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/hot/">Hot,</a>
                                                            <a title="Relax" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/relax/">Relax,</a>
                                                            <a title="Fashion" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/fashion/">Fashion,</a>
                                                            <a title="Technologies" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/category/technologies/">Technologies,</a>
                                                        </div>
                                                    </div>
                                                    <a class="post-read-more" href="http://magento2.flytheme.net/themes/sm_smarket/default/blog/post/8-ideas-to-get-your-site-ready/" title="8 Ideas to Get Your Site Ready" >
                                                        <i class="fa fa-caret-right"></i> view more                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        require([
                                            'jquery',
                                            'owlcarousel'
                                        ], function ($) {
                                            $(".slider-post").owlCarousel({
                                                responsive:{
                                                    0:{
                                                        items:1
                                                    },
                                                    480:{
                                                        items:2
                                                    },
                                                    768:{
                                                        items:3
                                                    },
                                                    992:{
                                                        items:3
                                                    },
                                                    1200:{
                                                        items:3
                                                    },
                                                },

                                                autoplay:false,
                                                loop:true,
                                                nav : true,
                                                dots: false,
                                                autoplayHoverPause: true,
                                                margin:30
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <div class="section10 mr30 wrap-policyshop">
                                <div class="row">
                                    <div class="item item-1 col-lg-3 col-md-3 col-sm-6">
                                        <div class="wrap">
                                            <div class="icon"><i class="fa fa-paper-plane">&nbsp;</i></div>
                                            <div class="content">
                                                <h3 class="g2font"><a href="#">Money Back Guarantee</a></h3>
                                                <p>30 Days Money Back</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item item-2 col-lg-3 col-md-3 col-sm-6">
                                        <div class="wrap">
                                            <div class="icon"><i class="fa fa-map-marker">&nbsp;</i></div>
                                            <div class="content">
                                                <h3 class="g2font"><a href="#">Free Worldwide Shipping</a></h3>
                                                <p>On Order Over $100</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item item-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="wrap">
                                            <div class="icon"><i class="fa fa-tag">&nbsp;</i></div>
                                            <div class="content">
                                                <h3 class="g2font"><a href="#">Member Discount</a></h3>
                                                <p>Upto 70 % Discount</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item item-4 col-lg-3 col-md-3 col-sm-6">
                                        <div class="wrap">
                                            <div class="icon"><i class="fa fa-life-ring">&nbsp;</i></div>
                                            <div class="content">
                                                <h3 class="g2font"><a href="#">24/7 Online Support</a></h3>
                                                <p>Technical Support 24/7</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="page-footer">
        <div class="footer footer-wrapper">
            <div class="footer-container">
                <div class="footer-wrapper">
                    <div class="container">
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-md-2 col-sm-6 col-xs-12 support-footer">
                                    <div class="footer-block">
                                        <div class="footer-block-title">
                                            <h3 class="g2font">Support</h3>
                                        </div>
                                        <div class="footer-block-content">
                                            <ul class="links-footer">
                                                <li><a title="Product Support" href="#">Product Support</a></li>
                                                <li><a title="PC Setup & Support Services" href="#">PC Setup & Support Services</a></li>
                                                <li><a title="Extended Service Plans" href="#">Extended Service Plans</a></li>
                                                <li><a title="Community" href="#">Community</a></li>
                                                <li><a title="Product Manuals" href="#">Product Manuals</a></li>
                                                <li><a title="Product Registration" href="#">Product Registration</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 col-xs-12 links-footer">
                                    <div class="footer-block">
                                        <div class="footer-block-title">
                                            <h3 class="g2font">Your Links</h3>
                                        </div>
                                        <div class="footer-block-content">
                                            <ul class="links-footer">
                                                <li><a title="Shipping Policy" href="#">Shipping Policy</a></li>
                                                <li><a title="Compensation First" href="#">Compensation First</a></li>
                                                <li><a title="My Account" href="http://magento2.flytheme.net/themes/sm_smarket/default/customer/account">My Account</a></li>
                                                <li><a title="Return Policy" href="#">Return Policy</a></li>
                                                <li><a title="Contact Us" href="http://magento2.flytheme.net/themes/sm_smarket/default/contact-us.html">Contact Us</a></li>
                                                <li><a title="FAQs" href="#">FAQs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 contact-footer">
                                    <div class="footer-block">
                                        <div class="footer-block-title">
                                            <h3 class="g2font">CONTACT INFO</h3>
                                        </div>
                                        <div class="footer-block-content">
                                            <ul class="links-contact">
                                                <li>No 1123, Marmora Road, Glasgow, D04 89GR.</li>
                                                <li>(801) 2345 - 6788 / (801) 2345 - 6789</li>
                                                <li><a href="#">support@example.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="socials-wrap">
                                        <div class="title-follow">Follow Us</div>
                                        <ul>
                                            <li class="li-social facebook-social">
                                                <a title="Facebook" href="#" target="_blank">
                                                    <span class="fa fa-facebook icon-social"></span><span class="name-social">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="li-social twitter-social">
                                                <a title="Twitter" href="#" target="_blank">
                                                    <span class="fa fa-twitter icon-social"></span> <span class="name-social">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="li-social google-social">
                                                <a title="Google+" href="#" target="_blank">
                                                    <span class="fa fa-google-plus icon-social"></span> <span class="name-social">Google+</span>
                                                </a>
                                            </li>
                                            <li class="li-social pinterest-social">
                                                <a title="Pinterest" href="#" target="_blank">
                                                    <span class="fa fa-pinterest icon-social"></span> <span class="name-social">Pinterest</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 newletter-footer">
                                    <div class="block-subscribe-footer footer-block">
                                        <div class="footer-block-title">
                                            <h3 class="g2font">Newsletter</h3>
                                        </div>
                                        <div class="info-newsletter">
                                            <p>Get all the best deals, sales and offers from the best online shopping store in UAE. Sign up now !</p>
                                            <form class="form subscribe"
                                                  novalidate
                                                  action="http://magento2.flytheme.net/themes/sm_smarket/default/newsletter/subscriber/new/"
                                                  method="post"
                                                  data-mage-init='{"validation": {"errorClass": "mage-error"}}'
                                                  id="newsletter-validate-detail">
                                                <div class="input-box">
                                                    <input name="email" type="email" id="newsletter"
                                                           placeholder="Enter your email address"
                                                           data-validate="{required:true, 'validate-email':true}"/>
                                                    <button class="action subscribe primary" title="Subscribe" type="submit">
                                                        <span> Subscribe</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--  -->
                                    <div class="store">
                                        <a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/pay2.png" alt="Static Image" /></a>
                                        <a href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/pay3.png" alt="Static Image" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-middle">
                            <p><a class="mr30" href="#"><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/banner/img-ft.jpg" alt="" /></a></p>
                            <ul id="menu-infomation" class="menu">
                                <li><a class="item-link" href="http://magento2.flytheme.net/themes/sm_smarket/default/about-us.html/">About Us</a></li>
                                <li><a class="item-link" href="#">Customer Service</a></li>
                                <li><a class="item-link" href="#">Privacy Policy</a></li>
                                <li><a class="item-link" href="http://magento2.flytheme.net/themes/sm_smarket/default/site-map/">Site Map</a></li>
                                <li><a class="item-link" href="#">Orders and Returns</a></li>
                                <li><a class="item-link" href="http://magento2.flytheme.net/themes/sm_smarket/default/contact-us.html/">Contact Us</a></li>
                            </ul>
                            <p class="info-shop">**$50 off orders $350+ with the code BOO50. $75 off orders $500+ with the code BOO75. $150 off orders $1000+ with the code BOO150. Valid from October 28, 2016 to October 31, 2017. Offer may not be combined with any other offers or promotions, is non-exchangeable and non-refundable. Offer valid within the US only.</p>
                            <div class="payment-footer">
                                <p><img src="http://magento2.flytheme.net/themes/sm_smarket/pub/media/wysiwyg/payment/payment.png" alt="Payment" /></p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="copyright-footer">
                                <address>© 2017 Magento Demo Store. All Rights Reserved.</address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--GO TO TOP-->
            <a id="yt-totop" href="javascript:void(0)" title="Go to Top"></a>
        </div>
    </footer>
    <script type="text/javascript">
        require([
            'jquery',
            'quickView',
            'domReady!'
        ], function ($, cartQuickView) {
            var quickViewCf = {
                isQuickView: true,
                isAjaxCart: true,
                product_container : '.products-grid .item-inner,.products-list .item-inner',
                button_container :'.box-image ,.box-image-list',
                label_button : 'Quick View',
                base_url : 'http://magento2.flytheme.net/themes/sm_smarket/default/'
            }
            $(quickViewCf.product_container).cartQuickView(quickViewCf);
            $( document ).on( "afterAjaxProductsLoaded", function( event) {
                $(quickViewCf.product_container).cartQuickView(quickViewCf);
            });
        });
    </script>
    <script type="text/x-magento-init">
            {
            	"#maincontent": {
            		"Sm_CartQuickPro/js/custom-addtocart": {
            			"isEnabled": true,
            			"isAjaxCart": true,
            			"urlLogin": "http://magento2.flytheme.net/themes/sm_smarket/default/customer/account/login/",
            			"isLoggedIn": false,
            			"addUrl": "http://magento2.flytheme.net/themes/sm_smarket/default/cartquickpro/cart/add",
            			"isUpdateConfigure": false,
            			"isCompareIndex": false,
            			"isProductView": false,
            			"isCheckoutPage":  false,
            			"isWishlistPage": false,
            			"urlCurrent": "http://magento2.flytheme.net/themes/sm_smarket/default/",
            			"countDownNumber": 5		}
            	}
            }
         </script>
    <div id="smcqp-container" style="display:none;">
        <div data-role="loader" class="loading-mask" >
            <div class="loader">
                <img src="http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/loader-1.gif"
                     alt="Loading...">
            </div>
        </div>
        <div id="smcqp-contents">
        </div>
        <div id="smcqp-report" style="display:none;">
            <div class="smcqp-messages">
            </div>
            <div class="smcqp-actions">
                <a class="smcqp-continue spcqp-count" data-count="5" href="#" title="Continue">
                    Continue			</a>
                <a class="smcqp-btn smcqp-view-cart " href="http://magento2.flytheme.net/themes/sm_smarket/default/checkout/cart/" title="View Cart">
                    View Cart			</a>
                <a class="smcqp-btn smcqp-view-compare " href="http://magento2.flytheme.net/themes/sm_smarket/default/catalog/product_compare/index/" title="Compare Products">
                    Compare Products			</a>
                <a class="smcqp-btn smcqp-view-wishlist " href="http://magento2.flytheme.net/themes/sm_smarket/default/wishlist/" title="My Wishlist">
                    My Wishlist			</a>
            </div>
        </div>
    </div>
    <div data-role="loader" class="loading-mask-shopby" style="display:none" >
        <div class="loader">
            <img src="http://magento2.flytheme.net/themes/sm_smarket/pub/static/frontend/Sm/smarket/en_US/images/loader-1.gif"
                 alt="Loading...">
        </div>
    </div>
</div>
</body>
</html>