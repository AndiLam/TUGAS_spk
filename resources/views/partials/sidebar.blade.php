<aside class="w-64 h-screen bg-gray-800 text-white p-4 flex flex-col">
    <!-- Menu -->
    <ul class="flex flex-col space-y-4">
        <li>
            <a href="{{ route('dashboard') }}" 
               class="flex items-center space-x-2 text-gray-300 hover:text-white rounded-lg py-2 px-4 transition duration-300 {{ request()->is('dashboard*') ? 'bg-gray-700' : '' }}">
                <i class="fas fa-tachometer-alt w-6 h-6"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('dataset') }}" 
               class="flex items-center space-x-2 text-gray-300 hover:text-white rounded-lg py-2 px-4 transition duration-300 {{ request()->is('dataset*') ? 'bg-gray-700' : '' }}">
                <i class="fas fa-database w-6 h-6"></i>
                <span>Dataset</span>
            </a>
        </li>
        <li>
            <a href="{{ route('perhitungan') }}" 
               class="flex items-center space-x-2 text-gray-300 hover:text-white rounded-lg py-2 px-4 transition duration-300 {{ request()->is('perhitungan*') ? 'bg-gray-700' : '' }}">
                <i class="fas fa-calculator w-6 h-6"></i>
                <span>Perhitungan</span>
            </a>
        </li>
        <li>
            <a href="{{ route('prediksi') }}" 
               class="flex items-center space-x-2 text-gray-300 hover:text-white rounded-lg py-2 px-4 transition duration-300 {{ request()->is('prediksi*') ? 'bg-gray-700' : '' }}">
                <i class="fas fa-chart-line w-6 h-6"></i>
                <span>Prediksi</span>
            </a>
        </li>
    </ul>
</aside>
