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
                            <td><?= $alamat_instansi['alamat_instansi_id'] ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Instansi</td>
                            <td><?= $alamat_instansi['alamat_instansi_nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?= $alamat_instansi['alamat_instansi_alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td><?= $alamat_instansi['alamat_instansi_telp'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= $alamat_instansi['alamat_instansi_email'] ?></td>
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