 @extends('main')
@section('title', "")
@section('content')
<h2 class="pr_1">{{\App\Models\Data::where('id', 2)->first()->title}}</h2>
<div class="content">
   {!!\App\Models\Data::where('id', 2)->first()->text!!}
</div>
@endsection