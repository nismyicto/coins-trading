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
                <div class="row keyline">

                </div>
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