@extends('layouts.student')

@section('header')
<x-student.header></x-student.header>
@endsection
@section('sidebar')
<x-student.sidebar></x-student.sidebar>
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


    <!-- registratin form -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8">
        <div class="relative col-span-2 p-6 rounded-lg  bg-white">
            <div class="h2">Register Now</div>
            <div class="grid grid-cols-1 lg:grid-cols-2 mt-3 text-slate-600 gap-4">
                <div>
                    <label for="">Name</label>
                    <input type="text" class="input">
                </div>
                <div>
                    <label for="">Name</label>
                    <input type="text" class="input">
                </div>
                <div>
                    <label for="">Name</label>
                    <input type="text" class="input">
                </div>
                <div>
                    <label for="">Name</label>
                    <input type="text" class="input">
                </div>
            </div>


        </div>
        <!-- right side panel -->
        <div class="p-6 bg-white">
            <x-student.profile></x-student.profile>
        </div>
    </div>
</div>
@endsection