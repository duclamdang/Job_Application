@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-800 text-white p-4">
            <h2 class="text-xl font-bold mb-6">Menu</h2>
            <ul class="space-y-2">
                <li>
                    <a href="?view=dashboard"><x-primary-button class="w-full">Dashboard</x-primary-button></a>
                </li>
                <li>
                    <a href="?view=users"><x-primary-button class="w-full">Quản lý người dùng</x-primary-button>
                </a></li>
                <li>
                    <a href="?view=companies"><x-primary-button class="w-full">Quản lý công ty</x-primary-button>
                </a></li>
                <li>
                    <a href="?view=jobs"><x-primary-button class="w-full">Quản lý công việc</x-primary-button></a>
                </li>
            </ul>
            <form method="POST" action="{{ route('logout') }}" class="mt-6">@csrf
                <button type="submit" class="text-red-400 hover:underline">Đăng xuất</button>
            </form>
        </aside>

        
        <main class="flex-1 p-6">
            @if (request('view') === 'users')
                <livewire:users-table />
            @elseif (request('view') === 'companies')
                <livewire:companies-table />
            @elseif (request('view') === 'jobs')
                <livewire:jobs-table />
            @else
                <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
                <p>Chào mừng bạn đến trang quản trị!</p>
            @endif
        </main>

    </div>
@endsection
