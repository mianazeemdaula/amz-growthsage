@extends('layouts.admin')

@section('header')
<x-student.header></x-student.header>
@endsection
@section('sidebar')
<x-admin.sidebar page='faqs'></x-admin.sidebar>
@endsection

@section('body')
<div class="container px-6">
    <!--welcome  -->
    <div class="flex items-center py-6">
        <div class="flex-1">
            <div class="h2">Welcome dear {{ Auth::user()->name }}!</div>
            <div class="bread-crumb">
                <a href="{{url('admin')}}" class="link">Home</a>
                <div>/</div>
                <div>FAQs</div>
                <div>/</div>
                <div>View</div>
            </div>
        </div>
        <div class="text-slate-500">{{ today()->format('d/m/Y') }}</div>
    </div>

    <!-- pallet boxes -->
    <x-admin.pallets></x-admin.pallets>
    <!-- middle content panel starts-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 mt-8">
        <div class="relative col-span-2">
            <!-- user has already taken some course -->

            <!-- if student successfully cretated -->
            @if (session('success'))
            <div class="alert-success mb-8">
                <i class="bi-emoji-smile text-[24px] mr-4"></i>
                {{ session('success') }}
            </div>
            @endif
            <div class="p-6 bg-white grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8">
                <div class="items-center border-r-2 border-red-200">
                    <img class="w-20 h-20 object-cover rounded-full bg-blue-400" src="{{ asset('images/' . $model->profile->image) }}" alt="not found" srcset="">
                    <div>{{ $model->name }}</div>
                    <div>{{ $model->email }}</div>
                </div>
                <div>
                    <div class="border-b-2">
                        <div>User Profile</div>
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Country</div>
                                <div class="font-bold text-sm">{{ $model->profile->country->name }}</div>
                            </div>
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Language</div>
                                <div class="font-bold text-sm">{{ $model->profile->language->name }}</div>
                            </div>
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Phone</div>
                                <div class="font-bold text-sm">{{ $model->profile->phone }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="border-b-2 ">
                        <div>Courses</div>
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Joined</div>
                                <div class="font-bold text-sm">{{ $model->enrollments->count() }}</div>
                            </div>
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Fee Paid</div>
                                <div class="font-bold text-sm">{{ $model->enrollments()->whereFeePaid(true)->count() }}
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Completed</div>
                                <div class="font-bold text-sm">{{ 0 }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div>Referral</div>
                        <div class="flex justify-between">
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Total Referral</div>
                                <div class="font-bold text-sm">
                                    {{ \App\Models\User::where('referral_id', $model->id)->count() }}
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Country</div>
                                <div class="font-bold text-sm">{{ $model->profile->country->name }}</div>
                            </div>
                            <div class="flex space-x-2">
                                <div class="text-gray-600 text-sm">Country</div>
                                <div class="font-bold text-sm">{{ $model->profile->country->name }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <div class="p-6 bg-white">
                <x-student.profile :user="$model" mode='full'></x-student.profile>
                <!-- <x-student.upcoming></x-student.upcoming> -->
            </div>
        </div>

    </div>
</div>
@endsection