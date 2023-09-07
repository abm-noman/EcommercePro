<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
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
            <h2>Add Product</h2>

          <div class="div_center">

          </div>

          </div>
            <!-- content-wrapper ends -->
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    
    <!-- End custom js for this page -->

    <li>
          <x-app-layout>

          </x-app-layout>
    </li>
  </body>
</html>