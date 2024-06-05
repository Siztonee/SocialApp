<div class="main-content right-chat-active">
    @php
        $icons = new \Feather\IconManager();
    @endphp

    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-left">
            <!-- loader wrapper -->
            <div class="preloader-wrap p-3">
                <div class="box shimmer">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
                <div class="box shimmer mb-3">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
                <div class="box shimmer">
                    <div class="lines">
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                        <div class="line s_shimmer"></div>
                    </div>
                </div>
            </div>
            <!-- loader wrapper -->

            <div class="row feed-body">
                <div class="col-xl-8 col-xxl-9 col-lg-8">


                    <div class="card w-100 shadow-none bg-transparent bg-transparent-card border-0 p-0 mb-0">
                        <div class="owl-carousel category-card owl-theme overflow-hidden nav-none">
                            <div class="item">
                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                     class="card w125 h200 d-block border-0 shadow-none rounded-xxxl bg-dark overflow-hidden mb-3 mt-3">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#">
                                            <span class="btn-round-lg bg-white"><i class="font-lg"
                                                                                   style="margin-top: -10px;">{!! $icons->getIcon('plus') !!}</i></span>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-700 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                Add Story </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                     class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3"
                                     style="background-image: url(images/s-1.jpg);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                <img src="images/user-11.png" alt="image"
                                                     class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                            </figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                Victor Exrixon </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                     class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3"
                                     style="background-image: url(images/s-2.jpg);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                <img src="images/user-12.png" alt="image"
                                                     class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                            </figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                Surfiya Zakir </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                     class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3">
                                    <video autoplay loop class="float-right w-100">
                                        <source src="images/s-4.mp4" type="video/mp4">
                                    </video>
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                <img src="images/user-9.png" alt="image"
                                                     class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                            </figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                Goria Coast </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                     class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3 me-1">
                                    <video autoplay loop class="float-right w-100">
                                        <source src="images/s-3.mp4" type="video/mp4">
                                    </video>
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                <img src="images/user-4.png" alt="image"
                                                     class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                            </figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                Hurin Seary </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                     class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3"
                                     style="background-image: url(images/s-5.jpg);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                <img src="images/user-3.png" alt="image"
                                                     class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                            </figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                David Goria </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div data-bs-toggle="modal" data-bs-target="#Modalstory"
                                     class="card w125 h200 d-block border-0 shadow-xss rounded-xxxl bg-gradiant-bottom overflow-hidden cursor-pointer mb-3 mt-3"
                                     style="background-image: url(images/s-6.jpg);">
                                    <div class="card-body d-block p-3 w-100 position-absolute bottom-0 text-center">
                                        <a href="#">
                                            <figure class="avatar ms-auto me-auto mb-0 position-relative w50 z-index-1">
                                                <img src="images/user-2.png" alt="image"
                                                     class="float-right p-0 bg-white rounded-circle w-100 shadow-xss">
                                            </figure>
                                            <div class="clearfix"></div>
                                            <h4 class="fw-600 position-relative z-index-1 ls-1 font-xssss text-white mt-2 mb-1">
                                                Seary Victor </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @livewire("components.create-post")

                    @forelse($posts as $post)
                        <div class="card w-100 shadow-xss rounded-xxl border-0 p-4 mb-3">
                            <div class="card-body p-0 d-flex">
                                <a class="text-dark" href="{{ route('user.page', ['uuid' => $post->user->uuid]) }}">
                                <figure class="avatar me-3">
                                    <img src="{{ $post->user->profile ? asset('storage/profiles/' . basename($post->user->profile)) : 'images/profile-4.png' }}" alt="image"
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
                                            <source src="{{ asset('storage') . '/' . $post_media->file}}" type="video/mp4"/>
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


                                <button onclick="openModal()" class="border-0 d-flex align-items-center fw-600 text-grey-900 text-dark lh-26 font-xssss">
                                    <i class="text-dark text-grey-900 btn-round-sm font-lg" style="margin-top: -10px;">
                                        {!! $icons->getIcon('message-circle') !!}
                                    </i>
                                    <span class="d-none-xss">{{ $post->comments }}</span>
                                </button>

                                <div id="myModal" class="comments_modal">
                                    <div class="comments_modal-content overflow-scroll h450">
                                        <span class="comments_close-btn" onclick="closeModal()"style="margin-top: -10px;">
                                            {!! $icons->getIcon('x') !!}
                                        </span>
                                        <h2>Comments</h2>
                                        @livewire('post-comments', [$post->id])
                                    </div>
                                </div>

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
                                <input type="text" required placeholder="Write your comment here..." name="comment" wire:model.lazy="comment" class="p-2 border-0 bg-grey text-grey-500 font-xssss lh-32 fw-600 rounded-3 w-100 theme-light-bg">
                            </form>
                        </div>
                    @empty
                        <h1 class="text-center text-danger">No post found!</h1>
                    @endforelse


                    <div class="card w-100 text-center shadow-xss rounded-xxl border-0 p-4 mb-3 mt-3">
                        <div class="snippet mt-2 ms-auto me-auto" data-title=".dot-typing">
                            <div class="stage">
                                <div class="dot-typing"></div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-xl-4 col-xxl-3 col-lg-4 ps-lg-0">
                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                        <div class="card-body d-flex align-items-center p-4">
                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Friend Request</h4>
                            <a href="{{ route('requests') }}" class="fw-600 ms-auto font-xssss text-primary">Show</a>
                        </div>
                    </div>



                    <div class="card w-100 shadow-xss rounded-xxl border-0 mb-3">
                        <div class="card-body d-flex align-items-center p-4">
                            <h4 class="fw-700 mb-0 font-xssss text-grey-900">Event</h4>
                            <a href="default-event.html" class="fw-600 ms-auto font-xssss text-primary">See all</a>
                        </div>
                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                            <div class="bg-success me-2 p-3 rounded-xxl"><h4
                                    class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                        class="ls-1 d-block font-xsss text-white fw-600">FEB</span>22</h4></div>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Meeting with clients <span
                                    class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor 24 new work, NY 10010</span>
                            </h4>
                        </div>

                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                            <div class="bg-warning me-2 p-3 rounded-xxl"><h4
                                    class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                        class="ls-1 d-block font-xsss text-white fw-600">APR</span>30</h4></div>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Developer Programe <span
                                    class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor 24 new work, NY 10010</span>
                            </h4>
                        </div>

                        <div class="card-body d-flex pt-0 ps-4 pe-4 pb-3 overflow-hidden">
                            <div class="bg-primary me-2 p-3 rounded-xxl"><h4
                                    class="fw-700 font-lg ls-3 lh-1 text-white mb-0"><span
                                        class="ls-1 d-block font-xsss text-white fw-600">APR</span>23</h4></div>
                            <h4 class="fw-700 text-grey-900 font-xssss mt-2">Aniversary Event <span
                                    class="d-block font-xsssss fw-500 mt-1 lh-4 text-grey-500">41 madison ave, floor 24 new work, NY 10010</span>
                            </h4>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>


    <script>
        // Функция для открытия модального окна
        function openModal() {
            document.getElementById('myModal').style.display = 'block';
        }

        // Функция для закрытия модального окна
        function closeModal() {
            document.getElementById('myModal').style.display = 'none';
        }

        // Закрытие модального окна при клике за его пределами
        window.onclick = function(event) {
            var modal = document.getElementById('myModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</div>

