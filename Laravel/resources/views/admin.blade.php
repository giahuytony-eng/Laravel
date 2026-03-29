@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-900 flex">
    <!-- Admin Sidebar -->
    <div class="w-64 bg-gray-800 flex flex-col">
        <div class="h-16 flex items-center px-6 bg-gray-900">
            <h2 class="text-xl font-bold text-white">Admin Panel</h2>
        </div>
        <div class="flex-1 overflow-y-auto py-4">
            <nav class="space-y-1 px-3">
                <a href="/admin" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Manage Posts
                </a>
                <a href="/admin/users" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Manage Users / Authors
                </a>
                <a href="/admin/settings" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    System Settings
                </a>
            </nav>
        </div>
    </div>

    <!-- Admin Content -->
    <div class="flex-1 flex flex-col">
        <div class="h-16 bg-white flex items-center justify-between px-6 shadow-sm">
            <h1 class="text-2xl font-semibold text-gray-900">System Overview</h1>
            <a href="/" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">View Live Site</a>
        </div>
        <main class="flex-1 p-6 bg-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-indigo-500">
                    <h3 class="text-gray-500 text-sm font-medium">Total Posts</h3>
                    <p class="mt-2 text-3xl font-bold text-gray-900">124</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-green-500">
                    <h3 class="text-gray-500 text-sm font-medium">Active Users</h3>
                    <p class="mt-2 text-3xl font-bold text-gray-900">45</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 border-l-4 border-yellow-500">
                    <h3 class="text-gray-500 text-sm font-medium">Pending Approvals</h3>
                    <p class="mt-2 text-3xl font-bold text-gray-900">12</p>
                </div>
            </div>
            <div class="bg-white shadow rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-900 border-b pb-4">Recent User Registrations</h3>
                <p class="mt-4 text-sm text-gray-500">Admin table content goes here...</p>
            </div>
        </main>
    </div>
</div>
@endsection