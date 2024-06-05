@extends('layouts.app')

@section('content')
    <div class="main-content bg-lightblue theme-dark-bg right-chat-active">

        <div class="middle-sidebar-bottom">
            <div class="middle-sidebar-left">
                <div class="middle-wrap">
                    <div class="card w-100 border-0 bg-white shadow-xs p-0 mb-4">
                        <div class="card-body p-4 w-100 bg-current border-0 d-flex rounded-3">
                            <h4 class="font-xs text-white fw-600 ms-4 mb-0 mt-2">Edit Page</h4>
                        </div>
                        <div class="card-body p-lg-5 p-4 w-100 border-0">

                            @if (session()->has('message'))
                                <div class="alert alert-success mt-3" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <form action="{{ route('user.page.update', ['uuid' => $user->uuid]) }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('patch')

                                <div class="card-body position-relative h240 bg-image-cover bg-image-center"
                                     style="background-image: url({{ asset('storage/profiles/' . basename($user->profile_bg)) }});"></div>
                                <div class="card-body d-block pt-4 text-center position-relative">
                                    <figure
                                        class="avatar mt--6 position-relative w75 z-index-1 w100 z-index-1 ms-auto me-auto">
                                        <img src="{{ asset('storage/profiles/' . basename($user->profile)) }}"
                                             alt="image"
                                             class="p-1 bg-white rounded-xl w-100">
                                    </figure>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">First Name</label>
                                                <input value="{{ $user->first_name }}" name="first_name" type="text"
                                                       class="form-control">
                                                @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Last Name</label>
                                                <input value="{{ $user->last_name }}" name="last_name" type="text"
                                                       class="form-control">
                                                @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Username</label>
                                                <input value="{{ $user->username }}" name="username" type="text"
                                                       class="form-control">
                                                @error('username') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Education</label>
                                                <input value="{{ $user->education }}" name="education" type="text"
                                                       class="form-control">
                                                @error('education') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Job</label>
                                                <input value="{{ $user->job }}" name="job" type="text"
                                                       class="form-control">
                                                @error('job') <span class="error">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-group">
                                                <label class="mont-font fw-600 font-xsss">Relationship</label>
                                                <select name="relationship" class="form-select"
                                                        aria-label="Default select example">
                                                    <option
                                                        value="Single" {{ $user->relationship == 'Single' ? 'selected' : '' }}>
                                                        Single
                                                    </option>
                                                    <option
                                                        value="Marred" {{ $user->relationship == 'Marred' ? 'selected' : '' }}>
                                                        Marred
                                                    </option>
                                                    <option
                                                        value="Searching" {{ $user->relationship == 'Searching' ? 'selected' : '' }}>
                                                        Searching
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Description</label>
                                            <textarea name="description" type="text" style="height: 100px;"
                                                      class="form-control w-100">{{ $user->description }}</textarea>
                                            @error('description') <span class="error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Profile Image</label>
                                            <input class="form-control" value="{{ $user->profile }}" name="profile" type="file"
                                            @error('profile') <span class="error">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label class="mont-font fw-600 font-xsss">Profile Background</label>
                                            <input class="form-control" value="{{ $user->profile_bg }}" name="profile_bg" type="file"
                                            @error('profile_bg') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-0 mt-2">
                                        <button type="submit"
                                                class="border-0 bg-current text-center text-white font-xsss fw-600 p-3 w175 rounded-3 d-inline-block">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
