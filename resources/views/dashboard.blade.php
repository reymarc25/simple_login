<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | SimpleApp</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-slate-50 font-[sans-serif]">

    <div class="flex h-screen overflow-hidden">
        
        <aside class="w-64 bg-slate-600 text-slate-300 flex-shrink-0 hidden md:flex flex-col">
            <div class="p-6 flex items-center gap-3">
                <div class="w-8 h-8 bg-green-600 rounded-lg flex items-center justify-center">
                    <i class="ph-bold ph-leaf text-white text-xl"></i>
                </div>
                <span class="text-white font-bold text-xl tracking-tight">FertiLyze</span>
            </div>

            <nav class="flex-1 px-4 space-y-2 mt-4">
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-green-600 text-white rounded-lg transition-all">
                    <i class="ph-bold ph-house"></i>
                    <span class="font-medium">Dashboard</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-slate-800 hover:text-white rounded-lg transition-all">
                    <i class="ph-bold ph-users"></i>
                    <span>Users</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-slate-800 hover:text-white rounded-lg transition-all">
                    <i class="ph-bold ph-package"></i>
                    <span>Products</span>
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-slate-800 hover:text-white rounded-lg transition-all">
                    <i class="ph-bold ph-chart-line-up"></i>
                    <span>Reports</span>
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-red-400 hover:bg-red-500/10 rounded-lg transition-all">
                        <i class="ph-bold ph-sign-out"></i>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </aside>

        <main class="flex-1 flex flex-col overflow-y-auto">
            
            <header class="bg-white border-b border-slate-200 h-16 flex items-center justify-between px-8 sticky top-0 z-10">
                <div class="flex items-center gap-4">
                    <button class="md:hidden text-slate-600 text-2xl"><i class="ph-bold ph-list"></i></button>
                    <h2 class="text-slate-800 font-semibold text-lg">Overview</h2>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-slate-900">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-500 text-capitalize">Administrator</p>
                    </div>
                    <div class="w-10 h-10 bg-slate-200 rounded-full border-2 border-white shadow-sm flex items-center justify-center overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=0D8ABC&color=fff" alt="avatar">
                    </div>
                </div>
            </header>

            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                                <i class="ph-bold ph-users-three text-xl"></i>
                            </div>
                            <span class="text-green-500 text-xs font-bold">+12%</span>
                        </div>
                        <p class="text-slate-500 text-sm font-medium">Total Users</p>
                        <h3 class="text-2xl font-bold text-slate-900">{{ $totalUsers }}</h3>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center">
                                <i class="ph-bold ph-shopping-cart text-xl"></i>
                            </div>
                            <span class="text-green-500 text-xs font-bold">+5%</span>
                        </div>
                        <p class="text-slate-500 text-sm font-medium">Total Sales</p>
                        <h3 class="text-2xl font-bold text-slate-900">₱45,200</h3>
                    </div>

                    <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-orange-50 text-orange-600 rounded-lg flex items-center justify-center">
                                <i class="ph-bold ph-stack text-xl"></i>
                            </div>
                            <span class="text-red-500 text-xs font-bold">-2%</span>
                        </div>
                        <p class="text-slate-500 text-sm font-medium">Active Projects</p>
                        <h3 class="text-2xl font-bold text-slate-900">12</h3>
                    </div>

                    <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-green-50 text-green-600 rounded-lg flex items-center justify-center">
                                <i class="ph-bold ph-seal-check text-xl"></i>
                            </div>
                            <span class="text-green-500 text-xs font-bold">Stable</span>
                        </div>
                        <p class="text-slate-500 text-sm font-medium">System Health</p>
                        <h3 class="text-2xl font-bold text-slate-900">99.9%</h3>
                    </div>
                </div>

                <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <h3 class="font-bold text-slate-900">Recent Users</h3>
                        <button class="text-blue-600 text-sm font-semibold hover:underline">View All</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 text-slate-500 uppercase text-[11px] font-bold tracking-wider">
                                    <th class="px-6 py-4">User</th>
                                    <th class="px-6 py-4">Email</th>
                                    <th class="px-6 py-4">Status</th>
                                    <th class="px-6 py-4">Joined Date</th>
                                    <th class="px-6 py-4 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
    @forelse($recentUsers as $user)
        <tr class="hover:bg-slate-50 transition-colors">
            <td class="px-6 py-4 font-medium text-slate-900">{{ $user->name }}</td>
            <td class="px-6 py-4 text-slate-600 text-sm">{{ $user->email }}</td>
            <td class="px-6 py-4">
                <span class="px-2 py-1 bg-green-100 text-green-700 text-[11px] font-bold rounded-full">Active</span>
            </td>
            <td class="px-6 py-4 text-slate-500 text-sm">{{ $user->created_at->format('M d, Y') }}</td>
            <td class="px-6 py-4 text-right">
                <button class="text-slate-400 hover:text-blue-600 transition-colors text-lg">
                    <i class="ph-bold ph-dots-three"></i>
                </button>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5" class="px-6 py-10 text-center text-slate-500 italic">
                No users registered yet.
            </td>
        </tr>
    @endforelse
</tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>