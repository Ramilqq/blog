@extends('layouts.admin')

@section('content')
<div class="row">
	@if($news)
		<div>
			<table class="table">
				<thead>
					<tr>
						<th>№</th>
						<th>Имя</th>
						<th>Псевдоним</th>
						<th>Катринка</th>
						<th>Дата создания</th>
						<th>Удалить</th>
					</tr>
				</thead>
				<tbody>
					@foreach($news as $key => $item)
						<tr>
							<td>{{$item->id}}</td>
							<td>{!! Html::link(route('adminnewsedit', ['id'=>$item->id]), $item->name, ['alt'=>$item->name]) !!}</td>
							<td>{{$item->title}}</td>
							<td>{{$item->image}}</td>
							<td>{{$item->created_at}}</td>
							<td>
								{!! Form::open(['url'=>route('adminnewsedit', ['id'=>$item->id]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
									{{ method_field('DELETE') }}
									{!! Form::button('delete',['class'=>'btn btn-danger btn-sm', 'type'=>'submit']) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@endif
	{!! Html::link(route('adminnewsadd'), 'Add', ['class'=>'btn btn-info']) !!}
</div>
@endsection