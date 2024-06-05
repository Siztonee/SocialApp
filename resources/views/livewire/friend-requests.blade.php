
<div class="main-content right-chat-active">
    @forelse($requests as $request)
        <div class="card-body d-flex pt-4 ps-4 pe-4 pb-0 border-top-xs bor-0">
            <figure class="avatar me-3">
                <img src="{{ asset('storage/profiles/' . basename($request->user->profile)) ? asset('storage/profiles/' . basename($request->user->profile)) : 'images/profile-4.png' }}" alt="image" class="shadow-sm rounded-circle w45">
            </figure>
            <h4 class="fw-700 text-grey-900 font-xssss mt-1">
                {{ $request->user->first_name . ' ' . $request->user->last_name }}
            </h4>
        </div>
        <div class="card-body d-flex align-items-center pt-0 ps-4 pe-4 pb-4">
            <button wire:click="acceptFriend('{{ $request->user->uuid }}')"
               class="p-2 lh-20 w100 bg-primary-gradiant me-2 text-white text-center font-xssss fw-600 ls-1 rounded-xl">Confirm</button>
            <button wire:click="rejectFriend('{{ $request->user->uuid }}')"
               class="p-2 lh-20 w100 bg-grey text-grey-800 text-center font-xssss fw-600 ls-1 rounded-xl">Delete</button>
        </div>
    @empty
        <li class="list-group-item">No requests</li>
    @endforelse
</div>

