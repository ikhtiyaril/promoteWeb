<section class="bg-gray-950 py-16 px-6 text-center">
  <!-- Consultation Section -->
  <div class="bg-[#111827]/70 border border-cyan-500/30 py-12 px-8 rounded-2xl shadow-lg backdrop-blur-lg relative overflow-hidden">
    <!-- Glow -->
    <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/30 to-blue-600/30 opacity-20 blur-2xl"></div>
    
    <h2 class="text-3xl font-extrabold text-cyan-400 drop-shadow-lg relative z-10">
      Siap untuk Website Impian Anda?
    </h2>
    <p class="mt-4 text-lg text-slate-300 relative z-10">
      Konsultasi gratis untuk diskusi project dan kebutuhan website Anda
    </p>
    <a href="#contact"
       class="mt-8 inline-block py-3 px-8 text-lg font-semibold bg-cyan-500 text-black rounded-full hover:bg-cyan-400 transition duration-300 shadow-lg hover:shadow-cyan-500/50 relative z-10">
      Mulai Konsultasi
    </a>
  </div>

  <!-- Promo Countdown Section -->
  @if($discount)
  <div class="mt-12 bg-[#111827]/70 border border-cyan-500/30 py-12 px-8 rounded-2xl shadow-lg backdrop-blur-lg relative overflow-hidden">
    <!-- Neon Glow -->
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600/40 to-cyan-500/40 opacity-30 blur-3xl"></div>
    
    <h3 class="text-2xl font-extrabold text-cyan-400 relative z-10">🔥 {{ $discount->name }}</h3>
    <p class="mt-4 text-lg text-slate-300 relative z-10">
      {{ $discount->description }} <br>
      Diskon <span class="text-cyan-400 font-bold">{{ $discount->precentage }}%</span> - Berakhir dalam:
    </p>

    <!-- Countdown Timer -->
    <div id="countdown" class="mt-8 grid grid-cols-2 md:grid-cols-4 gap-4 text-center relative z-10"></div>
  </div>
  @endif
</section>

@if($discount)
<script>
    function startCountdown(expiredDate) {
        const countDownDate = new Date(expiredDate).getTime();

        const x = setInterval(function () {
            const now = new Date().getTime();
            const distance = countDownDate - now;

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML =
                    "<p class='text-cyan-400 text-xl font-bold'>Promo telah berakhir</p>";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("countdown").innerHTML = `
              <div class="bg-[#0a0f1c]/80 border border-cyan-500/40 text-cyan-400 p-4 rounded-lg shadow-lg backdrop-blur-md 
                          hover:shadow-cyan-500/40 transition">
                <p class="text-2xl md:text-3xl font-extrabold">${days}</p>
                <p class="text-xs md:text-sm text-slate-400">Hari</p>
              </div>
              <div class="bg-[#0a0f1c]/80 border border-cyan-500/40 text-cyan-400 p-4 rounded-lg shadow-lg backdrop-blur-md 
                          hover:shadow-cyan-500/40 transition">
                <p class="text-2xl md:text-3xl font-extrabold">${hours}</p>
                <p class="text-xs md:text-sm text-slate-400">Jam</p>
              </div>
              <div class="bg-[#0a0f1c]/80 border border-cyan-500/40 text-cyan-400 p-4 rounded-lg shadow-lg backdrop-blur-md 
                          hover:shadow-cyan-500/40 transition">
                <p class="text-2xl md:text-3xl font-extrabold">${minutes}</p>
                <p class="text-xs md:text-sm text-slate-400">Menit</p>
              </div>
              <div class="bg-[#0a0f1c]/80 border border-cyan-500/40 text-cyan-400 p-4 rounded-lg shadow-lg backdrop-blur-md 
                          hover:shadow-cyan-500/40 transition">
                <p class="text-2xl md:text-3xl font-extrabold">${seconds}</p>
                <p class="text-xs md:text-sm text-slate-400">Detik</p>
              </div>
            `;
        }, 1000);
    }

    startCountdown("{{ $discount->expired }}");
</script>
@endif
