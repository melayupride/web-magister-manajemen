<style>
    /* Modern CSS for stats counter with enhanced animations */
    .stats-counter {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 80px 0;
        position: relative;
        overflow: hidden;
        font-family: 'Poppins', sans-serif;
    }
    
    .stats-counter::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="rgba(0, 131, 116, 0.05)"><path d="M30,30 Q50,10 70,30 T90,50 Q70,70 50,90 T10,50 Q30,30 50,10 Z"/></svg>');
        background-size: 120px 120px;
        opacity: 0.4;
    }
    
    .stats-counter .img-container {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        transform-style: preserve-3d;
        perspective: 1000px;
    }
    
    .stats-counter .img-fluid {
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        border: none;
        border-radius: 12px;
    }
    
    .stats-counter .img-container:hover .img-fluid {
        transform: scale(1.05) translateZ(20px);
        box-shadow: 0 30px 60px -10px rgba(0, 0, 0, 0.2);
    }
    
    .stats-counter .img-container::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0, 131, 116, 0.3) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 12px;
    }
    
    .stats-counter .img-container:hover::after {
        opacity: 1;
    }
    
    .stats-item {
        background: white;
        transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        position: relative;
        overflow: hidden;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
        padding: 20px 15px;
        z-index: 1;
    }
    
    .stats-item::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 131, 116, 0.1) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }
    
    .stats-item:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
    }
    
    .stats-item:hover::before {
        opacity: 1;
    }
    
    .stats-item h6 {
        position: relative;
        padding-bottom: 10px;
        color: #555;
        font-weight: 500;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
    }
    
    .stats-item h6::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 40px;
        height: 3px;
        background: #008374;
        border-radius: 3px;
        transition: all 0.3s ease;
    }
    
    .stats-item:hover h6::after {
        width: 60px;
        background: #00a792;
    }
    
    .stats-item .fw-bold {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        color: #333;
        font-size: 1.8rem;
    }
    
    .total-stats {
        background: linear-gradient(135deg, #008374 0%, #00a792 100%) !important;
        color: white;
        box-shadow: 0 10px 15px -3px rgba(0, 131, 116, 0.3) !important;
    }
    
    .total-stats h6 {
        color: rgba(255, 255, 255, 0.9) !important;
    }
    
    .total-stats h6::after {
        background: rgba(255, 255, 255, 0.7);
    }
    
    .total-stats .fw-bold {
        color: white !important;
        font-size: 2rem;
    }
    
    /* Floating animation */
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
    
    /* Counting animation */
    .count-animate {
        display: inline-block;
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    
    .counting {
        animation: pulse 0.4s ease-in-out;
    }
    
    /* Section title styling */
    .section-title {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 25px;
    }
    
    .section-title::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #008374, #00a792);
        border-radius: 2px;
    }
    
    /* Button styling */
    .btn-register {
        background: linear-gradient(135deg, #008374 0%, #00a792 100%);
        border: none;
        padding: 12px 30px;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0, 131, 116, 0.3);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .btn-register:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 131, 116, 0.4);
    }
    
    .btn-register::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #00a792 0%, #008374 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .btn-register:hover::after {
        opacity: 1;
    }
    
    .btn-register span {
        position: relative;
        z-index: 1;
    }
    
    /* Floating circles decoration */
    .floating-circles {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: hidden;
        z-index: 0;
    }
    
    .circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(0, 131, 116, 0.05);
        animation: float 15s infinite ease-in-out;
    }
    
    .circle:nth-child(1) {
        width: 100px;
        height: 100px;
        top: 10%;
        left: 5%;
        animation-delay: 0s;
    }
    
    .circle:nth-child(2) {
        width: 150px;
        height: 150px;
        top: 70%;
        left: 80%;
        animation-delay: 2s;
        animation-duration: 20s;
    }
    
    .circle:nth-child(3) {
        width: 70px;
        height: 70px;
        top: 30%;
        left: 85%;
        animation-delay: 4s;
        animation-duration: 18s;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .stats-counter {
            padding: 50px 0;
        }
        
        .stats-item {
            padding: 15px 10px;
        }
        
        .stats-item .fw-bold {
            font-size: 1.5rem;
        }
        
        .total-stats .fw-bold {
            font-size: 1.7rem;
        }
    }
</style>

