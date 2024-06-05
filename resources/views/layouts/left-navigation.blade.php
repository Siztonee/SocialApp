<nav class="navigation scroll-bar">
    @php
        $icons = new \Feather\IconManager();
    @endphp
    <div class="container ps-0 pe-0">
        <div class="nav-content">
            <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1 mb-2 mt-2">
                <div class="nav-caption fw-600 font-xssss text-grey-500"><span>New </span>Feeds</div>
                <ul class="mb-1 top-content">
                    <li class="logo d-none d-xl-block d-lg-block"></li>
                    <li><a href="default.html" class="nav-content-bttn open-font"><i
                                class="btn-round-md bg-blue-gradiant me-3" style="margin-top: -10px;">{!! $icons->getIcon('tv') !!}</i><span>Newsfeed</span></a></li>
                    <li><a href="default-storie.html" class="nav-content-bttn open-font"><i
                                class="btn-round-md bg-gold-gradiant me-3" style="margin-top: -10px;">{!! $icons->getIcon('globe') !!}</i><span>Explore Stories</span></a>
                    </li>
                    <li><a href="default-group.html" class="nav-content-bttn open-font"><i
                                class="btn-round-md bg-mini-gradiant me-3" style="margin-top: -10px;">{!! $icons->getIcon('zap') !!}</i><span>Popular Groups</span></a>
                    </li>
                    <li><a href="user-page.html" class="nav-content-bttn open-font"><i
                                class="btn-round-md bg-primary-gradiant me-3" style="margin-top: -10px;">{!! $icons->getIcon('user') !!}</i><span>Author Profile </span></a>
                    </li>
                </ul>
            </div>


            <div class="nav-wrap bg-white bg-transparent-card rounded-xxl shadow-xss pt-3 pb-1">
                <div class="nav-caption fw-600 font-xssss text-grey-500"><span></span> Account</div>
                <ul class="mb-1">
                    <li class="logo d-none d-xl-block d-lg-block"></li>
                    <li><a href="default-settings.html" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                                class="font-sm me-3 text-grey-500" style="margin-top: -10px;">{!! $icons->getIcon('settings') !!}</i><span>Settings</span></a></li>
                    <li><a href="{{ route('user.chat.list') }}" class="nav-content-bttn open-font h-auto pt-2 pb-2"><i
                                class="font-sm me-3 text-grey-500" style="margin-top: -10px;">{!! $icons->getIcon('message-square') !!}</i><span>Chat</span><span
                                class="circle-count bg-warning mt-0">23</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
