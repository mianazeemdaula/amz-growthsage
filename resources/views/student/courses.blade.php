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
            <div class="h2">Courses</div>
            <div class="bread-crumb">
                <a href="{{url('students')}}" class="link">Home</a>
                <div>/</div>
                <div>Courses</div>
            </div>
        </div>

        <div class="text-slate-500">{{today()->format('d/m/Y')}}</div>
    </div>


    <!-- activity section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8">
        <div class="relative col-span-2 p-6 rounded-lg  bg-white">
            <div class="h2">Amazon Product Hunting</div>
            <div class="mt-3 text-slate-600">
                We have 30+ years experience of transforming practical skills to beginners & professionals.
                Upon completion of this program, you will be well-versed with the tools, techniques, and strategies to identify profitable products, understand market trends, and make informed decisions to maximize your earnings.
            </div>
            <div class="w-full lg:w-3/4 mx-auto mt-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex">
                        <div class="w-12">
                            <i class="bi-clock"></i>
                        </div>
                        <div class="flex-col flex-1">
                            <div class="text-slate-500 text-sm">Duration</div>
                            <div class="text-sm font-bold">3 months</div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-12">
                            <i class="bi-calendar2"></i>
                        </div>
                        <div class="flex-col flex-1">
                            <div class="text-slate-500 text-sm">Lectures</div>
                            <div class="text-sm font-bold">03 / week</div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-12">
                            <i class="bi-currency-dollar"></i>
                        </div>
                        <div class="flex-col flex-1">
                            <div class="text-slate-500 text-sm">Fee</div>
                            <div class="text-sm font-bold">PKR 10,000/-</div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-12">
                            <i class="bi-star"></i>
                        </div>
                        <div class="flex-col flex-1">
                            <div class="text-slate-500 text-sm">Rating</div>
                            <div class="text-sm font-bold">4.8</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- registration status -->

            <div class="my-6 border-t border-slate-200 border-dashed"></div>

            <div class="flex justify-between">
                <div class="h3">Registration Status</div>
                <div class="text-red-800 font-bold text-sm">Not Registered</div>
            </div>
            <div class="mt-8">
                <a href="" class="btn-blue ">Register Now</a>
            </div>

        </div>
        <!-- right side panel -->
        <div class="p-6 bg-white">
            <x-student.profile></x-student.profile>
        </div>
    </div>
</div>
@endsection