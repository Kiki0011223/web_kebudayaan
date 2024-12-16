<p>Halo, {{ $order->user_name }}</p>
<p>Terima kasih telah memesan tiket berikut:</p>
<ul>
    <li>Tiket: {{ $order->kupon->nama }}</li>
    <li>Lokasi: {{ $order->kupon->lokasi }}</li>
    <li>Harga: {{ $order->kupon->harga }}</li>
</ul>
<p>Kami akan segera memproses pesanan Anda. Terima kasih!</p>
