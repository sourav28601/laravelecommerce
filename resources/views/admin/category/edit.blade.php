@extends("admin.layouts.master")
@section('content')
<div class="container" >
        <br><h3 class="text-center">Edit Category </h3><br>
    <!-- form start -->
    <form action="{{ url('/admin/category/update') }}" method="post" id="createCategory"
    enctype="multipart/form-data" class="form-horizontal">
    @csrf
    <input type="hidden" id="id" name="id" value="{{$data->id}}">
    <div class="row form-group">
        <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Name</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="text" id="name" name="name" placeholder="Text" class="form-control" value="{{$data->name}}">
            <small class="form-text text-muted">This is a help text</small>
        </div>
    </div><br>
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="textarea-input"class=" form-control-label">Description</label></div>
        <div class="col-12 col-md-9">
            <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control">{{$data->description}}</textarea>
        </div>
    </div><br>
    <div class="row form-group">
        <div class="col col-md-3">
            <label for="file-input" class=" form-control-label">Category Image</label>
        </div>
        <div class="col-12 col-md-9">
            <input type="file" id="file-input" name="image" class="form-control-file"
            style='height: 32px;' onchange="loadFilee(event)"><br>
            <img src="{{ url('/upload/'.$data->image) }}" style="height: 50px; width: 50px; border-radius: 100%;">
            {{-- <img id="output" style="max-width: 150px; max-height: 150px; border-radius: 0%;"> --}}
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-md">
        <i class="fa fa-dot-circle-o"></i>update</button>
</form>
<!-- form edit -->
</div><br>
@endsection
