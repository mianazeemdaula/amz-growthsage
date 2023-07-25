@extends('layouts.web')

@section('header')
<x-web.header></x-web.header>
@endsection
@section('body')

<div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

    <section>
        <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
            <div class="container text-center">
                <h2>Courses</h2>
                <nav>
                    <ol class="flex items-center justify-center space-x-3">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home </a></li>
                        <li class="breadcrumb-item">-</li>
                        <li class="text-primary">Courses</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="flex flex-col text-xl items-center md:px-24 pt-24 leading-relaxed">
            <h4 class="column-title ">
                Amazon Product
                <span class="shape-bg">
                    Hunting</span>
            </h4>
            <p>
                Welcome to our Amazon Product Hunting Training Program, a thoughtfully designed curriculum that combines industry insights, practical skills, and a supportive learning environment to help you thrive in the dynamic world of online selling.
                This is not just a course; it's your first step towards becoming a proficient Amazon product hunter. Come, join us and unlock a world of opportunities.
            </p>
            <div class="w-48 border-b-2 mt-16">

            </div>
        </div>

    </div>

    <x-web.features></x-web.features>
    <x-web.joinus></x-web.joinus>
    <!-- <x-web.cta></x-web.cta> -->

</div>

@endsection

@section('footer')
<x-web.footer></x-web.footer>
@endsection