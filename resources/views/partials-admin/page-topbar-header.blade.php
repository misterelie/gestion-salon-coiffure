<div class="layout-width">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box horizontal-logo">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="25">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="25">
                    </span>
                </a>
            </div>

            <button type="button"
                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                id="topnav-hamburger-icon">
                <span class="hamburger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <button type="button" class="btn btn-sm px-3 fs-15 text-reset header-item d-none d-md-block"
                data-bs-toggle="modal" data-bs-target="#searchModal">
                <span class="bi bi-search me-2"></span> Rechercher ici..
            </button>
        </div>

        <div class="d-flex align-items-center">

            <div class="d-md-none topbar-head-dropdown header-item">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                    id="page-header-search-dropdown" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="bi bi-search fs-16"></i>
                </button>
            </div>

            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class='bi bi-grid fs-18'></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fw-semibold fs-15"> Browse by Apps </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                    <i class="ri-arrow-right-s-line align-middle"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="assets/images/brands/github.png" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="assets/images/brands/slack.png" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                    id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    aria-haspopup="true" aria-expanded="false">
                    <i class='bi bi-bag fs-18'></i>
                    <span
                        class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart"
                    aria-labelledby="page-header-cart-dropdown">
                    <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                            </div>
                            <div class="col-auto">
                                <span class="badge text-warning bg-warning-subtle fs-13"><span
                                        class="cartitem-badge">7</span>
                                    items</span>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 300px;">
                        <div class="p-2">
                            <div class="text-center empty-cart" id="empty-cart">
                                <div class="avatar-md mx-auto my-3">
                                    <div class="avatar-title bg-info-subtle text-info fs-36 rounded-circle">
                                        <i class='bx bx-cart'></i>
                                    </div>
                                </div>
                                <h5 class="mb-3">Your Cart is Empty!</h5>
                                <a href="#!" class="btn btn-success w-md mb-3">Shop Now</a>
                            </div>
                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/products/img-1.png"
                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                    <div class="flex-grow-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            <a href="#!" class="text-reset">Branded
                                                T-Shirts</a>
                                        </h6>
                                        <p class="mb-0 fs-13 text-muted">
                                            Quantity: <span>10 x $32</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span>
                                        </h5>
                                    </div>
                                    <div class="ps-2">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                class="ri-close-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/products/img-2.png"
                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                    <div class="flex-grow-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            <a href="#!" class="text-reset">Bentwood Chair</a>
                                        </h6>
                                        <p class="mb-0 fs-13 text-muted">
                                            Quantity: <span>5 x $18</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span>
                                        </h5>
                                    </div>
                                    <div class="ps-2">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                class="ri-close-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/products/img-3.png"
                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                    <div class="flex-grow-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            <a href="#!" class="text-reset">
                                                Borosil Paper Cup</a>
                                        </h6>
                                        <p class="mb-0 fs-13 text-muted">
                                            Quantity: <span>3 x $250</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span>
                                        </h5>
                                    </div>
                                    <div class="ps-2">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                class="ri-close-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/products/img-6.png"
                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                    <div class="flex-grow-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            <a href="#!" class="text-reset">Gray
                                                Styled T-Shirt</a>
                                        </h6>
                                        <p class="mb-0 fs-13 text-muted">
                                            Quantity: <span>1 x $1250</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h5 class="m-0 fw-normal">$ <span
                                                class="cart-item-price">1250</span></h5>
                                    </div>
                                    <div class="ps-2">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                class="ri-close-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/products/img-5.png"
                                        class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                    <div class="flex-grow-1">
                                        <h6 class="mt-0 mb-1 fs-14">
                                            <a href="#!" class="text-reset">Stillbird Helmet</a>
                                        </h6>
                                        <p class="mb-0 fs-13 text-muted">
                                            Quantity: <span>2 x $495</span>
                                        </p>
                                    </div>
                                    <div class="px-2">
                                        <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span>
                                        </h5>
                                    </div>
                                    <div class="ps-2">
                                        <button type="button"
                                            class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i
                                                class="ri-close-fill fs-16"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border"
                        id="checkout-elem">
                        <div class="d-flex justify-content-between align-items-center pb-3">
                            <h5 class="m-0 text-muted">Total:</h5>
                            <div class="px-2">
                                <h5 class="m-0" id="cart-item-total">$1258.58</h5>
                            </div>
                        </div>

                        <a href="#!" class="btn btn-success text-center w-100">
                            Checkout
                        </a>
                    </div>
                </div>
            </div>

            <div class="ms-1 header-item d-none d-sm-flex">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                    data-toggle="fullscreen">
                    <i class='bi bi-arrows-fullscreen fs-16'></i>
                </button>
            </div>

            <div class="dropdown topbar-head-dropdown ms-1 header-item">
                <button type="button"
                    class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle mode-layout"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-sun align-middle fs-20"></i>
                </button>
                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                    <a href="#!" class="dropdown-item" data-mode="light"><i
                            class="bi bi-sun align-middle me-2"></i> Defualt (light mode)</a>
                    <a href="#!" class="dropdown-item" data-mode="dark"><i
                            class="bi bi-moon align-middle me-2"></i> Dark</a>
                    <a href="#!" class="dropdown-item" data-mode="auto"><i
                            class="bi bi-moon-stars align-middle me-2"></i> Auto (system defualt)</a>
                </div>
            </div>

            <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                    <i class='bi bi-bell fs-18'></i>
                    <span
                        class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"><span
                            class="notification-badge">4</span><span class="visually-hidden">unread
                            messages</span></span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">

                    <div class="dropdown-head rounded-top">
                        <div class="p-3 border-bottom border-bottom-dashed">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="mb-0 fs-16 fw-semibold"> Notifications <span
                                            class="badge text-danger  bg-danger-subtle fs-13 notification-badge">
                                            4</span></h6>
                                    <p class="fs-14 text-muted mt-1 mb-0">You have <span
                                            class="fw-semibold notification-unread">3</span> unread messages
                                    </p>
                                </div>
                                <div class="col-auto dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                        class="link-secondary fs-14"><i
                                            class="bi bi-three-dots-vertical"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">All Clear</a></li>
                                        <li><a class="dropdown-item" href="#">Mark all as read</a></li>
                                        <li><a class="dropdown-item" href="#">Archive All</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="py-2 ps-2" id="notificationItemsTabContent">
                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                            <h6
                                class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">
                                New</h6>
                            <div
                                class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3 flex-shrink-0">
                                        <span
                                            class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                            <i class="bx bx-badge-check"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 fs-14 mb-2 lh-base">Your <b>Elite</b> author
                                                Graphic
                                                Optimization <span class="text-secondary">reward</span> is
                                                ready!
                                            </h6>
                                        </a>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec
                                                ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="all-notification-check01">
                                            <label class="form-check-label"
                                                for="all-notification-check01"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                <div class="d-flex">
                                    <div class="position-relative me-3 flex-shrink-0">
                                        <img src="assets/images/users/avatar-2.jpg"
                                            class="rounded-circle avatar-xs" alt="user-pic">
                                        <span
                                            class="active-badge position-absolute start-100 translate-middle p-1 bg-success rounded-circle">
                                            <span class="visually-hidden">New alerts</span>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-1 fs-14 fw-semibold">Angela Bernier</h6>
                                        </a>
                                        <div class="fs-13 text-muted">
                                            <p class="mb-1">Answered to your comment on the cash flow
                                                forecast's graph 🔔.</p>
                                        </div>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="all-notification-check02">
                                            <label class="form-check-label"
                                                for="all-notification-check02"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="text-reset notification-item d-block dropdown-item position-relative unread-message">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3 flex-shrink-0">
                                        <span
                                            class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                            <i class='bx bx-message-square-dots'></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-2 fs-14 lh-base">You have received <b
                                                    class="text-success">20</b> new messages in the
                                                conversation
                                            </h6>
                                        </a>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="all-notification-check03">
                                            <label class="form-check-label"
                                                for="all-notification-check03"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6
                                class="text-overflow text-muted fs-13 my-2 text-uppercase notification-title">
                                Read Before</h6>

                            <div
                                class="text-reset notification-item d-block dropdown-item position-relative">
                                <div class="d-flex">

                                    <div class="position-relative me-3 flex-shrink-0">
                                        <img src="assets/images/users/avatar-8.jpg"
                                            class="rounded-circle avatar-xs" alt="user-pic">
                                        <span
                                            class="active-badge position-absolute start-100 translate-middle p-1 bg-warning rounded-circle">
                                            <span class="visually-hidden">New alerts</span>
                                        </span>
                                    </div>

                                    <div class="flex-grow-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-1 fs-14 fw-semibold">Maureen Gibson</h6>
                                        </a>
                                        <div class="fs-13 text-muted">
                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                        </div>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="all-notification-check04">
                                            <label class="form-check-label"
                                                for="all-notification-check04"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="notification-actions" id="notification-actions">
                            <div class="d-flex text-muted justify-content-center align-items-center">
                                Select <div id="select-content" class="text-body fw-semibold px-1">0</div>
                                Result <button type="button" class="btn btn-link link-danger p-0 ms-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#removeNotificationModal">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown ms-sm-3 header-item topbar-user">
                <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center">
                        <img class="rounded-circle header-profile-user"
                            src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                        <span class="text-start ms-xl-2">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">
                                {{ Auth::user()->name }}
                            </span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Bienvenue {{ Auth::user()->name }}!</h6>
                    <a class="dropdown-item" href="{{ route('profile.edit') }}"><i
                            class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                            class="align-middle">Profil</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}" >
                        @csrf
                        <a class="dropdown-item" href="route('logout')" 
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1">
                            </i>
                            <span class="align-middle" data-key="t-logout">Se déconnecter</span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>