<div class="nav-header bg-white shadow-xs border-0">
    @php
        $icons = new \Feather\IconManager();
    @endphp
    <div class="nav-top">
        <a href="{{ url('/') }}"><i class="text-success display1-size me-2 ms-0" style="margin-top: -10px;">{!! $icons->getIcon('zap') !!}</i><span
                class="d-inline-block fredoka-font ls-3 fw-600 text-current font-xxl logo-text mb-0">
                {{ config('app.name') }}</span> </a>
        <a href="#" class="mob-menu ms-auto me-2 chat-active-btn"><i
                class="text-grey-900 font-sm btn-round-md bg-greylight" style="margin-top: -10px;">{!! $icons->getIcon('message-circle') !!}</i></a>
        <a href="default-video.html" class="mob-menu me-2"><i
                class="text-grey-900 font-sm btn-round-md bg-greylight" style="margin-top: -10px;">{!! $icons->getIcon('video') !!}</i></a>
        <a href="#" class="me-2 menu-search-icon mob-menu"><i
                class="text-grey-900 font-sm btn-round-md bg-greylight" style="margin-top: -10px;">{!! $icons->getIcon('search') !!}</i></a>
        <button class="nav-menu me-0 ms-2"></button>
    </div>

    <form action="#" class="float-left header-search">
        <div class="form-group mb-0 icon-input">
            <i class="font-sm text-grey-400" style="margin-top: -10px;">{!! $icons->getIcon('search') !!}</i>
            <input type="text" placeholder="Start typing to search.."
                   class="bg-grey border-0 lh-32 pt-2 pb-2 ps-5 pe-3 font-xssss fw-500 rounded-xl w350 theme-dark-bg">
        </div>
    </form>
    <a href="{{ url('/') }}" class="p-2 text-center ms-3 menu-icon center-menu-icon"><i
            class="{{ request()->route()->getName() == 'home' ? 'bg-primary' : '' }} font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500" style="margin-top: -10px;">{!! $icons->getIcon('home') !!}</i></a>
    <a href="{{ route('explore') }}" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class="{{ request()->route()->getName() == 'explore' ? 'bg-primary' : '' }} font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500" style="margin-top: -10px;">{!! $icons->getIcon('zap') !!}</i></a>
    <a href="#" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class="font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500" style="margin-top: -10px;">{!! $icons->getIcon('video') !!}</i></a>
    <a href="#" class="p-2 text-center ms-0 menu-icon center-menu-icon"><i
            class="font-lg bg-greylight btn-round-lg theme-dark-bg text-grey-500" style="margin-top: -10px;">{!! $icons->getIcon('users') !!}</i></a>


    <a href="#" class="p-2 text-center ms-auto menu-icon" id="dropdownMenu3" data-bs-toggle="dropdown"
       aria-expanded="false"><span class="dot-count bg-warning"></span><i class="font-xl text-current" style="margin-top: -10px;">{!! $icons->getIcon('bell') !!}</i></a>


    @livewire('notifications')



    <a href="#" class="p-2 text-center ms-3 menu-icon chat-active-btn"><i
            class="font-xl text-current" style="margin-top: -10px;">{!! $icons->getIcon('message-square') !!}</i></a>
    <div class="p-2 text-center ms-3 position-relative dropdown-menu-icon menu-icon cursor-pointer">
        <i class="animation-spin d-inline-block font-xl text-current" style="margin-top: -10px;">{!! $icons->getIcon('settings') !!}</i>
        <div class="dropdown-menu-settings switchcolor-wrap">
            <h4 class="fw-700 font-sm mb-4">Settings</h4>
            <h6 class="font-xssss text-grey-500 fw-700 mb-3 d-block">Choose Color Theme</h6>
            <ul>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="red" checked=""><i class="ti-check"></i>
                        <span class="circle-color bg-red" style="background-color: #ff3b30;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="green"><i class="ti-check"></i>
                        <span class="circle-color bg-green" style="background-color: #4cd964;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="blue" checked=""><i class="ti-check"></i>
                        <span class="circle-color bg-blue" style="background-color: #132977;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="pink"><i class="ti-check"></i>
                        <span class="circle-color bg-pink" style="background-color: #ff2d55;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="yellow"><i class="ti-check"></i>
                        <span class="circle-color bg-yellow" style="background-color: #ffcc00;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="orange"><i class="ti-check"></i>
                        <span class="circle-color bg-orange" style="background-color: #ff9500;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="gray"><i class="ti-check"></i>
                        <span class="circle-color bg-gray" style="background-color: #8e8e93;"></span>
                    </label>
                </li>

                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="brown"><i class="ti-check"></i>
                        <span class="circle-color bg-brown" style="background-color: #D2691E;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="darkgreen"><i class="ti-check"></i>
                        <span class="circle-color bg-darkgreen" style="background-color: #228B22;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="deeppink"><i class="ti-check"></i>
                        <span class="circle-color bg-deeppink" style="background-color: #FFC0CB;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="cadetblue"><i class="ti-check"></i>
                        <span class="circle-color bg-cadetblue" style="background-color: #5f9ea0;"></span>
                    </label>
                </li>
                <li>
                    <label class="item-radio item-content">
                        <input type="radio" name="color-radio" value="darkorchid"><i class="ti-check"></i>
                        <span class="circle-color bg-darkorchid" style="background-color: #9932cc;"></span>
                    </label>
                </li>
            </ul>

            <div class="card bg-transparent-card border-0 d-block mt-3">
                <h4 class="d-inline font-xssss mont-font fw-700">Header Background</h4>
                <div class="d-inline float-right mt-1">
                    <label class="toggle toggle-menu-color"><input type="checkbox"><span
                            class="toggle-icon"></span></label>
                </div>
            </div>
            <div class="card bg-transparent-card border-0 d-block mt-3">
                <h4 class="d-inline font-xssss mont-font fw-700">Menu Position</h4>
                <div class="d-inline float-right mt-1">
                    <label class="toggle toggle-menu"><input type="checkbox"><span class="toggle-icon"></span></label>
                </div>
            </div>
            <div class="card bg-transparent-card border-0 d-block mt-3">
                <h4 class="d-inline font-xssss mont-font fw-700">Dark Mode</h4>
                <div class="d-inline float-right mt-1">
                    <label class="toggle toggle-dark"><input type="checkbox"><span class="toggle-icon"></span></label>
                </div>
            </div>

        </div>
    </div>

    <a href="{{ route('user.page', ['uuid' => auth()->user()->uuid]) }}">
        <figure class="avatar p-0 ms-3 menu-icon">
            <img src="{{ auth()->user()->profile ? asset('storage/profiles/' . basename(auth()->user()->profile)) : 'images/profile-4.png' }}" alt="image"
                                         class="shadow-sm rounded-circle w40 mt-2">
        </figure>
    </a>

</div>
