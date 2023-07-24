<footer class="bg-black bg-[url('../images/all-img/footer-bg-1.png')] bg-cover bg-center bg-no-repeat">
    <div class="section-padding container">
        <div class="grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-3">
            <div class="single-footer text-white">
                <div class="lg:max-w-[270px] text-white">
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
                    <div class="flex-1 lg:flex-none text-white">
                        <h4 class="mb-8 text-2xl font-bold text-white">Links</h4>
                        <ul class="list-item space-y-5">
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
                </div>
            </div>
            <div class="single-footer text-white">
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
    <div class="container border-t border-white border-opacity-[0.1] py-8 text-center text-base text-white">
        &copy; Copyright 2023 | Growth-Sage | All Rights Reserved
    </div>
</footer>