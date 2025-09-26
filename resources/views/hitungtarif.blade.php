<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediksi Tarif Transportasi Online</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <link rel="stylesheet" href="https://unpkg.com/intro.js/minified/introjs.min.css">

    <style>
        :root {
            --dark-blue: #0a192f;
            --light-blue: #172a46;
            --accent-cyan: #64ffda;
            --light-slate: #ccd6f6;
            --slate: #8892b0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark-blue);
            background-image: url('https://i.ibb.co/6g2Xf5F/futuristic-city-transportation-network.jpg');
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            color: var(--light-slate);
            overflow-x: hidden;
            transition: background-image 0.8s ease-in-out;
        }
        
        body.background-changing {
            animation: backgroundZoom 0.8s ease-in-out forwards;
        }

        @keyframes backgroundZoom {
            from { background-size: 110% auto; }
            to { background-size: 100% auto; }
        }
        
        .hero-section { padding: 80px 0; background: linear-gradient(rgba(10, 25, 47, 0.9), rgba(10, 25, 47, 0.9)); text-align: center; }
        .hero-section .lead { color: var(--slate); max-width: 600px; margin: 1rem auto 0; }
        .hero-section .display-4 { color: var(--light-slate); }
        .calculator-card { 
            background: rgba(23, 42, 69, 0.85); 
            border-radius: 15px; 
            padding: 2.5rem; 
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); 
            backdrop-filter: blur(10px); 
            border: 1px solid rgba(100, 255, 218, 0.2); 
            transition: box-shadow 0.3s ease; 
            position: relative;
        }
        .calculator-card:hover { box-shadow: 0 0 25px rgba(100, 255, 218, 0.1); }
        
        .calculator-card::before, .calculator-card::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            border-color: var(--accent-cyan);
            border-style: solid;
            opacity: 0;
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }
        .calculator-card::before {
            top: 15px; left: 15px;
            border-width: 2px 0 0 2px;
            transform: translate(-10px, -10px);
        }
        .calculator-card::after {
            bottom: 15px; right: 15px;
            border-width: 0 2px 2px 0;
            transform: translate(10px, 10px);
        }
        .calculator-card:hover::before, .calculator-card:hover::after {
            opacity: 1;
            transform: translate(0, 0);
        }

        #particles-container {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -10;
        }
        
        .card-title { color: var(--light-slate); font-weight: 600; }
        .form-label { font-weight: 500; color: var(--slate); margin-bottom: 0.5rem; }
        .form-control, .form-select { background-color: var(--dark-blue); color: var(--light-slate); border: 1px solid #2c4974; border-radius: 8px; padding: 12px; transition: border-color 0.3s ease, box-shadow 0.3s ease; }
        .form-control::placeholder { color: var(--slate); opacity: 0.7; }
        .form-control:focus, .form-select:focus { background-color: var(--dark-blue); color: var(--light-slate); border-color: var(--accent-cyan); box-shadow: 0 0 0 0.25rem rgba(100, 255, 218, 0.15); }
        .form-select { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%2364ffda' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e"); }
        .btn { transition: all 0.2s ease-out; border-radius: 8px; padding: 12px 20px; font-weight: 600; }
        .btn:hover { transform: translateY(-3px); }
        .btn:disabled { cursor: not-allowed; transform: none; background-color: var(--slate) !important; border-color: var(--slate) !important; opacity: 0.5; }
        .btn-primary { background-color: var(--accent-cyan); border-color: var(--accent-cyan); color: var(--dark-blue); }
        .btn-primary:hover, .btn-primary:focus { background-color: #55e3c4; border-color: #55e3c4; color: var(--dark-blue); }
        .btn-outline-secondary { color: var(--accent-cyan); border-color: var(--accent-cyan); }
        .btn-outline-secondary:hover { background-color: rgba(100, 255, 218, 0.1); color: var(--accent-cyan); border-color: var(--accent-cyan); }
        .result-section { background-color: var(--light-blue); border: 1px solid var(--accent-cyan); border-radius: 15px; padding: 2.5rem; margin-top: 2rem; opacity: 0; transform: scale(0.95) translateY(10px); transition: opacity 0.4s ease-out, transform 0.4s ease-out; display: none; }
        .result-section.show { opacity: 1; transform: scale(1) translateY(0); display: block; }
        .result-table-container { border: 1px solid #2c4974; border-radius: 10px; overflow: hidden; background-color: var(--dark-blue); }
        .result-table-header { background-color: var(--light-blue); padding: 0.75rem 1.25rem; font-weight: 600; color: var(--light-slate); display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #2c4974; }
        .result-table { margin-bottom: 0; }
        .result-table th { color: var(--slate); font-weight: 500; font-size: 0.9em; padding: 1rem 1.25rem; }
        .result-table td { color: var(--light-slate); vertical-align: middle; padding: 1rem 1.25rem; }
        .result-table tbody tr:not(:last-child) { border-bottom: 1px solid #2c4974; }
        .result-table .table-active { background-color: rgba(100, 255, 218, 0.07) !important; }
        .result-table .fw-bold { font-weight: 600 !important; color: var(--accent-cyan);}
        hr { border-color: rgba(136, 146, 176, 0.3); }
        footer { background: linear-gradient(rgba(10, 25, 47, 0.85), rgba(10, 25, 47, 0.85)); color: var(--slate); }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .animate-on-load { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
        .hero-section p.animate-on-load { animation-delay: 0.2s; }
        .calculator-card.animate-on-load { animation-delay: 0.4s; }

        .introjs-tooltip { background-color: var(--light-blue); color: var(--light-slate); border: 1px solid var(--accent-cyan); border-radius: 8px; }
        .introjs-arrow.top, .introjs-arrow.top-middle, .introjs-arrow.top-right { border-bottom-color: var(--light-blue); }
        .introjs-arrow.bottom, .introjs-arrow.bottom-middle, .introjs-arrow.bottom-right { border-top-color: var(--light-blue); }
        .introjs-arrow.left { border-right-color: var(--light-blue); }
        .introjs-arrow.right { border-left-color: var(--light-blue); }
        .introjs-tooltiptext { color: var(--light-slate); }
        .introjs-tooltip .introjs-button { background-color: var(--accent-cyan); color: var(--dark-blue); border: none; text-shadow: none; border-radius: 5px; font-weight: 600; }
        .introjs-tooltip .introjs-button:hover { background-color: #55e3c4; }
        .introjs-skipbutton { color: var(--slate) !important; }
        .introjs-helperLayer { box-shadow: 0 0 1px 2px rgba(100, 255, 218, 0.8), 0 0 0 1000em rgba(10, 25, 47, 0.7) !important; }
    </style>
</head>
<body>

    <div id="particles-container"></div>
    
    <div class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold animate-on-load">Tarif Transportasi</h1>
            <p class="lead animate-on-load mb-4">Gunakan model prediktif kami untuk mendapatkan estimasi tarif perjalanan Anda secara akurat dan transparan.</p>
            <a href="{{ url('/') }}" class="btn btn-outline-secondary animate-on-load" style="animation-delay: 0.2s;"><i class="fas fa-arrow-left me-2"></i>Kembali ke Dashboard</a>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="calculator-card animate-on-load" style="animation-delay: 0.4s;">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <h2 class="card-title mb-0">Mulai Prediksi Tarif</h2>
                        <button type="button" id="startTourButton" class="btn btn-sm btn-outline-secondary ms-3" style="font-size: 0.85rem; padding: 0.25rem 0.75rem;">
                            <i class="fas fa-question-circle me-1"></i> Mulai Tur
                        </button>
                    </div>
                    <form id="calculatorForm">
                         <div class="row g-3 align-items-end">
                            <div class="col-sm-5" data-step="1" data-intro="Langkah 1: Pilih kota asal atau kota yang akan dijadikan patokan (baseline) untuk perhitungan.">
                                <label for="daerahBaseline" class="form-label"><i class="fas fa-map-pin me-2"></i>Daerah Baseline</label>
                                <select class="form-select" id="daerahBaseline" required>
                                    <option selected disabled value="">Pilih daerah...</option>
                                    <option value="jakarta">Jakarta</option>
                                    <option value="bandung">Bandung</option>
                                    <option value="surabaya">Surabaya</option>
                                    <option value="medan">Medan</option>
                                    <option value="palembang">Palembang</option>
                                </select>
                            </div>
                            <div class="col-sm-2 text-center" data-step="3" data-intro="Gunakan tombol ini untuk menukar pilihan kota baseline dan tujuan dengan cepat.">
                                <button type="button" id="swapButton" class="btn btn-outline-secondary" title="Tukar Daerah"><i class="fas fa-exchange-alt"></i></button>
                            </div>
                            <div class="col-sm-5" data-step="2" data-intro="Langkah 2: Selanjutnya, pilih kota tujuan yang tarifnya ingin Anda prediksi.">
                                <label for="daerahHitung" class="form-label"><i class="fas fa-map-marked-alt me-2"></i>Daerah Tujuan</label>
                                <select class="form-select" id="daerahHitung" required>
                                    <option selected disabled value="">Pilih daerah...</option>
                                    <option value="jakarta">Jakarta</option>
                                    <option value="bandung">Bandung</option>
                                    <option value="yogyakarta">Yogyakarta</option>
                                    <option value="semarang">Semarang</option>
                                    <option value="surabaya">Surabaya</option>
                                    <option value="medan">Medan</option>
                                    <option value="palembang">Palembang</option>
                                </select>
                            </div>
                         </div>
                         <div class="row g-4 mt-1">
                            <div class="col-12"><hr class="my-3"></div>
                            <div class="col-md-6">
                                <label for="umr" class="form-label"><i class="fas fa-money-bill-wave me-2"></i>UMR</label>
                                <input type="text" class="form-control" id="umr" placeholder="Otomatis terisi" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="tingkatKemacetan" class="form-label"><i class="fas fa-traffic-light me-2"></i>Tingkat Kemacetan</label>
                                <input type="text" class="form-control" id="tingkatKemacetan" placeholder="Otomatis terisi" readonly>
                            </div>
                            <div class="col-md-6" data-step="4" data-intro="Langkah 3: Masukkan data ketersediaan layanan transportasi online di kota tujuan. Semakin tinggi nilainya, semakin banyak pilihan.">
                                <label for="ketersediaanTransportasi" class="form-label"><i class="fas fa-car-side me-2"></i>Ketersediaan Transportasi Online</label>
                                <input type="number" class="form-control" id="ketersediaanTransportasi" placeholder="Contoh: 85" required min="0" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                            <div class="col-md-6" data-step="5" data-intro="Langkah 4: Masukkan perkiraan jumlah kendaraan pribadi yang ada di kota tujuan.">
                                <label for="jumlahKendaraan" class="form-label"><i class="fas fa-car me-2"></i>Jumlah Kendaraan Pribadi</label>
                                <input type="number" class="form-control" id="jumlahKendaraan" placeholder="Contoh: 150000" required min="0" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                            <div class="col-12 text-center mt-4" data-step="6" data-title="Selesai!" data-intro="Langkah 5: Setelah semua terisi, tombol ini akan aktif. Klik untuk melihat hasil prediksinya!">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Harap isi semua kolom terlebih dahulu">
                                    <button type="submit" id="submitButton" class="btn btn-primary px-5 me-2" disabled>Hitung Tarif</button>
                                </span>
                                <button type="reset" class="btn btn-outline-secondary px-5">Reset</button>
                            </div>
                         </div>
                    </form>
                </div>
                <div class="result-section" id="hasilPrediksi">
                    </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4">
        <p>&copy; 2025 AppKu. All Rights Reserved.</p>
    </footer>
    
    <script src="https://unpkg.com/intro.js/minified/intro.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('calculatorForm');
            const hasilPrediksi = document.getElementById('hasilPrediksi');
            const submitButton = document.getElementById('submitButton');
            const requiredInputs = form.querySelectorAll('[required]');
            const tooltipTriggerEl = document.querySelector('[data-bs-toggle="tooltip"]');
            const tooltip = new bootstrap.Tooltip(tooltipTriggerEl);
            const daerahBaselineSelect = document.getElementById('daerahBaseline');
            const daerahHitungSelect = document.getElementById('daerahHitung');
            const swapButton = document.getElementById('swapButton');
            const startTourButton = document.getElementById('startTourButton');
            
            const defaultBg = 'https://i.ibb.co/6g2Xf5F/futuristic-city-transportation-network.jpg';
            const monasBg = "{{ asset('images/monas.jpg') }}";
            const gedungSateBg = "{{ asset('images/gedung-sate.jpg') }}";
            const surabayaBg = "{{ asset('images/surabaya.jpeg') }}";
            const medanBg = "{{ asset('images/medan.jpeg') }}";
            const palembangBg = "{{ asset('images/palembang.jpeg') }}";
            const mockResults = { /* ... data ... */ };
            let isFirstSelection = true;
            
            tsParticles.load("particles-container", {
                fpsLimit: 60,
                particles: {
                    number: { value: 50, density: { enable: true, value_area: 800 } },
                    color: { value: "#64ffda" },
                    shape: { type: "circle" },
                    opacity: { value: 0.4, random: true },
                    size: { value: 2, random: true },
                    links: { enable: true, distance: 150, color: "#8892b0", opacity: 0.3, width: 1 },
                    move: { enable: true, speed: 1, direction: "none", out_mode: "out" }
                },
                interactivity: {
                    events: { onhover: { enable: true, mode: "repulse" } },
                    modes: { repulse: { distance: 100, duration: 0.4 } }
                },
                detectRetina: true,
            });

            startTourButton.addEventListener('click', function() {
                introJs().setOptions({
                    nextLabel: 'Lanjut →',
                    prevLabel: '← Kembali',
                    doneLabel: 'Selesai',
                    exitOnOverlayClick: false,
                }).start();
            });

            function updateDropdownFilters() {
                const baselineValue = daerahBaselineSelect.value;
                const tujuanValue = daerahHitungSelect.value;
                for (const option of daerahHitungSelect.options) { option.style.display = (option.value === baselineValue && option.value) ? 'none' : 'block'; }
                for (const option of daerahBaselineSelect.options) { option.style.display = (option.value === tujuanValue && option.value) ? 'none' : 'block'; }
            }
            daerahBaselineSelect.addEventListener('change', function() {
                const selectedCity = this.value; let newBg = defaultBg;
                if (selectedCity === 'jakarta') newBg = monasBg; else if (selectedCity === 'bandung') newBg = gedungSateBg; else if (selectedCity === 'surabaya') newBg = surabayaBg; else if (selectedCity === 'medan') newBg = medanBg; else if (selectedCity === 'palembang') newBg = palembangBg;
                document.body.style.backgroundImage = `url('${newBg}')`;
                if (isFirstSelection) { document.body.classList.add('background-changing'); isFirstSelection = false; setTimeout(() => { document.body.classList.remove('background-changing'); }, 800); }
                updateDropdownFilters(); validateForm();
            });
            daerahHitungSelect.addEventListener('change', function() { updateDropdownFilters(); validateForm(); });
            swapButton.addEventListener('click', function() {
                const baselineValue = daerahBaselineSelect.value; const tujuanValue = daerahHitungSelect.value;
                if (baselineValue && tujuanValue) { daerahBaselineSelect.value = tujuanValue; daerahHitungSelect.value = baselineValue; daerahBaselineSelect.dispatchEvent(new Event('change')); }
            });
            function validateForm() {
                let allFilled = true;
                requiredInputs.forEach(input => { if (!input.value || input.value === "") { allFilled = false; } });
                submitButton.disabled = !allFilled;
                if(allFilled) { tooltip.disable(); } else { tooltip.enable(); }
            }
            requiredInputs.forEach(input => { input.addEventListener('input', validateForm); });
            form.addEventListener('submit', function(event) {
                event.preventDefault(); 
            });
            form.addEventListener('reset', function() {
                hasilPrediksi.classList.remove('show'); setTimeout(validateForm, 0); document.body.style.backgroundImage = `url('${defaultBg}')`; isFirstSelection = true;
                for (const option of daerahHitungSelect.options) { option.style.display = 'block'; }
                for (const option of daerahBaselineSelect.options) { option.style.display = 'block'; }
            });
        });
    </script>
</body>
</html>