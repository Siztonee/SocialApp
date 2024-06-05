@extends('layouts.app')

@section('content')
    <div class="main-content right-chat-active">
        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left pe-0 ps-lg-3 ms-0 me-0" style="max-width: 100%;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="chat-wrapper p-3 w-100 position-relative scroll-bar bg-white theme-dark-bg">
                            @forelse($friends as $friend)

                                <ul class="email-message">
                                    <li>
                                        <a href="{{ route('user.chat', $friend->uuid) }}" class="rounded-3 bg-lightblue theme-light-bg">
                                            <div class="email-user">
                                                <span class="btn-round-xss ms-0 bg-success me-2"></span>
                                                <figure class="avatar position-relative w40 mt-3">
                                                    <img src="{{ asset('storage/profiles/' . basename($friend->profile)) }}" alt="image"
                                                         class="p-1 bg-white rounded-xl w-100">
                                                </figure>
                                                <h6 class="font-xssss text-grey-900 text-grey-900 mb-0 mt-0 fw-700" style="margin-left: 15px;">
                                                    {{ '@' . $friend->username }}
                                                </h6>
                                            </div>
                                            <div class="email-text text-grey-500 fw-600 font-xssss">
                                                Hey Cak, Could you free now? Can you look and read the brief first before...
                                            </div>
                                            <div class="email-time text-grey-500 fw-600">12:48PM</div>
                                        </a>
                                    </li>
                                </ul>
                        </div>
                        @empty
                            <p class="list-group-item">No notifications</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
