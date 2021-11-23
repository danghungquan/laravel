@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">list product</h3>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Sale date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $model)
                <tr>
                    <td>{{$model->id}}</td>
                    <td>{{$model->name}}</td>
                    <td>
                        <img src="{{url('public/uploads')}}/{{$model->image}}" width='70'>
                    </td>
                    <td>{{$model->join_category->name}}</td>
                    <td>{{$model->created_at->format('m-d-Y')}}</td>
                    <td>
                        @if($model->status == 0)
                        <span class="badge badge-danger">No processing</span>
                        @else
                        <span class="badge badge-success">Already bought</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('product.edit',$model->id)}}" class="btn btn-xs btn-primary">Handling</a>
                        <a href="{{route('product.destroy',$model->id)}}" class="btn btn-xs btn-danger btndelete">
                            Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$datas->appends(request()->all())->links()}}
        </div>
    </div>
    <form action="" id="form-delete" method="POST">
        @csrf @method('DELETE')
    </form>
</div>

@endsection
@section('css')

@endsection

@section('js')
<script>
    $('.btndelete').click(function(ev) {
        ev.preventDefault(); //ko cho load
        var href = $(this).attr('href'); // láy action của href từ thẻ a có class btndelete
        $('form#form-delete').attr('action', href); // láy cái href từ thẻ a gán vào action của form
        if (confirm('Bạn có chắc muốn xóa không?')) {
            $('form#form-delete').submit();

        }
    });
</script>
@endsection