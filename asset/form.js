// Mendefinisikan fungsi untuk menampilkan pesan kesalahan
function printError(elemId, hintMsg) {
  document.getElementById(elemId).innerHTML = hintMsg;
}

// Mendefinisikan fungsi untuk memvalidasi form aksesoris
function validasi() {
    // Mengambil nilai dari elemen formulir
    //tambah aksesoris
    var nama = document.tmb_aksesoris_form.nama.value;
    var stok = document.tmb_aksesoris_form.stok.value;
    var harga = document.tmb_aksesoris_form.harga.value;
    
    // Mendefinisikan variabel kesalahan dengan nilai default
    var namaErr = stokErr = hargaErr = true;

    if(nama == "") {
      printError("namaErr", "Please enter your name");
    } else {
      namaErr = false;
    }
    
    if(stok == "") {
      printError("stokErr", "Tolong masukkan jumlah stok");
    } else {
      stokErr = false;
    }

    if(harga == "") {
      printError("hargaErr", "Tolong masukkan Harga");
    } else {
      hargaErr = false;
    }
    
    // Mencegah formulir dikirimkan jika ada kesalahan
    if((namaErr || stokErr || hargaErr ) == true) {
      return false;
    }
}

//validasi form katalog
function validasiKtlg() {
  // Mengambil nilai dari elemen formulir
  //tambah aksesoris
  var jenis = document.katalog_form.jenis.value;
  var bahan = document.katalog_form.bahan.value;
  var warna = document.katalog_form.warna.value;
  var merek = document.katalog_form.merek.value;
  var stok = document.katalog_form.stok.value;
  var harga = document.katalog_form.harga.value;
  
  // Mendefinisikan variabel kesalahan dengan nilai default
  var jenisErr = bahanErr = warnaErr = merekErr = stokErr = hargaErr = true;

  if(jenis == "") {
    printError("jenisErr", "Masukkan jenis Jilbab");
  } else {
    jenisErr = false;
  }

  if(bahan == "") {
    printError("bahanErr", "Masukkan bahan Jilbab");
  } else {
    bahanErr = false;
  }

  if(warna == "") {
    printError("warnaErr", "Masukkan warna Jilbab");
  } else {
    warnaErr = false;
  }

  if(merek == "") {
    printError("merekErr", "Masukkan merek Jilbab");
  } else {
    merekErr = false;
  }
  
  if(stok == "") {
    printError("stokErr", "Tolong masukkan jumlah stok");
  } else {
    stokErr = false;
  }

  if(harga == "") {
    printError("hargaErr", "Tolong masukkan Harga");
  } else {
    hargaErr = false;
  }
  
  // Mencegah formulir dikirimkan jika ada kesalahan
  if((jenisErr || bahanErr || warnaErr || merekErr || stokErr || hargaErr ) == true) {
    return false;
  }
}