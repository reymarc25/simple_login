<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | SimpleApp</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-[sans-serif]">

    <div class="bg-white max-w-4xl flex items-center mx-auto md:min-h-screen p-4">
      <div class="grid md:grid-cols-3 items-center [box-shadow:0_2px_10px_-3px_rgba(14,14,14,0.3)] rounded-xl overflow-hidden">
         <div class="md:aspect-[7/10] bg-gray-50 relative before:absolute before:inset-0 before:bg-black/40 overflow-hidden w-full h-full">
              <img src="https://biogas-india.com/wp-content/uploads/2024/05/Screenshot-2024-05-27-101228.png" class="w-full h-full object-cover object-center" alt="registration illustration" />
          <div>
            <h3 class="text-white text-lg font-semibold">Create Your Account</h3>
            <p class="text-[13px] text-slate-300 mt-3 leading-relaxed">Welcome to our registration page! Get started by creating your account today.</p>
          </div>
          <div>
            <h3 class="text-white text-lg font-semibold">Simple & Secure</h3>
            <p class="text-[13px] text-slate-300 mt-3 leading-relaxed">Our registration process is designed to be straightforward and secure. We prioritize your privacy.</p>
          </div>
        </div>

        <form method="POST" action="{{ route('register') }}" class="md:col-span-2 w-full py-6 px-6 sm:px-14 max-w-lg mx-auto">
          @csrf <div class="mb-8">
            <h1 class="text-slate-900 text-2xl font-bold">Register Now</h1>
          </div>

          <div class="space-y-6">
            <div>
              <label class="text-slate-900 text-sm font-medium mb-2 block">Full Name</label>
              <div class="relative flex items-center">
                <input name="name" type="text" value="{{ old('name') }}" required autofocus
                  class="text-slate-900 bg-white border border-slate-300 w-full text-sm pl-4 pr-10 py-2.5 rounded-md outline-blue-500 @error('name') border-red-500 @enderror" 
                  placeholder="Enter full name" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 24 24">
                  <circle cx="10" cy="7" r="6" />
                  <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5z" />
                </svg>
              </div>
              @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
              <label class="text-slate-900 text-sm font-medium mb-2 block">Email Address</label>
              <div class="relative flex items-center">
                <input name="email" type="email" value="{{ old('email') }}" required
                  class="text-slate-900 bg-white border border-slate-300 w-full text-sm pl-4 pr-10 py-2.5 rounded-md outline-blue-500 @error('email') border-red-500 @enderror" 
                  placeholder="Enter email" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 682.667 682.667">
                   <g transform="matrix(1.33 0 0 -1.33 0 682.667)">
                      <path fill="none" stroke="#bbb" stroke-miterlimit="10" stroke-width="40" d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z" />
                      <path d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z" />
                   </g>
                </svg>
              </div>
              @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
              <label class="text-slate-900 text-sm font-medium mb-2 block">Password</label>
              <div class="relative flex items-center">
                <input name="password" type="password" required
                  class="text-slate-900 bg-white border border-slate-300 w-full text-sm pl-4 pr-10 py-2.5 rounded-md outline-blue-500 @error('password') border-red-500 @enderror" 
                  placeholder="Enter password" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 128 128">
                  <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" />
                </svg>
              </div>
              @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <div>
              <label class="text-slate-900 text-sm font-medium mb-2 block">Confirm Password</label>
              <div class="relative flex items-center">
                <input name="password_confirmation" type="password" required
                  class="text-slate-900 bg-white border border-slate-300 w-full text-sm pl-4 pr-10 py-2.5 rounded-md outline-blue-500" 
                  placeholder="Re-type password" />
                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" class="w-4 h-4 absolute right-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.744c0 5.548 4.076 10.21 9.43 11.06a11.59 11.59 0 005.817 0C23.684 19.954 27.76 15.282 27.76 9.744c0-1.294-.21-2.537-.6-3.692a11.959 11.959 0 01-8.582-4.016z" />
                </svg>
              </div>
            </div>

            <div class="flex items-center">
              <input id="terms" name="terms" type="checkbox" required
                class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-slate-300 rounded" />
              <label for="terms" class="ml-3 block text-sm text-slate-600">
                I accept the <a href="javascript:void(0);" class="text-blue-600 font-medium hover:underline ml-1">Terms and Conditions</a>
              </label>
            </div>
          </div>

          <div class="mt-8">
           <button type="submit" 
    class="w-full py-3 px-4 text-[15px] font-bold tracking-wide rounded-xl cursor-pointer text-white bg-blue-600 
           transition-all duration-300 ease-in-out
           hover:bg-blue-700 hover:shadow-2xl hover:shadow-blue-200 hover:-translate-y-1
           focus:outline-none 
           active:scale-95">
    create account
</button>
          </div>
          
          <p class="text-slate-600 text-sm mt-6 text-center">
            Already have an account? 
            <a href="{{ route('login') }}" class="text-blue-600 font-bold hover:underline ml-1">Login here</a>
          </p>
        </form>
      </div>
    </div>

</body>
</html>