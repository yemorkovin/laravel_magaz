@extends('main')
@section('title', "")
@section('content')
<h2 class="pr_1">{{$product->title}}</h2>
<p class="pr_2">{{$product->description}}</p>
<div class="products">
    
    <div class="prod_item_1">
        <img src="/storage/{{$product->img}}">
        
    </div>
    <div class="prod_item_2">
        {!!$product->full_text!!}
        
    </div>
    <div class="prod_item_3">
        <h3>{{number_format($product->price, 0, ',', ' ')}} ₽</h3>
        <a class="btn_cart" onclick="clickbtnproduct({{$product->id}})">Добавить в корзину</a>

        <input type="number" name="" style="width: 206px;height: 28px;text-align: center;margin-top: 22px; @if($count==0)display: none; @endif" value="{{$count}}" class="inp_nnn">
        
    </div>
</div>

@endsection