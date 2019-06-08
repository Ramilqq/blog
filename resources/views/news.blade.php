@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Новости</div>
                <div class="card-body col-md-10">
                    @if(!$news)
                        <h2>Данный раздел находится на стадии разработки</h2>
                    @else
	                    @foreach ($news as $item)
						<div class="card" style="margin-top: 2%;">
							<div class="row">   
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">   
								    <img src="{{ asset('image/'.$item->image->mini) }}" class="img-fluid"
                                    width="466px" height="260" />
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								    <div class="card-body">
    								    <h5 class="card-title">{{ $item['name'] }}</h5>
    								    <p class="card-text">{{ $item['desc'] }}</p>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;">
                                                <a href="{{route('artison',['id'=>$item['id']])}}" class="btn btn-primary">Читать</a>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;">
                                                {{ $item->created_at->format('d m Y') }}
                                            </div>                                        
                                            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 5px;">
                                                <p>Автор:{{ $item->user['name']}}</p>
                                                <p>{{ count($item->coments) ? count($item->coments) : 0 }} {{ Lang::choice('lang.coments', count($item->coments)) }}</p>
                                            </div>
                                        </div>
								    </div>
								</div>
							</div>
						</div>
	                 	@endforeach	   
                     @endif	
                </div>

                {{ $news->links() }}

            </div>
        </div>

    
</div>




@endsection