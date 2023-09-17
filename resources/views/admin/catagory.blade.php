<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  @include('admin.css')

  <style>
    .div_center {
      text-align: center;
      padding-top: 50px;
    }

    .h3_font {
      font-size: 50px;
      font-weight: bold;
      padding-bottom: 40px;
    }

    .input_color {
      border: 1px solid #000;
      padding: 10px;
      width: 50%;
      margin-bottom: 20px;
    }

    .centre {
      margin: auto;
      width: 50%;
      padding: 10px;
      text-align: center;
      margin-top: 30px;
      border: 3px solid greenyellow;
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


        </div>

        @endif


        <div class="div_center">
          <h3 class="h2_font">Add Category</h3>

          <form action="{{url('/add_catagory')}}" method="POST">
            @csrf
            <input type="text" class="input_color" name="catagory" id="" placeholder="Write Category Name">
            <input type="submit" class="btn btn-primary" name="submit" value="Add Catagory">
          </form>

        </div>
        <table class="centre">
          <tr>
            <th>Catagory Name</th>
            <th>Action</th>
          </tr>

          @foreach($data as $data)
          <tr>
            <td>{{$data->catagory_name}}</td>
            <td>
              <a href="{{url('edit_catagory', $data->id)}}" class="btn btn-warning">Edit</a>
              <a onclick="return confirm('Are You Sure to Delete?')" href="{{url('delete_catagory', $data->id)}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach

        </table>
      </div>
    </div>
    <!-- main-panel ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')

    <!-- End custom js for this page -->
</body>

</html>