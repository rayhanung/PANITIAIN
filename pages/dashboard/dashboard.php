<?php $halaman = 'dashboard'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar.php'; ?>

    <main class="halaman-dashboard">
        <section class="isi-dashboard">

            <div class="kontainer-sambutan">
                <div class="sambutan-teks">
                    <h2>Halo, <span id="namaUser">User</span></h2>
                    <p>
                        Selamat datang di sistem rekrutmen kepanitiaan.
                        Jangan lewatkan kesempatan untuk menjadi bagian
                        dari event-event menarik di kampus.
                    </p>
                </div>
                <div class="sambutan-gambar">
                    <img src="../../images/banner.png" alt="Kegiatan kepanitiaan">
                </div>
            </div>

            <div class="ringkasan">
                <div class="ringkas-item">
                    <strong>3</strong>
                    <span>Total pendaftaran</span>
                </div>
                <div class="ringkas-item">
                    <strong class="warna-menunggu">1</strong>
                    <span>Menunggu</span>
                </div>
                <div class="ringkas-item">
                    <strong class="warna-diterima">1</strong>
                    <span>Diterima</span>
                </div>
                <div class="ringkas-item">
                    <strong class="warna-ditolak">1</strong>
                    <span>Ditolak</span>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Event yang sedang buka</h2>
                    <a href="event.php">Lihat semua event</a>
                </div>

                <div class="panel-dash">
                    <div class="baris-event">
                        <div class="logo-mini">BF</div>
                        <div class="baris-info">
                            <strong>Seminar Nasional Teknologi</strong>
                            <small>BEM Fakultas</small>
                        </div>
                        <span class="batas">Tutup 30 Nov</span>
                        <a href="event.php" class="btn-mini">Daftar</a>
                    </div>

                    <div class="baris-event">
                        <div class="logo-mini">HT</div>
                        <div class="baris-info">
                            <strong>Lomba Futsal Antar Jurusan</strong>
                            <small>HMTI</small>
                        </div>
                        <span class="batas mendesak">Tutup 3 hari lagi</span>
                        <a href="event.php" class="btn-mini">Daftar</a>
                    </div>

                    <div class="baris-event">
                        <div class="logo-mini">UP</div>
                        <div class="baris-info">
                            <strong>Bakti Sosial Desa Binaan</strong>
                            <small>UKM Peduli</small>
                        </div>
                        <span class="batas">Tutup 5 Des</span>
                        <a href="event.php" class="btn-mini">Daftar</a>
                    </div>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Pendaftaran terbaru</h2>
                    <a href="pendaftaran.php">Lihat semua pendaftaran</a>
                </div>

                <div class="panel-dash">
                    <table class="tabel-mini">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Seksi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Seminar Nasional</td>
                                <td>Acara</td>
                                <td><span class="status-mini warna-menunggu">Menunggu</span></td>
                            </tr>
                            <tr>
                                <td>Lomba Futsal</td>
                                <td>Humas</td>
                                <td><span class="status-mini warna-diterima">Diterima</span></td>
                            </tr>
                            <tr>
                                <td>Bakti Sosial</td>
                                <td>Dokumentasi</td>
                                <td><span class="status-mini warna-ditolak">Ditolak</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
</body>
</html>