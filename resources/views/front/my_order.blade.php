@extends('front.master')
@section('content')
<div class="container">
    <div class="row py-5">

        <div class="col-md-12">
            <h2 class="text-center">Your Order's</h2>

            <table class="table table-bordered bg-dark text-white">

                <thead  class="text-center">

                    <th>Sno.</th>
                    <th>order_id</th>
                    <th>product_name</th>
                    <th>product_image</th>
                    <th>product_price</th>
                    <th>product_quantity</th>
                </thead>

                <tbody  class="text-center">
                    <?php $i=1;
                     ?>
                    @foreach ($order_item as $ot)
                    <tr>
                        <td>{{$i++;}}</td>
                    <td>{{$ot->order_id}}</td>

                    <td>{{$ot->product_name}}</td>
                    <td><img src="{{url('/upload/'.$ot->product_image)}}" style="height: 50px; width: 50px; border-radius: 100%;"></td>
                    <td>{{$ot->product_price}}</td>
                    <td>{{$ot->product_quantity}}</td>
                </tr>
                    @endforeach

                </tbody>

            </table>
        </div>


    </div>
</div>
@endsection
