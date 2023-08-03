<aside aria-label="Sidebar" id='sidebar' class="sidebar">
    <div class="absolute top-2 right-2 hover:cursor-pointer md:hidden text-slate-800" onclick="toggleSidebar()"><i class="bi bi-x text-[32px]"></i></div>
    <div class="flex justify-center items-center bg-red-50 py-12 md:hidden">
        <img src="{{ asset('/images/logo/black.png') }}" alt="" class="w-40">
    </div>
    <div class="mt-12 px-8">
        <ul class="flex flex-col items-start space-y-4">
            <li @if ($page=='home' ) class="active" @endif>
                <i class="bi-grid"></i>
                <a href="{{ url('admin/') }}">Home</a>
            </li>
            <li @if ($page=='students' ) class="active" @endif>
                <i class="bi-people"></i>
                <a href="{{ route('admin.students.index') }}">Students</a>
            </li>
            <li @if ($page=='invoices' ) class="active" @endif>
                <i class="bi-receipt"></i>
                <a href="{{ route('admin.invoices.index') }}">Invoices</a>
            </li>
            <!-- <li @if ($page=='accounts' ) class="active" @endif>
                <i class="bi-currency-dollar"></i>
                <a href="{{ route('admin.accounts.index') }}">Account</a>
            </li> -->
            <li @if ($page=='teamleaders' ) class="active" @endif>
                <i class="bi-diagram-2"></i>
                <a href="{{ route('admin.teamleaders.index') }}">Team Leaders</a>
            </li>
            <li @if ($page=='courses' ) class="active" @endif>
                <i class="bi-book"></i>
                <a href="{{ route('admin.courses.index') }}">Courses</a>
            </li>
            <li @if ($page=='faqs' ) class="active" @endif>
                <i class="bi-question-circle"></i>
                <a href="{{ route('admin.faq-cats.index') }}">FAQs</a>
            </li>

            <li>
                <i class="bi-power"></i>
                <a href="{{ url('signout') }}">Signout</a>
            </li>

        </ul>
    </div>
</aside>