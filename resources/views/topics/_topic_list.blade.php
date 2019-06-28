@if (count($topics))
    <ul class="media-list">
        @foreach($topics as $topic)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$topic->user_id]) }}">
                        <img src="{{ $topic->user->avatar }}" class="thumbnail media-object"
                             style="width: 52px;height: 52px;" title="{{ $topic->user->name }}" alt="">
                    </a>
                </div>

                <div class="media-body">
                    <div class="media-heading">
                        <a href="{{ route('topics.show', [$topic->id]) }}" title="{{ $topic->title }}">
                            {{ $topic->title }}
                        </a>
                        <a href="{{ route('topics.show', [$topic->id]) }}" class="pull-right">
                            <span class="badge">
                                {{ $topic->reply_count }}
                            </span>
                        </a>
                    </div>

                    <div class="media-body meta">
                        <a href="#" title="{{ $topic->category->name }}">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true">
                                {{ $topic->category->name }}
                            </span>
                        </a>
                        <span>🆙</span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $topic->updated_at->diffForHumans() }}</span>
                    </div>
                </div>
            </li>
            @if(! $loop->last)
                <hr>
            @endif
            @endforeach
    </ul>
    @else
    <div class="empty-block">暂无数据</div>
@endif