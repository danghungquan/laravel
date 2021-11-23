@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">list Category</h3>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Total product</th>
                    <th>Status</th>
                    <th>
                        <a href="{{Route('category.create')}}" class="btn btn-success">Add category</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $model)
                <tr>
                    <td>{{$model->id}}</td>
                    <td>{{$model->name}}</td>
                    <td>{{$model->join_product->count()}}</td>
                    <td>
                        @if($model->status == 0)
                        <span class="badge badge-danger">Private</span>
                        @else
                        <span class="badge badge-success">Public</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('category.edit',$model->id)}}" class="btn btn-xs btn-primary">Edit</a>
                        <a href="{{route('category.destroy',$model->id)}}" class="btn btn-xs btn-danger btndelete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{$datas->appends(request()->all())->links()}}
        </div>
        <form action="" id="form-delete" method="POST">
            @csrf @method('DELETE')
        </form>
    </div>
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