<html lang="en">
    <?php
    include 'koneksi.php';
    
    $sql = "select * from karyawan";
    $hasil =  mysqli_query($conn,$sql); 
    ?>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta  name="description" content=""/>
    <meta name="author" content=""/>

    <title>SB Admin 2 - Master</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" 
    rel="stylesheet" 
    type="text/css"/>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet"/>

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" 
    rel="stylesheet"/>

</head>

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
                                <h6 class="m-0 font-weight-bold text-primary">Karyawan</h6>
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
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th>Password</th>
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
                                            echo $isi["kodekry"];
                                            echo '</td><td>';
                                            echo $isi["namakry"];
                                            echo '</td><td>';
                                            echo $isi["jabatan"];
                                            echo '</td><td>';
                                            echo $isi["tlpkry"];
                                            echo '</td><td>';
                                            echo $isi["emailkry"];
                                            echo '</td><td>';
                                            echo $isi["passwordkry"];
                                            echo '</td><td>';
                                            echo '<button class="btnUpdateKaryawan btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalUpdateBarang">U</button>';
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
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Karyawan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="formBarang">
                    <form target="_blank" method="post" autocomplete="on">
                        
                        <label for="kode" class="form-label">Kode:</label>
                        <input type = "text" id="kodekryadd"  class="form-control">
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namakryadd" class="form-control"><br>
                        
                        <!-- <label for="golongan" class="form-label">Golongan:</label>
                        <select id = "golonganadd" name=" golongan"  class="form-select">
                            <option value = "Komputer">Komputer</option>
                            <option value = "Laptop">Laptop</option>
                            <option value = "Tablet">Tablet</option>
                        </select><br> -->
                        
                        <label for="satuan" class="form-label">Jabatan:</label>
                        <input type = "text" id="jabatanadd" class="form-control"><br>
                        
                        <label for="harga" class="form-label">Telephone:</label>
                        <input type = "text" id="tlpkryadd" class="form-control"><br>
                        
                        <label for="harga" class="form-label">Email:</label>
                        <input type = "text" id="emailkryadd" class="form-control"><br>

                        <label for="harga" class="form-label">Password:</label>
                        <input type = "text" id="passwordkryadd" class="form-control"><br>

                    </form>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="save">Save</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <!-- ---------------------------- -->

    <!-- Modal Update Karyawan-->
    <div class="modal fade" id="ModalUpdateBarang" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div  class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Karyawan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="formBarang">
                    <form action="tugas1tabelbarang.html" target="_blank" method="post" autocomplete="on">
                        <label for="kode" class="form-label">Kode:</label>
                        <input type = "text" id="kodekry"  readonly class="form-control" >
                        
                        <label for="nama" class="form-label">Nama:</label>
                        <input type = "text" id="namakry" class="form-control"><br>
                           
                        <label for="satuan" class="form-label">Jabatan:</label>
                        <input type = "text" id="jabatan" class="form-control"><br>
                        
                        <label for="harga" class="form-label">Telephone:</label>
                        <input type = "text" id="tlpkry" class="form-control"><br><br>
                        
                        <label for="harga" class="form-label">Email:</label>
                        <input type = "text" id="emailkry" class="form-control"><br><br>
                        
                        <label for="harga" class="form-label">Password:</label>
                        <input type = "text" id="passwordkry" class="form-control"><br><br>
                    
                    </form>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                    <button class="btnHapusKaryawan btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalHapusBarang" id="delete">Delete</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" name="update" id="update" >Update</button>
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
        //TAMBAH       
        $('#save').click(function () {
        var kd = $('#kodekryadd').val();
        var nm = $('#namakryadd').val();
        var jb = $('#jabatanadd').val();
        var tlp = $('#tlpkryadd').val();
        var em = $('#emailkryadd').val();
        var pass = $('#passwordkryadd').val();
        console.log(kd);
        $.post("simpankaryawan.php",{kodekry:kd,namakry:nm,jabatan:jb,
        tlpkry:tlp,emailkry:em,passwordkry:pass
        },function(data,status)
            {
                alert("sukses ditambahkan");    
                $('#isi').load("tabelKaryawan.php");
            });
        });

        //UPDATE
        $('#update').click(function () {
        var kd1 = $('#kodekry').val();
        var nm1 = $('#namakry').val();
        var jb1 = $('#jabatan').val();
        var tlp1 = $('#tlpkry').val();
        var em1 = $('#emailkry').val();
        var pass1 = $('#passwordkry').val();
        
        $.post("ubahKaryawan.php",{kodekry:kd1,namakry:nm1,jabatan:jb1,
        tlpkry:tlp1,emailkry:em1,passwordkry:pass1
        },function(data,status)
            {
            alert("Sukses Terupdate");    
            $('#isi').load("tabelKaryawan.php");
            });
        });
        
        //DELETE
        $('#delete').click(function () {
        var kd = $('#kodekry').val();
        var nm = $('#namakry').val();
        var jb = $('#jabatan').val();
        var tlp = $('#tlpkry').val();
        var em = $('#emailkry').val();
        var pass = $('#passwordkry').val();
        console.log(kd);
        $.post("hapuskaryawan.php",{kodekry:kd,namakry:nm,jabatankry:jb,
        tlpkry:tlp,emailkry:em,passwordkry:pass
        },function(data,status)
        {
            alert("sukses terhapus");    
            $('#isi').load("tabelKaryawan.php");
        });
        });

        //SET KE EDIT TEXT
        $("#dataTable").on("click", ".btnUpdateKaryawan", function () {
           // $("#kodebr").val("tess");
            let closestTR = $(this).closest("tr").children(0);
			let kodekry = closestTR.eq(0).text();
			let namakry = closestTR.eq(1).text();
			let jabatan = closestTR.eq(2).text();
			let tlpkry = closestTR.eq(3).text();
            let emailkry = closestTR.eq(4).text();
            let passwordkry = closestTR.eq(5).text();
			
			$("#kodekry").val(kodekry);
			console.log($("#kodekry").val());

			// ambil value (id) dari select
			let currentSelect = $(this);
			let id = currentSelect.val();

			$("#kodekry").val(kodekry);
			$("#namakry").val(namakry);
			$("#jabatan").val(jabatan);
            $("#tlpkry").val(tlpkry);
            $("#emailkry").val(emailkry);
            $("#passwordkry").val(passwordkry);

        });
        
        
        });



    </script>
</body>