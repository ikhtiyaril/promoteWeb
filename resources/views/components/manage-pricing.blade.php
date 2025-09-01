<div class="max-w-6xl mx-auto p-6">
    <h2 class="text-xl mt-24 md:text-2xl font-extrabold mb-10 text-center text-blue-400 tracking-wide drop-shadow-lg">
     Kelola Pricing 
    </h2>

    <!-- Info Mode -->
    <div id="editModeAlert" 
         class="hidden mb-4 p-4 rounded-lg bg-blue-500/10 border border-blue-400 text-blue-300 font-semibold justify-between items-center">
        <span>⚠ Anda sedang dalam <b>Edit Mode</b>. Klik tombol di kanan untuk kembali ke <b>Create Mode</b>.</span>
        <button type="button" onclick="resetForm()" 
                class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-400 transition">
            Kembali
        </button>
    </div>

    <!-- Form -->
    <form id="pricingForm" method="POST" enctype="multipart/form-data" 
          action="/pricing"
          class="bg-black/80 backdrop-blur border border-blue-500/40 rounded-2xl p-8 shadow-xl">
        @csrf
        <input type="hidden" name="_method" id="formMethod" value="POST">
        <input type="hidden" name="pricing_id" id="pricingId">

        <div class="mb-5">
            <label class="block mb-2 text-blue-400 font-semibold">Nama Paket</label>
            <input type="text" name="name" id="name" 
                   class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500 transition" />
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-blue-400 font-semibold">Deskripsi</label>
            <textarea name="information" id="information" 
                      class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500 transition"></textarea>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-blue-400 font-semibold">Harga</label>
            <input type="number" name="price" id="price" 
                   class="w-full bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500 transition" />
        </div>

        <!-- Fitur Section -->
        <div class="mb-5">
            <label class="block mb-2 text-blue-400 font-semibold">Fitur</label>
            <div class="flex gap-2">
                <input type="text" id="featureInput" 
                       class="flex-1 bg-gray-900 text-white rounded-lg px-4 py-2 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500 transition" 
                       placeholder="tulis fitur lalu klik tambah" />
                <button type="button" onclick="addFeature()" 
                        class="bg-blue-500 text-white px-3 py-2 rounded-lg hover:bg-blue-400 transition">
                    Tambah
                </button>
            </div>
            <!-- Tempat nampilin fitur yang ditambahkan -->
            <ul id="featureList" class="mt-3 space-y-2 text-sm text-gray-200"></ul>
        </div>

        <!-- Hidden input buat ngirim array -->
        <div id="featureHiddenInputs"></div>

        <div class="mb-6">
            <label class="block mb-2 text-blue-400 font-semibold">Gambar</label>
            <input type="file" name="image" 
                   class="w-full text-gray-200 border border-gray-700 rounded-lg bg-gray-900 p-2 focus:ring-2 focus:ring-blue-500 transition" />
        </div>

        <button type="submit" id="submitBtn" 
                class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white font-bold px-6 py-2 rounded-lg shadow-lg hover:shadow-blue-500/40 hover:scale-105 transition duration-300">
            Create
        </button>
    </form>

    <!-- List Data -->
    <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($pricing as $item)
            <div class="relative bg-black/80 border border-blue-500/30 p-6 rounded-2xl text-white shadow-md hover:shadow-blue-500/30 hover:border-blue-400 hover:scale-105 transition-all duration-300 cursor-pointer"
                 onclick='editPricing(@json($item, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT))'
>
                
                <!-- Tombol Delete -->
                <form method="POST" action="{{ route('pricing.destroy', $item->id) }}" 
                      class="absolute top-3 right-3"
                      onclick="event.stopPropagation()">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-400 font-bold hover:text-red-500 transition">✖</button>
                </form>

                <h3 class="text-xl font-bold text-blue-400">{{ $item->name }}</h3>
                <p class="text-sm text-gray-300 mt-1">{{ $item->information }}</p>
                <p class="text-lg font-bold mt-3 text-blue-500">Rp {{ number_format($item->price, 0, ',', '.') }}</p>

                <ul class="text-sm mt-3 space-y-1">
                    @foreach ($item->feature as $f)
                        <li class="flex items-center">
                            <span class="text-blue-400 mr-2">✔</span> {{ $f }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>

<script>
    let features = [];

    function addFeature() {
        const input = document.getElementById('featureInput');
        const value = input.value.trim();
        if (value !== "") {
            features.push(value);
            renderFeatures();
            input.value = "";
        }
    }

    function removeFeature(index) {
        features.splice(index, 1);
        renderFeatures();
    }

    function renderFeatures() {
        const list = document.getElementById('featureList');
        const hiddenInputs = document.getElementById('featureHiddenInputs');
        list.innerHTML = "";
        hiddenInputs.innerHTML = "";

        features.forEach((f, index) => {
            list.innerHTML += `
                <li class="flex justify-between items-center bg-gray-800 px-3 py-1 rounded-lg">
                    <span>${f}</span>
                    <button type="button" onclick="removeFeature(${index})" class="text-red-400 hover:text-red-600">✖</button>
                </li>
            `;

            hiddenInputs.innerHTML += `<input type="hidden" name="feature[]" value="${f}">`;
        });
    }

    function editPricing(item) {
        document.getElementById('pricingForm').action = '/pricing/' + item.id;
        document.getElementById('formMethod').value = 'PUT';
        document.getElementById('pricingId').value = item.id;
        document.getElementById('name').value = item.name || '';
        document.getElementById('information').value = item.information || '';
        document.getElementById('price').value = item.price || '';

        features = Array.isArray(item.feature) ? item.feature : [];
        renderFeatures();

        document.getElementById('submitBtn').textContent = 'Update';
        document.getElementById('editModeAlert').classList.remove('hidden');
    }

    function resetForm() {
        document.getElementById('pricingForm').action = '/pricing';
        document.getElementById('formMethod').value = 'POST';
        document.getElementById('pricingId').value = '';
        document.getElementById('name').value = '';
        document.getElementById('information').value = '';
        document.getElementById('price').value = '';
        features = [];
        renderFeatures();
        document.getElementById('submitBtn').textContent = 'Create';
        document.getElementById('editModeAlert').classList.add('hidden');
    }

    document.getElementById('pricingForm').addEventListener('submit', function() {
        setTimeout(resetForm, 500);
    });
</script>
