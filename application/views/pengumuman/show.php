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
                            <td><?= $pengumuman['pengumuman_id'] ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Judul</td>
                            <td><?= $pengumuman['pengumuman_judul'] ?></td>
                        </tr>
                        <tr>
                            <td>Isi</td>
                            <td><?= $pengumuman['pengumuman_isi'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td><?= $pengumuman['pengumuman_tanggal'] ?></td>
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