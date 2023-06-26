@extends('master')
@section('content')
    <div class="container">
        <div id="content">
            <form method="post" class="beta-form-checkout">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="your-order">
                            <div class="your-order-head">
                                <h5>Đơn hàng của bạn</h5>
                            </div>
                            <div class="your-order-body">
                                <div class="your-order-item">
                                    <div>  
                                        @if (Session::has('cart'))
                                            @foreach ($product_cart as $product)
                                                <div class="media">
                                                    <img width="35%"
                                                        src="source/image/product/{{ $product['item']['image'] }}"
                                                        alt="" class="pull-left">
                                                    <div class="media-body">
                                                        <p class="font-large">{{ $product['item']['name'] }}</p>
                                                        <span class="color-gray your-order-info">Số lượng:
                                                            {{ $product['qty'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <!-- end one item -->
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="your-order-item">
                                    <div class="pull-left">
                                        <p class="your-order-f18">Tổng:</p>
                                    </div>
                                    <div class="pull-right">
                                        <h5 class="color-black">
                                            @if (Session::has('cart'))
                                                {{ number_format($totalPrice) }}
                                            @else
                                                0
                                            @endif đồng
                                        </h5>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="beta-btn primary">Đặt hàng <i
                                        class="fa fa-chevron-right"></i></button>
                            </div>
                        </div> <!-- .your-order -->
                    </div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
