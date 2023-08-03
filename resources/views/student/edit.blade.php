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
    <x-student.pallets :user='Auth::user()'></x-student.pallets>
    <!-- middle content panel starts-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 mt-8">
        <div class="relative col-span-2">
            <!-- profile incomplete -->
            <div class="p-6 rounded-lg  bg-white">
                <div class="h2">Edit Profile</div>
                <div class="text-slate-500 mt-1">Following information is editable</div>

                @if ($errors->any())
                <div class="alert-danger mt-8">
                    <div class="w-10">
                        <i class="bi-emoji-frown text-[24px]"></i>
                    </div>
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif

                @if(session('success'))
                <div class="alert-success mt-8">
                    <i class="bi-emoji-smile text-[24px] mr-4"></i>
                    {{session('success')}}
                </div>
                @endif

                @if(session('warning'))
                <div class="alert-warning mt-8">
                    <i class="bi-emoji-neutral text-[24px] mr-4"></i>
                    {{session('warning')}}
                </div>
                @endif

                <form action="{{route('students.update',$profile)}}" method='post' class="flex flex-col w-full mt-4" enctype="multipart/form-data" onsubmit="return validate(event)">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-1 lg:grid-cols-2 mt-3 text-slate-600 gap-4">
                        <div>
                            <label for="">Language*</label>
                            <select name="language_id" id="" class="w-full custom-input">
                                @foreach($languages as $language)
                                <option value="{{$language->id}}" @selected($profile->language_id==$language->id)>{{$language->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="">Country*</label>
                            <select name="country_id" id="" class="w-full custom-input">
                                @foreach($countries as $country)
                                <option value="{{$country->id}}" @selected($profile->country_id==$country->id)>{{$country->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="">Province</label>
                            <input type="text" name='province' class='custom-input' value="{{$profile->province}}">
                        </div>
                        <div>
                            <label for="">City*</label>
                            <input type="text" name='city' class='custom-input' value="{{$profile->city}}">
                        </div>

                        <div class="lg:col-span-2">
                            <label for="">Address</label>
                            <input type="text" name='address' class='custom-input' value="{{$profile->address}}">
                        </div>
                        <div>
                            <label for="">Phone*</label>
                            <input type="text" name='phone' class='custom-input' value="{{$profile->phone}}">
                        </div>
                        <div>
                            <label for="">Experience (if any)</label>
                            <input type="text" name='experience' class='custom-input' value="{{$profile->experience}}">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn-blue">Update Now</button>
                        </div>
                    </div>

                </form>
            </div>

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