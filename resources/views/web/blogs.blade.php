@extends('layouts.web')

@section('header')
<x-web.header></x-web.header>
@endsection
@section('body')

<div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

    <section>
        <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
            <div class="container text-center">
                <h2>Blogs</h2>
                <nav>
                    <ol class="flex items-center justify-center space-x-3">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home </a></li>
                        <li class="breadcrumb-item">-</li>
                        <li class="text-primary">Bolgs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="flex flex-col text-xl items-center md:px-24 pt-24 leading-relaxed">
            <p>
                Our commitment to your learning experience extends beyond the course material. Our blogs support you to underdtand and perform market analysis. We've assembled a dedicated support team that is always ready to help clarify doubts, answer questions, and provide guidance. Our goal is to foster a community where everyone feels supported and encouraged to learn.
            </p>
            <div class="w-48 border-b-2 mt-16">

            </div>
        </div>

    </div>

    <!-- BLOGS -->

    <div class="nav-tab-wrapper tabs  section-padding">
        <div class="container">
            <div class="grid grid-cols-12 gap-[30px]">
                <div class="lg:col-span-8 col-span-12">
                    <div class="grid  grid-cols-1 gap-[30px]">
                        <div class=" bg-white shadow-box12 rounded-[8px] transition duration-100 hover:shadow-box13">
                            <div class="course-thumb h-[420px] rounded-t-[8px]  relative">
                                <img src="{{asset('images/all-img/b-thub-1.png')}}" alt="" class=" w-full h-full object-cover rounded-t-[8px]">
                            </div>
                            <div class="course-content p-8">
                                <span class="bg-secondary py-1 px-3 text-lg font-semibold rounded text-white inline-block">Education</span>
                                <h3 class=" mb-4 mt-4">
                                    <a href="{{route('blogs.show', 1)}}" class=" hover:text-primary transition duration-150">
                                        Education Is About Helping Students with Learning Differences
                                    </a>
                                </h3>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                                    by injected humour.
                                </p>
                                <div class="flex   lg:space-x-10 space-x-5 mt-6">
                                    <a class=" flex items-center space-x-2" href="blog-single.html">
                                        <img src="{{asset('images/svg/calender.svg')}}" alt="">
                                        <span>21 Jul, 23</span>
                                    </a>
                                    <a class=" flex items-center space-x-2" href="blog-single.html">
                                        <img src="{{asset('images/icon/clock.svg')}}" alt="">
                                        <span>3 Min Read</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="pagination mt-14">
                        <ul class=" flex justify-center space-x-3">
                            <li class="inline-flex">
                                <a href="#" class="flex w-12 h-12 flex-col items-center justify-center bg-[#ECECEC] rounded font-semibold">
                                    <iconify-icon icon="heroicons:chevron-double-left-20-solid" class=" text-2xl"></iconify-icon>
                                </a>
                            </li>
                            <li class="inline-flex">
                                <a href="#" class="flex w-12 h-12 flex-col items-center justify-center bg-primary text-white rounded font-semibold">1</a>
                            </li>
                            <li class="inline-flex">
                                <a href="#" class="flex w-12 h-12 flex-col items-center justify-center bg-[#ECECEC] rounded font-semibold">2</a>
                            </li>
                            <li class="inline-flex">
                                <a href="#" class="flex w-12 h-12 flex-col items-center justify-center bg-[#ECECEC] rounded font-semibold">3</a>
                            </li>
                            <li class="inline-flex">
                                <a href="#" class="flex w-12 h-12 flex-col items-center justify-center bg-[#ECECEC] rounded font-semibold">4</a>
                            </li>
                            <li class="inline-flex">
                                <a href="#" class="flex w-12 h-12 flex-col items-center justify-center bg-[#ECECEC] rounded font-semibold">
                                    <iconify-icon icon="heroicons:chevron-double-right-20-solid" class=" text-2xl"></iconify-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lg:col-span-4 col-span-12">

                    <!-- blogs navbar -->
                    <div class="lg:col-span-4 col-span-12">
                        <x-web.blogs_nav></x-web.blogs_nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
<x-web.footer></x-web.footer>
@endsection