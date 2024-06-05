<div>
    @forelse($postComments as $comment)
        <div class="col">
            <div class="d-flex">
                <a class="text-dark" href="{{ route('user.page', ['uuid' => $comment->user->uuid]) }}">
                    <figure class="avatar me-3">
                        <img src="{{ $comment->user->profile ? asset('storage/profiles/' . basename($comment->user->profile)) : 'images/profile-4.png' }}" alt="image"
                             class="shadow-sm rounded-circle w35">
                    </figure>
                    <h4 class="fw-700 text-grey-600 font-xssss">{{ $comment->user->username }}
                        <span class="font-xssss fw-500 lh-3 text-grey-500">{{ $comment->created_at->diffForHumans() }}</span>
                </a>
                    <p class="fw-700 text-grey-600 font-xssss mt-1">{{ $comment->comment }}</p>
                    </h4>
            </div>
            <div>
            </div>
        </div>
    @empty
        <p class="text-center text-danger">Not found comments for this post</p>
    @endforelse
</div>

