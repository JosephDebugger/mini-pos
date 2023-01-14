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
                    Add New
                </a>
            </div>
            <div id="#success_msg"></div>

            <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Quantity </th>
                                <th>Purchase_price</th>
                                <th>Sale_price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }} </td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->purchase_price }}</td>
                                <td>{{ $product->sales_price }}</td>
                                <td> <img src="{{ asset('images/'.$product->image) }}" alt="" width="100px"
                                        height="auto">
                                </td>
                                <td>
                                    <div>
                                        <a class="btn btn-primary"
                                            href="{{ route('product.show', ['product'=>$product->id] ) }}">Show</a>

                                    </div>
                                    <div> <a class="btn btn-primary"
                                            href="{{ route('product.edit', ['product'=>$product->id] ) }}">Edit</a>
                                    </div>
                                    <div>
                                        <form method="POST" action="{{ route('product.destroy', $product ) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button class="btn btn-danger" type="submit"
                                                onclick="return confirm('Are you sure to delete this product')">Delete</button>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Quantity </th>
                                <th>Purchase_price</th>
                                <th>Sale_price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>

                    </table>

                </div>
                <div class="row"> {{$products->links()}}</div>
            </div>

        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->


    </div>

</x-backend.layouts.master>