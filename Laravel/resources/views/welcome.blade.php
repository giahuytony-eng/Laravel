@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-white to-purple-50">
    <!-- Header -->
    <div class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-semibold text-gray-900">BlogHub</h1>
                    <p class="text-gray-500 mt-1">Discover amazing stories and insights</p>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="/login" class="inline-flex items-center justify-center rounded-lg bg-[#4F46E5] px-4 py-2 text-sm font-medium text-white hover:bg-[#4338CA] transition-colors">
                        Sign In
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Sample Card (Will be dynamic in Laravel via Blade loop) -->
            <div class="rounded-xl border bg-white text-gray-950 shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                <div class="flex flex-col space-y-1.5 p-6 pb-4">
                    <div class="flex items-center space-x-3 mb-3">
                        <span class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full bg-[#4F46E5] text-white items-center justify-center font-bold">
                            A
                        </span>
                        <div class="flex-1">
                            <div class="text-sm font-medium text-gray-900">Author Name</div>
                            <div class="text-xs text-gray-500">@author</div>
                        </div>
                        <div class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors bg-green-100 text-green-700">
                            Published
                        </div>
                    </div>
                    <h2 class="text-xl font-semibold text-gray-900 line-clamp-2">Sample Blog Post Title</h2>
                </div>
                <div class="p-6 pt-0">
                    <p class="text-gray-500 line-clamp-3 mb-4">
                        This is a sample blog post snippet showcasing the Tailwind UI converted from React to Laravel Blade.
                    </p>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                        March 29, 2026
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection