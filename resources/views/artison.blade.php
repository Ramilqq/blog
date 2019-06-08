@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard Новости</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
						<div style="margin-top: 2%;">
							<div class="row">   
								<div class="col-md-12" align="center">   
								    <img src="/image/{{$data['image']->max}}" class="img-fluid"/>
								</div>
							</div>
							<div class="row">	
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								  <div class="card-body">
                                    
								    <h5 class="card-title">{{$data['name']}}</h5>
								    <p class="card-text">{!! $data['text'] !!}</p>
                                    
								  </div>
								</div>
							</div>
						</div>	
                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <p>Автор: {{ $data['autor'] }}</p>
                            </div>
                            <div class="col-md-4">
                                <p>{{ Lang::choice('lang.coments', $data['coments']) }}:
                                {{ $data['coments'] ? $data['coments'] : 0 }} </p>
                            </div>
                            <div class="col-md-4">
                                <p>Дата: {{ date("d m Y", strtotime($data['created_at']))}}</p>
                            </div>
                        </div>
                    <a type="button" class="btn btn-primary btn-sm btn-block" style="margin-top: 5%;" href="{{$data['url']}}">Назад</a> 
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