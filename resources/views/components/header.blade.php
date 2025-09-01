<nav class="w-full fixed top-0 left-0 z-20 bg-transparent shadow-none">
  <div class="flex justify-between items-center px-4 sm:px-6 py-3 text-white">
    <!-- Logo -->
    <div class="flex items-center">
      <img src="LogoIKH.png" alt="Logo" class="h-8 w-8 sm:h-10 sm:w-10">
      <h3 class="ml-2 font-bold text-xs sm:text-2xl text-white">Ikhtiyaril Ikhsan</h3>
    </div>

    <!-- Desktop Menu -->
    <div class="hidden md:flex space-x-4 lg:space-x-6 items-center">
      <a href="/" class="text-white text-sm sm:text-base lg:text-lg font-medium px-3 py-2 hover:text-blue-200 hover:bg-white/20 transition-all duration-300 rounded-2xl">Home</a>
      <a href="#About" class="text-white text-sm sm:text-base lg:text-lg font-medium px-3 py-2 hover:text-blue-200 hover:bg-white/20 transition-all duration-300 rounded-2xl">About Me</a>
      <a href="https://wa.link/gf1t0t" class="react-btn-interactive text-sm sm:text-base lg:text-lg">Order Now</a>
    </div>

    <!-- Mobile Menu Button -->
    <button id="menu-btn" class="md:hidden flex flex-col space-y-1 focus:outline-none z-30">
      <span class="w-6 h-0.5 bg-white"></span>
      <span class="w-6 h-0.5 bg-white"></span>
      <span class="w-6 h-0.5 bg-white"></span>
    </button>
  </div>

  <!-- Mobile Dropdown with Glassmorphism -->
  <div id="menu" class="hidden flex-col md:hidden fixed top-0 left-0 w-full h-screen 
                      bg-black/30 backdrop-blur-xl border-b border-cyan-500/30 
                      px-6 py-20 space-y-6 items-center text-center 
                      animate__animated animate__fadeInDown">
    <a href="/" class="text-white text-xl font-medium px-4 py-2 rounded-lg 
                     hover:bg-white/10 hover:text-cyan-300 transition">Home</a>
    <a href="#About" class="text-white text-xl font-medium px-4 py-2 rounded-lg 
                     hover:bg-white/10 hover:text-cyan-300 transition">About Me</a>
    <a href="https://wa.link/gf1t0t" class="text-xl font-semibold px-6 py-3 rounded-xl 
                     bg-gradient-to-r from-cyan-500 to-blue-500 text-black 
                     hover:from-cyan-400 hover:to-blue-400 shadow-lg 
                     transition">Order Now</a>
  </div>
</nav>

<script>
  const menuBtn = document.getElementById('menu-btn');
  const menu = document.getElementById('menu');

  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
  });
</script>
