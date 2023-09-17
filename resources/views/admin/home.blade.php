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
    @include('admin.body')
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