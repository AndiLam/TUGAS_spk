<header class="bg-gray-800 text-white p-4 shadow-md">
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-semibold truncate max-w-xs sm:max-w-md">PREDICTION COFFEE BEANS</h1>
        
        <!-- Tombol Logout di sebelah kanan -->
        <div>
            <button type="button" id="logoutButton" class="text-white bg-red-600 px-4 py-2 rounded-lg hover:bg-red-700 flex items-center space-x-2 transition duration-300">
                <!-- Ikon Logout -->
                <i class="fas fa-sign-out-alt mr-2"></i>
                <span class="hidden sm:inline">Logout</span>
            </button>
        </div>
    </div>
</header>

<!-- Modal Logout -->
<div id="logoutModal" class= "fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-sm w-full">
        <h3 class="text-xl font-semibold mb-4">Konfirmasi Logout</h3>
        <p class="mb-4">Apakah Anda yakin ingin logout?</p>
        <div class="flex justify-end space-x-4">
            <button id="cancelButton" class="px-4 py-2 bg-gray-300 text-black rounded-lg hover:bg-gray-400">Batal</button>
            <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                @csrf
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Logout</button>
            </form>
        </div>
    </div>
</div>

<!-- Script untuk konfirmasi logout -->
<script>
    // Mendapatkan elemen tombol logout dan modal
    const logoutButton = document.getElementById('logoutButton');
    const logoutModal = document.getElementById('logoutModal');
    const cancelButton = document.getElementById('cancelButton');
    
    // Menampilkan modal saat tombol logout diklik
    logoutButton.addEventListener('click', function() {
        logoutModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden'); // Menambahkan kelas untuk menonaktifkan scroll
    });

    // Menutup modal jika tombol batal diklik
    cancelButton.addEventListener('click', function() {
        logoutModal.classList.add('hidden');
        document.body.classList.remove('overflow-hidden'); // Menghapus kelas untuk mengembalikan scroll
    });
</script>
