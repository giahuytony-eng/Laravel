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
                <a href="/create-post" class="bg-indigo-50 text-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Create New Post
                </a>
                <a href="/profile" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    Profile Settings
                </a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <div class="h-16 bg-white border-b border-gray-200 flex items-center px-6">
            <h1 class="text-2xl font-semibold text-gray-900">Create New Post</h1>
        </div>
        <main class="flex-1 p-6">
            <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Post Title</label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title" class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Enter an engaging title">
                        </div>
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <div class="mt-1">
                            <textarea id="content" name="content" rows="6" class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Write your blog content here..."></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Publish
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</div>
@endsection