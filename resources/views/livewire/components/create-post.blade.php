<form wire:submit.prevent="createpost" class="card w-100 shadow-xss rounded-xxl border-0 ps-4 pt-4 pe-4 pb-3 mb-3">
    @php
        $icons = new \Feather\IconManager();
    @endphp

    <div class="card-body p-0">
        <a href="#"
           class=" font-xssss fw-600 text-grey-500 card-body p-0 d-flex align-items-center"><i
                class="btn-round-sm font-xs text-primary me-2 bg-greylight"
                style="margin-top: -10px;">{!! $icons->getIcon('edit-3') !!}</i>Create Post</a>
    </div>
    <div class="card-body p-0 mt-3 position-relative">
        <figure class="avatar position-absolute ms-2 mt-1 top-5"><img src="{{ auth()->user()->profile ? asset('storage/profiles/' . basename(auth()->user()->profile)) : 'images/profile-4.png' }}"
                                                                      alt="image"
                                                                      class="shadow-sm rounded-circle w30">
        </figure>
        <textarea wire:model.lazy="content" name="content" required
                  class="h100 bor-0 w-100 rounded-xxl p-2 ps-5 font-xssss text-grey-500 fw-500 border-light-md theme-dark-bg"
                  cols="30" rows="10" placeholder="What's on your mind?"></textarea>
    </div>
    @error('content') <span class="error">{{ $message }}</span> @enderror

    <div wire:loading wire:target="images">Uploading...</div>
    <div wire:loading wire:target="video">Uploading...</div>

    @if($images)
        @foreach($images as $image)
            <img src="{{ $image->temporaryUrl() }}" alt="" width="200px">
        @endforeach
    @endif

    @if($video)
        <video src="{{ $video->temporaryUrl() }}" height="170px" width="200px" controls>
            <source src="{{ $video->temporaryUrl() }}" type="video/mp4">
        </video>
    @endif


    <style>
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }
    </style>


    <div class="card-body d-flex p-0 mt-0">

        <a href="#"
           class="d-flex align-items-center font-xssss fw-600 ls-1 text-gray-700 text-dark pe-4 upload-btn-wrapper">
            <i class="font-md text-success me-2">{!! $icons->getIcon('image') !!}</i>
            <span class="d-none-xs">Photo<input type="file" multiple id="file" wire:model="images"></span>
        </a>

        <a href="#"
           class="d-flex align-items-center font-xssss fw-600 ls-1 text-gray-700 text-dark pe-4 upload-btn-wrapper">
            <i class="font-md text-success me-2">{!! $icons->getIcon('video') !!}</i>
            <span class="d-none-xs">Video<input type="file" id="file" wire:model="video"></span>
        </a>

        <button class="outline-none ms-auto bg-none" type="submit" style="outline: none;
                                                                          border: none;
                                                                          border-radius: 43px;">
            <i class="text-gray-900 btn-round-md bg-greylight font-xss">
                {!! $icons->getIcon('send') !!}
            </i>

        </button>


    </div>
</form>

