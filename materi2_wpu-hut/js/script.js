$.getJSON('data/pizza.json',function(data){  //30.58
    //$.getJSON adalah semuah method untuk menyingkat $.ajax
    //tapi khusus JSON boleh pakai $.getJSON
    //mengambil json dari lokasi datanya (data/pizza.json), jika sudah diambil dan sukses maka jalankan fungsi.


    //console.log(data); //buka console maka akan terdapat objek sebanyak 15 sesuai dengan jumlah menu nya

    let menu = data.menu;
    //let menu -> membuat variabel namannya menu, untuk menghilangkan key menu nya pada objek.
    //console.log(menu); //jika kita console setelah let menu, maka isinya akan lebih ringkas (langsung ke element"nya)

    $.each(menu, function(i,data){ //parameter fungsi ada indeks dan data (isinya)
        //console.log(i) //akan tampil indeksnya
        //console.log(data) //akan tampil semua datanya

        $('#daftar-menu').append('<div class="col-md-4"><div class="card mb-3" style="width: 18rem;"><img src="img/menu/'+ data.gambar  +'" class="card-img-top"><div class="card"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text"> '+ data.deskripsi +' </p><h5 class="card-title">Rp. '+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>') //jquery tolong carikan data yang id nya daftar-menu. lalu setelah ketemu append/tambahkan diakhir sebuah element baru, elementnya adalah card pada html (code card pada html ditaruh dalam petik dan hilangkan enter agar jadi string), dan bagian php pada gambar, nama dll diganti dengan '+ data.gambar +' dll (penulisan pada javascript)
    });
    //di jquery ada method untuk melakukan perulangan/looping dengan $.each. melakukan loopnig terhadap objek.
}); 
