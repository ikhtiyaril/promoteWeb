<section class="bg-gray-950 py-16 px-6" id="Portofolio">
  <h2 class="text-4xl font-extrabold text-center text-cyan-400 drop-shadow-lg">
    Beberapa Proyek Saya
  </h2>

  <!-- Desktop Grid -->
  <div class="hidden sm:grid mt-12 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
    @foreach ($portofolio as $portofolios)
      <!-- Card -->
      <div class="bg-[#111827]/70 border border-cyan-500/30 p-6 rounded-2xl shadow-lg 
                  hover:shadow-cyan-500/50 transition-transform transform hover:scale-105 
                  backdrop-blur-xl relative group overflow-hidden">

        <!-- Neon Glow Border -->
        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-600 
                    opacity-0 group-hover:opacity-20 blur-2xl transition duration-500"></div>

        <!-- Image -->
        <img src="{{ asset('storage/'.$portofolios->image) }}"  
             alt="Project Image" 
             class="w-full h-48 object-cover rounded-lg mb-4 border border-cyan-500/30 shadow-md">

        <!-- Title -->
        <h3 class="text-2xl font-semibold text-white mb-2 group-hover:text-cyan-400 transition">
          {{$portofolios->judul}}
        </h3>

        <!-- Description -->
        <p class="text-slate-300 mb-4 text-sm leading-relaxed">
          {{$portofolios->description}}
        </p>

        <!-- Tech Stack -->
        <div class="flex flex-wrap gap-2">
          @foreach (explode(',', $portofolios->tech_stack) as $tech_stack)
            <span class="px-3 py-1 text-xs font-semibold text-cyan-300 
                         bg-white/10 backdrop-blur-md border border-cyan-500/30 
                         rounded-full shadow-sm hover:bg-cyan-500/20 hover:text-cyan-100 
                         transition duration-300">
              {{$tech_stack}}
            </span>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>

  <!-- Mobile Carousel -->
  <div class="relative sm:hidden mt-12">
    <div id="portfolio-carousel" class="flex transition-transform duration-500 ease-in-out">
      @foreach ($portofolio as $portofolios)
        <div class="min-w-[90%] mx-2">
          <div class="bg-[#111827]/70 border border-cyan-500/30 p-6 rounded-2xl shadow-lg 
                      hover:shadow-cyan-500/50 transition-transform transform hover:scale-105 
                      backdrop-blur-xl relative group overflow-hidden">

            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-cyan-500 to-blue-600 
                        opacity-0 group-hover:opacity-20 blur-2xl transition duration-500"></div>

            <img src="{{ asset('storage/'.$portofolios->image) }}"  
                 alt="Project Image" 
                 class="w-full h-40 object-cover rounded-lg mb-4 border border-cyan-500/30 shadow-md">

            <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-cyan-400 transition">
              {{$portofolios->judul}}
            </h3>

            <p class="text-slate-300 mb-4 text-sm leading-relaxed">
              {{$portofolios->description}}
            </p>

            <div class="flex flex-wrap gap-2">
              @foreach (explode(',', $portofolios->tech_stack) as $tech_stack)
                <span class="px-3 py-1 text-xs font-semibold text-cyan-300 
                             bg-white/10 backdrop-blur-md border border-cyan-500/30 
                             rounded-full shadow-sm hover:bg-cyan-500/20 hover:text-cyan-100 
                             transition duration-300">
                  {{$tech_stack}}
                </span>
              @endforeach
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Controls -->
    <button id="prevPortfolio" class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-slate-800/60 p-2 rounded-full text-white">
      ‹
    </button>
    <button id="nextPortfolio" class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-slate-800/60 p-2 rounded-full text-white">
      ›
    </button>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("portfolio-carousel");
    const items = carousel.children.length;
    let index = 0;

    function updateCarousel() {
      carousel.style.transform = `translateX(-${index * 100}%)`;
    }

    document.getElementById("nextPortfolio").addEventListener("click", () => {
      index = (index + 1) % items;
      updateCarousel();
    });

    document.getElementById("prevPortfolio").addEventListener("click", () => {
      index = (index - 1 + items) % items;
      updateCarousel();
    });

    // Auto slide tiap 4 detik
    setInterval(() => {
      index = (index + 1) % items;
      updateCarousel();
    }, 4000);
  });
</script>
