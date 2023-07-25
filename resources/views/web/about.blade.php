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
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home </a></li>
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
    <x-web.team></x-web.team>
    <x-web.cta></x-web.cta>

</div>

@endsection

@section('footer')
<x-web.footer></x-web.footer>
@endsection