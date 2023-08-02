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
            <div class="h2">Welcome dear {{Auth::user()->name}}!</div>
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
                <div class="h2">@if($user->profile) 100% @else 40% @endif</div>
            </div>
            <div class="ico bg-green-100">
                <i class="bi bi-person-circle text-green-600"></i>
            </div>
        </a>
        <a href="" class="pallet-box">
            <div class="flex-1">
                <div class="title">Courses</div>
                <div class="h2">{{$user->enrollments->count()}}/1</div>
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
                                <div class="text-sm font-bold">2 Assignments</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @elseif($user->profile)
            <!-- user has not taken any course, profile complete -->
            <!-- offer courses for registration  -->
            <div class="p-6 rounded-lg  bg-blue-100">
                <x-student.nocourse_msg></x-student.nocourse_msg>
            </div>
            <div class="p-6 rounded-lg  bg-white mt-6">
                <x-student.course></x-student.course>
            </div>
            @else
            <!-- profile incomplete -->
            <div class="p-6 rounded-lg  bg-blue-100">
                <x-student.noprofile_msg></x-student.noprofile_msg>
            </div>
            <div class="p-6 rounded-lg  bg-white mt-6">

                <div class="h2">Complete Your Profile</div>
                <div class="text-slate-500 mt-1">Please provide following information</div>

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
                    <i class="bi-info-circle mr-4"></i>
                    {{session('success')}}
                </div>
                @endif

                <form action="{{route('students.store')}}" method='post' class="flex flex-col w-full mt-4" enctype="multipart/form-data" onsubmit="return validate(event)">
                    @csrf
                    <input type="hidden" name='user_id' value="{{$user->id}}">
                    <input type="hidden" name="course_id" value="1">
                    <div class="grid grid-cols-1 lg:grid-cols-2 mt-3 text-slate-600 gap-4">
                        <div>
                            <label for="">Language*</label>
                            <select name="language_id" id="" class="w-full custom-input">
                                @foreach($languages as $language)
                                <option value="{{$language->id}}">{{$language->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="">Country*</label>
                            <select name="country_id" id="" class="w-full custom-input">
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="">Province</label>
                            <input type="text" name='province' class='custom-input' value="Punjab">
                        </div>
                        <div>
                            <label for="">City*</label>
                            <input type="text" name='city' class='custom-input'>
                        </div>

                        <div class="lg:col-span-2">
                            <label for="">Address</label>
                            <input type="text" name='address' class='custom-input'>
                        </div>
                        <div>
                            <label for="">Phone*</label>
                            <input type="text" name='phone' class='custom-input'>
                        </div>
                        <div>
                            <label for="">Experience (if any)</label>
                            <input type="text" name='experience' class='custom-input'>
                        </div>
                        <div>
                            <label for="">Referral Code</label>
                            <input type="text" name="code" class="custom-input" placeholder="Referral Code if any">
                        </div>
                        <div></div>
                        <div class="mt-4">
                            <button type="submit" class="btn-blue">Submit Now</button>
                        </div>
                    </div>

                </form>
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