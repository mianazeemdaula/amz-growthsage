<header class="site-header  home-one-header top-0 w-full z-[999] rt-sticky">
    <div class="main-header py-6">
        <div class="container">
            <div class=" flex items-center justify-between">
                <a href="index.html" class="brand-logo flex-none lg:mr-10 md:w-auto max-w-[120px] ">
                    <!-- <img src="{{ asset('images/logo/logo.svg') }}" alt=""> -->
                    <h4 class="text-secondary">LOGO</h4>
                </a>

                <div class="flex items-center flex-1">
                    <div class="flex-1 main-menu relative mr-[74px]">
                        <ul class="menu-active-classes">
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('courses')}}">Courses</a>
                            </li>
                            <li>
                                <a href="{{url('blogs')}}">Blogs</a>
                            </li>
                            <li>
                                <a href="{{url('about')}}">About</a>
                            </li>
                            <li>
                                <a href="{{url('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex-none flex space-x-[18px]">
                        <div class=" hidden lg:block">
                            <a href="{{url('login')}}" class="btn btn-primary py-[15px] px-8">Start Free Trial</a>
                        </div>
                        <div class="block lg:hidden">
                            <button type="button" class=" text-3xl md:w-[56px] h-10 w-10 md:h-[56px] rounded bg-[#F8F8F8] flex flex-col items-center justify-center
                                          menu-click">
                                <iconify-icon icon="cil:hamburger-menu" rotate="180deg"></iconify-icon>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile menu -->
    <div class="openmobile-menu fixed top-0 h-screen pt-10 pb-6 bg-white shadow-box2 w-[320px] overflow-y-auto flex flex-col
          z-[999]">
        <div class="flex justify-between px-6 flex-none">
            <a href="index.html" class="brand-logo flex-none mr-10 ">
                <!-- <img src="{{ asset('images/logo/logo.svg') }}" alt=""> 
                -->
                Logo
            </a>
            <span class=" text-3xl text-black cursor-pointer rt-mobile-menu-close">
                <iconify-icon icon="fe:close"></iconify-icon>
            </span>
        </div>
        <div class="mobile-menu mt-6 flex-1 ">
            <ul class="menu-active-classes">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{url('courses')}}">Courses</a>
                </li>
                <li>
                    <a href="{{url('blogs')}}">Blogs</a>
                </li>
                <li>
                    <a href="{{url('about')}}">About</a>
                </li>
                <li>
                    <a href="{{url('contact')}}">Contact</a>
                </li>
                <li>
                    <a href="{{url('login')}}">Login Me</a>
                </li>
            </ul>
        </div>
        <div class=" flex-none pb-4">
            <div class=" text-center text-black font-semibold mb-2">Follow Us</div>
            <ul class="flex space-x-4 justify-center ">
                <li>
                    <a href="#" class="flex h-10 w-10">
                        <img src="{{ asset('images/icon/fb.svg') }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#" class="flex h-10 w-10">
                        <img src="{{ asset('images/icon/tw.svg') }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#" class="flex h-10 w-10">
                        <img src="{{ asset('images/icon/pn.svg') }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#" class="flex h-10 w-10">
                        <img src="{{ asset('images/icon/ins.svg') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>