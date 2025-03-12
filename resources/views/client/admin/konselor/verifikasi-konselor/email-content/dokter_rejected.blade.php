<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Ditolak</title>
</head>

<body>
    <h2>Halo, {{ $nama }}</h2>
    <p>Mohon maaf, setelah melalui proses verifikasi, kami menemukan bahwa data yang Anda berikan belum memenuhi syarat
        dan kebijakan yang telah ditetapkan. Kami mengundang Anda untuk meninjau kembali dokumen yang diperlukan dan
        melakukan pendaftaran ulang sesuai dengan ketentuan yang berlaku.</p>
    <p>Silakan periksa kembali dokumen Anda dan daftar ulang melalui link berikut:</p>
    <a href="{{ $register_url }}"
        style="padding: 10px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 10px;">Daftar Ulang</a>
    <p>Terima kasih.</p>
</body>

</html>
