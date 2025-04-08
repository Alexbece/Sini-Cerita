<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Konsultasi Baru</title>
</head>
<body>
    <h2>Halo, {{ $pembayaran->dokter->nama_lengkap ?? 'Dokter' }}</h2>
    <p>Pasien <strong>{{ $pembayaran->user->nama_lengkap ?? 'Pasien Baru' }}</strong> telah membayar untuk konsultasi.</p>
    <p><strong>Harga:</strong> Rp {{ number_format($pembayaran->subtotal, 0, ',', '.') }}</p>

    <p>Silakan buka dashboard Anda untuk melanjutkan konsultasi.</p>
</body>
</html>
