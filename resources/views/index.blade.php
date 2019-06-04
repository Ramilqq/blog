@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard Новости</div>

                <div class="card-body">

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
                                            <div class="col-md-3" style="margin: 5px;">
                                                <a href="{{route('artison',['id'=>$item['id']])}}" class="btn btn-primary" style="margin-right: 5%;">Читать</a>
                                            </div>
                                            <div class="col-md-3" style="margin: 5px;">
                                                {{ $item->created_at->format('d m Y') }}
                                            </div>                                        
                                            <div class="col-md-3" style="margin: 5px;">
                                                <p>Автор:{{ $item->user['name']}}</p>
                                            </div>
                                        </div>
								    </div>
								</div>
							</div>
						</div>
	                 	@endforeach	   
                     @endif	
                    <button type="button" class="btn btn-success btn-sm btn-block" style="margin-top: 5%;">Все новости</button> 
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <div class="row justify-content-center" style="margin-top: 5%;">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard Новости</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    INDEX.PHP
                </div>
            </div>
        </div>
    </div>
</div>




@endsection