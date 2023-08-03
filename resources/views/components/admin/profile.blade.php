<div>
    <div class="h3">Profile</div>
    <div class="flex flex-col">
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-person"></i></div>
            <div>{{ $user->name }}</div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-envelope-at"></i></div>
            <div>{{ $user->email }}</div>
        </div>
        <div class="divider mt-4"></div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-key"></i></div>
            <a href="" class="link">Change Password</a>
        </div>
    </div>
</div>