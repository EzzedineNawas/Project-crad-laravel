@extends('products.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>تعديل البيانات</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">عودة</a>
            </div>
        </div>
    </div>
    <br>
    <form action="{{route('products.update',$product->id)}}" method="post" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>الاسم الاول:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('LastName')?' has-error':''}}">
                    <strong>الاسم الاخير:</strong>
                    <input type="text" name="LastName" value="{{ $product->LastName }}" class="form-control" placeholder="LastName">
                    <span class="text-danger">{{$errors->first('LastName')}}</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('age')?' has-error':''}}">
                    <strong>عمرك:</strong>
                    <input type="number" name="age" value="{{ $product->age }}" class="form-control" placeholder="age">
                    <span class="text-danger">{{$errors->first('age')}}</span>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('detail')?' has-error':''}}">
                    <strong>تفاصيل:</strong>
                    <textarea class="form-control" rows="6" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                    <span class="text-danger">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">تعديل</button>
            </div>
        </div>
    </form>
@endsection