<?php $halaman = 'event'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/event.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar.php'; ?>

    <main class="halaman-event">
        <section class="isi-dashboard">

            <div class="filter-baris">
                <input type="search" id="cari" placeholder="Cari event atau penyelenggara">
                <select id="status">
                    <option value="semua">Semua status</option>
                    <option value="buka">Pendaftaran buka</option>
                    <option value="tutup">Pendaftaran tutup</option>
                </select>
            </div>

            <div class="daftar-event">

                <article class="event" data-status="buka">
                    <div class="event-atas">
                        <div class="logo-pen">BF</div>
                    </div>

                    <p class="penyelenggara">BEM Fakultas <span>5 hari lalu</span></p>
                    <h3>Seminar Nasional Teknologi</h3>

                    <p class="label-seksi">Seksi dibutuhkan</p>
                    <div class="kapsul-wrap">
                        <span class="kapsul">Acara</span>
                        <span class="kapsul">Humas</span>
                        <span class="kapsul">Dokumentasi</span>
                        <span class="kapsul">+2 lainnya</span>
                    </div>

                    <div class="event-bawah">
                        <div class="info-tanggal">
                            <strong>12 Des 2026</strong>
                            <small>Aula Utama, Kampus A</small>
                        </div>
                        <a href="#" class="btn-daftar-event">Daftar sekarang</a>
                    </div>
                </article>

                <article class="event" data-status="buka">
                    <div class="event-atas">
                        <div class="logo-pen">HT</div>
                        
                    </div>

                    <p class="penyelenggara">HMTI <span>2 hari lalu</span></p>
                    <h3>Lomba Basket 3x3</h3>

                    <p class="label-seksi">Seksi dibutuhkan</p>
                    <div class="kapsul-wrap">
                        <span class="kapsul">Perlengkapan</span>
                        <span class="kapsul">Konsumsi</span>
                        <span class="kapsul kapsul-mendesak">Tutup 3 hari lagi</span>
                    </div>
                    <div class="event-bawah">
                        <div class="info-tanggal">
                            <strong>20 Des 2026</strong>
                            <small>Lapangan Olahraga</small>
                        </div>
                        <a href="#" class="btn-daftar-event">Daftar sekarang</a>
                    </div>
                </article>

                <article class="event tutup" data-status="tutup">
                    <div class="event-atas">
                        <div class="logo-pen">UP</div>
                    </div>

                    <p class="penyelenggara">UKM Peduli <span>3 minggu lalu</span></p>
                    <h3>Bakti Sosial Desa Binaan</h3>

                    <p class="label-seksi">Seksi dibutuhkan</p>
                    <div class="kapsul-wrap">
                        <span class="kapsul">Dokumentasi</span>
                        <span class="kapsul">Transportasi</span>
                    </div>

                    <div class="event-bawah">
                        <div class="info-tanggal">
                            <strong>28 Nov 2026</strong>
                            <small>Desa Sukamaju</small>
                        </div>
                        <span class="btn-daftar-event nonaktif">Pendaftaran ditutup</span>
                    </div>
                </article>

            </div>

            <p class="kosong" id="kosong" hidden>Tidak ada event yang cocok. Coba kata kunci lain.</p>

        </section>
    </main>

    <script src="../../js/event.js"></script>
</body>
</html>