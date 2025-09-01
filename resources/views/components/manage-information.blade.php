<section class="bg-[#0d1117] py-16 px-6">
  <div class="max-w-4xl mx-auto">
    <!-- Title -->
    <h2 class="text-4xl font-extrabold text-yellow-400 text-center mb-8">
      Dashboard Pengaturan
    </h2>

    <!-- Info Form -->
    <div class="bg-[#1c1f27] p-8 rounded-lg shadow-lg backdrop-blur-sm bg-opacity-30">
      <h3 class="text-2xl font-semibold text-white mb-6">Pengaturan Informasi</h3>
      
      <form action="/information/{{$information->id}}" method="POST" class="space-y-6">
       @csrf
       @method('PUT')
        <div>
          <label for="email" class="text-white block text-sm font-semibold mb-2">{{$information->email}}</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md border border-gray-300 bg-[#1c1f27] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Email Anda" required>
        </div>

        <!-- Phone Number -->
        <div>
          <label for="phone" class="text-white block text-sm font-semibold mb-2">{{$information->no_phone}}</label>
          <input type="tel" id="phone" name="no_phone" class="w-full px-4 py-2 rounded-md border border-gray-300 bg-[#1c1f27] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Nomor Telepon Anda" required>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" class="w-full py-2 px-4 text-lg font-semibold text-black bg-yellow-400 rounded-md hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition duration-300">
            Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
