<x-layout>
    @include('admin.navbar')
        <section class="add-product">
            <div class="container">
                <form method="POST" action="{{ url('categories/create') }}" enctype="multipart/form-data">
                @csrf
                    <div class="content">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="create-product">
                        <button class="create-button" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </section>
</x-layout>
