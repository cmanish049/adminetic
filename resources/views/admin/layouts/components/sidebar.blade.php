<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('home') }}">
                <img class="img-fluid for-light"
                    src="{{ asset(isset($setting->logo) ? 'storage/' . $setting->logo : 'adminetic/static/logo.png') }}"
                    alt="Light Logo">
                <img class="img-fluid for-dark"
                    src="{{ asset(isset($setting->logo_dark) ? 'storage/' . $setting->logo_dark : 'adminetic/static/logo_dark.png') }}"
                    alt="Dark Logo">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('home') }}"><img class="img-fluid"
                    src="{{ asset(isset($setting->favicon) ? 'storage/' . $setting->favicon : 'adminetic/static/favicon.png') }}"
                    alt="favicon"></a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('home') }}"><img class="img-fluid"
                                src="{{ asset(isset($setting->favicon) ? 'storage/' . $setting->favicon : 'adminetic/static/favicon.png') }}"
                                alt="favicon"></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    {{-- Menus --}}
                    <x-adminetic-sidebar />
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
