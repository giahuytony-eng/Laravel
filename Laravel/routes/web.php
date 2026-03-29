<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    $posts = Post::latest()->get();
    return view('welcome', compact('posts'));
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    return redirect('/dashboard');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function (Request $request) {
    // Tạo user mới từ form Register
    $user = new User();
    $user->name = $request->input('name', 'New User');
    $user->email = $request->input('email', 'user@example.com');
    $user->password = bcrypt($request->input('password', 'password'));
    $user->save();
    return redirect('/dashboard');
});

Route::get('/create-post', function () {
    return view('create-post');
});

Route::post('/create-post', function (Request $request) {
    $post = new Post();
    $post->title = $request->input('title', 'Untitled');
    $post->content = $request->input('content', 'No content');
    $post->save();
    return redirect('/dashboard');
});

Route::get('/profile', function () {
    // Lấy user đầu tiên trong DB để test
    $user = User::first();
    if (!$user) {
        $user = new User();
        $user->name = 'User Name';
        $user->email = 'user@example.com';
    }
    return view('profile', compact('user'));
});

Route::post('/profile', function (Request $request) {
    // Cập nhật thông tin user
    $user = User::first();
    if (!$user) {
        $user = new User();
        $user->password = bcrypt('password');
    }
    $user->name = $request->input('name', 'User Name');
    $user->email = $request->input('email', 'user@example.com');
    $user->save();
    
    return redirect('/profile');
});

Route::get('/dashboard', function () {
    $posts = Post::latest()->get();
    return view('dashboard', compact('posts'));
});

Route::get('/admin', function () {
    $posts = Post::latest()->get();
    return view('admin', compact('posts'));
});

Route::get('/admin/users', function () {
    return view('admin-users');
});

Route::get('/admin/settings', function () {
    return view('admin-settings');
});