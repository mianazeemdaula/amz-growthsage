@extends('layouts.web')

@section('header')
<x-web.header></x-web.header>
@endsection
@section('body')

<div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

    <section>
        <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
            <div class="container text-center">
                <h2>Login</h2>
                <nav>
                    <ol class="flex items-center justify-center space-x-3">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home </a></li>
                        <li class="breadcrumb-item">-</li>
                        <li class="text-primary">Login</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- contact us -->
        <!-- if query submission error -->
        @if ($errors->any())
        <div class="container">
            <div class="bg-red-100 rounded-md text-xl w-full mt-16 p-16">
                <h4 class="text-primary">Error!</h4>
                <ul class="space-y-4">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        <!-- if registration requestion successful -->
        @if(session('success'))
        <div class="container">
            <div class="flex flex-col justify-center items-center bg-green-100 rounded-lg text-xl p-8 my-16">
                <h4 class="text-secondary">Success!</h4>
                <p class="text-slate-800 mt-6">{{session('success')}}</p>
            </div>
        </div>
        <!-- display registration form -->
        @else
        <div class="container">
            <div class="nav-tab-wrapper tabs  section-padding">
                <div class="container">
                    <div class=" grid grid-cols-12 gap-[30px]">
                        <div class="xl:col-span-5 lg:col-span-6 col-span-12 ">
                            <div class="mini-title">Welcome to Growth-Sage</div>
                            <h4 class="column-title ">
                                Login
                                <span class="shape-bg">
                                    Now</span>
                            </h4>
                            <div>
                                Using our deep understanding of online sales, we've created an easy-to-follow online training program. This isn't just about teaching, it's about giving our students real-world knowledge and hands-on practice
                            </div>

                        </div>
                        <div class="xl:col-span-7 lg:col-span-6 col-span-12">
                            <div class="bg-white shadow-box7 p-8 rounded-md">
                                <form class="form" method="post" action="{{url('login')}}">
                                    @csrf
                                    <div class="grid grid-cols-1 gap-[30px] mt-6 ">
                                        <div>
                                            <input type="email" name="email" class=" from-control" placeholder="Email*" required>
                                        </div>
                                        <div>
                                            <input type="password" id='password' name="password" class=" from-control" placeholder="Password*" required>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-4" type="submit" name="submit">
                                        Login me
                                    </button>
                                </form>
                                <div class="mt-8 py-4 border-t border-slate-400 border-dashed">
                                    <a href="{{url('register')}}" class="text-secondary text-xl">I don't have an account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </section>

</div>

@endsection

@section('footer')
<x-web.footer></x-web.footer>
@endsection