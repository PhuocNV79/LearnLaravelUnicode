@extends('layouts.client')

{{-- Bai Blade 3 --}}
{{-- @section('content')
    <h1>TRANG CHỦ TRONG SECTION</h1>
    <button type="button" class="btn">Click</button>
@endsection --}}

{{-- Bai Blade 4 --}}
@section('content')
    <section>
        <div class="container">
            <h1>Trang chủ</h1>
        </div>
    </section>
    {{-- Bài Blade 6 --}}
    @env('production')
        <p>Moi truong production</p>
    @elseenv('test')
    <p>Moi truong test</p>
    @elseenv('local')
    <p>Moi truong local</p>
    @endenv
@endsection

@section('sidebar')
    {{-- @parent --}}
    <h3>HOME SIDE BAR</h3>
@endsection

@section('title')
    {{$title}}
@endsection

{{-- Bai Blade 3 --}}
{{-- @section('js')
    <script type="text/javascript">
        document.querySelector('.btn').onclick = function(){
            alert("Click thanh cong");
        }
    </script>
@endsection --}}