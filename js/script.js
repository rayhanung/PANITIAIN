const form = document.getElementById("form-daftar");
const password = document.getElementById("password");
const konfirmasi = document.getElementById("konfirmasi");
const tombol = document.getElementById("lihat");
const pesan = document.getElementById("pesan-error");

// tampilkan / sembunyikan password
tombol.addEventListener("click", () => {
    const tersembunyi = password.type === "password";
    password.type = tersembunyi ? "text" : "password";
    konfirmasi.type = tersembunyi ? "text" : "password";
    tombol.textContent = tersembunyi ? "Sembunyi" : "Lihat";
});

// cek password sama sebelum form dikirim
form.addEventListener("submit", (e) => {
    if (password.value !== konfirmasi.value) {
        e.preventDefault();
        pesan.textContent = "Password tidak sama.";
        konfirmasi.focus();
    } else {
        pesan.textContent = "";
    }
});

// tampilkan kolom kode hanya untuk panitia
const radioPeran = document.querySelectorAll('input[name="peran"]');
const kolomKode = document.getElementById("kolom-kode");
const inputKode = document.getElementById("kode");

radioPeran.forEach((radio) => {
  radio.addEventListener("change", () => {
    const panitia =
      document.querySelector('input[name="peran"]:checked').value === "panitia";

    kolomKode.hidden = !panitia;     // tampil / sembunyi
    inputKode.required = !panitia ? false : true;  // wajib hanya untuk panitia
    if (!panitia) inputKode.value = ""; // kosongkan kalau balik ke mahasiswa
  });
});