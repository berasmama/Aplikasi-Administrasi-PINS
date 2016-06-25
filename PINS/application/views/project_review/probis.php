<?php 
if($this->uri->segment(4) == "print"){
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
}
?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
<title><?php echo $nama_project; ?></title>
<div class="row">
<div class="col-lg-12">
  <table  class="table" width="100%">
    <tr>
      <td colspan="3" width="70%">Unit Public Sector, Finance & Construction Services </td>
      <td rowspan="3" width="30%"><img src="<?php echo base_url()?>assets/img/logo.jpg" class="img-responsive"></td>
    </tr>
    <tr>
      <td>Ref. No.</td>
      <td>:</td>
      <td></td>
    </tr>
    <tr>
      <td>Tanggal (<i>date</i>)</td>
      <td>:</td>
      <td><?php echo $probis_1; ?></td>
    </tr>

  </table>

  <table class="table"  width="100%">
      <tr>
      <td colspan="2" bgcolor="#f5f5f5"><center><b>PROPOSAL BISNIS</b></center></td>
    </tr>
    <tr>
      <td>Nama & alamat pemberi kerja/ pembeli barang</td>
      <td bgcolor="#f5f5f5">Nama & alamat pelaksana kerja/ penyedia barang</td>
    </tr>
    <tr>
      <td>
        PT Telekomunikasi Indonesia, Tbk <br>
        Divisi Enterprise Service <br>
        Gedung Menara Multimedia,Lantai 2 <br>
        Jl. Kebon Sirih No.12 <br>
        Tel.: 021 3866006 ;   Fax.:021 3805800
      </td>
      <td bgcolor="#f5f5f5">
        PT PINS INDONESIA <br>
        Plaza Kuningan, Annex Building, Lantai 7 <br>
        Jl. H.R. Rasuna Said Kav. C11- C14 Jakarta 12940 <br>
        Tel. 021 520 2560; Fax. 021 5292 0156
      </td>
    </tr>
  </table>

  <table class="table"  width="100%">
    <tr>
      <td>1.</td>
      <td colspan="3"><b>Ruang Lingkup Pekerjaan</b></td>
    </tr>
    <tr>
    <td></td>
    <td colspan="3">
    <table class="table">
      <tr>
        <td>End User</td>
        <td>:</td>
        <td><?php echo $probis_2; ?></td>
      </tr>
      <tr>
        <td>Customer</td>
        <td>:</td>
        <td><?php echo $probis_3; ?></td>
      </tr>
      <tr>
        <td>Nama Pekerjaan</td>
        <td>:</td>
        <td><?php echo $probis_4; ?></td>
      </tr>
      <tr>
        <td>Lingkup Pekerjaan</td>
        <td>:</td>
        <td><?php echo $probis_5; ?></td>
      </tr>
    </table>
    </td>
    </tr>
    <tr>
      <td>2.</td>
      <td colspan="3"><b>Lokasi pekerjaan/ pengiriman barang/ jasa</b></td>
    </tr>
    <tr>
    <td></td>
      <td>Penyediaan barang dan jasa diserahkan dan dilaksanakan sesuai ketentuan <?php echo $probis_6; ?></td>
    </tr>
    <tr>
      <td>3.</td>
      <td><b>Rencana jangka waktu pelaksanaan pekerjaan</b></td>
    </tr>
    <tr>
      <td></td>
      <td>Waktu delivery (ready to service) paling lambat <?php echo $probis_7; ?>, masa kontrak layanan selama <?php echo $probis_8; ?> sejak <?php echo $probis_9; ?></td>
    </tr>
    <tr>
      <td>4.</td>
      <td><b>Perhitungan Bisnis</b></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <table class="table" border="1">
          <tr bgcolor="#f5f5f5">
            <td><b>Estimasi Nilai Project</b></td>
            <td><?php echo $probis_10; ?></td>
          </tr>
          <tr>
            <td>OTC & Monthly</td>
            <td><?php echo $probis_11; ?></td>
          </tr>
          <tr bgcolor="#f5f5f5">
            <td><b>COGS</b></td>
            <td><?php echo $probis_12; ?></td>
          </tr>
          <tr>
            <td>OTC & Monthly</td>
            <td><?php echo $probis_13; ?></td>
          </tr>
          <tr bgcolor="#f5f5f5">
            <td><b>Indirect</b></td>
            <td><?php echo $probis_14; ?></td>
          </tr>
          <tr>
            <td>Marketing</td>
            <td><?php echo $probis_15; ?></td>
          </tr>
          <tr>
            <td>PM</td>
            <td><?php echo $probis_16; ?></td>
          </tr>
          <tr>
            <td>OMS</td>
            <td><?php echo $probis_17; ?></td>
          </tr>
          <tr>
            <td>BUA</td>
            <td><?php echo $probis_18; ?></td>
          </tr>
          <tr bgcolor="#f5f5f5">
            <td><b>Total Cost</b></td>
            <td><?php echo $probis_19; ?></td>
          </tr>
          <tr bgcolor="#f5f5f5">
            <td><b>Ebitda</b></td>
            <td><?php echo $probis_20; ?></td>
          </tr>
          <tr bgcolor="#f5f5f5">
            <td><b>Ebitda Margin</b></td>
            <td><?php echo $probis_21; ?></td>
          </tr>
        </table>
      </td>
    </tr>
    <tr>
      <td>5.</td>
      <td><b>Model Bisnis</b></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <ol type="a">
          <li>Pembayaran Telkom kepada PINS dilakukan dengan Pola :
            <ul>
              <li>OTC sebesar <?php echo $probis_22; ?> termasuk PPN 10% </li>
              <li>
                Monthly (Per bulan) sebesar <?php echo $probis_23; ?> termasuk PPN 10%
              </li>
            </ul>
          </li>
          <li>Pengeluaran (Pembayaran kepada mitra dan biaya lain – lain):
            <ul>
              <li>OTC sebesar <?php echo $probis_24; ?> termasuk PPN 10%</li>
              <li>Monthly (Per bulan) sebesar <?php echo $probis_25; ?> termasuk PPN 10%</li>
            </ul>
          </li>
          <li>Biaya Indirect Cost sebesar <?php echo $probis_26; ?> </li>
        </ol>
      </td>
    </tr>
    <tr>
      <td>6.</td>
      <td><?php echo $probis_27; ?></td>
    </tr>
  </table>

  <table class="table table-bordered"  width="100%">
    <tr>
      <th>NO</th>
      <th>I/R/A</th>
      <th>NAMA & JABATAN</th>
      <th>TANDA-TANGAN & TANGGAL</th>
    </tr>
    <tr>
      <td>1.</td>
      <td>INITIATOR/KONSEPTOR</td>
      <td><u>Nama : <?php echo $probis_28; ?></u>
      <br>Jabatan : <?php echo $probis_29; ?>
      </td>
      <td></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>INITIATOR/KONSEPTOR</td>
      <td><u>Nama : <?php echo $probis_30; ?></u>
      <br>Jabatan : <?php echo $probis_31; ?>
      </td>
      <td></td>
    </tr>
    <tr>
      <td>3.</td>
      <td>REVIEWER</td>
      <td><u>Nama : <?php echo $probis_32; ?></u>
      <br>Jabatan : <?php echo $probis_33; ?>
      </td>
      <td></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>APPROVER</td>
      <td><u>Nama : <?php echo $probis_34; ?></u>
      <br>Jabatan : <?php echo $probis_35; ?>
      </td>
      <td></td>
    </tr>
  </table>
  <?php
  if($this->uri->segment(4) == null){
  echo "<a href=\"javascript:history.go(-1)\">"?>
  <button class="btn btn-warning">Back</button>
  </a>
  <?php } ?>
  </div>
</div>