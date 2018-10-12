<div class="media">
    <a class="pull-left" href="#">
        <img src="//www.gravatar.com/avatar/{{ md5($message->membre->email) }} ?s=64"
             alt="{{ $message->membre->name }}" class="img-circle">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{ $message->membre->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>