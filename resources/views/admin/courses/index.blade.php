@extends('layouts.student')

@section('header')
<x-student.header></x-student.header>
@endsection
@section('sidebar')
<x-admin.sidebar page='courses'></x-admin.sidebar>
@endsection

@section('body')
<div class="container px-6">
    <!--welcome  -->
    <div class="flex items-center py-6">
        <div class="flex-1">
            <div class="h2">Welcome dear {{ Auth::user()->name }}!</div>
            <div class="bread-crumb">
                <a href="{{ url('admin') }}" class="link">Home</a>
                <div>/</div>
                <div>Students</div>
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
                <div class="h3">Courses</div>
                <div class="divider my-4"></div>
                <table class="w-full">
                    <thead>
                        <tr class="text-sm font-semibold">
                            <td>ID</td>
                            <td>Name</td>
                            <td>Lectures Count</td>
                            <td>Fee</td>
                            <td>Active</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($collection as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->lectures_count }}</td>
                            <td>{{ $item->fee }}</td>
                            <td>{{ $item->active ? 'Yes' : 'No' }}</td>
                            <td class="text-center">
                                <!-- <a href="#"><span class="bi-eye mr-2"></span></a> -->
                                <a href="{{route('admin.courses.edit',$item)}}"><span class="bi-pencil-square text-green-600 text-[16px]"></span></a>
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