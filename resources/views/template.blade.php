<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Kementerian Komunikasi dan Informatika</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <div class="logo-icon">
                        <img src="assets/logo.png" alt="">
                    </div>
                    <div class="logo-text">
                        <h1>Kominfo</h1>
                        <p>Pusat Bantuan & FAQ</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Pusat Bantuan Kominfo</h2>
            <p>Temukan jawaban atas pertanyaan Anda tentang layanan digital, regulasi telekomunikasi, dan program
                Kementerian Komunikasi dan Informatika</p>
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
                <div class="category-card">
                    <div class="category-header">
                        <div class="category-icon">📱</div>
                        <div class="category-title">Layanan Digital</div>
                    </div>
                    <ul class="faq-list">
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara mendaftar layanan e-Government?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Untuk mendaftar layanan e-Government, kunjungi portal resmi layanan digital pemerintah.
                                Siapkan dokumen identitas yang valid dan ikuti panduan registrasi yang tersedia.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Apa itu transformasi digital nasional?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Transformasi digital nasional adalah program pemerintah untuk mempercepat digitalisasi
                                layanan publik dan menciptakan ekosistem digital yang terintegrasi di seluruh Indonesia.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara melaporkan konten negatif di internet?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Anda dapat melaporkan konten negatif melalui portal aduankonten.id atau menghubungi
                                layanan pengaduan Kominfo melalui berbagai kanal yang tersedia.
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="category-card">
                    <div class="category-header">
                        <div class="category-icon">📡</div>
                        <div class="category-title">Sekertariat</div>
                    </div>
                    <ul class="faq-list">
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara mengadu masalah sinyal operator?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Hubungi customer service operator terlebih dahulu. Jika tidak terselesaikan, Anda dapat
                                mengadu ke Kominfo melalui layanan pengaduan konsumen telekomunikasi.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara mengadu masalah sinyal operator?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Hubungi customer service operator terlebih dahulu. Jika tidak terselesaikan, Anda dapat
                                mengadu ke Kominfo melalui layanan pengaduan konsumen telekomunikasi.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Apa persyaratan untuk mendirikan BTS?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Pembangunan BTS memerlukan izin dari Kominfo dan harus memenuhi persyaratan teknis,
                                lingkungan, dan administratif sesuai regulasi yang berlaku.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara registrasi kartu prabayar?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Registrasi kartu prabayar wajib menggunakan NIK dan KK yang valid. Kunjungi gerai
                                operator atau gunakan aplikasi resmi untuk melakukan registrasi.
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="category-card">
                    <div class="category-header">
                        <div class="category-icon">🏢</div>
                        <div class="category-title">Regulasi & Kebijakan</div>
                    </div>
                    <ul class="faq-list">
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Apa itu UU ITE dan bagaimana implementasinya?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                UU ITE adalah regulasi yang mengatur transaksi elektronik dan pencegahan kejahatan
                                siber. Implementasinya meliputi perlindungan data pribadi dan tindakan terhadap konten
                                ilegal.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana prosedur perizinan usaha telekomunikasi?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Perizinan usaha telekomunikasi dapat diajukan melalui sistem OSS (Online Single
                                Submission) dengan melengkapi dokumen persyaratan yang ditetapkan.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Apa sanksi pelanggaran regulasi komunikasi?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Sanksi dapat berupa teguran, denda administratif, pembekuan izin, hingga pencabutan izin
                                tergantung jenis dan tingkat pelanggaran yang dilakukan.
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="category-card">
                    <div class="category-header">
                        <div class="category-icon">💬</div>
                        <div class="category-title">Layanan Publik</div>
                    </div>
                    <ul class="faq-list">
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara mengakses layanan Halo Kominfo?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Layanan Halo Kominfo dapat diakses melalui telepon di nomor 159, website resmi, atau
                                aplikasi mobile yang tersedia di Play Store dan App Store.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Apa saja program literasi digital Kominfo?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Program literasi digital meliputi pelatihan digital skill, sertifikasi kompetensi
                                digital, dan kampanye penggunaan internet yang bijak dan produktif.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara mendapatkan informasi tender proyek Kominfo?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Informasi tender dapat diakses melalui LPSE (Layanan Pengadaan Secara Elektronik)
                                Kominfo atau portal pengadaan pemerintah yang resmi.
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="category-card">
                    <div class="category-header">
                        <div class="category-icon">📱</div>
                        <div class="category-title">Layanan Digital</div>
                    </div>
                    <ul class="faq-list">
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara mendaftar layanan e-Government?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Untuk mendaftar layanan e-Government, kunjungi portal resmi layanan digital pemerintah.
                                Siapkan dokumen identitas yang valid dan ikuti panduan registrasi yang tersedia.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Apa itu transformasi digital nasional?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Transformasi digital nasional adalah program pemerintah untuk mempercepat digitalisasi
                                layanan publik dan menciptakan ekosistem digital yang terintegrasi di seluruh Indonesia.
                            </div>
                        </li>
                        <li class="faq-item">
                            <div class="faq-question" onclick="toggleFAQ(this)">
                                <span>Bagaimana cara melaporkan konten negatif di internet?</span>
                                <span class="arrow">▼</span>
                            </div>
                            <div class="faq-answer">
                                Anda dapat melaporkan konten negatif melalui portal aduankonten.id atau menghubungi
                                layanan pengaduan Kominfo melalui berbagai kanal yang tersedia.
                            </div>
                        </li>
                    </ul>
                </div>
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
                    <p>159 (24/7)</p>
                    <p>Gratis dari seluruh Indonesia</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">✉️</div>
                    <h4>Email Support</h4>
                    <p>halo@kominfo.go.id</p>
                    <p>Respon dalam 1x24 jam</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">💬</div>
                    <h4>Live Chat</h4>
                    <p>Website Resmi Kominfo</p>
                    <p>Senin - Jumat, 08:00-17:00</p>
                </div>
            </div>
        </div>
    </section>

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
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const faqItems = document.querySelectorAll('.faq-item');
            let found = false;

            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question span').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                    if (searchTerm && !found) {
                        // Auto-expand first matching result
                        const faqAnswer = item.querySelector('.faq-answer');
                        const arrow = item.querySelector('.arrow');
                        faqAnswer.classList.add('active');
                        arrow.classList.add('rotated');
                        found = true;

                        // Scroll to result
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

        // Search on Enter key press
        document.getElementById('searchInput').addEventListener('keypress', function (e) {
            if (e.key === 'Enter') {
                searchFAQ();
            }
        });

        // Clear search results when input is empty
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