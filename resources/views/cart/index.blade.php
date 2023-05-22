@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')

<div class="card border-dark"style="min-height: 600px; ">
    <div class="card-header bg-dark text-white " >
       Giỏ hàng
    </div>
    <div class="card-body ">
        <table class="table table-dark table-striped text-center ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng mua</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["products"] as $product) 
                <tr>
                    <td>{{$product->getId()}}</td>
                    <td>{{$product->getName()}}</td>
                    <td>{{$product->getPrice()}}</td>
                    <td>{{session('products')[$product->getId()]}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a class="btn btn-outline-secondary mb-2"><b>Tổng tiền:</b>{{$viewData["total"]}}VND</a>
                @if(count($viewData["products"]) > 0)
                <a href="{{route('cart.purchase')}}" class="btn btn-primary text-white mb-2">Thanh toán</a>
                <a href="{{route('cart.delete')}}">
                <button class="btn btn-danger mb-2">
                    Xóa tất cả sản phẩm khỏi giỏ hàng
                </button>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection