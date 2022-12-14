<x-backend.layouts.master>


    <x-backend.elements.breadCrumb>
        <h4 class="page-title">All Products</h4>
        <div class="ms-auto text-end">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Products
                    </li>
                </ol>
            </nav>
        </div>
    </x-backend.elements.breadCrumb>


    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->

    <div class="container-fluid">

        <div class="card">
            <div class="card-header"> <a type="button" href="{{ route('product.create') }}" class="btn btn-primary ">
                    Add New Product
                </a>
            </div>
            <div id="#success_msg"></div>

            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
                @endif

                <form id="productForm" action="{{ route('product.update', ['product' => $product->id] ) }}"
                    enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    @method('patch')
                    <div class="form-group">
                        <label class="control-label">Product Name</label>
                        <div>
                            <input type="text" class="name form-control input-lg" id="name" name="name"
                                value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Quantity</label>
                        <div>
                            <input type="number" class="quantity form-control input-lg" id="quantity" name="quantity"
                                value="{{ $product->quantity }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Purchase Price</label>
                        <div>
                            <input type="number" class="purchase_price form-control input-lg" id="purchase_price"
                                value="{{ $product->purchase_price }}" name="purchase_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Sale price</label>
                        <div>
                            <input type="number" class="sales_price form-control input-lg" id="sales_price"
                                value="{{ $product->sales_price }}" name="sales_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="description form-control" id="editor description" rows="4"
                            name="description">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="image form-control" type="file" id="formFile" value="" id="image" name="image">
                    </div>
                    <img height="100" weight="100" src="{{ asset('images/'.$product->image) }}" alt="">
                    <div class="form-group">
                        <div>
                            <button type="submit" class="add_product btn btn-success btn-lg">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->



</x-backend.layouts.master>