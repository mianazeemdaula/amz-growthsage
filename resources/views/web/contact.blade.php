@extends('layouts.web')

@section('header')
<x-web.header></x-web.header>
@endsection
@section('body')

<div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

    <section>
        <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
            <div class="container text-center">
                <h2>Contact Us</h2>
                <nav>
                    <ol class="flex items-center justify-center space-x-3">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home </a></li>
                        <li class="breadcrumb-item">-</li>
                        <li class="text-primary">Contact Us</li>
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
                            <div class="mini-title">Contact Us</div>
                            <h4 class="column-title ">
                                Get In Touch
                                <span class="shape-bg">
                                    Today</span>
                            </h4>
                            <div>
                                We understand that learning a new skill, especially one as dynamic as Amazon product hunting, comes with its unique set of challenges. That's why we have a dedicated support team in place to guide our students at every step of their learning journey.
                                Our support team is quick to respond to queries, ensuring that no question goes unanswered.
                            </div>

                            <ul class=" list-item space-y-6 pt-8">
                                <li class="flex">
                                    <div class="flex-none mr-6">
                                        <div class="">
                                            <img src="{{asset('images/svg/mail.svg')}}" alt="" class="">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class=" lg:text-xl text-lg mb-1">Email-Us :</h4>
                                        <div>info@growth-sage.com</div>
                                    </div>
                                </li>
                                <li class="flex">
                                    <div class="flex-none mr-6">
                                        <div class="">
                                            <img src="{{asset('images/svg/call.svg')}}" alt="" class="">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class=" lg:text-xl text-lg mb-1">Call Us:</h4>
                                        <div>+92 321 5555434</div>
                                    </div>
                                </li>
                                <!-- <li class="flex">
                                    <div class="flex-none mr-6">
                                        <div class="">
                                            <img src="assets/images/svg/map.svg" alt="" class="">
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="lg:text-xl text-lg mb-1">Office :</h4>
                                        <div>Mountain Green Road 2389, NY, USA</div>
                                    </div>
                                </li> -->
                            </ul>
                        </div>
                        <div class="xl:col-span-7 lg:col-span-6 col-span-12">
                            <div class="bg-white shadow-box7 p-8 rounded-md">
                                <form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
                                    <div class=" md:grid-cols-2 grid grid-cols-1 gap-[30px] mt-6 ">
                                        <div>
                                            <input type="text" name="name" class=" from-control" placeholder="Name*">
                                        </div>
                                        <div>
                                            <input type="email" name="email" class=" from-control" placeholder="Email*">
                                        </div>
                                        <div>
                                            <input type="text" name="subject" class=" from-control" placeholder="Subject *">
                                        </div>
                                        <div>
                                            <input type="website" name="website" class=" from-control" placeholder="Website Address">
                                        </div>
                                        <div class="md:col-span-2 col-span-1">
                                            <textarea class=" from-control" name="message" placeholder="Your Message*" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mt-[30px]" type="submit" name="submit">
                                        Send Message
                                    </button>
                                </form>
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