<section class="bg-gray-950 py-16 px-6">
  <div class="max-w-5xl mx-auto">
    <!-- Title -->
    <h2 class="text-4xl font-extrabold text-blue-400 text-center mb-8">
      Dashboard Portofolio
    </h2>

    <!-- Notification edit mode -->
    <div id="editNotice" class="hidden bg-blue-500 text-black font-semibold p-3 rounded-lg mb-4 text-center shadow-lg">
      Anda sedang dalam <span class="font-bold">MODE EDIT</span>. 
      <button type="button" onclick="cancelEdit()" class="underline ml-2">Kembali ke mode Tambah</button>
    </div>

    <!-- Portofolio Form -->
    <div class="bg-[#1c1f27]/80 p-8 rounded-xl shadow-lg backdrop-blur-md border border-slate-700/60">
      <h3 id="formTitle" class="text-2xl font-semibold text-white mb-6">Tambah Proyek Portofolio</h3>
      
      <form id="portofolioForm" action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <input type="hidden" id="formMethod" name="_method" value="POST">
        <input type="hidden" id="portofolioId">

        <!-- Project Title -->
        <div>
          <label for="title" class="text-white block text-sm font-semibold mb-2">Judul Proyek</label>
          <input type="text" id="title" name="judul" class="w-full px-4 py-2 rounded-md border border-slate-600 bg-[#0d1117] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Judul Proyek" required>
        </div>

        <!-- Project Image -->
        <div>
          <label for="image" class="text-white block text-sm font-semibold mb-2">Gambar Proyek</label>
          <input type="file" id="image" name="image" class="w-full px-4 py-2 rounded-md border border-slate-600 bg-[#0d1117] text-white focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <!-- Tech Stack -->
        <div>
          <label class="text-white block text-sm font-semibold mb-2">Tech Stack</label>
          <div class="flex gap-2">
            <input type="text" id="tech_stack_input" class="flex-1 px-4 py-2 rounded-md border border-slate-600 bg-[#0d1117] text-white focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan tech stack">
            <button type="button" onclick="addTechStack()" class="px-4 py-2 bg-blue-500 text-black font-semibold rounded-md hover:bg-blue-400 transition">
              Tambah
            </button>
          </div>
          <!-- Glass effect tags -->
          <div id="tech_stack_list" class="flex flex-wrap gap-2 mt-3"></div>
          <input type="hidden" name="tech_stack" id="tech_stack_hidden">
        </div>

        <!-- Description -->
        <div>
          <label for="description" class="text-white block text-sm font-semibold mb-2">Deskripsi Proyek</label>
          <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 rounded-md border border-slate-600 bg-[#0d1117] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Deskripsi tentang proyek ini" required></textarea>
        </div>

        <!-- Project Links -->
        <div class="space-y-4">
          <div>
            <label for="link_web" class="text-white block text-sm font-semibold mb-2">Link Website</label>
            <input type="url" id="link_web" name="link_web" class="w-full px-4 py-2 rounded-md border border-slate-600 bg-[#0d1117] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Link ke website" required>
          </div>
          <div>
            <label for="link_github" class="text-white block text-sm font-semibold mb-2">Link GitHub</label>
            <input type="url" id="link_github" name="link_github" class="w-full px-4 py-2 rounded-md border border-slate-600 bg-[#0d1117] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Link ke repository GitHub" required>
          </div>
        </div>

        <!-- Submit Button -->
        <div>
          <button id="submitBtn" type="submit" class="w-full py-2 px-4 text-lg font-semibold text-black bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-300">
            Simpan Proyek
          </button>
        </div>
      </form>
    </div>

    <!-- Portofolio List -->
    <div class="mt-12">
      <h3 class="text-2xl font-semibold text-white mb-6">Daftar Proyek</h3>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($portofolio as $portofolios)
          <div class="bg-[#1c1f27]/80 rounded-xl shadow-lg overflow-hidden border border-slate-700 hover:shadow-blue-500/40 hover:scale-105 transition duration-300 relative backdrop-blur-md">
            
            <!-- Delete Button -->
            <form action="{{ route('portofolio.destroy',$portofolios->id) }}" method="POST" class="absolute top-2 right-2">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded text-xs hover:bg-red-700">X</button>
            </form>

            <!-- Project Image -->
            <img src="{{ asset('storage/'.$portofolios->image) }}" alt="{{ $portofolios->judul }}" class="w-full h-48 object-cover cursor-pointer" onclick="editPortofolio({{ $portofolios }})">

            <div class="p-6 cursor-pointer" onclick="editPortofolio({{ $portofolios }})">
              <!-- Project Title -->
              <h4 class="text-xl font-bold text-blue-400 mb-2">{{ $portofolios->judul }}</h4>

              <!-- Tech Stack -->
              <div class="flex flex-wrap gap-2 mb-4">
                @foreach(explode(',', $portofolios->tech_stack) as $tech)
                  <span class="px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-md bg-blue-500/20 border border-blue-400/40 text-blue-300 hover:bg-blue-500/40 hover:shadow-blue-400/50 transition">
                    {{ $tech }}
                  </span>
                @endforeach
              </div>

              <!-- Description -->
              <p class="text-gray-300 text-sm mb-4">{{ Str::limit($portofolios->description, 100) }}</p>

              <!-- Links -->
              <div class="flex justify-between items-center">
                <a href="{{ $portofolios->link_web }}" target="_blank" class="text-blue-400 hover:underline text-sm font-medium">Website</a>
                <a href="{{ $portofolios->link_github }}" target="_blank" class="text-gray-300 hover:text-blue-300 hover:underline text-sm">GitHub</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<script>
  let techStacks = [];

  function addTechStack() {
    const input = document.getElementById('tech_stack_input');
    const value = input.value.trim();

    if (value && !techStacks.includes(value)) {
      techStacks.push(value);
      renderTechStack();
      input.value = '';
    }
  }

  function removeTechStack(index) {
    techStacks.splice(index, 1);
    renderTechStack();
  }

  function renderTechStack() {
    const list = document.getElementById('tech_stack_list');
    const hiddenInput = document.getElementById('tech_stack_hidden');

    list.innerHTML = '';

    techStacks.forEach((stack, index) => {
      const tag = document.createElement('span');
      tag.className = "px-3 py-1 rounded-full text-sm font-semibold backdrop-blur-md bg-blue-500/20 border border-blue-400/40 text-blue-300 hover:bg-blue-500/40 hover:shadow-blue-400/50 transition flex items-center gap-2";
      tag.innerHTML = `${stack} <button type="button" onclick="removeTechStack(${index})" class="text-red-500 font-bold">x</button>`;
      list.appendChild(tag);
    });

    hiddenInput.value = JSON.stringify(techStacks);
  }

  function editPortofolio(portofolio) {
    document.getElementById('formTitle').innerText = "Edit Proyek Portofolio";
    document.getElementById('submitBtn').innerText = "Update Proyek";
    document.getElementById('editNotice').classList.remove('hidden');

    const form = document.getElementById('portofolioForm');
    form.action = `/portofolio/${portofolio.id}`;
    document.getElementById('formMethod').value = "PUT";

    document.getElementById('portofolioId').value = portofolio.id;
    document.getElementById('title').value = portofolio.judul;
    document.getElementById('description').value = portofolio.description;
    document.getElementById('link_web').value = portofolio.link_web;
    document.getElementById('link_github').value = portofolio.link_github;

    try {
      if (typeof portofolio.tech_stack === "string") {
        techStacks = JSON.parse(portofolio.tech_stack);
      } else {
        techStacks = portofolio.tech_stack || [];
      }
    } catch (e) {
      techStacks = [];
    }

    renderTechStack();
  }

  function cancelEdit() {
    const form = document.getElementById('portofolioForm');
    form.action = `/portofolio`;
    document.getElementById('formMethod').value = "POST";
    document.getElementById('portofolioId').value = "";

    document.getElementById('formTitle').innerText = "Tambah Proyek Portofolio";
    document.getElementById('submitBtn').innerText = "Simpan Proyek";
    document.getElementById('editNotice').classList.add('hidden');

    form.reset();
    techStacks = [];
    renderTechStack();
  }
</script>
