<x-layout>
<div class="" id="home">
     @include('admin.navbar')
      <div class="container mt-5">
        <!-- row -->
        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Account Settings</h2>
              <form method="POST" action="/accounts/{{$user->id}}/edit" class="tm-signup-form row">
                @csrf
                @method('PATCH')
                <div class="form-group col-lg-6">
                  <label for="name">Account Name</label>
                  <input
                    id="name"
                    name="name"
                    type="text"
                    class="form-control validate"
                    value="{{$user->name}}"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Account Email</label>
                  <input
                    id="email"
                    name="email"
                    type="email"
                    class="form-control validate"
                    value="{{$user->email}}"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="user_type">Account Type</label>
                  <input
                    id="user_type"
                    name="user_type"
                    type="text"
                    class="form-control validate"
                    value="{{$user->user_type}}"
                  />
                </div>
                <div class="form-group col-lg-6">
                  <label for="phone">Phone</label>
                  <input
                    id="phone"
                    name="phone"
                    type="text"
                    class="form-control validate"
                    value="{{$user->phone}}"
                  />
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Update Your Account
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</x-layout>
