//mengubah objek menjadi json
let mahasiswa = {
    nama: "Muhammad Sulthon Mufti",
    nim: "2100018213",
    email: "muhammad2100018213@webmail.uad.ac.id"
}

//latihan pertama ===============================
//console.log(mahasiswa); //jika menggunakan console.log(mahasiswa); ini maka
                          //dapat dilihat pada halaman klik kanan->inspeksi->pilih konsol
                          //maka akan terlihat objek di bagian console 

        
//latihan kedua ===============================
//console.log(JSON.stringify(mahasiswa)); //maka objek berubah menjadi json


//latihan ketiga ===============================
//sekarang coba dari JSON ke objek dengan menggunkan data dari coba.json
// let coba = new XMLHttpRequest();
// coba.onreadystatechange = function(){
//     if(coba.readyState == 4 && coba.status == 200){
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa)
//     }
// }
// coba.open('GET', 'coba.json', true);
// coba.send();



//latihan keempat ===============================
//sekarang kita menggunakan Jquery
$.getJSON('coba.json', function(data){
    console.log(data);
})