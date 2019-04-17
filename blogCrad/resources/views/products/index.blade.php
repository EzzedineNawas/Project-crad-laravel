@extends('layouts.lay')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>مشروع برمجة خادم نصفي</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.create')}}" class="btn btn-success">اضف صنف جديد</a>

            </div>
        </div>
    </div>
    @if($message=Session::get('success'))

        <div class="alert alert-success">
            <p class="btn btn-success">{{$message}}</p>
        </div>
    @endif
    {{$products->links()}}
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>No</th>
                <th>الاسم الاول</th>
                <th>الاسم الاخير</th>
                <th>العمر</th>
                <th>تفاصيل</th>
                <th width="320px"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)

                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->LastName}}</td>
                    <td>{{$product->age}}</td>
                    <td>{{$product->detail}}</td>
                    <td>
                        <form action="{{route('products.destroy',$product->id)}}" method="post" role="form">
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-info">عرض</a>
                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">تعديل</a>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden"  name="_method" value="DELETE">
                            <button type="submit"  class="btn btn-danger">حذف</button>
                        </form>


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{$products->links()}}
@endsection