<section id="stats-counter" class="stats-counter">
    <div class="floating-circles">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6">
                <div class="img-container">
                    <img src="/img/iklan.jpg" alt="Miti" class="img-fluid rounded">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <div class="section-title">
                        <h3 class="fw-bold text-success mb-3">
                            Penerimaan Mahasiswa Baru <br>Program Magister Ilmu Manajemen
                        </h3>
                    </div>

                    <h5 class="mt-2 text-muted">
                        Tahun Akademik
                        <span class="text-dark fw-bold">
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            /
                            <script>
                                let currentYear = new Date().getFullYear();
                                let nextYear = currentYear + 1;
                                document.write(nextYear);
                            </script>
                        </span>
                    </h5>

                    <p class="text-center mt-3 mb-4 text-muted">
                        Program Magister Ilmu Manjemen (PMIM) Fakultas Ekonomi dan Bisnis Universitas Malikussaleh
                    </p>
                    <a href="https://pendaftaran.unimal.ac.id/" target="_blank"
                        class="btn btn-register text-white fw-semibold">
                        <span>Daftar Sekarang</span>
                    </a>
                    
                    {{-- menampilkan rekaman pengunjung --}}
                    <div class="row mt-5">
                        <div class="col-6 col-md-3 mb-4">
                            <div class="stats-item text-center p-3 rounded">
                                <h6 class="text-muted">Hari Ini</h6>
                                <span id="today-count" class="fw-bold text-success count-animate">0</span>
                            </div>
                        </div>
                        
                        <div class="col-6 col-md-3 mb-4">
                            <div class="stats-item text-center p-3 rounded">
                                <h6 class="text-muted">Minggu Ini</h6>
                                <span id="week-count" class="fw-bold text-success count-animate">0</span>
                            </div>
                        </div>
                        
                        <div class="col-6 col-md-3 mb-4">
                            <div class="stats-item text-center p-3 rounded">
                                <h6 class="text-muted">Bulan Ini</h6>
                                <span id="month-count" class="fw-bold text-success count-animate">0</span>
                            </div>
                        </div>
                        
                        <div class="col-6 col-md-3 mb-4">
                            <div class="stats-item text-center p-3 rounded">
                                <h6 class="text-muted">Tahun Ini</h6>
                                <span id="year-count" class="fw-bold text-success count-animate">0</span>
                            </div>
                        </div>
                        
                        <div class="col-12 mt-2">
                            <div class="stats-item text-center p-3 rounded total-stats">
                                <h6 class="text-white">Total Kunjungan</h6>
                                <span id="total-count" class="fw-bold count-animate">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the actual values from your PHP variables
        const today = {{ $visitorStats['today'] }};
        const week = {{ $visitorStats['week'] }};
        const month = {{ $visitorStats['month'] }};
        const year = {{ $visitorStats['year'] }};
        const total = {{ $visitorStats['total'] }};
        
        // Animation duration in milliseconds
        const duration = 1800;
        
        // Easing function for smooth animation
        function easeOutQuart(t) {
            return 1 - Math.pow(1 - t, 4);
        }
        
        // Function to animate counting with improved easing
        function animateValue(id, start, end, duration) {
            const obj = document.getElementById(id);
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const easedProgress = easeOutQuart(progress);
                const value = Math.floor(easedProgress * (end - start) + start);
                obj.innerHTML = value.toLocaleString();
                
                // Add animation class only at certain intervals for better performance
                if (progress % 0.1 < 0.02) {
                    obj.classList.add('counting');
                    setTimeout(() => {
                        obj.classList.remove('counting');
                    }, 300);
                }
                
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }
        
        // Start animations with staggered delays for a wave effect
        setTimeout(() => animateValue('today-count', 0, today, duration), 200);
        setTimeout(() => animateValue('week-count', 0, week, duration), 400);
        setTimeout(() => animateValue('month-count', 0, month, duration), 600);
        setTimeout(() => animateValue('year-count', 0, year, duration), 800);
        setTimeout(() => animateValue('total-count', 0, total, duration + 400), 1000);
        
        // Add hover effects to all stats items
        const statsItems = document.querySelectorAll('.stats-item');
        statsItems.forEach(item => {
            item.addEventListener('mouseenter', () => {
                item.style.transform = 'translateY(-8px) scale(1.02)';
            });
            item.addEventListener('mouseleave', () => {
                item.style.transform = '';
            });
        });
    });
</script>