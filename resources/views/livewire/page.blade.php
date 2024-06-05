<div class="main-content right-chat-active">
    @php
        $icons = new \Feather\IconManager();
    @endphp

    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-left">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3 mt-3 overflow-hidden">
                        <div class="card-body position-relative h300 bg-image-cover bg-image-center"
                             style="background-image: url({{ asset('storage/profiles/' . basename($user->profile_bg)) }});"></div>
                        <div class="card-body d-block pt-4 text-center position-relative">
                            <figure class="avatar mt--6 position-relative w75 z-index-1 w100 z-index-1 ms-auto me-auto">
                                <img src="{{ asset('storage/profiles/' . basename($user->profile)) }}" alt="image"
                                     class="p-1 bg-white rounded-xl w-100">
                            </figure>

                            <h4 class="font-xs ls-1 fw-700 text-grey-900">
                                {{ $user->first_name.' '. $user->last_name }}
                                <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">
                                    {{ '@' . $user->username }}
                                </span>
                            </h4>
                            <div class="d-flex align-items-center pt-0 position-absolute left-15 top-10 mt-4 ms-2">
                                <h4 class="font-xsss text-center d-none d-lg-block text-grey-700 fw-600 ms-2 me-2">
                                    Posts:
                                    <b class="text-grey-900 mb-1 font-xss fw-700 d-inline-block ls-3 text-dark">{{ $postsCount }}</b>
                                </h4>
                                <h4 class="font-xsss text-center d-none d-lg-block text-grey-700 fw-600 ms-2 me-2">
                                    Friends:
                                    <b class="text-grey-900 mb-1 font-xss fw-700 d-inline-block ls-3 text-dark">{{ $friendsCount }}</b>
                                </h4>
                            </div>
                            @if($user->id != auth()->user()->id)
                                <div class="d-flex align-items-center justify-content-center position-absolute right-15 top-10 mt-2 me-2">
                                    <a href="#"
                                       class="d-none d-lg-block bg-success p-3 z-index-1 rounded-3 text-white font-xsssss text-uppercase fw-700 ls-3">Add
                                        Friend</a>
                                    <a href="{{ url('/chat/'.$user->id) }}" class="d-none d-lg-block bg-greylight btn-round-lg ms-2 rounded-3 text-grey-700">
                                        <i class="font-md" style="margin-top: -10px;">{!! $icons->getIcon('mail') !!}</i>
                                    </a>
                                </div>
                            @elseif($user->id == auth()->user()->id)
                                <div class="d-flex align-items-center justify-content-center position-absolute right-15 top-10 mt-2 me-2">
                                    <a href="{{ route('user.page.edit', ['uuid' => auth()->user()->uuid]) }}"
                                       class="d-none d-lg-block bg-info p-3 z-index-1 rounded-3 text-white font-xsssss text-uppercase fw-700 ls-3">
                                        Edit Page
                                    </a>
                                    <a href="{{ route('user.page.edit', ['uuid' => auth()->user()->uuid]) }}" class="d-none d-lg-block bg-greylight btn-round-lg ms-2 rounded-3 text-grey-700">
                                        <i class="font-md" style="margin-top: -10px;">{!! $icons->getIcon('settings') !!}</i>
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="card w-100 rounded-xxl border-0 mb-3">
                            <div class="card-body d-block p-4">
                                <h4 class="fw-700 mb-3 font-xsss text-grey-900">About</h4>
                                <p class="fw-500 text-grey-500 lh-24 font-xssss mb-0">
                                    {{ $user->description ? $user->description : 'Description' }}
                                </p>
                            </div>

                            <hr style="border-radius: 80%;">

                            <div class="d-flex">
                                <div class="card-body d-block">
                                    <div class="d-flex">
                                    <i class="text-grey-500 me-3 font-lg"
                                       style="margin-top: -10px;">{!! $icons->getIcon('user') !!}</i>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-0">
                                        Gender
                                        <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $user->gender }}</span>
                                    </h4>
                                    </div>
                                </div>

                                <div class="card-body d-block">
                                    <div class="d-flex">
                                        <i class="text-grey-500 me-3 font-lg"
                                           style="margin-top: -10px;">{!! $icons->getIcon('info') !!}</i>
                                        <h4 class="fw-700 text-grey-900 font-xssss mt-0">
                                            Relationship
                                            <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $user->relationship }}</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>



                            <div class="d-flex">
                                <div class="card-body d-block pt-0">
                                    <div class="d-flex">
                                    <i class="text-grey-500 me-3 font-lg"
                                       style="margin-top: -10px;">{!! $icons->getIcon('book') !!}</i>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-0">
                                        Education
                                        <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $user->education }}</span>
                                    </h4>
                                    </div>
                                </div>

                            </div>

                            <div class="d-block">
                                <div class="card-body d-flex pt-0">
                                    <i class="text-grey-500 me-3 font-lg"
                                       style="margin-top: -10px;">{!! $icons->getIcon('map-pin') !!}</i>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-0">
                                        Location
                                        <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $user->location }}</span>
                                    </h4>
                                </div>

                                <div class="card-body d-block pt-0">
                                    <div class="d-flex">
                                        <i class="text-grey-500 me-3 font-lg"
                                           style="margin-top: -10px;">{!! $icons->getIcon('briefcase') !!}</i>
                                        <h4 class="fw-700 text-grey-900 font-xssss mt-0">
                                            Job
                                            <span class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $user->job }}</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            @if($user->id == auth()->user()->id)
                <div class="p-3">
                    @livewire("components.create-post")
                </div>
            @endif


                <div class="p-3">
                    @forelse($posts as $post)
                        <div class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3">
                            <div class="card-body p-0 d-flex">
                                <a class="text-dark" href="{{ route('user.page', ['uuid' => $post->user->uuid]) }}">
                                    <figure class="avatar me-3">
                                        <img
                                            src="{{ $post->user->profile ? asset('storage/profiles/' . basename($post->user->profile)) : 'images/profile-4.png' }}"
                                            alt="image"
                                            class="shadow-sm rounded-circle w45">
                                    </figure>
                                    <h4 class="fw-700 text-grey-900 font-xssss mt-1">{{ $post->user->username }}
                                </a>
                                <span
                                    class="d-block font-xssss fw-500 mt-1 lh-3 text-grey-500">{{ $post->created_at->diffForHumans() }}</span>
                                </h4>
                                <a href="#" class="ms-auto" id="dropdownMenu2" data-bs-toggle="dropdown"
                                   aria-expanded="false"><i
                                        class="text-grey-900 btn-round-md bg-greylight font-xss"
                                        style="margin-top: -10px;">{!! $icons->getIcon('more-horizontal') !!}</i></a>
                                <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg"
                                     aria-labelledby="dropdownMenu2">
                                    <div class="card-body p-0 d-flex">
                                        <i class="text-grey-500 me-3 font-lg"
                                           style="margin-top: -10px;">{!! $icons->getIcon('bookmark') !!}</i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Save Link <span
                                                class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Add this to your saved items</span>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="text-grey-500 me-3 font-lg"
                                           style="margin-top: -10px;">{!! $icons->getIcon('alert-circle') !!}</i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide Post <span
                                                class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="text-grey-500 me-3 font-lg"
                                           style="margin-top: -10px;">{!! $icons->getIcon('alert-octagon') !!}</i>
                                        <h4 class="fw-600 text-grey-900 font-xssss mt-0 me-4">Hide all from Group <span
                                                class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span>
                                        </h4>
                                    </div>
                                    <div class="card-body p-0 d-flex mt-2">
                                        <i class="text-grey-500 me-3 font-lg"
                                           style="margin-top: -10px;">{!! $icons->getIcon('lock') !!}</i>
                                        <h4 class="fw-600 mb-0 text-grey-900 font-xssss mt-0 me-4">Unfollow Group <span
                                                class="d-block font-xsssss fw-500 mt-1 lh-3 text-grey-500">Save to your saved items</span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 me-lg-5">
                                <p class="fw-500 text-grey-500 lh-26 font-xssss w-100">{{ $post->content }}</p>
                            </div>
                            <div class="card-body d-block p-0">
                                <div class="row ps-2 pe-2">
                                    @php
                                        $post_media = App\Models\PostMedia::where('post_id', $post->id)->first();
                                    @endphp

                                    @if($post_media && $post_media->file_type == 'image')

                                        @php
                                            $medias = json_decode($post_media->file);
                                        @endphp

                                        @foreach($medias as $media)
                                            @if($loop->index > 2)
                                                @continue
                                            @endif
                                            <div class="p-1 {{ count($medias) == 1 ? 'col-12' : 'col-sm-4 col-xs-4' }}">
                                                <a href="{{ asset('storage') . '/' . $media}}" data-lightbox="roadtrip"
                                                   class="{{ $loop->index == 2 ? 'position-relative d-block' : '' }}">
                                                    <img src="{{ asset('storage') . '/' . $media }}"
                                                         class="rounded-3 w-100" alt="image">
                                                    @if($loop->index == 2 && count($medias) >= 4)
                                                        <span class="img-count font-sm text-white ls-3 fw-600">
                                                    <b>+{{ count($medias) - 3 }}</b>
                                                </span>
                                                    @endif
                                                </a>
                                            </div>
                                        @endforeach

                                    @elseif($post_media && $post_media->file_type == 'video')
                                        <video

                                            id="my-video"
                                            class="video-js"
                                            controls
                                            preload="auto"
                                            src="{{ asset('storage') . '/' . $post_media->file}}"
                                            data-setup="{}"
                                            style="width: 100%; height: auto;">
                                            <source src="{{ asset('storage') . '/' . $post_media->file}}"
                                                    type="video/mp4"/>
                                            <p class="vjs-no-js">
                                                To view this video please enable JavaScript, and consider upgrading to a
                                                web browser that
                                                <a href="https://videojs.com/html5-video-support/" target="_blank"
                                                >supports HTML5 video</a
                                                >
                                            </p>
                                        </video>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body d-flex p-0 mt-3">
                                @php
                                    $like = \App\Models\Like::where([
                                        'post_id' => $post->id,
                                        'user_id' => auth()->user()->id
                                    ])->first();
                                @endphp
                                @if($like)
                                    <a href="#" wire:click.prevent="dislike({{ $post->id }})"
                                       class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                        <i class="text-black me-2 btn-round-xs font-xss"
                                           style="margin-top: -10px;">{!! $icons->getIcon('heart', ['fill' => 'red']) !!}</i>
                                        {{ $post->likes ?? 0 }}
                                    </a>
                                @else
                                    <a href="#" wire:click.prevent="like({{ $post->id }})"
                                       class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss me-2">
                                        <i class="text-black me-2 btn-round-xs font-xss"
                                           style="margin-top: -10px;">{!! $icons->getIcon('heart') !!}</i>
                                        {{ $post->likes ?? 0 }}
                                    </a>
                                @endif


                                <a href="#"
                                   class="d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                        class="text-dark text-grey-900 btn-round-sm font-lg"
                                        style="margin-top: -10px;">{!! $icons->getIcon('message-circle') !!}</i><span
                                        class="d-none-xss">{{ $post->comments }}</span></a>
                                <a href="#" id="dropdownMenu21" data-bs-toggle="dropdown" aria-expanded="false"
                                   class="ms-auto d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss"><i
                                        class="text-grey-900 text-dark btn-round-sm font-lg"
                                        style="margin-top: -10px;">{!! $icons->getIcon('share-2') !!}</i><span
                                        class="d-none-xs">Share</span></a>
                                <div class="dropdown-menu dropdown-menu-end p-4 rounded-xxl border-0 shadow-lg"
                                     aria-labelledby="dropdownMenu21">
                                    <h4 class="fw-700 font-xss text-grey-900 d-flex align-items-center">Share <i
                                            class="ms-auto font-xssss btn-round-xs bg-greylight text-grey-900 me-2"
                                            style="margin-top: -10px;">{!! $icons->getIcon('x') !!}</i>
                                    </h4>
                                    <h4 class="fw-700 font-xssss mt-4 text-grey-500 d-flex align-items-center mb-3">Copy
                                        Link</h4>
                                    <input type="text" value="https://socia.be/1rGxjoJKVF0"
                                           class="bg-grey text-grey-500 font-xssss border-0 lh-32 p-2 font-xssss fw-600 rounded-3 w-100 theme-dark-bg">
                                </div>
                            </div>
                            <form method="post" wire:submit.prevent="saveComment({{ $post->id }})">
                                <input type="text" required placeholder="Write your comment here..." name="comment"
                                       wire:model.lazy="comment"
                                       class="p-2 border-0 bg-grey text-grey-500 font-xssss lh-32 fw-600 rounded-3 w-100 theme-light-bg">
                            </form>
                        </div>
                        @empty
                            <h1 class="text-center text-danger">No post found!</h1>
                        @endforelse
                    </div>


            </div>
        </div>


    </div>
</div>
