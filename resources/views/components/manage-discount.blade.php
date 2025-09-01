<section class="bg-gray-950 py-16 px-6 min-h-screen">
  <div class="max-w-4xl mx-auto">
    <!-- Title -->
    <h2 class="text-4xl font-extrabold text-cyan-400 text-center mb-8 drop-shadow-[0_0_10px_rgba(0,255,255,0.6)]">
      Manage Diskon
    </h2>

    <!-- Discount Form -->
    <div class="bg-[#1b263b] p-8 rounded-2xl shadow-2xl backdrop-blur-md bg-opacity-80 border border-cyan-400/30">
      <h3 class="text-2xl font-semibold text-white mb-6">Tambah Diskon Baru</h3>
      
      <form action="/discount/{{$discount->id}}" method="POST" class="space-y-6">
        @csrf
        @method("PUT")

        <!-- Nama Diskon -->
        <div>
          <label for="discount_name" class="text-cyan-300 block text-sm font-semibold mb-2">Nama Diskon</label>
          <input 
            type="text" value="{{$discount->name}}" id="discount_name" name="name" 
            class="w-full px-4 py-2 rounded-md border border-cyan-400/30 bg-[#0d1b2a] text-white placeholder-gray-500 
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 shadow-inner shadow-cyan-500/20" 
            placeholder="Nama Diskon" required>
        </div>

        <!-- Persentase Diskon -->
        <div>
          <label for="discount_percentage" class="text-cyan-300 block text-sm font-semibold mb-2">Persentase Diskon</label>
          <input 
            type="number" value="{{$discount->precentage}}" id="discount_percentage" name="precentage" min="1" max="100" 
            class="w-full px-4 py-2 rounded-md border border-cyan-400/30 bg-[#0d1b2a] text-white placeholder-gray-500 
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 shadow-inner shadow-cyan-500/20" 
            placeholder="Persentase Diskon (1-100)" required>
        </div>

        <!-- Expiry Date -->
        <div>
          <label for="expiry_date" class="text-cyan-300 block text-sm font-semibold mb-2">Tanggal Kadaluarsa</label>
          <input 
            type="date" value="{{$discount->expired}}" id="expiry_date" name="expired" 
            class="w-full px-4 py-2 rounded-md border border-cyan-400/30 bg-[#0d1b2a] text-white placeholder-gray-500 
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 shadow-inner shadow-cyan-500/20" 
            required>
        </div>

        <!-- Discount Information -->
        <div>
          <label for="discount_info" class="text-cyan-300 block text-sm font-semibold mb-2">Informasi Diskon</label>
          <textarea 
            id="discount_info" name="description" rows="4" 
            class="w-full px-4 py-2 rounded-md border border-cyan-400/30 bg-[#0d1b2a] text-white placeholder-gray-500 
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 shadow-inner shadow-cyan-500/20" 
            placeholder="Deskripsi informasi tentang diskon ini" required>{{$discount->description}}</textarea>
        </div>

        <!-- Submit Button -->
        <div>
          <button 
            type="submit" 
            class="w-full py-2 px-4 text-lg font-semibold text-black bg-cyan-400 rounded-md 
                   hover:bg-cyan-300 hover:shadow-lg hover:shadow-cyan-500/50 
                   focus:outline-none focus:ring-2 focus:ring-cyan-400 transition duration-300">
            Simpan Diskon
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
