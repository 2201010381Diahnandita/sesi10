<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>
    
    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
              <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option> 
                <option value="DGM">DGM</option>
                <option value="TIPAR">TI PAR</option>
                <option value="SK">SK</option>
            </select>

        </div>

        <div>
            Hobi
            <input type="checkbox" name="musik">MUSIK
            <input type="checkbox" name="tari">TARI
            <input type="checkbox" name="baca">BACA
            <input type="checkbox" name="tidur">TIDUR
            <input type="checkbox" name="jogging">JOGGING
            <input type="checkbox" name="lari">LARI
            <input type="checkbox" name="menangis">MENANGIS
            
        </div>

        <div>
            <button type="submit">Kirim Data</button>

    </form>

    <script>
        function checkform(th){
            let f = th.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jk = f.namedItem("txJK").value;
            let jurusan = f.namedItem("txJURUSAN").value;
            let hobi_musik = f.namedItem("musik").checked;
            let hobi_tari = f.namedItem("tari").checked;
            let hobi_baca = f.namedItem("baca").checked;
            let hobi_tidur = f.namedItem("tidur").checked;
            let hobi_jogging = f.namedItem("jogging").checked;
            let hobi_lari = f.namedItem("lari").checked;
            let hobi_menangis = f.namedItem("menangis").checked;
            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JK: "+jk);
            console.log("JURUSAN: "+jurusan);
            console.log("HOBI: "+hobi_musik);
            console.log("HOBI: "+hobi_tari);
            console.log("HOBI: "+hobi_baca);
            console.log("HOBI: "+hobi_tidur);
            console.log("HOBI: "+hobi_jogging);
            console.log("HOBI: "+hobi_lari);
            console.log("HOBI: "+hobi_menangis);
            
           
            
            return false;
        }
    </script>

</body>
</html>
