<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Aside Toolbarl-->

    <!--end::Aside Toolbarl-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5  " id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
            data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px"
            style="overflow-x: hidden !important; height: 778px;">
            <!--begin::Menu-->
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary     menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true">

                {{-- <div class="menu-item">
                    <a class="menu-link gap-3 {{ Route::is('home_page') ? 'active' : '' }}"
                        href="{{ route('home_page') }}">
                        <span class="menu-bullet">

                            <i class="bi bi-house-door fs-3 text-white"></i>
                        </span>
                        <span class="menu-title text-white">Home</span>
                    </a>
                </div> --}}

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span class="menu-link"><span
                            class="menu-icon"> <i class="bi bi-house-door fs-3 text-white"></i><span
                                class="path1"></span><span class="path2"></span><span
                                class="path3"></span></i></span><span class="menu-title">Home</span><span
                            class="menu-arrow"></span></span>
                    <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;"
                        kt-hidden-height="250">
                        <div class="menu-item"><a
                                class="menu-link {{ Route::is('admin.home.english') ? 'active' : '' }}"
                                href="{{ route('admin.home.english') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">English</span></a></div>

                        <div class="menu-item"><a
                                class="menu-link  {{ Route::is('admin.home.arabic') ? 'active' : '' }}"
                                href="{{ route('admin.home.arabic') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Arabic</span></a></div>
                        <div class="menu-item"><a class="menu-link {{ Route::is('admin.home.french') ? 'active' : '' }}"
                                href="{{ route('admin.home.french') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">French</span></a></div>


                    </div>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion"><span class="menu-link"><span
                            class="menu-icon"> <i class="bi bi-house-door fs-3 text-white"></i><span
                                class="path1"></span><span class="path2"></span><span
                                class="path3"></span></i></span><span class="menu-title">About</span><span
                            class="menu-arrow"></span></span>
                    <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;"
                        kt-hidden-height="250">
                        <div class="menu-item"><a
                                class="menu-link {{ Route::is('admin.about.english') ? 'active' : '' }}"
                                href="{{ route('admin.about.english') }}"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">English</span></a></div>

                        <div class="menu-item"><a class="menu-link"
                                href="/metronic8/demo1/pages/user-profile/projects.html"><span class="menu-bullet"><span
                                        class="bullet bullet-dot"></span></span><span
                                    class="menu-title">Arabic</span></a></div>

                        <div class="menu-item"><a class="menu-link"
                                href="/metronic8/demo1/pages/user-profile/campaigns.html"><span
                                    class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                    class="menu-title">French</span></a></div>


                    </div>
                </div>





                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Route::is('admin.brand.*') ? 'show' : '' }}">
                    <span class="menu-link ">
                        <span class="menu-icon"><i class="bi bi-cart3"></i><span class="path1"></span><span
                                class="path2"></span></i></span>
                        <span class="menu-title">Brands</span>
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion {{ Route::is('admin.brand.*') ? 'show' : '' }}"
                        kt-hidden-height="84">
                        <!-- Alawafy -->
                        <div data-kt-menu-trigger="click"
                            class="menu-item menu-accordion {{ Route::is('admin.brand.alawafy.*') ? 'active showing' : '' }}">
                            <span class="menu-link ">
                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                <span class="menu-title">Alawafy</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg {{ Route::is('admin.brand.alawafy.*') ? 'show' : '' }}"
                                kt-hidden-height="125">
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::is('admin.brand.alawafy.english') ? 'active' : '' }}"
                                        href="{{ route('admin.brand.alawafy.english') }}">
                                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                        <span class="menu-title">English</span>
                                    </a>
                                </div>
                                <!-- More language items... -->
                            </div>
                        </div>

                        <!-- Alyoum -->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link {{ Route::is('admin.brand.alyoum.*') ? 'active' : '' }}">
                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                <span class="menu-title">Alyoum</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg" kt-hidden-height="125"
                                style="display: none; overflow: hidden;">
                                <div class="menu-item">
                                    <a class="menu-link" href="/metronic8/demo1/apps/invoices/view/invoice-1.html">
                                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                        <span class="menu-title">English</span>
                                    </a>
                                </div>
                                <!-- More language items... -->
                            </div>
                        </div>

                        <!-- Crico -->
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link {{ Route::is('admin.brand.crico.*') ? 'active' : '' }}">
                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                <span class="menu-title">Crico</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg" kt-hidden-height="125"
                                style="display: none; overflow: hidden;">
                                <div class="menu-item">
                                    <a class="menu-link" href="/metronic8/demo1/apps/invoices/view/invoice-1.html">
                                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                        <span class="menu-title">English</span>
                                    </a>
                                </div>
                                <!-- More language items... -->
                            </div>
                        </div>

                    </div>
                </div>



                <div class="menu-item">
                    <a class="menu-link gap-3 {{ Route::is('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">
                        <span class="menu-bullet">
                            <i class="bi bi-person-lines-fill fs-3 text-white"></i>
                        </span>
                        <span class="menu-title text-white">Contact Details</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a class="menu-link gap-3 {{ Route::is('news.letter') ? 'active' : '' }}"
                        href="{{ route('news.letter') }}">
                        <span class="menu-bullet">
                            <i class="bi bi-newspaper fs-3 text-white"></i>
                        </span>
                        <span class="menu-title text-white">News Letter</span>
                    </a>
                </div>




            </div>

        </div>
        <!--begin::Menu-->
        <!--end::Footer-->
    </div>
</div>
<script>
    $(document).ready(function() {
        // $('.menu-sub-accordion').hide()
    })
</script>
