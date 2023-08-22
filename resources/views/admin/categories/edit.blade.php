<x-layout>
    @include('admin.navbar')
        <section class="add-product">
            <div class="container">
                <form method="POST" action="/categories/{{$category->id}}/edit" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                    <div class="content">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" id="name" required value="{{$category->name}}">
                    </div>
                    <div class="create-product">
                        <button class="create-button" type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </section>
</x-layout>
