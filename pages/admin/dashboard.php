<?php $halaman = 'dashboard'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/dashboard-admin.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-admin.php'; ?>

    <main class="halaman-dashboard halaman-dash-admin">
        <section class="isi-dashboard">

            <div class="sapaan">
                <h1>Halo, Nama Admin</h1>
                <p>Ringkasan akun dan data di seluruh sistem.</p>
            </div>

            <div class="perlu-tindakan">
                <div>
                    <strong>3 permohonan panitia menunggu verifikasi</strong>
                    <small>Periksa berkasnya, lalu setujui atau tolak agar mereka bisa mulai mengelola event.</small>
                </div>
                <a href="verifikasi.php" class="btn-mini">Periksa sekarang</a>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Akun</h2>
                    <a href="akun.php">Kelola akun</a>
                </div>
                <div class="ringkasan">
                    <div class="ringkas-item">
                        <strong>51</strong>
                        <span>Total akun</span>
                    </div>
                    <div class="ringkas-item">
                        <strong>38</strong>
                        <span>Mahasiswa</span>
                    </div>
                    <div class="ringkas-item">
                        <strong>9</strong>
                        <span>Panitia</span>
                    </div>
                    <div class="ringkas-item">
                        <strong class="warna-menunggu">3</strong>
                        <span>Menunggu verifikasi</span>
                    </div>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Data sistem</h2>
                </div>
                <div class="ringkasan">
                    <div class="ringkas-item">
                        <strong>6</strong>
                        <span>Total event</span>
                    </div>
                    <div class="ringkas-item">
                        <strong class="warna-diterima">4</strong>
                        <span>Event buka</span>
                    </div>
                    <div class="ringkas-item">
                        <strong>87</strong>
                        <span>Total pendaftaran</span>
                    </div>
                    <div class="ringkas-item">
                        <strong class="warna-menunggu">14</strong>
                        <span>Belum diperiksa panitia</span>
                    </div>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Akun terbaru</h2>
                    <a href="akun.php">Lihat semua akun</a>
                </div>

                <div class="panel-dash">
                    <table class="tabel-mini">
                        <thead>
                            <tr>
                                <th>Pengguna</th>
                                <th>Peran</th>
                                <th>Terdaftar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="utama">Galih Permana</span><span class="sub">galih@email.com</span></td>
                                <td><span class="peran-badge peran-panitia">Panitia</span></td>
                                <td>16 Nov 2026</td>
                                <td><span class="status-mini warna-menunggu">Menunggu verifikasi</span></td>
                            </tr>
                            <tr>
                                <td><span class="utama">Maya Sari</span><span class="sub">maya@email.com</span></td>
                                <td><span class="peran-badge peran-panitia">Panitia</span></td>
                                <td>15 Nov 2026</td>
                                <td><span class="status-mini warna-menunggu">Menunggu verifikasi</span></td>
                            </tr>
                            <tr>
                                <td><span class="utama">Intan Permata</span><span class="sub">intan@email.com</span></td>
                                <td><span class="peran-badge peran-panitia">Panitia</span></td>
                                <td>14 Nov 2026</td>
                                <td><span class="status-mini warna-menunggu">Menunggu verifikasi</span></td>
                            </tr>
                            <tr>
                                <td><span class="utama">Putri Ayu</span><span class="sub">putri@email.com</span></td>
                                <td><span class="peran-badge peran-mahasiswa">Mahasiswa</span></td>
                                <td>13 Nov 2026</td>
                                <td><span class="status-mini warna-diterima">Aktif</span></td>
                            </tr>
                            <tr>
                                <td><span class="utama">Bagas Saputra</span><span class="sub">bagas@email.com</span></td>
                                <td><span class="peran-badge peran-mahasiswa">Mahasiswa</span></td>
                                <td>12 Nov 2026</td>
                                <td><span class="status-mini warna-diterima">Aktif</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Event di seluruh sistem</h2>
                    <span class="hanya-baca">Hanya dibaca</span>
                </div>

                <div class="panel-dash">
                    <table class="tabel-mini tabel-event">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Panitia</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Divisi</th>
                                <th>Pendaftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="utama">Seminar Nasional Teknologi</span><span class="sub">BEM Fakultas</span></td>
                                <td>Rina Kusuma</td>
                                <td>12 Des 2026</td>
                                <td><span class="status-mini warna-diterima">Buka</span></td>
                                <td>4</td>
                                <td>24</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Lomba Futsal Antar Jurusan</span><span class="sub">HMTI</span></td>
                                <td>Hendra Wijaya</td>
                                <td>20 Des 2026</td>
                                <td><span class="status-mini warna-diterima">Buka</span></td>
                                <td>3</td>
                                <td>17</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Pelatihan Kepemimpinan</span><span class="sub">BEM Universitas</span></td>
                                <td>Rina Kusuma</td>
                                <td>8 Jan 2027</td>
                                <td><span class="status-mini warna-diterima">Buka</span></td>
                                <td>4</td>
                                <td>18</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Workshop Desain Grafis</span><span class="sub">UKM Seni</span></td>
                                <td>Hendra Wijaya</td>
                                <td>15 Jan 2027</td>
                                <td><span class="status-mini warna-diterima">Buka</span></td>
                                <td>3</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Bakti Sosial Desa Binaan</span><span class="sub">UKM Peduli</span></td>
                                <td>Rina Kusuma</td>
                                <td>28 Nov 2026</td>
                                <td><span class="status-mini warna-nonaktif">Tutup</span></td>
                                <td>2</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Turnamen E-Sport</span><span class="sub">UKM Gaming</span></td>
                                <td>Hendra Wijaya</td>
                                <td>22 Nov 2026</td>
                                <td><span class="status-mini warna-nonaktif">Tutup</span></td>
                                <td>2</td>
                                <td>7</td>
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