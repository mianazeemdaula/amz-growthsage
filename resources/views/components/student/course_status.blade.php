@if($status==0)
<div class="flex justify-between">
    <div class="h3">Enrollment Status</div>
    <div class="text-red-800 font-bold text-sm">Profile Incomplete</div>
</div>
<div class="mt-8">
    <a href="{{route('students.create')}}" class="btn-blue">Update Profile</a>
</div>
@elseif($status==1)
<div class="flex justify-between">
    <div class="h3">Enrollment Status</div>
    <div class="text-red-800 font-bold text-sm">Not Applied</div>
</div>
<div class="mt-8">
    <form action="{{route('enrollments.store')}}" method='post' class="flex flex-col w-full mt-4" enctype="multipart/form-data" onsubmit="return validate(event)">
        @csrf
        <input type="hidden" name='course_id' value="1">
        <input type="hidden" name='user_id' value="{{Auth::user()->id}}">
        <div>
            <button type="submit" class="btn-blue">Enroll Now</button>
        </div>
    </form>
</div>
@elseif($status==2)
<div class="flex justify-between">
    <div class="h3">Enrollment Status</div>
    <div class="text-orange-800 font-bold text-sm">Fee Voucher Issued</div>
</div>
<div class="mt-8">
    <a href="{{route('invoices.show',1)}}" class="btn-blue">Pay Voucher</a>
</div>
@elseif($status==3)
<div class="flex justify-between">
    <div class="h3">Enrollment Status</div>
    <div class="text-blue-800 font-bold text-sm">Verfication in Process</div>
</div>
<div class="mt-8">
    <a href="" class="btn-blue">See Notification</a>
</div>
@elseif($status==4)
<div class="flex justify-between">
    <div class="h3">Enrollment Status</div>
    <div class="text-green-800 font-bold text-sm">Enrolled</div>
</div>
@endif