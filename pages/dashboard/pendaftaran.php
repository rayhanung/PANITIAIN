<?php $halaman = 'pendaftaran'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Saya - Rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
</head>

<body>
    <?php include __DIR__ . '/../../includes/navbar.php'; ?>

    <main class="halaman-pendaftaran">
        <header class="header-dashboard">

        </header>

        <section class="isi-dashboard">
            <div class="tabel-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Event</th>
                            <th>Divisi</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                            <th>Catatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="utama">Seminar Nasional Teknologi</span>
                                <span class="sub">Pelaksanaan 12 Des 2026</span>
                            </td>
                            <td>Acara</td>
                            <td>10 Nov 2026</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                            <td class="catatan kosong-catatan">Belum diperiksa</td>
                            <td class="sel-aksi">
                                <a href="#" class="aksi aksi-detail">Detail</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="utama">Lomba Futsal Antar Jurusan</span>
                                <span class="sub">Pelaksanaan 20 Des 2026</span>
                            </td>
                            <td>Humas</td>
                            <td>5 Nov 2026</td>
                            <td><span class="status diterima">Diterima</span></td>
                            <td class="catatan">Selamat bergabung. Info rapat pertama akan dikirim lewat email.</td>
                            <td class="sel-aksi">
                                <a href="#" class="aksi aksi-detail">Detail</a>
                            </td>
                        </tr>

                        <tr class="ditolak">
                            <td>
                                <span class="utama">Bakti Sosial Desa Binaan</span>
                                <span class="sub">Pelaksanaan 28 Nov 2026</span>
                            </td>
                            <td>Dokumentasi</td>
                            <td>1 Nov 2026</td>
                            <td><span class="status ditolak">Ditolak</span></td>
                            <td class="catatan">Kuota divisi sudah terpenuhi.</td>
                            <td class="sel-aksi">
                                <a href="#" class="aksi aksi-detail">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
</body>

</html>