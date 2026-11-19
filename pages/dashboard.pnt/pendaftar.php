<?php $halaman = 'pendaftar'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar - Rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/pendaftar.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-rekruter.php'; ?>

    <main class="halaman-pendaftaran halaman-pendaftar">
        <section class="isi-dashboard">

            <div class="filter-pendaftar">
                <input type="search" id="cari" placeholder="Cari nama atau NIM">

                <select id="f-event">
                    <option value="">Semua event</option>
                    <option>Seminar Nasional Teknologi</option>
                    <option>Lomba Futsal Antar Jurusan</option>
                </select>

                <select id="f-divisi">
                    <option value="">Semua divisi</option>
                    <option>Acara</option>
                    <option>Humas</option>
                    <option>Dokumentasi</option>
                </select>

                <select id="f-status">
                    <option value="">Semua status</option>
                    <option value="menunggu">Menunggu</option>
                    <option value="diterima">Diterima</option>
                    <option value="ditolak">Ditolak</option>
                </select>
            </div>

            <p class="jumlah" id="jumlah"></p>

            <div class="tabel-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Mahasiswa</th>
                            <th>Event</th>
                            <th>Divisi</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="isi-tabel">
                        <tr data-event="Seminar Nasional Teknologi" data-divisi="Acara" data-status="menunggu">
                            <td><span class="utama">Budi Santoso</span><span class="sub">NIM 12345678</span></td>
                            <td>Seminar Nasional Teknologi</td>
                            <td>Acara</td>
                            <td>10 Nov 2026</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                            <td class="sel-aksi"><a href="periksa-pendaftaran.php?id=1" class="aksi aksi-periksa">Periksa</a></td>
                        </tr>

                        <tr data-event="Seminar Nasional Teknologi" data-divisi="Humas" data-status="menunggu">
                            <td><span class="utama">Siti Rahmawati</span><span class="sub">NIM 12345679</span></td>
                            <td>Seminar Nasional Teknologi</td>
                            <td>Humas</td>
                            <td>9 Nov 2026</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                            <td class="sel-aksi"><a href="periksa-pendaftaran.php?id=2" class="aksi aksi-periksa">Periksa</a></td>
                        </tr>

                        <tr data-event="Lomba Futsal Antar Jurusan" data-divisi="Dokumentasi" data-status="diterima">
                            <td><span class="utama">Andi Pratama</span><span class="sub">NIM 12345680</span></td>
                            <td>Lomba Futsal Antar Jurusan</td>
                            <td>Dokumentasi</td>
                            <td>5 Nov 2026</td>
                            <td><span class="status diterima">Diterima</span></td>
                            <td class="sel-aksi"><a href="periksa-pendaftaran.php?id=3" class="aksi aksi-detail">Detail</a></td>
                        </tr>

                        <tr class="ditolak" data-event="Lomba Futsal Antar Jurusan" data-divisi="Acara" data-status="ditolak">
                            <td><span class="utama">Dewi Lestari</span><span class="sub">NIM 12345681</span></td>
                            <td>Lomba Futsal Antar Jurusan</td>
                            <td>Acara</td>
                            <td>1 Nov 2026</td>
                            <td><span class="status ditolak">Ditolak</span></td>
                            <td class="sel-aksi"><a href="detail-pendaftaran.php?id=4" class="aksi aksi-detail">Detail</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="kosong" id="kosong" hidden>Tidak ada pendaftar yang cocok dengan filter.</p>

        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/pendaftar.js"></script>
</body>
</html>