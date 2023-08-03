@extends('layouts.student')

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
                    <div>Students</div>
                </div>
            </div>
            <div class="text-slate-500">{{ today()->format('d/m/Y') }}</div>
        </div>

        <!-- pallet boxes -->
        <x-admin.pallets></x-admin.pallets>
        <!-- middle content panel starts-->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 mt-8">
            <div class="relative col-span-3">
                <!-- user has already taken some course -->

                <!-- if student successfully cretated -->
                @if (session('success'))
                    <div class="alert-success mb-8">
                        <i class="bi-emoji-smile text-[24px] mr-4"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="bg-white p-4 overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Image</td>
                                <td>Active</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($collection as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->lectures_count }}</td>
                                    <td>
                                        <img src="{{ asset('images/payments/' . $item->image) }}" alt="fee"
                                            srcset="" class="w-10 h-10">
                                    </td>
                                    <td>{{ $item->active ? 'Yes' : 'No' }}</td>
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
