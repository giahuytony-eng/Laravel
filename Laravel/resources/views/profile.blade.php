@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50 flex">
    <!-- Sidebar -->
    <div class="w-64 bg-white border-r border-gray-200 flex flex-col">
        <div class="h-16 flex items-center px-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-800">User Dashboard</h2>
        </div>
        <div class="flex-1 overflow-y-auto py-4">
            <nav class="space-y-1 px-3">
                <a href="/dashboard" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    My Posts
                </a>
                <a href="/create-post" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Create New Post
                </a>
                <a href="/profile" class="bg-indigo-50 text-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Profile Settings
                </a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <div class="h-16 bg-white border-b border-gray-200 flex items-center px-6">
            <h1 class="text-2xl font-semibold text-gray-900">Profile Settings</h1>
        </div>
        <main class="flex-1 p-6">
            <div class="bg-white shadow rounded-lg p-6 border border-gray-200 max-w-2xl">
                <form action="/profile" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <div class="mt-1">
                            <input type="text" name="name" id="name" value="{{ $user->name }}" class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email" value="{{ $user->email }}" class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection