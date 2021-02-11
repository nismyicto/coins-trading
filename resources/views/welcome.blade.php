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
                                        @endguest
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                    </nav>
                </div>
            </article>
        </div>
    </header>

    <div id="layout-before-main" class="group sticky-strip trows">
        <div class="content">
            <div class="zone zone-before-main">
                <nav class="navbar navbar-default sticky-strip visible-logged-in" id="account-menu-bar-wrapper">
                    <div class="content">
                        <div id="account-menu-bar">
                            <div class="container">
                                <div id="account-balance" class="">
                                    <div class="pull-right account-balance pt-4">
                                        <h4 class="first-child">Account Balance</h4>
                                        <span id="balance" class="balance-display balanceValue balanceArea last-child">@cannot('admin-user')
                                            <div class="content">
                                                <div class="d-flex justify-content-end text-white">
                                                    {{ Auth::user()->coins ?? '0.00'}}
                                                </div>
                                            </div>
                                            @endcannot
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
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
                                                            <span id="ChangingStrikeOOD">HighLow Spread</span><span class="closed hiddenArea">Closed</span>
                                                        </li>
                                                        <li class="gameTab selected" data-game="ChangingStrike">
                                                            <span id="ChangingStrike">Turbo</span><span class="closed hiddenArea">Closed</span>
                                                        </li>
                                                        <li class="gameTab" data-game="ChangingStrikeOOD">
                                                            <span id="ChangingStrikeOOD">Turbo Spread</span><span class="closed hiddenArea">Closed</span>
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
                                                                                <span id="time">15:00</span>
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
                                                                <div id="trading_chart">

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
                                                                                <form action="{{route('invest.store')}}" method="POST" enctype="multipart/form-data">                                                                        
                                                                                    {{ csrf_field() }}
                                                                                    <div class="sums">
                                                                                        <div class="amountBox trading-platform-main-controls-investment font-m">
                                                                                            <span>$</span>
                                                                                            <input type="text" maxlength="10" name="amount" id="amount" name="subGraph-sum-input" class="number-only eng first-child last-child">
                                                                                        </div>
                                                                                        <div class="amount-area trading-platform-main-controls-common-amount">
                                                                                            <div class="defaultAmount" val="50" onclick="myFunction50()">$50</div>
                                                                                            <div class="defaultAmountSeparator"></div>
                                                                                            <div class="defaultAmount" val="100" onclick="myFunction100()">$100</div>
                                                                                            <div class="defaultAmountSeparator"></div>
                                                                                            <div class="defaultAmount" val="500" onclick="myFunction500()">$500</div>
                                                                                        </div>
                                                                                        <script>
                                                                                            //$(document).ready(function() {
                                                                                                function myFunction50() {
                                                                                                    document.getElementById("amount").value = "50";
                                                                                                }

                                                                                                function myFunction100() {
                                                                                                    document.getElementById("amount").value = "100";
                                                                                                }

                                                                                                function myFunction500() {
                                                                                                    document.getElementById("amount").value = "500";
                                                                                                }

                                                                                                function startTimer(duration, display) {
                                                                                                    var timer = duration,
                                                                                                        minutes, seconds;
                                                                                                    setInterval(function() {
                                                                                                        minutes = parseInt(timer / 60, 10);
                                                                                                        seconds = parseInt(timer % 60, 10);

                                                                                                        minutes = minutes < 10 ? "0" + minutes : minutes;
                                                                                                        seconds = seconds < 10 ? "0" + seconds : seconds;

                                                                                                        display.textContent = minutes + ":" + seconds;

                                                                                                        if (--timer < 0) {
                                                                                                            timer = duration;
                                                                                                        }
                                                                                                    }, 1000);
                                                                                                }

                                                                                                window.onload = function() {
                                                                                                    var fifteenMinutes = 60 * 15,
                                                                                                        display = document.querySelector('#time');
                                                                                                    startTimer(fifteenMinutes, display);
                                                                                                };

                                                                                                $('#bid_state_button').on('click', function() {
                                                                                                    if ($('div[name=up_button]').click) {
                                                                                                        document.getElementById("bid_state_button").value = 'H';
                                                                                                    } else {
                                                                                                        document.getElementById("bid_state_button").value = 'L';
                                                                                                    }
                                                                                                })
                                                                                            //})
                                                                                        </script>
                                                                                    </div>
                                                                                    <div class="invest-area clearfix trading-platform-main-controls-options none-one-click-control">
                                                                                        <div class="trading-platform-main-controls-select-direction first-child">
                                                                                            <div class="subGraph-updown">
                                                                                                <div class="subGraph-up">
                                                                                                    <div class="up button" id="bid_state_button" name="up_button" onclick="upButton()">High</div>
                                                                                                </div>
                                                                                                <div class="subGraph-down">
                                                                                                    <div class="dwn button" id="bid_state_button" name="down_button">Low</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="invest-btn trading-platform-main-controls-place-bet last-child">

                                                                                            <button type="submit" class="invest investNow_disabled button" id="invest_now_button" style="display: block;">Invest</button>
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
            @include('layouts.footer')
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
<script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>

