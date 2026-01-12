<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fertilyze | Welcome</title>
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="bg-white font-[sans-serif] text-slate-900">

    <nav class="fixed w-full z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-green-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-200">
                    <i class="ph-bold ph-leaf text-white text-2xl"></i>
                </div>
                <span class="text-2xl font-black tracking-tight text-slate-900">Fertil<span class="text-green-600">yze</span></span>
            </div>

            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-bold text-slate-700 hover:text-green-600 transition-all">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-bold text-slate-700 hover:text-green-600 transition-all px-4 py-2">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-slate-900 text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-green-600 transition-all shadow-md">Get Started</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative z-10">
                    <span class="inline-block px-4 py-1.5 bg-blue-50 text-green-600 rounded-full text-xs font-bold tracking-widest uppercase mb-6">Smart Farming Solutions</span>
                    <h1 class="text-5xl lg:text-7xl font-black leading-[1.1] mb-6">
                        Cultivate the <span class="text-green-600">Future</span> of Agriculture.
                    </h1>
                    <p class="text-lg text-slate-600 mb-10 max-w-lg leading-relaxed">
                        Join our private network to discover job opportunities, manage your crops, and connect with agricultural professionals worldwide.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('register') }}" class="bg-green-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-green-700 transition-all text-center shadow-xl shadow-blue-200 flex items-center justify-center gap-2">
                            Create Free Account <i class="ph-bold ph-arrow-right"></i>
                        </a>
                        <a href="#features" class="bg-white border-2 border-slate-200 text-slate-700 px-8 py-4 rounded-xl font-bold hover:bg-slate-50 transition-all text-center">
                            Learn More
                        </a>
                    </div>
                </div>
                
                <div class="relative lg:h-[600px]">
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-blue-100 rounded-full blur-3xl opacity-50"></div>
                    <div class="relative h-full rounded-[2rem] overflow-hidden shadow-2xl shadow-slate-200 border-8 border-white">
                        <img src="https://www.philrice.gov.ph/wp-content/uploads/2021/02/Farmers-encouraged-to-ensure-rice-crops-get-enough-nutrients_resized.jpg" 
                             class="w-full h-full object-cover object-right" 
                             alt="Professional Farmer">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-6 text-center mb-16">
            <h2 class="text-3xl font-black mb-4">Everything you need to grow</h2>
            <p class="text-slate-500 max-w-2xl mx-auto">Our platform provides the tools and connections necessary for modern farmers to thrive in today's digital economy.</p>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all group">
                <div class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition-all">
                    <i class="ph-bold ph-users-three text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Connect</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Build your professional network with farmers, suppliers, and agricultural experts in your region.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all group">
                <div class="w-14 h-14 bg-green-50 text-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition-all">
                    <i class="ph-bold ph-chart-line-up text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Optimize</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Monitor your growth metrics and sales data through our intuitive admin dashboard system.</p>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all group">
                <div class="w-14 h-14 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-orange-600 group-hover:text-white transition-all">
                    <i class="ph-bold ph-briefcase text-3xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-3">Opportunities</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Get access to exclusive job postings and market prices directly from your mobile device or PC.</p>
            </div>
        </div>
    </section>

    <footer class="bg-white py-12 border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-green-600 rounded-lg flex items-center justify-center">
                    <i class="ph-bold ph-leaf text-white text-lg"></i>
                </div>
                <span class="font-bold text-green-600">Fertilyze © 2026</span>
            </div>
            <div class="flex gap-8 text-sm text-slate-500 font-medium">
                <a href="#" class="hover:text-green-600">Terms</a>
                <a href="#" class="hover:text-green-600">Privacy</a>
                <a href="#" class="hover:text-green-600">Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>