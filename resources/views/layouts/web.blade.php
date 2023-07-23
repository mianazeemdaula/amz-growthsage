<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://unpkg.com/phosphor-icons"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Growth Sage</title>
</head>

<body>

    <body class=" font-gilroy font-medium text-gray text-lg leading-[27px]">
        <!-- [if IE]> <p class="browserupgrade">
          You are using an <strong>outdated</strong> browser. Please
          <a href="https://browsehappy.com/">upgrade your browser</a> to improve
          your experience and security.
      </p> <![endif] -->

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
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <!-- <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="courses.html">Who can register?</a>
                                            </li>
                                            <li>
                                                <a href="courses-sidebar.html">courses Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="single-course.html">Single-course</a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex-none flex space-x-[18px]">
                                <div class=" hidden lg:block">
                                    <a href="#" class="btn btn-primary py-[15px] px-8">Start Free Trial</a>
                                </div>
                                <div class=" block   lg:hidden">
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
        </header>
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
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Blogs</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="contact.html">Contacts</a>
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
        <section class="px-4 md:px-32 xl:min-h-screen bg-[url('../../public/images/banner/1.png')] bg-cover bg-no-repeat bg-center overflow-hidden">
            <div class="flex items-center h-screen w-full">
                <div class="md:w-2/3 mt-24">
                    <h2>Amazon</h2>
                    <h1>
                        <span class=" text-secondary inline-block bg-[url('../../public/images/banner/shape.svg')] bg-no-repeat bg-bottom">
                            Product Hunting</span>
                    </h1>
                    <p class="text-slate-600 mt-8 text-2xl">Thoughtfully designed curriculum that combines industry insights and practical skills for you.</p>
                    <div class="flex-none mt-8">
                        <button class="btn btn-primary w-full lg:w-auto">Get Started Now</button>
                    </div>
                </div>

            </div>

            <!-- <div class="container relative">
                <div class="max-w-[570px] xl:pt-40 md:pt-20 md:pb-20 pt-28 pb-14 xl:pb-40 space-y-8">
                    <h1>
                        Amazon
                        <span class=" text-secondary inline-block bg-[url('../../public/images/banner/shape.svg')]  bg-no-repeat bg-bottom">
                            Product Hunting</span>
                        Trainging
                    </h1>
                    <div class=" plain-text text-gray leading-[30px]">
                        Thoughtfully designed curriculum that combines industry insights and practical skills for you.
                    </div>
                    <div class="bg-white md:flex  rounded-md shadow-e1 items-center py-[10px] relative lg:pr-[10px] lg:pl-[38px] pl-4 pr-4">
                        <div class="flex-1 flex items-center lg:mb-0 mb-2">
                            <div class="flex-none">
                                <span class=" ">
                                    <img src="{{ asset('images/icon/mail.svg') }}" alt="">
                                </span>
                            </div>
                            <div class="flex-1">
                                <input type="text" placeholder="Enter your mail" class="border-none focus:ring-0">
                            </div>
                        </div>
                        <div class="flex-none">
                            <button class="btn btn-primary w-full lg:w-auto">Get Started Now</button>
                        </div>
                    </div>
                </div>
