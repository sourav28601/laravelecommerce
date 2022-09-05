@extends("admin.layouts.master")
@section('content')

    <!-- /.card -->
    <div class="card" style="margin-top: 50px;">
        <div class="card-header">
            <h3 class="card-title">Category Display</h3>
            <button type="button" class="btn btn-primary mb-1 " data-toggle="modal" data-target="#createModal"
                style="float:right;">
                <i class="fa fa-plus"></i>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->description}}</td>
                        <td><img src="{{ url('/upload/'.$d->image) }}" style="height: 50px; width: 50px; border-radius: 100%;"></td>
                        <td>
                            <a href="{{url('/admin/category/edit/'.$d->id)}}" class="btn btn-info">Edit</a>
                            <a href="{{url('/admin/category/delete/'.$d->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        {{-- model start --}}
        <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            data-backdrop="static" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('/admin/category/save') }}" method="post" id="createCategory"
                            enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="name" name="name" placeholder="Text" class="form-control">
                                    <small class="form-text text-muted">This is a help text</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input"class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9">
                                    <textarea name="description" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class=" form-control-label">Category Image</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="file-input" name="image" class="form-control-file"
                                        style='height: 32px;' onchange="loadFilee(event)">
                                    <img id="output" style="max-width: 150px; max-height: 150px; border-radius: 0%;">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- model end --}}
    </div>

    <!-- /.card -->
@endsection
