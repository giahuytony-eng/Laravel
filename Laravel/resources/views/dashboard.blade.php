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
                <a href="/dashboard" class="bg-indigo-50 text-indigo-600 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
                    My Posts
                </a>
                <a href="/create-post" class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">
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
        <div class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-6">
            <h1 class="text-2xl font-semibold text-gray-900">Welcome back, User!</h1>
            <a href="/" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Back to BlogFeed</a>
        </div>
        <main class="flex-1 p-6">
            <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Recent Activity</h3>
                <div class="mt-4 border-t border-gray-200 pt-4">
                    @if($posts->isEmpty())
                        <p class="text-sm text-gray-500">You haven't posted anything yet. Start writing your first design blog!</p>
                    @else
                        <ul class="space-y-4">
                        @foreach($posts as $post)
                            <li class="bg-gray-50 p-4 rounded-md border border-gray-100">
                                <h4 class="text-md font-bold text-gray-800">{{ $post->title }}</h4>
                                <p class="text-sm text-gray-600 mt-1">{{ Str::limit($post->content, 100) }}</p>
                                <p class="text-xs text-gray-400 mt-2">Posted on {{ $post->created_at->format('M d, Y') }}</p>
                            </li>
                        @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </main>
    </div>
</div>
@endsection