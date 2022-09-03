@extends('front.master')
@section('content')
    <style>
        .online-mention2 {
            box-shadow: 0 10px 16px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19) !important;
            padding: 50px;
            margin: 27px 7px 77px;
        }



        .online-mention1 {
            box-shadow: 0 10px 16px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19) !important;
            padding: 30px;

        }

        .online-mention {
            box-shadow: 0 10px 16px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19) !important;
            padding: 50px;
            margin: 60px 100px 80px;
        }

        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active,
        .accordion:hover {
            background-color: #ccc;
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>


    <div class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 online-mention2 ">
                    <h2 class="text-center">Personal Information and Orders</h2><br>

                    <button class="accordion">Change Password</button>
                    <div class="panel">

                        <form method="post" action="{{url('/update_password') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="billing-details">

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3"><br>
                                                <div class="form-group">
                                                    <label>Old Password<span class="required">*</span></label>
                                                    <input type="password" name="password" value="{{Auth::user()->password}}"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3"><br>
                                                <div class="form-group">
                                                    <label>New Password <span class="required">*</span></label>
                                                    <input type="text" name="n_password"
                                                        class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-lg-3 col-md-3"><br>
                                                <div class="form-group">
                                                    <label>Confirm Password <span class="required">*</span></label>
                                                    <input type="text" name="confirm_password" value=""
                                                        class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-2 col-md-2 my-3"><br><br>
                                                <button type="submit" class="accordion">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div><br><br>

                    <button class="accordion">Change Address</button>

                    <div class="panel">

                        <form method="post" action="{{ url('') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-10 col-md-10"><br>
                                    <div class="billing-details">

                                        <div class="row">
                                            @foreach($orders as $order)
                                         <div class="col-lg-10 col-md-10">
                                                <div class="form-group">
                                                    <label>Old Address <span class="required">*</span></label>
                                                    <input type="text" name="address" value="{{$order->address}}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 my-3"><br>
                                                <a href="{{ url('') }}" class="btn btn-info">Edit</a>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="col-lg-10 col-md-10">
                                            <div class="form-group">
                                                <label>New Address <span class="required">*</span></label>
                                                <input type="text" name="address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 my-3"><br>
                                            <a href="{{ url('') }}" class="btn btn-info">Edit</a>
                                        </div>

                                    </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div><br><br>


                    <a href="{{url('/my_order')}}" class="accordion btn btn">My Orders</a>

                    <div class="panel">

                    </div><br><br>


                </div>
            </div>


        </div>

    </div>


    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
@endsection
