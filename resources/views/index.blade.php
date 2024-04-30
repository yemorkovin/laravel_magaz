@extends('main')
@section('title', 'Главная')
@section('content')
<div class="container">
        <div class="carousel">
            <div class="carousel-window">
                <div class="carousel-slides">
                    @foreach($sliders as $slider)
                    <div class="carousel-item">
                        <img src="/storage/{{$slider->img}}" alt="">
                    </div>
                    @endforeach
                   
                </div>
            </div>
            <a href="#" class="carousel-prev" style="display: none">
                <span class="carousel-prev-icon">&lt;</span>
            </a>
            <a href="#" class="carousel-next" style="display: none">
                <span class="carousel-next-icon">&gt;</span>
            </a>
        </div>
    </div>
<div class="menu_1">
		<ul>
			<li>
				<a href="#" class="active">
					популярное
				</a>
			</li>
            @foreach($cats as $cat)
			<li>
				<a href="#">
					{{$cat->title}}
				</a>
			</li>
            @endforeach
			
		</ul>
	</div>
	<div class="cat_1">
        
    @foreach(\App\Models\Product::where('pop', 1)->get() as $pr)
		<div class="item_cat_1"  >
			<img src="/storage/{{$pr->img}}" class="img_cat_1 imf_addd_{{$pr->id}}" alt="{{$pr->title}}">
			<h2 onclick="window.location.replace('/product/{{$pr->id}}')">{{$pr->title}}</h2>
			<p class="description">{{$pr->description}}</p>
			<p class="price">{{number_format($pr->price, 0, ',', ' ')}} ₽</p>
			<div class="circle_list">
                @foreach(explode(',', $pr->colors) as $key=>$p)
				<div style="background: {{$p}};" class="colborder col_{{$key}}_{{$pr->id}}" onclick="selectcolor({{$pr->id}},{{$key}})">

				</div>
                @endforeach
				
			</div>
		</div>
    @endforeach
	
		
	
		
	</div>
	<div class="new_r">
		<div class="new_r_title">
			<h2>Новинки</h2>
			<p>Все новые товары <img src="images/right.png"></p>
		</div>
		
	</div>
	<div class="cat_1">
    @foreach(\App\Models\Product::where('new', 1)->get() as $pr)
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


	<div class="new_r">
		<div class="new_r_title">
			<h2>Идеи для интерьеров</h2>
			<p>Все идеи <img src="images/right.png"></p>
		</div>
		
	</div>
	<div class="cat_1">
	@foreach(\App\Models\Idea::all() as $pr)
		<div class="item_cat_1">
			<img src="/storage/{{$pr->img}}" class="img_cat_1">
			
		</div>
	@endforeach
		
		
	</div>
    @endsection