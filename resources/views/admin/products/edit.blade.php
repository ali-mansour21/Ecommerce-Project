<x-layout>
<nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                    <h1 class="tm-site-title mb-0">Product Admin</h1>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/dashboard">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ request()->is('product') ? 'active' : ''}} " href="/product">
                                <i class="fas fa-shopping-cart"></i>
                                Products
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('account') ? 'active' : '' }}" href="/account">
                                <i class="far fa-user"></i>
                                Accounts
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <div class="nav-link logout">
                            <form method="post" action="/logout">
                                @csrf
                            <button type="submit" class=" d-block font-bold  rounded" style="font-size: 20px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30px" height="50px" class="w-3 h-3">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                            </svg>
                            Logout
                            </button>
                            </form>
                        </div>
                        </li>
                    </ul>
                </div>
            </div>
</nav>
        <section class="add-product">
            <div class="container">
                <form method="POST" action="/products/{{$product->id}}/edit" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                    <div class="content">
                        <label for="title">Product Name</label>
                        <input type="text" name="title" id="title" value="{{old('title', $product->title)}}" required>
                    </div>
                    <div class="content">
                        <label for="price">Product Price</label>
                        <input type="text" name="price" id="price" required value="{{old('price', $product->price)}}">
                    </div>
                    <div class="content">
                        <label for="quantity">Product Quantity</label>
                        <input type="text" name="quantity" id="quantity" required value="{{old('quantity', $product->quantity)}}">
                    </div>
                    <div class="content">
                        <label for="productImage">Product Image</label>
                        <input type="file" name="productImage" id="productImage"/>
                    </div>
                    <div class="content">
                        <label for="description">Product Description</label>
                        <textarea type="text" name="description" id="description" rows="5" required>{{old('description', $product->description)}}</textarea>
                    </div>
                    <div class="content">
                       <select class="select" name="category_id" id="category_id" required>
                       @foreach (\App\Models\Categorie::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                       </select>

                    </div>
                    <div class="create-product">
                        <button class="create-button" type="submit">Edit</button>
                    </div>
                </form>
            </div>
        </section>
</x-layout>
