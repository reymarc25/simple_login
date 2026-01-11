<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Fertilyze</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50 font-['Inter',_sans-serif]">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-slate-200 text-white hidden md:flex flex-col">
            <div class="p-6">
                <span class="text-2xl font-bold tracking-tight text-green-600">Fertilyze</span>
            </div>
            
            <nav class="flex-1 px-4 space-y-2">
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-green-600 rounded-lg text-white font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:bg-green-500 hover:text-white rounded-lg transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Profile
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-lg transition font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 flex flex-col">
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8">
                <h2 class="text-lg font-semibold text-slate-800">Overview</h2>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-slate-500">{{ now()->format('l, d M Y') }}</span>
                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xs">
                        {{ substr(auth()->user()->name, 0, 1) }}
                    </div>
                </div>
            </header>

            <main class="p-8">
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-slate-900">Welcome back, {{ auth()->user()->name }}! 👋</h1>
                    <p class="text-slate-500 mt-1">Here's what's happening with your account today.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <p class="text-sm font-medium text-slate-500">Account Security</p>
                        <p class="text-2xl font-bold text-slate-900 mt-2 text-green-600">Active</p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <p class="text-sm font-medium text-slate-500">Email Verified</p>
                        <p class="text-2xl font-bold text-slate-900 mt-2">
                            {{ auth()->user()->email_verified_at ? 'Yes' : 'No' }}
                        </p>
                    </div>
                    <div class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm">
                        <p class="text-sm font-medium text-slate-500">Member Since</p>
                        <p class="text-2xl font-bold text-slate-900 mt-2">{{ auth()->user()->created_at->format('M Y') }}</p>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="font-bold text-slate-800">Your Account Details</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex justify-between py-2 border-b border-slate-50">
                            <span class="text-slate-500">Full Name</span>
                            <span class="font-medium text-slate-900">{{ auth()->user()->name }}</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-slate-50">
                            <span class="text-slate-500">Email Address</span>
                            <span class="font-medium text-slate-900">{{ auth()->user()->email }}</span>
                        </div>
                        <div class="flex justify-between py-2">
                            <span class="text-slate-500">Role</span>
                            <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs font-bold rounded-md">User</span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</body>
</html>