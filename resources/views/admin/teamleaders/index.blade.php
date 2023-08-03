@extends('layouts.admin')

@section('header')
<x-student.header></x-student.header>
@endsection
@section('sidebar')
<x-admin.sidebar page='teamleaders'></x-admin.sidebar>
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
                <div>Team Leaders</div>
            </div>
        </div>
        <div class="text-slate-500">{{ today()->format('d/m/Y') }}</div>
    </div>

    <!-- middle content panel starts-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 mt-8">
        <div class="relative col-span-3">

            @if (session('success'))
            <div class="alert-success mb-8">
                <i class="bi-emoji-smile text-[24px] mr-4"></i>
                {{ session('success') }}
            </div>
            @endif

            <div class="bg-white p-4 overflow-x-auto">
                <div class="h3">Team Leaders</div>
                <div class="divider my-4"></div>
                <table class="w-full">
                    <thead>
                        <tr class="text-sm font-semibold">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Courses</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($collection as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->profile->phone }}</td>
                            <td>{{ $item->enrollments->count() }}</td>
                            <td>
                                <a href="http://"><span class="bi-eye"></span></a>
                                <a href="http://"><span class="bi-pencil"></span></a>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
                <x-web-pagination :paginator="$collection" />
            </div>
        </div>

    </div>
</div>
@endsection