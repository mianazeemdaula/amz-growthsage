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
                    <div>FAQ Category</div>
                    <div>/</div>
                    <div>FAQ</div>
                    <div>/</div>
                    <div>Create</div>
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
                    <div class="h2">Create FAQ</div>
                    <div class="text-slate-500 mt-1">Please provide following information</div>
                    <form action="{{ route('admin.faq-cats.faqs.update', [$catId, $model->id]) }}" method='post'
                        class="flex flex-col w-full mt-4" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-1 lg:grid-cols-2 mt-3 text-slate-600 gap-4">
                            <div>
                                <label for="">Question*</label>
                                <input type="text" name='question' value="{{ $model->question }}" class='custom-input'>
                                @error('question')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="lg:col-span-2">
                                <label for="">Answer</label>
                                <input type="text" name='answer' value="{{ $model->answer }}" class='custom-input'>
                                @error('answer')
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
                    {{-- <x-student.profile :user="$model" mode='full'></x-student.profile> --}}
                    <!-- <x-student.upcoming></x-student.upcoming> -->
                </div>
            </div>

        </div>
    </div>
@endsection
