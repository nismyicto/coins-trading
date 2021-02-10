<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HighLow</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{url('/css/app.css')}}" rel="stylesheet" />
    <link href="{{url('/css/style.css')}}" rel="stylesheet" />
    <link href="{{url('/css/nav.css')}}" rel="stylesheet" />
    <!-- <link href="{{url('/css/dropdm.css')}}" rel="stylesheet" /> -->
    <link href="{{url('/css/custom.css')}}" rel="stylesheet" />
    <link href="{{url('/css/footer.css')}}" rel="stylesheet" />
</head>

<body class="non-responsive language-en-us cashbackCurrency-36 userCurrency-392">

    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-54TR9PV" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>

    <header id="layout-header" class="group">
        <div id="header">
            <div class="header-zone-top">
                <div class="content scrollable">
                    <div class="container clearfix">
                        <div class="zone zone-header">
                            <div class="login last-child">
                                <span class="status-bar-user hidden-logged-in last-child">
                                    <span class="status-bar-greetings first-child last-child">

                                        <a href="/GoToExternalLink?place=/account" class="btn btn-red btn-sm last-child">
                                            <span class="hidden-xs first-child">CLAIM YOUR $50 CASHBACK!</span>
                                        </a>

                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="zone zone-navigation">
            <article class="widget-navigation widget-html-widget widget">
                <div>
                    <nav class="navbar navbar-default" role="navigation" id="common-nav">
                        <div class="content">
                            <div class="d-flex justify-content-around">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                    <a href="/" class="high-low demo pull-left icon">
                                        <img src="images/highlow-logo.svg" />
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-right" style="display:block">
                                        @can('admin-user')
                                        <li><a href="/users">Users List</a></li>
                                        @endcan
                                        <li class="dropdown trade-menu-toggle-bookmark toggler active" data-hover-toggle="true" data-hover-outside-target=".trade-menu-toggle-bookmark" data-toggle-class="open" data-toggle-target=".trade-menu-toggle-bookmark" data-toggle-group="main-menu"><a href="//en.demotrade.highlow.net" class="dropdown-toggle"><i class="iWrapper" style="display: inline-block;">TRADE</i><span class="icon-wrapper"><span class="icon drop-down"></span><span class="icon drop-down-yellow"></span></span></a></li>
                                        <li class="dropdown highlow-menu-toggle-bookmark toggler" data-hover-toggle="true" data-hover-outside-target=".highlow-menu-toggle-bookmark" data-toggle-class="open" data-toggle-target=".highlow-menu-toggle-bookmark" data-toggle-group="main-menu"><a href="/GoToExternalLink?place=/overview" class="dropdown-toggle"><i class="iWrapper" style="display: inline-block;">HIGHLOW</i><span class="icon-wrapper"><span class="icon drop-down"></span><span class="icon drop-down-yellow"></span></span></a></li>
                                        <li class="dropdown resources-menu-toggle-bookmark toggler" data-hover-toggle="true" data-hover-outside-target=".resources-menu-toggle-bookmark" data-toggle-class="open" data-toggle-target=".resources-menu-toggle-bookmark" data-toggle-group="main-menu"><a href="/GoToExternalLink?place=/resources/overview" class="dropdown-toggle"><i class="iWrapper" style="display: inline-block;">RESOURCES</i><span class="icon-wrapper"><span class="icon drop-down"></span><span class="icon drop-down-yellow"></span></span></a></li>
                                        @guest
                                        @if (Route::has('login'))
                                        <li class="sign-up-menu last-child loggedin-hidden quick-demo-visible"><a href="{{ route('login') }}"><i class="iWrapper" style="display: inline-block;">SIGN IN</i></a></li>
                                        @endif
                                        @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>
                                        </li>

                                        <li>


                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>

                                        </li>
                                        @cannot('admin-user')
                                        <div class="content">
                                            <div class="d-flex justify-content-end text-white">
                                                {{ Auth::user()->coins }}
                                            </div>
                                        </div>
                                        @endcannot
                                        @endguest
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                    </nav>
                </div>

                <div class="dropdown-mega-menu trade-menu-toggle-bookmark toggler" data-hover-toggle="true" data-toggle-group="main-menu" data-toggle-target=".trade-menu-toggle-bookmark" data-toggle-class="open" role="menu">
                    <div class="container content">
                        <div class="row">
                            <div class="col-sm-5 col-md-6 col-lg-7 dropdown-mega-menu--cta">
                                <div class="dropdown-mega-menu--attention-grabber"><a id="quick-demo-link" href="/Account/QuickDemoLogin"> <img id="quick-demo-link--img" class="illustration" src="/themes/rtcm/content/images/platform-on-yellow.jpg" /> <img id="quick-demo-link--img--hover" class="illustration" src="/themes/rtcm/content/images/platform-on-yellow-hover.jpg" /> <span style="display: block;" class="dropdown-mega-menu--attention-grabber--heading">TRY HIGHLOW<br class="first-child" />WITH OUR FREE<br />QUICK DEMO <span class="quick-demo-link-arrow last-child"></span></span> </a></div>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-5 clearfix dropdown-mega-menu--links">
                                <ul>
                                    <li><a id="trade-area-link" class="first-child last-child" href="//en.demotrade.highlow.net/"><small class="first-child">ACCESS THE</small><em>TRADE AREA</em><span class="btn-negative btn btn-extruded last-child">TRADE NOW</span></a></li>
                                </ul>
                                <ul>
                                    <li><a href="/GoToExternalLink?place=/trade/trading-platforms">Trading Platforms</a></li>
                                    <li><a href="/GoToExternalLink?place=/trade/option-types">Option Types</a></li>
                                    <li><a href="/GoToExternalLink?place=/trade/trade-conditions">Trading Conditions</a></li>
                                    <li><a href="/GoToExternalLink?place=/trade/options-schedule">Options Schedule</a></li>
                                    <li><a href="/GoToExternalLink?place=/trade/expiry-rates">Expiry Rates</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-mega-menu highlow-menu-toggle-bookmark toggler" data-toggle-group="main-menu" data-hover-toggle="true" data-toggle-target=".highlow-menu-toggle-bookmark" data-toggle-class="open" role="menu">
                    <div class="container content">
                        <div class="row">
                            <div class="col-sm-5 col-md-6 col-lg-7 dropdown-mega-menu--cta">
                                <div class="dropdown-mega-menu--attention-grabber"><img src="/themes/rtcm/content/images/money-stack.jpg" class="illustration" />
                                    <div class="dropdown-mega-menu--attention-grabber--heading">GET $50 <br />CASH-BACK <br />ON SIGN-UP <a href="/GoToExternalLink?place=/account" class="btn-negative btn btn-extruded">GO</a></div>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-5 clearfix dropdown-mega-menu--links">
                                <ul>
                                    <li><a href="/GoToExternalLink?place=/overview">HighLow Overview</a></li>
                                    <li><a href="/GoToExternalLink?place=/why-trade">Why Trade</a></li>
                                    <li><a href="/GoToExternalLink?place=/banking">Banking</a></li>
                                    <li><a href="/GoToExternalLink?place=/points">HighLow Points</a></li>
                                </ul>
                                <ul>
                                    <li><a href="/GoToExternalLink?place=/company">Company</a></li>
                                    <li><a href="/GoToExternalLink?place=/help-and-support">Help and Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown-mega-menu resources-menu-toggle-bookmark toggler" data-toggle-group="main-menu" data-hover-toggle="true" data-toggle-target=".resources-menu-toggle-bookmark" data-toggle-class="open" role="menu">
                    <div class="container content">
                        <div class="row">
                            <div class="col-sm-5 col-md-6 col-lg-7 dropdown-mega-menu--cta">
                                <div class="dropdown-mega-menu--attention-grabber">
                                    <div class="dropdown-mega-menu--attention-grabber--heading">NEED HELP?<br />SEARCH FAQ&rsquo;S</div>
                                    <form class="form contact-us-faq-form" method="get" action="/SearchResourcesExternal"><img src="/themes/rtcm/content/images/search-field-shadow.png" class="shadow" /> <input class="search-field form-control clearable" name="filter" placeholder="Enter a keyword" type="text" />
                                        <div class="clearable--btn"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-7 col-md-6 col-lg-5 clearfix dropdown-mega-menu--links">
                                <ul>
                                    <li><a href="/GoToExternalLink?place=/resources/overview">Resources Overview</a></li>
                                    <li><a href="/GoToExternalLink?place=/resources/faq">FAQ's</a></li>
                                    <li><a href="/Account/QuickDemoLogin">Quick Demo</a></li>
                                    <li><a href="/GoToExternalLink?place=/resources/walk-through">Platform Walk-through</a></li>
                                </ul>
                                <ul>
                                    <li><a href="/GoToExternalLink?place=/resources/videos">Video Training</a></li>
                                    <li><a href="/GoToExternalLink?place=/resources/options-glossary">Options Glossary</a></li>
                                    <li><a style="visibility: hidden;">&nbsp;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>

    </header>


    <div id="layout-before-main" class="group sticky-strip">
        <div class="content">
            <div class="zone zone-before-main">

            </div>
        </div>
    </div>

    <div id="layout-main-container">
        <div id="layout-main" class="group">
            <div id="layout-content" class="group">
                <div id="content" class="group">
                    <div class="zone zone-content">

                        <div id="tradingContent" class="trading-app-root main-view">
                            <div class="game-options">
                                <div class="container">
                                    <section id="gameTypeRegion">
                                        <div>
                                            <div class="gameTabArea" id="gameTabArea">
                                                <div id="assetsGameTypeZoneRegion">
                                                    <ul>
                                                        <li class="gameTab selected" data-game="ChangingStrike">
                                                            <span id="ChangingStrike">HighLow</span><span class="closed hiddenArea">Closed</span>
                                                        </li>
                                                        <li class="gameTab" data-game="ChangingStrikeOOD">
                                                            <span id="ChangingStrikeOOD">Turbo</span><span class="closed hiddenArea">Closed</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="container trading-app-wrapper">
                                <section id="categoryRegion" class="pull-left">
                                    <div>
                                        <div id="assetsCategoryFilterZoneRegion" class="filtersArea">
                                            <div>
                                                <div class="tab selected">
                                                    <span>All</span>
                                                </div>
                                                <div class="tab">
                                                    <span>15 MIN</span>
                                                </div>
                                                <div class="tab">
                                                    <span>1 HOUR</span>
                                                </div>
                                                <div class="tab">
                                                    <span>1 DAY</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section id="assetsRegion" class="pull-right">
                                    <div style="display: block;">
                                        <div class="instrument-selector-widget tab-view-tab-selectors-container-wrapper first-child pull-right">
                                            <div class="instrument-selector-widget-instrument-filter first-child">
                                                <div id="assetsAssetsFilterZoneRegion">
                                                    <div>
                                                        <div id="assetFilterContainer">
                                                            <div id="filterLable">View</div>
                                                            <div id="highlow-asset-filter" class="asset-filter">
                                                                <span class="asset-filter--opener"></span>
                                                                <span class="asset-filter--placeholder">All Assets</span>
                                                                <div id="filterBox">
                                                                    <div id="leftBlock">
                                                                        <div id="categoryListRegion">
                                                                            <div>
                                                                                <span id="filterTitle">Filter Assets</span>
                                                                                <div id="categoryContainer">
                                                                                    <div id="categoriesList">
                                                                                        <div class="category_item active preview">

                                                                                            <span class="itemLabel">All Assets</span>
                                                                                            <span class="categoryCount">(33)</span>
                                                                                        </div>
                                                                                        <div class="category_item">

                                                                                            <span class="itemLabel">Currencies</span>
                                                                                            <span class="categoryCount">(17)</span>
                                                                                        </div>
                                                                                        <div class="category_item">

                                                                                            <span class="itemLabel">Cryptos</span>
                                                                                            <span class="categoryCount">(3)</span>
                                                                                        </div>
                                                                                        <div class="category_item">

                                                                                            <span class="itemLabel">Commodities</span>
                                                                                            <span class="categoryCount">(3)</span>
                                                                                        </div>
                                                                                        <div class="category_item">

                                                                                            <span class="itemLabel">Indices</span>
                                                                                            <span class="categoryCount">(10)</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="stocksCategoryListRegion"></div>
                                                                    </div>
                                                                    <div id="rightBlock">
                                                                        <div id="searchRegion">
                                                                            <div>
                                                                                <div id="assetsContainer">
                                                                                    <div id="searchBoxArea">
                                                                                        <input type="text" id="searchBox" maxlength="30" placeholder="Enter symbol, name or keyword" autocomplete="off">
                                                                                        <span id="resetSearch" class="searchCriteria"></span>
                                                                                    </div>
                                                                                    <div id="emptyView">
                                                                                        <div id="resultsMessage">No results found for '<span id="queryStringContainer"></span>'</div>
                                                                                    </div>
                                                                                    <div id="assetsFilteredListContainer">
                                                                                        <div id="assetsFilteredList"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div id="assetsListRegion">
                                                                            <div>
                                                                                <div id="currentCategoryLabel">All Assets</div>
                                                                                <div id="currentSubcategoryLabel" class="active">View all Assets</div>
                                                                                <div id="assetsContainer" class="mCustomScrollbar _mCS_1">
                                                                                    <div id="mCSB_1" class="mCustomScrollBox mCS-inset-dark mCSB_vertical mCSB_inside" tabindex="0">
                                                                                        <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0px; left:0;" dir="ltr">
                                                                                            <div id="assetsList">
                                                                                                <div class="asset_item hiddenAll">
                                                                                                    All Assets
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    AUD/JPY
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    AUD/NZD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    AUD/USD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    AUS200
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    BITCOIN
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    CAD/JPY
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    CHF/JPY
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    CHN50
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    ETHEREUM
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    EUR/AUD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    EUR/GBP
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    EUR/JPY
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    EUR/USD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    FRA40
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    GBP/AUD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    GBP/JPY
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    GBP/USD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    GER30
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    GOLD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    HKG33
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    JPN225
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    LITECOIN
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    NAS100
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    NZD/JPY
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    NZD/USD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    SPX500
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    UK100
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    UKOIL
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    US30
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    USD/CAD
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    USD/CHF
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    USD/JPY
                                                                                                </div>
                                                                                                <div class="asset_item">
                                                                                                    USOIL
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-inset-dark mCSB_scrollTools_vertical" style="display: block;">
                                                                                            <div class="mCSB_draggerContainer">
                                                                                                <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 116px; max-height: 398px;" oncontextmenu="return false;">
                                                                                                    <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                                                                                                </div>
                                                                                                <div class="mCSB_draggerRail"></div>
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
                                                </div>
                                            </div>
                                            <div class="instrument-selector-widget-collapse-toggle on">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section id="tradeAreasRegion" class="clear">
                                    <div>
                                        <ul id="tradeAreas">
                                            <li class="tradeArea All gametype-high-low" style="display: list-item;">
                                                <section id="chartHeaderZoneRegion">
                                                    <div>
                                                        <div class="chartHeaderZone" id="chartHeaderZone">
                                                            <div class="optionExpiresArea">
                                                                <div id="carouselArea" class="carouselArea">
                                                                    <div class="collapsed">
                                                                        <div class="carouselButton left">
                                                                            <div id="leftButton" class="inner">
                                                                                <span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div id="tradeBoxStrip" class="carousel_container">
                                                                            <div class="slider-fade left"></div>
                                                                            <div class="no-data hiddenArea others" style="display: none;">Currently there are no options</div>
                                                                            <div class="no-data hiddenArea favorites" style="display: none;">You currently have no favorites</div>
                                                                            <div id="carousel" class="carousel" style="display: block;">
                                                                                <div id="carousel_container" style="position: relative; left: 0px;">
                                                                                    <div id="2151" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000001" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">USD/JPY</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend up" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">104.846</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2118" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000004" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">EUR/USD</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend dwn" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">1.21014</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2112" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000007" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">EUR/JPY</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend dwn" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">126.880</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2125" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000010" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">GBP/JPY</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend up" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">143.954</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2093" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000013" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">AUD/JPY</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend up" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">80.032</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2099" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000016" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">AUD/USD</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend up" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">0.76335</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2137" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000019" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">NZD/JPY</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend dwn" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">75.317</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2115" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000022" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">EUR/GBP</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend up" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">0.88145</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2109" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000025" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">EUR/AUD</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend dwn" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">1.58528</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="2128" class="carousel_item ChangingStrike" order="100000000000090063747765900000000000028" style="width: 216px;">
                                                                                        <div class="instrument-panel-header">
                                                                                            <div class="instrument-panel-title eng" id="assetName">GBP/USD</div>

                                                                                            <div class="instrument-panel-duration">
                                                                                                <span class="duration">15m</span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="instrument-panel-body ChangingStrike">
                                                                                            <div class="clearfix first-child" style="display: block;">
                                                                                                <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue" style="display: block;">
                                                                                                    <div class="font-sb returnRateLabel">Payout</div>
                                                                                                    <div class="instrument-panel-payout eng returnRate">1.88</div>
                                                                                                </div>
                                                                                                <div class="pull-left clearfix" style="display: block;">
                                                                                                    <div class="instrument-panel-rate eng">
                                                                                                        <div class="upBoundary"></div>
                                                                                                        <div class="strike-value">
                                                                                                            <span class="arrows">
                                                                                                                <span class="trend dwn" style="display: inline-block;"></span>
                                                                                                            </span>
                                                                                                            <span class="strike" style="display: inline-block;">1.37290</span>
                                                                                                        </div>
                                                                                                        <div class="downBoundary"></div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="instrument-panel-closing assetTime last-child closing-at time">Closing: <span class="time-digits">01:00</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="slider-fade right"></div>
                                                                        </div>
                                                                        <div class="carouselButton right">
                                                                            <div id="rightButton" class="inner active">
                                                                                <span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="chart-header-info panel-header">
                                                                <div id="strikeAreaRegion">
                                                                    <div>
                                                                        <div id="strikeArea" class="strikeArea pull-left first-child">

                                                                            <span id="asset" class="trading-platform-instrument-title font-sb eng first-child">USD/JPY</span>
                                                                            <span id="direction" class="strike-direction trading-platform-instrument-direction up"></span>
                                                                            <span id="strike" class="trading-platform-instrument-rate eng current-rate">104.848</span>
                                                                            <span id="pipRange" class="trading-platform-instrument-spread-range last-child eng"></span>
                                                                            <span id="tradingClosed" class="trading-platform-instrument-trading-is-closed hiddenArea">Trading is closed</span>
                                                                            <span id="openingTime" class="trading-platform-instrument-open-time last-child hiddenArea" style="display: none;"></span>
                                                                            <span class="loading-icon hiddenArea"></span>

                                                                        </div>
                                                                        <div class="chartTimeArea pull-right last-child">

                                                                            <div id="closingTime" class="closingTime trading-platform-instrument-closing-time eng first-child">13:00</div>
                                                                            <div id="timeRemaining" class="timeRemaining trading-platform-instrument-time-left eng">
                                                                                <span class="time-left">12:03:48</span>
                                                                            </div>
                                                                            <a class="trading-platform-instrument-one-click-toggler tooltip-container last-child">
                                                                                <div class="tooltip one-touch first-child last-child hiddenArea" style="display: none; opacity: 0;">
                                                                                    <div class="title first-child">
                                                                                        One Click Trading
                                                                                    </div>
                                                                                    <div class="content last-child">
                                                                                        <p class="first-child">Switch to One Click Trading for faster trade execution. </p>
                                                                                        <p class="last-child">Note: When switched on, One Click Trading will be active on both the chart and trade panel.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </a>

                                                                        </div>
                                                                        <div class="clearfix">

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <section id="chartContainerRegion">
                                                    <div>
                                                        <section class="chartArea">
                                                            <div id="noItemsMessage hiddenArea"></div>
                                                            <section id="tradeBarRegion">
                                                                <div>

                                                                    <div id="tradeBar" class="trade_bar tooltip-container" style="display: block;">
                                                                        <div class="trade_bar_content">
                                                                            <div id="TradeUp" class="top label high eng"><span id="PercentUp">63</span>%</div>
                                                                            <div class="middle">
                                                                                <div class="bar_label">Traders Choice</div>
                                                                                <div class="bar">
                                                                                    <div id="ProgressUp" class="progressUp" style="height: 63%;"></div>
                                                                                    <div id="ProgressDown" class="progressDown" style="height: 37%;"></div>
                                                                                </div>
                                                                                <div class="clear"></div>
                                                                            </div>
                                                                            <div id="TradeDown" class="bottom label low eng"><span id="PercentDown">37</span>%</div>
                                                                        </div>
                                                                        <div class="toggle"></div>
                                                                    </div>

                                                                    <div id="tradeBarSeparator" class="tooltip-container hiddenArea" style="display: none;"></div>

                                                                    <div class="trader-choice tooltip hiddenArea" style="display: none; opacity: 0;">
                                                                        <div class="title">
                                                                            Traders Choice
                                                                        </div>
                                                                        <div class="content">
                                                                            View recent decisions by other traders with our Traders Choice sentiment indicator.
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </section>

                                                            <div id="chartContainer_All" class="chartContainer trading-platform-live-graph All chart_trade_bar">
                                                                <div id="trading_chart"></div>
                                                                <script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

                                                                <script>
                                                                    const chartProperties = {
                                                                        width: 800,
                                                                        height: 300,
                                                                        timeScale: {
                                                                            timeVisible: true,
                                                                            secondVisible: false,
                                                                        }
                                                                    }

                                                                    const domElement = document.getElementById('trading_chart');
                                                                    const chart = LightweightCharts.createChart(domElement, chartProperties);
                                                                    const candleSeries = chart.addCandlestickSeries();

                                                                    fetch('https://api.binance.com/api/v3/klines?symbol=BTCUSDT&interval=1m&limit=1000')
                                                                        .then(res => res.json())
                                                                        .then(data => {
                                                                            const cdata = data.map(d => {
                                                                                return {
                                                                                    time: d[0] / 1000,
                                                                                    open: parseFloat(d[1]),
                                                                                    high: parseFloat(d[2]),
                                                                                    low: parseFloat(d[3]),
                                                                                    close: parseFloat(d[4])
                                                                                }
                                                                            });

                                                                            candleSeries.setData(cdata);
                                                                        })
                                                                        .catch(err => console.log(err));
                                                                </script>
                                                                <canvas class="mpchart-marker-background-color" style="position: absolute; left: 0px; top: 0px; height: 300px; width: 792px;" height="300" width="792"></canvas><canvas class="mpchart-back-marker" style="position: absolute; left: 0px; top: 0px; height: 300px; width: 792px;" height="300" width="792"></canvas><canvas class="mpchart-graph-canvas" style="position: absolute; left: 0px; top: 0px; height: 300px; width: 792px;" height="300" width="792"></canvas><canvas class="mpchart-canvas" style="position: absolute; left: 0px; top: 0px; height: 300px; width: 792px;" height="300" width="792"></canvas><canvas class="mpchart-graph-canvas" style="position: absolute; left: 0px; top: 0px; height: 300px; width: 792px;" height="300" width="792"></canvas><canvas class="mpchart-marker-background-border" style="position: absolute; left: 0px; top: 0px; height: 300px; width: 792px;" height="300" width="792"></canvas><canvas class="mpchart-overlay" style="position: absolute; left: 0px; top: 0px; height: 300px; width: 792px;" height="300" width="792"></canvas>
                                                                <div id="TradeContainer" style="position: absolute; top: 17px; left: 434.586px;"><a href="#" id="upLink"><canvas id="cUpButton" width="27" height="27"></canvas></a>
                                                                    <div id="middleContainer" style="height: 34px"></div><a href="#" id="downLink"><canvas id="cDownButton" width="27" height="27"></canvas></a>
                                                                </div>
                                                                <div id="currentValue" data-modelkey="All" style="position: absolute; height: 32px; width: 32px; background-image: url(&quot;/Themes/RTCM/content/images/chart/current_value.png&quot;); top: 47.5px; left: 397.086px;">
                                                                    <div id="bkgPoint" style="position: absolute; background: url(&quot;/Themes/RTCM/content/images/chart/current_value_bkg.png&quot;) center center; width: 32px; height: 32px;"></div>
                                                                    <div id="strikePoint" style="position: absolute; background: url(&quot;/Themes/RTCM/content/images/chart/current_value.png&quot;) center center; width: 32px; height: 32px;"></div>
                                                                </div>
                                                            </div>

                                                            <section id="tradeActionMessageRegion">
                                                                <div>
                                                                    <div id="trade_action_message">
                                                                        <div id="notification_container" class="message-wrapper">
                                                                            <span id="notification_text" class="message"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section id="tradingModeRegion">
                                                                <div>
                                                                    <div id="tradeModeArea" class="trade_mode_area hiddenArea">
                                                                        <input type="checkbox" id="tradingMode" name="trading-mode">

                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section id="tradingZoneRegion" class="trading-platform-main-controls last-child" style="display: block;">
                                                                <div>
                                                                    <div id="trading_zone" class="subGraph ChangingStrike active">
                                                                        <div id="trading_zone_content">
                                                                            <div class="trading-platform-enabled-mode trading-ticket-invest" style="display: block;">
                                                                                <div id="changing_strike_trading_zone" class="changing-strike-area">
                                                                                    <div id="asset" class="strike_asset trading-platform-main-controls-instrument-title font-sb eng first-child">USD/JPY</div>
                                                                                    <div class="trading-platform-main-controls-live-rate">
                                                                                        <div class="pull-right last-child">
                                                                                            <div class="strikeValue">
                                                                                                <span id="direction" class="up"></span>
                                                                                                <span class="strike eng">104.848</span>
                                                                                                <span class="pipRange eng"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <form action="{{route('users.store', $user)}}" method="POST" enctype="multipart/form-data">
                                                                                    {{ method_field('PUT') }}
                                                                                    {{ csrf_field() }}
                                                                                    <div class="sums">
                                                                                        <div class="amountBox trading-platform-main-controls-investment font-m">
                                                                                            <span>$</span>
                                                                                            <input type="text" maxlength="10" id="amount" name="subGraph-sum-input" class="number-only eng first-child last-child">
                                                                                        </div>
                                                                                        <div class="amount-area trading-platform-main-controls-common-amount">
                                                                                            <div class="defaultAmount" val="50">$50</div>
                                                                                            <div class="defaultAmountSeparator"></div>
                                                                                            <div class="defaultAmount" val="100">$100</div>
                                                                                            <div class="defaultAmountSeparator"></div>
                                                                                            <div class="defaultAmount" val="500">$500</div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="invest-area clearfix trading-platform-main-controls-options none-one-click-control">
                                                                                        <div class="trading-platform-main-controls-select-direction first-child">
                                                                                            <div class="subGraph-updown">
                                                                                                <div class="subGraph-up">
                                                                                                    <div class="up button" id="up_button">High</div>
                                                                                                </div>
                                                                                                <div class="subGraph-down">
                                                                                                    <div class="dwn button" id="down_button">Low</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="invest-btn trading-platform-main-controls-place-bet last-child">

                                                                                            <a class="invest investNow_disabled button" id="invest_now_button" href="javascript:;" style="display: block;">Invest</a>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>

                                                                                <div class="trading-platform-main-controls-payout">
                                                                                    <div class="pull-left font-sb first-child">Payout</div>
                                                                                    <div class="pull-right last-child">
                                                                                        <span id="PayoutIn" class="trading-platform-main-controls-payout-rate eng first-child last-child">1.90</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="trading-platform-main-controls-return last-child">
                                                                                    <div class="pull-left font-sb first-child">Return</div>
                                                                                    <div id="cashPayout" class="pull-right trading-platform-maximum-return eng last-child">$19</div>
                                                                                </div>
                                                                                <div class="clear"></div>
                                                                            </div>
                                                                            <div class="trading-platform-disabled-mode trading-ticket-view hiddenArea" style="display: none;">
                                                                                <div class="trading-platform-disabled-title">Trading is closed</div>
                                                                                <div class="trading-platform-disabled-timer-countdown">
                                                                                    <div class="title">Market reopens in</div>
                                                                                    <div class="timer">
                                                                                        <div class="cell days">00</div>
                                                                                        <div class="cell hours">00</div>
                                                                                        <div class="cell minutes">00</div>
                                                                                        <div class="cell seconds">00</div>
                                                                                    </div>
                                                                                    <div class="timer-hints">
                                                                                        <div class="cell days">DAYS</div>
                                                                                        <div class="cell hours">HRS</div>
                                                                                        <div class="cell minutes">MINS</div>
                                                                                        <div class="cell seconds">SECS</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <section id="tradingZonePopupRegion">
                                                                <div>
                                                                    <div id="quickTradeContainer"></div>
                                                                    <div id="sellTradeActionContainer"></div>
                                                                </div>
                                                            </section>
                                                            <div class="clearfix"></div>
                                                        </section>
                                                    </div>
                                                </section>
                                            </li>
                                        </ul>
                                    </div>
                                </section>


                                <script type="text/html" id="template-tradeAreaNoItems">
                                    <div class="trading-platform-loading-screen">
                                        <div class="header">
                                            LOADING <span class="loading-icon"></span>
                                        </div>
                                        <div class="loading-bar">
                                            <div class="fill">
                                            </div>
                                        </div>
                                    </div>
                                </script>

                                <script type="text/html" id="template-tradeAreaItem">
                                    <section id="chartHeaderZoneRegion"></section>
                                    <section id="chartContainerRegion"></section>
                                </script>

                                <script type="text/html" id="template-tradeAreas">
                                    <ul id="tradeAreas"></ul>
                                </script>

                                <script type="text/html" id="template-ChartHeaderZoneView">
                                    <div class="chartHeaderZone" id="chartHeaderZone">
                                        <div class="optionExpiresArea">
                                            <div id="carouselArea" class="carouselArea">
                                            </div>
                                        </div>
                                        <div class="chart-header-info panel-header">
                                            <div id="strikeAreaRegion"></div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </script>

                                <script type="text/html" id="template-carousel">
                                    <div class="carouselButton left">
                                        <div id="leftButton" class="inner">
                                            <span></span>
                                        </div>
                                    </div>
                                    <div id="tradeBoxStrip" class="carousel_container">
                                        <div class="slider-fade left"></div>
                                        <div class="no-data hiddenArea others">Currently there are no options</div>
                                        <div class="no-data hiddenArea favorites">You currently have no favorites</div>
                                        <div id="carousel" class="carousel">
                                            <div id="carousel_container" style="position: relative"></div>
                                        </div>
                                        <div class="slider-fade right"></div>
                                    </div>
                                    <div class="carouselButton right">
                                        <div id="rightButton" class="inner">
                                            <span></span>
                                        </div>
                                    </div>
                                </script>

                                <script type="text/html" id="template-tradeBox">
                                    <div class="instrument-panel-header">
                                        <div class="instrument-panel-title eng" id="assetName"><%= assetName%></div>
                                        <%if (MP.favoritesCategory) { %>
                                        <a title="Add to favorites" class="instrument-panel-favourite favoritesIcon hiddenArea"></a>
                                        <% } %>
                                        <div class="instrument-panel-duration">
                                            <span class="duration"></span>
                                        </div>
                                    </div>
                                    <div class="instrument-panel-body <%= optionType%>">
                                        <div class="clearfix first-child">
                                            <div class="instrument-panel-payout-wrap pull-left clearfix ProfitValue">
                                                <div class="font-sb returnRateLabel">Payout</div>
                                                <div class="instrument-panel-payout eng returnRate"><%=((returnRate / 100) + 1).toFixed(2)%></div>
                                            </div>
                                            <div class="pull-left clearfix">
                                                <div class="instrument-panel-rate eng">
                                                    <div class="upBoundary"></div>
                                                    <div class="strike-value">
                                                        <span class="arrows">
                                                            <span class="trend"></span>
                                                        </span>
                                                        <span class="strike"></span>
                                                    </div>
                                                    <div class="downBoundary"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="instrument-panel-closing assetTime last-child closing-at time"></div>
                                    </div>
                                </script>

                                <script type="text/html" id="template-strikeAreaRegion">
                                    <div id="strikeArea" class="strikeArea pull-left first-child">
                                        <%if (key != 'NoItems') { %>
                                        <span id="asset" class="trading-platform-instrument-title font-sb eng first-child"></span>
                                        <span id="direction" class="strike-direction trading-platform-instrument-direction"></span>
                                        <span id="strike" class="trading-platform-instrument-rate eng current-rate"></span>
                                        <span id="pipRange" class="trading-platform-instrument-spread-range last-child eng"></span>
                                        <span id="tradingClosed" class="trading-platform-instrument-trading-is-closed hiddenArea">Trading is closed</span>
                                        <span id="openingTime" class="trading-platform-instrument-open-time last-child hiddenArea"></span>
                                        <span class="loading-icon hiddenArea"></span>
                                        <% } %>
                                    </div>
                                    <div class="chartTimeArea pull-right last-child">
                                        <%if (key != 'NoItems') { %>
                                        <div id="closingTime" class="closingTime trading-platform-instrument-closing-time eng first-child"></div>
                                        <div id="timeRemaining" class="timeRemaining trading-platform-instrument-time-left eng">
                                            <span class="time-left hiddenMode"></span>
                                        </div>
                                        <a class="trading-platform-instrument-one-click-toggler tooltip-container last-child">
                                            <div class="tooltip one-touch first-child last-child hiddenArea">
                                                <div class="title first-child">
                                                    One Click Trading
                                                </div>
                                                <div class="content last-child">
                                                    <p class="first-child">Switch to One Click Trading for faster trade execution. </p>
                                                    <p class="last-child">Note: When switched on, One Click Trading will be active on both the chart and trade panel.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <% } %>
                                    </div>
                                    <div class="clearfix">
                                        <%if (key == 'NoItems') { %>
                                        <div id="chartMessage" class="trading-platform-instrument-trading-is-closed">Trading is closed</div>
                                        <% } %>
                                    </div>
                                </script>

                                <script type="text/html" id="template-chartContainerView">
                                    <section class="chartArea">
                                        <div id="noItemsMessage hiddenArea"></div>
                                        <section id="tradeBarRegion"></section>

                                        <div id="chartContainer_<%= key %>" class="chartContainer trading-platform-live-graph <%= key %>"></div>

                                        <section id="tradeActionMessageRegion"></section>
                                        <section id="tradingModeRegion"></section>
                                        <section id="tradingZoneRegion" class="trading-platform-main-controls last-child"></section>
                                        <section id="tradingZonePopupRegion"></section>
                                        <div class="clearfix"></div>
                                    </section>
                                </script>

                                <script type="text/html" id="template-tradingModeRegion">
                                    <div id="tradeModeArea" class="trade_mode_area hiddenArea">
                                        <input type="checkbox" id="tradingMode" name="trading-mode" />

                                    </div>
                                </script>

                                <script type="text/html" id="template-tradeBarRegion">
                                    <div id="tradeBar" class="trade_bar tooltip-container">
                                        <div class="trade_bar_content">
                                            <div id="TradeUp" class="top label high eng"><span id="PercentUp">0</span>%</div>
                                            <div class="middle">
                                                <div class="bar_label">Traders Choice</div>
                                                <div class="bar">
                                                    <div id="ProgressUp" class="progressUp"></div>
                                                    <div id="ProgressDown" class="progressDown"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div id="TradeDown" class="bottom label low eng"><span id="PercentDown">0</span>%</div>
                                        </div>
                                        <div class="toggle"></div>
                                    </div>

                                    <div id="tradeBarSeparator" class="tooltip-container hiddenArea"></div>

                                    <div class="trader-choice tooltip hiddenArea">
                                        <div class="title">
                                            Traders Choice
                                        </div>
                                        <div class="content">
                                            View recent decisions by other traders with our Traders Choice sentiment indicator.
                                        </div>
                                    </div>
                                </script>


                                <script type="text/html" id="template-tradeActionMessageView">
                                    <div id="trade_action_message">
                                        <div id="notification_container" class="message-wrapper">
                                            <span id="notification_text" class="message"></span>
                                        </div>
                                    </div>
                                </script>

                                <script type="text/html" id="template-tradingZone">
                                    <div id="trading_zone" class="subGraph">
                                        <div id="trading_zone_content">
                                            <div class="trading-platform-enabled-mode trading-ticket-invest">
                                                <div id="changing_strike_trading_zone" class="changing-strike-area">
                                                    <div id="asset" class="strike_asset trading-platform-main-controls-instrument-title font-sb eng first-child"></div>
                                                    <div class="trading-platform-main-controls-live-rate">
                                                        <div class="pull-right last-child">
                                                            <div class="strikeValue">
                                                                <span id="direction"></span>
                                                                <span class="strike eng"></span>
                                                                <span class="pipRange eng"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sums">
                                                    <div class="amountBox trading-platform-main-controls-investment font-m">
                                                        <span>$</span>
                                                        <input type="text" maxlength="10" id="amount" name="subGraph-sum-input" class="number-only eng first-child last-child">
                                                    </div>
                                                    <div class="amount-area trading-platform-main-controls-common-amount">
                                                        <div class='defaultAmount' val='50'>$50</div>
                                                        <div class='defaultAmountSeparator'></div>
                                                        <div class='defaultAmount' val='100'>$100</div>
                                                        <div class='defaultAmountSeparator'></div>
                                                        <div class='defaultAmount' val='500'>$500</div>
                                                    </div>
                                                </div>
                                                <div class="invest-area clearfix trading-platform-main-controls-options none-one-click-control">
                                                    <div class="trading-platform-main-controls-select-direction first-child">
                                                        <div class="subGraph-updown">
                                                            <div class="subGraph-up">
                                                                <div class="up button" id="up_button">High</div>
                                                            </div>
                                                            <div class="subGraph-down">
                                                                <div class="dwn button" id="down_button">Low</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="invest-btn trading-platform-main-controls-place-bet last-child">
                                                        <a class="invest investNow_disabled button" id="invest_now_button" href="javascript:;">Invest</a>
                                                    </div>
                                                </div>
                                                <div class="trading-platform-main-controls-payout">
                                                    <div class="pull-left font-sb first-child">Payout</div>
                                                    <div class="pull-right last-child">
                                                        <span id="PayoutIn" class="trading-platform-main-controls-payout-rate eng first-child last-child"></span>
                                                    </div>
                                                </div>
                                                <div class="trading-platform-main-controls-return last-child">
                                                    <div class="pull-left font-sb first-child">Return</div>
                                                    <div id="cashPayout" class="pull-right trading-platform-maximum-return eng last-child"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="trading-platform-disabled-mode trading-ticket-view hiddenArea">
                                                <div class="trading-platform-disabled-title">Trading is closed</div>
                                                <div class="trading-platform-disabled-timer-countdown">
                                                    <div class="title">Market reopens in</div>
                                                    <div class="timer">
                                                        <div class="cell days">00</div>
                                                        <div class="cell hours">00</div>
                                                        <div class="cell minutes">00</div>
                                                        <div class="cell seconds">00</div>
                                                    </div>
                                                    <div class="timer-hints">
                                                        <div class="cell days">DAYS</div>
                                                        <div class="cell hours">HRS</div>
                                                        <div class="cell minutes">MINS</div>
                                                        <div class="cell seconds">SECS</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </script>

                                <script type="text/html" id="template-tradingZonePopup">
                                    <div id="quickTradeContainer"></div>
                                    <div id="sellTradeActionContainer"></div>
                                </script>

                                <script type="text/html" id="template-tradingZoneQuickTradePopup">
                                    <div id="quickTradeDiv" class="buyDiv trading-platform-popup" style="display: none;">
                                        <div class="trading-platform-popup-header first-child">
                                            Invest
                                            <div class="trading-platform-popup-close close first-child last-child"></div>
                                        </div>
                                        <div class="trading-platform-popup-body last-child">
                                            <div class="trading-platform-invest-popup-live-rate first-child">
                                                <div class="trading-platform-main-controls-instrument-title pull-left font-sb first-child">
                                                    <span id="asset" class="strike_area_asset strike_area_text"></span>
                                                </div>
                                                <div class="pull-right current-rate last-child">
                                                    <div class="strikeValue">
                                                        <span id="direction"></span>
                                                        <span class="strike strike_area_text eng"></span>
                                                        <span class="pipRange hiddenArea"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="trading-platform-invest-popup-payout">
                                                <div class="pull-left font-sb first-child">
                                                    Payout
                                                </div>
                                                <div class="pull-right last-child">
                                                    <span id="Payout" class="trading-platform-main-controls-payout-rate first-child last-child eng"></span>
                                                </div>
                                            </div>
                                            <div class="sums">
                                                <div class="amountBox trading-platform-main-controls-investment font-m">
                                                    <span>$</span>
                                                    <input type="text" maxlength="10" id="amount" name="subGraph-sum-input" class="number-only eng first-child last-child">
                                                </div>
                                                <div class="amount-area trading-platform-main-controls-common-amount">
                                                    <div class='defaultAmount' val='50'>$50</div>
                                                    <div class='defaultAmountSeparator'></div>
                                                    <div class='defaultAmount' val='100'>$100</div>
                                                    <div class='defaultAmountSeparator'></div>
                                                    <div class='defaultAmount' val='500'>$500</div>
                                                </div>
                                            </div>
                                            <div class="invest-area clearfix trading-platform-main-controls-options none-one-click-control">
                                                <div class="trading-platform-main-controls-select-direction first-child">
                                                    <div class="subGraph-updown">
                                                        <div class="subGraph-up">
                                                            <div class="up button" id="up_button">High</div>
                                                        </div>
                                                        <div class="subGraph-down">
                                                            <div class="dwn button" id="down_button">Low</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="invest-btn trading-platform-main-controls-place-bet last-child">
                                                    <a id="quickTradeInvestBtn" class=" invest investnow_disabled button" href="javascript:;">Invest</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </script>



                            </div>

                            <div class="container trading-app-holiday">
                                <section id="holidayRegion">
                                    <script type="text/html" id="template-holidayContainerView">
                                        <section class="holidayArea">
                                            <div class="holiday-header">
                                                <span id="tradingClosed" class="trading-platform-instrument-trading-is-closed">Trading is closed</span>
                                                <span id="openingTime" class="trading-platform-instrument-open-time last-child">Market will reopen at <span class="open-future-time">00:00</span></span>
                                            </div>
                                            <div class="holiday-body">
                                                <div class="chartArea">
                                                    <div id="chartContainer" class="chartContainer trading-platform-live-graph collapsed future"></div>
                                                    <section id="tradingZoneRegion" class="trading-platform-main-controls last-child">
                                                        <div>
                                                            <div id="trading_zone" class="subGraph ChangingStrike">
                                                                <div id="trading_zone_content">
                                                                    <div class="trading-platform-disabled-mode trading-ticket-view hiddenArea future">
                                                                        <div class="trading-platform-disabled-title">Trading is closed</div>
                                                                        <div class="trading-platform-disabled-timer-countdown">
                                                                            <div class="title">Market reopens in</div>
                                                                            <div class="timer">
                                                                                <div class="cell days">00</div>
                                                                                <div class="cell hours">00</div>
                                                                                <div class="cell minutes">00</div>
                                                                                <div class="cell seconds">00</div>
                                                                            </div>
                                                                            <div class="timer-hints">
                                                                                <div class="cell days">DAYS</div>
                                                                                <div class="cell hours">HRS</div>
                                                                                <div class="cell minutes">MINS</div>
                                                                                <div class="cell seconds">SECS</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </section>
                                    </script>
                                </section>
                            </div>

                            <div class="container trading-app-tradeactions">
                                <section id="tradeActionsRegion">
                                    <div id="trade_actions_container" class="trade_actions_container">
                                        <div class="tradeActionTableHeader panel-header light-grey first-child">
                                            <div class="pull-left first-child">
                                                <div class="font-m-b first-child last-child">
                                                    Current Activity
                                                </div>
                                            </div>
                                            <div class="pull-right font-sb view-all-trade-actions last-child not-active">
                                                <a id="ExpandAsset" href="javascript:void(0)" data-theme="RTCM" class="ExpandAsset popup-link first-child last-child">
                                                    View all Trade Actions &nbsp;<span class="icon-magnifier first-child last-child"></span>
                                                </a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="tradeActionsTableArea panel-body last-child">
                                            <div class="trading-platform-investments-list-no-data first-child">
                                                You have no active trades
                                            </div>
                                            <div id="tradeActionsTableArea" class=""></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="layout-after-main" class="group">
    </div>

    <div id="layout-footer" class="group">
        <footer id="footer">
            <div class="zone zone-footer">
                <article class="widget-appstorewebapppopupen widget-footer widget-html-widget widget">
                    <p>
                        <link rel="stylesheet" type="text/css" href="/Media/RTCMDynamicPopUp/dynamic-popup.min.css" />
                    </p>
                    <div class="header-modal-dialogs">
                        <div class="modal fade" id="dynamic-popup" tabindex="-1" role="dialog">
                            <div class="modal-dialog-wrapper">
                                <div class="modal-dialog-center">
                                    <div class="modal-dialog">
                                        <div class="modal-body">
                                            <div class="body-left">
                                                <div class="heading"></div>
                                                <div class="my-wrap">
                                                    <div class="input-wrap label-on-top cst-scr-bar"></div>
                                                    <div class="bot-shadow"></div>
                                                </div>
                                            </div>
                                            <div class="body-right"><img id="pop-up-image" alt="Pop-up image" /></div>
                                        </div>
                                        <div class="modal-footer clearfix">
                                            <div class="left-button-anc"><a class="left-button" href="javascript:" id="lft-btn">A</a></div>
                                            <div class="follow-anc"><a class="right-button" id="rght-btn" href="javascript:">B</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        <script type="text/javascript">
                            // <![CDATA[
                            $(document).ready(function() {
                                $("#footer-apple-icon.webapp-trading").click(function(o) {
                                    (o.preventDefault(), o.stopPropagation(), $("#dynamic-popup .heading").html("Trading HighLow on your iOS device"), $("#dynamic-popup .input-wrap").html('The HighLow native app for iOS is no longer supported, but customers using iPhone and iPad can still trade HighLow on their smartphone browser.<p style="margin-bottom: 10px;"></p>Try the HighLow mobile web app by going to highlow.net on your mobile.'), $("#dynamic-popup #pop-up-image").attr("src", "/Themes/RTCM/Content/images/ios-shutdown.svg"), $("#dynamic-popup .left-button").addClass("close-anc"), $("#dynamic-popup .left-button").text("Close"), $("#dynamic-popup .left-button").show(), $("#dynamic-popup .bot-shadow").hide(), $("#dynamic-popup #lft-btn").unbind("click"), $("#dynamic-popup #rght-btn").unbind("click"), window.matchMedia("(max-width: 768px)").matches) && ($("#dynamic-popup .input-wrap").html('<p style="text-align: start;">The HighLow native app for iOS is no longer supported, but customers using iPhone and iPad can still trade HighLow on their smartphone browser.</p><p style="margin-bottom: 10px;"></p><p style="text-align: start;">Try the HighLow mobile web app by going to highlow.net on your mobile.</p>'), i.appendTo("#dynamic-popup .label-on-top"), $("#dynamic-popup .modal-dialog").css("max-height", $(window).height() - 30), $(".mobile-landing #header").show(), $("#dynamic-popup .modal-dialog").addClass("mobile-view"), /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream && ($("#dynamic-popup .bot-shadow").appendTo("#dynamic-popup .modal-body"), $("#dynamic-popup .bot-shadow").show(), $("#dynamic-popup .body-left").addClass("hidden-psd"), $("body").addClass("noscroll"), $(".customNavBar .navBarHeader").css("visibility", "hidden"), $(".customNavBar .navbar-toggle").css("visibility", "hidden")));
                                    return $("#dynamic-popup").modal(), $("#dynamic-popup #lft-btn").click(function() {
                                        a(), $("#dynamic-popup").modal("hide")
                                    }), $("#dynamic-popup #rght-btn").click(function() {
                                        a(), -1 !== window.location.pathname.indexOf("mobile") ? ($("#dynamic-popup").modal("hide"), window.location.href = "/trading") : ($("#dynamic-popup").modal("hide"), document.body.scrollTop = 0, document.documentElement.scrollTop = 0)
                                    }), !1
                                });
                                var i = $("#dynamic-popup .body-right");

                                function a() {
                                    window.matchMedia("(max-width: 768px)").matches && ($(".mobile-landing #header").hide(), $("body").removeClass("noscroll"), $(".customNavBar .navBarHeader").css("visibility", "visible"), $(".customNavBar .navbar-toggle").css("visibility", "visible"))
                                }
                                window.addEventListener("resize", function() {
                                    $("#dynamic-popup .modal-dialog.mobile-view").css("max-height", $(window).height() - 30)
                                }, !1);
                                var o = $("#dynamic-popup");
                                o.on("show.bs.modal", function() {
                                    o.css("visibility", "visible"), $("body").addClass("modal-open")
                                }).on("hidden.bs.modal", function() {
                                    o.css("visibility", "hidden"), $("body").removeClass("modal-open").removeAttr("style")
                                })
                            });
                            // ]]>
                        </script>
                    </p>
                </article>
                <article class="widget-footeren widget-footer widget-html-widget widget">
                    <p></p>
                    <div class="container">
                        <div class="clearfix">
                            <div class="row first-child">
                                <div class="affiliation-wrapper col-sm-9 first-child">
                                    <div class="affiliation first-child last-child">
                                        <h3 class="first-child">HighLow Markets partners with trusted, secure &amp; regulated businesses</h3>
                                        <div class="clearfix last-child">
                                            <!--empty-->
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-cta-wrapper col-sm-3 last-child"><a href="/GoToExternalLink?place=/affiliates/sign-in" class="block first-child" id="affiliate-login">Affiliates login <span class="affiliate-icon"></span></a>
                                    <div id="footer-mobile-app-cta-mobile" class="last-child">
                                        <h3 class="block header">Download HighLow for your mobile</h3>
                                        <div class="clearfix"><a href="/GoToExternalLink?place=/resources/downloads/android" id="footer-android-icon" class="icon block pull-left"> Android </a> <a href="https://itunes.apple.com/us/app/highlow-binary-options/id762015915?mt=8" id="footer-apple-icon" class="icon block pull-right"> App Store </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="col-xs-12 keyline"></div>
                            <div class="row">
                                <div class="col-sm-9 first-child">
                                    <div class="headed-list small-text pull-left">
                                        <h4 class="footer-links-group-heading header block">Trade</h4>
                                        <ul class="footer-links-list">
                                            <li><a href="/">Access Trade Area</a></li>
                                            <li><a href="/GoToExternalLink?place=/trade/trading-platforms">Trading Platforms</a></li>
                                            <li><a href="/GoToExternalLink?place=/trade/option-types">Option Types</a></li>
                                            <li><a href="/GoToExternalLink?place=/trade/trade-conditions">Trading Conditions</a></li>
                                            <li><a href="/GoToExternalLink?place=/trade/options-schedule">Option Schedule</a></li>
                                            <li><a href="/GoToExternalLink?place=/trade/expiry-rates">Expiry Rates</a></li>
                                        </ul>
                                    </div>
                                    <div class="headed-list small-text pull-left">
                                        <h4 class="footer-links-group-heading header block">HighLow</h4>
                                        <ul class="footer-links-list">
                                            <li><a href="/GoToExternalLink?place=/overview">HighLow Overview</a></li>
                                            <li><a href="/GoToExternalLink?place=/why-trade">Why Trade</a></li>
                                            <li><a href="/GoToExternalLink?place=/banking">Banking</a></li>
                                            <li><a href="/GoToExternalLink?place=/points">HighLow Points</a></li>
                                            <li><a href="/GoToExternalLink?place=/company">Company</a></li>
                                            <li><a href="/GoToExternalLink?place=/help-and-support">Help And Support</a></li>
                                        </ul>
                                    </div>
                                    <div class="headed-list small-text pull-left">
                                        <h4 class="footer-links-group-heading header block">Resources</h4>
                                        <ul class="footer-links-list">
                                            <li><a href="/GoToExternalLink?place=/resources/faq">FAQ</a></li>
                                            <li><a href="/Account/QuickDemoLogin">Quick Demo</a></li>
                                            <li><a href="/GoToExternalLink?place=/resources/walk-through">Platform Walkthrough</a></li>
                                            <li><a href="/GoToExternalLink?place=/resources/options-glossary">Options Glossary</a></li>
                                        </ul>
                                    </div>
                                    <div class="headed-list small-text pull-left">
                                        <h4 class="footer-links-group-heading header block">Members</h4>
                                        <ul class="footer-links-list">
                                            <li><a href="/GoToExternalLink?place=/login">Login</a></li>
                                            <li><a href="/GoToExternalLink?place=/forgot-password">Forgotten Password</a></li>
                                            <li><a href="/GoToExternalLink?place=/my-account/dashboard">My Account</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-3 last-child">
                                    <div id="footer-mobile-app-cta" class="first-child last-child">
                                        <h3 class="block header">Trade HighLow on your mobile device</h3>
                                        <div class="clearfix">
                                            <div id="learn-more-panel"><a href="/GoToExternalLink?place=/trade/trading-platforms" class="anchor-wrap"></a>
                                                <div class="download-mobile-cta"><img src="images/learn-more-mobile.png" /> <span class="download-mobile-cta-text">Learn more</span> <span class="download-mobile-cta-text-mob">Trade HighLow on <br />your mobile device</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br /> <br />
                        <div class="clearfix disclaimer">
                            <h5 class="disclaimerHeader">General Advice Disclaimer.</h5>
                            <small>This website and the financial products issued herein, is published and owned by HighLow Markets Pty Ltd (ACN 143 553 628), holder of Australian Financial Services Licence number 364264. You should satisfy yourself that entry into a financial product offered by HighLow Markets Pty Ltd is permissible in your jurisdiction. The information on this site is of a general nature only. To the extent any advice is provided, it is general advice only and does not take into account your objectives, financial situation or needs. Before acting on any advice, you should consider the appropriateness of the advice having regard your objectives, financial situation and needs, consult your own professional advisors and obtain a copy of and read the Product Disclosure Statement, Financial Services Guide and Account Terms and Conditions and our Privacy Policy, before making an investment decision. Dealing in foreign exchange contracts and our other over-the-counter derivative products carries significant risk. You may lose all of your initial investment and you may also incur losses that exceed your initial investment. Functions like payment processing, market data and financial commentaries may be powered by our UK subsidiary, HighLow Markets Ltd, Medius House, 2 Sheraton Street, London, W1F 8BH, United Kingdom. <br /> We do not provide or allow managed discretionary account services on our accounts. You must only trade on your own account and you are warned we have broad powers to enforce our Account Terms and Conditions.</small>
                        </div>
                        <p class="ending-row"><a class="click-link" href="/GoToExternalLink?place=/terms-and-agreements">Terms and Agreements</a> <span class="footer-copyright"> | &copy; 2020 HighLow Markets Pty Ltd. All rights reserved.</span></p>
                    </div>
                </article>
            </div>
        </footer>
    </div>



    <div class="p-ticker p-ticker__news-scroller p-ticker__news-scroller__platform  hidden-logged-in" data-url="//cdn2.highlow.net/feed/news-en-public.json?t=637477656798648342" data-wrapper-class="p-ticker__news-scroller--inner-wrap" data-speed="60" data-update-interval="120000">

        <div class="p-ticker__news-scroller--not-logged-in-alert">
            <span class="p-ticker__news-scroller--not-logged-in-alert--mobile-wrapper">
                <span class="p-ticker__news-scroller--not-logged-in-alert--mobile-inner-wrapper">
                    <div class="p-ticker__news-scroller--not-logged-in-alert--body">
                        <div class="p-ticker__news-scroller--not-logged-in-alert--title">
                            Live* Market News headlines and stories are available in real accounts only
                        </div>
                        <div class="p-ticker__news-scroller--not-logged-in-alert--sub-title">
                            Sign-up for free and receive a $50 cash-back
                        </div>
                        <img src="/Themes/RTCM/Content/images/news-feed-illustration.png" class="p-ticker__news-scroller--not-logged-in-alert--illustration">
                    </div>
                    <div class="p-ticker__news-scroller--not-logged-in-alert--footer">
                        <a class="p-ticker__news-scroller--not-logged-in-alert--footer-link highlight" href="/GoToExternalLink?place=/account">
                            Sign me up now!
                        </a>

                        <span class="p-ticker__news-scroller--not-logged-in-alert--close toggler" data-toggle-class="alert" data-toggle-target=".p-ticker__news-scroller">
                            <img src="/Themes/RTCM/Content/images/alert-close.png" alt="close">
                        </span>
                        <span class="p-ticker__news-scroller--not-logged-in-alert--foot-note">
                            * feed is delayed on public pages
                        </span>
                    </div>
                </span>
            </span>
        </div>

        <div class="p-ticker__news-scroller__platform--toggle">
            <div class="p-ticker__news-scroller__platform--toggle--tooltip">
                Market News is hidden. <br>
                <a class=" toggler" data-toggle-class="off" data-toggle-target=".p-ticker__news-scroller__platform" onclick="$.cookie('newsbar', 'on');">Show Market News</a>
            </div>
        </div>


        <div class="p-ticker--wrapper">

            <div class="p-ticker--inner-wrap p-ticker__news-scroller--inner-wrap active" style="width: 9466px; left: -7425px;"></div>

            <marquee>
                <div class="p-ticker--item p-ticker__news-scroller--item">

                    <span class="p-ticker__news-scroller--item-date">09/14/2020</span>
                    <span class="p-ticker__news-scroller--item-category">AUSSIE TECHS: Still In A Corrective Phase:&nbsp;</span>
                    <span class="p-ticker__news-scroller--item-brief">AUSSIE TECHS: Still In A Corrective Phase * RES 4: 0.7464 High Jul 25, 2018 * R…</span>

                    <span class="p-ticker__news-scroller--item-date">09/14/2020</span>
                    <span class="p-ticker__news-scroller--item-category">AUSSIE TECHS: Still In A Corrective Phase:&nbsp;</span>
                    <span class="p-ticker__news-scroller--item-brief">AUSSIE TECHS: Still In A Corrective Phase * RES 4: 0.7464 High Jul 25, 2018 * R…</span>

                    <span class="p-ticker__news-scroller--item-date">09/14/2020</span>
                    <span class="p-ticker__news-scroller--item-category">AUSSIE TECHS: Still In A Corrective Phase:&nbsp;</span>
                    <span class="p-ticker__news-scroller--item-brief">AUSSIE TECHS: Still In A Corrective Phase * RES 4: 0.7464 High Jul 25, 2018 * R…</span>


                </div>
            </marquee>

        </div>
    </div>


    <div class="onboarding-overlay"></div>

</body>

</html>