<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>E-Ticket Budaya Indonesia</title>
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #fff9e6;
            line-height: 1.6;
        }

        .ticket-container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            overflow: hidden;
            position: relative;
        }

        .ticket-header {
            background: linear-gradient(135deg, #b31312, #ea906c);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .ticket-header h1 {
            font-family: 'Playfair Display', serif;
            margin: 0;
            font-size: 2.5em;
            letter-spacing: 1px;
        }

        .batik-border {
            height: 20px;
            background: url("data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h40v40H0V0zm20 20c-5.523 0-10-4.477-10-10S14.477 0 20 0s10 4.477 10 10-4.477 10-10 10zm0 20c-5.523 0-10-4.477-10-10s4.477-10 10-10 10 4.477 10 10-4.477 10-10 10z' fill='%23b31312' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .ticket-body {
            padding: 40px;
            position: relative;
        }

        .ticket-info {
            margin-bottom: 30px;
            text-align: center;
        }

        .ticket-info p {
            margin: 12px 0;
            color: #333;
            font-size: 1.1em;
            display: flex;
            justify-content: center;
            gap: 10px;
            align-items: center;
        }

        .ticket-info strong {
            font-weight: 600;
            min-width: 80px;
            text-align: right;
        }

        .ticket-details {
            background-color: #fff9f0;
            padding: 30px;
            border-radius: 10px;
            border: 1px dashed #b31312;
            margin: 0 auto;
            max-width: 600px;
        }

        .ticket-details h3 {
            text-align: center;
            color: #b31312;
            font-family: 'Playfair Display', serif;
            margin-bottom: 20px;
            font-size: 1.5em;
        }

        .ticket-details ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .ticket-details li {
            margin: 15px 0;
            color: #444;
            font-size: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            border-bottom: 1px dotted #ddd;
        }

        .ticket-details li:last-child {
            border-bottom: none;
        }

        .ticket-details li span:first-child {
            font-weight: 500;
            color: #666;
            min-width: 120px;
        }

        .footer {
            text-align: center;
            padding: 30px;
            color: #666;
            font-size: 0.95em;
            background-color: #fbfbfb;
            border-top: 1px solid #eee;
        }

        .footer p {
            margin: 8px 0;
        }

        .wayang {
            position: absolute;
            right: 20px;
            top: 20px;
            opacity: 0.1;
            width: 120px;
            height: 120px;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 0c27.614 0 50 22.386 50 50s-22.386 50-50 50S0 77.614 0 50 22.386 0 50 0zm0 20c-16.569 0-30 13.431-30 30 0 16.569 13.431 30 30 30 16.569 0 30-13.431 30-30 0-16.569-13.431-30-30-30z' fill='%23b31312'/%3E%3C/svg%3E");
        }

        .print-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            padding: 12px 25px;
            background-color: #b31312;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 6px rgba(179, 19, 18, 0.2);
        }

        .print-btn:hover {
            background-color: #921110;
        }

        @media print {
            body {
                background-color: white;
            }
            .print-btn {
                display: none;
            }
            .ticket-container {
                box-shadow: none;
            }
            .footer {
                border-top: 1px dashed #ddd;
            }
        }
    </style>
</head>
<body>
    <div class="ticket-container">
        <div class="ticket-header">
            <h1>E-Ticket Budaya Indonesia</h1>
        </div>
        <div class="batik-border"></div>
        <div class="ticket-body">
            <div class="wayang"></div>
            <div class="ticket-info">
                <p><strong>Nama:</strong> {{ $order->user_name }}</p>
                <p><strong>Email:</strong> {{ $order->user_email }}</p>
            </div>
            <div class="ticket-details">
                <h3>Detail Tiket</h3>
                <ul>
                    <li><span>Tiket</span> <span>{{ $order->kupon->nama }}</span></li>
                    <li><span>Lokasi</span> <span>{{ $order->kupon->lokasi }}</span></li>
                    <li><span>Harga</span> <span>{{ $order->kupon->harga }}</span></li>
                    <li><span>ID Tiket</span> <span>{{ $order->kupon_id }}</span></li>
                    <li><span>NO Tiket</span> <span>TD-0{{ $order->id }}</span></li>
                    <li><span>Tanggal Pemesanan</span> <span>{{ $order->created_at }}</span></li>
                    <li><span>Status</span> <span style="color: rgb(9, 175, 9)">{{ $order->status }}</span></li>
                </ul>
            </div>
        </div>
        <div class="batik-border"></div>
        <div class="footer">
            <p>Terima kasih telah memesan tiket acara budaya kami.</p>
            <p>Simpan tiket ini sebagai bukti pemesanan Anda.</p>
        </div>
    </div>
    <button onclick="printAndReturn()" class="print-btn">Cetak Tiket</button>

    <script>
        function printAndReturn() {
            window.print();
            // Menggunakan setTimeout untuk memastikan print dialog selesai
            setTimeout(function() {
                window.location.href = '../admin/table_order';
            }, 100);
        }
    </script>
</body>
</html>