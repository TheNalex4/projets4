<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('id', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Gabungan kolom tidak boleh mengandung kolom tambahan.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Berkas yang di unggah terlalu besar. Silahkan coba unggah berkas yang lebih kecil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-Token tidak sah. Silahkan coba kirim ulang formulir.',
    'This value is not a valid HTML5 color.' => 'Nilai ini bukan merupakan HTML5 color yang sah.',
    'Please enter a valid birthdate.' => 'Silahkan masukkan tanggal lahir yang sah.',
    'The selected choice is invalid.' => 'Pilihan yang dipilih tidak sah.',
    'The collection is invalid.' => 'Koleksi tidak sah.',
    'Please select a valid color.' => 'Silahkan pilih warna yang sah.',
    'Please select a valid country.' => 'Silahkan pilih negara yang sah.',
    'Please select a valid currency.' => 'Silahkan pilih mata uang yang sah.',
    'Please choose a valid date interval.' => 'Silahkan pilih interval tanggal yang sah.',
    'Please enter a valid date and time.' => 'Silahkan masukkan tanggal dan waktu yang sah.',
    'Please enter a valid date.' => 'Silahkan masukkan tanggal yang sah.',
    'Please select a valid file.' => 'Silahkan pilih berkas yang sah.',
    'The hidden field is invalid.' => 'Ruas yang tersembunyi tidak sah.',
    'Please enter an integer.' => 'Silahkan masukkan angka.',
    'Please select a valid language.' => 'Silahlan pilih bahasa yang sah.',
    'Please select a valid locale.' => 'Silahkan pilih local yang sah.',
    'Please enter a valid money amount.' => 'Silahkan masukkan nilai uang yang sah.',
    'Please enter a number.' => 'Silahkan masukkan sebuah angka',
    'The password is invalid.' => 'Kata sandi tidak sah.',
    'Please enter a percentage value.' => 'Silahkan masukkan sebuah nilai persentase.',
    'The values do not match.' => 'Nilainya tidak cocok.',
    'Please enter a valid time.' => 'Silahkan masukkan waktu yang sah.',
    'Please select a valid timezone.' => 'Silahkan pilih zona waktu yang sah.',
    'Please enter a valid URL.' => 'Silahkan masukkan URL yang sah.',
    'Please enter a valid search term.' => 'Silahkan masukkan kata pencarian yang sah.',
    'Please provide a valid phone number.' => 'Silahkan sediakan nomor telepon yang sah.',
    'The checkbox has an invalid value.' => 'Nilai dari checkbox tidak sah.',
    'Please enter a valid email address.' => 'Silahkan masukkan alamat surel yang sah.',
    'Please select a valid option.' => 'Silahkan pilih opsi yang sah.',
    'Please select a valid range.' => 'Silahkan pilih rentang yang sah.',
    'Please enter a valid week.' => 'Silahkan masukkan minggu yang sah.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Terjadi sebuah pengecualian otentikasi.',
    'Authentication credentials could not be found.' => 'Kredensial otentikasi tidak bisa ditemukan.',
    'Authentication request could not be processed due to a system problem.' => 'Permintaan otentikasi tidak bisa diproses karena masalah sistem.',
    'Invalid credentials.' => 'Kredensial salah.',
    'Cookie has already been used by someone else.' => 'Cookie sudah digunakan oleh orang lain.',
    'Not privileged to request the resource.' => 'Tidak berhak untuk meminta sumber daya.',
    'Invalid CSRF token.' => 'Token CSRF salah.',
    'No authentication provider found to support the authentication token.' => 'Tidak ditemukan penyedia otentikasi untuk mendukung token otentikasi.',
    'No session available, it either timed out or cookies are not enabled.' => 'Tidak ada sesi yang tersedia, mungkin waktu sudah habis atau cookie tidak diaktifkan',
    'No token could be found.' => 'Tidak ada token yang bisa ditemukan.',
    'Username could not be found.' => 'Username tidak bisa ditemukan.',
    'Account has expired.' => 'Akun telah berakhir.',
    'Credentials have expired.' => 'Kredensial telah berakhir.',
    'Account is disabled.' => 'Akun dinonaktifkan.',
    'Account is locked.' => 'Akun terkunci.',
    'Too many failed login attempts, please try again later.' => 'Terlalu banyak percobaan login yang salah, Silahkan coba lagi nanti.',
    'Invalid or expired login link.' => 'Link login salah atau sudah kadaluwarsa.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
    'Bad code value' => 'Code does not match',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Renew',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
