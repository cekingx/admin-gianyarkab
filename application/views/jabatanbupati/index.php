<title>Jabatan Bupati</title>

<!--begin::Subheader-->
<div class="subheader min-h-lg-175px pt-5 pb-7 subheader-transparent" id="kt_subheader">
    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Details-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Title-->
                <h2 class="text-white font-weight-bold my-2 mr-5">JABATAN BUPATI</h2>
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
                <div class="card-title">Daftar Bupati Gianyar</div>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="<?= base_url('/admin/jabatan-bupati/create') ?>" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                            <!--begin::Svg Icon | path:../../../../../../../../metronic/themes/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" cx="9" cy="15" r="6" />
                                    <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        Tambah Bupati
                    </a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Masa Jabatan</th>
                            <th>Tanggal</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($jabatanbupati as $jabatanbupati): ?>
                        <tr>
                            <td><?= $jabatanbupati['jabatan_bupati_id'] ?></td>
                            <td><?= $jabatanbupati['jabatan_bupati_nama'] ?></td>
                            <td>
                                <img 
                                    src="http://localhost/upload/jabatan_bupati/<?= $jabatanbupati['jabatan_bupati_foto'] ?>"  
                                    alt="<?= $jabatanbupati['jabatan_bupati_foto'] ?>"
                                >
                            </td>
                            <td><?= $jabatanbupati['jabatan_bupati_masa_jabatan'] ?></td>
                            <td><?= $jabatanbupati['jabatan_bupati_tanggal'] ?></td>
                            <td>
                                <a 
                                    href="<?= base_url("/admin/jabatan-bupati/edit/") . $jabatanbupati['jabatan_bupati_id'] ?>"
                                    class="btn btn-warning"
                                >Update</a>
                                <a 
                                    href="<?= base_url("/admin/jabatan-bupati/delete/") . $jabatanbupati['jabatan_bupati_id'] ?>" 
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