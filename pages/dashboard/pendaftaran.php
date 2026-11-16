<?php $halaman = 'pendaftaran'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Saya - Panitiain</title>
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
                            <th>Tahap</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="utama">Seminar Nasional</span>
                                <span class="sub">BEM Fakultas</span>
                            </td>
                            <td>
                                <span class="utama">Acara</span>
                                <span class="sub">Pilihan 1</span>
                            </td>
                            <td>10 Nov 2026</td>
                            <td><span class="status menunggu">Menunggu</span></td>
                            <td>Seleksi berkas</td>
                            <td class="sel-aksi">
                                <a href="#" class="aksi aksi-detail">Detail</a>
                                <button type="button" class="aksi aksi-batal">Batalkan</button>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <span class="utama">Lomba Futsal</span>
                                <span class="sub">HMTI</span>
                            </td>
                            <td>
                                <span class="utama">Humas</span>
                                <span class="sub">Pilihan 1</span>
                            </td>
                            <td>5 Nov 2026</td>
                            <td><span class="status diterima">Diterima</span></td>
                            <td>Selesai</td>
                            <td class="sel-aksi">
                                <a href="#" class="aksi aksi-detail">Detail</a>
                                <button type="button" class="aksi aksi-batal" disabled>Batalkan</button>
                            </td>
                        </tr>

                        <tr class="ditolak">
                            <td>
                                <span class="utama">Bakti Sosial</span>
                                <span class="sub">UKM Peduli</span>
                            </td>
                            <td>
                                <span class="utama">Dokumentasi</span>
                                <span class="sub">Pilihan 2</span>
                            </td>
                            <td>1 Nov 2026</td>
                            <td><span class="status ditolak">Ditolak</span></td>
                            <td>Seleksi berkas</td>
                            <td class="sel-aksi">
                                <a href="#" class="aksi aksi-detail">Detail</a>
                                <button type="button" class="aksi aksi-batal" disabled>Batalkan</button>
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