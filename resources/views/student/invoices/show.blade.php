@extends('layouts.student')

@section('header')
<x-student.header></x-student.header>
@endsection
@section('sidebar')
<x-student.sidebar page='invoices'></x-student.sidebar>
@endsection

@section('body')
<div class="container px-6">
    <!--welcome  -->
    <div class="flex items-center py-6">
        <div class="flex-1">
            <div class="h2">Invoices</div>
            <div class="bread-crumb">
                <a href="{{url('students')}}" class="link">Home</a>
                <div>/</div>
                <div>Invoice</div>
            </div>
        </div>

        <div class="text-slate-500">{{today()->format('d/m/Y')}}</div>
    </div>

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
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
        </svg>

        {{session('success')}}
    </div>
    @endif

    <!-- registratin form -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8">

        <div class="relative col-span-2">
            <div class="p-6 rounded-lg bg-white">
                <div class="flex items-center justify-between">
                    <div class="h2">Payment Options</div>
                    <div class="flex justify-center items-center w-12 h-12 rounded-full bg-sky-100">
                        <i class="bi bi-receipt text-sky-600"></i>
                    </div>
                </div>
                <div class="divider my-4"></div>

                <p class="text-slate-600 leading-relaxed mt-2">
                    Please use one of the following payment options. After payment you must have to upload soft copy proof of your payment. System may take maximum 24 hrs for payment confirmation. Once it is confirmed, you will have access to your course content.
                </p>
                <div class="grid grid-cols-1 lg:grid-cols-2 rounded-lg border-slate-300 gap-4 mt-4">

                    <div class="divider lg:col-span-2"></div>
                    <div class="px-8">
                        <div class="flex justify-center item-center h-24">
                            <img src="{{asset('/images/icon/bank.png')}}" alt="" class="w-24">
                        </div>

                        <div class="text-slate-500 text-sm">Bank</div>
                        <div class="h3">Habib Metropolitan Bank</div>

                        <div class="mt-4 text-slate-500 text-sm">Account No.</div>
                        <div class="h3">6064320357714104853</div>

                        <div class="mt-4 text-slate-500 text-sm">Account Title</div>
                        <div class="h3">Zahid saleem</div>


                    </div>


                    <div class="px-8 border-t lg:border-t-0 lg:border-l boder-dashed border-slate-300">
                        <div class="flex justify-center items-center h-24">
                            <img src="{{asset('/images/icon/jazzcash.png')}}" alt="" class="w-16">
                        </div>
                        <div class="flex justify-center mt-4">
                            <img src="{{asset('/images/icon/QR.png')}}" alt="" class="w-32">
                        </div>
                    </div>

                    <div class="divider lg:col-span-2"></div>
                    <div class="h3 col-span-2 text-center">
                        <div>Total Fee: &nbsp PKR {{round($course->fee/3,0)}}</div>
                    </div>
                </div>
                <div class="divider my-6"></div>
                <div class="flex flex-col items-center">
                    <div class="w-48 h-48">
                        @if($enrollment->image)
                        <img src="{{asset('images/payments/'.$enrollment->image)}}" alt="">
                        @else
                        <img src="{{asset('images/payments/no-image.png')}}" alt="">
                        @endif
                    </div>
                    <p class="text-sm text-slate-600"></p>

                    <a href="{{url('invoice/proof', $enrollment->id)}}" class="btn-blue">Upload Payment Proof</a>

                </div>
            </div>

        </div>
        <!-- middle panel ended -->
        <!-- right side panel started-->
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