@extends('main')
@section('title', "")
@section('content')
<div class="cat_1 cat_1_d">
    @foreach($pr_cats as $pr)
		<div class="item_cat_1">
			<img src="/storage/{{$pr->img}}" class="img_cat_1 imf_addd_{{$pr->id}}">
			<h2 onclick="window.location.replace('/product/{{$pr->id}}')">{{$pr->title}}</h2>
			<p class="description">{{$pr->description}}</p>
			<p class="price">{{number_format($pr->price, 0, ',', ' ')}} ₽</p>
			<div class="circle_list">
            @foreach(explode(',', $pr->colors) as $key=>$p)
				<div style="background: {{$p}}" class="colborder col_{{$key}}_{{$pr->id}}" onclick="selectcolor({{$pr->id}},{{$key}})">

				</div>
            @endforeach
				
			</div>
		</div>
        @endforeach
		
		
		
		
	</div>
@endsection