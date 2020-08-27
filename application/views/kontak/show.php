<title><?= $title ?></title>

<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="card card-custom">
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Id</td>
                            <td><?= $kontak['kontak_person_id'] ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><?= $kontak['kontak_person_nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $kontak['kontak_person_alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $kontak['kontak_person_email'] ?></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><?= $kontak['kontak_person_judul'] ?></td>
                        </tr>
                        <tr>
                            <td>Isi Aduan</td>
                            <td><?= $kontak['kontak_person_isi_aduan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td><?= $kontak['kontak_person_tanggal'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->

<script>
$('.preloader').fadeOut();
</script>