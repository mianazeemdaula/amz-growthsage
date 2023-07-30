<aside aria-label="Sidebar" id='sidebar' class="sidebar">
    <div class="absolute top-2 right-2 hover:cursor-pointer md:hidden text-slate-800" onclick="toggleSidebar()"><i class="bi bi-x text-[32px]"></i></div>
    <div class="flex justify-center items-center bg-red-50 py-12 md:hidden">
        <img src="{{asset('/images/logo/black.png')}}" alt="" class="w-40">
    </div>
    <div class="mt-12 px-8">
        <ul class="flex flex-col items-start space-y-4">
            <li>
                <i class="bi-grid"></i>
                <a href="{{url('/')}}">Home</a>
            </li>
            <li>
                <i class="bi-book"></i>
                <a href="#">Courses</a>
            </li>

            <li>
                <i class="bi-award"></i>
                <a href="#">Registration</a>
            </li>
            <li>
                <i class="bi-currency-dollar"></i>
                <a href="#">Fee Payment</a>
            </li>
            <li>
                <i class="bi-calendar2"></i>
                <a href="#">Schedule</a>
            </li>

        </ul>
    </div>
</aside>