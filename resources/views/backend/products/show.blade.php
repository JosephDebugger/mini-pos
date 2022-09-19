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
            <div class="card-header">
                <h2>Product details</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <dt class="col-3">Name</dt>
                    <dd class="col-9">{{ $product->name }}</dd>
                    <dt class="col-3">Quantity</dt>
                    <dd class="col-9">{{ $product->quantity }}</dd>
                    <dt class="col-3">Purchase Price</dt>
                    <dd class="col-9">{{ $product->details }}</dd>
                    <dt class="col-3">Sales price</dt>
                    <dd class="col-9">{{ $product->sales_price }}</dd>
                    <dt class="col-3">Descreption</dt>
                    <dd class="col-9">{{ $product->description }}</dd>
                    <dt class="col-3">Created At</dt>
                    <dd class="col-9">{{ $product->created_at }}</dd>
                    <dt class="col-3">Modified at</dt>
                    <dd class="col-9"> {{ $product->updated_at }}</dd>
                    <dt class="col-3">Image</dt>
                    <dd class="col-9"> <img height="600" weight="600" src="{{ asset('images/'.$product->image) }}"
                            alt="">
                    </dd>
                </div>

            </div>
        </div>
    </div>

</x-backend.layouts.master>