<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('admin.css')

  <style class="text/css">
    .div_center {
      text-align: center;
      padding-top: 50px;
    }

    .font_size {
      font-size: 50px;
      font-weight: bold;
      padding-bottom: 40px;
    }

    .text_color {
      color: black;
      border: 1px solid black;
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
        <div class="div_center">
          <h2 class="font_size">Add Product</h2>

          <div>
            <label>Product Title</label>
            <input type="text" class="text_color" name="title" placeholder="Write a title">
          </div>

          <div>
            <label>Product Description</label>
            <input type="text" class="text_color" name="description" placeholder="Write a Desctiption">
          </div>

          <div>
            <label>Product Price</label>
            <input type="number" class="text_color" name="title" placeholder="Write the Price">
          </div>

          <div>
            <label>Product Quantity</label>
            <input type="number" class="text_color" min="0" name="title" placeholder="Write the Quantity">
          </div>

          <div>
            <label>Discount Price</label>
            <input type="text" class="text_color" name="title" placeholder="Write a title">
          </div>

          <div>
            <label>Product Title</label>
            <input type="text" class="text_color" name="title" placeholder="Write a title">
          </div>

          <div>
            <label>Product Title</label>
            <input type="text" class="text_color" name="title" placeholder="Write a title">
          </div>



          


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