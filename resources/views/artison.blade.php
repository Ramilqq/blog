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
                                <p>{{ Lang::choice('lang.coments', count($data['coments'])) }}:
                                {{ count($data['coments']) }} </p>
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



<section class="container">
    <div class="row">
        <div class="col-md-12">
            @if (!Auth::check())
            <div class="panel" id="respond">
                <h3 id="reply-title">Leave a <span>Reply</span> <small><a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a></small></h3>
                <form action="sendmail.PHP" method="post" id="commentform"> 
                    <div class="panel-body">
                        <textarea class="form-control" rows="2" placeholder="Добавьте Ваш комментарий"></textarea>
                        <div class="mar-top clearfix">
                            <input type="hidden" id="coment_post_ID" name="coment_post_ID" value="{{$data['id']}}">
                            <input type="hidden" id="coment_parent" name="coment_parent" value="">
                            <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Добавить</button>
                            <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                            <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
                            <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
                        </div>
                    </div>
                </form> 
            </div>
            @else
            <p>Для добавления коментарий нужно авторизоваться</p>
            @endif
            @if (count($data['coments']) > 0)
                <div class="panel">
                    <div class="panel-body">
                     <!--===================================================-->
                     @php
                        $com = $data['com']
                     @endphp
                    @foreach($com as $key => $value)

                        @if ($key !== 0)
                            @continue
                        @endif

                        @include('site.coment', ['items'=>$value])

                    @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

















































        </div>
    </div>
</section>





@endsection