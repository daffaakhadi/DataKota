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
        
        /* [BARU] Class sementara untuk memicu animasi zoom */
        body.background-changing {
            animation: backgroundZoom 0.8s ease-in-out forwards;
        }

        /* [BARU] Keyframes untuk animasi zoom-in pada background */
        @keyframes backgroundZoom {
            from {
                background-size: 110% auto;
            }
            to {
                background-size: 100% auto;
            }
        }
        
        /* Sisa CSS lainnya tetap sama */
        .hero-section { padding: 100px 0; background: linear-gradient(rgba(10, 25, 47, 0.9), rgba(10, 25, 47, 0.9)); text-align: center; }
        .hero-section .lead { color: var(--slate); max-width: 600px; margin: 1rem auto 0; }
        .hero-section .display-4 { color: var(--light-slate); }
        .calculator-card { background: rgba(23, 42, 69, 0.85); border-radius: 15px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2); backdrop-filter: blur(10px); border: 1px solid rgba(100, 255, 218, 0.2); transition: box-shadow 0.3s ease; }
        .calculator-card:hover { box-shadow: 0 0 25px rgba(100, 255, 218, 0.1); }
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
        .result-section { background-color: var(--dark-blue); border: 1px solid var(--accent-cyan); border-radius: 15px; padding: 2rem; margin-top: 2rem; opacity: 0; transform: scale(0.95) translateY(10px); transition: opacity 0.4s ease-out, transform 0.4s ease-out; display: none; }
        .result-section.show { opacity: 1; transform: scale(1) translateY(0); display: block; }
        .result-title { font-weight: 500; color: var(--slate); }
        .result-value { font-size: 2.5rem; font-weight: 700; color: var(--accent-cyan); }
        .modal-content { background: var(--light-blue); backdrop-filter: blur(10px); border: 1px solid rgba(100, 255, 218, 0.2); border-radius: 15px; color: var(--light-slate); }
        .modal-header, .modal-footer { border: none; }
        .btn-close { filter: invert(1) grayscale(100%) brightness(200%); }
        hr { border-color: rgba(136, 146, 176, 0.3); }
        footer { background: linear-gradient(rgba(10, 25, 47, 0.85), rgba(10, 25, 47, 0.85)); color: var(--slate); }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .animate-on-load { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
        .hero-section p.animate-on-load { animation-delay: 0.2s; }
        .calculator-card.animate-on-load { animation-delay: 0.4s; }
    </style>
</head>
<body>

    <div class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold animate-on-load">Tarif Transportasi</h1>
            <p class="lead animate-on-load">Gunakan model prediktif kami untuk mendapatkan estimasi tarif perjalanan Anda secara akurat dan transparan.</p>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="calculator-card animate-on-load">
                    <h2 class="text-center mb-4 card-title">Mulai Prediksi Tarif</h2>
                    <form id="calculatorForm">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="daerahBaseline" class="form-label"><i class="fas fa-map-pin me-2"></i>Daerah Baseline</label>
                                <select class="form-select" id="daerahBaseline" required>
                                    <option selected disabled value="">Pilih daerah...</option>
                                    <option value="jakarta">Jakarta</option>
                                    <option value="bandung">Bandung</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="daerahHitung" class="form-label"><i class="fas fa-map-marked-alt me-2"></i>Daerah Tujuan</label>
                                <select class="form-select" id="daerahHitung" required>
                                    <option selected disabled value="">Pilih daerah...</option>
                                    <option value="bandung">Bandung</option>
                                    <option value="yogyakarta">Yogyakarta</option>
                                    <option value="semarang">Semarang</option>
                                </select>
                            </div>
                            <div class="col-12"><hr class="my-3"></div>
                            <div class="col-md-6">
                                <label for="umr" class="form-label"><i class="fas fa-money-bill-wave me-2"></i>UMR</label>
                                <input type="text" class="form-control" id="umr" placeholder="Otomatis terisi" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="tingkatKemacetan" class="form-label"><i class="fas fa-traffic-light me-2"></i>Tingkat Kemacetan</label>
                                <input type="text" class="form-control" id="tingkatKemacetan" placeholder="Otomatis terisi" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="ketersediaanTransportasi" class="form-label"><i class="fas fa-car-side me-2"></i>Ketersediaan Transportasi Online</label>
                                <input type="number" class="form-control" id="ketersediaanTransportasi" placeholder="Contoh: 85" required>
                            </div>
                            <div class="col-md-6">
                                <label for="jumlahKendaraan" class="form-label"><i class="fas fa-car me-2"></i>Jumlah Kendaraan Pribadi</label>
                                <input type="number" class="form-control" id="jumlahKendaraan" placeholder="Contoh: 150000" required>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Harap isi semua kolom terlebih dahulu">
                                    <button type="submit" id="submitButton" class="btn btn-primary px-5 me-2" disabled>Hitung Tarif</button>
                                </span>
                                <button type="reset" class="btn btn-outline-secondary px-5">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="result-section text-center" id="hasilPrediksi">
                    <p class="result-title">Hasil Prediksi Tarif</p>
                    <p class="result-value">Rp 15.500</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4">
        <p>&copy; 2025 AppKu. All Rights Reserved.</p>
    </footer>

    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="welcomeModalLabel">Selamat Datang!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Selamat datang di Aplikasi Hitung Tarif Transportasi.</p>
                    <p class="mb-0">Silakan pilih daerah baseline dan daerah yang ingin dihitung, lalu isi data yang diperlukan untuk melihat estimasi tarif.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mengerti</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        const form = document.getElementById('calculatorForm');
        const hasilPrediksi = document.getElementById('hasilPrediksi');
        const welcomeModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
        const submitButton = document.getElementById('submitButton');
        const requiredInputs = form.querySelectorAll('[required]');
        const tooltipTriggerEl = document.querySelector('[data-bs-toggle="tooltip"]');
        const tooltip = new bootstrap.Tooltip(tooltipTriggerEl);
        
        const daerahBaselineSelect = document.getElementById('daerahBaseline');
        const defaultBg = 'https://i.ibb.co/6g2Xf5F/futuristic-city-transportation-network.jpg';
        const monasBg = "{{ asset('images/monas.jpg') }}";
        const gedungSateBg = "{{ asset('images/gedung-sate.jpg') }}";

       
        let isFirstSelection = true;

        daerahBaselineSelect.addEventListener('change', function() {
            const selectedCity = this.value;
            let newBg = defaultBg;

            if (selectedCity === 'jakarta') {
                newBg = monasBg;
            } else if (selectedCity === 'bandung') {
                newBg = gedungSateBg;
            }
            
           
            document.body.style.backgroundImage = `url('${newBg}')`;

            if (isFirstSelection) {
                document.body.classList.add('background-changing');
                isFirstSelection = false;

            
                setTimeout(() => {
                    document.body.classList.remove('background-changing');
                }, 800); 
            }
        });

        function validateForm() {
            let allFilled = true;
            requiredInputs.forEach(input => {
                if (!input.value) { allFilled = false; }
            });
            submitButton.disabled = !allFilled;
            if(allFilled) { tooltip.disable(); } else { tooltip.enable(); }
        }

        requiredInputs.forEach(input => {
            input.addEventListener('input', validateForm);
        });

        document.addEventListener('DOMContentLoaded', () => {
            welcomeModal.show();
        });

        form.addEventListener('submit', function(event) {
            event.preventDefault(); 
            hasilPrediksi.classList.add('show'); 
        });

        form.addEventListener('reset', function() {
            hasilPrediksi.classList.remove('show');
            setTimeout(validateForm, 0);
            document.body.style.backgroundImage = `url('${defaultBg}')`;
            
            isFirstSelection = true;
        });
    </script>
</body>
</html>