@extends('layouts.admin')

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
                <div>Admin</div>
                <div>/</div>
                <div>Home</div>
            </div>
        </div>
        <div class="text-slate-500">{{ today()->format('d/m/Y') }}</div>
    </div>

    <!-- pallet boxes -->
    <x-admin.pallets></x-admin.pallets>
    <!-- middle content panel starts-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 md:gap-x-8 mt-8">
        <div class="relative col-span-2">
            <div class="p-6 bg-white">
                <div class="h3">New Arrivals</div>
                <div class="divider my-4"></div>
                <div class="bg-white p-4 overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="text-sm font-bold">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Image</td>
                                <td>Courses</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($collection as $item)
                            <tr class="text-sm">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>
                                    <img src="{{ asset('images/payments/' . $item->image) }}" alt="fee" srcset="" class="w-10 h-10">
                                </td>
                                <td>{{ $item->course->name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.invoices.show', $item->id) }}"><span class="bi-eye"></span></a>
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
        <!-- middle content panel ended -->
        <!-- right sidebar starts -->
        <div>
            <div class="p-6 bg-white">
                <x-admin.profile :user="$user"></x-admin.profile>
            </div>
        </div>
        <!-- right sidebar ended -->

    </div>
</div>
@endsection