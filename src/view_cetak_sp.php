<?php include 'koneksi.php';?>
<?php
	if(isset($_GET['No_Surat_Pindah'])){
		$id=$_GET['No_Surat_Pindah'];
		$sql = "SELECT * FROM surat_pindah WHERE No_Surat_Pindah='$id'";
		$query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $id=$data['No_Surat_Pindah'];
        $nik = $data['NIK'];
		$nama = $data['Nama'];
		$tempat = $data['Tempat_Lahir'];
        $tgl = $data['Tanggal_Lahir'];
        $alamat = $data['Alamat'];
        $alamat_baru = $data['Alamat_baru'];
        $tgl_pindah = $data['Tgl_pindah'];
        $Alasan = $data['Alasan_pindah'];
        $tgl2 = $data['Tgl_permohonan'];
        $tgl3 = $data['Tgl_cetak'];
        $format1 = date('Y', strtotime($tgl2));
        $format2 = date('d F Y', strtotime($tgl));
        $format3 = date('d F Y', strtotime($tgl2));
        $status = $data['status'];
        $format4 = date('d F Y', strtotime($tgl3));
        $format5 = date('d F Y', strtotime($tgl_pindah));
        if($format4==0){
            $format4="kosong";
        }elseif($format4==1){
           $format4;
        }
	}
?>
<style>
    @media print {
        .btn-sudah {
            display: none;
        }
    }
</style>
<!-- ... Kode selanjutnya ... -->


 <div class="panel-header bg-primary-gradient mt=10">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold"></h2>
							</div>
						</div>
					</div>
                </div>
                <div class="page-inner mt--5">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
                                <table border="1" align="center">
                                    <table border="0" align="center">
                                        <tr>
                                        <td><img src="Image/LOGO.png" width="70" height="87" alt=""></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                            <td>
                                                <center>
                                                    <font size="4">PEMERINTAHAN KOTA BANDA ACEH</font><br>
                                                    <font size="4">KECAMATAN SUDAH JADI</font><br>
                                                    <font size="5"><b>GAMPONG ITEK</b></font><br>
                                                    <font size="2"><i>JL. Loram No.9 Itek 59318</i></font><br>
                                                </center>
                                            </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="45"><hr color="black"></td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table border="0" align="center">
                                        <tr>
                                            <td>
                                                <center>
                                                    <font size="4"><b>SURAT KETERANGAN PINDAH</b></font><br>
                                                    <hr style="margin:0px" color="black">
                                                    <span>Nomor : 045.2 / <?php echo $id;?> / 29.07.05</span>
                                                </center>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <br>
                                    <table border="0" align="center">
                                        <tr>
                                            <td>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Geuchik Gampong Itek, Kecamatan <br> Sudah Jadi, Menerangkan bahwa :
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <table border="0" align="center">
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td><?php echo $nama;?></td>
                                        </tr>
                                        <tr>
                                            <td>No. NIK</td>
                                            <td>:</td>
                                            <td><?php echo $nik;?></td>
                                        </tr>
                                        <tr>
                                            <td>TTL</td>
                                            <td>:</td>
                                            <td><?php echo $tempat.", ".$format2;?></td>
                                        </tr>
                                        <tr>
                                        <td>Alamat</td>
                                            <td>:</td>
                                            <td><?php echo $alamat;?></td>
                                        </tr>
                                        <tr>
                                        <td>Alamat Baru</td>
                                            <td>:</td>
                                            <td><?php echo $alamat_baru;?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Warga</td>
                                            <td>:</td>
                                            <td>Indonesia</td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Tanggal Pindah</td>
                                            <td>:</td>
                                            <td><?php echo $format5;?></td>
                                        </tr>
                                        <tr>
                                            <td>Alasan Pindah</td>
                                            <td>:</td>
                                            <td><?php echo $Alasan;?></td>
                                        </tr>
                                        <tr>
                                           
                                        </tr>
                                    </table>
                                    <br>
                                    <table border="0" align="center">
                                        <tr>
                                            <td>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan<br>&nbsp;&nbsp;&nbsp;&nbsp;untuk sebagaimana mestinya.
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <br>
                                    <table border="0" align="center">
                                        <tr>
                                            <th></th>
                                            <th width="100px"></th>
                                            <th>Sudah Jadi, <?php echo $format4;?></th>
                                        </tr>
                                        <tr>
                                            <td>Tanda tangan <br> Yang bersangkutan </td>
                                            <td></td>
                                            <td>Gechik Gampong Itek</td>
                                        </tr>
                                        <tr>
                                            <td rowspan="15"></td>
                                            <td></td>
                                            <td rowspan="15"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr><tr>
                                            <td></td>
                                        </tr><tr>
                                            <td></td>
                                        </tr><tr>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b style="text-transform:uppercase"><u>(<?php echo $nama;?>)</u></b></td>
                                            <td></td>
                                            <td><b><u>(MONTU ILYAS)</u></b></td>
                                        </tr>
                                    </table>
                                </table>

								</div>
							</div>
						</div>
					</div>
			</div>
    <title>CETAK SURAT PINDAH</title>
    <link rel="icon" href="Image/LOGO.PNG" type="image/x-icon">
    <?php
    $id=$_GET['No_Surat_Pindah'];
    $sql = "UPDATE surat_pindah SET status = 1 WHERE No_Surat_Pindah = $id";
    $query = mysqli_query($conn,$sql);
    ?>
   <script>
    window.print();
</script>