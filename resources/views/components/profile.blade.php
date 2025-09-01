<div id="About">
  <!-- Profile + Tentang Saya -->
  <section class="bg-gray-950 py-16 px-6 text-white">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-12">
      <!-- Profile Card -->
      <div class="md:w-1/2 flex flex-col items-center md:items-start space-y-6">
        <div class="react-card-profile"></div>
      </div>

      <!-- Deskripsi -->
      <div class="md:w-1/2 text-center md:text-left">
  <h2 class="text-2xl font-extrabold text-blue-400 mb-3">Tentang Saya</h2>

  <!-- Wrapper untuk konten collapsible -->
  <div id="aboutText" class="max-h-32 overflow-hidden sm:max-h-none sm:overflow-visible transition-all duration-500">
    <p class="text-slate-300 leading-relaxed">
      Halo, saya <span class="font-bold text-white">Ikhtiyaril Ikhsan</span>. Saat ini saya adalah seorang mahasiswa sekaligus penggiat di bidang IT yang tengah menapaki perjalanan untuk membangun sebuah <span class="text-blue-400">startup Big Tech pertama dari Indonesia</span>.
    </p>
    <p class="text-slate-300 mt-4 leading-relaxed">
      Bagi saya, setiap langkah kecil adalah bagian dari misi besar. Dengan mengunjungi website ini, secara tidak langsung Anda sudah turut mendukung mimpi tersebut.
    </p>
    <p class="text-slate-300 mt-4 leading-relaxed">
      Selain fokus pada studi dan pengembangan diri, saya juga menawarkan layanan <span class="font-semibold text-white">pembuatan website</span>. 
      Meskipun masih berstatus mahasiswa, saya berkomitmen menghadirkan kualitas dan pelayanan yang layak bagi setiap klien.
    </p>
    <p class="text-slate-300 mt-4 leading-relaxed">
      Mari kita tumbuh bersama, karena teknologi terbaik lahir dari kolaborasi dan keberanian untuk bermimpi besar.
    </p>
  </div>

  <!-- Tombol hanya muncul di mobile -->
  <button id="toggleAbout" class="mt-4 text-blue-400 font-semibold sm:hidden">
    Read More ↓
  </button>
</div>
  </section>

  <!-- Skill Bars -->
  <section class="bg-gray-950 px-6 text-white">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl font-extrabold text-blue-400">Technical Skills</h2>

      <!-- Skill Bar Item -->
      <div class="mt-6">
        <div class="flex items-center justify-between">
          <span class="text-white">HTML/CSS</span>
          <span class="text-white">90%</span>
        </div>
        <div class="bg-gray-700 h-2 rounded-full mt-1">
          <div class="bg-blue-200 h-2 rounded-full" style="width: 90%"></div>
        </div>
      </div>

      <div class="mt-4">
        <div class="flex items-center justify-between">
          <span class="text-white">React.js</span>
          <span class="text-white">88%</span>
        </div>
        <div class="bg-gray-700 h-2 rounded-full mt-1">
          <div class="bg-blue-200 h-2 rounded-full" style="width: 88%"></div>
        </div>
      </div>

      <div class="mt-4">
        <div class="flex items-center justify-between">
          <span class="text-white">Tailwind CSS</span>
          <span class="text-white">92%</span>
        </div>
        <div class="bg-gray-700 h-2 rounded-full mt-1">
          <div class="bg-blue-200 h-2 rounded-full" style="width: 92%"></div>
        </div>
      </div>

      <div class="mt-4">
        <div class="flex items-center justify-between">
          <span class="text-white">JavaScript</span>
          <span class="text-white">85%</span>
        </div>
        <div class="bg-gray-700 h-2 rounded-full mt-1">
          <div class="bg-blue-200 h-2 rounded-full" style="width: 85%"></div>
        </div>
      </div>

      <div class="mt-4">
        <div class="flex items-center justify-between">
          <span class="text-white">Next.js</span>
          <span class="text-white">80%</span>
        </div>
        <div class="bg-gray-700 h-2 rounded-full mt-1">
          <div class="bg-blue-200 h-2 rounded-full" style="width: 80%"></div>
        </div>
      </div>

      <div class="mt-4 mb-12">
        <div class="flex items-center justify-between">
          <span class="text-white">Node.js</span>
          <span class="text-white">75%</span>
        </div>
        <div class="bg-gray-700 h-2 rounded-full mt-1">
          <div class="bg-blue-200 h-2 rounded-full" style="width: 75%"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Statistik -->
  <section class="bg-gray-950 py-16 px-6 text-white">
    <h2 class="text-4xl font-extrabold text-center text-white">
      Beberapa Statistik
    </h2>

    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
      <!-- Card 1 -->
      <div class="bg-slate-950 border-[0.1px] hover:shadow-[0px_4px_6px_0px_rgba(59,_130,_246,_0.5)] border-gray-400/50 p-8 rounded-lg shadow-lg transition text-center hover:border-blue-400/50 hover:border-2">
        <div class="flex justify-center items-center w-16 h-16 text-white rounded-full mx-auto mb-4">
          <img src="logoProjectDone.png" class="w-14 h-14" alt="">
        </div>
        <h3 class="text-3xl font-bold text-white">{{$experience->project}}</h3>
        <p class="text-slate-300">Projects Completed</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-slate-950 border-[0.1px] hover:shadow-[0px_4px_6px_0px_rgba(59,_130,_246,_0.5)] border-gray-400/50 p-8 rounded-lg shadow-lg transition text-center hover:border-blue-400/50 hover:border-2">
        <div class="flex justify-center items-center w-16 h-16 text-white rounded-full mx-auto mb-4">
          <img src="logoHappyClient.png" alt="">
        </div>
        <h3 class="text-3xl font-bold text-white">{{$experience->project-1}}</h3>
        <p class="text-slate-300">Happy Clients</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-slate-950 p-8 rounded-lg shadow-lg border-[0.1px] hover:shadow-[0px_4px_6px_0px_rgba(59,_130,_246,_0.5)] border-gray-400/50 transition text-center hover:border-blue-400/50 hover:border-2">
        <div class="flex justify-center items-center w-16 h-16 text-white rounded-full mx-auto mb-4">
          <img src="logoCoffe.png" alt="" class="w-14 h-14">
        </div>
        <h3 class="text-3xl font-bold text-white">500+</h3>
        <p class="text-slate-300">Cups of Coffee</p>
      </div>

      <!-- Card 4 -->
      <div class="bg-slate-950 p-8 rounded-lg shadow-lg border-[0.1px] hover:shadow-[0px_4px_6px_0px_rgba(59,_130,_246,_0.5)] border-gray-400/50 transition text-center hover:border-blue-400/50 hover:border-2">
        <div class="flex justify-center items-center w-16 h-16 text-white rounded-full mx-auto mb-4">
          <img src="logoExperience.png" alt="" class="h-14 w-14">
        </div>
        <h3 class="text-3xl font-bold text-white">{{$experience->experience}}</h3>
        <p class="text-slate-300">Years Experience</p>
      </div>
    </div>
  </section>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const aboutText = document.getElementById("aboutText");
    const toggleBtn = document.getElementById("toggleAbout");
    let expanded = false;

    toggleBtn.addEventListener("click", () => {
      expanded = !expanded;
      if (expanded) {
        aboutText.classList.remove("max-h-32", "overflow-hidden");
        toggleBtn.textContent = "Read Less ↑";
      } else {
        aboutText.classList.add("max-h-32", "overflow-hidden");
        toggleBtn.textContent = "Read More ↓";
      }
    });
  });
</script>