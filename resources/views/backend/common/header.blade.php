<!doctype html>
<html lang="en" dir="ltr"> <!-- This "app.blade.php" master page is used for all the pages content present in "views/livewire" except "custom" and "switcher" pages -->
	
<!-- Mirrored from laravel8.spruko.com/noa/index by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:07:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

        <!-- TITLE -->
		<title>
            @yield('title')
        </title>

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}backend/assets/images/brand/favicon.ico" />

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{ asset('') }}backend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="{{ asset('') }}backend/assets/css/style.css" rel="stylesheet" />
        <link href="{{ asset('') }}backend/assets/css/skin-modes.css" rel="stylesheet" />

        
        
        <!--- FONT-ICONS CSS -->
        <link href="{{ asset('') }}backend/assets/plugins/icons/icons.css" rel="stylesheet" />

        <!-- INTERNAL Switcher css -->
        <link href="{{ asset('') }}backend/assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="{{ asset('') }}backend/assets/switcher/demo.css" rel="stylesheet">

    </head>

    <body class="ltr app sidebar-mini">

        <!-- Switcher-->
        <!-- Switcher -->
        <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="form_holder sidebar-right1">
                    <div class="row">
                        <div class="predefined_styles">
                            <div class="swichermainleft text-center">
                                <div class="swichermainleft text-center">
                                <div class="p-3 d-grid gap-2">
                                    <a href="https://laravel8.spruko.com/noa" class="btn ripple btn-primary mt-0" target="_blank">View Demo</a>
                                    <a href="https://themeforest.net/item/noa-laravel-admin-template/38978033" class="btn ripple btn-secondary" target="_blank">Buy Now</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink" target="_blank">Our
                                        Portfolio</a>
                                </div>
                            </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Navigation Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Vertical Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Horizontal Click Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch35" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Horizontal Hover Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch15"
                                                    id="myonoffswitch111" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>LTR and RTL VERSIONS</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">LTR Version</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                    id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">RTL Version</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                    id="myonoffswitch24" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Light Theme Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Theme</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                    id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Primary</span>
                                            <div class="">
                                                <input class="wpx-30 h-30 input-color-picker color-primary-light"
                                                    value="#8FBD56" id="colorID" type="color"
                                                    data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                    data-id7="transparentcolor" name="lightPrimary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Dark Theme Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Theme</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                    id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Primary</span>
                                            <div class="">
                                                <input class="wpx-30 h-30 input-dark-color-picker color-primary-dark"
                                                    value="#8FBD56" id="darkPrimaryColorID"
                                                    type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                    data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
                                            </div>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Custom Background</span>
                                            <div class="">
                                                <input class="wpx-30 h-30 input-transparent-color-picker color-bg-transparent"
                                                    value="#8FBD56" id="transparentBgColorID"
                                                    type="color" data-id5="body" data-id6="boxed-theme" name="transparentBackground">
                                            </div>
                                        </div>
                                        <div class="switch-toggle">
                                            <span class="">Background Image</span>
                                            <div class="mt-1">
                                                <a class="bg-img bg-img1" href="javascript:void(0);"><img
                                                        src="{{ asset('') }}backend/assets/images/media/bg-img1.jpg" alt="Bg-Image" id="bgimage1"></a>
                                                <a class="bg-img bg-img2" href="javascript:void(0);"><img
                                                        src="{{ asset('') }}backend/assets/images/media/bg-img2.jpg" alt="Bg-Image" id="bgimage2"></a>
                                                <a class="bg-img bg-img3" href="javascript:void(0);"><img
                                                        src="{{ asset('') }}backend/assets/images/media/bg-img3.jpg" alt="Bg-Image" id="bgimage3"></a>
                                                <a class="bg-img bg-img4" href="javascript:void(0);"><img
                                                        src="{{ asset('') }}backend/assets/images/media/bg-img4.jpg" alt="Bg-Image" id="bgimage4"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft menu-styles">
                                <h4>Menu Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle lightMenu d-flex">
                                            <span class="me-auto">Light Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch3" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle colorMenu d-flex mt-2">
                                            <span class="me-auto">Color Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle darkMenu d-flex mt-2">
                                            <span class="me-auto">Dark Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle gradientMenu d-flex mt-2">
                                            <span class="me-auto">Gradient Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                    id="myonoffswitch19" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft header-styles">
                                <h4>Header Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle lightHeader d-flex">
                                            <span class="me-auto">Light Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch6" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle  colorHeader d-flex mt-2">
                                            <span class="me-auto">Color Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle darkHeader d-flex mt-2">
                                            <span class="me-auto">Dark Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>

                                        <div class="switch-toggle darkHeader d-flex mt-2">
                                            <span class="me-auto">Gradient Header</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                    id="myonoffswitch20" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Layout Width Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Full Width</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                    id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Boxed</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                    id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Layout Positions</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Fixed</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                    id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Scrollable</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                    id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft leftmenu-styles">
                                <h4>Sidemenu layout Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Default Menu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Icon with Text</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Icon Overlay</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Closed Sidemenu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch16" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Hover Submenu</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch17" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Hover Submenu Style 1</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                    id="myonoffswitch18" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Reset All Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section my-4">
                                        <button class="btn btn-danger btn-block resetCustomStyles" id="resetAll" type="button">Reset All
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->
        <!-- Switcher-->

        <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{ asset('') }}backend/assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
		<div class="page">
			<div class="page-main">

                <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.html">
                            <img src="{{ asset('') }}backend/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="{{ asset('') }}backend/assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-xl-block">
							<input class="form-control" placeholder="Search for results..." type="search">
							<button class="btn">
								<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
							</button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-xl-none d-md-block d-none">
                                <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path fill="" d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-md-none d-flex">
                                            <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
												<svg xmlns="http://www.w3.org/2000/svg" class="header-icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
													<input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path  d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z"/></svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- COUNTRY -->
                                        <div class="dropdown d-md-flex main-header-notification flag-dropdown">
                                            <a class="nav-link icon text-center country-nav-link" data-bs-target="#country-selector" data-bs-toggle="modal">
												<img class="header-icons language" alt="" src="{{ asset('') }}backend/assets/images/flags/us_flag.jpg">
											</a>
                                        </div>
                                        <!-- SEARCH -->
                                        <div class="dropdown  d-flex">
                                            <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                <span class="dark-layout">
													<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22.0482178,13.2746582c-0.1265259-0.2453003-0.4279175-0.3416138-0.6732178-0.2150879C20.1774902,13.6793823,18.8483887,14.0019531,17.5,14c-0.8480835-0.0005493-1.6913452-0.1279297-2.50177-0.3779297c-4.4887085-1.3847046-7.0050049-6.1460571-5.6203003-10.6347656c0.0320435-0.1033325,0.0296021-0.2142944-0.0068359-0.3161621C9.2781372,2.411377,8.9921875,2.2761841,8.7324219,2.3691406C4.6903076,3.800293,1.9915771,7.626709,2,11.9146729C2.0109863,17.4956055,6.5440674,22.0109863,12.125,22c4.9342651,0.0131226,9.1534424-3.5461426,9.9716797-8.4121094C22.1149292,13.4810181,22.0979614,13.3710327,22.0482178,13.2746582z M16.0877075,20.0958252c-4.5321045,2.1853027-9.9776611,0.2828979-12.1630249-4.2492065S3.6417236,5.8689575,8.1738281,3.6835938C8.0586548,4.2776489,8.0004272,4.8814087,8,5.4865723C7.9962769,10.7369385,12.2495728,14.9962769,17.5,15c1.1619263,0.0023193,2.3140869-0.2119751,3.3974609-0.6318359C20.1879272,16.8778076,18.4368896,18.9630127,16.0877075,20.0958252z"/></svg>
												</span>
												<span class="light-layout">
													<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M6.3427734,16.9501953l-1.4140625,1.4140625c-0.09375,0.09375-0.1463623,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001831,0.2598877-0.0525513,0.3535156-0.1464844l1.4140015-1.4140625c0.0024414-0.0023804,0.0047607-0.0047607,0.0071411-0.0071411c0.1932373-0.1971436,0.1900635-0.5137329-0.0071411-0.7069702C6.8526001,16.7498169,6.5360718,16.7529907,6.3427734,16.9501953z M6.3427734,7.0498047c0.0936279,0.0939331,0.2208862,0.1466675,0.3535156,0.1464844c0.1325684,0,0.2597046-0.0526733,0.3534546-0.1464233c0.1952515-0.1952515,0.1953125-0.5118408,0.000061-0.7070923L5.6356812,4.9287109c-0.1943359-0.1904907-0.5054321-0.1904907-0.6998291,0C4.7386475,5.1220093,4.7354736,5.4385376,4.9287109,5.6357422L6.3427734,7.0498047z M12,5h0.0006104C12.2765503,4.9998169,12.5001831,4.776001,12.5,4.5v-2C12.5,2.223877,12.276123,2,12,2s-0.5,0.223877-0.5,0.5v2.0006104C11.5001831,4.7765503,11.723999,5.0001831,12,5z M17.3037109,7.1962891c0.1326294,0.0001831,0.2598877-0.0525513,0.3535156-0.1464844l1.4140625-1.4141235c0.0023804-0.0023193,0.0047607-0.0046997,0.0070801-0.0070801c0.1932983-0.1972046,0.1900635-0.5137329-0.0070801-0.7070312c-0.1972046-0.1932373-0.5137329-0.1900635-0.7070312,0.0071411l-1.4140625,1.4140625c-0.09375,0.09375-0.1463623,0.2208862-0.1464233,0.3534546C16.803772,6.9723511,17.0275879,7.196228,17.3037109,7.1962891z M5,12c0-0.276123-0.223877-0.5-0.5-0.5h-2C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h2C4.776123,12.5,5,12.276123,5,12z M17.6572266,16.9502563c-0.0023804-0.0023804-0.0046997-0.0047607-0.0070801-0.0070801c-0.1972046-0.1932983-0.5137329-0.1901245-0.7070312,0.0070801c-0.1932373,0.1971436-0.1901245,0.5136719,0.0070801,0.7069702l1.4140625,1.4140625c0.0936279,0.0939331,0.2208252,0.1466675,0.3534546,0.1464844c0.1325684,0,0.2597046-0.0526733,0.3534546-0.1463623c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7070923L17.6572266,16.9502563z M12,19c-0.276123,0-0.5,0.223877-0.5,0.5v2.0005493C11.5001831,21.7765503,11.723999,22.0001831,12,22h0.0006104c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-2C12.5,19.223877,12.276123,19,12,19z M21.5,11.5h-2c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h2c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,11.5,21.5,11.5z M12,6.5c-3.0375366,0-5.5,2.4624634-5.5,5.5s2.4624634,5.5,5.5,5.5c3.0360107-0.0037842,5.4962158-2.4639893,5.5-5.5C17.5,8.9624634,15.0375366,6.5,12,6.5z M12,16.5c-2.4852905,0-4.5-2.0147095-4.5-4.5S9.5147095,7.5,12,7.5c2.4841309,0.0026855,4.4973145,2.0158691,4.5,4.5C16.5,14.4852905,14.4852905,16.5,12,16.5z"/></svg>
												</span>
                                            </a>
                                        </div>
                                        <!-- Theme-Layout -->
										<div class="dropdown d-md-flex source-container">
											<a class="nav-link icon shortcut-icn" data-bs-toggle="dropdown">
												<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/></svg>
											</a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow source-logo-menu pt-2 pb-2">
												<div class="drop-heading border-bottom d-f-ai-c">
													<h6 class="mb-0 fs-15 text-dark">SHORTCUTS</h6>
													<div class="ms-auto d-flex">
														<a href="#" class="util-main d-f-ai-c">
															<svg xmlns="http://www.w3.org/2000/svg" class="edit-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.8534546,7.1464844l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-14,14C2.0526733,16.2402344,2,16.3673706,2,16.5v5.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l14-14c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221C22.0487671,7.6581421,22.0487061,7.3416138,21.8534546,7.1464844z M7.2930298,21H3v-4.2930298l10.671814-10.671814l4.2926025,4.293457L7.2930298,21z M18.6714478,9.621582l-4.2926636-4.293396L16.5,3.2069702L20.7930298,7.5L18.6714478,9.621582z"/></svg>
														</a>
														<a href="#" class="util-main ms-1 d-f-ai-c">
															<svg xmlns="http://www.w3.org/2000/svg" class="add-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,11.5h-7v-7C12.5,4.223877,12.276123,4,12,4s-0.5,0.223877-0.5,0.5v7h-7C4.223877,11.5,4,11.723877,4,12s0.223877,0.5,0.5,0.5h7v7.0005493C11.5001831,19.7765503,11.723999,20.0001831,12,20h0.0006104c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-7h7c0.276123,0,0.5-0.223877,0.5-0.5S19.776123,11.5,19.5,11.5z"/></svg>
														</a>
													</div>
												</div>
												<div class="px-2 pb-4 pt-2">
													<div class="row mb-2">
														<div class="col d-flex">
															<a href="#" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12.1124268,2.0010986C7.6941528,1.9389648,4.0620728,5.4703979,4,9.8886719c0,5.4482422,7.3642578,11.7285156,7.6777344,11.9931641C11.7677002,21.958313,11.881958,22.0001831,12,22c0.118042,0.0001831,0.2322998-0.041687,0.3222656-0.1181641C12.6357422,21.6171875,20,15.3369141,20,9.8886719C19.9391479,5.5579224,16.4431763,2.0619507,12.1124268,2.0010986z M12,20.8339844C10.5839844,19.5625,5,14.2666016,5,9.8886719C5.0353394,6.0553589,8.166626,2.973877,12,3c3.833374-0.026123,6.9647217,3.0553589,7,6.8886719C19,14.2626953,13.414978,19.5615234,12,20.8339844z M12,7c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3c1.6561279-0.0018311,2.9981689-1.3438721,3-3C15,8.3431396,13.6568604,7,12,7z M12,12c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2c1.1040039,0.0014038,1.9985962,0.8959961,2,2C14,11.1045532,13.1045532,12,12,12z"/></svg>
																<span class="mt-1">Maps</span>
															</a>
														</div>
														<div class="col d-flex p-0">
															<a href="calendar2.html" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,4h-3V2.5C16.5,2.223877,16.276123,2,16,2s-0.5,0.223877-0.5,0.5V4h-7V2.5C8.5,2.223877,8.276123,2,8,2S7.5,2.223877,7.5,2.5V4H4.4995117c-1.380127,0.0014648-2.4985352,1.119873-2.5,2.5v13c0.0014648,1.380127,1.119873,2.4985352,2.5,2.5H19.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-13C21.9987183,5.119812,20.880188,4.0012817,19.5,4z M21,19.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H4.4995117c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V11H21V19.5z M21,10H2.9995117V6.5c0.0009155-0.828064,0.671936-1.4990845,1.5-1.5H7.5v1.5c0,0.0001831,0,0.0003662,0,0.0006104C7.5001831,6.7765503,7.723999,7.0001831,8,7c0.0001831,0,0.0003662,0,0.0006104,0C8.2765503,6.9998169,8.5001831,6.776001,8.5,6.5V5h7v1.5c0,0.0001831,0,0.0003662,0,0.0006104C15.5001831,6.7765503,15.723999,7.0001831,16,7c0.0001831,0,0.0003662,0,0.0006104,0C16.2765503,6.9998169,16.5001831,6.776001,16.5,6.5V5h3c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V10z"/></svg>
																<span class="mt-1">Calendar</span>
															</a>
														</div>
														<div class="col d-flex">
															<a href="mail-inbox.html" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,4h-15C3.119812,4.0012817,2.0012817,5.119812,2,6.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h15c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-11C21.9987183,5.119812,20.880188,4.0012817,19.5,4z M21,17.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-15c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V8.0913696l8.7392578,5.3353882c0.0080566,0.0048828,0.0184326,0.0030518,0.0266724,0.0075073C11.836731,13.4725952,11.9138184,13.500061,12,13.5c0.0905762,0.000061,0.1763306-0.0263672,0.2519531-0.0707397c0.0026855-0.0015869,0.0061646-0.0008545,0.0087891-0.0025024L21,8.0913696V17.5z M21,6.9194946l-0.2387695,0.145752c-0.0070801,0.0038452-0.0150146,0.0037842-0.0219727,0.0079956l-8.7313843,5.3359985L12,12.4140625l-0.0078735-0.0048218L3.2607422,7.0732422C3.2603149,7.072998,3.2598877,7.0727539,3.2594604,7.0724487c-0.006958-0.0042114-0.0149536-0.0041504-0.0220337-0.0079956L3,6.9194946V6.5C3.0009155,5.671936,3.671936,5.0009155,4.5,5h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V6.9194946z"/></svg>
																<span class="mt-1">Inbox</span>
															</a>
														</div>
													</div>
													<div class="row mb-2">
														<div class="col d-flex">
															<a href="chat.html" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M18.5,2h-13C4.119812,2.0012817,3.0012817,3.119812,3,4.5v12c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h3.2930298l2.8534546,2.8535156C11.7401123,21.9474487,11.8673706,22.0001831,12,22c0.1326294,0.0001221,0.2598267-0.0525513,0.3535156-0.1464844L15.2069702,19H18.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-12C20.9987183,3.119812,19.880188,2.0012817,18.5,2z M20,16.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H15c-0.1326294,0-0.2597656,0.0526733-0.3535156,0.1464844L12,20.7929688l-2.6464844-2.6464844C9.2597656,18.0526733,9.1326294,18,9,18H5.5c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-12C4.0009155,3.671936,4.671936,3.0009155,5.5,3h13c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V16.5z"/></svg>
																<span class="mt-1">Chat</span>
															</a>
														</div>
														<div class="col d-flex p-0">
															<a href="#" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19,5h-6.1396484l-0.3163452-0.9492188C12.1364746,2.8253784,10.989624,1.9989014,9.6982422,2H5C3.3438721,2.0018311,2.0018311,3.3438721,2,5v13c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14c1.6561279-0.0018311,2.9981689-1.3438721,3-3V8C21.9981689,6.3438721,20.6561279,5.0018311,19,5z M21,18c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h4.6982422c0.8607788-0.0007324,1.6251831,0.550293,1.8964844,1.3671875l0.4306641,1.2910156C12.09375,5.8622437,12.28479,5.9998169,12.5,6H19c1.1040039,0.0014038,1.9985962,0.8959961,2,2V18z"/></svg>
																<span class="mt-1">Files</span>
															</a>
														</div>
														<div class="col d-flex">
															<a href="products.html" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,2H1.9993896C1.7234497,2.0001831,1.4998169,2.223999,1.5,2.5v4c0.0009766,1.0394897,0.6361694,1.9294434,1.5390625,2.3065796C3.0140381,8.8660889,3,8.9313965,3,9v12.5005493C3.0001831,21.7765503,3.223999,22.0001831,3.5,22h17.0006104C20.7765503,21.9998169,21.0001831,21.776001,21,21.5V9c0-0.0686035-0.0140381-0.1339111-0.0390625-0.1934204C21.8638306,8.4294434,22.4990234,7.5394897,22.5,6.5V2.4993896C22.4998169,2.2234497,22.276001,1.9998169,22,2z M14.5,3h3v3.5C17.5,7.3284302,16.8284302,8,16,8s-1.5-0.6715698-1.5-1.5V3z M10.5,3h3v3.5C13.5,7.3284302,12.8284302,8,12,8s-1.5-0.6715698-1.5-1.5V3z M6.5,3h3v3.5C9.5,7.3284302,8.8284302,8,8,8S6.5,7.3284302,6.5,6.5V3z M2.5,6.5V3h3v3.5C5.5,7.3284302,4.8284302,8,4,8S2.5,7.3284302,2.5,6.5z M15,21H9v-5c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V21z M20,21h-4v-5c0-2.2091675-1.7908325-4-4-4s-4,1.7908325-4,4v5H4V9c0.8217163-0.0007935,1.5443726-0.4028931,2-1.0151367C6.4556274,8.5971069,7.1782837,8.9992065,8,9c0.8217163-0.0007935,1.5443726-0.4028931,2-1.0151367C10.4556274,8.5971069,11.1782837,8.9992065,12,9c0.8217163-0.0007935,1.5443726-0.4028931,2-1.0151367C14.4556274,8.5971069,15.1782837,8.9992065,16,9c0.8217163-0.0007935,1.5443726-0.4028931,2-1.0151367C18.4556274,8.5971069,19.1782837,8.9992065,20,9V21z M21.5,6.5C21.5,7.3284302,20.8284302,8,20,8s-1.5-0.6715698-1.5-1.5V3h3V6.5z"/></svg>
																<span class="mt-1">Shopping</span>
															</a>
														</div>
													</div>
													<div class="row">
														<div class="col d-flex">
															<a href="chat.html" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.3809204,13.3710938C18.934082,12.5227661,20,10.8944092,20,9c0-2.7614136-2.2385864-5-5-5c-0.140625,0.0025635-0.2809448,0.0146484-0.4199219,0.0361328l-0.1357422,0.0175781c-0.0012207,0.0001221-0.0024414,0.0002441-0.0036621,0.0004272c-0.2744141,0.0317383-0.4711304,0.2799072-0.4393921,0.5543213c0.0317993,0.2744141,0.2799683,0.4711304,0.5543823,0.4393921l0.1591797-0.0205078C14.8092041,5.0118408,14.9044189,5.0027466,15,5c2.2091675,0,4,1.7908325,4,4s-1.7908325,4-4,4c-0.276123,0-0.5,0.223877-0.5,0.5S14.723877,14,15,14c3.6798096,0.008728,6.7261353,2.8618774,6.9755859,6.5332031C21.9933472,20.7957764,22.2114258,20.9998169,22.4746094,21c0.0107422,0,0.0214844,0,0.0332031-0.0009766c0.2755127-0.0184937,0.4840088-0.2566528,0.4658203-0.5322266C22.7439575,17.0975952,20.4518433,14.3356323,17.3809204,13.3710938z M11.3793945,13.3696289C12.9319458,12.5209961,13.9978027,10.8936157,14,9c0-2.7614136-2.2385864-5-5-5S4,6.2385864,4,9c0,1.8936157,1.0650635,3.5214233,2.6171265,4.3700562c-3.0588379,0.9575195-5.3679199,3.706665-5.5907593,7.0967407c-0.0181885,0.2755737,0.1903076,0.5137329,0.4658203,0.5322266c0.0041504,0.0003052,0.0083618,0.0006104,0.0125122,0.0008545c0.2723999,0.0146484,0.5050659-0.1942749,0.5197144-0.4666748c0.2295532-3.5004272,3.0177612-6.2886963,6.5181885-6.5181885c3.8525391-0.2526245,7.1804199,2.6656494,7.4329834,6.5181885C15.9933472,20.7957764,16.2114258,20.9998169,16.4746094,21c0.0107422,0,0.0214844,0,0.0332031-0.0009766c0.2755737-0.0184937,0.4840088-0.2566528,0.4658203-0.5322266C16.7530518,17.1099243,14.4707031,14.3337402,11.3793945,13.3696289z M9,13c-2.2091675,0-4-1.7908325-4-4s1.7908325-4,4-4c2.208252,0.0021973,3.9978027,1.791748,4,4C13,11.2091675,11.2091675,13,9,13z"/></svg>
																<span class="mt-1">Contacts</span>
															</a>
														</div>
														<div class="col d-flex p-0">
															<a href="#" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2.5,12h7c0.0001831,0,0.0003662,0,0.0006104,0C9.7765503,11.9998169,10.0001831,11.776001,10,11.5v-7c0-0.0001831,0-0.0003662,0-0.0006104C9.9998169,4.2234497,9.776001,3.9998169,9.5,4h-7C2.4998169,4,2.4996338,4,2.4993896,4C2.2234497,4.0001831,1.9998169,4.223999,2,4.5v7c0,0.0001831,0,0.0003662,0,0.0005493C2.0001831,11.7765503,2.223999,12.0001831,2.5,12z M3,5h6v6H3V5z M12.5,8h9C21.776123,8,22,7.776123,22,7.5S21.776123,7,21.5,7h-9C12.223877,7,12,7.223877,12,7.5S12.223877,8,12.5,8z M21.5,15h-19C2.223877,15,2,15.223877,2,15.5S2.223877,16,2.5,16h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,15,21.5,15z M13.5,19h-11C2.223877,19,2,19.223877,2,19.5S2.223877,20,2.5,20h11c0.276123,0,0.5-0.223877,0.5-0.5S13.776123,19,13.5,19z M21.5,11h-9c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h9c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,11,21.5,11z"/></svg>
																<span class="mt-1">Blog</span>
															</a>
														</div>
														<div class="col d-flex">
															<a href="products.html" class="dropdown-menu-item text-muted source-logo-container">
																<svg xmlns="http://www.w3.org/2000/svg" class="source-logo" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M21.5,21h-19C2.223877,21,2,21.223877,2,21.5S2.223877,22,2.5,22h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,21,21.5,21z M4.5,18.0888672h5c0.1326294,0,0.2597656-0.0527344,0.3534546-0.1465454l10-10c0.000061,0,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481l-5-5c0-0.000061-0.000061-0.0001221-0.0001221-0.0001221c-0.1951904-0.1951904-0.5117188-0.1951294-0.7068481,0.0001221l-10,10C4.0526733,12.3291016,4,12.4562378,4,12.5888672v5c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,17.8654175,4.223999,18.0890503,4.5,18.0888672z M14.5,3.2958984l4.2930298,4.2929688l-2.121582,2.121582l-4.2926025-4.293396L14.5,3.2958984z M5,12.7958984l6.671814-6.671814l4.2926025,4.293396l-6.6713867,6.6713867H5V12.7958984z"/></svg>
																<span class="mt-1">Forms</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- SHORTCUTS -->
										<div class="dropdown d-md-flex">
											<a class="nav-link icon full-screen-link nav-link-bg">
												<svg xmlns="http://www.w3.org/2000/svg"  enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M8.5,21H3v-5.5C3,15.223877,2.776123,15,2.5,15S2,15.223877,2,15.5v6.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h6C8.776123,22,9,21.776123,9,21.5S8.776123,21,8.5,21z M8.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v6.0005493C2.0001831,8.7765503,2.223999,9.0001831,2.5,9h0.0006104C2.7765503,8.9998169,3.0001831,8.776001,3,8.5V3h5.5C8.776123,3,9,2.776123,9,2.5S8.776123,2,8.5,2z M21.5,15c-0.276123,0-0.5,0.223877-0.5,0.5V21h-5.5c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h6.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-6C22,15.223877,21.776123,15,21.5,15z M21.5,2h-6C15.223877,2,15,2.223877,15,2.5S15.223877,3,15.5,3H21v5.5005493C21.0001831,8.7765503,21.223999,9.0001831,21.5,9h0.0006104C21.7765503,8.9998169,22.0001831,8.776001,22,8.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z"/></svg>
											</a>
										</div>
										<!-- FULL-SCREEN -->
                                        <div class="dropdown  d-flex shopping-cart">
                                            <a href="javascript:void(0);" class="nav-link icon text-center"  data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M9,18c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C11,18.8954468,10.1045532,18,9,18z M9,21c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C10,20.5523071,9.5523071,21,9,21z M17,18c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C19,18.8954468,18.1045532,18,17,18z M17,21c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C18,20.5523071,17.5523071,21,17,21z M19.4985352,12.0502319l1.9848633-7.4213257c0.0111694-0.0419312,0.0167847-0.085083,0.0167847-0.128479C21.5002441,4.2241211,21.2763062,4.000061,21,4H5.9198608L5.4835205,2.371582C5.4249268,2.1530151,5.2268677,2.0009766,5.0005493,2.0009766H3.5048218C3.5031128,2.0009766,3.501709,2,3.5,2C3.223877,2,3,2.223877,3,2.5S3.223877,3,3.5,3v0.0009766L4.6162109,3l2.579834,9.6288452C7.2546387,12.8477783,7.453064,13,7.6796875,13H11h6.8603516H19c0.8284302,0,1.5,0.6715698,1.5,1.5S19.8284302,16,19,16H5c-0.276123,0-0.5,0.223877-0.5,0.5S4.723877,17,5,17h14c1.3807373,0,2.5-1.1192627,2.5-2.5C21.5,13.2900391,20.6403809,12.2813721,19.4985352,12.0502319z M18.4761963,12h-0.6158447H11H8.0634766L6.1878052,5h14.1608276L18.4761963,12z"/></svg>
												<span class="badge bg-info header-badge">4</span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-15 text-dark">Shopping Cart</h6>
                                                        <div class="ms-auto">
															<span class="xm-title badge bg-secondary text-white fw-normal fs-12 badge-pill"> <a href="javascript:void(0);" class="showall-text text-white">Remove All</a> </span>
														</div>
                                                    </div>
                                                </div>
                                                <div class="header-dropdown-list cart-menu ps4 overflow-hidden">
                                                    <a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="assets/images/ecommerce/1.jpg"></span>
                                                        <div class="wp-60 cart-desc mt-1">
                                                            <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">TrueBasket Metal Single Pot</p>
                                                            <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-green">In Stock</span></p>
                                                            <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 01</span>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $129
                                                            </span>
                                                        </div>
                                                    </a>
													<a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="assets/images/ecommerce/2.jpg"></span>
                                                        <div class="wp-60 cart-desc mt-1">
                                                            <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Authentic chair with Canopy</p>
                                                            <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-green">In Stock</span></p>
                                                            <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 03</span>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $99
                                                            </span>
                                                        </div>
                                                    </a>
													<a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="assets/images/ecommerce/3.jpg"></span>
                                                        <div class="wp-60 cart-desc mt-1">
                                                            <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Casual Sneakers Canvas</p>
                                                            <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-green">In Stock</span></p>
                                                            <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 03</span>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $299
                                                            </span>
                                                        </div>
                                                    </a>
													<a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="assets/images/ecommerce/4.jpg"></span>
                                                        <div class="wp-60 cart-desc mt-1">
                                                            <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">Branded Head Phones</p>
                                                            <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-danger">No Stock</span></p>
                                                            <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 01</span>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $249
                                                            </span>
                                                        </div>
                                                    </a>
													<a class="dropdown-item d-flex p-4" href="cart.html">
                                                        <span class="avatar avatar-lg br-5 me-3 align-self-center cover-image" data-bs-image-src="assets/images/ecommerce/5.jpg"></span>
                                                        <div class="wp-60 cart-desc mt-1">
                                                            <p class="fs-13 mb-0 lh-1 mb-1 text-dark fw-500">camera lens (16mm f/1.4)</p>
                                                            <p class="fs-12 fw-300 lh-1 mb-0">Status: <span class="text-green">In Stock</span></p>
                                                            <span class="fs-12 fw-300 lh-1 mb-0">Quantity: 02</span>
                                                        </div>
                                                        <div class="ms-auto text-end d-flex fs-16">
                                                            <span class="fs-16 text-dark d-none d-sm-block fw-semibold">
                                                                $1,279
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
												<div class="dropdown-divider m-0"></div>
												<div class="text-center p-3">
													<a class="btn btn-primary">Checkout</a>
												</div>
                                             </div>
                                        </div>
                                        <!-- CART -->
										<div class="dropdown d-md-flex message">
											<a href="javascript:void(0);" class="nav-link icon text-center" data-bs-toggle="dropdown" aria-expanded="false">
												<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.4541016,11H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,11,17.4541016,11z M19.5,2h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h12.7930298l3.8534546,3.8535156C21.2402344,21.9473267,21.3673706,22,21.5,22c0.276123,0,0.5-0.223877,0.5-0.5v-17C21.9987183,3.119812,20.880188,2.0012817,19.5,2z M21,20.2929688l-3.1464844-3.1464844C17.7597656,17.0526733,17.6326294,17,17.5,17h-13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V20.2929688z M17.4541016,8H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,8,17.4541016,8z"/></svg>
												<span class="pulse-danger"></span>
											</a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-popper="none">
												<div class="drop-heading border-bottom">
													<div class="d-flex">
														<h6 class="mt-1 mb-0 fs-15 text-dark">Messages</h6>
														<div class="ms-auto">
															<span class="xm-title badge bg-secondary text-white fw-normal fs-12 badge-pill"> <a href="javascript:void(0);" class="showall-text text-white">Clear</a> </span>
														</div>
													</div>
												</div>
												<div class="message-menu ps2 overflow-hidden">
													<a class="dropdown-item d-flex" href="chat.html">
														<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/1.jpg"></span>
														<div class="wd-90p">
															<div class="d-flex">
																<h5 class="mb-1">Hawaii Hilton</h5>
																<small class="text-muted ms-auto text-end"> 11.07 am </small>
															</div>
															<span class="fs-12 text-muted">Wanted to submit project by tomorrow....</span>
														</div>
													</a>
													<a class="dropdown-item d-flex" href="chat.html">
														<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/15.jpg">
														</span>
														<div class="wd-90p">
															<div class="d-flex">
																<h5 class="mb-1">Hermoini</h5>
																<small class="text-muted ms-auto text-end"> 12.32 am </small>
															</div>
															<span class="fs-12 text-muted">Planning for next big update......</span>
														</div>
													</a>
													<a class="dropdown-item d-flex" href="chat.html">
														<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/12.jpg">
														</span>
														<div class="wd-90p">
															<div class="d-flex">
																<h5 class="mb-1">Buenda osas</h5>
																<small class="text-muted ms-auto text-end"> 2:17 am </small>
															</div>
															<span class="fs-12 text-muted">Ready to submit future data...</span>
														</div>
													</a>
													<a class="dropdown-item d-flex" href="chat.html">
														<span class="avatar avatar-md brround me-3 align-self-center cover-image" data-bs-image-src="assets/images/users/4.jpg">
														</span>
														<div class="wd-90p">
															<div class="d-flex">
																<h5 class="mb-1">Gabby gibson</h5>
																<small class="text-muted ms-auto text-end"> 7:55 am </small>
															</div>
															<span class="fs-12 text-muted">Cleared all statistics from last year......</span>
														</div>
													</a>
												</div>
												<div class="dropdown-divider m-0"></div>
												<div class="text-center p-3">
													<a class="btn btn-primary">View All Messages</a>
												</div>
											</div>
										</div>
										<!-- Messages-->
                                        <div class="dropdown d-md-flex notifications">
											<a class="nav-link icon" data-bs-toggle="dropdown">
												<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M18,14.1V10c0-3.1-2.4-5.7-5.5-6V2.5C12.5,2.2,12.3,2,12,2s-0.5,0.2-0.5,0.5V4C8.4,4.3,6,6.9,6,10v4.1c-1.1,0.2-2,1.2-2,2.4v2C4,18.8,4.2,19,4.5,19h3.7c0.5,1.7,2,3,3.8,3c1.8,0,3.4-1.3,3.8-3h3.7c0.3,0,0.5-0.2,0.5-0.5v-2C20,15.3,19.1,14.3,18,14.1z M7,10c0-2.8,2.2-5,5-5s5,2.2,5,5v4H7V10z M13,20.8c-1.6,0.5-3.3-0.3-3.8-1.8h5.6C14.5,19.9,13.8,20.5,13,20.8z M19,18H5v-1.5C5,15.7,5.7,15,6.5,15h11c0.8,0,1.5,0.7,1.5,1.5V18z"/></svg>
												<span class=" pulse"></span>
											</a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
												<div class="drop-heading border-bottom">
													<div class="d-flex">
														<h6 class="mt-1 mb-0 fs-15 text-dark">Notifications</h6>
														<div class="ms-auto">
															<span class="xm-title badge bg-secondary text-white fw-normal fs-12 badge-pill"> <a href="javascript:void(0);" class="showall-text text-white">Clear</a> </span>
														</div>
													</div>
												</div>
												<div class="notifications-menu ps3 overflow-hidden">
													<a class="dropdown-item" href="chat.html">
														<div class="notification-each d-flex">
															<div class="me-3 notifyimg  bg-primary brround">
																<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.4541016,11H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,11,17.4541016,11z M19.5,2h-15C3.119812,2.0012817,2.0012817,3.119812,2,4.5v11c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h12.7930298l3.8534546,3.8535156C21.2402344,21.9473267,21.3673706,22,21.5,22c0.276123,0,0.5-0.223877,0.5-0.5v-17C21.9987183,3.119812,20.880188,2.0012817,19.5,2z M21,20.2929688l-3.1464844-3.1464844C17.7597656,17.0526733,17.6326294,17,17.5,17h-13c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5v-11C3.0009155,3.671936,3.671936,3.0009155,4.5,3h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V20.2929688z M17.4541016,8H6.5458984c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h10.9082031c0.276123,0,0.5-0.223877,0.5-0.5S17.7302246,8,17.4541016,8z"/></svg>
															</div>
															<div>
																<span class="notification-label mb-1">New Message Received</span>
																<span class="notification-subtext text-muted">2 hours ago</span>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="chat.html">
														<div class="notification-each d-flex">
															<div class="me-3 notifyimg  bg-secondary brround">
																<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M17.5078125,22.9736328h-12.5c-2.2081909-0.0023804-3.9976196-1.7918091-4-4v-8.5c0-0.276123-0.223877-0.5-0.5-0.5s-0.5,0.223877-0.5,0.5v8.5c0.0032349,2.7600708,2.2399292,4.9967651,5,5h12.5c0.276123,0,0.5-0.223877,0.5-0.5S17.7839355,22.9736328,17.5078125,22.9736328z M21.0078125,3.9736328h-14c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-10C24.0059814,5.3175049,22.6639404,3.9754639,21.0078125,3.9736328z M7.0078125,4.9736328h14c0.3700562,0.0004883,0.7122192,0.1081543,1.0094604,0.2835693l-6.9489136,6.9489136c-0.5864868,0.5839844-1.534668,0.5839844-2.1210938,0L5.9985962,5.256958C6.2957764,5.081665,6.6378784,4.9740601,7.0078125,4.9736328z M23.0078125,16.9736328c-0.0014038,1.1039429-0.8959961,1.9985352-2,2h-14c-1.1040649-0.0012817-1.9987183-0.8959351-2-2v-10c0.0004272-0.3701782,0.1082153-0.7124634,0.2836914-1.0097656l6.9487305,6.9492188c0.4683838,0.4692993,1.1045532,0.7325439,1.7675781,0.7314453c0.6630249,0.0010986,1.2991333-0.262146,1.7675781-0.7314453l6.9488525-6.9489136c0.175415,0.2972412,0.2830811,0.6394043,0.2835693,1.0094604V16.9736328z"/></svg>
															</div>
															<div>
																<span class="notification-label mb-1">New Mail Received</span>
																<span class="notification-subtext text-muted">1 week ago</span>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="cart.html">
														<div class="notification-each d-flex">
															<div class="me-3 notifyimg  bg-info brround">
																<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z"/></svg>
															</div>
															<div>
																<span class="notification-label mb-1">New Order Received</span>
																<span class="notification-subtext text-muted">1 day ago</span>
															</div>
														</div>
													</a>
													<a class="dropdown-item" href="blog-details.html">
														<div class="notification-each d-flex">
															<div class="me-3 notifyimg  bg-warning brround">
																<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M8,13c-0.276123,0-0.5,0.223877-0.5,0.5v2c0,0.0001831,0,0.0003662,0,0.0005493C7.5001831,15.7765503,7.723999,16.0001831,8,16c0.0001831,0,0.0003662,0,0.0006104,0C8.2765503,15.9998169,8.5001831,15.776001,8.5,15.5v-2C8.5,13.223877,8.276123,13,8,13z M12,10c-0.276123,0-0.5,0.223877-0.5,0.5v5c0,0.0001831,0,0.0003662,0,0.0005493C11.5001831,15.7765503,11.723999,16.0001831,12,16c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-5C12.5,10.223877,12.276123,10,12,10z M19.4152832,5.2902832c-3.7055054-4.09552-10.02948-4.4117432-14.125-0.7062988c-4.09552,3.7055054-4.4117432,10.02948-0.7062988,14.125l-2.4375,2.4375c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546C2,21.776062,2.223877,21.999939,2.5,22H12c2.4794312-0.000061,4.8704224-0.9212646,6.7089844-2.5847168C22.8045654,15.7097778,23.1207275,9.3858032,19.4152832,5.2902832z M12,21H3.7069702l1.928772-1.9287109c0.000061-0.000061,0.0001221-0.0001221,0.0001221-0.0001831c0.1951904-0.1952515,0.1951294-0.5117188-0.0001221-0.7068481C3.9483643,16.6768799,3.0002441,14.3883667,3,12.0020142c-0.0005493-4.9700317,4.0279541-8.9994507,8.9979858-9c4.9699707-0.0005493,8.9994507,4.0279541,9,8.9979858C20.9985352,16.9699707,16.9700317,20.9994507,12,21z M16,8c-0.276123,0-0.5,0.223877-0.5,0.5v7c0,0.0001831,0,0.0003662,0,0.0005493C15.5001831,15.7765503,15.723999,16.0001831,16,16c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-7C16.5,8.223877,16.276123,8,16,8z"/></svg>
															</div>
															<div>
																<span class="notification-label mb-1">New Comment Received</span>
																<span class="notification-subtext text-muted">1 day ago</span>
															</div>
														</div>
													</a>
												</div>
												<div class="dropdown-divider m-0"></div>
												<div class="text-center p-3">
													<a class="btn btn-primary">View All Notifications</a>
												</div>
											</div>
										</div>
										<!-- NOTIFICATIONS -->
										<div class="dropdown d-md-flex profile-1">
											<a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex animate">
												<span>
													<img src="{{ asset('') }}backend/assets/images/faces/6.jpg" alt="profile-user"
														class="avatar  profile-user brround cover-image">
												</span>
												<div class="text-center p-1 d-flex d-lg-none-max">
													<h6 class="mb-0" id="profile-heading">Elena<i class="user-angle ms-1 fa fa-angle-down "></i></h6>
												</div>
											</a>
											<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
												<a class="dropdown-item" href="profile.html">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M14.6650391,13.3672485C16.6381226,12.3842773,17.9974365,10.3535767,18,8c0-3.3137207-2.6862793-6-6-6S6,4.6862793,6,8c0,2.3545532,1.3595581,4.3865967,3.3334961,5.3690186c-3.6583862,1.0119019-6.5859375,4.0562134-7.2387695,8.0479736c-0.0002441,0.0013428-0.0004272,0.0026855-0.0006714,0.0040283c-0.0447388,0.272583,0.1399536,0.5297852,0.4125366,0.5745239c0.272522,0.0446777,0.5297241-0.1400146,0.5744629-0.4125366c0.624939-3.8344727,3.6308594-6.8403931,7.465332-7.465332c4.9257812-0.8027954,9.5697632,2.5395508,10.3725586,7.465332C20.9594727,21.8233643,21.1673584,21.9995117,21.4111328,22c0.0281372,0.0001831,0.0562134-0.0021362,0.0839844-0.0068359h0.0001831c0.2723389-0.0458984,0.4558716-0.303833,0.4099731-0.5761719C21.2677002,17.5184937,18.411377,14.3986206,14.6650391,13.3672485z M12,13c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,10.7614136,14.7614136,13,12,13z"/></svg>
													Profile
												</a>
												<a class="dropdown-item" href="mail-compose.html">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z"/></svg>
													My Wallet
													<span class="badge bg-secondary float-end">3</span>
												</a>
												<a class="dropdown-item" href="mail-inbox.html">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M12,8.5c-1.9329834,0-3.5,1.5670166-3.5,3.5s1.5670166,3.5,3.5,3.5c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5C15.5,10.0670166,13.9329834,8.5,12,8.5z M12,14.5c-1.3807373,0-2.5-1.1192627-2.5-2.5s1.1192627-2.5,2.5-2.5c1.380127,0.0014648,2.4985352,1.119873,2.5,2.5C14.5,13.3807373,13.3807373,14.5,12,14.5z M21.1582031,10.0253906l-1.8867188-0.6289062c-0.0222168-0.0074463-0.0439453-0.0164185-0.0648804-0.0268555c-0.2470093-0.12323-0.3474121-0.4234009-0.2241821-0.6704102l0.8896484-1.7783203c0.0960083-0.1925659,0.0582275-0.4248657-0.09375-0.5771484l-2.1210938-2.1220703c-0.1524658-0.1516113-0.3845215-0.1893311-0.5771484-0.09375l-1.7792969,0.8896484c-0.0209961,0.010437-0.0426636,0.0194092-0.0648804,0.0268555c-0.2618408,0.0874023-0.5449829-0.0540771-0.6323853-0.315918l-0.6289062-1.8867188C13.90625,2.6377563,13.71521,2.5001831,13.5,2.5h-3c-0.21521-0.0001221-0.40625,0.1376343-0.4741821,0.3417969L9.3969116,4.7285156C9.3518677,4.8665161,9.24823,4.9776001,9.1137085,5.0322266c-0.1335449,0.057373-0.2857666,0.052002-0.414978-0.0146484L6.9204102,4.1279297c-0.1925049-0.0960693-0.4249268-0.0583496-0.5771484,0.09375L4.2216797,6.34375c-0.1522217,0.1521606-0.1900024,0.3846436-0.09375,0.5771484l0.8896484,1.7783203c0.0107422,0.0214233,0.0198975,0.0435791,0.0274658,0.0662842c0.086792,0.2616577-0.0548706,0.5441284-0.3165283,0.6309814l-1.8867188,0.6289062C2.6377563,10.09375,2.5001831,10.28479,2.5,10.5v3c0.0001831,0.21521,0.1377563,0.40625,0.3417969,0.4746094l1.8862305,0.6289062c0.0224609,0.0074463,0.0444336,0.0165405,0.0656128,0.0270996c0.2468872,0.12323,0.347168,0.4232788,0.223938,0.670166l-0.8896484,1.7783203c-0.0962524,0.1925049-0.0584717,0.4249878,0.09375,0.5771484l2.1216431,2.1220703c0.1523438,0.1519165,0.3845825,0.1896362,0.5771484,0.09375l1.7783203-0.8896484c0.1289673-0.067627,0.2816162-0.072998,0.4150391-0.0146484c0.1344604,0.0546265,0.2380981,0.1657104,0.2831421,0.3037109l0.6289062,1.8867188C10.093811,21.3623657,10.2848511,21.500061,10.5,21.5h3c0.21521-0.0001831,0.40625-0.1378174,0.4746094-0.3418579l0.6289062-1.8867188c0.0074463-0.0222168,0.0164185-0.0438843,0.0268555-0.0648804c0.12323-0.2470093,0.4234009-0.3474121,0.6704102-0.2241821l1.7792969,0.8896484c0.192688,0.0950928,0.4244995,0.0574341,0.5771484-0.09375l2.1210938-2.1220703c0.1519775-0.1522217,0.1897583-0.3845825,0.09375-0.5771484l-0.8896484-1.7783203c-0.0651855-0.1295776-0.0705566-0.2811279-0.0146484-0.414978c0.0546265-0.1342773,0.1657715-0.2375488,0.3037109-0.2822266l1.8867188-0.6289062C21.3622437,13.90625,21.4998169,13.71521,21.5,13.5v-3C21.4998169,10.28479,21.3622437,10.09375,21.1582031,10.0253906z M20.5,13.1396484l-1.5449219,0.5146484c-0.0671997,0.0223999-0.1326904,0.0495605-0.1960449,0.0811768c-0.7410889,0.3704224-1.0415649,1.2714844-0.6711426,2.0125732l0.7285156,1.4560547l-1.6113281,1.6123047l-1.4570312-0.7285156c-0.0639648-0.0320435-0.130127-0.0594482-0.197998-0.0820312c-0.7856445-0.2613525-1.6343994,0.1636353-1.895752,0.9492188L13.1396484,20.5h-2.2792969l-0.5151978-1.5449219c-0.0223389-0.0669556-0.0493774-0.1322021-0.0809326-0.1953125c-0.3702393-0.741394-1.2714233-1.0421753-2.0128174-0.671875l-1.4559937,0.7285156l-1.6118164-1.6123047l0.7285156-1.4560547c0.0314941-0.0631104,0.0585327-0.128418,0.0808716-0.1953125c0.2622681-0.7861938-0.1623535-1.6361084-0.9485474-1.8984375L3.5,13.1396484v-2.2792969l1.5449219-0.5145874c0.0666504-0.0222778,0.1317139-0.0492554,0.1945801-0.0806274c0.7416382-0.3701782,1.0427856-1.2714844,0.6726074-2.0131226L5.1835938,6.7958984l1.6118774-1.6123047l1.4559937,0.7285156C8.3145752,5.9436646,8.3798218,5.9707031,8.4467773,5.993042c0.7860718,0.2623901,1.6359863-0.1620483,1.8984375-0.9481201L10.8603516,3.5h2.2792969l0.5147095,1.5449219c0.022583,0.0678711,0.0499878,0.1340332,0.0820312,0.197998c0.3707275,0.7403564,1.2713623,1.039917,2.0117188,0.6691895l1.4569702-0.7285156l1.6113281,1.6123657l-0.7285156,1.4560547c-0.0320435,0.0639038-0.0594482,0.1300659-0.0820312,0.197937c-0.2613525,0.7856445,0.1636353,1.6343384,0.9492188,1.895752L20.5,10.8603516V13.1396484z"/></svg>
													Settings
												</a>
												<a class="dropdown-item" href="faq.html">
													<svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M2.5,9c0.0001831,0,0.0003662,0,0.0006104,0C2.7765503,8.9998169,3.0001831,8.776001,3,8.5V3h5.5C8.776123,3,9,2.776123,9,2.5S8.776123,2,8.5,2h-6C2.4998169,2,2.4996338,2,2.4993896,2C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v6c0,0.0001831,0,0.0003662,0,0.0005493C2.0001831,8.7765503,2.223999,9.0001831,2.5,9z M8.5,21H3v-5.5C3,15.223877,2.776123,15,2.5,15S2,15.223877,2,15.5v6c0,0.0001831,0,0.0003662,0,0.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h6C8.776123,22,9,21.776123,9,21.5S8.776123,21,8.5,21z M21.5,2h-6C15.223877,2,15,2.223877,15,2.5S15.223877,3,15.5,3H21v5.5c0,0.0001831,0,0.0003662,0,0.0005493C21.0001831,8.7765503,21.223999,9.0001831,21.5,9c0.0001831,0,0.0003662,0,0.0006104,0C21.7765503,8.9998169,22.0001831,8.776001,22,8.5v-6c0-0.0001831,0-0.0003662,0-0.0006104C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M17,16v-4c-0.0014038-1.1040039-0.8959961-1.9985962-2-2V9c0-1.6568604-1.3431396-3-3-3S9,7.3431396,9,9v1c-1.1040039,0.0014038-1.9985962,0.8959961-2,2v4c0.0014038,1.1040039,0.8959961,1.9985962,2,2h6C16.1040039,17.9985962,16.9985962,17.1040039,17,16z M10,9c0-1.1045532,0.8954468-2,2-2s2,0.8954468,2,2v1h-4V9z M8,16v-4c0.0003662-0.552124,0.447876-0.9996338,1-1h0.5h5h0.0006104H15c0.552124,0.0003662,0.9996338,0.447876,1,1v4c-0.0003662,0.552124-0.447876,0.9996338-1,1H9C8.447876,16.9996338,8.0003662,16.552124,8,16z M21.5,15c-0.276123,0-0.5,0.223877-0.5,0.5V21h-5.5c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h6c0.0001831,0,0.0003662,0,0.0006104,0C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-6C22,15.223877,21.776123,15,21.5,15z"/></svg>
													Lock Screen
												</a>
												<form method="POST" action="{{ route('logout.admin') }}">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item d-flex align-items-center" style="background:none;border:none;padding:0;width:100%;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-inner-icn" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.6523438,16.140625c-0.09375,0.09375-0.1464233,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l4.4941406-4.4941406c0.000061-0.000061,0.0001221-0.000061,0.0001831-0.0001221c0.1951294-0.1952515,0.1950684-0.5117188-0.0001831-0.7068481L11.359314,7.1524048c-0.1937256-0.1871338-0.5009155-0.1871338-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L14.2930298,11.5H2.5C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h11.7930298L10.6523438,16.140625z M16.4199829,3.0454102C11.4741821,0.5905762,5.4748535,2.6099243,3.0200195,7.5556641C2.8970337,7.8029175,2.9978027,8.1030884,3.2450562,8.2260742C3.4923706,8.3490601,3.7925415,8.248291,3.9155273,8.0010376c0.8737793-1.7612305,2.300354-3.1878052,4.0615845-4.0615845C12.428833,1.730835,17.828064,3.5492554,20.0366821,8.0010376c2.2085571,4.4517212,0.3901367,9.8509521-4.0615845,12.0595703c-4.4517212,2.2085571-9.8510132,0.3901367-12.0595703-4.0615845c-0.1229858-0.2473145-0.4231567-0.3480835-0.6704102-0.2250977c-0.2473145,0.1229858-0.3480835,0.4230957-0.2250977,0.6704102c1.6773682,3.4109497,5.1530762,5.5667114,8.9541016,5.5537109c3.7976685,0.0003662,7.2676392-2.1509399,8.9560547-5.5526733C23.3850098,11.4996338,21.3657227,5.5002441,16.4199829,3.0454102z"/></svg>
                                                        <span class="ms-2">Log out</span>
                                                    </button>
                                                </form>
											</div>
										</div>
										<!-- Profile -->
                                    </div>
                                </div>
                            </div>
                            <div class="demo-icon nav-link icon fe-spin">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->