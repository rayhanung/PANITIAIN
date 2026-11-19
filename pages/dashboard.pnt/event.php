<?php $halaman = 'event'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Event - Rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/kelola-event.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-rekruter.php'; ?>

    <main class="halaman-pendaftaran halaman-kelola">
        <section class="isi-dashboard">

            <div class="kepala-halaman">
                <div>
                    <h1>Kelola event</h1>
                    <p>Event yang kamu kelola beserta divisi dan jumlah pendaftarnya.</p>
                </div>
                <a href="form-event.php" class="btn-tambah">+ Tambah event</a>
            </div>

            <div class="filter-kelola">
                <input type="search" id="cari" placeholder="Cari nama event">
                <select id="f-status">
                    <option value="">Semua status</option>
                    <option value="buka">Buka</option>
                    <option value="tutup">Tutup</option>
                </select>
            </div>

            <div class="tabel-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Event</th>
                            <th>Tanggal event</th>
                            <th>Status</th>
                            <th>Divisi</th>
                            <th>Pendaftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="isi-tabel">
                        <tr data-status="buka" data-nama="Seminar Nasional Teknologi" data-pendaftar="2">
                            <td><span class="utama">Seminar Nasional Teknologi</span></td>
                            <td>12 Des 2026</td>
                            <td><span class="status buka">Buka</span></td>
                            <td>4 divisi</td>
                            <td>2 orang</td>
                            <td class="sel-aksi">
                                <a href="kelola-divisi.php?id=1" class="aksi aksi-detail">Divisi</a>
                                <a href="form-event.php?id=1" class="aksi aksi-detail">Ubah</a>
                                <button type="button" class="aksi aksi-hapus">Hapus</button>
                            </td>
                        </tr>

                        <tr data-status="buka" data-nama="Lomba Futsal Antar Jurusan" data-pendaftar="1">
                            <td><span class="utama">Lomba Futsal Antar Jurusan</span></td>
                            <td>20 Des 2026</td>
                            <td><span class="status buka">Buka</span></td>
                            <td>3 divisi</td>
                            <td>1 orang</td>
                            <td class="sel-aksi">
                                <a href="kelola-divisi.php?id=2" class="aksi aksi-detail">Divisi</a>
                                <a href="form-event.php?id=2" class="aksi aksi-detail">Ubah</a>
                                <button type="button" class="aksi aksi-hapus">Hapus</button>
                            </td>
                        </tr>

                        <tr data-status="tutup" data-nama="Bakti Sosial Desa Binaan" data-pendaftar="0">
                            <td><span class="utama">Bakti Sosial Desa Binaan</span></td>
                            <td>28 Nov 2026</td>
                            <td><span class="status tutup">Tutup</span></td>
                            <td>2 divisi</td>
                            <td>0 orang</td>
                            <td class="sel-aksi">
                                <a href="kelola-divisi.php?id=3" class="aksi aksi-detail">Divisi</a>
                                <a href="form-event.php?id=3" class="aksi aksi-detail">Ubah</a>
                                <button type="button" class="aksi aksi-hapus">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="kosong" id="kosong" hidden>Tidak ada event yang cocok.</p>

        </section>
    </main>

    <dialog id="dialog-hapus">
        <h2>Hapus event?</h2>
        <p id="teks-hapus"></p>
        <div class="dialog-aksi">
            <button type="button" class="btn-batal" id="batal-hapus">Batal</button>
            <button type="button" class="btn-hapus" id="ya-hapus">Ya, hapus</button>
        </div>
    </dialog>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/kelola-event.js"></script>
</body>
</html>