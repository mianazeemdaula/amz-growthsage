<div>
    <div class="h3">Profile</div>
    <div class="flex flex-col">
        <div class="flex items-center mt-4">
            @if ($user->profile)
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
            <div>{{ $user->name }}</div>
        </div>
        <div class="flex items-center justify-between text-sm mt-4">
            <div class="w-8"><i class="bi-hash"></i></div>
            @php
            $ref=Str::substr(url("/web/register/$user->code"),0,25);
            @endphp
            <div class="flex-1">
                {{$ref}}...
            </div>

            <div id="referral" class="hidden">{{url("/web/register/$user->code")}}</div>
            <div class="w-8 hover:cursor-pointer" onclick="copy()"><i class="bi-clipboard" id='clipboard'></i></div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-envelope-at"></i></div>
            <div>{{ $user->email }}</div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-phone"></i></div>
            <div>
                @if ($user->profile)
                {{ $user->profile->phone }}
                @endif
            </div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-translate"></i></div>
            <div>
                @if ($user->profile)
                {{ $user->profile->language->name }}
                @endif
            </div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-globe"></i></div>
            <div>
                @if ($user->profile)
                {{ $user->profile->country->name }}
                @endif
            </div>
        </div>

        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-pin-map"></i></div>
            <div>
                @if ($user->profile)
                {{ $user->profile->province }}
                @endif
            </div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-geo-alt"></i></div>
            <div>
                @if ($user->profile)
                {{ $user->profile->city }}
                @endif
            </div>
        </div>
        <div class="flex text-sm mt-4">
            <div class="w-8"><i class="bi-envelope"></i></div>
            <div>
                @if ($user->profile)
                {{ $user->profile->address }}
                @endif
            </div>
        </div>

    </div>
</div>
<script>
    function copy() {

        // alert()
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($('#referral').html().trim()).select();
        document.execCommand("copy");
        $temp.remove();
        $("#clipboard").removeClass('bi-clipboard')
        $("#clipboard").addClass('bi-clipboard-check')

    }
</script>