<section class="relative flex flex-col justify-center items-center text-center h-screen px-6 overflow-hidden">
  <!-- Aurora Background -->
  <div class="absolute inset-0 w-full h-full react-bg-aurora"></div>

  <!-- Konten -->
  <div class="relative z-10">
    <!-- Desktop -->
    <div class="hidden md:flex items-center justify-center">
      <h1 class="text-5xl md:text-6xl font-extrabold text-blue-800 -translate-x-48 outline-1 outline-white">
        Hi, Saya&nbsp;
      </h1>
      <div class="react-morphing-text"></div>
    </div>

    <!-- Mobile -->
    <div class="flex flex-col items-center justify-center md:hidden">
      <h1 class="text-xl md:text-3xl font-extrabold text-white outline-1 outline-white">
        Hi, Saya Ikhtiyaril Ikhsan
      </h1>
    </div>
  </div>

  <!-- Deskripsi + Tombol -->
  <div class="mt-6 md:-translate-y-64"> <!-- mobile pakai mt-6 biar turun, desktop tetap -translate-y-64 -->
    <p class="mt-4 text-xs sm:text-lg md:text-xl max-w-md sm:max-w-2xl md:max-w-3xl mx-auto mb-10 react-text-gradient">
      Junior Web Developer yang siap menyelesaikan masalah website Anda dengan
      solusi coding yang clean, responsif, dan modern.
    </p>

    <div class="mt-6 react-btn-rainbow text-white px-5 py-3 text-base sm:text-lg rounded-xl">
      Konsultasi Gratis
    </div>
  </div>

  <!-- Hover flow effect -->
  <div class="absolute inset-0 text-white react-hover-flow"></div>
</section>
