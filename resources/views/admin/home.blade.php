<x-layout>
    <div class="" id="home">
        @include('admin.navbar')
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Welcome back, <b>{{ $user->name}} </b></p>
                </div>
            </div>
            <!-- row -->
                @include('admin.charts')
                <!-- Notification List -->
                @include('admin.notification')
                <!-- Order Table -->
                 @include('admin.orderTable')
            </div>
        </div>
    </div>
</x-layout>
