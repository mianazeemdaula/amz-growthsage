@extends('layouts.web')

@section('header')
<x-web.header></x-web.header>
@endsection
@section('body')

<div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

    <section>
        <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
            <div class="container text-center">
                <h2>About Us</h2>
                <nav>
                    <ol class="flex items-center justify-center space-x-3">
                        <li class="breadcrumb-item"><a href="index.html">Home </a></li>
                        <li class="breadcrumb-item">-</li>
                        <li class="text-primary">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="flex flex-col text-xl items-center md:px-24 pt-24 leading-relaxed">
            <p>Our team is our asset. We're a group of experienced professionals with a common goal: to help people learn the useful skill of Amazon product hunting. Using our deep understanding of online sales, we've created an easy-to-follow online training program. This isn't just about teaching, it's about giving our students real-world knowledge and hands-on practice.</p>
            <div class="w-48 border-b-2 mt-16">

            </div>
        </div>

    </div>
    <x-web.about></x-web.about>
    <x-web.features></x-web.features>
    <x-web.subscription></x-web.subscription>
    <!-- cta -->
    <div class=" section-padding  bg-white bg-[url('../images/all-img/section-bg-14.png')] bg-center  bg-no-repeat">
        <div class="container">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-7">
                <div class="bg-[url('../images/all-img/bg-ins-1.png')] bg-cover  bg-no-repeat p-10  rounded-md">
                    <div class="max-w-[337px]">
                        <div class="mini-title">Build Your Career</div>
                        <div class=" text-[34px] text-black leading-[51px]">
                            Become an
                            <span class="shape-bg">Expert</span>
                        </div>
                        <div class=" mt-6 mb-12">
                            We enable you to become an expert in Amazon product hunting
                        </div>
                        <a href="#" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
                <div class="bg-[url('../images/all-img/bg-ins-2.png')]  bg-no-repeat p-10 bg-cover rounded-md">
                    <div class="max-w-[337px]">
                        <div class="mini-title">Build Your Career</div>
                        <div class=" text-[34px] text-black leading-[51px]">
                            Get Valuable
                            <span class="shape-bg">Skill</span>
                        </div>
                        <div class=" mt-6 mb-12">
                            Learn Amanzon product hunting just in 3 months' period
                        </div>
                        <a href="#" class="btn btn-black">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team -->
    <x-web.team></x-web.team>
    <!-- FAQ section -->
    <div class="section-padding  bg-white bg-[url('../images/all-img/section-bg-15.png')] bg-bottom  bg-cover bg-no-repeat">
        <div class="container">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]">
                <div>
                    <div class="mini-title">Frequently Asked Question</div>
                    <div class="column-title ">
                        General
                        <span class="shape-bg">Questions</span>
                    </div>
                    <ul class="list accrodains space-y-[30px] lg:max-w-[470px]">
                        <li>
                            <button type="button" class="accrodain-button">
                                <span>What does it take excellent author?</span>
                                <span class="icon-pm"></span>
                            </button>
                            <div class="content hidden">
                                Learn at your own pace, move between multiple courses, or switch to a different course. Earn a certificate for every
                                learning program that you complete at no additional cost.
                            </div>
                        </li>
                        <li>
                            <button type="button" class="accrodain-button">
                                <span>Who will view my content?
                                </span>
                                <span class="icon-pm"></span>
                            </button>
                            <div class="content hidden">
                                Learn at your own pace, move between multiple courses, or switch to a different course. Earn a certificate for every
                                learning program that you complete at no additional cost.
                            </div>
                        </li>
                        <li>
                            <button type="button" class="accrodain-button">
                                <span>What does it take become an author?
                                </span>
                                <span class="icon-pm"></span>
                            </button>
                            <div class="content hidden">
                                Learn at your own pace, move between multiple courses, or switch to a different course. Earn a certificate for every
                                learning program that you complete at no additional cost.
                            </div>
                        </li>
                        <li>
                            <button type="button" class="accrodain-button">
                                <span>How to Change my Password easily?</span>
                                <span class="icon-pm"></span>
                            </button>
                            <div class="content hidden">
                                Learn at your own pace, move between multiple courses, or switch to a different course. Earn a certificate for every
                                learning program that you complete at no additional cost.
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="{{asset('images/all-img/faq.png')}}" alt="" class=" mx-auto">
                </div>
            </div>
        </div>
    </div>

</div>

<!-- video aarea -->
<div class=" relative video-area section-padding-bottom z-[1]">
    <div class="bg-[url('../images/all-img/section-bg-7.png')] bg-cover bg-no-repeat bg-center absolute left-0 bottom-0 h-[60%]
        w-full z-[-1]"></div>
    <div class="container ">
        <div class="video-wrapper xl:mb-[205px] lg:mb-[150px] mb-20">
            <div class="xl:h-[652px] lg:h-[500px] h-[400px] max-w-[1112px]  mx-auto p-6 bg-white shadow-box8 rounded-lg relative ">
                <img src="{{asset('images/all-img/video.png')}}" alt="" class=" object-cover w-full h-full  block">
                <div class="h-[80px] w-[80px] mx-auto absolute left-1/2 top-1/2 -translate-y-1/2 -translate-x-1/2 flex flex-col justify-center
                        items-center">
                    <div class="animate-ping absolute inline-flex h-full w-full rounded-full ring-white ring-2"></div>
                    <a href="#" class="bg-white w-20 h-20 flex flex-col justify-center items-center rounded-full text-3xl text-primary  ">
                        <iconify-icon icon="bi:play-fill"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
<x-web.footer></x-web.footer>
@endsection