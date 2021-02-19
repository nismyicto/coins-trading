<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
  <!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport"  name="csrf-token" content="{{ csrf_token() }}" >

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
    <script src="/js/app.js"></script>
   <script src="{{ asset('js/angular.js') }}" defer></script>
   <script src="{{ asset('js/angular-route.js') }}" defer></script>
   <script src="{{ asset('js/notify.js') }}" defer></script>
   
<script src="{{ asset('js/trading.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://unpkg.com/lightweight-charts/dist/lightweight-charts.standalone.production.js"></script>
<!--
<script src="{{ asset('js/chartmoment.js') }}" defer></script> -->
</head>
<body class="non-responsive language-en-us cashbackCurrency-36 userCurrency-392">
<div ng-app="tradingApp" ng-controller="tradeCtr" >
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-54TR9PV" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>

    <div id="layout-header" class="group">
        <header id="header">
            @include('layouts.header')
        </header>
    </div>

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
                                        <span id="balance" class="balance-display balanceValue balanceArea last-child">
                                            @cannot('admin-user')
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
                                                                                <!-- <div id="categoryContainer">
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
                                                                                </div> -->
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
                                                                                <!-- <div id="assetsContainer" class="mCustomScrollbar _mCS_1">
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
                                                                                </div> -->
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
                                                                                                            <span class="strike" style="display: inline-block;">$ &nbsp;[[balance]]</span>
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
                                                                    <div id="strikeArea" class="strikeArea pull-left first-child">
                                                                        <span id="asset" class="trading-platform-instrument-title font-sb eng first-child">USD/JPY</span>
                                                                        <span id="direction" class="strike-direction trading-platform-instrument-direction up"></span>
                                                                        <span id="strike" class="trading-platform-instrument-rate eng current-rate">$ &nbsp; [[balance]]</span>
                                                                        <span id="pipRange" class="trading-platform-instrument-spread-range last-child eng"></span>
                                                                        <span id="tradingClosed" class="trading-platform-instrument-trading-is-closed">Trading is closed</span>
                                                                        <span id="openingTime" class="trading-platform-instrument-open-time last-child hiddenArea" style="display: none;"></span>
                                                                        <span class="loading-icon hiddenArea"></span>
                                                                    </div>

                                                                    <div class="chartTimeArea pull-right last-child">
                                                                        <!-- <div id="statusMessage" class="statusmessage eng first-child">status messages</div> -->
                                                                        <div id="closingTime" class="closingTime trading-platform-instrument-closing-time eng">13:00</div>
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
                                                                    <div class="clearfix pull-right pr-3">
                                                                        @if ($errors->any())
                                                                        <ul>
                                                                            @foreach($errors->all() as $error)
                                                                            <li>{{$error}}</li>
                                                                            @endforeach
                                                                        </ul>

                                                                        @endif
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
                                                                                                <span class="strike eng">$ &nbsp; [[balance]]</span>
                                                                                                <span class="pipRange eng"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <form method="POST" enctype="multipart/form-data">
                                                                                    {{ csrf_field() }}
                                                                                    <div class="sums">
                                                                                        <div class="amountBox trading-platform-main-controls-investment font-m">
                                                                                            <span>$</span>
                                                                                            <input type="text" maxlength="10" name="amount" id="amount" ng-model="amount" name="subGraph-sum-input" class="number-only eng first-child last-child">
                                                                                        </div>
                                                                                        <div id="hefly"></div>
                                                                                        <div class="amount-area trading-platform-main-controls-common-amount">
                                                                                            <div class="defaultAmount" val="50" onclick="myFunction50()">$50</div>
                                                                                            <div class="defaultAmountSeparator"></div>
                                                                                            <div class="defaultAmount" val="100" onclick="myFunction100()">$100</div>
                                                                                            <div class="defaultAmountSeparator"></div>
                                                                                            <div class="defaultAmount" val="500" onclick="myFunction500()">$500</div>
                                                                                        </div>
                                                                                        <script>
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
                                                                                        </script>
                                                                                    </div>
                                                                                    <div class="invest-area clearfix trading-platform-main-controls-options none-one-click-control">
                                                                                        <div class="trading-platform-main-controls-select-direction first-child">
                                                                                            <div class="btn-group btn-group-toggle" id="setting_up" data-toggle="buttons">
                                                                                                <label class="btn btn-secondary"  style="background: green;">
                                                                                                    <input type="radio" name="options" id="option2" value="high" autocomplete="off"> High
                                                                                                </label>
                                                                                                <label class="btn btn-secondary"  style="background: red;">
                                                                                                    <input type="radio" name="options" id="option3" value="low" autocomplete="off"> Low
                                                                                                </label>
                                                                                                </div>
                                                                                        </div>
                                                                                        <div class="invest-btn trading-platform-main-controls-place-bet last-child">
                                                                                            <button ng-click="confirm();" class="invest investNow_disabled button" id="invest_now_button" style="display: block;">Invest</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>

                                                                                <div class="trading-platform-main-controls-payout">
                                                                                    <div class="pull-left font-sb first-child">Investment</div>
                                                                                    <div class="pull-right last-child">
                                                                                        <span id="PayoutIn" class="trading-platform-main-controls-payout-rate eng first-child last-child">[[showamount]]</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="trading-platform-main-controls-return last-child">
                                                                                    <div class="pull-left font-sb first-child">Profit Rate</div>
                                                                                    <div id="cashPayout" class="pull-right trading-platform-maximum-return eng last-child">5%</div>
                                                                                </div>
                                                                                <div class="trading-platform-main-controls-return last-child">
                                                                                    <div class="pull-left font-sb first-child">Amount with expected profit</div>
                                                                                    <div id="cashPayout" class="pull-right trading-platform-maximum-return eng last-child">[[show_pro]]</div>
                                                                                </div>
                                                                                <br>
                                                                                <div class="clear"></div>
                                                                                <br>
                                                                                <br>
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
                                            <table class="table table-dark" style="font-size: 15px;">
                                            <thead>
                                                <tr>
                                                <th scope="col">#</th>
                                                <th scope="col" style="text-align: center;">BID value</th>
                                                <th scope="col" style="text-align: center;">Closing time</th>
                                                <th scope="col" style="text-align: center;">Investent amount</th>
                                                <th scope="col" style="text-align: center;">Status</th>
                                                <th scope="col" style="text-align: center;">Profit Rate</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr ng-repeat="hexa_items in items_list">
                                                <th scope="row">[[$index+1]]</th>
                                                <td>[[hexa_items.user_bid | number : 4]]</td>
                                                <td>[[hexa_items.auto_close_time]]</td>
                                                <td>[[hexa_items.amount | number : 2]]</td>
                                                <td>[[hexa_items.high_or_low]]</td>
                                                <td>5%</td>
                                                </tr>
                                                
                                            </tbody>
                                            </table>
                                            <button type="button" class="btn btn-danger" style="color: white;" ng-click="closing()">Close All</button>
                                                <div id="example"></div>
                                              
                                            </div>
                                            <div id="tradeActionsTableArea" class="">
                                           
                                            </div>
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

    <div id="layout-footer" class="group">
        <footer id="footer">
            @include('layouts.footer')
        </footer>
    </div>

    <div class="p-ticker p-ticker__news-scroller p-ticker__news-scroller__platform  hidden-logged-in" data-url="//cdn2.highlow.net/feed/news-en-public.json?t=637477656798648342" data-wrapper-class="p-ticker__news-scroller--inner-wrap" data-speed="60" data-update-interval="120000">
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
</div>
</body>

</html>