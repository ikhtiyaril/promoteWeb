<section class="bg-gray-950 py-16 px-6">
  <div class="max-w-4xl mx-auto">
    <!-- Title -->
    <h2 class="text-4xl font-extrabold text-blue-400 text-center mb-8">
      Dashboard Pengalaman Project
    </h2>

    <!-- Experience Project Form -->
    <div class="bg-[#122b47] p-8 rounded-lg shadow-lg backdrop-blur-sm bg-opacity-40">
      <h3 class="text-2xl font-semibold text-white mb-6">Pengalaman Project</h3>
      
      <form action="/experience/{{$experience->id}}" method="POST" class="space-y-6">
       @csrf
       @method("PUT")
        <div>
          <label for="experience" class="text-white block text-sm font-semibold mb-4">
            Pengalaman Project
          </label>

          <div class="flex items-center justify-center gap-8 flex-wrap">
            <!-- Years Experience -->
            <div class="flex items-center space-x-4 bg-[#0f243d] p-4 rounded-lg shadow-md">
              <!-- Minus Button -->
              <button type="button" id="decrease" 
                class="bg-blue-500 text-white w-10 h-10 rounded-full flex justify-center items-center font-bold text-lg hover:bg-blue-400 shadow-md shadow-blue-500/50 transition">
                -
              </button>

              <!-- Number Input -->
              <input type="number" id="experience" name="experience" 
                value="{{$experience->experience}}" 
                class="w-24 text-center text-white bg-[#0f243d] border border-blue-500 rounded-md py-2 focus:ring-2 focus:ring-blue-400" 
                min="1" required readonly>

              <!-- Plus Button -->
              <button type="button" id="increase" 
                class="bg-blue-500 text-white w-10 h-10 rounded-full flex justify-center items-center font-bold text-lg hover:bg-blue-400 shadow-md shadow-blue-500/50 transition">
                +
              </button>
            </div>

            <!-- Projects Count -->
            <div class="flex items-center space-x-4 bg-[#0f243d] p-4 rounded-lg shadow-md">
              <!-- Minus Button -->
              <button type="button" id="decreaseA" 
                class="bg-blue-500 text-white w-10 h-10 rounded-full flex justify-center items-center font-bold text-lg hover:bg-blue-400 shadow-md shadow-blue-500/50 transition">
                -
              </button>

              <!-- Number Input -->
              <input type="number" id="project" name="project" 
                value="{{$experience->project}}" 
                class="w-24 text-center text-white bg-[#0f243d] border border-blue-500 rounded-md py-2 focus:ring-2 focus:ring-blue-400" 
                min="1" required readonly>

              <!-- Plus Button -->
              <button type="button" id="increaseA" 
                class="bg-blue-500 text-white w-10 h-10 rounded-full flex justify-center items-center font-bold text-lg hover:bg-blue-400 shadow-md shadow-blue-500/50 transition">
                +
              </button>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div>
          <button type="submit" 
            class="w-full py-3 px-4 text-lg font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-400 shadow-lg shadow-blue-500/50 transition duration-300">
            Simpan Pengalaman
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<script>
  const experienceInput = document.getElementById('experience');
  const projectInput = document.getElementById('project');
  const increaseButton = document.getElementById('increase');
  const decreaseButton = document.getElementById('decrease');
  const increaseAButton = document.getElementById('increaseA');
  const decreaseAButton = document.getElementById('decreaseA');

  increaseButton.addEventListener('click', () => {
    experienceInput.value = parseInt(experienceInput.value) + 1;
  });

  decreaseButton.addEventListener('click', () => {
    if (experienceInput.value > 1) {
      experienceInput.value = parseInt(experienceInput.value) - 1;
    }
  });

  increaseAButton.addEventListener('click', () => {
    projectInput.value = parseInt(projectInput.value) + 1;
  });

  decreaseAButton.addEventListener('click', () => {
    if (projectInput.value > 1) {
      projectInput.value = parseInt(projectInput.value) - 1;
    }
  });
</script>
