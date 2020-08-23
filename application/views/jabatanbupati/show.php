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
                            <td><?= $jabatanbupati['jabatan_bupati_id'] ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Bupati</td>
                            <td><?= $jabatanbupati['jabatan_bupati_nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td><?= $jabatanbupati['jabatan_bupati_foto'] ?></td>
                        </tr>
                        <tr>
                            <td>Masa Jabatan</td>
                            <td><?= $jabatanbupati['jabatan_bupati_masa_jabatan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td><?= $jabatanbupati['jabatan_bupati_tanggal'] ?></td>
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