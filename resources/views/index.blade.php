@extends('layouts.web')

@section('header')
<x-web.header></x-web.header>
@endsection
@section('body')

<div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

    <section class="px-4 md:px-32 xl:min-h-screen bg-[url('../images/banner/1.png')] bg-cover bg-no-repeat bg-center overflow-hidden">
        <div class="flex items-center h-screen w-full">
            <div class="md:w-2/3 mt-24">
                <h2>Amazon</h2>
                <h1>
                    <span class=" text-secondary inline-block bg-[url('../../public/images/banner/shape.svg')] bg-no-repeat bg-bottom">
                        Product Hunting</span>
                </h1>
                <p class="text-slate-600 mt-8 text-2xl">Thoughtfully designed curriculum that combines industry insights and practical skills for you.</p>
                <div class="flex-none mt-8">
                    <a href="{{url('web/login')}}" class="btn btn-primary w-full lg:w-auto">Get Started Now</a>
                </div>
            </div>

        </div>

        <!-- <div class="imge-box absolute xl:right-[-260px]  hidden xl:block   bottom-0  ">
            <img src="{{ asset('images/banner/man1.png') }}" alt="">
        </div> -->
    </section>

    <x-web.about></x-web.about>
    <x-web.features></x-web.features>
    <x-web.joinus></x-web.joinus>
    <x-web.platform></x-web.platform>
    <x-web.testimonial></x-web.testimonial>
    <x-web.subscription></x-web.subscription>
    <x-web.team></x-web.team>
    <x-web.faq></x-web.faq>

</div>

@endsection

@section('footer')
<x-web.footer></x-web.footer>
@endsection