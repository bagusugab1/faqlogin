<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Kementerian Komunikasi dan Informatika</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Trykker&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">
                        <img src="assets/navbar-logo.jpeg" alt="diskominfotik-logo">
                    </div>
                    <div class="logo-text">
                        <h1>DISKOMINFOTIK</h1>
                        <p>Cari Tahu Seputar <span>DISKOMINFOTIK </span></p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Tanya DISKOMINFOTIK Aja?</h2>
            <p>Yuk, temukan info seputar layanan digital dan program Dinas Kominfo dengan cara yang gampang dan cepat.
            </p>
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Cari pertanyaan atau kata kunci..."
                    id="searchInput">
                <button class="search-btn" onclick="searchFAQ()">🔍</button>
            </div>
        </div>
    </section>
    <main class="main-content">
        <div class="container">
            <div class="content-header">
                <h3>Frequently Asked Questions</h3>
                <p>Pertanyaan yang Sering Diajukan</p>
            </div>

            <div class="categories">
                @foreach($faq->groupBy('bidang.nama_bidang') as $bidangNama => $faqsByBidang)
                    <div class="category-card">
                        <div class="category-header">
                            <div class="category-title">Bidang {{ $bidangNama }}</div>
                        </div>
                        <div class="deskripsi-container">
                            <div class="info-deskripsi">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos earum, tempora reiciendis,
                                    ea tenetur culpa minus iste, nisi voluptatum hic aliquam. Magnam qui quis minus atque
                                    sit, nisi fugit sint.
                                    At quod pariatur maxime quaerat ratione, eum nihil dolore cum molestiae, nisi,
                                    temporibus minus. Labore voluptatem quos voluptatibus quidem recusandae aliquam,
                                    quisquam eum! Earum ipsam voluptatibus quia hic quisquam. Odit.</p>
                            </div>
                            <img src="assets/logo.png" alt="Deskripsi Gambar" class="info-image">
                        </div>
                        @foreach($faqsByBidang->groupBy('layanan.nama_layanan') as $layananNama => $faqList)
                            <div class="subcategory-header" style="margin: 10px 0 5px 10px; font-weight:bold;">
                                Layanan {{ $layananNama ?? 'Layanan Tidak Diketahui' }}
                            </div>
                            <ul class="faq-list">
                                @foreach($faqList as $faq)
                                    <li class="faq-item">
                                        <div class="faq-question" onclick="toggleFAQ(this)">
                                            <span>{{ $faq->question }}</span>
                                            <span class="arrow">▼</span>
                                        </div>
                                        <div class="faq-answer">
                                            {{ $faq->answer }}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                @endforeach

            </div>
        </div>
    </main>
    <section class="contact-section">
        <div class="container">
            <h3>Butuh Bantuan Lebih Lanjut?</h3>
            <p>Tim customer service kami siap membantu Anda</p>
            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">📞</div>
                    <h4>Halo Kominfo</h4>
                    <p>(0342) 801734</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">✉️</div>
                    <h4>Email Support</h4>
                    <p>diskominfo@blitarkota.go.id</p>
                    <p>Respon dalam 1x24 jam</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">💬</div>
                    <a href="http://diskominfotik.blitarkota.go.id/">
                        <h4>Website Resmi Kominfo</h4>
                    </a>
                    <p>Jam Kerja Dinas Komunikasi dan Informatika Kota Blitar </p>
                    <p>Senin - Jumat, 08:00-15:30</p>
                </div>
            </div>
        </div>
    </section>
    <div class="form-container">
        <div class="form-header">
            <h1>Form Pengajuan & Saran</h1>
            <p>Silakan isi formulir di bawah ini untuk mengirimkan pengajuan atau saran Anda</p>
        </div>

        <form id="suggestionForm">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap Anda">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="contoh@email.com">
            </div>

            <div class="form-group">
                <label for="saran">Pengajuan/Saran</label>
                <textarea id="saran" name="saran" required
                    placeholder="Tuliskan pengajuan atau saran Anda di sini..."></textarea>
            </div>

            <button type="submit" class="submit-btn">Kirim Pengajuan</button>
        </form>

        <div id="successMessage" class="success-message">
            Terima kasih! Pengajuan Anda telah berhasil dikirim.
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Kementerian Komunikasi dan Informatika Republik Indonesia. Semua hak dilindungi.</p>
        </div>
    </footer>

    <script>
        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            const arrow = element.querySelector('.arrow');

            // Close all other open FAQ items
            document.querySelectorAll('.faq-answer.active').forEach(item => {
                if (item !== answer) {
                    item.classList.remove('active');
                    item.previousElementSibling.querySelector('.arrow').classList.remove('rotated');
                }
            });

            // Toggle current FAQ item
            answer.classList.toggle('active');
            arrow.classList.toggle('rotated');
        }

        function searchFAQ() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase().trim();
            const faqItems = document.querySelectorAll('.faq-item');
            let found = false;

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question span').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';

                    if (!found && searchTerm) {
                        const faqAnswer = item.querySelector('.faq-answer');
                        const arrow = item.querySelector('.arrow');
                        faqAnswer.classList.add('active');
                        arrow.classList.add('rotated');
                        found = true;

                        // Scroll to first result
                        item.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                } else {
                    item.style.display = searchTerm ? 'none' : 'block';
                }
            });

            if (searchTerm && !found) {
                alert('Tidak ditemukan hasil yang sesuai dengan pencarian Anda.');
            }
        }

        // Pencarian saat Enter ditekan
        document.getElementById('searchInput').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                searchFAQ();
            }
        });

        // Reset pencarian jika input dikosongkan
        document.getElementById('searchInput').addEventListener('input', function (e) {
            if (e.target.value === '') {
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.style.display = 'block';
                });
                document.querySelectorAll('.faq-answer.active').forEach(item => {
                    item.classList.remove('active');
                    item.previousElementSibling.querySelector('.arrow').classList.remove('rotated');
                });
            }
        });

        // Add smooth scrolling for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>