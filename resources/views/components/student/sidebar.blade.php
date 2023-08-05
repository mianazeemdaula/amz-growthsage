<aside aria-label="Sidebar" id='sidebar' class="sidebar">
    <div class="absolute top-2 right-2 hover:cursor-pointer md:hidden text-slate-800" onclick="toggleSidebar()"><i
            class="bi bi-x text-[32px]"></i></div>
    <div class="flex justify-center items-center bg-red-50 py-12 md:hidden">
        <img src="{{ asset('/images/logo/black.png') }}" alt="" class="w-40">
    </div>
    <div class="mt-12 px-8">
        <ul class="flex flex-col items-start space-y-4">
            <li @if ($page == 'home') class="active" @endif>
                <i class="bi-grid"></i>
                <a href="{{ url('students') }}">Home</a>
            </li>
            <li @if ($page == 'courses') class="active" @endif>
                <i class="bi-book"></i>
                <a href="{{ route('courses.show', 1) }}">My Courses</a>
            </li>
            <li @if ($page == 'invoices') class="active" @endif>
                <i class="bi-receipt"></i>
                <a href="{{ route('invoices.show', 1) }}">Invoices</a>
            </li>
            @role('teamleader')
                <li>
                    <i class="bi-receipt"></i>
                    <a href="{{ url('/teamcsv') }}">My Team</a>
                </li>
            @endrole
            <!-- <li>
                <i class="bi-currency-dollar"></i>
                <a href="#">Accounts</a>
            </li>
            <li>
                <i class="bi-calendar2"></i>
                <a href="#">Schedule</a>
            </li>

            <li>
                <i class="bi-card-checklist"></i>
                <a href="#">Tasks</a>
            </li>
            <li>
                <i class="bi-graph-up"></i>
                <a href="#">Scorage</a>
            </li> -->
            @role('teamleader')
                <li>
                    <i class="bi-diagram-2"></i>
                    <a href="#">Team</a>
                </li>
            @endrole

            <li>
                <i class="bi-power"></i>
                <a href="{{ url('signout') }}">Signout</a>
            </li>

        </ul>
    </div>
</aside>
