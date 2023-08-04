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
            <div class="h2">Courses</div>
            <div class="bread-crumb">
                <a href="{{url('students')}}" class="link">Home</a>
                <div>/</div>
                <div>Courses</div>
            </div>
        </div>

        <div class="text-slate-500">{{today()->format('d/m/Y')}}</div>
    </div>

    <!-- middle panel-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8">
        <div class="relative col-span-2">
            @if($user->enrollments->count()==0)
            <div class="p-6 rounded-lg  bg-blue-100 mb-8">
                <x-student.nocourse_msg></x-student.nocourse_msg>
            </div>
            @endif

            @if(session('success'))
            <div class="p-6 rounded-lg bg-white mb-8">
                <div class="alert-success">
                    <i class="bi-emoji-smile text-[24px] mr-4"></i>
                    {{session('success')}}
                </div>

            </div>
            @endif
            <div class="p-6 rounded-lg bg-white">
                <x-student.course :course='$course'></x-student.course>
                <div class="my-6 border-t border-slate-200 border-dashed"></div>
                <x-student.course_status :status="$user->enrollmentStatusFor(1)"></x-student.course_status>
            </div>

        </div>

        <!-- right side panel -->
        <div class="">
            <div class="p-6 bg-white">
                <x-student.profile :user="$user"></x-student.profile>
            </div>
            <div class="p-6 bg-white mt-6">
                <x-student.reg_progress :step="$user->enrollmentStatusFor(1)"></x-student.reg_progress>
            </div>
        </div>
    </div>
</div>
@endsection