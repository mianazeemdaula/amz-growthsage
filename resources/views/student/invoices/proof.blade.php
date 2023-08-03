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
                <div>Invoices</div>
                <div>/</div>
                <div>Upload proof</div>
            </div>
        </div>

        <div class="text-slate-500">{{today()->format('d/m/Y')}}</div>
    </div>


    <!-- registratin form -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8">

        <div class="relative col-span-2">
            <div class="p-6 bg-white">
                <div class="flex items-center justify-between">
                    <div class="h3">Payment Proof</div>
                    <div class="flex justify-center items-center w-12 h-12 rounded-full bg-sky-100">
                        <i class="bi bi-receipt text-sky-600"></i>
                    </div>
                </div>
                <div class="divider my-4"></div>
                <p class="mt-2 leading-relaxed">Please upload fee payment proof. Images in .png, .jpg and .jpeg formats will be accepted with maximum size upto 5MB</p>

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

                <form action="{{route('enrollments.update',$enrollment)}}" method='post' class="flex flex-col w-full mt-4" enctype="multipart/form-data" onsubmit="return validate(event)">
                    @csrf
                    @method('PATCH')
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center">

                        <div class="flex flex-col flex-1">
                            <!-- <input type="hidden" name="enrollment_id" value="{{$enrollment->id}}"> -->


                            <label for="" class="mt-6">Image</label>
                            <input type="file" id='pic' name='image' placeholder="Image" class='py-2' onchange='preview_pic()' required>

                        </div>
                        <div class="flex flex-col justify-center items-center">
                            <img src="{{asset('images/payments/no-image.png')}}" alt="" id='preview_img' class="w-60">
                            <button type="submit" class="btn-blue w-60 py-2 mt-4">Upload Image</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- left panel ended -->
        <!-- right side panel started-->
        <div class="">
            <div class="p-6 bg-white">
                <x-student.profile :user="Auth::user()"></x-student.profile>
            </div>
            <div class="p-6 bg-white mt-6">
                <x-student.reg_progress :step="Auth::user()->enrollmentStatusFor(1)"></x-student.reg_progress>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function validate(event) {
        var name = $('#name').val()
        var validated = true;
        if (name == '') {
            validated = false
            Swal.fire({
                icon: 'warning',
                title: "Required input missing!",
                timer: 1500,
            });
        }
        return validated;
    }

    function preview_pic() {
        const [file] = pic.files
        if (file) {
            preview_img.src = URL.createObjectURL(file)
        }
    }

    // check only single color
</script>
@endsection