<script>
    const chartProperties = {
        width: 800,
        height: 300,
        timeScale: {
            timeVisible: true,
            secondVisible: false,
        },
    }

    const domElement = document.getElementById('trading_chart');
    const chart = LightweightCharts.createChart(domElement, chartProperties);
    chart.applyOptions({
        layout: {
            backgroundColor: '#353535',
            textColor: '#ffe048',
            fontSize: 12,
            fontFamily: 'Calibri',
        },
        grid: {
            vertLines: {
                color: '#353535',
                style: 1,
                visible: true,
            },
            horzLines: {
                color: '#353535',
                style: 1,
                visible: true,
            },
        },
    });

    var candleSeries = chart.addCandlestickSeries();

    var data = [{
            time: '2018-10-19',
            open: 54.62,
            high: 55.50,
            low: 54.52,
            close: 54.90
        },
        {
            time: '2018-10-22',
            open: 55.08,
            high: 55.27,
            low: 54.61,
            close: 54.98
        },
        {
            time: '2018-10-23',
            open: 56.09,
            high: 57.47,
            low: 56.09,
            close: 57.21
        },
        {
            time: '2018-10-24',
            open: 57.00,
            high: 58.44,
            low: 56.41,
            close: 57.42
        },
        {
            time: '2018-10-25',
            open: 57.46,
            high: 57.63,
            low: 56.17,
            close: 56.43
        },
        {
            time: '2018-10-26',
            open: 56.26,
            high: 56.62,
            low: 55.19,
            close: 55.51
        },
        {
            time: '2018-10-29',
            open: 55.81,
            high: 57.15,
            low: 55.72,
            close: 56.48
        },
        {
            time: '2018-10-30',
            open: 56.92,
            high: 58.80,
            low: 56.92,
            close: 58.18
        },
        {
            time: '2018-10-31',
            open: 58.32,
            high: 58.32,
            low: 56.76,
            close: 57.09
        },
        {
            time: '2018-11-01',
            open: 56.98,
            high: 57.28,
            low: 55.55,
            close: 56.05
        },
        {
            time: '2018-11-02',
            open: 56.34,
            high: 57.08,
            low: 55.92,
            close: 56.63
        },
        {
            time: '2018-11-05',
            open: 56.51,
            high: 57.45,
            low: 56.51,
            close: 57.21
        },
        {
            time: '2018-11-06',
            open: 57.02,
            high: 57.35,
            low: 56.65,
            close: 57.21
        },
        {
            time: '2018-11-07',
            open: 57.55,
            high: 57.78,
            low: 57.03,
            close: 57.65
        },
        {
            time: '2018-11-08',
            open: 57.70,
            high: 58.44,
            low: 57.66,
            close: 58.27
        },
        {
            time: '2018-11-09',
            open: 58.32,
            high: 59.20,
            low: 57.94,
            close: 58.46
        },
        {
            time: '2018-11-12',
            open: 58.84,
            high: 59.40,
            low: 58.54,
            close: 58.72
        },
        {
            time: '2018-11-13',
            open: 59.09,
            high: 59.14,
            low: 58.32,
            close: 58.66
        },
        {
            time: '2018-11-14',
            open: 59.13,
            high: 59.32,
            low: 58.41,
            close: 58.94
        },
        {
            time: '2018-11-15',
            open: 58.85,
            high: 59.09,
            low: 58.45,
            close: 59.08
        },
        {
            time: '2018-11-16',
            open: 59.06,
            high: 60.39,
            low: 58.91,
            close: 60.21
        },
        {
            time: '2018-11-19',
            open: 60.25,
            high: 61.32,
            low: 60.18,
            close: 60.62
        },
        {
            time: '2018-11-20',
            open: 61.03,
            high: 61.58,
            low: 59.17,
            close: 59.46
        },
        {
            time: '2018-11-21',
            open: 59.26,
            high: 59.90,
            low: 58.88,
            close: 59.16
        },
        {
            time: '2018-11-23',
            open: 58.86,
            high: 59.00,
            low: 58.29,
            close: 58.64
        },
        {
            time: '2018-11-26',
            open: 58.64,
            high: 59.51,
            low: 58.31,
            close: 59.17
        },
        {
            time: '2018-11-27',
            open: 59.21,
            high: 60.70,
            low: 59.18,
            close: 60.65
        },
        {
            time: '2018-11-28',
            open: 60.70,
            high: 60.73,
            low: 59.64,
            close: 60.06
        },
        {
            time: '2018-11-29',
            open: 59.42,
            high: 59.79,
            low: 59.26,
            close: 59.45
        },
        {
            time: '2018-11-30',
            open: 59.57,
            high: 60.37,
            low: 59.48,
            close: 60.30
        },
        {
            time: '2018-12-03',
            open: 59.50,
            high: 59.75,
            low: 57.69,
            close: 58.16
        },
        {
            time: '2018-12-04',
            open: 58.10,
            high: 59.40,
            low: 57.96,
            close: 58.09
        },
        {
            time: '2018-12-06',
            open: 58.18,
            high: 58.64,
            low: 57.16,
            close: 58.08
        },
        {
            time: '2018-12-07',
            open: 57.91,
            high: 58.43,
            low: 57.34,
            close: 57.68
        },
        {
            time: '2018-12-10',
            open: 57.80,
            high: 58.37,
            low: 56.87,
            close: 58.27
        },
        {
            time: '2018-12-11',
            open: 58.77,
            high: 59.40,
            low: 58.63,
            close: 58.85
        },
        {
            time: '2018-12-12',
            open: 57.79,
            high: 58.19,
            low: 57.23,
            close: 57.25
        },
        {
            time: '2018-12-13',
            open: 57.00,
            high: 57.50,
            low: 56.81,
            close: 57.09
        },
        {
            time: '2018-12-14',
            open: 56.95,
            high: 57.50,
            low: 56.75,
            close: 57.08
        },
        {
            time: '2018-12-17',
            open: 57.06,
            high: 57.31,
            low: 55.53,
            close: 55.95
        },
        {
            time: '2018-12-18',
            open: 55.94,
            high: 56.69,
            low: 55.31,
            close: 55.65
        },
        {
            time: '2018-12-19',
            open: 55.72,
            high: 56.92,
            low: 55.50,
            close: 55.86
        },
        {
            time: '2018-12-20',
            open: 55.92,
            high: 56.01,
            low: 54.26,
            close: 55.07
        },
        {
            time: '2018-12-21',
            open: 54.84,
            high: 56.53,
            low: 54.24,
            close: 54.92
        },
        {
            time: '2018-12-24',
            open: 54.68,
            high: 55.04,
            low: 52.94,
            close: 53.05
        },
        {
            time: '2018-12-26',
            open: 53.23,
            high: 54.47,
            low: 52.40,
            close: 54.44
        },
        {
            time: '2018-12-27',
            open: 54.31,
            high: 55.17,
            low: 53.35,
            close: 55.15
        },
        {
            time: '2018-12-28',
            open: 55.37,
            high: 55.86,
            low: 54.90,
            close: 55.27
        },
        {
            time: '2018-12-31',
            open: 55.53,
            high: 56.23,
            low: 55.07,
            close: 56.22
        },
        {
            time: '2019-01-02',
            open: 56.16,
            high: 56.16,
            low: 55.28,
            close: 56.02
        },
        {
            time: '2019-01-03',
            open: 56.30,
            high: 56.99,
            low: 56.06,
            close: 56.22
        },
        {
            time: '2019-01-04',
            open: 56.49,
            high: 56.89,
            low: 55.95,
            close: 56.36
        },
        {
            time: '2019-01-07',
            open: 56.76,
            high: 57.26,
            low: 56.55,
            close: 56.72
        },
        {
            time: '2019-01-08',
            open: 57.27,
            high: 58.69,
            low: 57.05,
            close: 58.38
        },
        {
            time: '2019-01-09',
            open: 57.68,
            high: 57.72,
            low: 56.85,
            close: 57.05
        },
        {
            time: '2019-01-10',
            open: 57.29,
            high: 57.70,
            low: 56.87,
            close: 57.60
        },
        {
            time: '2019-01-11',
            open: 57.84,
            high: 58.26,
            low: 57.42,
            close: 58.02
        },
        {
            time: '2019-01-14',
            open: 57.83,
            high: 58.15,
            low: 57.67,
            close: 58.03
        },
        {
            time: '2019-01-15',
            open: 57.74,
            high: 58.29,
            low: 57.58,
            close: 58.10
        },
        {
            time: '2019-01-16',
            open: 57.93,
            high: 57.93,
            low: 57.00,
            close: 57.08
        },
        {
            time: '2019-01-17',
            open: 57.16,
            high: 57.40,
            low: 56.21,
            close: 56.83
        },
        {
            time: '2019-01-18',
            open: 56.92,
            high: 57.47,
            low: 56.84,
            close: 57.09
        },
        {
            time: '2019-01-22',
            open: 57.23,
            high: 57.39,
            low: 56.40,
            close: 56.99
        },
        {
            time: '2019-01-23',
            open: 56.98,
            high: 57.87,
            low: 56.93,
            close: 57.76
        },
        {
            time: '2019-01-24',
            open: 57.61,
            high: 57.65,
            low: 56.50,
            close: 57.07
        },
        {
            time: '2019-01-25',
            open: 57.18,
            high: 57.47,
            low: 56.23,
            close: 56.40
        },
        {
            time: '2019-01-28',
            open: 56.12,
            high: 56.22,
            low: 54.80,
            close: 55.07
        },
        {
            time: '2019-01-29',
            open: 53.62,
            high: 54.30,
            low: 52.97,
            close: 53.28
        },
        {
            time: '2019-01-30',
            open: 53.10,
            high: 54.02,
            low: 52.28,
            close: 54.00
        },
        {
            time: '2019-01-31',
            open: 54.05,
            high: 55.19,
            low: 53.53,
            close: 55.06
        },
        {
            time: '2019-02-01',
            open: 55.21,
            high: 55.30,
            low: 54.47,
            close: 54.55
        },
        {
            time: '2019-02-04',
            open: 54.60,
            high: 54.69,
            low: 53.67,
            close: 54.04
        },
        {
            time: '2019-02-05',
            open: 54.10,
            high: 54.34,
            low: 53.61,
            close: 54.14
        },
        {
            time: '2019-02-06',
            open: 54.11,
            high: 54.37,
            low: 53.68,
            close: 53.79
        },
        {
            time: '2019-02-07',
            open: 53.61,
            high: 53.73,
            low: 53.02,
            close: 53.57
        },
        {
            time: '2019-02-08',
            open: 53.36,
            high: 53.96,
            low: 53.30,
            close: 53.95
        },
        {
            time: '2019-02-11',
            open: 54.13,
            high: 54.37,
            low: 53.86,
            close: 54.05
        },
        {
            time: '2019-02-12',
            open: 54.45,
            high: 54.77,
            low: 54.19,
            close: 54.42
        },
        {
            time: '2019-02-13',
            open: 54.35,
            high: 54.77,
            low: 54.28,
            close: 54.48
        },
        {
            time: '2019-02-14',
            open: 54.38,
            high: 54.52,
            low: 53.95,
            close: 54.03
        },
        {
            time: '2019-02-15',
            open: 54.48,
            high: 55.19,
            low: 54.32,
            close: 55.16
        },
        {
            time: '2019-02-19',
            open: 55.06,
            high: 55.66,
            low: 54.82,
            close: 55.44
        },
        {
            time: '2019-02-20',
            open: 55.37,
            high: 55.91,
            low: 55.24,
            close: 55.76
        },
        {
            time: '2019-02-21',
            open: 55.55,
            high: 56.72,
            low: 55.46,
            close: 56.15
        },
        {
            time: '2019-02-22',
            open: 56.43,
            high: 57.13,
            low: 56.40,
            close: 56.92
        },
        {
            time: '2019-02-25',
            open: 57.00,
            high: 57.27,
            low: 56.55,
            close: 56.78
        },
        {
            time: '2019-02-26',
            open: 56.82,
            high: 57.09,
            low: 56.46,
            close: 56.64
        },
        {
            time: '2019-02-27',
            open: 56.55,
            high: 56.73,
            low: 56.35,
            close: 56.72
        },
        {
            time: '2019-02-28',
            open: 56.74,
            high: 57.61,
            low: 56.72,
            close: 56.92
        },
        {
            time: '2019-03-01',
            open: 57.02,
            high: 57.15,
            low: 56.35,
            close: 56.96
        },
        {
            time: '2019-03-04',
            open: 57.15,
            high: 57.34,
            low: 55.66,
            close: 56.24
        },
        {
            time: '2019-03-05',
            open: 56.09,
            high: 56.17,
            low: 55.51,
            close: 56.08
        },
        {
            time: '2019-03-06',
            open: 56.19,
            high: 56.42,
            low: 55.45,
            close: 55.68
        },
        {
            time: '2019-03-07',
            open: 55.76,
            high: 56.40,
            low: 55.72,
            close: 56.30
        },
        {
            time: '2019-03-08',
            open: 56.36,
            high: 56.68,
            low: 56.00,
            close: 56.53
        },
        {
            time: '2019-03-11',
            open: 56.76,
            high: 57.62,
            low: 56.75,
            close: 57.58
        },
        {
            time: '2019-03-12',
            open: 57.63,
            high: 58.11,
            low: 57.36,
            close: 57.43
        },
        {
            time: '2019-03-13',
            open: 57.37,
            high: 57.74,
            low: 57.34,
            close: 57.66
        },
        {
            time: '2019-03-14',
            open: 57.71,
            high: 58.09,
            low: 57.51,
            close: 57.95
        },
        {
            time: '2019-03-15',
            open: 58.04,
            high: 58.51,
            low: 57.93,
            close: 58.39
        },
        {
            time: '2019-03-18',
            open: 58.27,
            high: 58.32,
            low: 57.56,
            close: 58.07
        },
        {
            time: '2019-03-19',
            open: 58.10,
            high: 58.20,
            low: 57.31,
            close: 57.50
        },
        {
            time: '2019-03-20',
            open: 57.51,
            high: 58.05,
            low: 57.11,
            close: 57.67
        },
        {
            time: '2019-03-21',
            open: 57.58,
            high: 58.49,
            low: 57.57,
            close: 58.29
        },
        {
            time: '2019-03-22',
            open: 58.16,
            high: 60.00,
            low: 58.13,
            close: 59.76
        },
        {
            time: '2019-03-25',
            open: 59.63,
            high: 60.19,
            low: 59.53,
            close: 60.08
        },
        {
            time: '2019-03-26',
            open: 60.30,
            high: 60.69,
            low: 60.17,
            close: 60.63
        },
        {
            time: '2019-03-27',
            open: 60.56,
            high: 61.19,
            low: 60.48,
            close: 60.88
        },
        {
            time: '2019-03-28',
            open: 60.88,
            high: 60.89,
            low: 58.44,
            close: 59.08
        },
        {
            time: '2019-03-29',
            open: 59.20,
            high: 59.27,
            low: 58.32,
            close: 59.13
        },
        {
            time: '2019-04-01',
            open: 59.39,
            high: 59.41,
            low: 58.79,
            close: 59.09
        },
        {
            time: '2019-04-02',
            open: 59.22,
            high: 59.23,
            low: 58.34,
            close: 58.53
        },
        {
            time: '2019-04-03',
            open: 58.78,
            high: 59.07,
            low: 58.41,
            close: 58.87
        },
        {
            time: '2019-04-04',
            open: 58.84,
            high: 59.10,
            low: 58.77,
            close: 58.99
        },
        {
            time: '2019-04-05',
            open: 59.02,
            high: 59.09,
            low: 58.82,
            close: 59.09
        },
        {
            time: '2019-04-08',
            open: 59.02,
            high: 59.13,
            low: 58.72,
            close: 59.13
        },
        {
            time: '2019-04-09',
            open: 58.37,
            high: 58.56,
            low: 58.04,
            close: 58.40
        },
        {
            time: '2019-04-10',
            open: 58.40,
            high: 58.70,
            low: 58.36,
            close: 58.61
        },
        {
            time: '2019-04-11',
            open: 58.65,
            high: 58.73,
            low: 58.20,
            close: 58.56
        },
        {
            time: '2019-04-12',
            open: 58.75,
            high: 58.79,
            low: 58.52,
            close: 58.74
        },
        {
            time: '2019-04-15',
            open: 58.91,
            high: 58.95,
            low: 58.59,
            close: 58.71
        },
        {
            time: '2019-04-16',
            open: 58.79,
            high: 58.98,
            low: 58.66,
            close: 58.79
        },
        {
            time: '2019-04-17',
            open: 58.40,
            high: 58.46,
            low: 57.64,
            close: 57.78
        },
        {
            time: '2019-04-18',
            open: 57.51,
            high: 58.20,
            low: 57.28,
            close: 58.04
        },
        {
            time: '2019-04-22',
            open: 58.14,
            high: 58.49,
            low: 57.89,
            close: 58.37
        },
        {
            time: '2019-04-23',
            open: 57.62,
            high: 57.72,
            low: 56.30,
            close: 57.15
        },
        {
            time: '2019-04-24',
            open: 57.34,
            high: 57.57,
            low: 56.73,
            close: 57.08
        },
        {
            time: '2019-04-25',
            open: 56.82,
            high: 56.90,
            low: 55.75,
            close: 55.85
        },
        {
            time: '2019-04-26',
            open: 56.06,
            high: 56.81,
            low: 55.83,
            close: 56.58
        },
        {
            time: '2019-04-29',
            open: 56.75,
            high: 57.17,
            low: 56.71,
            close: 56.84
        },
        {
            time: '2019-04-30',
            open: 56.99,
            high: 57.45,
            low: 56.76,
            close: 57.19
        },
        {
            time: '2019-05-01',
            open: 57.23,
            high: 57.30,
            low: 56.52,
            close: 56.52
        },
        {
            time: '2019-05-02',
            open: 56.81,
            high: 58.23,
            low: 56.68,
            close: 56.99
        },
        {
            time: '2019-05-03',
            open: 57.15,
            high: 57.36,
            low: 56.87,
            close: 57.24
        },
        {
            time: '2019-05-06',
            open: 56.83,
            high: 57.09,
            low: 56.74,
            close: 56.91
        },
        {
            time: '2019-05-07',
            open: 56.69,
            high: 56.81,
            low: 56.33,
            close: 56.63
        },
        {
            time: '2019-05-08',
            open: 56.66,
            high: 56.70,
            low: 56.25,
            close: 56.38
        },
        {
            time: '2019-05-09',
            open: 56.12,
            high: 56.56,
            low: 55.93,
            close: 56.48
        },
        {
            time: '2019-05-10',
            open: 56.49,
            high: 57.04,
            low: 56.26,
            close: 56.91
        },
        {
            time: '2019-05-13',
            open: 56.72,
            high: 57.34,
            low: 56.66,
            close: 56.75
        },
        {
            time: '2019-05-14',
            open: 56.76,
            high: 57.19,
            low: 56.50,
            close: 56.55
        },
        {
            time: '2019-05-15',
            open: 56.51,
            high: 56.84,
            low: 56.17,
            close: 56.81
        },
        {
            time: '2019-05-16',
            open: 57.00,
            high: 57.80,
            low: 56.82,
            close: 57.38
        },
        {
            time: '2019-05-17',
            open: 57.06,
            high: 58.48,
            low: 57.01,
            close: 58.09
        },
        {
            time: '2019-05-20',
            open: 59.15,
            high: 60.54,
            low: 58.00,
            close: 59.01
        },
        {
            time: '2019-05-21',
            open: 59.10,
            high: 59.63,
            low: 58.76,
            close: 59.50
        },
        {
            time: '2019-05-22',
            open: 59.09,
            high: 59.37,
            low: 58.96,
            close: 59.25
        },
        {
            time: '2019-05-23',
            open: 59.00,
            high: 59.27,
            low: 58.54,
            close: 58.87
        },
        {
            time: '2019-05-24',
            open: 59.07,
            high: 59.36,
            low: 58.67,
            close: 59.32
        },
        {
            time: '2019-05-28',
            open: 59.21,
            high: 59.66,
            low: 59.02,
            close: 59.57
        },
    ];

    candleSeries.setData(data);

    var lastClose = data[data.length - 1].close;
    var lastIndex = data.length - 1;

    var targetIndex = lastIndex + 105 + Math.round(Math.random() + 30);
    var targetPrice = getRandomPrice();

    var currentIndex = lastIndex + 1;
    var currentBusinessDay = {
        day: 29,
        month: 5,
        year: 2019
    };
    var ticksInCurrentBar = 0;
    var currentBar = {
        open: null,
        high: null,
        low: null,
        close: null,
        time: currentBusinessDay,
    };

    function mergeTickToBar(price) {
        if (currentBar.open === null) {
            currentBar.open = price;
            currentBar.high = price;
            currentBar.low = price;
            currentBar.close = price;
        } else {
            currentBar.close = price;
            currentBar.high = Math.max(currentBar.high, price);
            currentBar.low = Math.min(currentBar.low, price);
        }
        candleSeries.update(currentBar);
    }

    function reset() {
        candleSeries.setData(data);
        lastClose = data[data.length - 1].close;
        lastIndex = data.length - 1;

        targetIndex = lastIndex + 5 + Math.round(Math.random() + 30);
        targetPrice = getRandomPrice();

        currentIndex = lastIndex + 1;
        currentBusinessDay = {
            day: 29,
            month: 5,
            year: 2019
        };
        ticksInCurrentBar = 0;
    }

    function getRandomPrice() {
        return 10 + Math.round(Math.random() * 10000) / 100;
    }

    function nextBusinessDay(time) {
        var d = new Date();
        d.setUTCFullYear(time.year);
        d.setUTCMonth(time.month - 1);
        d.setUTCDate(time.day + 1);
        d.setUTCHours(0, 0, 0, 0);
        return {
            year: d.getUTCFullYear(),
            month: d.getUTCMonth() + 1,
            day: d.getUTCDate(),
        };
    }

    setInterval(function() {
        var deltaY = targetPrice - lastClose;
        var deltaX = targetIndex - lastIndex;
        var angle = deltaY / deltaX;
        var basePrice = lastClose + (currentIndex - lastIndex) * angle;
        var noise = (0.1 - Math.random() * 0.2) + 1.0;
        var noisedPrice = basePrice * noise;
        mergeTickToBar(noisedPrice);
        if (++ticksInCurrentBar === 5) {
            // move to next bar
            currentIndex++;
            currentBusinessDay = nextBusinessDay(currentBusinessDay);
            currentBar = {
                open: null,
                high: null,
                low: null,
                close: null,
                time: currentBusinessDay,
            };
            ticksInCurrentBar = 0;
            if (currentIndex === 5000) {
                reset();
                return;
            }
            if (currentIndex === targetIndex) {
                // change trend
                lastClose = noisedPrice;
                lastIndex = currentIndex;
                targetIndex = lastIndex + 5 + Math.round(Math.random() + 30);
                targetPrice = getRandomPrice();
            }
        }
    }, 25000);
</script>

</html>