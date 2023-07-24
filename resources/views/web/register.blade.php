@extends('layouts.web')

@section('header')
<x-web.header></x-web.header>
@endsection
@section('body')

<div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

    <section>
        <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
            <div class="container text-center">
                <h2>Sign Up</h2>
                <nav>
                    <ol class="flex items-center justify-center space-x-3">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home </a></li>
                        <li class="breadcrumb-item">-</li>
                        <li class="text-primary">Signup</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- contact us -->

        <div class="container">
            <div class="nav-tab-wrapper tabs  section-padding">
                <div class="container">
                    <div class=" grid grid-cols-12 gap-[30px]">
                        <div class="xl:col-span-5 lg:col-span-6 col-span-12 ">
                            <div class="mini-title">Register Now</div>
                            <h4 class="column-title ">
                                Registeration
                                <span class="shape-bg">
                                    Why?</span>
                            </h4>
                            <div>
                                To begin with, you will need to register for the program on our website. Once you've filled in the necessary details and completed the payment process, you'll receive an email confirmation with further instructions.
                            </div>

                        </div>
                        <div class="xl:col-span-7 lg:col-span-6 col-span-12">
                            <div class="bg-white shadow-box7 p-8 rounded-md">
                                <form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
                                    <div class="md:grid-cols-2 grid grid-cols-1 gap-[30px] mt-6 ">
                                        <div>
                                            <input type="text" name="name" class="from-control" placeholder="Name*">
                                        </div>
                                        <div>
                                            <input type="text" name="phone" class="from-control" placeholder="Phone*">
                                        </div>
                                        <div>
                                            <input type="email" name="email" class=" from-control" placeholder="Email*">
                                        </div>
                                        <div>
                                            <select name="qualification" id="" class="form-control w-full border-none">
                                                <option value="">Qualification*</option>
                                                <option value="1">Intermediate</option>
                                                <option value="2">Graduation</option>
                                                <option value="3">Master</option>
                                                <option value="4">PhD</option>
                                            </select>
                                        </div>
                                        <div class="md:col-span-2 col-span-1">
                                            <input type="text" name="address" class=" from-control" placeholder="Address *">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-4" type="submit" name="submit">
                                        Register Me
                                    </button>
                                </form>
                                <div class="mt-8 py-4 border-t border-slate-400 border-dashed">
                                    <a href="#" class="text-secondary text-xl">I already have an account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

@endsection

@section('footer')
<x-web.footer></x-web.footer>
@endsection