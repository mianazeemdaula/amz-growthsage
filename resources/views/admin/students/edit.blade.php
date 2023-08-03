@extends('layouts.admin')

@section('header')
<x-student.header></x-student.header>
@endsection
@section('sidebar')
<x-admin.sidebar page='students'></x-admin.sidebar>
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
                <div>Student</div>
                <div>/</div>
                <div>Edit</div>
            </div>
        </div>
        <div class="text-slate-500">{{ today()->format('d/m/Y') }}</div>
    </div>

    <!-- middle content panel starts-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 mt-8">
        <div class="relative col-span-2">
            <!-- user has already taken some course -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <p><strong>Opps Something went wrong</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- if student successfully cretated -->
            @if (session('success'))
            <div class="alert-success mb-8">
                <i class="bi-emoji-smile text-[24px] mr-4"></i>
                {{ session('success') }}
            </div>
            @endif
            <div class="p-6 rounded-lg  bg-white">
                <div class="h2">Update Student Profile</div>
                <div class="text-slate-500 mt-1">Please provide following information</div>
                <form action="{{ route('admin.students.update', $model->id) }}" method='post' class="flex flex-col w-full mt-4" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 lg:grid-cols-2 mt-3 text-slate-600 gap-4">
                        <div>
                            <label for="">Name*</label>
                            <input type="text" name='name' value="{{ $model->name }}" class='custom-input'>
                            @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="">Language*</label>
                            <select name="language_id" id="" class="w-full custom-input">
                                @foreach ($languages as $language)
                                <option value="{{ $language->id }}" @if ($model->profile->lanugage_id == $language->id) selected @endif>{{ $language->name }}</option>
                                @endforeach
                            </select>

                            @error('language_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="">Country*</label>
                            <select name="country_id" id="" class="w-full custom-input">
                                @foreach ($countries as $country)
                                <option value="{{ $country->id }}" @if ($model->profile->country_id == $country->id) selected @endif>{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="">Province</label>
                            <input type="text" name='province' value="{{ $model->profile->province }}" class='custom-input'>
                            @error('province')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="">City*</label>
                            <input type="text" name='city' value="{{ $model->profile->city }}" class='custom-input'>
                            @error('city')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="lg:col-span-2">
                            <label for="">Address</label>
                            <input type="text" name='address' value="{{ $model->profile->address }}" class='custom-input'>
                            @error('address')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="">Phone*</label>
                            <input type="text" name='phone' value="{{ $model->profile->phone }}" class='custom-input'>
                            @error('phone')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="">Experience (if any)</label>
                            <input type="text" name='experience' value="{{ $model->profile->experience }}" class='custom-input'>
                            @error('experience')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="">Referral Code</label>
                            <input type="text" name="referral_code" value="{{ $model->code }}" class="custom-input" placeholder="Referral Code if any" readonly>

                        </div>
                        <div>
                            <label for="">Type*</label>
                            <select name="role" id="" class="w-full custom-input">
                                @foreach (['student', 'teamleader'] as $type)
                                <option value="{{ $type }}" @if ($model->hasRole($type)) selected @endif>{{ Str::ucfirst($type) }}
                                </option>
                                @endforeach
                            </select>
                            @error('country_id')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn-blue">Submit Now</button>
                        </div>
                    </div>
                </form>
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