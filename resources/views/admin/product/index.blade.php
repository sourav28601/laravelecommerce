@extends('admin.layouts.master')
@section('content')
<!-- /.card -->

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Product Display</h3>
        <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#createModal"
            style="float: right;">
            <i class="fa fa-plus"></i>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#Sno.</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1 ?>
                @foreach ($data as $d)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$d->category->name  ?? null }}</td>
                    <td>{{$d->product_name}}</td>
                    <td>{{$d->product_description}}</td>
                    <td>{{$d->product_price}}</td>
                    <td>{{$d->quantity}}</td>
                    <td><img src="{{url('/upload/'.$d->product_image)}}" style="height: 50px; width: 50px; border-radius: 100%;"></td>
                    <td class="{{$d->status === 1  ?  "text-success" : "text-danger" }}" >{{$d->status === 1 ? 'active' : 'inactive'}}</td>
                    <td>
                        <a href="{{url('/admin/product/edit/'.$d->id)}}" class="btn btn-info">Edit</a>
                        <a href="{{url('/admin/product/delete/'.$d->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#Sno.</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                data-backdrop="static" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ url('/admin/product/save') }}" method="post" id="createProduct"
                                enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select"
                                            class=" form-control-label">Catagory</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="category" id="select" class="form-control">
                                         @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input"
                                            class=" form-control-label">Product Name</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="product_name" placeholder="Text"
                                            class="form-control">

                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input"
                                            class=" form-control-label">Product Description</label></div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="product_description" id="textarea-input" rows="9"
                                            placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input"
                                            class=" form-control-label">Price</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="price" name="product_price" placeholder="Price"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="textarea-input"
                                            class=" form-control-label">Quantity</label></div>
                                    <div class="col-12 col-md-9">
                                        <input type="number" id="quantity" name="quantity" placeholder="quantity"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Product Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="product_image" class="form-control-file"
                                            style='height: 32px;' onchange="loadFilee(event)">
                                        <img id="output" style="max-width: 70px; max-height: 70px; border-radius: 0%;">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-md" onclick="event.preventDefault();
                                                document.getElementById('createProduct').submit();">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
@endsection
