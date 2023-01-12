<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">
    <title>POS</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ui/frontend/assets/images/logos/squanchy.jpg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('ui/frontend/assets/images/logos/squanchy.jpg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('ui/frontend/assets/images/logos/squanchy.jpg') }}">
    <!-- jQuery -->
    <!-- Bootstrap4 files-->
    <!-- CSS only -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('ui/frontend/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ui/frontend/assets/css/ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('ui/frontend/assets/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css"
        rel="stylesheet">
    <link href="{{ asset('ui/frontend/assets/css/OverlayScrollbars.css') }}" type="text/css" rel="stylesheet" />
    <!-- Font awesome 5 -->
    <style>
    .avatar {
        vertical-align: middle;
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }

    .bg-default,
    .btn-default {
        background-color: #f2f3f8;
    }

    .btn-error {
        color: #ef5f5f;
    }
    </style>
    <!-- custom style -->
</head>

<body>
    <section class="header-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-wrap">
                        <img class="logo" src="{{asset('ui/frontend/assets/images/logos/squanchy.jpg')}}">
                        <h2 class="logo-text">POS</h2>
                    </div> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-sm-6">
                    <form action="#" class="search-wrap">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-3 col-sm-6">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="#" class="icontext">
                                <a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--icon-only">
                                    <i class="fa fa-home"></i>
                                </a>
                            </a>
                        </div> <!-- widget .// -->
                        <div class="widget-header dropdown">
                            <a href="#" class="ml-3 icontext" data-toggle="dropdown" data-offset="20,10">
                                <img src="assets/images/avatars/bshbsh.png" class="avatar" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="fa fa-sign-out-alt"></i> Logout</a>
                            </div> <!--  dropdown-menu .// -->
                        </div> <!-- widget  dropdown.// -->
                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section>
    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y-sm bg-default ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 card padding-y-sm card ">
                    <ul class="nav bg radius nav-pills nav-fill mb-3 bg" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="pill" href="#nav-tab-card">
                                <i class="fa fa-tags"></i> All</a>
                        </li>
                        <button type="button nav-item" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add Customer
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add New Customer</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">


                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label class="control-label">Customer Name</label>
                                            <div>
                                                <input type="text" class="name form-control input-lg" id="name"
                                                    name="name" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Phone</label>
                                            <div>
                                                <input type="text" class="phone form-control input-lg" id="phone"
                                                    name="phone" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <div>
                                                <input type="email" class="email form-control input-lg" id="email"
                                                    name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Gender</label>
                                            <div class="form-check">
                                                <input class="gender form-check-input" type="radio" name="gender"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="gender form-check-input" type="radio" name="gender"
                                                    id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Customer type</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="customer_type" class="customer_type">
                                                <option selected>Select</option>
                                                <option value="1">Children</option>
                                                <option value="2">Teen</option>
                                                <option value="3">Middle Age</option>
                                                <option value="3">Old Age</option>
                                            </select>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="add_customer btn btn-primary">Save</button>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </ul>
                    <span id="items">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-md-3">

                                <figure class="card card-product">

                                    <div class="img-wrap">
                                        <img src="{{  asset('images/'.$product->image)  }}">
                                        <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick
                                            view</a>
                                    </div>
                                    <figcaption class="info-wrap">
                                        <a href="#" class="title">{{$product->name}}</a>
                                        <div class="action-wrap">
                                            <a href="#" class="btn btn-primary btn-sm float-right">
                                                <i class="fa fa-cart-plus"></i> Add </a>
                                            <div class="price-wrap h5">
                                                <span class="price-new">{{$product->sales_price}}</span>
                                            </div> <!-- price-wrap.// -->
                                        </div> <!-- action-wrap -->
                                    </figcaption>
                                </figure> <!-- card // -->

                            </div> <!-- col // -->
                            @endforeach
                        </div> <!-- row.// -->
                    </span>
                </div>
                <div class="col-md-4">
                    <div class="card">

                        <span id="cart">

                            <div class="">

                                <div class="d-flex nav bg radius nav-pills nav-fill mb-3 bg" role="tablist">
                                    <!-- Button trigger modal -->

                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Customer</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <table class="table table-hover shopping-cart-wrap">

                                <thead class="text-muted">
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col" width="120">Qty</th>
                                        <th scope="col" width="120">Price</th>
                                        <th scope="col" class="text-right" width="200">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <figure class="media">
                                                <div class="img-wrap"><img src="assets/images/items/1.jpg"
                                                        class="img-thumbnail img-xs"></div>
                                                <figcaption class="media-body">
                                                    <h6 class="title text-truncate">Product name </h6>
                                                </figcaption>
                                            </figure>
                                        </td>
                                        <td class="text-center">
                                            <div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group"
                                                aria-label="...">
                                                <button type="button" class="m-btn btn btn-default"><i
                                                        class="fa fa-minus"></i></button>
                                                <button type="button" class="m-btn btn btn-default" disabled>3</button>
                                                <button type="button" class="m-btn btn btn-default"><i
                                                        class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="price-wrap">
                                                <var class="price">$145</var>
                                            </div> <!-- price-wrap .// -->
                                        </td>
                                        <td class="text-right">
                                            <a href="" class="btn btn-outline-danger"> <i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </span>
                    </div> <!-- card.// -->
                    <div class="box">
                        <dl class="dlist-align">
                            <dt>Tax: </dt>
                            <dd class="text-right">12%</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Discount:</dt>
                            <dd class="text-right"><a href="#">0%</a></dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Sub Total:</dt>
                            <dd class="text-right">$215</dd>
                        </dl>
                        <dl class="dlist-align">
                            <dt>Total: </dt>
                            <dd class="text-right h4 b"> $215 </dd>
                        </dl>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" class="btn  btn-default btn-error btn-lg btn-block"><i
                                        class="fa fa-times-circle "></i> Cancel </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn  btn-primary btn-lg btn-block"><i class="fa fa-shopping-bag"></i>
                                    Charge </a>
                            </div>
                        </div>
                    </div> <!-- box.// -->
                </div>
            </div>
        </div><!-- container //  -->
    </section>



    <script>
    $(document).ready(function() {
        $(document).on('click', '.add_customer', function(e) {
            e.preventDefault();

            console.log('hello');

            // var data = {
            //     'name': $('.name').val(),
            //     'phone': $('.phone').val(),
            //     'email': $('.email').val(),
            //     'gender': $('.gender').val(),
            //     'customer_type': $('.customer_type').val(),

            // }
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            // console.log(data);


            // $.ajax({
            //     url: "{{ route('customer.store') }}",
            //     type: "POST",
            //     data: data,
            //     dataType: "json",
            //     success: function(response) {
            //         console.log(response);

            //         // if (response == 400) {
            //         //     $('#err_list').html("");
            //         //     $('#err_list').addClass("alert alert-danger");
            //         //     $.each(response.errors, function(key, err_values) {
            //         //         $("#{err_list").append('<li>' + err_values +
            //         //             '</li>');
            //         //     });
            //         // } else {

            //         // $("#err_list").html("");
            //         // $("#success_msg").addClass('alert alert-success');
            //         // $("#success_msg").text(response.message);
            //         // $("#exampleModal").modal('hide');
            //         // $("#exampleModal").find('input').val("");


            //     }
        });

    });
    </script>




    <!-- ========================= SECTION CONTENT END// ========================= -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>

    <script src="{{ asset('ui/frontend/assets/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
    <script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="{{ asset('ui/frontend/assets/js/OverlayScrollbars.js') }}" type="text/javascript"></script>
    <script>
    $(function() {
        //The passed argument has to be at least a empty object or a object with your desired options
        //$("body").overlayScrollbars({ });
        $("#items").height(552);
        $("#items").overlayScrollbars({
            overflowBehavior: {
                x: "hidden",
                y: "scroll"
            }
        });
        $("#cart").height(445);
        $("#cart").overlayScrollbars({});
    });
    </script>
</body>

</html>