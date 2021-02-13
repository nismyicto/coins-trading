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