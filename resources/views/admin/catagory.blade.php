<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .div_center{
            text-align: center;
            padding-top: 50px;
        }
        .h3_font{
            font-size: 50px;
            font-weight: bold;
            padding-bottom: 40px;
        }
        .input_color{
            border: 1px solid #000;
            padding: 10px;
            width: 50%;
            margin-bottom: 20px;
        }
    </style>
    </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
       @include('admin.header')
       
        <!-- partial -->


        <div class="main-panel">
          <div class="content-wrapper">
            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" area-hidden="true"> x </button>
                {{ session()->get('message') }}




            @endif


            <div class="div_center">
                <h3 class="h2_font">Add Catagory</h3>

                <form action="{{url('/add_catagory')}}" method="POST">
                    @csrf
                    <input type="text" class="input_color" name="catagory" id="" placeholder="Write Catagory Name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add Catagory">
                </form>




            </div>
          </div>
        </div>
        <!-- main-panel ends -->

        <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>