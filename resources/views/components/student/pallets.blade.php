<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <a href="" class="pallet-box">
        <div class="flex-1">
            <div class="title">Profile</div>
            <div class="h2">@if($user->profile) 100% @else 40% @endif</div>
        </div>
        <div class="ico bg-green-100">
            <i class="bi bi-person-circle text-green-600"></i>
        </div>
    </a>
    <a href="" class="pallet-box">
        <div class="flex-1">
            <div class="title">Courses</div>
            <div class="h2">{{$user->enrollments->count()}}/1</div>
        </div>
        <div class="ico bg-orange-100">
            <i class="bi bi-book text-orange-600"></i>
        </div>
    </a>
    <a href="" class="pallet-box">
        <div class="flex-1 ">
            <div class="title">Task Finished</div>
            <div class="h2">5/10</div>
        </div>
        <div class="ico bg-teal-100">
            <i class="bi bi-card-checklist text-teal-600"></i>
        </div>
    </a>
    <a href="" class="pallet-box">
        <div class="flex-1">
            <div class="title">Scorage</div>
            <div class="h2">60%</div>
        </div>
        <div class="ico bg-sky-100">
            <i class="bi bi-graph-up text-sky-600"></i>
        </div>
    </a>
</div>