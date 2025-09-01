<section class="bg-gray-950 py-16 px-6" id="Order">
  <!-- Title -->
  <div class="text-center mb-12">
    <h2 class="text-4xl font-extrabold text-blue-400">
      Pilih Paket <span class="text-white">Terbaik</span>
    </h2>
    <p class="mt-4 text-lg text-slate-300">
      Paket harga yang fleksibel sesuai dengan kebutuhan dan budget Anda.
    </p>
  </div>

  <!-- Desktop Grid -->
  <div class="hidden sm:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
    @foreach ($pricing as $pricings)
      <div
        class="
          p-8 rounded-2xl shadow-lg transition duration-300
          backdrop-blur-sm border
          @if ($loop->even) 
            bg-gradient-to-b from-blue-500/20 to-blue-900/40 border-blue-400 hover:shadow-blue-500/50 scale-105
          @else
            bg-[#1c1f27]/70 border-slate-700 hover:shadow-xl
          @endif
        "
      >
        <!-- Icon -->
        <div
          class="
            flex justify-center items-center w-16 h-16 rounded-full mx-auto mb-4
            @if ($loop->even) bg-blue-500 text-black
            @else bg-slate-700 text-blue-400
            @endif
          "
        >
          <img src="{{ asset('storage/' . $pricings->image) }}" alt="{{ $pricings->name }}" class="h-8 w-8 object-contain" />
        </div>

        <h3 class="text-2xl font-semibold text-white mb-2">{{ $pricings->name }}</h3>
        <p class="text-slate-300 mb-4">
          {{ $pricings->information }}
        </p>

        <p class="text-3xl font-bold text-blue-400 mb-4">
          Rp {{ number_format($pricings->price, 0, ',', '.') }}
          <span class="text-sm text-gray-400 line-through">
            Rp {{ number_format($pricings->price * 1.5, 0, ',', '.') }}
          </span>
          /project
        </p>

        <p class="text-green-400 font-semibold mb-4">Hemat 30%!</p>

        <ul class="text-slate-300 mb-6 space-y-2">
          @foreach ($pricings->feature as $feat)
            <li>✔ {{ $feat }}</li>
          @endforeach
        </ul>

        <a href="https://wa.link/1rh7vl"
          class="inline-block py-2 px-5 text-lg rounded-full font-semibold transition
            @if ($loop->even)
              bg-blue-500 text-black hover:bg-blue-400
            @else
              text-blue-400 border-2 border-blue-400 hover:bg-blue-400 hover:text-black
            @endif
          ">
          Pilih Paket
        </a>
      </div>
    @endforeach
  </div>

  <!-- Mobile Carousel -->
  <div class="relative sm:hidden">
    <div id="carousel-wrapper" class="flex transition-transform duration-500 ease-in-out">
      @foreach ($pricing as $pricings)
        <div class="min-w-full px-2">
          <div
            class="
              p-8 rounded-2xl shadow-lg transition duration-300
              backdrop-blur-sm border
              @if ($loop->even) 
                bg-gradient-to-b from-blue-500/20 to-blue-900/40 border-blue-400 hover:shadow-blue-500/50
              @else
                bg-[#1c1f27]/70 border-slate-700 hover:shadow-xl
              @endif
            "
          >
            <!-- Icon -->
            <div
              class="
                flex justify-center items-center w-16 h-16 rounded-full mx-auto mb-4
                @if ($loop->even) bg-blue-500 text-black
                @else bg-slate-700 text-blue-400
                @endif
              "
            >
              <img src="{{ asset('storage/' . $pricings->image) }}" alt="{{ $pricings->name }}" class="h-8 w-8 object-contain" />
            </div>

            <h3 class="text-2xl font-semibold text-white mb-2">{{ $pricings->name }}</h3>
            

            <p class="text-3xl font-bold text-blue-400 mb-4">
              Rp {{ number_format($pricings->price, 0, ',', '.') }}
              <span class="text-sm text-gray-400 line-through">
                Rp {{ number_format($pricings->price * 1.5, 0, ',', '.') }}
              </span>
              /project
            </p>

            <p class="text-green-400 font-semibold mb-4">Hemat 30%!</p>

            <ul class="text-slate-300 mb-6 space-y-2">
              @foreach ($pricings->feature as $feat)
                <li>✔ {{ $feat }}</li>
              @endforeach
            </ul>

            <a href="https://wa.link/1rh7vl"
              class="inline-block py-2 px-5 text-lg rounded-full font-semibold transition
                @if ($loop->even)
                  bg-blue-500 text-black hover:bg-blue-400
                @else
                  text-blue-400 border-2 border-blue-400 hover:bg-blue-400 hover:text-black
                @endif
              ">
              Pilih Paket
            </a>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Controls -->
    <button id="prevBtn" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-slate-800/60 p-2 rounded-full text-white">
      ‹
    </button>
    <button id="nextBtn" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-slate-800/60 p-2 rounded-full text-white">
      ›
    </button>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const wrapper = document.getElementById("carousel-wrapper");
    const items = wrapper.children.length;
    let index = 0;

    function updateCarousel() {
      wrapper.style.transform = `translateX(-${index * 100}%)`;
    }

    document.getElementById("nextBtn").addEventListener("click", () => {
      index = (index + 1) % items;
      updateCarousel();
    });

    document.getElementById("prevBtn").addEventListener("click", () => {
      index = (index - 1 + items) % items;
      updateCarousel();
    });

    // Auto slide setiap 4 detik
    setInterval(() => {
      index = (index + 1) % items;
      updateCarousel();
    }, 4000);
  });
</script>
