<x-layout>
<div class="" id="home">
     @include('admin.navbar')
      <div class="container mt-5">
        <!-- row -->
        <div class="row tm-content-row">
        <div class="tm-product-table-container">
        <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">USER NAME</th>
                    <th scope="col">USER EMAIL</th>
                    <th scope="col">PHONE</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                  <tr>
                    <th scope="row"><input type="checkbox" hidden /></th>
                    <td class="tm-product-name">{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->user_type}}</td>
                    <td>
                    <div style="display: flex;justify-content:space-between; align-items:center">
                      <a href="/accounts/{{$user->id}}/edit">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" style="color: white;" stroke="currentColor" width="20px"  class="tm-product-delete-link">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                      </a>
                      <form action="/accounts/{{$user->id}}" method="POST">
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
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</x-layout>
