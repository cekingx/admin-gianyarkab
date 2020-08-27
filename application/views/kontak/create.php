<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Buat Aduan</title>
  </head>
  <body>
    <div class="container">
        <h2>Buat Aduan</h2>
        <div class="container">
            <!-- begin::form -->
            <?= form_open('/hubungi-kami/store'); ?>
                <!-- begin::nama -->
                <div class="form-group">
                    <label for="kontak_person_nama">Nama</label>
                    <input 
                        type="text" 
                        id="kontak_person_nama" 
                        name="kontak_person_nama"
                        required
                    >
                </div>
                <!-- end::nama -->
                <!-- begin::alamat -->
                <div class="form-group">
                    <label for="kontak_person_alamat">Alamat</label>
                    <input 
                        type="text" 
                        id="kontak_person_alamat"
                        name="kontak_person_alamat"
                        required
                    >
                </div>
                <!-- end::alamat -->
                <!-- begin::email -->
                <div class="form-group">
                    <label for="kontak_person_alamat">Email</label>
                    <input 
                        type="text" 
                        id="kontak_person_email"
                        name="kontak_person_email"
                        required
                    >
                </div>
                <!-- end::email -->
                <!-- begin::judul -->
                <div class="form-group">
                    <label for="kontak_person_alamat">Judul</label>
                    <input 
                        type="text" 
                        id="kontak_person_judul"
                        name="kontak_person_judul"
                        required
                    >
                </div>
                <!-- end::judul -->
                <!-- begin::isi-aduan -->
                <div class="form-group">
                    <label for="kontak_person_alamat">Isi Aduan</label>
                    <input 
                        type="text" 
                        id="kontak_person_isi_aduan"
                        name="kontak_person_isi_aduan"
                        required
                    >
                </div>
                <!-- end::isi-aduan -->
                <button type="submit" class="btn btn-success">Simpan</button>
            <?= form_close(); ?>
            <!-- end::form -->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>