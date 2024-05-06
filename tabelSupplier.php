<?php
include 'koneksi.php';
$sql = "select * from supplier";
$hasil =  mysqli_query($conn,$sql);
?>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Headings-->
                    
                    <!-- DataTales Example -->
                    <div class="shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row p-3 flex justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Supplier</h6>
                                    <button 
                                        type="button"
                                        class="btn btn-success" 
                                        id="btnTambahBarang" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modalAddBarang"
                                        >Tambah</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama Sales</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Telephone Sales</th>
                                            <th>Telephone Kantor</th>
                                            <th>Barang</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                    <?php                                        
                                    if(mysqli_num_rows($hasil)>0)
                                    {
                                        while($isi=mysqli_fetch_assoc($hasil))
                                        {
                                            echo '<tr><td>';
                                            echo $isi["kodesupp"];
                                            echo '</td><td>';
                                            echo $isi["namasales"];
                                            echo '</td><td>';
                                            echo $isi["namaperusahaan"];
                                            echo '</td><td>';
                                            echo $isi["tlpsales"];
                                            echo '</td><td>';
                                            echo $isi["tlpkantor"];
                                            echo '</td><td>';
                                            echo $isi["email"];
                                            echo '</td><td>';
                                            echo '<button class="btnUpdateSupp btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">U</button>';
                                            echo '</td></tr>';     
                                        }
                                    }
                                    ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Modal Tambah Barang-->
    <div class="modal fade" id="modalAddBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAddBarang" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Supplier</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="formBarang">
                    <form target="_blank" method="post" autocomplete="on">
                        
                        <label for="kode" class="form-label">Kode:</label>
                        <input type = "text" id="kodesuppadd"  class="form-control">
                        
                        <label for="nama" class="form-label">Nama Sales:</label>
                        <input type = "text" id="nmsalessupp" class="form-control"><br>
                        
                        <label for="satuan" class="form-label">Nama Perusahaan:</label>
                        <input type = "text" id="nmperusahaansupp" class="form-control"><br>
                        
                        <label for="hargabeli" class="form-label">telephone Sales:</label>
                        <input type = "text" id="tlpsupp" class="form-control"><br><br>

                        <label for="hargajual" class="form-label">Telephone Kantor:</label>
                        <input type = "text" id="tlpkantorsupp" class="form-control"><br><br>
                    
                        <label for="hargajual" class="form-label">Barang:</label>
                        <input type = "text" id="emailsupp" class="form-control"><br><br>
                    
                    </form>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="save" >Save</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Modal Update Barang-->
    <div class="modal fade" id="ModalUpdateBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Supplier</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="formBarang">
                <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">
                        <label for="kode" class="form-label">Kode:</label>
                        <input type = "text" id="kode"  readonly class="form-control">
                        
                        <label for="nama" class="form-label">Nama Sales:</label>
                        <input type = "text" id="nmsales" class="form-control"><br>
                        
                        <label for="satuan" class="form-label">Nama Perusahaan:</label>
                        <input type = "text" id="nmperusahaan" class="form-control"><br>
                        
                        <label for="hargabeli" class="form-label">Telephone Sales:</label>
                        <input type = "text" id="tlp" class="form-control"><br><br>

                        <label for="hargajual" class="form-label">Telephone Kantor:</label>
                        <input type = "text" id="tlpkantor" class="form-control"><br><br>

                        <label for="hargajual" class="form-label">Email:</label>
                        <input type = "text" id="email" class="form-control"><br><br>
                    
                </form>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="delete" >Delete</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="update" >Update</button>
                </div>
        </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <script>
       $(document).ready(function () {        
       $('#save').click(function () {
        var kd = $('#kodesuppadd').val();
        var nm = $('#nmsalessupp').val();
        var nmsupp = $('#nmperusahaansupp').val();
        var tlpsales = $('#tlpsupp').val();
        var tlpkantorsupp = $('#tlpkantorsupp').val();
        var email = $('#emailsupp').val();
        console.log(kd);
       $.post("simpanSupplier.php",{kodesupp:kd, namasales:nm, namaperusahaan:nmsupp, tlpsales:tlpsales, tlpkantor:tlpkantorsupp, email:email
        },function(data,status)
       {
         alert("sukses");    
         $('#isi').load("tabelSupplier.php");
       });
          });


        $('#update').click(function () {
        var kd1 = $('#kode').val();
        var nm1 = $('#nmsales').val();
        var nmsupp1 = $('#nmperusahaan').val();
        var tlpsales1 = $('#tlp').val();
        var tlpkantorsupp1 = $('#tlpkantor').val();
        var email1 = $('#email').val();
        console.log(kd1);
        $.post("ubahSupplier.php",{kodesupp:kd1, namasales:nm1, namaperusahaan:nmsupp1, tlpsales:tlpsales1, tlpkantor:tlpkantorsupp1, email:email1
        },function(data,status)
        {
         alert("Update Sukses");    
         $('#isi').load("tabelSupplier.php");
        });
          });


        $('#delete').click(function () {
        var kd = $('#kode').val();
        var nm = $('#nmsales').val();
        var nmsupp = $('#nmperusahaan').val();
        var tlpsales = $('#tlp').val();
        var tlpkantorsupp = $('#tlpkantor').val();
        var email = $('#email').val();
        console.log(kd);
       $.post("hapusSupplier.php", {kodesupp:kd, namasales:nm, namaperusahaan:nmsupp, tlpsales:tlpsales, tlpkantor:tlpkantorsupp, email:email
        },function(data,status)
       {
         alert("Hapus Sukses");    
         $('#isi').load("tabelSupplier.php");
       });
          });



        //----- AMBIL DATA DARI TABEL SET KE EDIT TEXT
        $("#dataTable").on("click", ".btnUpdateSupp", function () {
           // $("#kodebr").val("tess");
            let closestTR = $(this).closest("tr").children(0);
			let kode = closestTR.eq(0).text();
			let nama = closestTR.eq(1).text();
			let nmperusahaan = closestTR.eq(2).text();
			let tlp = closestTR.eq(3).text();
            let tlpkantor = closestTR.eq(4).text();
            let email = closestTR.eq(5).text();
			
			$("#kode").val(kode);
			console.log($("#kode").val());

			// ambil value (id) dari select
			let currentSelect = $(this);
			let id = currentSelect.val();

			$("#nmsales").val(nama);
			$("#nmperusahaan").val(nmperusahaan);
			$("#tlp").val(tlp);
            $("#tlpkantor").val(tlpkantor);
            $("#email").val(email);

        });
        
        
        });



    </script>
</body>

