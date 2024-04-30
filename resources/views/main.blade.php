<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/app.css">
	 <link rel="stylesheet" href="/slider.css">
	 <script type="text/javascript" src="/jquery-3.7.1.min.js"></script>
    <script src="/slider.js"></script>
   <script>
    document.addEventListener('DOMContentLoaded', function() {
        new Slider(document.querySelector('.carousel'));
    });
</script>
<style type="text/css">
	
</style>
</head>
<body>
	<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b27552590/crm/site_button/loader_3_anab5v.js');
</script>
	<div class="menu_main_mob">
		<p align="right" class="rclose">X</p>
		<ul>
			<li>
				<a href="">
					Шоурумы
				</a>
			</li>
			<li>
				<a href="">
					доставка
				</a>
			</li>
			<li>
				<a href="">
					дизайнерам
				</a>
			</li>
			<li>
				<a href="">
					фото покупателей
				</a>
			</li>
		</ul>	
	</div>
	<div class="nav_1">
		<p>
			Есть вопросы? <a href="#">Напишите нам в чат!</a>
		</p>
	</div>
	<div class="menu_mobile">
		<div class="logo">
			ЛОГОТИП
		</div>
		<div class="df">
			<a href='#'>
				<img src="/images/search.png">
			</a>
			<a href='#'>
				<img src="/images/phone.png">
			</a>
			<a href='#'>
				<img src="/images/like.png">
			</a>
			<a class="click_menu">
				<img src="/images/menu.png">
			</a>
		</div>
		
	</div>
	<div class="nav_2">
		<ul class="left_menu">
			<li>
				<a href="">
					Шоурумы
				</a>
			</li>
			<li>
				<a href="">
					доставка
				</a>
			</li>
			<li>
				<a href="">
					дизайнерам
				</a>
			</li>
			<li>
				<a href="">
					фото покупателей
				</a>
			</li>
		</ul>
		<ul class="right_menu">
			<li>
				<img src="/images/city.png">&nbsp;&nbsp;&nbsp;Прага
			</li>
			<li>
				<a href="">
					Заказать обратный звонок
				</a>
			</li>
			<li>
				<a href="">
					8 (800) 800 88 88
				</a>
			</li>
			
		</ul>
	</div>
	<div class="clear"></div>
	<div class="menu_main">
		<div class="logo">
			ЛОГОТИП
		</div>
		<div class="search">
			<img src="/images/search.png" class="img_s">
			<input type="text" name="" class="inp_s" placeholder="Поиск по каталогу">
		</div>
		<div class="r_r">
			<ul>
				<!--<li>
					<a href="#">
						<div><img src="/images/like.png"></div>
						<div>
							Избранное
						</div>
					</a>
				</li>-->
				<li>
					<a href="/cart">
						<div><img src="/images/sh.png"></div>
						<div>
							Корзина
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="menu_1 mm_mm">
		<ul>
			<li>
			@if($_SERVER['REQUEST_URI'] =='/')
				<a href="/" class="active">
					Главная
				</a>
			@else
			<a href="/">
					Главная
				</a>
			@endif
				
			</li>
			@foreach($cats as $cat)
			<li>
				@if($_SERVER['REQUEST_URI'] =='/cat/'.$cat->id)
					<a href="/cat/{{$cat->id}}" class="active">
						{{$cat->title}}
					</a>
				@else
					<a href="/cat/{{$cat->id}}">
						{{$cat->title}}
					</a>
				@endif
				
			</li>
            @endforeach
			
			<li>
				<a href="#">
					В наличии
				</a>
			</li>
			<li>
				<a href="#">
					акции
				</a>
			</li>
		</ul>
	</div>
	@yield('content')
	<div class="footer">
		<ul>
			<li>
				<a href="#" class="head">
					Информация
				</a>
			</li>
			<li>
				<a href="/infopotrebitel">
					Информация для потребителей
				</a>
			</li>
			<li>
				<a href="#">
					Сотрудничество и дизайн интерьера
				</a>
			</li>
			<li>
				<a href="/reckclear">
					Рекомендации по уходу и чистке
				</a>
			</li>
			<li>
				<a href="/politika">
					Политика конфиденциальности
				</a>
			</li>
			<!--<li>
				<a href="#">
					Охрана труда
				</a>
			</li>-->
		</ul>
		<ul>
			<li >
				<a href="#" class="head">
					Покупателям
				</a>
			</li>
			<li>
				<a href="/garantiya">
					Гарантия и возврат
				</a>
			</li>
			<li>
				<a href="#">
					Способы оплаты
				</a>
			</li>
			<li>
				<a href="/dostavka">
					Условия доставки
				</a>
			</li>
			<li>
				<a href="#">
					Обращение в отдел качества
				</a>
			</li>
			<li>
				<a href="#">
					Публичная оферта
				</a>
			</li>
		</ul>


		<ul>
			<li>
				<a href="#" class="head">
					О компании
				</a>
			</li>
			
			<li>
				<a href="#">
					Портфолио
				</a>
			</li>
			<li>
				<a href="#">
					Реквизиты
				</a>
			</li>
		</ul>
		<ul>
			<li>
				<a href="#" class="head">
					Контакты
				</a>
			</li>
			<li>
				<a href="#" class="head">
					8 (800) 800 88 88
				</a>
			</li>
			<li>
				<a href="#">
					с 09:00 до 18:00
				</a>
			</li>
			<li>
				<a href="#">
					mail@mail.com
				</a>
			</li>
			<!--<li>
				<a href="#">
					Написать в WhatsApp
				</a>
			</li>
			<li>
				<a href="#">
					Написать в Telegram
				</a>
			</li>-->
			<li>
				<a href="#">
					Шоурум
				</a>
			</li>
		</ul>
	</div>
	<div class="copy">
		<div class="left">
			<p>© ООО «название компании», 2023</p>
		</div>
		<div class="right">
			<ul>
				<li>
					<a href="#">
						<img src="/images/instagram.png">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/images/facebook.png">
					</a>
				</li>
				<li>
					<a href="#">
						<img src="/images/youtube.png">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript">
		$('.click_menu').on('click', function(){
			$('.menu_main_mob').show();
		});
		
		$('.rclose').on('click', function(){
			$('.menu_main_mob').hide();
		});
				/**/
		function selectcolor(id, idc){
			$.ajax({
					url: '/ajaxcolor',
					method: 'post',
					dataType: 'html',
					data: {'_token':'{{csrf_token()}}',id:id,idc:idc },
					success: function(data){
					$('.imf_addd_'+id).attr('src', '/storage/'+data);
					$('.colborder').css('border', 'none');
					$('.col_'+idc+'_'+id).css('border', '1px solid #000');
				}
				});
		} 

		function clickbtnproduct(id){
			$.ajax({
					url: '/addcartproduct',
					method: 'post',
					dataType: 'html',
					data: {'_token':'{{csrf_token()}}',id:id},
					success: function(data){
					console.log(data);
					if(data==1){
						$('.inp_nnn').val(parseInt($('.inp_nnn').val()) + 1);

					}
					if(data==3 || data==2){
						$('.inp_nnn').show();
						$('.inp_nnn').val(1);
					}
				}
				});
		}
		function plusclick(id){
			$.ajax({
					url: '/addcartproduct',
					method: 'post',
					dataType: 'html',
					data: {'_token':'{{csrf_token()}}',id:id},
					success: function(data){
					console.log(data);
					if(data==1){
						//$('.inp_nnn').val(parseInt($('.inp_nnn').val()) + 1);
						let count_old = parseInt($('.count_'+id).text());
						$('.count_'+id).text(count_old+1);
						$.ajax({
							url: '/getsumma',
							method: 'post',
							dataType: 'html',
							data: {'_token':'{{csrf_token()}}'},
							success: function(data){
								$('.summa_ajax').text(data);
							
							}
						});
					}
					
				}
				});
		}
		function minusclick(id){
			$.ajax({
					url: '/addcartproductminus',
					method: 'post',
					dataType: 'html',
					data: {'_token':'{{csrf_token()}}',id:id},
					success: function(data){
					//console.log(data);
					//if(data==1){
						//$('.inp_nnn').val(parseInt($('.inp_nnn').val()) + 1);
						let count_old = parseInt($('.count_'+id).text());
						$('.count_'+id).text(count_old-1);
						if(count_old-1 == 0){
							$('.tr_'+id).hide();
						}
						$.ajax({
							url: '/getsumma',
							method: 'post',
							dataType: 'html',
							data: {'_token':'{{csrf_token()}}'},
							success: function(data){
								$('.summa_ajax').text(data);
							
							}
						});
					//}
					
				}
				});
		}
	</script>
</body>
</html>