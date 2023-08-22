@extends('includes.main')
@section('main-container')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-lg mx-auto">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Company</h4>
                                <!-- <p>The following table can be use for
                                    <strong class="text-primary">invoice, payment history</strong> related transaction.
                                </p> -->


                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                                        <em class="icon ni ni-more-v"></em>
                                    </a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown">
                                                        <em class="d-none d-sm-inline icon ni ni-calender-date"></em>
                                                        <span>
                                                            <span class="d-none d-md-inline">Last</span> 30 Days</span>
                                                        <em class="dd-indc icon ni ni-chevron-right"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#">
                                                                    <span>Last 30 Days</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Last 6 Months</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <span>Last 1 Years</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalForm">Add Company</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nk-block">
                            <div class="card card-bordered card-preview">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="bg-theme">
                                            <th scope="col" class="bg-theme">Id No.</th>
                                            <th scope="col" class="bg-theme">Name</th>
                                            <th scope="col" class="bg-theme">Phone no</th>
                                            <th scope="col" class="bg-theme">Email</th>
                                            <th scope="col" class="bg-theme">Status</th>
                                            <th scope="col" class="bg-theme">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($fetchdata))
                                        @foreach($fetchdata as $key => $value)
                                        <tr>
                                            <th scope="row">{{ $key+1}}</th>
                                            <td>{{ $value->name}}</td>
                                            <td>{{ $value->contact}}</td>
                                            <td>{{ $value->email}}</td>
                                            <td>
                                                <span class="tb-odr-status">
                                                    <span class="badge badge-dot bg-success">Complete</span>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0">
                                                        <em class="icon ni ni-more-h"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-plain">
                                                            <li>
                                                                <a href="#" class="text-primary">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="text-danger">Remove</a>
                                                            </li>
                                                        </ul>
                                                    </div>
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
        </div>
    </div>
</div>

<div class="modal fade" id="modalForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Company</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <div id="showsuccesmessage" style="color:rgb(28, 195, 28);text-align: center;font-size: 20px;"></div>
                <form id="addcompany" method="post" class="form-validate is-alter">
                    @csrf()
                    <div class="form-group">
                        <label class="form-label" for="name">Name</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control"  id="name" name="name" required>
                            <span id="name_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">Email address</label>
                        <div class="form-control-wrap">
                            <input type="email" class="form-control" id="email" name="email" required>
                            <span id="email_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone No</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="phone" id="phone">
                            <span id="phone_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Enter your Password">
                            <span id="password_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="c_password">Confirm Password</label>
                        <div class="form-control-wrap">
                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                            </a>
                            <input type="password" class="form-control form-control-lg" name="c_password" id="c_password" placeholder="Enter your confirm password">
                            <span id="c_password_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Access to</label>
                        <ul class="custom-control-group g-3 align-center">
                        @if(!empty($fetchsidebar))
                        @foreach($fetchsidebar as $value)
                            <li>
                                <div class="custom-control custom-control-sm custom-checkbox">
                                    <input type="hidden" name="sidebar[]" value="{{ $value->sidebar_id}}">
                                    <input type="checkbox" class="custom-control-input" name="read_{{ $value->sidebar_id}}" id="read_{{ $value->sidebar_id}}" >
                                    <label class="custom-control-label" for="read_{{ $value->sidebar_id}}">{{$value->sidebar_name}}</label>
                                </div>
                            </li>
                        @endforeach
                        @endif
                           
                        </ul>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div>
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
                url: "{{ url('staff/company/store') }} ",
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
                            $('#modalForm').hide();
                            reloadpage();
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