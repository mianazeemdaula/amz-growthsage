@extends('layouts.student')

@section('header')
<x-student.header></x-student.header>
@endsection
@section('sidebar')
<x-student.sidebar page='courses'></x-student.sidebar>
@endsection

@section('body')
<div class="container px-6">
    <!--welcome  -->
    <div class="flex items-center py-6">
        <div class="flex-1">
            <div class="h2">Registration</div>
            <div class="bread-crumb">
                <a href="{{url('students')}}" class="link">Home</a>
                <div>/</div>
                <div>Registration</div>
            </div>
        </div>

        <div class="text-slate-500">{{today()->format('d/m/Y')}}</div>
    </div>

    @if ($errors->any())
    <div class="alert-danger mt-8">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session('success'))
    <div class="flex alert-success items-center mt-8">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
        </svg>

        {{session('success')}}
    </div>
    @endif

    <!-- registratin form -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8">

        <div class="relative col-span-2">
            <!-- enroll -->
            <div class="p-6 rounded-lg bg-white">
                <div class="h2">Amazon Product Hunting</div>
                <p class="text-slate-600 mt-1 leading-relaxed">We have thoughtfully designed curriculum that combines industry insights and practical skills for you. Upon completion of this program, you will be well-versed with the tools, techniques, and strategies to identify profitable products, understand market trends, and make informed decisions to maximize your earnings.</p>
                <div class="flex items-center space-x-4 mt-4">
                    <i class="bi-arrow-down-circle animate-bounce text-[24px] text-blue-600 mt-2"></i>
                    <p class="text-blue-600">Once you are registered, course content will be accessible.</p>
                </div>
                <div class="h3 mt-4 text-red-600">Registration Procedure</div>
                <ul class="mt-2 ml-3">
                    <li class="flex items-center space-x-3 text-secondary">
                        <i class="bi-1-circle"></i>
                        <div>Complete your profile</div>
                        <i class="bi-check-lg"></i>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-2-circle"></i>
                        <div>Apply for regisration</div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-3-circle"></i>
                        <div>Pay your fee through bank or JazzCash </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-4-circle"></i>
                        <div>Update your payment status </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-5-circle"></i>
                        <div>Wait for system notification of payment confirmation (max 24 hrs) </div>
                    </li>

                </ul>

                <div class="text-slate-600 mt-4 leading-relaxed bg-sky-100 p-4">
                    <div class="flex items-center">
                        <div class="w-8 justify-center items-center">
                            <a href='' class="relative">
                                <i class="bi bi-bell"></i>
                                <div class="absolute flex justify-center items-center h-3 w-3 top-0 right-0 rounded-full">
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-400"></span>
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75">
                                        <img src="{{asset('/images/.png')}}" alt="" class="w-8">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <p>Look for system notifications on top right corner</p>
                    </div>
                </div>
                <form action="{{route('enrollments.store')}}" method='post' class="flex flex-col w-full mt-4" enctype="multipart/form-data" onsubmit="return validate(event)">
                    @csrf

                    <input type="hidden" name='course_id' value="1">
                    <input type="hidden" name='user_id' value="{{$user->id}}">
                    <div>
                        <button type="submit" class="btn-blue">Apply Now</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- left panel ended -->
        <!-- right side panel started-->
        <div class="">
            <div class="p-6 bg-white">
                <x-student.profile :user="Auth::user()"></x-student.profile>
            </div>
            <div class="p-6 bg-white mt-6">
                <x-student.reg_progress :step="Auth::user()->enrollmentStatusFor(1)"></x-student.reg_progress>
            </div>
        </div>
    </div>
</div>
@endsection