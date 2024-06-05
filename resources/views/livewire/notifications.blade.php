<div class="dropdown-menu dropdown-menu-end p-4 rounded-3 border-0 shadow-lg" aria-labelledby="dropdownMenu3">

    <h4 class="fw-700 font-xss mb-4">Notification</h4>
    @forelse ($notifications as $notification)
        <div class="card bg-transparent-card w-100 border-0 ps-5 mb-3">
            <img src="{{ asset('storage/profiles/' . basename($notification->sender->profile)) ? asset('storage/profiles/' . basename($notification->sender->profile)) : 'images/profile-4.png' }}"
                 alt="user" class="w40 position-absolute left-0">
            <h5 class="font-xsss text-grey-900 mb-1 mt-0 fw-700 d-block">
                {{ $notification->sender->first_name . ' ' . $notification->sender->last_name }}
                <span class="text-grey-400 font-xsssss fw-600 float-right mt-1">
                {{ $notification->created_at->diffForHumans() }}
            </span>
            </h5>
            <h6 class="text-grey-500 fw-500 font-xssss lh-4">{{ $notification->message }}</h6>
        </div>
    @empty
        <li class="list-group-item">No notifications</li>
    @endforelse



</div>
