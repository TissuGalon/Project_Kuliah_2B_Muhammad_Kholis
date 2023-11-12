<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman User
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#ModalTambahUSer"> Tambah
                        User</button>
                </div>
            </div>
            <!-- Modal Tambah User Baru-->
            <div class="modal fade" id="ModalTambahUSer" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal Tambah User Baru-->

            <!-- Modal view -->
            <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal view -->


            <?php

            if (empty($result)) {
                echo "Data user tidak ada";
            } else {
                ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Level</th>
                                <th scope="col">No HP</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            foreach ($result as $row) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $no++; ?></th>
                                    <td>
                                        <?php echo $row['nama']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['username']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['level']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['nohp']; ?>
                                    </td>
                                    <td class="d-flex">
                                        <button class="btn btn-sm btn-info me-1" data-bs-toggle="modal"
                                            data-bs-target="#ModalView"><i class="bi bi-eye"></i></a>
                                            <button class="btn btn-sm btn-warning me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalView"><i class="bi bi-pencil"></i></a>
                                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#ModalView"><i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</div>