<!DOCTYPE html>
<html>

<head>
    <title>Pendaftaran Diterima</title>
</head>

<body>
    <h2>Halo, {{ $nama }}</h2>
    <p>Selamat! Kami dengan senang hati memberitahukan bahwa data Anda telah memenuhi seluruh syarat dan kebijakan yang
        berlaku. Dengan ini, Anda resmi terdaftar dalam sistem kami. Silakan lanjutkan dengan proses selanjutnya sesuai
        dengan ketentuan yang telah ditetapkan.</p>
    <br>
    <p>Silakan login melalui link berikut:</p>
    <a href="{{ $login_url }}"
        class="padding: 10px; border-radius: 10px; background-color: #28a745; color: white; text-decoration: none;">Login
        Sekarang</a>
    <p>Terima kasih!</p>
</body>

</html>
