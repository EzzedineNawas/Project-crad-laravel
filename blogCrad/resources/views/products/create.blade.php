@extends('products.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>اضافة بيانات جديده</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.index')}}" class="btn btn-primary">عوده</a>
            </div>
        </div>
    </div>
    <form action="{{route('products.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?' has-error':''}}">
                    <strong>الاسم الاول:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('LastName')?' has-error':''}}">
                    <strong>اسم الاخير:</strong>
                    <input type="text" name="LastName" class="form-control" placeholder="LastName">
                    <span class="text-danger">{{$errors->first('LastName')}}</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('age')?' has-error':''}}">
                    <strong>عمر:</strong>
                    <input type="number" name="age" class="form-control" placeholder="age">
                    <span class="text-danger">{{$errors->first('age')}}</span>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('detail')?' has-error':''}}">
                    <strong>تفاصيل:</strong>
                    <textarea name="detail" id="detail"  rows="6" placeholder="Detail" class="form-control"></textarea>
                    <span class="text-danger">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">اضافة جديد</button>
            </div>
        </div>
    </form>
@endsection