<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/clients/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/clients/css/style.css')}}">
    <title> Validate </title>
</head>
<body>
    <div class="container">
        {{-- @if ($errors->any())
    <div class="alert alert-danger">
        {{ $invalid }}
    </div>
    @endif --}}
    @error('msg')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
    @enderror
        <div class="col-6">
            <form action="" method="POST">
                <div class="form-group">
                  <label for="tensanphama">Ten san pham</label>
                  <input type="text" name="tensanpham" class="form-control" id="tensanpham" value="{{old('tensanpham')}}" placeholder="Nhap ten san pham">
                </div>
                @error('tensanpham')
                <span style="color: red">
                    {{$message}}
                </span>
                @enderror
                <div class="form-group">
                    <label for="giasanpham">Gia san pham</label>
                    <input type="text" name="giasanpham" class="form-control" id="giasanpham" value="{{old('giasanpham')}}" placeholder="Nhap gia san pham">
                </div>
                @error('giasanpham')
                <div>
                    <span style="color: red">
                        {{$message}}
                    </span>
                </div>
                @enderror
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @csrf
              </form>
        </div>
    </div>

</body>
</html>
