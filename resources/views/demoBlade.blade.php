<h1>Demo blade template engine phần 2</h1>

{{-- @php
$number = 20;
$number2 = 4;
@endphp

<h3>{{$number + $number2}} </h3>

<h2>Comment trong blade</h2>
@for ($i = 0; $i < 10; $i++)
    <p>Value: {{$i}}</p>
@endfor
<hr>
 <?php
for($i = 0; $i<10; $i++){
    echo "<p>".$i."</p>";
}
?>  --}}

<!--  Sử dụng cú pháp @{{}} khi có dùng framework js -->
{{-- <script>
    Hello, @{{name}}
</script> --}}
@php
// $message = "day la message";
@endphp
<!-- Ham @ include giup goi view con va view cha-->
<!-- Việc tách ra các view con này sẽ giúp việc sau này code dễ bảo trì sửa chữa hơn-->
{{-- parts.notice là 1 view --}}
@include('parts.notice') 
