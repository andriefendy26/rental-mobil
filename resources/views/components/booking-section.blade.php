@props([
    'data' => collect(),
    'isLoading' => false,
])

{{-- Step 1: Pilih Layanan & Tujuan --}}
<div data-aos="fade-right" class="relative z-50 flex flex-col p-6 px-12 text-black bg-white shadow-2xl rounded-2xl md:mx-24 lg:-top-14 lg:mx-16">
    {{-- Progress Steps --}}
    <div class="flex items-center justify-center mb-8">
        <div class="flex items-center">
            <div class="flex items-center justify-center w-10 h-10 font-semibold text-white bg-red-600 rounded-full" id="progress-step-1">
                1
            </div>
            <div class="w-16 h-1 mx-2 bg-black/10" id="progress-line"></div>
            <div class="flex items-center justify-center w-10 h-10 font-semibold text-gray-600 rounded-full bg-black/10" id="progress-step-2">
                2
            </div>
        </div>
    </div>

    {{-- Form Step 1 --}}
    <div id="step-1" class="step-content">
        <div class="mb-8 text-center">
            <h2 class="mb-2 text-2xl font-bold text-gray-800">Pilih Layanan & Tujuan</h2>
            <p class="text-gray-600">Lengkapi informasi perjalanan Anda</p>
        </div>

        <form id="booking-form">
            @csrf
            <div class="grid gap-6 mb-8 md:grid-cols-2 lg:grid-cols-4">
                {{-- Layanan --}}
                <div class="relative">
                    <label class="block mb-2 text-sm font-medium text-gray-700">LAYANAN</label>
                    <div class="relative">
                        <select name="layanan" id="layanan" class="w-full p-4 pl-12 border border-gray-300 rounded-lg appearance-none bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                            <option value="">Pilih Layanan</option>
                            <option value="rental_mobil_supir" selected>Rental Mobil + Supir</option>
                            <option value="rental_mobil_lepas_kunci">Rental Mobil Lepas Kunci</option>
                            <option value="sewa_bus">Sewa Excavator</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Unit --}}
                <div class="relative">
                    <label class="block mb-2 text-sm font-medium text-gray-700">UNIT</label>
                    <div class="relative">
                        <select name="unit" id="unit" class="w-full p-4 pl-12 border border-gray-300 rounded-lg appearance-none bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                                <option value="">Pilih Unit</option>
                                @foreach($data as $unit)
                                    <option value="{{ $unit->merek }}">{{ strtoupper($unit->merek) }}</option>
                                @endforeach
                            {{-- <option value="">Pilih Unit</option>
                            <option value="rush_terios" selected>RUSH/TERIOS</option>
                            <option value="avanza_xenia">AVANZA/XENIA</option>
                            <option value="innova">INNOVA</option>
                            <option value="hiace">HIACE</option> --}}
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Alamat/Dari --}}
                <div class="relative">
                    <label class="block mb-2 text-sm font-medium text-gray-700">ALAMAT / DARI</label>
                    <div class="relative">
                        <input type="text" name="alamat_dari" id="alamat_dari" placeholder="Kota asal" class="w-full p-4 pl-12 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Tujuan/Ke --}}
                <div class="relative">
                    <label class="block mb-2 text-sm font-medium text-gray-700">TUJUAN / KE</label>
                    <div class="relative">
                        <input type="text" name="tujuan_ke" id="tujuan_ke" placeholder="Kota tujuan" class="w-full p-4 pl-12 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button type="button" id="next-step" class="px-8 py-3 font-semibold text-white transition duration-300 ease-in-out transform bg-[#800000] rounded-lg hover:bg-[#800000]/80 hover:scale-105">
                    Berikutnya →
                </button>
            </div>
        </form>
    </div>

    {{-- Form Step 2 --}}
    <div id="step-2" class="hidden step-content">
        <div class="mb-8 text-center">
            <h2 class="mb-2 text-2xl font-bold text-gray-800">Informasi Pemesan</h2>
            <p class="text-gray-600">Masukkan detail kontak dan jadwal perjalanan</p>
        </div>

        <div class="grid gap-6 mb-8 md:grid-cols-2 lg:grid-cols-4">
            {{-- Atas Nama --}}
            <div class="relative">
                <label class="block mb-2 text-sm font-medium text-gray-700">ATAS NAMA</label>
                <div class="relative">
                    <input type="text" name="atas_nama" id="atas_nama" placeholder="Nama lengkap pemesan" class="w-full p-4 pl-12 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            {{-- No Telepon --}}
            <div class="relative">
                <label class="block mb-2 text-sm font-medium text-gray-700">NO TELEPON</label>
                <div class="relative">
                    <input type="tel" name="no_telepon" id="no_telepon" placeholder="Nomor yang bisa dihubungi" class="w-full p-4 pl-12 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            {{-- Dari Tanggal --}}
            <div class="relative">
                <label class="block mb-2 text-sm font-medium text-gray-700">DARI TANGGAL</label>
                <div class="relative">
                    <input type="date" 
                           name="dari_tanggal" 
                           id="dari_tanggal" 
                           class="w-full p-4 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500"
                           style="color-scheme: light;">
                    {{-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div> --}}
                </div>
            </div>

            {{-- Sampai Tanggal --}}
            <div class="relative">
                <label class="block mb-2 text-sm font-medium text-gray-700">SAMPAI TANGGAL</label>
                <div class="relative">
                    <input type="date" 
                           name="sampai_tanggal" 
                           id="sampai_tanggal" 
                           class="w-full p-4 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-red-500 focus:border-red-500"
                           style="color-scheme: light;">
                    {{-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div> --}}
                </div>
                
                {{-- Display duration --}}
                <div id="duration-display" class="hidden mt-1 text-sm text-gray-600">
                    <span class="font-medium">Durasi: <span id="duration-text">0 hari</span></span>
                </div>
            </div>
        </div>

        <div class="flex justify-center space-x-4">
            <button type="button" id="prev-step" class="text-black hover:from-gray-500 hover:to-gray-600 px-6 py-4 rounded-xl font-semibold text-sm transition-all duration-200 flex items-center justify-center gap-2 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                Kembali
            </button>
            <button id="whatsappButton" type="submit" class="flex items-center px-8 py-3 font-semibold text-white transition duration-300 ease-in-out transform bg-[#800000] rounded-lg hover:bg-[#800000]/80 hover:scale-105">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.569-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.787"/>
                </svg>
                Lanjutkan ke WhatsApp
            </button>
        </div>
    </div>
</div>

{{-- Styles untuk Date Picker --}}
<style>
/* Custom styles for date picker */
.date-input {
    position: relative;
}

.date-input::-webkit-calendar-picker-indicator {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #DC2626;
    cursor: pointer;
    font-size: 16px;
    width: 20px;
    height: 20px;
}

.date-input::-webkit-inner-spin-button {
    display: none;
}

.date-input::-webkit-clear-button {
    display: none;
}

/* Style untuk placeholder date */
.date-input:invalid {
    color: #9CA3AF;
}

.date-input:valid {
    color: #111827;
}

/* Animation untuk transisi step */
.step-content {
    transition: all 0.3s ease-in-out;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .grid-cols-1 {
        grid-template-columns: 1fr;
    }
    
    .date-input {
        font-size: 16px; /* Prevents zoom on iOS */
    }
}
</style>

{{-- JavaScript untuk Step Navigation dan WhatsApp Integration --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const step1 = document.getElementById('step-1');
    const step2 = document.getElementById('step-2');
    const nextBtn = document.getElementById('next-step');
    const prevBtn = document.getElementById('prev-step');
    const progressStep1 = document.getElementById('progress-step-1');
    const progressStep2 = document.getElementById('progress-step-2');
    const progressLine = document.getElementById('progress-line');
    
    // Date picker elements
    const dariTanggalInput = document.getElementById('dari_tanggal');
    const sampaiTanggalInput = document.getElementById('sampai_tanggal');
    const durationDisplay = document.getElementById('duration-display');
    const durationText = document.getElementById('duration-text');
    
    // Nomor WhatsApp tujuan (ganti dengan nomor yang sesuai)
    const whatsappNumber = '6282255187877'; // Format: 62 untuk Indonesia

    // Set minimum date untuk date picker (hari ini)
    const today = new Date().toISOString().split('T')[0];
    dariTanggalInput.min = today;
    sampaiTanggalInput.min = today;

    // Function untuk update minimum date pada sampai_tanggal
    function updateSampaiTanggalMin() {
        const dariTanggal = dariTanggalInput.value;
        if (dariTanggal) {
            sampaiTanggalInput.min = dariTanggal;
            
            // Reset sampai_tanggal jika kurang dari dari_tanggal
            if (sampaiTanggalInput.value && sampaiTanggalInput.value < dariTanggal) {
                sampaiTanggalInput.value = '';
                durationDisplay.classList.add('hidden');
            }
        }
    }

    // Function untuk menghitung dan menampilkan durasi
    function calculateDuration() {
        const startDate = dariTanggalInput.value;
        const endDate = sampaiTanggalInput.value;
        
        if (startDate && endDate) {
            const start = new Date(startDate);
            const end = new Date(endDate);
            const timeDiff = end.getTime() - start.getTime();
            const dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24)) + 1;
            
            if (dayDiff > 0) {
                durationText.textContent = `${dayDiff} hari`;
                durationDisplay.classList.remove('hidden');
            } else {
                durationDisplay.classList.add('hidden');
            }
        } else {
            durationDisplay.classList.add('hidden');
        }
    }

    // Event listeners untuk date picker
    dariTanggalInput.addEventListener('change', function() {
        updateSampaiTanggalMin();
        calculateDuration();
    });

    sampaiTanggalInput.addEventListener('change', function() {
        calculateDuration();
    });

    // Navigation ke step 2
    nextBtn.addEventListener('click', function() {
        // Validate step 1 fields
        const layanan = document.getElementById('layanan').value;
        const unit = document.getElementById('unit').value;
        const alamatDari = document.getElementById('alamat_dari').value;
        const tujuanKe = document.getElementById('tujuan_ke').value;

        if (!layanan || !unit || !alamatDari || !tujuanKe) {
            alert('Mohon lengkapi semua field yang diperlukan');
            return;
        }

        // Hide step 1, show step 2
        step1.classList.add('hidden');
        step2.classList.remove('hidden');

        // Update progress indicators
        progressStep1.classList.remove('bg-red-600');
        progressStep1.classList.add('bg-green-500');
        progressStep2.classList.remove('bg-black/10', 'text-gray-600');
        progressStep2.classList.add('bg-red-600', 'text-white');
        progressLine.classList.remove('bg-black/10');
        progressLine.classList.add('bg-green-500');
    });

    // Navigation kembali ke step 1
    prevBtn.addEventListener('click', function() {
        // Hide step 2, show step 1
        step2.classList.add('hidden');
        step1.classList.remove('hidden');

        // Update progress indicators
        progressStep1.classList.remove('bg-green-500');
        progressStep1.classList.add('bg-red-600');
        progressStep2.classList.remove('bg-red-600', 'text-white');
        progressStep2.classList.add('bg-black/10', 'text-gray-600');
        progressLine.classList.remove('bg-green-500');
        progressLine.classList.add('bg-black/10');
    });

    // Form submission ke WhatsApp
    document.getElementById('whatsappButton').addEventListener('click', function(e) {
        e.preventDefault();
        
        // Validate step 2 fields
        const atasNama = document.getElementById('atas_nama').value;
        const noTelepon = document.getElementById('no_telepon').value;
        const dariTanggal = dariTanggalInput.value;
        const sampaiTanggal = sampaiTanggalInput.value;

        if (!atasNama || !noTelepon || !dariTanggal || !sampaiTanggal) {
            alert('Mohon lengkapi semua field yang diperlukan');
            return;
        }

        // Validasi tanggal
        if (new Date(sampaiTanggal) < new Date(dariTanggal)) {
            alert('Tanggal selesai tidak boleh lebih awal dari tanggal mulai');
            return;
        }

        // Get all form data
        const layanan = document.getElementById('layanan');
        const unit = document.getElementById('unit');
        const alamatDari = document.getElementById('alamat_dari').value;
        const tujuanKe = document.getElementById('tujuan_ke').value;

        // Get display names for select options
        const layananText = layanan.options[layanan.selectedIndex].text;
        const unitText = unit.options[unit.selectedIndex].text;

        // Format dates dalam bahasa Indonesia
        const formatDateIndonesia = (dateString) => {
            const date = new Date(dateString);
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            return date.toLocaleDateString('id-ID', options);
        };

        const startDate = formatDateIndonesia(dariTanggal);
        const endDate = formatDateIndonesia(sampaiTanggal);

        // Calculate duration
        const start = new Date(dariTanggal);
        const end = new Date(sampaiTanggal);
        const duration = Math.ceil((end.getTime() - start.getTime()) / (1000 * 60 * 60 * 24)) + 1;

        // Create WhatsApp message
        const message = `🚐 *BOOKING RENTAL MOBIL*

📋 *Detail Booking:*
• Layanan: ${layananText}
• Unit Kendaraan: ${unitText}
• Dari: ${alamatDari}
• Tujuan: ${tujuanKe}

👤 *Data Pemesan:*
• Nama: ${atasNama}
• No. Telepon: ${noTelepon}

📅 *Jadwal Perjalanan:*
• Mulai: ${startDate}
• Selesai: ${endDate}
• Durasi: ${duration} hari

Mohon konfirmasi ketersediaan dan harga untuk booking ini. Terima kasih! 🙏`;

        // Encode message for URL
        const encodedMessage = encodeURIComponent(message);
        
        // Create WhatsApp URL
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
        
        // Open WhatsApp
        window.open(whatsappUrl, '_blank');
    });

    // Auto-focus pada input pertama
    document.getElementById('layanan').focus();
});
</script>