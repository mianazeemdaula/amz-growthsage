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
                <div class="flex items-center justify-between">
                    <div class="h2">Change Password</div>
                    <div class="flex justify-center items-center w-12 h-12 rounded-full bg-sky-100">
                        <i class="bi bi-lock text-sky-600"></i>
                    </div>
                </div>
                <div class="divider my-4"></div>

                @if ($errors->any())
                <div class="alert-danger mt-8 md:mx-24">
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
                <div class="alert-success mt-8 md:mx-24">
                    <i class="bi-emoji-smile text-[24px] mr-4"></i>
                    {{session('success')}}
                </div>
                @endif

                @if(session('warning'))
                <div class="alert-warning mt-8 md:mx-24">
                    <i class="bi-emoji-neutral text-[24px] mr-4"></i>
                    {{session('warning')}}
                </div>
                @endif

                <form action="{{route('student.change_password')}}" method="post" class="mt-8 md:px-24" onsubmit="return validate(event)">
                    @csrf
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label for="" class="text-slate-600 text-sm">Current Password</label>
                            <input type="text" id="current" name="current" class="custom-input" placeholder="Current password" required>

                        </div>
                        <div>
                            <label for="" class="text-slate-600 text-sm">New Password</label>
                            <input type="password" id="new" name="new" class="custom-input" placeholder="New password" required>

                        </div>
                        <div>
                            <label for="" class="text-slate-600 text-sm">Confirm Password</label>
                            <input type="password" id="confirm" class="custom-input" placeholder="Confirm new password" required>

                        </div>
                        <div>
                            <button type="submit" class="btn-blue">Change Password</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
        <!-- middle content panel ended -->
        <!-- right sidebar starts -->
        <div>
            <div class="p-6 bg-white">
                <x-student.profile :user="Auth::user()" mode='full'></x-student.profile>
                <!-- <x-student.upcoming></x-student.upcoming> -->
            </div>
        </div>
        <!-- right sidebar ended -->

    </div>
</div>
@endsection
@section('script')
<script>
    function reset() {
        $('#form')[0].reset();
    }

    function validate() {
        var current = $('#current').val();
        var new_password = $('#new').val()
        var confirm = $('#confirm').val()
        var msg = '';

        if (confirm != new_password) msg = 'Confirm password not matched';

        if (msg != '') {
            Swal.fire({
                icon: 'warning',
                title: msg,
                showConfirmButton: false,
                timer: 1500
            });
            return false;
        }

    }
</script>
@endsection