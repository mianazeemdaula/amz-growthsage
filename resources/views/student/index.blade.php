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
            <div class="h2">Welcome dear student!</div>
            <div class="bread-crumb">
                <div>Home</div>
                <div>/</div>
                <div>Students</div>
            </div>
        </div>

        <div class="text-slate-500">{{today()->format('d/m/Y')}}</div>
    </div>

    <!-- pallet boxes -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <a href="" class="pallet-box">
            <div class="flex-1">
                <div class="title">Profile</div>
                <div class="h2">20%</div>
            </div>
            <div class="ico bg-green-100">
                <i class="bi bi-person-circle text-green-600"></i>
            </div>
        </a>
        <a href="" class="pallet-box">
            <div class="flex-1">
                <div class="title">Courses</div>
                <div class="h2">1/1</div>
            </div>
            <div class="ico bg-orange-100">
                <i class="bi bi-book text-orange-600"></i>
            </div>
        </a>
        <a href="" class="pallet-box">
            <div class="flex-1 ">
                <div class="title">Task Finished</div>
                <div class="h2">5/10</div>
            </div>
            <div class="ico bg-teal-100">
                <i class="bi bi-card-checklist text-teal-600"></i>
            </div>
        </a>
        <a href="" class="pallet-box">
            <div class="flex-1">
                <div class="title">Scorage</div>
                <div class="h2">60%</div>
            </div>
            <div class="ico bg-sky-100">
                <i class="bi bi-graph-up text-sky-600"></i>
            </div>
        </a>
    </div>
    <!-- activity section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 mt-8">
        <div class="relative col-span-2 p-6 rounded-lg  bg-white">
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
                            <div class="text-sm font-bold">2 Assignments</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="p-6 bg-white">
            <x-student.upcoming></x-student.upcoming>
        </div>
    </div>
</div>
@endsection