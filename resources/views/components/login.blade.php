<section class="bg-[#0d1b2a] min-h-screen flex items-center justify-center py-16 px-6">
  <div class="bg-[#1b263b] backdrop-blur-md bg-opacity-80 p-12 rounded-2xl shadow-2xl border border-cyan-400/30 max-w-sm w-full">

    <!-- Title -->
    <h2 class="text-xl font-extrabold text-cyan-400 text-center mb-8 ">
      Login ke Akun Anda
    </h2>
    
    <!-- Login Form -->
    <form action="{{ route('loginadmin.post') }}" method="POST" class="space-y-6">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      
      <!-- Error Alert -->
      @if ($errors->any())
        <div class="bg-red-600/80 text-white p-3 rounded-md border border-red-400 shadow-md shadow-red-500/50">
          <ul class="list-disc pl-4">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif

      <!-- Email -->
      <div>
        <label for="email" class="text-cyan-300 block text-sm font-semibold mb-2">Email</label>
        <input 
          type="email" id="email" name="email" 
          class="w-full px-4 py-2 rounded-md border border-cyan-400/30 bg-[#0d1b2a] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 shadow-inner shadow-cyan-500/20" 
          placeholder="Email Anda" required>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="text-cyan-300 block text-sm font-semibold mb-2">Password</label>
        <input 
          type="password" id="password" name="password" 
          class="w-full px-4 py-2 rounded-md border border-cyan-400/30 bg-[#0d1b2a] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-cyan-400 shadow-inner shadow-cyan-500/20" 
          placeholder="Password Anda" required>
      </div>

      <!-- Remember Me -->
      <div class="flex items-center justify-between">
        <div class="flex items-center">
          <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-cyan-400 border-gray-600 rounded-md focus:ring-2 focus:ring-cyan-400">
          <label for="remember" class="text-slate-300 text-sm ml-2">Ingat Saya</label>
        </div>
      </div>

      <!-- Submit -->
      <div>
        <button type="submit" class="w-full py-2 px-4 text-lg font-semibold text-black bg-cyan-400 rounded-md hover:bg-cyan-300 hover:shadow-lg hover:shadow-cyan-500/50 focus:outline-none focus:ring-2 focus:ring-cyan-400 transition duration-300">
          Masuk
        </button>
      </div>
    </form>
  </div>
</section>
