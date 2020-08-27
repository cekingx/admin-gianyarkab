<title>Kontak Person</title>

<!--begin::Subheader-->
<div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Title-->
                <h2 class="text-white font-weight-bold my-2 mr-5">KONTAK PERSON</h2>
                <!--end::Title-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Details-->
    </div>
</div>
<!--end::Subheader-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <!-- begin::notification -->
        <?php if(isset($message)) {
            echo('
            <div class="alert alert-success alert-dismissable fade show" role="alert">'
                . $message .
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            ');
        } ?>
        <!-- end::notification -->
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">Daftar Aduan</div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Judul</th>
                            <th>Isi Aduan</th>
                            <th>Tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($kontak as $kontak): ?>
                        <tr>
                            <td><?= $kontak['kontak_person_id'] ?></td>
                            <td>
                                <a href="<?= base_url('/admin/hubungi-kami/') . $kontak['kontak_person_id'] ?>">
                                    <?= $kontak['kontak_person_nama'] ?>
                                </a>
                            </td>
                            <td><?= $kontak['kontak_person_alamat'] ?></td>
                            <td><?= $kontak['kontak_person_email'] ?></td>
                            <td><?= $kontak['kontak_person_judul'] ?></td>
                            <td><?= $kontak['kontak_person_isi_aduan'] ?></td>
                            <td><?= $kontak['kontak_person_tanggal'] ?></td>
                            <td>
                                <a 
                                    href="<?= base_url("/admin/hubungi-kami/delete/") . $kontak['kontak_person_id'] ?>" 
                                    class="btn btn-danger"
                                >Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
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