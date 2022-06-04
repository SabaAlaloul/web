<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_navbar.html -->
      
        <!-- partial -->



        <!-- Add product form -->
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <h1 class="title">update Product</h1>
            {{-- @if (session() - has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif --}}
            <form action="{{url('edit_product',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="">Product title</label>
                    <input style="color:black;" type="text" name="title" placeholder="write a product title"
                    value = "{{$product->title}}" required>

                </div>
                <div style="padding: 15px;">
                    <label for="">Description</label>
                    <input style="color:black;" type="text" name="des" placeholder="write a description" 
                    value = "{{$product->description}}"required>

                </div>
                <div style="padding: 15px;">
                    <label for="">Price</label>
                    <input style="color:black;" type="number" name="price" placeholder="write a product price"
                    value = "{{$product->price}}" required>

                </div>
                <div style="padding: 15px;">
                    <label for="">discount price</label>
                    <input style="color:black;" type="number" name="disprice" placeholder="write discount price"
                    value = "{{$product->discount_price}}" required>

                </div>
                <div style="padding: 15px;">
                    <label
                      
                      >Catagory</label
                    >
                    <select
                      class=""
                     
                      name="catagory" 
                    >
                      <option value = " {{$product->catagory}}"selected>Men</option>
                      <option value="Men">Men</option>
                      <option value="Wommen">Wommen</option>
                      <option value="kids">kids</option>
                      
                    </select>
                  </div>
    
                <div style="padding: 15px;">
                    <label for=""> Quantity</label>
                    <input style="color:black;" type="text" name="quantity" placeholder=" product quantity"
                    value = "{{$product->quantity}}" required>

                </div>

                <div style="padding: 15px;">
                        <label for="">  current image of product : </label>
                        <img  style="margin:auto;" hight="100" width="100" src="/product/{{$product->image}}">

                   

                </div>

                <div style="padding: 15px;">
                        <label for=""> image of product : </label>

                    <input style="color:black;" type="file" name="file" >

                </div>
                <div style="padding: 15px;">
                    <input class="btn btn-success" type="submit" value="update now">

                </div>
            </form>
        </div>
    </div>

    
  









     
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
