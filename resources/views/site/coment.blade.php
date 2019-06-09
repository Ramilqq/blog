@foreach($items as $item)
    <div class="media-block" id="li-comment-{{$item->id}}">
        <a class="media-left" href="#">
            @php
            $hash = md5($item->users->email)
            @endphp
            <img class="img-circle img-sm" alt="Профиль пользователя" src="https://www.gravatar.com/avatar/{{$hash}}{{config('settings.avatarComent')}}">
        </a>
        <div class="media-body" id="comment-{{$item->id}}">
            <div class="mar-btm">
            <a href="#" class="btn-link text-semibold media-heading box-inline">Максим</a>
            <div class="commentNumber">#&nbsp;</div>
             <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i>{{ is_object($item->created_at) ? $item->created_at->format('d m Y H:i') : ''}}</p>
            </div>
            <p>{{ $item->text }}</p>
            <div class="pad-ver">
                <div class="btn-group">
                <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                </div>
                <a class="btn btn-sm btn-default btn-hover-primary" href="#respond" onclick="return addComment.moveForm(&quot;comment-{{$item->id}}&quot;, &quot;{{$item->id}}&quot;, &quot;respond&quot;, &quot;{{$item->new_id}}&quot;)">Ответить</a>
            </div>
            <hr>
            <!-- Комментарий -->
            @if ( isset($com[$item->id]) )
            <div>
                @include ('site.coment', ['items'=>$com[$item->id]])
            </div>
            @endif
        </div>
    </div>
@endforeach