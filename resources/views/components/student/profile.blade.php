<div>
    <div class="h3">Profile</div>
    <div class="flex flex-col">
        <div class="flex items-center mt-4">
            @if($student->profile)
            <div class="flex items-center w-full">
                <div class="h4 text-secondary">100%</div>
                <div class="flex-1 border-b border-2 border-teal-600 mx-4"></div>
            </div>
            @else
            <div class="h4">40%</div>
            <div class="relative flex-1 items-center mx-4">
                <div class="absolute z-5 w-full border-b border-2 border-slate-200"></div>
                <div class="absolute z-10 border-b border-2 border-blue-600 w-2/5"></div>
            </div>
            @endif

        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-person"></i></div>
            <div>{{$student->name}}</div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-envelope-at"></i></div>
            <div>{{$student->email}}</div>
        </div>
        @if($student->profile)
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-phone"></i></div>
            <div>{{$student->profile->phone}}</div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-translate"></i></div>
            <div>{{$student->profile->language->name}}</div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-globe"></i></div>
            <div>{{$student->profile->country->name}}</div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-pin-map"></i></div>
            <div>{{$student->profile->province}}</div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-geo-alt"></i></div>
            <div>{{$student->profile->city}}</div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-envelope"></i></div>
            <div>{{$student->profile->address}}</div>
        </div>
        @endif
        <div class="divider mt-4"></div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-key"></i></div>
            <a href="" class="link">Change Password</a>
        </div>
    </div>
</div>