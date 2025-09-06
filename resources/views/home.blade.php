<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        accent: '#F59E0B'
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans">
    <!-- Desktop Navigation -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50 lg:block hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold text-primary">HR<span class="text-secondary">Pro</span></h1>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#home" class="nav-link text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Beranda</a>
                        <a href="#features" class="nav-link text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Fitur</a>
                        <a href="#about" class="nav-link text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Tentang</a>
                        <a href="#contact" class="nav-link text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Kontak</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                        <i class="fas fa-user mr-2"></i>Profile
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Header -->
    <header class="bg-white shadow-lg fixed w-full top-0 z-50 lg:hidden">
        <div class="px-4 py-3">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-bold text-primary">HR<span class="text-secondary">Pro</span></h1>
                <button class="bg-primary text-white p-2 rounded-lg">
                    <i class="fas fa-user"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-16 lg:pt-16 pb-20 lg:pb-8">
        <!-- Hero Section -->
        <section id="home" class="section-content min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-12 flex items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                        Solusi HR Management
                        <span class="text-primary">Terdepan</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto">
                        Kelola sumber daya manusia perusahaan Anda dengan mudah, efisien, dan modern. 
                        Tingkatkan produktivitas tim dengan sistem HR yang terintegrasi.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a class="bg-primary text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-secondary transition-colors shadow-lg" href="{{url('admin/login')}}">
                            Mulai Gratis
                        </a>
                        <button class="border-2 border-primary text-primary px-8 py-4 rounded-lg text-lg font-semibold hover:bg-primary hover:text-white transition-colors">
                            Lihat Demo
                        </button>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                    <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                        <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-primary text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Manajemen Karyawan</h3>
                        <p class="text-gray-600">Kelola data karyawan, struktur organisasi, dan informasi personal dengan mudah</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                        <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-calendar-alt text-green-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Pengajuan Cuti</h3>
                        <p class="text-gray-600">Sistem pengajuan cuti yang mudah dengan approval workflow yang efisien</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-8 text-center hover:shadow-xl transition-shadow">
                        <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-shield-alt text-purple-600 text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Role Permission</h3>
                        <p class="text-gray-600">Atur hak akses dan permission setiap user sesuai dengan role dan tanggung jawab</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="section-content min-h-screen bg-white py-12 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Fitur Unggulan</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Solusi lengkap untuk mengelola sumber daya manusia dengan teknologi terdepan
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8 hover:shadow-lg transition-shadow">
                        <div class="bg-primary text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Manajemen Karyawan</h3>
                        <p class="text-gray-600 mb-4">Kelola profil karyawan, struktur organisasi, dan data personal dengan sistem yang terintegrasi.</p>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Database karyawan lengkap</li>
                            <li>• Struktur organisasi visual</li>
                            <li>• Riwayat karir dan promosi</li>
                            <li>• Informasi personal karyawan</li>
                        </ul>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-8 hover:shadow-lg transition-shadow">
                        <div class="bg-green-600 text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-calendar-alt text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Pengajuan Cuti</h3>
                        <p class="text-gray-600 mb-4">Sistem pengajuan dan persetujuan cuti yang efisien dengan workflow yang dapat dikustomisasi.</p>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Pengajuan cuti online</li>
                            <li>• Approval workflow</li>
                            <li>• Kalender cuti tim</li>
                            <li>• Notifikasi otomatis</li>
                        </ul>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-8 hover:shadow-lg transition-shadow">
                        <div class="bg-purple-600 text-white w-12 h-12 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-shield-alt text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Role Permission</h3>
                        <p class="text-gray-600 mb-4">Atur hak akses dan permission setiap user sesuai dengan role dan tanggung jawab mereka.</p>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Role-based access control</li>
                            <li>• Custom permission settings</li>
                            <li>• User group management</li>
                            <li>• Security audit trail</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="section-content min-h-screen bg-gray-50 py-12 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">Tentang HRPro</h2>
                        <p class="text-lg text-gray-600 mb-6">
                            HRPro adalah platform HR Management terdepan yang dirancang khusus untuk perusahaan modern. 
                            Dengan teknologi cloud dan AI, kami membantu ribuan perusahaan mengelola SDM mereka dengan lebih efisien.
                        </p>
                        <p class="text-lg text-gray-600 mb-8">
                            Sejak 2020, kami telah melayani lebih dari 1000+ perusahaan di Indonesia dengan solusi HR yang 
                            komprehensif dan mudah digunakan.
                        </p>
                        
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-primary mb-2">1000+</div>
                                <p class="text-gray-600">Perusahaan Terdaftar</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-primary mb-2">50K+</div>
                                <p class="text-gray-600">Karyawan Aktif</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-primary mb-2">99.9%</div>
                                <p class="text-gray-600">Uptime Guarantee</p>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-primary mb-2">24/7</div>
                                <p class="text-gray-600">Customer Support</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Mengapa Memilih HRPro?</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div class="bg-green-100 text-green-600 w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Mudah Digunakan</h4>
                                    <p class="text-gray-600">Interface yang intuitif dan user-friendly untuk semua level pengguna</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="bg-green-100 text-green-600 w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Scalable Solution</h4>
                                    <p class="text-gray-600">Dapat berkembang seiring pertumbuhan perusahaan Anda</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="bg-green-100 text-green-600 w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Local Support</h4>
                                    <p class="text-gray-600">Tim support lokal yang memahami kebutuhan bisnis Indonesia</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-3">
                                <div class="bg-green-100 text-green-600 w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <i class="fas fa-check text-sm"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Affordable Pricing</h4>
                                    <p class="text-gray-600">Harga yang kompetitif dengan ROI yang terbukti</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="section-content min-h-screen bg-white py-12 hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Hubungi Kami</h2>
                    <p class="text-xl text-gray-600">Siap memulai transformasi HR perusahaan Anda? Tim kami siap membantu!</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <div>
                        <div class="bg-gradient-to-br from-primary to-secondary rounded-xl p-8 text-white mb-8">
                            <h3 class="text-2xl font-semibold mb-6">Dapatkan Demo Gratis</h3>
                            <p class="mb-6">Jadwalkan demo personal dengan tim ahli kami dan lihat bagaimana HRPro dapat mengoptimalkan proses HR perusahaan Anda.</p>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-phone text-xl"></i>
                                    <span>+62 21 1234 5678</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-envelope text-xl"></i>
                                    <span>info@hrpro.co.id</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                    <span>Jakarta, Indonesia</span>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="bg-gray-50 rounded-lg p-6 text-center">
                                <div class="bg-primary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-2">Quick Setup</h4>
                                <p class="text-sm text-gray-600">Implementasi dalam 24 jam</p>
                            </div>
                            
                            <div class="bg-gray-50 rounded-lg p-6 text-center">
                                <div class="bg-green-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-2">24/7 Support</h4>
                                <p class="text-sm text-gray-600">Bantuan kapan saja</p>
                            </div>
                            
                            <div class="bg-gray-50 rounded-lg p-6 text-center">
                                <div class="bg-purple-600 text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <i class="fas fa-graduation-cap"></i>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-2">Free Training</h4>
                                <p class="text-sm text-gray-600">Pelatihan gratis untuk tim</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-xl p-8">
                        <h3 class="text-2xl font-semibold text-gray-900 mb-6">Kirim Pesan</h3>
                        <form class="space-y-6">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Masukkan nama lengkap">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                    <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="nama@perusahaan.com">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Perusahaan</label>
                                    <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Nama perusahaan">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nomor Telepon</label>
                                    <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="+62 812 3456 7890">
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Jumlah Karyawan</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                                    <option>Pilih jumlah karyawan</option>
                                    <option>1-10 karyawan</option>
                                    <option>11-50 karyawan</option>
                                    <option>51-200 karyawan</option>
                                    <option>200+ karyawan</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                                <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" placeholder="Ceritakan kebutuhan HR perusahaan Anda..."></textarea>
                            </div>
                            
                            <button type="submit" class="w-full bg-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-secondary transition-colors">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Mobile Bottom Navigation -->
    <nav class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 lg:hidden z-50">
        <div class="grid grid-cols-4 h-16">
            <button class="mobile-nav-btn flex flex-col items-center justify-center space-y-1 text-primary" data-section="home">
                <i class="fas fa-home text-lg"></i>
                <span class="text-xs font-medium">Beranda</span>
            </button>
            <button class="mobile-nav-btn flex flex-col items-center justify-center space-y-1 text-gray-400" data-section="features">
                <i class="fas fa-star text-lg"></i>
                <span class="text-xs font-medium">Fitur</span>
            </button>
            <button class="mobile-nav-btn flex flex-col items-center justify-center space-y-1 text-gray-400" data-section="about">
                <i class="fas fa-info-circle text-lg"></i>
                <span class="text-xs font-medium">Tentang</span>
            </button>
            <button class="mobile-nav-btn flex flex-col items-center justify-center space-y-1 text-gray-400" data-section="contact">
                <i class="fas fa-envelope text-lg"></i>
                <span class="text-xs font-medium">Kontak</span>
            </button>
        </div>
    </nav>

    <script>


        // Navigation functionality
        function showSection(sectionId) {
            // Hide all sections
            document.querySelectorAll('.section-content').forEach(section => {
                section.classList.add('hidden');
            });
            
            // Show selected section
            document.getElementById(sectionId).classList.remove('hidden');
            
            // Update desktop nav active state
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('text-primary', 'font-semibold');
                link.classList.add('text-gray-700');
            });
            
            const activeDesktopLink = document.querySelector(`a[href="#${sectionId}"]`);
            if (activeDesktopLink) {
                activeDesktopLink.classList.remove('text-gray-700');
                activeDesktopLink.classList.add('text-primary', 'font-semibold');
            }
            
            // Update mobile nav active state
            document.querySelectorAll('.mobile-nav-btn').forEach(btn => {
                btn.classList.remove('text-primary');
                btn.classList.add('text-gray-400');
            });
            
            const activeMobileBtn = document.querySelector(`[data-section="${sectionId}"]`);
            if (activeMobileBtn) {
                activeMobileBtn.classList.remove('text-gray-400');
                activeMobileBtn.classList.add('text-primary');
            }
        }

        // Desktop navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const sectionId = link.getAttribute('href').substring(1);
                showSection(sectionId);
            });
        });

        // Mobile navigation
        document.querySelectorAll('.mobile-nav-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const sectionId = btn.getAttribute('data-section');
                showSection(sectionId);
            });
        });

        // Initialize with home section
        showSection('home');
    </script>
</body>
</html>
