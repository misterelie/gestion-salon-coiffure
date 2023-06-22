 <!-- LOGO -->
 <div class="navbar-brand-box">
    <a href="index.html" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{asset('asset-backend-admin/assets/images/logo-sm.png')}}" alt="" height="26">
        </span>
        <span class="logo-lg">
            <img src="{{asset('asset-backend-admin/assets/images/logo-dark.png')}}" alt="" height="26">
        </span>
    </a>
    <a href="index.html" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{asset('asset-backend-admin/assets/images/logo-sm.png')}}" alt="" height="26">
        </span>
        <span class="logo-lg">
            <img src="{{asset('asset-backend-admin/assets/images/logo-light.png')}}" alt="" height="26">
        </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>

<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
                <a href="#" class="nav-link menu-link"> <i class="bi bi-speedometer2"></i> <span
                        data-key="t-dashboard">Administration</span> </a>
            </li>

            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarAuth">
                    <i class="bi bi-person-circle"></i> <span
                        data-key="t-authentication">Clients</span>
                </a>
                {{-- <div class="collapse menu-dropdown" id="sidebarAuth">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarSignIn"
                                data-key="t-signin"> Sign In
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarSignIn">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-signin-basic.html" class="nav-link"
                                            data-key="t-basic"> Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-signin-basic-2.html" class="nav-link"
                                            data-key="t-basic-2"> Basic 2 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-signin-cover.html" class="nav-link"
                                            data-key="t-cover"> Cover </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarSignUp"
                                data-key="t-signup"> Sign Up </a>
                            <div class="collapse menu-dropdown" id="sidebarSignUp">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-signup-basic.html" class="nav-link"
                                            data-key="t-basic"> Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-signup-basic-2.html" class="nav-link"
                                            data-key="t-basic-2"> Basic 2 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-signup-cover.html" class="nav-link"
                                            data-key="t-cover"> Cover </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarResetPass"
                                data-key="t-password-reset">
                                Password Reset
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarResetPass">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-pass-reset-basic.html" class="nav-link"
                                            data-key="t-basic"> Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-pass-reset-basic-2.html" class="nav-link"
                                            data-key="t-basic-2"> Basic 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-pass-reset-cover.html" class="nav-link"
                                            data-key="t-cover"> Cover </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarchangePass"
                                data-key="t-password-create">
                                Password Create
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarchangePass">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-pass-change-basic.html" class="nav-link"
                                            data-key="t-basic"> Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-pass-change-basic-2.html" class="nav-link"
                                            data-key="t-basic-2"> Basic 2 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-pass-change-cover.html" class="nav-link"
                                            data-key="t-cover"> Cover </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarLockScreen"
                                data-key="t-lock-screen">
                                Lock Screen
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-lockscreen-basic.html" class="nav-link"
                                            data-key="t-basic"> Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-lockscreen-basic-2.html" class="nav-link"
                                            data-key="t-basic-2"> Basic 2 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-lockscreen-cover.html" class="nav-link"
                                            data-key="t-cover"> Cover </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarLogout"
                                data-key="t-logout"> Logout
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLogout">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-logout-basic.html" class="nav-link"
                                            data-key="t-basic"> Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-logout-basic-2.html" class="nav-link"
                                            data-key="t-basic-2"> Basic 2 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-logout-cover.html" class="nav-link"
                                            data-key="t-cover"> Cover </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg"
                                data-key="t-success-message"> Success Message
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-success-msg-basic.html" class="nav-link"
                                            data-key="t-basic"> Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-success-msg-basic-2.html" class="nav-link"
                                            data-key="t-basic-2"> Basic 2 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-success-msg-cover.html" class="nav-link"
                                            data-key="t-cover"> Cover </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarTwoStep"
                                data-key="t-two-step-verification"> Two Step Verification
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-twostep-basic.html" class="nav-link"
                                            data-key="t-basic"> Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-twostep-basic-2.html" class="nav-link"
                                            data-key="t-basic-2"> Basic 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-twostep-cover.html" class="nav-link"
                                            data-key="t-cover"> Cover </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarErrors"
                                data-key="t-errors"> Errors
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarErrors">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="auth-404-basic.html" class="nav-link"
                                            data-key="t-404-basic"> 404 Basic </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-404-cover.html" class="nav-link"
                                            data-key="t-404-cover"> 404 Cover </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt">
                                            404 Alt </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-500.html" class="nav-link" data-key="t-500"> 500 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="auth-offline.html" class="nav-link"
                                            data-key="t-offline-page"> Offline Page </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div> --}}
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarPages">
                    <i class="bi bi-journal-medical"></i> <span data-key="t-pages">Pages</span>
                </a>
                {{-- <div class="collapse menu-dropdown" id="sidebarPages">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="pages-starter.html" class="nav-link" data-key="t-starter"> Starter </a>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarProfile"
                                data-key="t-profile"> Profile
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarProfile">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="pages-profile.html" class="nav-link"
                                            data-key="t-simple-page"> Simple Page </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages-profile-settings.html" class="nav-link"
                                            data-key="t-settings"> Settings </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-timeline.html" class="nav-link" data-key="t-timeline"> Timeline
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-pricing.html" class="nav-link" data-key="t-pricing"> Pricing </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance">
                                Maintenance
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon">
                                Coming Soon
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap"> Sitemap </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages-search-results.html" class="nav-link"
                                data-key="t-search-results"> Search Results </a>
                        </li>
                    </ul>
                </div> --}}
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="widgets.html">
                    <i class="bi bi-hdd-stack"></i> <span data-key="t-widgets">Widgets</span>
                </a>
            </li> --}}

            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="components.html" target="_blank">
                    <i class="bi bi-layers"></i> <span data-key="t-components">Components</span>
                </a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link menu-link" href="https://themesbrand.com/hybrix/html/docs/index.html"
                    target="_blank">
                    <i class="bi bi-file-earmark-text"></i> <span
                        data-key="t-documentation">Documentation</span> <span
                        class="badge badge-pill bg-secondary" data-key="t-v1.0">v1.0</span>
                </a>
            </li> --}}

            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-apps">Apps</span></li>

            {{-- <li class="nav-item">
                <a href="apps-calendar.html" class="nav-link menu-link"> <i class="bi bi-calendar3"></i>
                    <span data-key="t-calendar">Calendar</span> </a>
            </li> --}}

            {{-- <li class="nav-item">
                <a href="apps-api-key.html" class="nav-link menu-link"> <i class="bi bi-key"></i> <span
                        data-key="t-api-key">API Key</span> </a>
            </li> --}}

            {{-- <li class="nav-item">
                <a href="apps-contact.html" class="nav-link menu-link"> <i class="bi bi-person-square"></i>
                    <span data-key="t-contact">Contact</span> </a>
            </li> --}}

            {{-- <li class="nav-item">
                <a href="apps-leaderboards.html" class="nav-link menu-link"> <i class="bi bi-gem"></i> <span
                        data-key="t-leaderboard">LeaderBoard</span> </a>
            </li> --}}

            {{-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-layouts">Layouts</span>
            </li> --}}
            {{-- <li class="nav-item">
                <a href="layouts-horizontal.html" class="nav-link menu-link" target="_blank"> <i
                        class="bi bi-window"></i> <span data-key="t-horizontal">Horizontal</span> </a>
            </li>
            <li class="nav-item">
                <a href="layouts-detached.html" class="nav-link menu-link" target="_blank"> <i
                        class="bi bi-layout-sidebar-inset"></i> <span data-key="t-detached">Detached</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="layouts-two-column.html" class="nav-link menu-link" target="_blank"> <i
                        class="bi bi-layout-three-columns"></i> <span data-key="t-two-column">Two
                        Column</span> </a>
            </li>
            <li class="nav-item">
                <a href="layouts-vertical-hovered.html" class="nav-link menu-link" target="_blank"> <i
                        class="bi bi-layout-text-sidebar-reverse"></i> <span
                        data-key="t-hovered">Hovered</span> </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                    <i class="mdi mdi-spin mdi-cog-outline fs-22"></i> <span data-key="t-multi-level">Paramètres</span>
                </a>
                {{-- <div class="collapse menu-dropdown" id="sidebarMultilevel">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                        </li>
                        <li class="nav-item">
                            <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarAccount"
                                data-key="t-level-1.2"> Level
                                1.2
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAccount">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarCrm"
                                            data-key="t-level-2.2"> Level 2.2
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarCrm">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-level-3.1">
                                                        Level 3.1
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-key="t-level-3.2">
                                                        Level 3.2
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div> --}}
            </li>

        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>