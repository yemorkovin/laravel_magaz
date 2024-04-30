 @extends('main')
@section('title', "")
@section('content')
<style>
   .bnIwHM {
    cursor: default;
    display: flex;
    margin-top: 30px;
}
.embla {
    overflow: hidden;
}
.embla__container {
    display: -moz-box;
    display: flex;
}
.hQDzST {
    padding-top: 20px;
    padding-bottom: 13px;
    border: 1px solid rgba(35, 35, 36, 0.5);
    border-radius: 6px;
    min-width: 270px;
    margin-right: 22px;
}
.tqZdV {
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
}
.tqZdV {
    display: flex;
    -webkit-box-pack: center;
    justify-content: center;
}
.fEGBZr {
    margin-top: 17px;
    text-align: center;
    font: 400 16px / 22px "Proxima Nova", sans-serif;
    color: rgb(35, 35, 36);
    white-space: pre-line;
}

</style>
<h2 class="pr_1">{{\App\Models\Data::where('id', 3)->first()->title}}</h2>
<div class="content">
   {!!\App\Models\Data::where('id', 3)->first()->text!!}
</div>
@endsection