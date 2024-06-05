<div class="main-content right-chat-active">
    @php
        $icons = new \Feather\IconManager();
    @endphp
    <div class="middle-sidebar-bottom">
        <div class="middle-sidebar-left pe-0 ps-lg-3 ms-0 me-0" style="max-width: 100%;">
            <div class="row">
                <div class="alert-info d-felx">
                    <a href="{{ route('user.chat.list') }}">Back</a>
                    <a href="{{ route('user.page', $user->uuid) }}">{{ $user->username }}</a>
                </div>
                <div class="col-lg-12 position-relative">
                    <div class="chat-wrapper pt-0 w-100 position-relative scroll-bar bg-white theme-dark-bg">
                        <div class="chat-body p-3">
                            <div class="messages-content pb-5" id="messages-content">
                                @forelse($messages as $message)
                                    @if($message['sender'] != auth()->user()->username)
                                        <div class="message-item">
                                            <div class="message-wrap">{{ $message['message'] }}
                                                <div class="time text-grey-400">01:35 PM</div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="message-item outgoing-message">
                                            <div class="message-wrap">{{ $message['message'] }}
                                                <div class="time text-grey-400">01:35 PM<i class="ti-double-check text-info"></i></div>
                                            </div>
                                        </div>
                                    @endif
                                @empty
                                    <div class="alert-info">
                                        <h3 class="text-info">No messages, start dialog...</h3>
                                    </div>
                                @endforelse

                            </div>
                        </div>
                    </div>
                    <div class="chat-bottom dark-bg p-3 shadow-none theme-dark-bg" style="width: 98%;">
                        <form wire:submit="sendMessage()" id="message_form" class="chat-form d-flex">
                            <div class="form-group"><input wire:model="message" id="message_input" name="message" type="text" placeholder="Start typing.." class="form-control"></div>
                            <button type="submit" id="message_send" class="bg-current mt-1">
                                <i class="text-white">{!! $icons->getIcon('send') !!}</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
