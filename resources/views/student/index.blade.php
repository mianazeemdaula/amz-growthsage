@extends('layouts.student')

@section('header')
<x-student.header></x-student.header>
@endsection
@section('sidebar')
<x-student.sidebar page='home'></x-student.sidebar>
@endsection

@section('body')
<div class="container px-6">
    <!--welcome  -->
    <div class="flex items-center py-6">
        <div class="flex-1">
            <div class="h2">Welcome dear {{$user->name}}!</div>
            <div class="bread-crumb">
                <div>Home</div>
                <div>/</div>
                <div>Students</div>
            </div>
        </div>

        <div class="text-slate-500">{{today()->format('d/m/Y')}}</div>
    </div>

    Hello {{$course->lectures_count}}

    <!-- pallet boxes -->
    <x-student.pallets :user='$user'></x-student.pallets>
    <!-- middle content panel starts-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 mt-8">
        <div class="relative col-span-2">
            <!-- user has already taken some course -->
            @if($user->enrollments->count()>0)
            <div class="p-6 rounded-lg bg-white">
                <div class="h3">Today's Activity</div>
                <div class="w-full lg:w-3/4 mx-auto mt-8">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="flex">
                            <div class="w-12">
                                <i class="bi-laptop"></i>
                            </div>
                            <div class="flex-col flex-1">
                                <div class="text-slate-500 text-sm">Class</div>
                                <div class="text-sm font-bold">Amazon</div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-12">
                                <i class="bi-clipboard"></i>
                            </div>
                            <div class="flex-col flex-1">
                                <div class="text-slate-500 text-sm">Assignment</div>
                                <div class="text-sm font-bold">0 Assignments</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @elseif($user->profile)
            <!-- if student successfully cretated -->
            @if(session('success'))
            <div class="alert-success mb-8">
                <i class="bi-emoji-smile text-[24px] mr-4"></i>
                {{session('success')}}
            </div>
            @endif


            <!-- user has not taken any course, profile complete -->
            <!-- offer courses for registration  -->
            <div class="p-6 rounded-lg  bg-blue-100">
                <x-student.nocourse_msg></x-student.nocourse_msg>
            </div>

            <div class="p-6 rounded-lg  bg-white mt-6">
                <x-student.course :course='$course'></x-student.course>
                <div class="my-6 border-t border-slate-200 border-dashed"></div>
                <x-student.course_status :status="$user->enrollmentStatusFor(1)"></x-student.course_status>
            </div>
            @else
            <!-- profile incomplete -->
            <div class="p-6 rounded-lg  bg-blue-100">
                <x-student.noprofile_msg></x-student.noprofile_msg>
            </div>
            <div class="p-6 rounded-lg  bg-white mt-6">
                <div class="h3 text-blue-600">How can I access my course content?</div>
                <ul class="mt-2 ml-3">
                    <li class="flex items-center space-x-3 step done">
                        <i class="bi-1-circle"></i>
                        <div>Sign Up</div>
                        <i class="bi-check-lg"></i>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-2-circle"></i>
                        <div>Complete your profile</div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-3-circle"></i>
                        <div>Apply for regisration</div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-4-circle"></i>
                        <div>Pay your fee through bank or JazzCash </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-5-circle"></i>
                        <div>Update your payment status </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-6-circle"></i>
                        <div>Wait for system confirmation (max 24 hrs) </div>
                    </li>

                </ul>
                <div class="divider my-4"></div>
                <div class="">
                    <a href="{{route('students.create')}}" class="btn-blue">Go Next</a>
                </div>
            </div>
            @endif

        </div>
        <!-- middle content panel ended -->
        <!-- right sidebar starts -->
        <div>
            <div class="p-6 bg-white">
                <x-student.profile :user="$user" mode='full'></x-student.profile>
                <!-- <x-student.upcoming></x-student.upcoming> -->
            </div>
        </div>
        <!-- right sidebar ended -->

    </div>
</div>
@endsection