<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Govo admin is super flexible, powerful, clean &amp; modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Govo admin template, dashboard template, tailwind admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Govo - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- Custom Select css-->
    <link rel="stylesheet" href="../../assets/css/vendors/custom-select.css">
    <!-- fontAwesome CSS-->
    <link rel="stylesheet" href="../../assets/css/vendors/fontawesome/all.css">
    <!-- App css-->
    <link rel="stylesheet" href="../../assets/css/style.css">
  </head>
  <body class="unique-skin" dir="ltr">
    <main class="page-wrapper">
      <!-- Page Body Start -->
      <div class="page-body h-[100vh] !mt-0 bg-cover bg-no-repeat  bg-[url('../../assets/images/dotsbg.jpg')]">
        <div class="!flex items-center justify-center h-full p-[15px] common-animate-main ratio_asos">
          <div class=" grid grid-cols-12 gap-0 mx-auto w-full max-w-[70%] xl:max-w-[50%] md:max-w-[70%] sm:max-w-[80%] 2sm:max-w-[100%] xl:flex xl:justify-center lg:grid items-center">
            <div class="relative col-span-5 bg-white 2xl:col-span-6 z-1 xl:col-span-12 rounded-xl max-w-[470px] min-w-[300px] sm:min-w-[22.75rem] 2sm:min-w-[18.75rem] max-h-max">
                <form class="theme-form flex flex-col gap-3 !m-0 p-8 2sm:p-4" id="registerform" method="post">
                  <div id="showsuccesmessage" style="color:rgb(28, 195, 28);text-align: center;font-size: 20px;"></div>
                @csrf()
                <h3>Create an Account</h3>
                <p>Enter your detail for registration</p>
                <div>
                  <input type="text" placeholder="Enter your name" name="name" id="name" required>
                  <span id="name_error" class="!text-danger"></span>
                </div>
                <div>
                  <input type="email" placeholder="Enter your id" name="email" id="email" required>
                  <span id="email_error" class="!text-danger"></span>
                </div>
                <div class="relative">
                  <input type="password" id="password" name="password" required="" id="password" placeholder="Enter your Password">
                  <div class="password-icon"><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2  showHidePassword" data-feather="eye"> </i><i class="cursor-pointer w-4 h-4 stroke-title right-[25px] rtl:right-unset top-1/2 rtl:left-[25px] absolute -translate-y-1/2  showHidePassword" data-feather="eye-off"> </i></div>
                  <span id="password_error" class="!text-danger"></span>
                </div>
                <!-- <div class="flex items-center gap-2">
                  <label class="checkbox cursor-pointer w-4 h-4"> 
                    <input class="peer" type="checkbox"><span class="checkbox-indicator peer-checked:!bg-primary !border peer-checked:!border-primary"> <i data-feather="check"></i></span>
                  </label><span class="!text-title">Accept terms & condition</span>
                </div> -->
                <!-- <a  type="submit"></a> -->
                <input type="submit" name="submit" id="submit" class="btn btn-primary !text-black hover:drop-shadow-lg my-2" value="Sign Up">
                <div class="text-center"><span>Already have an account?   <a href="{{'/'}}">Sign in</a></span></div>
                <!-- <div>
                  <h4>Or Sign in with </h4>
                </div>
                <div class="social sm:flex-col"><a class="flex items-center justify-center gap-1 btn !text-linkedin" href="https://www.linkedin.com/login"><i class="fa-brands fa-linkedin-in"></i>  Linkedin</a><a class="flex items-center justify-center gap-1 btn !text-twitter" href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"></i>  Twitter</a><a class="flex items-center justify-center gap-1 btn instagram !text-instagram" href="https://www.instagram.com/accounts/login/">
                    <svg width="0" height="0">
                      <radialgradient id="rg" r="150%" cx="30%" cy="107%">
                        <stop stop-color="#fdf497" offset="0"></stop>
                        <stop stop-color="#fdf497" offset="0.05"></stop>
                        <stop stop-color="#fd5949" offset="0.45"></stop>
                        <stop stop-color="#d6249f" offset="0.6"></stop>
                        <stop stop-color="#285AEB" offset="0.9"></stop>
                      </radialgradient>
                    </svg><i class="fa-brands fa-instagram"></i><span>  Instagram</span></a></div> -->
              </form>
            </div>
            <div class="col-span-7 rounded-lg 4xl:col-span-6 z-1 xl:col-span-12 xl:hidden">
              <div class="relative flex items-center justify-center object-contain"><img class="w-[100%]" src="https://admin.pixelstrap.com/govo/assets/images/svg/register1.svg" alt="register vector"><img class="common-animate animate-ping top-[6%] 4xl:top-[-3%] 2xl:top-[-6%] 4xl:right-[37%] absolute right-[41%] animate__animated animate__infinite animate__shakeY animate__slower" src="https://admin.pixelstrap.com/govo/assets/images/svg/register.svg" alt="register vector"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Body End-->
    </main>
    <!-- Feather Icon Js -->
    <script src="../../assets/js/feather.min.js"></script>
    <script src="../../assets/js/feather-custom.js"></script>
    <!-- Select Js -->
    <script src="../../assets/js/custom-select.js"></script>
    <!-- fontAwesome js-->
    <script src="../../assets/js/fontawesome/all.min.js"></script>
    <!-- password hide js -->
    <script src="../../assets/js/password-hide-show-login.js"></script>
    <!-- Custom script   -->
    <script src="../../assets/js/script.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).on('submit', '#registerform', function(ev) {
            $('.error').html('');

            ev.preventDefault(); // Prevent browers default submit.
            var formData = new FormData(this);
            var error = false;

            if (error == false) {
                $.ajax({
                    url: "{{ url('registerform') }} ",
                    type: 'post',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function(result) {
                        if (result.code == 200) {
                            // showsuccess(result.message);
                            $('#showsuccesmessage').html(result.message);
                            setTimeout(function () {
                                window.location.href = '/';
                            }, 1500)
                        } else if (result.code == 400) {
                            $('#showsuccesmessage').html(result.message);
                            $.each(result.message, function (prefix, val) {
                                $("#" + prefix + "_error").html(val[0]);
                                showwarning(val[0]);
                            });
                        } else {
                            showerror(result.message);
                        }
                    },
                    error: function(xhr) {
                        
                        $(".hstack").css('display', 'flex');
                    },
                    complete: function() {
                        $(".hstack").css('display', 'flex');
                        $(".hstackloader").text('');
                    },
                })
            }
        })
    </script>
  </body>

</html>