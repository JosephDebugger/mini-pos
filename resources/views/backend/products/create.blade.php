<x-backend.layouts.master>


    <x-backend.elements.breadCrumb>
        <h4 class="page-title">Add Products</h4>
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
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
                @endif
                <form id="productForm" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data"
                    role="form">
                    @csrf
                    <div class="form-group">
                        <label class="control-label">Product Name</label>
                        <div>
                            <input type="text" class="name form-control input-lg" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Quantity</label>
                        <div>
                            <input type="number" class="quantity form-control input-lg" id="quantity" name="quantity"
                                value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Purchase Price</label>
                        <div>
                            <input type="number" class="purchase_price form-control input-lg" id="purchase_price"
                                value="" name="purchase_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Sale price</label>
                        <div>
                            <input type="number" class="sales_price form-control input-lg" id="sales_price" value=""
                                name="sales_price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="description form-control" id="editor description" rows="4"
                            name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="image form-control" type="file" id="formFile" value="" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" class="add_product btn btn-success btn-lg">
                                Add
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

</x-backend.layouts.master>