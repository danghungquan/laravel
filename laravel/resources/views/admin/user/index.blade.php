@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">list user</h3>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Created_at</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $model)
                <tr>
                    <td>{{$model->id}}</td>
                    <td>{{$model->name}}</td>
                    <td>{{$model->email}}</td>
                    <td>{{$model->created_at->format('d/m/Y')}}</td>
                    <td><a class="badge badge-warning">{{($model->role == 1 ) ? 'admin' : 'custumer' }}</a></td>
                    <td>
                        @if($model->status == 0)
                        <a class="badge badge-danger">Private</a>
                        @else
                        <a class="badge badge-success">Public</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('user.edit',$model->id)}}" class="btn btn-xs btn-primary">Edit</a>
                        <a href="{{route('user.destroy',$model->id)}}" class="btn btn-xs btn-danger btndelete">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <form action="" method="POST" id="form-delete">
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