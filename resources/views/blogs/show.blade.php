@extends('layouts.web')

@section('header')
<x-web.header></x-web.header>
@endsection
@section('body')

<div class="font-gilroy font-medium text-gray text-lg leading-[27px]">

    <section>
        <div class="breadcrumbs section-padding bg-[url('../images/all-img/bred.png')] bg-cover bg-center bg-no-repeat">
            <div class="container text-center">
                <h2>Learning Differece</h2>
                <nav>
                    <ol class="flex items-center justify-center space-x-3">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home </a></li>
                        <li class="breadcrumb-item">-</li>
                        <li class="breadcrumb-item"><a href="{{url('blogs')}}">Blogs </a></li>
                        <li class="text-primary">Blog 1 </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

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
                                    We believe in providing high-quality education that doesn't come with a hefty price tag. Our Amazon Product Hunting Training Program is competitively priced to ensure that financial constraints don't stand in the way of individuals eager to learn and earn.
                                </p>
                                <blockquote class=" bg-secondary p-8 rounded-md bg-[url('../images/all-img/bb.png')] bg-cover bg-no-repeat bg-center my-8 text-white">
                                    <img src="assets/images/svg/q.svg" alt="">
                                    <div class=" text-xl font-semibold my-6">
                                        “ Education is one of the most powerful aspects of life. Education and learning allow us to make sense of the world
                                        around us, the world inside of us, and where we fit within the world.”
                                    </div>
                                    <div class=" flex items-center space-x-3">
                                        <span class=" inline-flex h-[3px] w-12 bg-white"></span>
                                        <span class=" text-xl font-semibold">Rosalina D. Jackson</span>
                                    </div>
                                </blockquote>
                                <p>
                                    We've consciously kept our fee structure affordable, but this does not mean a compromise on quality. Our program is designed to deliver maximum value, making every rupee invested by our students worthwhile. We believe in the principle of value-based education, where the cost is justified by the quality of knowledge and skills acquired.
                                </p>
                                <p>
                                    Our affordable fee structure underlines our commitment to making this valuable skill accessible to as many people as possible. Learning with us is not just cost-effective; it's an investment in a brighter, more prosperous future.
                                </p>
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

                <!-- blogs navbar -->
                <div class="lg:col-span-4 col-span-12">
                    <x-web.blogs_nav></x-web.blogs_nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
<x-web.footer></x-web.footer>
@endsection