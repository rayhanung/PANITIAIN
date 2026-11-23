<?php $halaman = 'verifikasi'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Panitia - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/kelola-event.css">
    <link rel="stylesheet" href="../../css/kelola-akun.css">
    <link rel="stylesheet" href="../../css/verifikasi.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-admin.php'; ?>

    <main class="halaman-pendaftaran halaman-kelola halaman-verifikasi">
        <section class="isi-dashboard">

            <div class="kepala-halaman">
                <div>
                    <h1>Verifikasi panitia</h1>
                    <p>Periksa berkas pendaftar yang ingin menjadi panitia, lalu setujui atau tolak.</p>
                </div>
            </div>

            <p class="info-sukses" id="info" hidden></p>

            <div class="baris-filter">
                <div class="tab-status" role="group" aria-label="Filter status verifikasi">
                    <button type="button" class="tab" data-status="menunggu" aria-pressed="true">
                        Menunggu <span class="hitung" id="n-menunggu">0</span>
                    </button>
                    <button type="button" class="tab" data-status="disetujui" aria-pressed="false">
                        Disetujui <span class="hitung" id="n-disetujui">0</span>
                    </button>
                    <button type="button" class="tab" data-status="ditolak" aria-pressed="false">
                        Ditolak <span class="hitung" id="n-ditolak">0</span>
                    </button>
                    <button type="button" class="tab" data-status="" aria-pressed="false">
                        Semua <span class="hitung" id="n-semua">0</span>
                    </button>
                </div>
                <input type="search" id="cari" placeholder="Cari nama atau email">
            </div>

            <div class="tabel-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Pemohon</th>
                            <th>Berkas</th>
                            <th>Tanggal daftar</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="isi-tabel">
                        <tr data-nama="Maya Sari" data-email="maya@email.com" data-tanggal="15 Nov 2026"
                            data-berkas="sk-kepanitiaan-seminar.pdf" data-jenis="PDF" data-ukuran="420 KB"
                            data-status="menunggu" data-keterangan="">
                            <td><span class="utama">Maya Sari</span><span class="sub">maya@email.com</span></td>
                            <td><span class="utama">sk-kepanitiaan-seminar.pdf</span><span class="sub">PDF &middot; 420 KB</span></td>
                            <td>15 Nov 2026</td>
                            <td></td><td></td><td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Galih Permana" data-email="galih@email.com" data-tanggal="16 Nov 2026"
                            data-berkas="surat-tugas-futsal.png" data-jenis="PNG" data-ukuran="1,2 MB"
                            data-status="menunggu" data-keterangan="">
                            <td><span class="utama">Galih Permana</span><span class="sub">galih@email.com</span></td>
                            <td><span class="utama">surat-tugas-futsal.png</span><span class="sub">PNG &middot; 1,2 MB</span></td>
                            <td>16 Nov 2026</td>
                            <td></td><td></td><td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Intan Permata" data-email="intan@email.com" data-tanggal="14 Nov 2026"
                            data-berkas="sk-baksos.jpg" data-jenis="JPG" data-ukuran="860 KB"
                            data-status="menunggu" data-keterangan="">
                            <td><span class="utama">Intan Permata</span><span class="sub">intan@email.com</span></td>
                            <td><span class="utama">sk-baksos.jpg</span><span class="sub">JPG &middot; 860 KB</span></td>
                            <td>14 Nov 2026</td>
                            <td></td><td></td><td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Fadli Hakim" data-email="fadli@email.com" data-tanggal="10 Nov 2026"
                            data-berkas="sk-lomba.pdf" data-jenis="PDF" data-ukuran="510 KB"
                            data-status="disetujui" data-keterangan="Disetujui 11 Nov 2026 oleh Nama Admin">
                            <td><span class="utama">Fadli Hakim</span><span class="sub">fadli@email.com</span></td>
                            <td><span class="utama">sk-lomba.pdf</span><span class="sub">PDF &middot; 510 KB</span></td>
                            <td>10 Nov 2026</td>
                            <td></td><td></td><td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Yoga Pratama" data-email="yoga@email.com" data-tanggal="8 Nov 2026"
                            data-berkas="foto-ktm.png" data-jenis="PNG" data-ukuran="780 KB"
                            data-status="ditolak" data-keterangan="Berkas bukan SK atau surat tugas kepanitiaan.">
                            <td><span class="utama">Yoga Pratama</span><span class="sub">yoga@email.com</span></td>
                            <td><span class="utama">foto-ktm.png</span><span class="sub">PNG &middot; 780 KB</span></td>
                            <td>8 Nov 2026</td>
                            <td></td><td></td><td class="sel-aksi"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="kosong" id="kosong" hidden></p>

        </section>
    </main>

    <dialog id="dialog-berkas" class="dialog-akun">
        <h2>Berkas verifikasi</h2>
        <p class="dialog-nama" id="berkas-pemohon"></p>
        <div class="pratinjau" id="pratinjau">
            <strong id="berkas-nama"></strong>
            <span id="berkas-meta"></span>
            <small>Pratinjau berkas akan tampil di sini setelah terhubung ke server.</small>
        </div>
        <div class="dialog-aksi">
            <button type="button" class="btn-batal" data-tutup>Tutup</button>
        </div>
    </dialog>

    <dialog id="dialog-tolak" class="dialog-akun">
        <form id="form-tolak">
            <h2>Tolak permohonan</h2>
            <p class="dialog-nama" id="tolak-pemohon"></p>

            <label for="alasan" class="label-alasan">Alasan penolakan</label>
            <textarea id="alasan" rows="4" maxlength="300"
                placeholder="Contoh: Berkas tidak terbaca atau bukan surat tugas kepanitiaan."></textarea>
            <small class="petunjuk">Alasan ini ditampilkan ke pemohon.</small>

            <p class="pesan-error" id="galat-alasan" hidden></p>

            <div class="dialog-aksi">
                <button type="button" class="btn-batal" data-tutup>Batal</button>
                <button type="submit" class="btn-tolak">Tolak permohonan</button>
            </div>
        </form>
    </dialog>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/verifikasi.js"></script>
</body>
</html>