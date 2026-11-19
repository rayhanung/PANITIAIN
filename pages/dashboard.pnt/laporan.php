<?php $halaman = 'laporan'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan - Rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/laporan.css">
</head>

<body>
    <?php include __DIR__ . '/../../includes/navbar-rekruter.php'; ?>

    <main class="halaman-dashboard halaman-laporan">
        <section class="isi-dashboard">

            <div class="kepala-laporan">
                <div>
                    <h1>Laporan pendaftaran</h1>
                    <p>Rekap pendaftar per event dan divisi.</p>
                </div>
                <div class="aksi-laporan">
                    <button type="button" class="btn-unduh" id="unduh-csv">Unduh Excel (CSV)</button>
                    <button type="button" class="btn-cetak" id="cetak">Cetak / PDF</button>
                </div>
            </div>

            <div class="filter-laporan">
                <label for="f-event">Event</label>
                <select id="f-event">
                    <option>Seminar Nasional Teknologi</option>
                    <option>Lomba Futsal Antar Jurusan</option>
                    <option>Bakti Sosial Desa Binaan</option>
                </select>
            </div>

            <p class="info-event">
                Pelaksanaan 12 Des 2026 &middot; Aula Utama, Kampus A &middot; Pendaftaran
                <span class="status-mini warna-diterima">Buka</span>
            </p>

            <div class="ringkasan">
                <div class="ringkas-item">
                    <strong>14</strong>
                    <span>Total pendaftar</span>
                </div>
                <div class="ringkas-item">
                    <strong class="warna-menunggu">3</strong>
                    <span>Menunggu</span>
                </div>
                <div class="ringkas-item">
                    <strong class="warna-diterima">9</strong>
                    <span>Diterima</span>
                </div>
                <div class="ringkas-item">
                    <strong class="warna-ditolak">2</strong>
                    <span>Ditolak</span>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Rekap per divisi</h2>
                </div>

                <div class="panel-dash">
                    <table class="tabel-mini">
                        <thead>
                            <tr>
                                <th>Divisi</th>
                                <th>Pendaftar</th>
                                <th class="angka">Diterima</th>
                                <th class="angka">Ditolak</th>
                                <th class="angka">Menunggu</th>
                                <th class="angka">Sisa kuota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Acara</td>
                                <td>
                                    <span class="teks-bar">6 dari 10</span>
                                    <div class="bar"><span style="width: 60%"></span></div>
                                </td>
                                <td class="angka">4</td>
                                <td class="angka">1</td>
                                <td class="angka">1</td>
                                <td class="angka">4</td>
                            </tr>
                            <tr>
                                <td>Humas</td>
                                <td>
                                    <span class="teks-bar">4 dari 6</span>
                                    <div class="bar"><span style="width: 67%"></span></div>
                                </td>
                                <td class="angka">3</td>
                                <td class="angka">0</td>
                                <td class="angka">1</td>
                                <td class="angka">2</td>
                            </tr>
                            <tr>
                                <td>Dokumentasi</td>
                                <td>
                                    <span class="teks-bar">3 dari 5</span>
                                    <div class="bar"><span style="width: 60%"></span></div>
                                </td>
                                <td class="angka">2</td>
                                <td class="angka">1</td>
                                <td class="angka">0</td>
                                <td class="angka">2</td>
                            </tr>
                            <tr>
                                <td>Konsumsi</td>
                                <td>
                                    <span class="teks-bar">1 dari 4</span>
                                    <div class="bar"><span style="width: 25%"></span></div>
                                </td>
                                <td class="angka">0</td>
                                <td class="angka">0</td>
                                <td class="angka">1</td>
                                <td class="angka">3</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Total</td>
                                <td>
                                    <span class="teks-bar">14 dari 25</span>
                                    <div class="bar"><span style="width: 56%"></span></div>
                                </td>
                                <td class="angka">9</td>
                                <td class="angka">2</td>
                                <td class="angka">3</td>
                                <td class="angka">11</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <div class="bagian-dash">
                <div class="bagian-kepala">
                    <h2>Daftar pendaftar</h2>
                </div>

                <div class="panel-dash">
                    <table class="tabel-mini">
                        <thead>
                            <tr>
                                <th>Mahasiswa</th>
                                <th>Divisi</th>
                                <th>Tanggal daftar</th>
                                <th>Status</th>
                                <th>Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="utama">Budi Santoso</span><span class="sub">NIM 12345678</span></td>
                                <td>Acara</td>
                                <td>10 Nov 2026</td>
                                <td><span class="status-mini warna-diterima">Diterima</span></td>
                                <td class="catatan-lap">Selamat bergabung.</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Siti Rahmawati</span><span class="sub">NIM 12345679</span></td>
                                <td>Humas</td>
                                <td>9 Nov 2026</td>
                                <td><span class="status-mini warna-menunggu">Menunggu</span></td>
                                <td class="catatan-lap">-</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Andi Pratama</span><span class="sub">NIM 12345680</span></td>
                                <td>Dokumentasi</td>
                                <td>8 Nov 2026</td>
                                <td><span class="status-mini warna-diterima">Diterima</span></td>
                                <td class="catatan-lap">Portofolio sesuai kebutuhan.</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Dewi Lestari</span><span class="sub">NIM 12345681</span></td>
                                <td>Acara</td>
                                <td>7 Nov 2026</td>
                                <td><span class="status-mini warna-ditolak">Ditolak</span></td>
                                <td class="catatan-lap">Jadwal bentrok dengan hari pelaksanaan.</td>
                            </tr>
                            <tr>
                                <td><span class="utama">Rizky Maulana</span><span class="sub">NIM 12345682</span></td>
                                <td>Konsumsi</td>
                                <td>6 Nov 2026</td>
                                <td><span class="status-mini warna-menunggu">Menunggu</span></td>
                                <td class="catatan-lap">-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/laporan.js"></script>
</body>

</html>