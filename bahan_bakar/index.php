<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop bahan bakar</title>
    <style>
        *{
            margin: 0;
            padding: 0;      
        }

        body{
            font-family: arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .dinosaur{
            text-align:center;
            display: flex;
            flex-direction: column;
            border-top: dashed;
            border-bottom: dashed;
            margin-bottom: 10px;
        }

        .child {
            margin-bottom: 10px;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 10px;
            margin-top: 20px;
            text-align: center;
        }

        h2{
            font-size: 20px;
            margin-bottom: 6px;
            margin-top: 3px;
        }

        button{
            margin-top: 8px;
        }

        .main {
            background-color: grey;
            padding: 30px;
            margin-top: 100px;
            border-radius: 10px;
        }

        label{
            display: block;
        }
        .flex{
            display:flex;
            gap:4px;
        }
        select{
            margin-top:20px;
            
        }
    </style>
</head>
<body>
    <div class="main">
    <div class="php">
        <h1>Bahan Bakar</h1>

    </div>

    <div class="child">
        <form method="post" action="">
            <div class="flex">

                <div class="baru">
                    <label>masukkan jumlah liter</label>
                    <br>
                    <input type="number" id="liter" name="liter">
                </div>
                <div class="baruu">
    
                    <label>pilih tipe bahan bakar</label>
                    <select name="tipe">
                        <option value= "super">Shell Super</option>
                        <option value= "power">Shell V-Power</option>
                        <option value= "diesel">Shell V-Power Diesel</option>
                        <option value= "nitro">Shell V-Power Nitro</option>
                    </select><br>
                </div>
            </div>
            <button type="submit" name="submit">Hitung</button>
        </form> <br>
        <?php
    $ppn= 0.1;
    $super= 15420;
    $power= 16130;
    $diesel= 18310;
    $nitro= 16510;

    if(isset($_POST['submit'])){
        $liter = $_POST['liter'];
        $tipe = $_POST['tipe'];
        
        switch ($tipe){
            case ("super");
            $harga = ($super + ($super * $ppn));
            break;
            case ("power");
            $harga = ($super + ($power * $ppn));
            break;
            case ("diesel");
            $harga = ($super + ($diesel * $ppn));
            break;
            case ("nitro");
            $harga = ($super + ($nitro * $ppn));
            break;
            default:
            echo "mohon masukkan tipe bahan bakar";
            return;
        }
        echo "Anda membeli bahan bakar minyak tipe $tipe <br>";
        echo "Dengan jumlah : $liter <br>";
        echo "Total yang harus anda bayar Rp. $harga <br>";
        
    }
    ?>
    </div>
    </div>
</body>
</html>