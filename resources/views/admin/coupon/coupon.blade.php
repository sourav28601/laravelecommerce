@extends('admin.layouts.master')
@section('page-title','Coupon')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h3 class="card-title">Category Display</h3>
            <button type="button" class="btn btn-primary mb-1 " data-toggle="modal" style="float: right";
                data-target="#aa">
                <i class="fa fa-plus"></i>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead class="text-center">
                    <tr>
                        <th>S.NO.</th>
                        <th>Coupon Code</th>
                       
                        <th>Coupon type</th>
                        <th>Coupon value</th>
                        <th>Cart Min Value</th>
                        <th>Expired on</th>
                        <th>Date</th>
                        <th>Coupon Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $i=1 ?>
                 @foreach ($data as $d)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $d->id }}</td>
                            <td>{{ $d->coupon_type }}</td>
                            <td>{{ $d->coupon_value }}</td>
                            <td>{{ $d->cart_min_value }}</td>
                            <td>{{ $d->date }}</td>
                            <td>{{ $d->expired_on }}</td>
                            <td>{{ $d->coupon_status }}</td>

                            <td>
                                <a href="{{ url('admin/category/edit/' . $d->id) }}" type="button"
                                    class="btn btn-outline-secondary mb-1 me-2"><i class="fa fa-pen-to-square"></i></a>
                                <a href="{{ url('admin/category/delete/' . $d->id) }}" type="button"
                                    class="btn btn-outline-danger mb-1 me-2"><i class="fa fa-trash-can"></i></a>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
                <tfoot class="text-center">
                    <tr>
                        <th>S.NO.</th>
                        <th>Coupon Code</th>
                        <th>Coupon type</th>
                        <th>Coupon value</th>
                        <th>Cart Min Value</th>
                        <th>Expired on</th>      
                        <th>Date</th>
                        <th>Coupon Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
        <!--Add Delivery Boy-->
        <div class="modal fade modal-md" id="aa">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h3 class="modal-tittle"><b>Add Coupon </b></h3>
                        <button type="button" class="btn btn-danger" style="border-radius: 50px"
                            data-dismiss="modal">x</button>
                    </div>

                    <div class="modal-body">

                        <form method="post" action="{{ url('admin/coupon_insert') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Coupon Code</label>
                                <input type="text" name="coupon_code" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Coupon Value</label>
                                <input type="text" name="coupon_value" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Coupon type</label>
                                <select name="coupon_type" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Fixed">Fixed</option>
                                    <option value="Percentage">Percentage</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Cart Min. Value</label>
                                <input type="text" name="cart_min_value" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Added On</label>
                                <input type="date" name="date" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Expire On</label>
                                <input type="date" name="expired_on" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <br>
                                <input type="radio" name="coupon_status" value="1" required> Active
                                <br>
                                <input type="radio" name="coupon_status" value="0" required> Inactive
                            </div>


                            <input type="submit" name="submit" value="ADD" class="btn btn-info ">
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--Add Delivery Boy-->
    @endsection