-->
            <!-- 
                <div class="imge-box absolute xl:right-[-260px]  hidden xl:block   bottom-0  "> 
            <img src="{{ asset('images/banner/man1.png') }}" alt="">
            </div> -->
            </div>
        </section>
        <!-- about area start -->
        <div class="about-area section-padding">
            <div class="container">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-10">
                    <div>
                        <img src="{{ asset('images/all-img/about1.png') }}" alt="" class=" mx-auto" />
                    </div>
                    <div>
                        <div class="mini-title">About Growth-Sage</div>
                        <h4 class="column-title ">
                            The Place Where You Can
                            <span class="shape-bg">
                                Achieve</span>
                        </h4>
                        <div>
                            We deliver you industry insights and practical skills to help you thrive in the dynamic world of online selling
                        </div>
                        <ul class=" list-item space-y-6 pt-8">
                            <li class="flex">
                                <div class="flex-none mr-6">
                                    <div class="h-[72px] w-[72px] rounded-full">
                                        <img src="{{ asset('images/svg/light.svg') }}" alt="" class=" w-full h-full object-cover rounded-full block" />
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class=" text-xl mb-1">Our Mission</h4>
                                    <div>We are passionate about sharing the valuable skill of Amazon product hunting with every one.</div>
                                </div>
                            </li>
                            <li class="flex">
                                <div class="flex-none mr-6">
                                    <div class="h-[72px] w-[72px] rounded-full">
                                        <img src="{{ asset('images/svg/target.svg') }}" alt="" class=" w-full h-full object-cover rounded-full block" />
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class=" text-xl mb-1">Our Vision</h4>
                                    <div>We believe in that everyone should have the chance to learn and make money.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="pt-8">
                            <a href="#" class=" btn btn-primary">Read More Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feture section start -->
        <div class="feature-area bg-[url('../../public/images/all-img/section-bg-1.png')] bg-cover bg-no-repeat bg-center section-padding">
            <div class="container">
                <div class="text-center">
                    <div class="mini-title">Core Features</div>
                    <div class="column-title ">
                        Why
                        <span class="shape-bg">Choose</span>
                        Growth-Sage
                    </div>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">


                    <div class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
                        <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                  text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
                            <iconify-icon icon="codicon:globe"></iconify-icon>
                        </div>
                        <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">
                            Learn From Anywhere</h4>
                        <div class="transition duration-150 group-hover:text-white">You can learn from anywhere in world on
                            desktop, mobile or tablet with an Internet connection.</div>
                    </div>

                    <div class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
                        <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                  text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
                            <iconify-icon icon="healthicons:i-training-class-outline"></iconify-icon>
                        </div>
                        <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">
                            Expert Trainer</h4>
                        <div class="transition duration-150 group-hover:text-white"> We're not just trainers; we're mentors, guides, and supporters of our students' growth and success.</div>
                    </div>

                    <div class="bg-white shadow-box rounded-[8px]  p-10 group hover:bg-primary  transition duration-150 hover:-translate-y-1">
                        <div class="h-[72px] w-[72px] rounded-full flex flex-col items-center justify-center text-secondary bg-green-paste mb-8
                  text-5xl group-hover:bg-black group-hover:bg-opacity-[0.1] group-hover:text-white transition duration-150">
                            <iconify-icon icon="fluent:handshake-32-regular"></iconify-icon>
                        </div>
                        <h4 class=" lg:text-2xl text-[22px] leading-[30px] mb-4 transition duration-150 group-hover:text-white">
                            24/7 Strong Support</h4>
                        <div class="transition duration-150 group-hover:text-white">We are 24/7 available for our students to help them in their learnig and growth process all the time. </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- course section start -->
        <div class=" section-padding">
            <div class="container">
                <div class="text-center">
                    <div class="mini-title">Join Us to Learn</div>
                    <div class="column-title ">
                        Highly Valuable
                        <span class="shape-bg">Skill</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 mt-16">
                    <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
                        <div class="course-thumb h-[360px] rounded-l-[8px]  relative">
                            <img src="{{ asset('images/all-img/c1.png') }}" alt="" class=" w-full h-full object-cover rounded-l-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Amazon Product Hunting</span>
                        </div>
                    </a>

                    <div class="course-content p-8">
                        <h4 class=" text-2xl mb-3 font-bold">Amazon Product Hunting </h4>
                        <div class="leading-relaxed">
                            Upon completion of the program, you will be well-versed with the tools, techniques, and strategies of successful product hunting on Amazon. You will be able to identify profitable products, understand market trends, and make informed decisions to maximize your earnings.
                        </div>
                        <div class="text-secondary font-bold text-2xl my-3">$29.28</div>
                        <div class="flex space-x-8">
                            <span class=" flex items-center space-x-2">
                                <img src="{{ asset('images/svg/file.svg') }}" alt="">
                                <span>40 Lessons</span>
                            </span>
                            <span class=" flex items-center space-x-2">
                                <img src="{{ asset('images/svg/clock.svg') }}" alt="">
                                <span>2 Months</span>
                            </span>
                            <span class=" flex items-center space-x-2">
                                <img src="{{ asset('images/svg/star.svg') }}" alt="">
                                <span>4.8</span>
                            </span>
                        </div>
                    </div>

                </div>
                <!-- <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">
                    <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
                        <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/c1.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Amazon Product Hunting</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="text-secondary font-bold text-2xl mb-3">$29.28</div>
                            <h4 class=" text-xl mb-3 font-bold">Basic Fundamentals of Interior &amp; Graphics Design
                            </h4>
                            <div class="flex justify-between  space-x-3">
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/file.svg') }}" alt="">
                                    <span>2 Lessons</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/clock.svg') }}" alt="">
                                    <span>4h 30m</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/star.svg') }}" alt="">
                                    <span>4.8</span>
                                </span>
                            </div>
                        </div>
                    </a>

                    <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
                        <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/c2.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Developemet</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="text-secondary font-bold text-2xl mb-3">Free</div>
                            <h4 class=" text-xl mb-3 font-bold">Increasing Engagement with Instagram &amp; Facebook
                            </h4>
                            <div class="flex justify-between  space-x-3">
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/file.svg') }}" alt="">
                                    <span>2 Lessons</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/clock.svg') }}" alt="">
                                    <span>4h 30m</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/star.svg') }}" alt="">
                                    <span>4.8</span>
                                </span>
                            </div>
                        </div>
                    </a>

                    <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
                        <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/c3.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Drawing</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="text-secondary font-bold text-2xl mb-3">$72.39</div>
                            <h4 class=" text-xl mb-3 font-bold">Introduction to Color Theory &amp;
                                Basic UI/UX</h4>
                            <div class="flex justify-between  space-x-3">
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/file.svg') }}" alt="">
                                    <span>2 Lessons</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/clock.svg') }}" alt="">
                                    <span>4h 30m</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/star.svg') }}" alt="">
                                    <span>4.8</span>
                                </span>
                            </div>
                        </div>
                    </a>

                    <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
                        <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/c4.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Technology</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="text-secondary font-bold text-2xl mb-3">$72.39</div>
                            <h4 class=" text-xl mb-3 font-bold">Financial Security Thinking and Principles Theory</h4>
                            <div class="flex justify-between  space-x-3">
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/file.svg') }}" alt="">
                                    <span>2 Lessons</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/clock.svg') }}" alt="">
                                    <span>4h 30m</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/star.svg') }}" alt="">
                                    <span>4.8</span>
                                </span>
                            </div>
                        </div>
                    </a>

                    <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
                        <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/c5.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Data
                                Science</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="text-secondary font-bold text-2xl mb-3">Free</div>
                            <h4 class=" text-xl mb-3 font-bold">Logo Design: From Concept to Presentation</h4>
                            <div class="flex justify-between  space-x-3">
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/file.svg') }}" alt="">
                                    <span>2 Lessons</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/clock.svg') }}" alt="">
                                    <span>4h 30m</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/star.svg') }}" alt="">
                                    <span>4.8</span>
                                </span>
                            </div>
                        </div>
                    </a>

                    <a class=" bg-white shadow-box2 rounded-[8px] transition duration-100 hover:shadow-sm" href="#">
                        <div class="course-thumb h-[248px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/c6.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Developemet</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="text-secondary font-bold text-2xl mb-3">$29.82</div>
                            <h4 class=" text-xl mb-3 font-bold">Professional Ceramic Moulding for Beginners</h4>
                            <div class="flex justify-between  space-x-3">
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/file.svg') }}" alt="">
                                    <span>2 Lessons</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/clock.svg') }}" alt="">
                                    <span>4h 30m</span>
                                </span>
                                <span class=" flex items-center space-x-2">
                                    <img src="{{ asset('images/svg/star.svg') }}" alt="">
                                    <span>4.8</span>
                                </span>
                            </div>
                        </div>
                    </a>

                </div> -->
                <div class="text-center lg:pt-16 pt-10">
                    <a href="#" class=" btn btn-primary">Register Now</a>
                </div>
            </div>
        </div>
        <!-- platform start -->
        <div class="bg-[url('../images/all-img/section-bg-2.png')] bg-cover bg-no-repeat bg-center section-padding">
            <div class="container">
                <div class="lg:grid grid-cols-12 gap-[30px]">
                    <div class="xl:col-span-5 lg:col-span-6 col-span-12">
                        <div class="mini-title">Best Online Learning Platform</div>
                        <h4 class="column-title ">
                            One Platfrom & Many
                            <span class="shape-bg">
                                Services</span>
                            For You
                        </h4>
                        <div>
                            We are fully passionate to use our 30+ years experience for transforming practical skills to our students.
                        </div>
                        <ul class=" space-y-2 pt-8">
                            <li class="flex flex-wrap">
                                <div class="flex-none mr-3">
                                    <div class="">
                                        <img src="{{ asset('images/svg/ok.svg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class=" text-lg mb-1 font-semibold">Interactive Course Modules</h4>
                                </div>
                            </li>
                            <li class="flex flex-wrap">
                                <div class="flex-none mr-3">
                                    <div class="">
                                        <img src="{{ asset('images/svg/ok.svg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class=" text-lg mb-1 font-semibold">Real World Examples, Case Studies & Exercises</h4>
                                </div>
                            </li>
                            <li class="flex flex-wrap">
                                <div class="flex-none mr-3">
                                    <div class="">
                                        <img src="{{ asset('images/svg/ok.svg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <h4 class=" text-lg mb-1 font-semibold">Friendly Environment & 24/7 Support</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="xl:col-span-7 lg:col-span-6 col-span-12 lg:pt-0 md:pt-10 pt-6">
                        <img src="{{ asset('images/all-img/about2.png') }}" alt="" class=" mx-auto block w-full" />
                    </div>
                </div>
            </div>
        </div>
        <!-- cta start -->
        <div class="bg-[url('../images/all-img/section-bg-3.png')] bg-cover bg-no-repeat bg-center py-20">
            <div class="container">
                <div class="lg:flex lg:items-center lg:space-x-[70px]">
                    <div class=" flex-none">
                        <div class="flex items-center space-x-8 text-white max-w-[327px] mx-auto lg:mb-0 md:mb-10 mb-5">
                            <div class=" flex-none ">
                                <img src="{{ asset('images/svg/big-mail.svg') }}" alt="">
                            </div>
                            <div class="flex-1 lg:text-[34px] lg:leading-[51px] md:text-3xl text-2xl font-bold">
                                Newsletter
                            </div>
                        </div>
                    </div>
                    <div class=" flex-1">
                        <div class="md:flex   items-center  relative md:space-x-6 md:space-y-0  space-y-4   ">
                            <div class="flex-1 relative">
                                <span class=" absolute left-0 top-1/2 -translate-y-1/2 ">
                                    <img src="{{ asset('images/icon/mail-white.svg') }}" alt="">
                                </span>
                                <input type="text" placeholder="Enter your mail address" class=" border-b border-t-0 border-l-0 border-r-0 border-[#B2E2DF] ring-0 focus:ring-0 bg-transparent text-white
                                  placeholder:text-[#B2E2DF] focus:outline-0 focus:border-[#B2E2DF] transition pl-8 text-lg">
                            </div>
                            <div class="flex-none">
                                <button class="btn bg-white  text-secondary md:w-auto w-full">Subscribe Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topics start -->
        <!-- <div class=" section-padding">
            <div class="container">
                <div class="text-center">
                    <div class="mini-title">Start Learning From Today</div>
                    <div class="column-title ">
                        Popular
                        <span class="shape-bg">Topics</span>
                        To Learn
                    </div>
                </div>
                <div class="grid lg:grid-cols-4 md:grid-cols-2  grid-cols-1 gap-[30px] pt-10">


                    <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFE8E8]  text-center px-6
              py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFE8E8]">
                            <img src="{{ asset('images/icon/t1.svg') }}" alt="" class=" w-[32px] h-[32px] object-cover ">
                        </div>
                        <div class="course-content">
                            <h4 class=" text-2xl  mb-2 font-bold">Data Science</h4>
                            <p>68 Courses</p>
                        </div>
                    </a>

                    <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-green-paste  text-center px-6
              py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-green-paste">
                            <img src="{{ asset('images/icon/t2.svg') }}" alt="" class=" w-[32px] h-[32px] object-cover ">
                        </div>
                        <div class="course-content">
                            <h4 class=" text-2xl  mb-2 font-bold">UI/UX Design</h4>
                            <p>UI/UX Design</p>
                        </div>
                    </a>

                    <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E8F5FF]  text-center px-6
              py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E8F5FF]">
                            <img src="{{ asset('images/icon/t3.svg') }}" alt="" class=" w-[32px] h-[32px] object-cover ">
                        </div>
                        <div class="course-content">
                            <h4 class=" text-2xl  mb-2 font-bold">Modern Physics</h4>
                            <p>68 Courses</p>
                        </div>
                    </a>

                    <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E3F9F6]  text-center px-6
              py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E3F9F6]">
                            <img src="{{ asset('images/icon/t4.svg') }}" alt="" class=" w-[32px] h-[32px] object-cover ">
                        </div>
                        <div class="course-content">
                            <h4 class=" text-2xl  mb-2 font-bold">Music Production</h4>
                            <p>68 Courses</p>
                        </div>
                    </a>

                    <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#EEE8FF]  text-center px-6
              py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#EEE8FF]">
                            <img src="{{ asset('images/icon/t5.svg') }}" alt="" class=" w-[32px] h-[32px] object-cover ">
                        </div>
                        <div class="course-content">
                            <h4 class=" text-2xl  mb-2 font-bold">Data Science</h4>
                            <p>45 Courses</p>
                        </div>
                    </a>

                    <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFF6EB]  text-center px-6
              py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFF6EB]">
                            <img src="{{ asset('images/icon/t6.svg') }}" alt="" class=" w-[32px] h-[32px] object-cover ">
                        </div>
                        <div class="course-content">
                            <h4 class=" text-2xl  mb-2 font-bold">Finances</h4>
                            <p>68 Courses</p>
                        </div>
                    </a>

                    <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#E8FFEA]  text-center px-6
              py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#E8FFEA]">
                            <img src="{{ asset('images/icon/t7.svg') }}" alt="" class=" w-[32px] h-[32px] object-cover ">
                        </div>
                        <div class="course-content">
                            <h4 class=" text-2xl  mb-2 font-bold">Global Science</h4>
                            <p>75 Courses</p>
                        </div>
                    </a>

                    <a class=" rounded-[8px] transition duration-100 hover:shadow-box hover:bg-white group bg-[#FFE8E8]  text-center px-6
              py-[65px] hover:-translate-y-2" href="#">
                        <div class="w-[72px] h-[72px] rounded-full bg-white relative mx-auto flex flex-col justify-center items-center mb-8 group-hover:bg-[#FFE8E8]">
                            <img src="{{ asset('images/icon/t8.svg') }}" alt="" class=" w-[32px] h-[32px] object-cover ">
                        </div>
                        <div class="course-content">
                            <h4 class=" text-2xl  mb-2 font-bold">Game Design</h4>
                            <p>12 Courses</p>
                        </div>
                    </a>

                </div>
            </div>
        </div> -->

        <!-- testtimonal start -->
        <div class=" section-padding bg-[url('../images/all-img/section-bg-16.png')] bg-cover  bg-no-repeat lg:mt-[136px]">
            <div class="container lg:-mt-[250px] xl:pb-[136px] lg:pb-20 pb-10">
                <div class="grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] bg-white shadow-box14 rounded-md
                  divide-x-2 divide-[#E4EEED] py-20">
                    <div class=" text-center ">
                        <h2 class="text-secondary font-bold ">
                            <span class=" counter">2</span>K+
                        </h2>
                        <span class="block text-black font-semibold">Enrolled Students</span>
                    </div>
                    <!-- single counter -->
                    <div class="  text-center">
                        <h2 class="text-secondary font-bold ">
                            <span class=" counter">800</span>+
                        </h2>
                        <span class="block text-black font-semibold">Certified Students</span>
                    </div>
                    <!-- single counter -->
                    <div class=" text-center">
                        <h2 class="text-secondary font-bold ">
                            <span class=" counter">800</span>+
                        </h2>
                        <span class="block text-black font-semibold">Self Earning</span>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="grid grid-cols-12 lg:gap-10 gap-6 ">
                    <div class="xl:col-span-7 lg:col-span-6 col-span-12">
                        <img src="{{ asset('images/all-img/testi-left.png') }}" alt="" draggable="false" />
                    </div>
                    <div class="xl:col-span-5 lg:col-span-6 col-span-12 flex flex-col justify-center ">
                        <div class="mini-title">Testimonial</div>
                        <h4 class="column-title ">
                            What Says Our
                            <span class="shape-bg">
                                Students</span>
                            About Us
                        </h4>
                        <div>
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered. There are many
                            variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                            in some form, by injected
                            humour.
                        </div>
                        <div class="mt-12">
                            <a href="#" class="btn btn-primary">View All Reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team start -->
        <div class=" section-padding">
            <div class="container">
                <div class="text-center">
                    <div class="mini-title">Our Team</div>
                    <div class="column-title ">
                        We Have a <span class="shape-bg">Dedicated</span> Team
                    </div>
                </div>
                <div class="grid xl:grid-cols-3 lg:grid-cols-3  md:grid-cols-2 grid-cols-1 gap-[30px] pt-10">
                    <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
              border-t-4 border-transparent hover:border-secondary ">
                        <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
                            <img src="{{ asset('images/all-img/team1.png') }}" alt="" class=" w-full h-full object-cover rounded-full">
                        </div>
                        <div class="course-content">
                            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Zahid Saleem</h4>
                            <div>Expert Trainer</div>
                            <ul class="space-x-4 flex justify-center pt-6">
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-primary hover:text-white">
                                        <iconify-icon icon="bxl:facebook"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-secondary hover:text-white">
                                        <iconify-icon icon="bxl:twitter"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-[#8861DB] hover:text-white">
                                        <iconify-icon icon="bxl:linkedin"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4
              border-t-4 border-transparent hover:border-secondary ">
                        <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
                            <img src="{{ asset('images/all-img/team2.png') }}" alt="" class=" w-full h-full object-cover rounded-full">
                        </div>
                        <div class="course-content">
                            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Mr. ABC</h4>
                            <div>Student Support</div>
                            <ul class="space-x-4 flex justify-center pt-6">
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-primary hover:text-white">
                                        <iconify-icon icon="bxl:facebook"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-secondary hover:text-white">
                                        <iconify-icon icon="bxl:twitter"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-[#8861DB] hover:text-white">
                                        <iconify-icon icon="bxl:linkedin"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=" bg-white shadow-box3 rounded-[8px] transition-all duration-100 pt-10 pb-[28px] px-6 text-center hover:shadow-box4 border-t-4 border-transparent hover:border-secondary ">
                        <div class="w-[170px] h-[170px] rounded-full  relative mx-auto mb-8">
                            <img src="{{ asset('images/all-img/team3.png') }}" alt="" class=" w-full h-full object-cover rounded-full">
                        </div>
                        <div class="course-content">
                            <h4 class=" lg:text-2xl text-1xl mb-1 font-bold">Mr. XYZ</h4>
                            <div>IT Expert</div>
                            <ul class="space-x-4 flex justify-center pt-6">
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-red-paste text-primary flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-primary hover:text-white">
                                        <iconify-icon icon="bxl:facebook"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-green-paste text-secondary flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-secondary hover:text-white">
                                        <iconify-icon icon="bxl:twitter"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class=" h-10 w-10 rounded bg-[#EEE8FF] text-#8861DB flex flex-col justify-center items-center text-2xl transition
                                  hover:bg-[#8861DB] hover:text-white">
                                        <iconify-icon icon="bxl:linkedin"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class=" section-padding bg-[url('../images/all-img/section-bg-5.png')] bg-cover bg-no-repeat bg-center">
            <div class="container">
                <div class="lg:flex justify-between items-center ">
                    <div class="mb-3">
                        <div class="mini-title">Team Member</div>
                        <div class="column-title ">
                            Our Student
                            <span class="shape-bg">Blogs</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="#" class=" btn btn-primary">Read All Blogs</a>
                    </div>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px] pt-7">


                    <div class=" bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
                        <div class="course-thumb h-[260px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/blog-1.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Education</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="flex   lg:space-x-10 space-x-5 mb-5">
                                <a class=" flex items-center space-x-2" href="blog-single.html">
                                    <img src="{{ asset('images/svg/admin.svg') }}" alt="">
                                    <span>Admin</span>
                                </a>
                                <a class=" flex items-center space-x-2" href="blog-single.html">
                                    <img src="{{ asset('images/svg/calender.svg') }}" alt="">
                                    <span>Jan 29, 2022</span>
                                </a>
                            </div>
                            <h4 class=" text-xl mb-5 font-bold">
                                <a href="blog-single.html" class=" hover:text-primary transition duration-150">
                                    Professional Mobile Painting and Sculpting
                                </a>
                            </h4>
                            <a href="blog-single.html" class=" text-black font-semibold hover:underline transition duration-150">Read More</a>
                        </div>
                    </div>

                    <div class=" bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
                        <div class="course-thumb h-[260px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/blog-2.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Education</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="flex   lg:space-x-10 space-x-5 mb-5">
                                <a class=" flex items-center space-x-2" href="blog-single.html">
                                    <img src="{{ asset('images/svg/admin.svg') }}" alt="">
                                    <span>Admin</span>
                                </a>
                                <a class=" flex items-center space-x-2" href="blog-single.html">
                                    <img src="{{ asset('images/svg/calender.svg') }}" alt="">
                                    <span>Jan 29, 2022</span>
                                </a>
                            </div>
                            <h4 class=" text-xl mb-5 font-bold">
                                <a href="blog-single.html" class=" hover:text-primary transition duration-150">
                                    Professional Ceramic Moulding for Beginners
                                </a>
                            </h4>
                            <a href="blog-single.html" class=" text-black font-semibold hover:underline transition duration-150">Read More</a>
                        </div>
                    </div>

                    <div class=" bg-white shadow-box5 rounded-[8px] transition duration-100 hover:shadow-box3">
                        <div class="course-thumb h-[260px] rounded-t-[8px]  relative">
                            <img src="{{ asset('images/all-img/blog-3.png') }}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white absolute left-6 top-6">Education</span>
                        </div>
                        <div class="course-content p-8">
                            <div class="flex   lg:space-x-10 space-x-5 mb-5">
                                <a class=" flex items-center space-x-2" href="blog-single.html">
                                    <img src="{{ asset('images/svg/admin.svg') }}" alt="">
                                    <span>Admin</span>
                                </a>
                                <a class=" flex items-center space-x-2" href="blog-single.html">
                                    <img src="{{ asset('images/svg/calender.svg') }}" alt="">
                                    <span>Jan 29, 2022</span>
                                </a>
                            </div>
                            <h4 class=" text-xl mb-5 font-bold">
                                <a href="blog-single.html" class=" hover:text-primary transition duration-150">
                                    Education Is About Create Leaders For Tomorrow
                                </a>
                            </h4>
                            <a href="blog-single.html" class=" text-black font-semibold hover:underline transition duration-150">Read More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        <footer class="bg-black bg-[url('../images/all-img/footer-bg-1.png')] bg-cover bg-center bg-no-repeat">
            <div class="section-padding container">
                <div class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-3">
                    <div class="single-footer">
                        <div class="lg:max-w-[270px]">
                            <a href="#" class="mb-10 block">
                                <!-- <img src="{{ asset('images/logo/footer-logo.svg') }}" alt=""> -->
                                Logo
                            </a>
                            <p>
                                We're a group of experienced professionals with a common goal: to help people learn the useful skill of Amazon product hunting.
                            </p>
                            <ul class="flex space-x-4 pt-8">
                                <li>
                                    <a href="#" class="flex h-12 w-12 flex-col items-center justify-center rounded bg-white bg-opacity-[0.08] text-2xl text-white
                    transition hover:bg-primary hover:text-white">
                                        <iconify-icon icon="bxl:facebook"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex h-12 w-12 flex-col items-center justify-center rounded bg-white bg-opacity-[0.08] text-2xl text-white
                    transition hover:bg-primary hover:text-white">
                                        <iconify-icon icon="bxl:twitter"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex h-12 w-12 flex-col items-center justify-center rounded bg-white bg-opacity-[0.08] text-2xl text-white
                    transition hover:bg-primary hover:text-white">
                                        <iconify-icon icon="bxl:linkedin"></iconify-icon>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex h-12 w-12 flex-col items-center justify-center rounded bg-white bg-opacity-[0.08] text-2xl text-white
                    transition hover:bg-primary hover:text-white">
                                        <iconify-icon icon="bxl:instagram"></iconify-icon>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-footer">
                        <div class="flex space-x-[80px]">
                            <div class="flex-1 lg:flex-none">
                                <h4 class="mb-8 text-2xl font-bold text-white">Links</h4>
                                <ul class="list-item space-y-5">
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Blogs</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <div class="flex-1 lg:flex-none">
                                <h4 class="mb-8 text-2xl font-bold text-white">Legal</h4>
                                <ul class="list-item space-y-5">
                                    <li>
                                        <a href="#">Legal</a>
                                    </li>
                                    <li>
                                        <a href="#">Students Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Tearm & Condition</a>
                                    </li>
                                    <li>
                                        <a href="#">Payment Method</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="single-footer">
                        <h4 class="mb-8 text-2xl font-bold text-white">Newsletter</h4>
                        <div class="mb-8">
                            Join over
                            <span class="text-primary underline">2,000+</span>
                            people getting our emails
                        </div>
                        <div class="mb-4 flex items-center rounded-md bg-white py-[10px] pr-[10px] pl-6 shadow-e1">
                            <div class="flex-none">
                                <span class=" ">
                                    <img src="{{ asset('images/icon/mail.svg') }}" alt="">
                                </span>
                            </div>
                            <div class="flex-1">
                                <input type="text" placeholder="Enter your mail" class="border-none focus:ring-0">
                            </div>
                        </div>
                        <button class="btn btn-primary block w-full text-center">
                            Subscribe Now
                        </button>
                    </div>
                </div>
            </div>
            <div class="container border-t border-white border-opacity-[0.1] py-8 text-center text-base">
                &copy; Copyright 2022 | Edumim Template | All Rights Reserved
            </div>
        </footer>

        <div class="rt-mobile-menu-overlay"></div>
        <!-- scripts -->
        {{-- <script src="{{ asset("js/popper.min.js"></script> --}}"
        {{-- <script src="{{ asset("js/jquery-3.6.0.min.js"></script> --}}"
        {{-- <script src="{{ asset("js/rt-plugins.js"></script> --}}"
    </body>
    @stack('js')
</body>

</html>