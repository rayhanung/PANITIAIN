<?php $halaman = 'dashboard'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Rekruter - Rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/dashboard-rekruter.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-rekruter.php'; ?>

    <main class="halaman-dashboard halaman-dash-rekruter">
        <section class="isi-dashboard">

            <div class="sapaan">
                <h1>Halo, Nama Rekruter</h1>
                <p>Ringkasan event dan pendaftar yang kamu kelola.</p>
            </div>

            <div class="ringkasan">
                <div class="ringkas-item">
                    <strong>2</strong>
                    <span>Event aktif</span>
                </div>
                <div class="ringkas-item">
                    <strong>20</strong>
                    <span>Total pendaftar</span>
                </div>
                <div class="ringkas-item">
                    <strong class="warna-menunggu">5</strong>
                    <span>Perlu diperiksa</span>
                </div>
                <div class="ringkas-item">
                    <strong class="warna-diterima">12</strong>
                    <span>Diterima</span>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Perlu diperiksa</h2>
                    <a href="pendaftar.php">Lihat semua pendaftar</a>
                </div>

                <div class="panel-dash">
                    <table class="tabel-mini">
                        <thead>
                            <tr>
                                <th>Mahasiswa</th>
                                <th>Event</th>
                                <th>Divisi</th>
                                <th>Tanggal daftar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="utama">Siti Rahmawati</span><span class="sub">NIM 12345679</span></td>
                                <td>Seminar Nasional Teknologi</td>
                                <td>Humas</td>
                                <td>9 Nov 2026</td>
                                <td><a href="periksa-pendaftaran.php?id=2" class="btn-mini">Periksa</a></td>
                            </tr>
                            <tr>
                                <td><span class="utama">Rizky Maulana</span><span class="sub">NIM 12345682</span></td>
                                <td>Seminar Nasional Teknologi</td>
                                <td>Konsumsi</td>
                                <td>6 Nov 2026</td>
                                <td><a href="periksa-pendaftaran.php?id=5" class="btn-mini">Periksa</a></td>
                            </tr>
                            <tr>
                                <td><span class="utama">Fajar Nugroho</span><span class="sub">NIM 12345690</span></td>
                                <td>Lomba Futsal Antar Jurusan</td>
                                <td>Perlengkapan</td>
                                <td>5 Nov 2026</td>
                                <td><a href="periksa-pendaftaran.php?id=9" class="btn-mini">Periksa</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Event saya</h2>
                    <a href="event.php">Kelola semua event</a>
                </div>

                <div class="panel-dash">
                    <div class="baris-event">
                        <div class="logo-mini">BF</div>
                        <div class="baris-info">
                            <strong>Seminar Nasional Teknologi</strong>
                            <small>12 Des 2026 &middot; Aula Utama, Kampus A</small>
                        </div>
                        <span class="status-mini warna-diterima">Buka</span>
                        <span class="batas">4 divisi &middot; 14 pendaftar</span>
                        <a href="kelola-divisi.php?id=1" class="btn-mini">Kelola</a>
                    </div>

                    <div class="baris-event">
                        <div class="logo-mini">HT</div>
                        <div class="baris-info">
                            <strong>Lomba Futsal Antar Jurusan</strong>
                            <small>20 Des 2026 &middot; Lapangan Olahraga</small>
                        </div>
                        <span class="status-mini warna-diterima">Buka</span>
                        <span class="batas">3 divisi &middot; 6 pendaftar</span>
                        <a href="kelola-divisi.php?id=2" class="btn-mini">Kelola</a>
                    </div>

                    <div class="baris-event">
                        <div class="logo-mini">UP</div>
                        <div class="baris-info">
                            <strong>Bakti Sosial Desa Binaan</strong>
                            <small>28 Nov 2026 &middot; Desa Sukamaju</small>
                        </div>
                        <span class="status-mini warna-tutup">Tutup</span>
                        <span class="batas">2 divisi &middot; 0 pendaftar</span>
                        <a href="kelola-divisi.php?id=3" class="btn-mini">Kelola</a>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
</body>
</html>