<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SimpleApp</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-[sans-serif]">

    <div class="bg-white md:min-h-screen flex items-center justify-center p-4">
      <div class="w-full max-w-[950px] bg-white [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-2xl overflow-hidden">
        <div class="flex items-center max-md:flex-col w-full gap-y-4">
          
          <div class="md:max-w-[570px] w-full h-full">
            <div class="md:aspect-[7/10] bg-gray-50 relative before:absolute before:inset-0 before:bg-black/40 overflow-hidden w-full h-full">
              <img src="https://www.bworldonline.com/wp-content/uploads/2022/07/Fertilize-farmer.jpg" class="w-full h-full object-cover object-right" alt="login illustration" />
              <div class="absolute inset-0 flex items-end justify-center">
                <div class="w-full bg-gradient-to-t from-black/50 via-black/50 to-transparent absolute bottom-0 p-6 max-md:hidden">
                  <h1 class="text-white text-2xl font-semibold">Welcome Back</h1>
                  <p class="text-slate-300 text-[15px] font-medium mt-3 leading-relaxed">Join our private network to discover job opportunities and connect with professionals.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="w-full h-full px-8 lg:px-20 py-8 max-md:-order-1">
            <form method="POST" action="{{ route('login') }}" class="md:max-w-md w-full mx-auto">
              @csrf <div class="mb-12">
                <h3 class="text-4xl font-bold text-slate-900">Sign in</h3>
                <p class="text-slate-500 mt-2">Welcome back! Please enter your details.</p>
              </div>

              <div>
                <div class="relative flex items-center">
                  <input name="email" type="email" value="{{ old('email') }}" required autofocus
                    class="w-full text-sm border-b border-gray-300 focus:border-blue-600 pr-8 px-2 py-3 outline-none transition-all @error('email') border-red-500 @enderror" 
                    placeholder="Enter email" />
                  
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 682.667 682.667">
                    <g transform="matrix(1.33 0 0 -1.33 0 682.667)">
                      <path fill="none" stroke-miterlimit="10" stroke-width="40" d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z" />
                      <path d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z" />
                    </g>
                  </svg>
                </div>
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
              </div>

              <div class="mt-8">
                <div class="relative flex items-center">
                  <input name="password" type="password" required 
                    class="w-full text-sm border-b border-gray-300 focus:border-blue-600 pr-8 px-2 py-3 outline-none transition-all @error('password') border-red-500 @enderror" 
                    placeholder="Enter password" />
                  
                  <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                    <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" />
                  </svg>
                </div>
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
              </div>

              <div class="flex flex-wrap items-center justify-between gap-4 mt-6">
                <div class="flex items-center">
                  <input id="remember" name="remember" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded-sm" />
                  <label for="remember" class="text-slate-600 ml-3 block text-sm">
                    Remember me
                  </label>
                </div>
                <div>
                  <a href="{{ route('password.request') }}" class="text-blue-600 font-medium text-sm hover:underline">
                    Forgot Password?
                  </a>
                </div>
              </div>

              <div class="mt-12">
                <button type="submit" 
    class="w-full py-3 px-4 text-[15px] font-bold tracking-wide rounded-xl cursor-pointer text-white bg-blue-600 
           transition-all duration-300 ease-in-out
           hover:bg-blue-700 hover:shadow-2xl hover:shadow-blue-200 hover:-translate-y-1
           focus:outline-none 
           active:scale-95">
    Sign in
</button>
                <p class="text-slate-600 text-sm text-center mt-6">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-blue-600 font-bold hover:underline ml-1 whitespace-nowrap">Register here</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>
</html>