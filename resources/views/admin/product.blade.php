<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
        .title{
            padding-top: 25px;
            font-size:25px;
        }
        label{
            width: 200px;
            display: inline-block;
        }
        input {
            color: black !important;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
                <h1 class="title">Add New Product</h1>
                <form action="{{url('createproduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="p-6">
                    <label for="title">Product Title</label>
                    <input type="text" name="title" placeholder="set a title" required>
                </div>
                <div class="p-6">
                    <label for="price">Price</label>
                    <input type="number" name="price" placeholder="set the price" required>
                </div>
                <div class="p-6">
                    <label for="description">Describe The Product</label>
                    <input type="text" name="description" placeholder="Add Your Text" required>
                </div>
                <div class="p-6">
                    <label for="quantity">Quantity</label>
                    <input type="number" name="quantity" placeholder=" Product Quantity" required>
                </div>
                <div class="p-6">
                    <label for="file">Upload an Image for the product</label>
                    <input type="file" name="file" required>
                </div>
                </form>
            </div>
        </div>
          <!-- partial -->
          @include('admin.script')
  </body>
</html>
