<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <meta charset="utf-8">
  <meta name="author" content="Softnio">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
  <link rel="shortcut icon" href="../../images/favicon.png">
  <title>Login</title>
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
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
              <div class="nk-block nk-block-middle nk-auth-body">
                <!-- <div class="brand-logo pb-5"><a href="../../index.html" class="logo-link"><img class="logo-light logo-img logo-img-lg" src="../../images/logo.png" srcset="/demo3/images/logo2x.png 2x" alt="logo">Inslogin</a></div> -->
                <div class="nk-block-head">
                  <div class="nk-block-head-content">
                    <div id="showsuccesmessage" style="color:rgb(28, 195, 28);text-align: center;font-size: 20px;"></div>
                    <h5 class="nk-block-title">Sign-In</h5>
                    <div class="nk-block-des">
                      <p>Insurance Portal</p>
                    </div>
                  </div>
                </div>
                <form id="loginform" method="post">
                  @csrf()
                  <div class="form-group">
                    <div class="form-label-group"><label class="form-label" for="default-01">Email address</label></div>
                    <div class="form-control-wrap"><input type="text" class="form-control form-control-lg" placeholder="Enter your email address" name="email" id="email"></div>
                    <span id="email_error" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                    <div class="form-label-group"><label class="form-label" for="password">Passcode</label></div>
                    <div class="form-control-wrap"><a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password"><em class="passcode-icon icon-show icon ni ni-eye"></em><em class="passcode-icon icon-hide icon ni ni-eye-off"></em></a><input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your passcode"></div>
                    <span id="password_error" class="!text-danger"></span>
                  </div>
                  <div class="form-group"><button class="btn btn-lg btn-primary btn-block" name="submit" id="submit">Sign in</button></div>
                </form>
                <div class="form-note-s2 pt-4"> Dont't Have an Account ? <a href="{{ url('register')}}">Register Here</a></div>
                
              </div>
              <div class="nk-block nk-auth-footer">
                
                <div class="mt-3">
                  <p>&copy; 2023 Axepert Exhibits Pvt.Ltd. All Rights Reserved.</p>
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
 

  <script>
      $(document).on('submit', '#loginform', function(ev) {
          $('.error').html('');

          ev.preventDefault(); // Prevent browers default submit.
          var formData = new FormData(this);
          var error = false;
          if (error == false) {
              $.ajax({
                  url: "{{ url('/loginform') }} ",
                  type: 'post',
                  data: formData,
                  cache: false,
                  contentType: false,
                  processData: false,
                  beforeSend: function() {
                      $(".submitbtn").css('display', 'none');
                  },
                  success: function(result) {
                      if (result.code == 200) {
                          $('#showsuccesmessage').html(result.message);
                          window.location.href = "{{ url('dashboard/') }}";
                      } else if (result.code == 400) {
                          $('#showsuccesmessage').html(result.message);
                          $.each(result.message, function(prefix, val) {
                              $('#' + prefix + '_error').text(val[0]);
                          });
                      } else {
                          $("#err_resp").text(result.message)
                      }
                  },
                  error: function(xhr) {
                      $(".submitbtn").css('display', 'block');
                  },
                  complete: function() {
                      $(".submitbtn").css('display', 'block');
                  },
              })
          }
      })
  </script>
</body>
</html>