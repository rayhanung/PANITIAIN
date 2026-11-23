<?php $halaman = 'event'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Divisi - rekruterin</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/kelola-event.css">
    <link rel="stylesheet" href="../../css/kelola-divisi.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-rekruter.php'; ?>

    <main class="halaman-pendaftaran halaman-kelola halaman-divisi">
        <section class="isi-dashboard">

            <a href="event.php" class="kembali">&larr; Kembali ke kelola event</a>

            <div class="kepala-halaman">
                <div>
                    <h1>Divisi</h1>
                    <p>Seminar Nasional Teknologi</p>
                </div>
            </div>

            <p class="info-sukses" id="info" hidden></p>

            <div class="tabel-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Divisi</th>
                            <th>Kuota</th>
                            <th>Terisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="isi-tabel">
                        <tr data-nama="Acara" data-kuota="10" data-terisi="7"
                            data-tugas="Menyusun rundown dan memimpin jalannya acara."
                            data-persyaratan="Mahasiswa aktif dan bersedia hadir saat rapat.">
                            <td><span class="utama nm">Acara</span><span class="sub tg">Menyusun rundown dan memimpin jalannya acara.</span></td>
                            <td class="kt">10 orang</td>
                            <td class="ts">7 dari 10</td>
                            <td class="sel-aksi">
                                <button type="button" class="aksi aksi-detail btn-ubah">Ubah</button>
                                <button type="button" class="aksi aksi-hapus btn-hapus" disabled title="Sudah punya pendaftar">Hapus</button>
                            </td>
                        </tr>

                        <tr data-nama="Humas" data-kuota="6" data-terisi="4"
                            data-tugas="Mengelola komunikasi dan publikasi event."
                            data-persyaratan="Mampu berkomunikasi dengan baik.">
                            <td><span class="utama nm">Humas</span><span class="sub tg">Mengelola komunikasi dan publikasi event.</span></td>
                            <td class="kt">6 orang</td>
                            <td class="ts">4 dari 6</td>
                            <td class="sel-aksi">
                                <button type="button" class="aksi aksi-detail btn-ubah">Ubah</button>
                                <button type="button" class="aksi aksi-hapus btn-hapus" disabled title="Sudah punya pendaftar">Hapus</button>
                            </td>
                        </tr>

                        <tr data-nama="Dokumentasi" data-kuota="5" data-terisi="3"
                            data-tugas="Mengambil foto dan video selama acara."
                            data-persyaratan="Memiliki kamera atau ponsel dengan kamera baik.">
                            <td><span class="utama nm">Dokumentasi</span><span class="sub tg">Mengambil foto dan video selama acara.</span></td>
                            <td class="kt">5 orang</td>
                            <td class="ts">3 dari 5</td>
                            <td class="sel-aksi">
                                <button type="button" class="aksi aksi-detail btn-ubah">Ubah</button>
                                <button type="button" class="aksi aksi-hapus btn-hapus" disabled title="Sudah punya pendaftar">Hapus</button>
                            </td>
                        </tr>

                        <tr data-nama="Konsumsi" data-kuota="4" data-terisi="0"
                            data-tugas="Menyiapkan makanan dan minuman peserta."
                            data-persyaratan="Teliti dan bertanggung jawab.">
                            <td><span class="utama nm">Konsumsi</span><span class="sub tg">Menyiapkan makanan dan minuman peserta.</span></td>
                            <td class="kt">4 orang</td>
                            <td class="ts">0 dari 4</td>
                            <td class="sel-aksi">
                                <button type="button" class="aksi aksi-detail btn-ubah">Ubah</button>
                                <button type="button" class="aksi aksi-hapus btn-hapus">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <p class="kosong" id="kosong" hidden>Belum ada divisi untuk event ini. Tambahkan lewat formulir di bawah.</p>
            </div>

            <template id="tpl-baris">
                <tr>
                    <td><span class="utama nm"></span><span class="sub tg"></span></td>
                    <td class="kt"></td>
                    <td class="ts"></td>
                    <td class="sel-aksi">
                        <button type="button" class="aksi aksi-detail btn-ubah">Ubah</button>
                        <button type="button" class="aksi aksi-hapus btn-hapus">Hapus</button>
                    </td>
                </tr>
            </template>

            <form class="panel-form" id="form-divisi" action="#">
                <h2 id="judul-form">Tambah divisi</h2>

                <div class="dua-kolom">
                    <div class="kolom">
                        <label for="nama_divisi">Nama divisi</label>
                        <input type="text" id="nama_divisi" name="nama_divisi" maxlength="100" required>
                    </div>
                    <div class="kolom">
                        <label for="kuota">Kuota (orang)</label>
                        <input type="number" id="kuota" name="kuota" min="1" max="1000" required>
                    </div>
                </div>

                <div class="kolom">
                    <label for="tugas">Tugas divisi</label>
                    <textarea id="tugas" name="tugas" rows="3" maxlength="1000"></textarea>
                </div>

                <div class="kolom">
                    <label for="persyaratan">Persyaratan</label>
                    <textarea id="persyaratan" name="persyaratan" rows="3" maxlength="1000"></textarea>
                </div>

                <p class="pesan-error" id="pesan-form" hidden></p>

                <div class="aksi-form">
                    <button type="submit" class="btn-simpan" id="tombol-simpan">Tambah divisi</button>
                    <button type="button" class="btn-batal-form" id="batal-ubah" hidden>Batal</button>
                </div>
            </form>

        </section>
    </main>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/kelola-divisi.js"></script>
</body>
</html>