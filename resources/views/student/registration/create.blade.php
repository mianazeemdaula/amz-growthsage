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

    @php $step=3; @endphp
    <!-- registratin form -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8">

        <div class="relative col-span-2">
            <!-- profile completion -->
            @if($step==0)
            <div class="p-6 rounded-lg  bg-white">
                <div class="h2">Complete Your Profile</div>
                <div class="text-slate-500 mt-1">Please provide following information</div>
                <form action="{{route('registration.store')}}" method='post' class="flex flex-col w-full mt-4" enctype="multipart/form-data" onsubmit="return validate(event)">
                    @csrf
                    <div class="grid grid-cols-1 lg:grid-cols-2 mt-3 text-slate-600 gap-4">
                        <div>
                            <label for="">Language*</label>
                            <select name="" id="" class="w-full custom-input">
                                <option value="EN">English</option>
                                <option value="UR">Urdu</option>
                                <option value="AR">Arabic</option>
                                <option value="PR">Persian</option>
                                <option value="CH">Chinese</option>
                            </select>

                        </div>
                        <div>
                            <label for="">Experience (if any)</label>
                            <input type="text" class='custom-input'>
                        </div>
                        <div>
                            <label for="">Phone*</label>
                            <input type="text" class='custom-input'>
                        </div>
                        <div>
                            <label for="">Country*</label>
                            <input type="text" class='custom-input'>
                        </div>
                        <div>
                            <label for="">Province</label>
                            <input type="text" class='custom-input'>
                        </div>
                        <div>
                            <label for="">City*</label>
                            <input type="text" class='custom-input'>
                        </div>

                        <div class="lg:col-span-2">
                            <label for="">Address</label>
                            <input type="text" class='custom-input'>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn-blue">Submit Now</button>
                        </div>
                    </div>

                </form>

            </div>
            @endif
            <!-- apply -->
            @if($step==1)
            <div class="p-6 rounded-lg bg-white">
                <div class="h2">Amazon Product Hunting</div>
                <p class="text-slate-600 mt-1 leading-relaxed">We have thoughtfully designed curriculum that combines industry insights and practical skills for you. Upon completion of this program, you will be well-versed with the tools, techniques, and strategies to identify profitable products, understand market trends, and make informed decisions to maximize your earnings.</p>
                <div class="flex items-center space-x-4 mt-4">
                    <i class="bi-arrow-down-circle animate-bounce text-[24px] text-blue-600 mt-2"></i>
                    <p class="text-blue-600">Once you are registered, course content will be accessible.</p>
                </div>
                <div class="h3 mt-4 text-red-600">Registration Procedure</div>
                <ul class="mt-2 ml-3">
                    <li class="flex items-center space-x-3 text-secondary">
                        <i class="bi-1-circle"></i>
                        <div>Complete your profile</div>
                        <i class="bi-check-lg"></i>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-2-circle"></i>
                        <div>Apply for regisration</div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-3-circle"></i>
                        <div>Pay your fee through bank or JazzCash </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-4-circle"></i>
                        <div>Update your payment status </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-5-circle"></i>
                        <div>Wait for system notification of payment confirmation (max 24 hrs) </div>
                    </li>

                </ul>

                <div class="text-slate-600 mt-4 leading-relaxed bg-sky-100 p-4">
                    <div class="flex items-center">
                        <div class="w-8 justify-center items-center">
                            <a href='' class="relative">
                                <i class="bi bi-bell"></i>
                                <div class="absolute flex justify-center items-center h-3 w-3 top-0 right-0 rounded-full">
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-400"></span>
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75">
                                        <img src="{{asset('/images/.png')}}" alt="" class="w-8">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <p>Look for system notifications on top right corner</p>
                    </div>
                </div>
                <form action="{{route('registration.store')}}" method='post' class="flex flex-col w-full mt-4" enctype="multipart/form-data" onsubmit="return validate(event)">
                    @csrf
                    <input type="hidden" name='course_id' value="">
                    <div>
                        <button type="submit" class="btn-blue">Apply Now</button>
                    </div>
                </form>
            </div>
            @endif
            <!-- payment -->
            @if($step==2)
            <div class="p-6 rounded-lg bg-white">
                <div class="flex items-center justify-between">
                    <div class="h2">Amazon Product Hunting</div>
                    <div class="flex justify-center items-center w-12 h-12 rounded-full bg-orange-100">
                        <i class="bi bi-book text-orange-600"></i>
                    </div>
                </div>
                <div class="divider mt-4"></div>
                <div class="h3 mt-4 text-red-600">Registration In Progress</div>
                <ul class="mt-2 ml-3">
                    <li class="flex items-center space-x-3 text-secondary">
                        <i class="bi-1-circle"></i>
                        <div>Complete your profile</div>
                        <i class="bi-check-lg"></i>
                    </li>
                    <li class="flex items-center space-x-3 mt-2 text-secondary">
                        <i class="bi-2-circle"></i>
                        <div>Apply for regisration</div>
                        <i class="bi-check-lg"></i>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-3-circle"></i>
                        <div>Pay your fee through bank or JazzCash </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-4-circle"></i>
                        <div>Update your payment status </div>
                    </li>
                    <li class="flex items-center space-x-3 mt-2">
                        <i class="bi-5-circle"></i>
                        <div>Wait for system notification of payment confirmation (max 24 hrs) </div>
                    </li>

                </ul>

                <div class="text-slate-600 mt-4 leading-relaxed bg-sky-100 p-4">
                    <div class="flex items-center">
                        <div class="w-8 justify-center items-center">
                            <a href='' class="relative">
                                <i class="bi bi-bell"></i>
                                <div class="absolute flex justify-center items-center h-3 w-3 top-0 right-0 rounded-full">
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-400"></span>
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75">
                                        <img src="{{asset('/images/.png')}}" alt="" class="w-8">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <p>Look for system notifications on top right corner</p>
                    </div>
                </div>
            </div>
            <!-- payment option -->
            <div class="p-6 rounded-lg bg-white mt-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 rounded-lg border-slate-300 gap-4">
                    <div class="h3 lg:col-span-2">Payments Options</div>
                    <div class="divider my-6 lg:col-span-2"></div>
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
                </div>
                <div class="divider my-6"></div>
                <a href="" class="btn-blue">Upload Payment Proof</a>
            </div>
            @endif
            <!-- step upload payment proof -->
            @if($step==3)
            <div class="p-6 rounded-lg bg-white">
                <div class="flex items-center justify-between">
                    <div class="h2">Amazon Product Hunting</div>
                    <div class="flex justify-center items-center w-12 h-12 rounded-full bg-orange-100">
                        <i class="bi bi-book text-orange-600"></i>
                    </div>
                </div>
                <div class="divider mt-4"></div>
                <div class="h3 mt-4 text-red-600">Registration In Progress</div>

                <div class="text-slate-600 mt-4 leading-relaxed bg-sky-100 p-4">
                    <div class="flex items-center">
                        <div class="w-8 justify-center items-center">
                            <a href='' class="relative">
                                <i class="bi bi-bell"></i>
                                <div class="absolute flex justify-center items-center h-3 w-3 top-0 right-0 rounded-full">
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-orange-400"></span>
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-orange-400 opacity-75">
                                        <img src="{{asset('/images/.png')}}" alt="" class="w-8">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <p>Look for system notifications on top right corner</p>
                    </div>
                </div>
            </div>
            <!-- payment option -->
            <div class="p-6 rounded-lg bg-white mt-6">
                <div class="grid grid-cols-1 lg:grid-cols-2 rounded-lg border-slate-300 gap-4">
                    <div class="h3 lg:col-span-2">Payments Options</div>
                    <div class="divider my-6 lg:col-span-2"></div>
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
                </div>
                <div class="divider my-6"></div>
                <a href="" class="btn-blue">Upload Payment Proof</a>
            </div>
            @endif
        </div>
        <!-- left panel ended -->
        <!-- right side panel started-->
        <div class="">
            <div class="p-6 bg-white">
                <x-student.profile_100></x-student.profile_100>
            </div>
            <div class="p-6 bg-white mt-6">
                <x-student.reg_progress></x-student.reg_progress>
            </div>
        </div>
    </div>
</div>
@endsection