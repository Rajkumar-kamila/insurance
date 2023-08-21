@extends('includes.main')
@section('main-container')

<div class="page-body">

    <div class="grid grid-cols-12 gap-card-gap">
        <div class="col-span-12 flex items-center justify-between gap-3 bg-white p-3 rounded-5 2sm:flex-col 2sm:items-end dark:bg-sidebar-dark">
            <div class="flex items-center gap-3">
                <label class="text-xs min-w-max text-content3" for="sortby">Sort By </label>
                <select class="form-select block w-full px-3 text-xs font-normal text-content3 bg-white bg-clip-padding bg-no-repeat border border-border-light rounded-5 transition ease-in-out m-0 min-w-[150px] py-[9px] dark:border-border-dark dark:bg-sidebar-dark2" id="sortby" aria-label="Default select example">
                    <option selected="">All</option>
                    <option value="1">Popular</option>
                    <option value="2">Price Low </option>
                    <option value="3">Price Hight </option>
                </select>
            </div>
            <div class="flex items-center gap-3">
                <div class="product-filter">
                    <svg class="w-6 h-6 stroke-content3 lg:block hidden shop-toggle">
                        <use href="https://admin.pixelstrap.com/govo/assets/svg/sprite.svg#Filter"> </use>
                    </svg>
                </div>
                <div class="product-setting">
                    <!-- <button class="text-white btn btn-active btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out" for="modal-1">Add Admin</button>  -->
                    <label class="button-label btn-primary" for="modal-1">Add Company</label>
                </div>
                <!-- <div class="product-setting"> <a class="list-layout-view" href="javascript:void(0)"><i class="w-6 h-6 stroke-content3" data-feather="list"></i></a></div> -->
            </div>
        </div>
        <div class="col-span-12 4xl:col-span-12 lg:col-span-12 lg:-order-1">
            <div class="card">
                <div class="card-header transaction-history">
                    <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                        <h3 class="text-lg font-bold text-title leading-none">Company</h3>
                        <div class="custom-select select-style-1">
                            <select class="capitalize">
                                <option>Yearly</option>
                                <option>Monthly</option>
                                <option>Weekly</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="overflow-auto custom-scroll">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date And Time</th>
                                    <th>Phone no.</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <!-- <th>payment</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($fetchdata))
                                    @foreach($fetchdata as $value)
                                    <tr class="group">
                                        <td class="min-w-[11.125rem]">
                                            <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="assets/images/product/1.jpg" alt="Samsung TV"><a href="product.html">
                                                    <h4 class="text-xs font-semibold text-title group-hover:text-primary">{{ $value->name}}</h4>
                                                </a></div>
                                        </td>
                                        <td class="min-w-[7.5rem]">
                                            <div>
                                                <h4 class="text-xs font-semibold text-title">{{ $value->created_at}}</h4><span class="block mt-1 font-semibold text-2xs text-content">AC Create Date</span>
                                            </div>
                                        </td>
                                        <td class="min-w-[6.25rem]">
                                            <h4 class="text-xs font-semibold ">{{ $value->contact}}</h4>
                                        </td>
                                        <td class="min-w-[6.5rem]">
                                            <h4 class="text-xs font-semibold text-title">{{ $value->email}}</h4>
                                        </td>
                                        <td class="min-w-[4.6875rem]">
                                            <div class="progress-bar progress-sm max-w-[3.375rem]">
                                                <div class="bg-success" style="width:50%"> </div>
                                            </div>
                                        </td>
                                        
                                        <td class="min-w-[6.25rem]">
                                            <div class="d-flex" style="display: flex;">
                                                <button class="btn btn-primary btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-trash stroke-white" aria-hidden="true"></i> </button>&nbsp;&nbsp;
                                                <button class="btn btn-danger btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <p>No Data Exist.</p>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal-main dark:bg-sidebar-dark">
    <input class="peer" id="modal-1" name="modal-1" type="checkbox">
    <label class="modal-overlay peer-checked:block" for="modal-1"></label>
    <div class="modal peer-checked:opacity-100 peer-checked:visible w-[25.75rem] dark:bg-sidebar-dark2" style="width: 30%;">
        <div class="modal-header"> 
        <h3>Add Company</h3>
            <label for="modal-1"> <i class="w-4 h-4 stroke-dark" data-feather="x"></i></label>
        </div>
        <div class="modal-body">
        <form class="theme-form flex flex-col gap-3" id="addcompany" method="post">
            <div id="showsuccesmessage" style="color:rgb(28, 195, 28);text-align: center;font-size: 20px;"></div>
            @csrf()
            <div class="flex flex-col gap-3 form-group">
               
                <!-- <p>Hello, enter your email id and password for log in to your account</p> -->
                <div class="flex flex-col gap-1">
                    <label for="name" class="text-xs font-medium text-primary">Name</label>
                    <input class="dark:bg-sidebar-dark" id="name" type="name" name="name" placeholder="Enter Name..">
                    <span id="name_error" class="!text-danger"></span>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="email" class="text-xs font-medium text-primary">Email</label>
                    <input class="dark:bg-sidebar-dark" type="email" name="email" id="email" placeholder="Enter Email id..">
                    <span id="email_error" class="!text-danger"></span>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="phone" class="text-xs font-medium text-primary">Phone no.</label>
                    <input class="dark:bg-sidebar-dark" type="number" name="phone" id="phone" placeholder="Enter Phone Number..">
                    <span id="phone_error" class="!text-danger"></span>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="password" class="text-xs font-medium text-primary">Password</label>
                    <input class="dark:bg-sidebar-dark" type="password" name="password" id="password" placeholder="Password..">
                    <span id="password_error" class="!text-danger"></span>
                </div>
                <div class="flex flex-col gap-1">
                    <label for="c_password" class="text-xs font-medium text-primary">Confirm Password</label>
                    <input class="dark:bg-sidebar-dark" type="password" name="c_password" id="c_password" placeholder="Confirm Password..">
                    <span id="c_password_error" class="!text-danger"></span>
                </div>
            </div>
            <!-- <div class="flex justify-between items-center gap-2"> -->
            
                <div class="flex flex-col gap-2">
                    <h4>Access to</h4>
                    <div class="overflow-auto custom-scroll">  
                        <table class="table equal-space active-table">
                            <tbody>
                                <tr class="hover:bg-gray-light dark:hover:bg-sidebar-dark2">
                                    <td class="min-w-[20px]">
                                    <div class="flex items-center gap-2">
                                        <label class="checkbox w-[15px] h-[15px]">
                                        <input class="peer" type="checkbox" checked=""><span class="checkbox-indicator bg-white peer-checked:bg-primary border-content peer-checked:border-primary"><i data-feather="check"></i></span>
                                        </label>
                                    </div>
                                    </td>
                                    <td class="min-w-[100px]">
                                    <h5 class="text-xs text-left font-semibold text-title">Add</h5>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-light dark:hover:bg-sidebar-dark2">
                                    <td class="min-w-[20px]">
                                    <div class="flex items-center gap-2">
                                        <label class="checkbox w-[15px] h-[15px]">
                                        <input class="peer" type="checkbox" checked=""><span class="checkbox-indicator bg-white peer-checked:bg-primary border-content peer-checked:border-primary"><i data-feather="check"></i></span>
                                        </label>
                                    </div>
                                    </td>
                                    <td class="min-w-[100px]">
                                    <h5 class="text-xs text-left font-semibold text-title" >Edit</h5>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-light dark:hover:bg-sidebar-dark2">
                                    <td class="min-w-[20px]">
                                    <div class="flex items-center gap-2">
                                        <label class="checkbox w-[15px] h-[15px]">
                                        <input class="peer" type="checkbox"><span class="checkbox-indicator bg-white peer-checked:bg-primary border-content peer-checked:border-primary"><i data-feather="check"></i></span>
                                        </label>
                                    </div>
                                    </td>
                                    <td class="min-w-[100px]">
                                    <h5 class="text-xs text-left font-semibold text-title">Delete</h5>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="flex items-center gap-2"> 
                        <label class="cursor-pointer checkbox checkbox-md">
                            <input type="checkbox" class="peer"  id="remember" checked=""/>
                            <div class="checkbox-indicator peer-checked:!bg-primary !border-primary">
                                <i data-feather="check"></i>
                            </div>
                        </label>
                        <label for="remember">Add</label>
                    </div>
                    <div class="flex items-center gap-2"> 
                        <label class="cursor-pointer checkbox checkbox-md">
                            <input type="checkbox" class="peer" id="save"/>
                            <div class="checkbox-indicator peer-checked:!bg-primary !border-primary">
                                <i data-feather="check"></i>
                            </div>
                        </label>
                        <label id="save">Edit</label>
                    </div> 
                    <div class="flex items-center gap-2"> 
                        <label class="cursor-pointer checkbox checkbox-md">
                            <input type="checkbox" class="peer" id="save"/>
                            <div class="checkbox-indicator peer-checked:!bg-primary !border-primary">
                                <i data-feather="check"></i>
                            </div>
                        </label>
                        <label id="save">Delete</label>
                    </div>  -->
                    
                </div>
            <!-- </div> -->

            <div class="my-2">
                <!-- <a class="btn btn-primary !text-white py-2 block" type="submit" name="submit" id="submit">Submit</a> -->
                <input type="submit" name="submit" id="submit" class="btn btn-primary !text-black hover:drop-shadow-lg my-2" value="Submit">
            </div>
            
        </form>
        </div>
    </div>
</div>         
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).on('submit', '#addcompany', function(ev) {
        $('.error').html('');

        ev.preventDefault(); // Prevent browers default submit.
        var formData = new FormData(this);
        var error = false;

        if (error == false) {
            $.ajax({
                url: "{{ url('addcompany') }} ",
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
                            const modalCheckbox = document.getElementById('modal-1');
                            modalCheckbox.checked = false; 
                        }, 2000)
                        

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

@endsection