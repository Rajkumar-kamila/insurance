<!DOCTYPE html>
<html lang="zxx" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Softnio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
        <link rel="shortcut icon" href="/demo3/images/favicon.png">
        <title>Registration</title>
        <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css')}}">
        <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css')}}">
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
    <body class="nk-body npc-default pg-auth">
        <div class="nk-app-root">
            <div class="nk-main ">
                <div class="nk-wrap nk-wrap-nosidebar">
                    <div class="nk-content ">
                        <div class="nk-split nk-split-page nk-split-md">
                            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                                <div class="nk-block nk-block-middle nk-auth-body">
                                    <div class="brand-logo pb-5">
                                        <!-- <a href="/demo3/index.html" class="logo-link">
                                            <img class="logo-light logo-img logo-img-lg" src="/demo3/images/logo.png" srcset="/demo3/images/logo2x.png 2x" alt="logo">
                                            <img class="logo-dark logo-img logo-img-lg" src="/demo3/images/logo-dark.png" srcset="/demo3/images/logo-dark2x.png 2x" alt="logo-dark">
                                        </a> -->
                                    </div>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">Register</h5>
                                            <div class="nk-block-des">
                                                <p>Create New Insurance Account</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form action="/demo3/pages/auths/auth-success-v3.html">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control form-control-lg" id="name" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control form-control-lg" id="email" placeholder="Enter your email address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="password">Passcode</label>
                                            <div class="form-control-wrap">
                                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="form-note-s2 pt-4">
                                        Already have an account ? 
                                        <a href="{{url('/')}}">
                                            <strong>Sign in instead</strong>
                                        </a>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="nk-split-content nk-split-stretch bg-abstract"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('assets/js/bundle.js')}}"></script>
        <script src="{{ asset('assets/js/scripts.js')}}"></script>
        <script src="{{ asset('assets/js/demo-settings.js')}}"></script>
    </body>
</html>
