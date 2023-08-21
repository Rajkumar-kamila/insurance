@extends('includes.main')
@section('main-container')

<div class="page-body">
    
      <div class="grid grid-cols-12 gap-card-gap"> 
      <div class="col-span-12 flex items-center justify-between gap-3 bg-white p-3 rounded-5 2sm:flex-col 2sm:items-end dark:bg-sidebar-dark"> 
        <div class="flex items-center gap-3"> 
        <label class="text-xs min-w-max text-content3" for="sortby">Sort By                                    </label>
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
        <!-- <div class="product-setting"><button class="text-white btn btn-active btn-primary hover:-translate-y-1 hover:transition-all hover:ease-in-out">Add Admin</button> </div> -->
        <!-- <div class="product-setting"> <a class="list-layout-view" href="javascript:void(0)"><i class="w-6 h-6 stroke-content3" data-feather="list"></i></a></div> -->
        </div>
    </div>
      <div class="col-span-12 4xl:col-span-12 lg:col-span-12 lg:-order-1">
          <div class="card"> 
            <div class="card-header transaction-history"> 
              <div class="flex justify-between w-full flex-wrap gap-2 items-center">
                <h3 class="text-lg font-bold text-title leading-none">Reports</h3>
                <!-- <div class="custom-select select-style-1"> 
                  <select class="capitalize">
                    <option>Reports</option>
                    <option>Yearly</option>
                    <option>Monthly</option>
                    <option>Weekly</option>
                    <option>Daily</option>
                  </select>
                </div> -->
                <div class="flex flex-wrap gap-2">
                  <button class="px-3 py-2 text-sm font-medium text-white border border-gray-200 rounded-none bg-primary hover:bg-primary hover:text-white focus:text-white focus:bg-primary dark:border-border-dark ">Yearly</button>
                  <button class="px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-none hover:bg-primary hover:text-white focus:text-white focus:bg-primary dark:border-border-dark dark:bg-sidebar-dark2 dark:text-white dark:hover:bg-primary dark:hover:text-white dark:focus:text-white dark:focus:bg-primary ">Monthly</button>
                  <button class="px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-none hover:bg-primary hover:text-white focus:text-white focus:bg-primary dark:border-border-dark dark:bg-sidebar-dark2 dark:text-white dark:hover:bg-primary dark:hover:text-white dark:focus:text-white dark:focus:bg-primary ">Weekly</button>
                  <button class="px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-none hover:bg-primary hover:text-white focus:text-white focus:bg-primary dark:border-border-dark dark:bg-sidebar-dark2 dark:text-white dark:hover:bg-primary dark:hover:text-white dark:focus:text-white dark:focus:bg-primary ">Daily</button>
                </div>
              </div>
            </div>
            <div class="card-body"> 
              <div class="overflow-auto custom-scroll">
                <table class="table"> 
                  <thead> 
                    <tr> 
                      <th>Company Name</th>
                      <th>Date And Time</th>
                      <th>Amount</th>
                      <th>invoice no.</th>
                      <th>Status</th>
                      <th>payment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="group">
                      <td class="min-w-[11.125rem]"> 
                        <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="assets/images/product/1.jpg" alt="Samsung TV"><a href="product.html">
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">Samsung TV</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span></a></div>
                      </td>
                      <td class="min-w-[7.5rem]"> 
                        <div> 
                          <h4 class="text-xs font-semibold text-title">Jan 25, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-success">₹251 </h4>
                      </td>
                      <td class="min-w-[6.5rem]"> 
                        <h4 class="text-xs font-semibold uppercase text-title">#px0101</h4>
                      </td>
                      <td class="min-w-[4.6875rem]"> 
                        <div class="progress-bar progress-sm max-w-[3.375rem]">
                          <div class="bg-success" style="width:50%"> </div>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-title">Paypal</h4>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <div class="d-flex" style="display: flex;">
                          <button class="btn btn-primary btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-trash stroke-white" aria-hidden="true"></i>  </button>&nbsp;&nbsp;
                          <button class="btn btn-danger btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="group">
                      <td class="min-w-[11.125rem]"> 
                        <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="assets/images/product/2.jpg" alt="Spring Bed"><a href="product.html">
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">Spring Bed</h4><span class="block mt-1 font-semibold text-2xs text-content">Bought item</span></a></div>
                      </td>
                      <td class="min-w-[7.5rem]"> 
                        <div> 
                          <h4 class="text-xs font-semibold text-title">Feb 20, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Bought item</span>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-danger">₹350 </h4>
                      </td>
                      <td class="min-w-[6.5rem]"> 
                        <h4 class="text-xs font-semibold uppercase text-title">#rf304f</h4>
                      </td>
                      <td class="min-w-[4.6875rem]"> 
                        <div class="progress-bar progress-sm max-w-[3.375rem]">
                          <div class="bg-danger" style="width:70%"> </div>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-title">Credit Card</h4>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <div class="d-flex" style="display: flex;">
                          <button class="btn btn-primary btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-trash stroke-white" aria-hidden="true"></i>  </button>&nbsp;&nbsp;
                          <button class="btn btn-danger btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="group">
                      <td class="min-w-[11.125rem]"> 
                        <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="assets/images/product/3.jpg" alt="Long Dress"><a href="product.html">
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">Long Dress</h4><span class="block mt-1 font-semibold text-2xs text-content">Bought item</span></a></div>
                      </td>
                      <td class="min-w-[7.5rem]"> 
                        <div> 
                          <h4 class="text-xs font-semibold text-title">Feb 25, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Bought item</span>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-success">₹240 </h4>
                      </td>
                      <td class="min-w-[6.5rem]"> 
                        <h4 class="text-xs font-semibold uppercase text-title">#dnj480</h4>
                      </td>
                      <td class="min-w-[4.6875rem]"> 
                        <div class="progress-bar progress-sm max-w-[3.375rem]">
                          <div class="bg-success" style="width:40%"> </div>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-title">Paypal</h4>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <div class="d-flex" style="display: flex;">
                          <button class="btn btn-primary btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-trash stroke-white" aria-hidden="true"></i>  </button>&nbsp;&nbsp;
                          <button class="btn btn-danger btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="group">
                      <td class="min-w-[11.125rem]"> 
                        <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="assets/images/product/4.jpg" alt="Phillip Lightbulb"><a href="product.html">
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">Phillip Lightbulb</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span></a></div>
                      </td>
                      <td class="min-w-[7.5rem]"> 
                        <div> 
                          <h4 class="text-xs font-semibold text-title">March 27, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-danger">₹200 </h4>
                      </td>
                      <td class="min-w-[6.5rem]"> 
                        <h4 class="text-xs font-semibold uppercase text-title">#g189d0</h4>
                      </td>
                      <td class="min-w-[4.6875rem]"> 
                        <div class="progress-bar progress-sm max-w-[3.375rem]">
                          <div class="bg-danger" style="width:60%"> </div>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-title">Credit Card</h4>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <div class="d-flex" style="display: flex;">
                          <button class="btn btn-primary btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-trash stroke-white" aria-hidden="true"></i>  </button>&nbsp;&nbsp;
                          <button class="btn btn-danger btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="group">
                      <td class="min-w-[11.125rem]"> 
                        <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="assets/images/product/4.jpg" alt="Phillip Lightbulb"><a href="product.html">
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">Phillip Lightbulb</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span></a></div>
                      </td>
                      <td class="min-w-[7.5rem]"> 
                        <div> 
                          <h4 class="text-xs font-semibold text-title">March 27, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-danger">₹200 </h4>
                      </td>
                      <td class="min-w-[6.5rem]"> 
                        <h4 class="text-xs font-semibold uppercase text-title">#g189d0</h4>
                      </td>
                      <td class="min-w-[4.6875rem]"> 
                        <div class="progress-bar progress-sm max-w-[3.375rem]">
                          <div class="bg-danger" style="width:60%"> </div>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-title">Credit Card</h4>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <div class="d-flex" style="display: flex;">
                          <button class="btn btn-primary btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-trash stroke-white" aria-hidden="true"></i>  </button>&nbsp;&nbsp;
                          <button class="btn btn-danger btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="group">
                      <td class="min-w-[11.125rem]"> 
                        <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="assets/images/product/4.jpg" alt="Phillip Lightbulb"><a href="product.html">
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">Phillip Lightbulb</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span></a></div>
                      </td>
                      <td class="min-w-[7.5rem]"> 
                        <div> 
                          <h4 class="text-xs font-semibold text-title">March 27, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-danger">₹200 </h4>
                      </td>
                      <td class="min-w-[6.5rem]"> 
                        <h4 class="text-xs font-semibold uppercase text-title">#g189d0</h4>
                      </td>
                      <td class="min-w-[4.6875rem]"> 
                        <div class="progress-bar progress-sm max-w-[3.375rem]">
                          <div class="bg-danger" style="width:60%"> </div>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-title">Credit Card</h4>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <div class="d-flex" style="display: flex;">
                          <button class="btn btn-primary btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-trash stroke-white" aria-hidden="true"></i>  </button>&nbsp;&nbsp;
                          <button class="btn btn-danger btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="group">
                      <td class="min-w-[11.125rem]"> 
                        <div class="flex items-center gap-[.5625rem]"><img class="w-10 h-10 rounded-full" src="assets/images/product/4.jpg" alt="Phillip Lightbulb"><a href="product.html">
                            <h4 class="text-xs font-semibold text-title group-hover:text-primary">Phillip Lightbulb</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span></a></div>
                      </td>
                      <td class="min-w-[7.5rem]"> 
                        <div> 
                          <h4 class="text-xs font-semibold text-title">March 27, 2023</h4><span class="block mt-1 font-semibold text-2xs text-content">Item Sold</span>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-danger">₹200 </h4>
                      </td>
                      <td class="min-w-[6.5rem]"> 
                        <h4 class="text-xs font-semibold uppercase text-title">#g189d0</h4>
                      </td>
                      <td class="min-w-[4.6875rem]"> 
                        <div class="progress-bar progress-sm max-w-[3.375rem]">
                          <div class="bg-danger" style="width:60%"> </div>
                        </div>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <h4 class="text-xs font-semibold text-title">Credit Card</h4>
                      </td>
                      <td class="min-w-[6.25rem]"> 
                        <div class="d-flex" style="display: flex;">
                          <button class="btn btn-primary btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-trash w-4 h-4  stroke-white" aria-hidden="true"></i>  </button>&nbsp;&nbsp;
                          <button class="btn btn-danger btn-square w-[2.25rem] h-[2.25rem] grid place-content-center !p-0"> <i class="fa fa-pencil-square-o w-4 h-4 stroke-white" aria-hidden="true"></i> </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection