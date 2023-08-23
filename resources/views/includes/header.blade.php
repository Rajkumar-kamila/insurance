<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-apps-sidebar is-theme">
            <!-- <div class="nk-apps-brand">
                <a href="index.html" class="logo-link">
                    <img class="logo-light logo-img" src="images/logo-small.png"
                        srcset="/demo3/images/logo-small2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img" src="images/logo-dark-small.png"
                        srcset="/demo3/images/logo-dark-small2x.png 2x" alt="logo-dark">
                </a>
            </div> -->
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body">
                    <div class="nk-sidebar-content" data-simplebar>
                        <div class="nk-sidebar-menu">
                            <ul class="nk-menu apps-menu">
                                <li class="nk-menu-item">
                                    <a href="cms/index.html" class="nk-menu-link" title="CMS Panel">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-template"></em>
                                        </span>
                                    </a>
                                </li>
                                <li class="nk-menu-hr"></li>
                                <li class="nk-menu-item">
                                    <a href="index.html" class="nk-menu-link" title="Analytics Dashboard">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-dashboard"></em>
                                        </span>
                                    </a>
                                </li>
                                
                                <li class="nk-menu-hr"></li>
                                <li class="nk-menu-item">
                                    <a href="apps/mailbox.html" class="nk-menu-link" title="Mailbox">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-inbox"></em>
                                        </span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="apps/messages.html" class="nk-menu-link" title="Messages">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-chat"></em>
                                        </span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="apps/file-manager.html" class="nk-menu-link" title="File Manager">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-folder"></em>
                                        </span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="apps/chats.html" class="nk-menu-link" title="Chats">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-chat-circle"></em>
                                        </span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="apps/calendar.html" class="nk-menu-link" title="Calendar">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-calendar"></em>
                                        </span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="apps/kanban.html" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-template"></em>
                                        </span>
                                    </a>
                                </li>
                                <li class="nk-menu-hr"></li>
                                <li class="nk-menu-item">
                                    <a href="components.html" class="nk-menu-link" title="Go to Components">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-layers"></em>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-sidebar-footer">
                            <ul class="nk-menu nk-menu-md">
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link" title="Settings">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-setting"></em>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown">
                        <a href="#" class="toggle" data-target="profileDD">
                            <div class="user-avatar sm">
                              <em class="icon ni ni-user-alt"></em>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md m-1 nk-sidebar-profile-dropdown"
                            data-content="profileDD">
                            <div class="dropdown-inner user-card-wrap d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar sm">
                                      <em class="icon ni ni-user-alt"></em>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ getuserdetail('name')}}</span>
                                        <span class="sub-text text-soft">{{ getuserdetail('email')}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="user-profile-regular.html">
                                            <em class="icon ni ni-user-alt"></em>
                                            <span>View Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile-setting.html">
                                            <em class="icon ni ni-setting-alt"></em>
                                            <span>Account Setting</span>
                                        </a>
                                    </li>
                                    <!-- <li>
                                        <a href="user-profile-activity.html">
                                            <em class="icon ni ni-activity-alt"></em>
                                            <span>Login Activity</span>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="{{url('logout')}}">
                                            <em class="icon ni ni-signout"></em>
                                            <span>Sign out</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-main">
            <div class="nk-wrap">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                                    <em class="icon ni ni-menu"></em>
                                </a>
                            </div>
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-logo">
                                    <em class="icon ni ni-dashlite bg-purple-dim"></em>
                                </div>
                                <div class="nk-header-app-info">
                                    <!-- <span class="sub-text">DashLite</span> -->
                                    <span class="lead-text">Dashboard</span>
                                </div>
                            </div>
                            
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info">
                                                <em class="icon ni ni-bell"></em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash shared
                                                                <span>Dashlite-v2</span> with you.
                                                            </div>
                                                            <div class="nk-notification-time">Just now</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-info-dim ni ni-edit"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Iliash
                                                                <span>invited</span> you to edit
                                                                <span>DashLite</span> folder
                                                            </div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have shared
                                                                <span>project v2</span> with Parvez.
                                                            </div>
                                                            <div class="nk-notification-time">7 days ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em
                                                                class="icon icon-circle bg-success-dim ni ni-spark"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your
                                                                <span>Subscription</span> renew successfully.
                                                            </div>
                                                            <div class="nk-notification-time">2 month ago</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown list-apps-dropdown d-lg-none">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon"
                                            data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-na">
                                                <em class="icon ni ni-menu-circled"></em>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                            <div class="dropdown-body">
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="index.html">
                                                            <span class="list-apps-media">
                                                                <em
                                                                    class="icon ni ni-dashlite bg-primary text-white"></em>
                                                            </span>
                                                            <span class="list-apps-title">Dashboard</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="apps/chats.html">
                                                            <span class="list-apps-media">
                                                                <em class="icon ni ni-chat-circle bg-info-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">Chats</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="apps/mailbox.html">
                                                            <span class="list-apps-media">
                                                                <em class="icon ni ni-inbox bg-purple-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">Mailbox</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="apps/messages.html">
                                                            <span class="list-apps-media">
                                                                <em class="icon ni ni-chat bg-success-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="apps/file-manager.html">
                                                            <span class="list-apps-media">
                                                                <em class="icon ni ni-folder bg-purple-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">File Manager</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="components.html">
                                                            <span class="list-apps-media">
                                                                <em class="icon ni ni-layers bg-secondary-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">Components</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <ul class="list-apps">
                                                    <li>
                                                        <a href="https://dashlite.net/demo2/ecommerce/index.html">
                                                            <span class="list-apps-media">
                                                                <em class="icon ni ni-cart bg-danger-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">Ecommerce Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://dashlite.net/demo4/subscription/index.html">
                                                            <span class="list-apps-media">
                                                                <em
                                                                    class="icon ni ni-calendar-booking bg-primary-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">Subscription Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://dashlite.net/demo5/crypto/index.html">
                                                            <span class="list-apps-media">
                                                                <em
                                                                    class="icon ni ni-bitcoin-cash bg-warning-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">Crypto Wallet Panel</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://dashlite.net/demo6/invest/index.html">
                                                            <span class="list-apps-media">
                                                                <em class="icon ni ni-invest bg-blue-dim"></em>
                                                            </span>
                                                            <span class="list-apps-title">HYIP Invest Panel</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar sm">
                                                      <em class="icon ni ni-user-alt"></em>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ getuserdetail('name')}}</span>
                                                        <span class="sub-text">{{ getuserdetail('email')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="user-profile-regular.html">
                                                            <em class="icon ni ni-user-alt"></em>
                                                            <span>View Profile</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="user-profile-setting.html">
                                                            <em class="icon ni ni-setting-alt"></em>
                                                            <span>Account Setting</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="user-profile-activity.html">
                                                            <em class="icon ni ni-activity-alt"></em>
                                                            <span>Login Activity</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> -->
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{url('logout')}}">
                                                            <em class="icon ni ni-signout"></em>
                                                            <span>Sign out</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                