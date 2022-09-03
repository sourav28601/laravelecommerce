@extends('admin.layouts.master')
@section('content')
{{-- contaiber-start --}}
<div class="container p-5">
    <br><h3 class="text-center">Edit Product</h3><br>
    {{-- form-start --}}
    <form action="{{ url('/admin/product/update') }}" method="post" id="createProduct"
    enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <input type="hidden" id="id" name="id" value="{{$data->id}}">
        <div class="row form-group">
            <div class="col col-md-3"><label for="select"
                    class=" form-control-label">Catagory</label></div>
            <div class="col-12 col-md-9">
                <select name="category" id="select" class="form-control">
                    @foreach ($cata as $d)
                    <option value="{{ $d->id }}" {{$data->category_id == $d->id ? 'selected' : ''}}  >{{ $d->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input"
                    class=" form-control-label">Product Name</label></div>
            <div class="col-12 col-md-9">
                <input type="text" id="name" name="product_name" placeholder="Text"
                    class="form-control" value="{{$data->product_name}}">
                <small class="form-text text-muted">This is a help text</small>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input"
                    class=" form-control-label">Product Description</label></div>
            <div class="col-12 col-md-9">
                <textarea name="product_description" id="textarea-input" rows="9"
                    placeholder="Content..." class="form-control">{{$data->product_description}}</textarea>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input"
                    class=" form-control-label">Price</label>
            </div>
            <div class="col col-md-9">
                <input type="number" id="price" name="product_price" placeholder="Price"
                    class="form-control" value="{{$data->product_price}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input"
                    class=" form-control-label">Quantity</label>
            </div>
            <div class="col col-md-9">
                <input type="number" id="quantity" name="quantity" placeholder="quantity"
                    class="form-control" value="{{$data->quantity}}">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3">
                <label for="file-input" class=" form-control-label">Product Image</label>

            </div>
            <div class="col-12 col-md-9">
                <input type="file" id="file-input" name="product_image" class="form-control-file"
                    style='height: 32px;' onchange="loadFilee(event)">
                    <img src="{{url('/upload/'.$data->product_image)}}" style="height: 50px; width: 50px; border-radius: 100%;">
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="textarea-input"
                    class=" form-control-label">Status</label>
            </div>
            <div class="col-md-9">
                <input type="text" id="status" name="status" placeholder="Status"
                    class="form-control" value="{{$data->status}}">
            </div>
        </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-md" onclick="event.preventDefault();
                                document.getElementById('createProduct').submit();">
                    <i class="fa fa-dot-circle-o"></i>update
                </button>
            </div>
    </form>
    {{-- form-end --}}
</div><br>
{{-- container-end --}}
@endsection
