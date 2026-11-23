<?php $halaman = 'akun'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Akun - Panitiain</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/dashboard.css">
    <link rel="stylesheet" href="../../css/pendaftaran.css">
    <link rel="stylesheet" href="../../css/kelola-event.css">
    <link rel="stylesheet" href="../../css/kelola-akun.css">
</head>
<body>
    <?php include __DIR__ . '/../../includes/navbar-admin.php'; ?>

    <main class="halaman-pendaftaran halaman-kelola halaman-akun">
        <section class="isi-dashboard">

            <div class="kepala-halaman">
                <div>
                    <h1>Kelola akun</h1>
                    <p>Semua pengguna sistem. Atur peran, aktifkan, atau nonaktifkan akun.</p>
                </div>
            </div>

            <p class="info-sukses" id="info" hidden></p>

            <div class="filter-kelola">
                <input type="search" id="cari" placeholder="Cari nama, email, atau NIM">
                <select id="f-peran">
                    <option value="">Semua peran</option>
                    <option value="mahasiswa">Mahasiswa</option>
                    <option value="panitia">Panitia</option>
                    <option value="admin">Admin</option>
                </select>
                <select id="f-status">
                    <option value="">Semua status</option>
                    <option value="aktif">Aktif</option>
                    <option value="nonaktif">Nonaktif</option>
                    <option value="menunggu">Menunggu verifikasi</option>
                </select>
            </div>

            <p class="jumlah" id="jumlah"></p>

            <div class="tabel-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Pengguna</th>
                            <th>Peran</th>
                            <th>Status</th>
                            <th>Terdaftar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="isi-tabel">
                        <tr data-nama="Nama Admin" data-email="admin@panitiain.id" data-nim=""
                            data-peran="admin" data-status="aktif" data-terdaftar="1 Okt 2026"
                            data-aktivitas="-" data-punya-data="0" data-saya="1">
                            <td><span class="utama">Nama Admin <span class="penanda">kamu</span></span><span class="sub">admin@panitiain.id</span></td>
                            <td></td><td></td>
                            <td>1 Okt 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Budi Santoso" data-email="budi@email.com" data-nim="12345678"
                            data-peran="mahasiswa" data-status="aktif" data-terdaftar="3 Okt 2026"
                            data-aktivitas="3 pendaftaran" data-punya-data="1" data-saya="0">
                            <td><span class="utama">Budi Santoso</span><span class="sub">budi@email.com</span></td>
                            <td></td><td></td>
                            <td>3 Okt 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Siti Rahmawati" data-email="siti@email.com" data-nim="12345679"
                            data-peran="mahasiswa" data-status="aktif" data-terdaftar="5 Okt 2026"
                            data-aktivitas="2 pendaftaran" data-punya-data="1" data-saya="0">
                            <td><span class="utama">Siti Rahmawati</span><span class="sub">siti@email.com</span></td>
                            <td></td><td></td>
                            <td>5 Okt 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Andi Pratama" data-email="andi@email.com" data-nim="12345680"
                            data-peran="mahasiswa" data-status="aktif" data-terdaftar="8 Okt 2026"
                            data-aktivitas="1 pendaftaran" data-punya-data="1" data-saya="0">
                            <td><span class="utama">Andi Pratama</span><span class="sub">andi@email.com</span></td>
                            <td></td><td></td>
                            <td>8 Okt 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Dewi Lestari" data-email="dewi@email.com" data-nim="12345681"
                            data-peran="mahasiswa" data-status="nonaktif" data-terdaftar="10 Okt 2026"
                            data-aktivitas="1 pendaftaran" data-punya-data="1" data-saya="0">
                            <td><span class="utama">Dewi Lestari</span><span class="sub">dewi@email.com</span></td>
                            <td></td><td></td>
                            <td>10 Okt 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Rizky Maulana" data-email="rizky@email.com" data-nim="12345682"
                            data-peran="mahasiswa" data-status="aktif" data-terdaftar="2 Nov 2026"
                            data-aktivitas="Belum ada pendaftaran" data-punya-data="0" data-saya="0">
                            <td><span class="utama">Rizky Maulana</span><span class="sub">rizky@email.com</span></td>
                            <td></td><td></td>
                            <td>2 Nov 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Rina Kusuma" data-email="rina@email.com" data-nim=""
                            data-peran="panitia" data-status="aktif" data-terdaftar="4 Okt 2026"
                            data-aktivitas="2 event dikelola" data-punya-data="1" data-saya="0">
                            <td><span class="utama">Rina Kusuma</span><span class="sub">rina@email.com</span></td>
                            <td></td><td></td>
                            <td>4 Okt 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Hendra Wijaya" data-email="hendra@email.com" data-nim=""
                            data-peran="panitia" data-status="aktif" data-terdaftar="12 Okt 2026"
                            data-aktivitas="1 event dikelola" data-punya-data="1" data-saya="0">
                            <td><span class="utama">Hendra Wijaya</span><span class="sub">hendra@email.com</span></td>
                            <td></td><td></td>
                            <td>12 Okt 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>

                        <tr data-nama="Maya Sari" data-email="maya@email.com" data-nim=""
                            data-peran="panitia" data-status="menunggu" data-terdaftar="15 Nov 2026"
                            data-aktivitas="Menunggu verifikasi berkas" data-punya-data="0" data-saya="0">
                            <td><span class="utama">Maya Sari</span><span class="sub">maya@email.com</span></td>
                            <td></td><td></td>
                            <td>15 Nov 2026</td>
                            <td class="sel-aksi"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="kosong" id="kosong" hidden>Tidak ada akun yang cocok.</p>

        </section>
    </main>

    <dialog id="dialog-peran" class="dialog-akun">
        <form id="form-peran">
            <h2>Ubah peran</h2>
            <p class="dialog-nama" id="teks-peran"></p>

            <div class="pilih-peran">
                <label>
                    <input type="radio" name="peran-baru" value="mahasiswa">
                    <span><strong>Mahasiswa</strong><small>Melihat event dan mendaftar ke divisi.</small></span>
                </label>
                <label>
                    <input type="radio" name="peran-baru" value="panitia">
                    <span><strong>Panitia</strong><small>Mengelola event, divisi, dan memeriksa pendaftar.</small></span>
                </label>
                <label>
                    <input type="radio" name="peran-baru" value="admin">
                    <span><strong>Admin</strong><small>Mengelola akun dan menetapkan peran.</small></span>
                </label>
            </div>

            <p class="pesan-error" id="peringatan-peran" hidden></p>

            <div class="dialog-aksi">
                <button type="button" class="btn-batal" data-tutup>Batal</button>
                <button type="submit" class="btn-ya">Simpan peran</button>
            </div>
        </form>
    </dialog>

    <dialog id="dialog-detail" class="dialog-akun">
        <h2>Detail akun</h2>
        <dl class="dl-akun" id="isi-detail"></dl>
        <div class="dialog-aksi">
            <button type="button" class="btn-batal" data-tutup>Tutup</button>
        </div>
    </dialog>

    <script src="../../js/dashboard.js"></script>
    <script src="../../js/kelola-akun.js"></script>
</body>
</html>