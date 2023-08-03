@extends('layouts.admin')

@section('header')
    <x-student.header></x-student.header>
@endsection
@section('sidebar')
    <x-admin.sidebar page='home'></x-admin.sidebar>
@endsection

@section('body')
    <div class="container px-6">
        <!--welcome  -->
        <div class="flex items-center py-6">
            <div class="flex-1">
                <div class="h2">Welcome dear {{ Auth::user()->name }}!</div>
                <div class="bread-crumb">
                    <div>Home</div>
                    <div>/</div>
                    <div>Student</div>
                    <div>/</div>
                    <div>View</div>
                </div>
            </div>
            <div class="text-slate-500">{{ today()->format('d/m/Y') }}</div>
        </div>

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
                <div class="p-6 bg-white grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 ">
                    <div class="flex items-center border-r-2 border-red-200 col-span-1">
                        <img class="w-80 h-80 object-cover bg-blue-400"
                            src="{{ asset('images/payments/' . $model->image) }}" alt="not found" srcset="">
                        <div>{{ $model->updated_at }}</div>
                    </div>
                    <div class="">
                        <div class="border-b-2">
                            <div>User Profile</div>
                            <div class="flex justify-between">
                                <div class="flex sp ace-x-2">
                                    <div class="text-gray-600 text-sm">Course</div>
                                    <div class="font-bold text-sm">{{ $model->course->name }}</div>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="text-gray-600 text-sm">Course Fee</div>
                                    <div class="font-bold text-sm">{{ $model->course->fee }}</div>
                                </div>
                                <div class="flex space-x-2">
                                    <div class="text-gray-600 text-sm">Name</div>
                                    <div class="font-bold text-sm">{{ $model->user->name }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="p-2 flex justify-between">
                            <form action="{{ route('admin.invoices.update', $model->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="accepted">
                                <button type="submit" class="btn-blue">Accept</button>
                            </form>
                            <form action="{{ route('admin.invoices.update', $model->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="rejected">
                                <button type="submit" class="btn-blue">Rejected</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div>
                <div class="p-6 bg-white">
                    <!-- <x-student.upcoming></x-student.upcoming> -->
                </div>
            </div>

        </div>
    </div>
@endsection
