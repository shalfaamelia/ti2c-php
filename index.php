<!DOCTYPE html>
<html lang="en">

<html> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Biodata Mahasiswa</title>
    <style>
        body {
            background: url(background.jpeg);
            font-family: Georgia, 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 50%;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            background-color: beige;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header{
            text-align: center;
            font-size: 25px;
            background-color: rgb(80, 142, 121);
            color: beige;
            padding: 10px;
            border-radius: 5px 5px 5px 5px;
        }

        h4 {
            text-align: center;
            text-decoration: underline;
            font-size: 20px;
            color: rgb(80, 142, 121);
            margin-top: 20px;
            margin-bottom: -5px;
        }

        h5 { 
            text-align: center;
            font-size: 12px;
            color: rgb(80, 142, 121);
        }

        nav {
            text-align: center;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0;
            font-size: 14px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 50px;
            margin-left: 50px;
        }

        nav ul li a {
            color: rgb(80, 142, 121);
            text-decoration: none;
        }

        nav ul li a:hover {
            color: darkblue;
            text-decoration: underline;
        }

        p {
            font-size: 14px;
            padding: 10px;
            margin-bottom: 20px;
            margin-top: 20px;
            text-align: center;
            color: darkblue;
        }
    </style>
</head>

<body>
    <div class="container">
    <header> 
        <h2>Formulir Biodata Mahasiswa</h2>
    </header>
    <h4>- Menu -</h4>
    <h5>Silahkan klik menu yang diinginkan!<h5>
    <nav> 
        <ul> 
            <li><a href="form_biodata.php">★ Form Pendaftaran Baru ★</a></li> 
            <li><a href="list_biodata.php">★ List Pendaftar ★</a></li> 
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p> 
        <?php 
        if($_GET['status'] == 'sukses'){ 
            echo "Formulir biodata berhasil diinputkan!"."<br>".
            "Silahkan klik menu 'List Pendaftar' untuk melihat data yang telah diinputkan!"; 
        } else { 
            echo "Formulir biodata gagal diinputkan!"; 
        } 
        ?> 
    </p> 
    <?php endif; ?>
    </div>
</body>
</html>