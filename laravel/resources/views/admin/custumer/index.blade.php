@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">list custumer</h3>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                    <th>Sex</th>
                    <th>Total product</th>
                    <th>Year_of_birth</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datas as $model)
                <tr>
                    <td>{{$model->id}}</td>
                    <td>{{$model->full_name}}</td>
                    <td>{{$model->email}}</td>
                    <td>{{$model->phone}}</td>
                    <td>
                        @if($model->sex == 1)
                        Male
                        @else
                        Female
                        @endif
                    </td>
                    <td>{{$model->join_product->count()}}</td>
                    <td>{{$model->year_of_birth}}</td>
                    <td>
                        <a href="{{route('custumer.destroy',$model->id)}}" class="btn btn-xs btn-danger btndelete">Delete</a>
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