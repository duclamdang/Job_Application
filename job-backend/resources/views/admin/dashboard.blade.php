@extends('admin.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <h1>Chào mừng đến trang chủ</h1>
    <p>Nội dung trang chủ.</p>
    <h2>Welcome, {{ auth()->guard('admin')->user()->name ?? 'Admin' }}</h2>
    <p>This is the admin dashboard.</p>
    <!-- Nút đăng xuất -->
    <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
    </form>
@endsection
