
</div>
<!DOCTYPE html>
<html>
   <head>
   <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->


         @include('home.header')
         <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="card">
        <div class="card-header">
          contact us
        </div>
        <div class="card-body">
            @if(Session::has('message_sent'))
            <div class="alert alert-success">
                {{ Session::get('message_sent') }}
            </div>
            @endif
            <form action="{{url('contact') }}" method="POST" enctype="multipart/form-data">
                @csrf                   
                <div class="form-group">
                  <label for="title">Name </label>
                  <input type="text"  name="name" class="form-control"  name="title" >               
                </div>   
                <div class="form-group">
                    <label for="title">Email </label>
                    <input type="email"  name="email" class="form-control"  name="title" >               
                  </div>
                  <div class="form-group">
                    <label for="title">phone </label>
                    <input type="text"  name="phone" class="form-control"  name="title" >               
                  </div>
                  <div class="form-group">
                    <label for="title">Message </label>
                    <textarea name="message" id="" cols="30" rows="10"></textarea>
                  </div>                          
                <button type="submit" class="btn btn-success">Submit</button>
              </form>
        </div>
    </div>
</div>
</div>
</div>

         
         <!-- end header section -->

         <!-- slider section -->
         

         <!-- end slider section -->
     

      <!-- why section -->
      
     
      <!-- end why section -->
      
      <!-- arrival section -->
   
      <!-- end arrival section -->
      
      <!-- product section -->
    
      <!-- end product section -->

      <!-- subscribe section -->
   
      <!-- end subscribe section -->

      <!-- client section -->
   
     
      <!-- end client section -->

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->

      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>