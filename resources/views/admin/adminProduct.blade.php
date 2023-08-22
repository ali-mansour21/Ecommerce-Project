<x-layout>
   @include('admin.navbar')
    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">PRODUCT NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">QUANTITY</th>
                    <th scope="col">CATEGORY</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <th scope="row"><input type="checkbox" hidden /></th>
                    <td class="tm-product-name">{{$product->title}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>
                    <div style="display: flex;justify-content:space-between; align-items:center">
                      <a href="/products/{{$product->id}}/edit">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="color: white;" stroke="currentColor" width="20px"  class="tm-product-delete-link">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                      </a>
                      <form action="/products/{{$product->id}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="tm-product-delete-link border-0">
                              <i class="far fa-trash-alt tm-product-delete-icon hover:cursor-pointer"></i>
                            </button>
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="/product/create"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>

          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Product Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small tm-product-table">
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <td class="tm-product-name">{{$category->name}}</td>
                    <td class="text-center">
                    <div style="display: flex;justify-content:space-between; align-items:center">
                      <a href="/categories/{{$category->id}}/edit">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="tm-product-delete-link" stroke="currentColor" width="20px" style="color: white;">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                      </a>
                      <form action="/categories/{{$category->id}}" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="tm-product-delete-link border-0">
                              <i class="far fa-trash-alt tm-product-delete-icon hover:cursor-pointer"></i>
                            </button>
                        </form>
                    </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a class="btn btn-primary btn-block text-white text-uppercase mb-3" href="{{url('categories/create')}}">
              Add new category
            </a>
          </div>
        </div>
      </div>
    </div>
</x-layout>
