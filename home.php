<!DOCTYPE html>
<html>
<head>
    <title>Pilih Kursi - Traveloka</title>
    <style>
        .seat {
            display: inline-block;
            width: 30px;
            height: 30px;
            margin: 5px;
            background-color: #e5e5e5;
            border: 1px solid #ccc;
            text-align: center;
            line-height: 30px;
        }

        .seat.available {
            background-color: #a1d99b;
            cursor: pointer;
        }

        .seat.selected {
            background-color: #fcae91;
            cursor: default;
        }

        .seat.unavailable {
            background-color: #f7f7f7;
            cursor: default;
        }
    </style>
</head>
<body>
    <h1>Pilih Kursi - Traveloka</h1>

    <div id="seats">
        <!-- Kode untuk menampilkan kursi akan ditambahkan di sini -->
    </div>


    <script src="script.js"></script>
</body>
</html>
