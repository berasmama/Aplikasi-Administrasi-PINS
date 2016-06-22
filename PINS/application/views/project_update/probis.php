<div class="row">
<div class="col-lg-12">
<h1>Proposal Bisnis</h1>
<form action="<?php echo base_url().'index.php/project/do_update_probis/'.$this->uri->segment(3) ?>" method="post" >
<label>Nama Project : </label><input type="text" name="nama_project" class="form-control" value="<?php echo $nama_project ?>" >
  <table  class="table">
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
      <td><input type="text" class="form-control" name="probis_1" value="<?php echo $probis_1 ?>"></td>
    </tr>
    <tr>
      <td colspan="4" bgcolor="#f5f5f5"><center><b>PROPOSAL BISNIS</b></center></td>
    </tr>
  </table>

  <table class="table">
    <tr>
      <td>Nama & alamat pemberi kerja/ pembeli barang</td>
      <td>Nama & alamat pelaksana kerja/ penyedia barang</td>
    </tr>
    <tr>
      <td>
        PT Telekomunikasi Indonesia, Tbk <br>
        Divisi Enterprise Service <br>
        Gedung Menara Multimedia,Lantai 2 <br>
        Jl. Kebon Sirih No.12 <br>
        Tel.: 021 3866006 ;   Fax.:021 3805800
      </td>
      <td>
        PT PINS INDONESIA <br>
        Plaza Kuningan, Annex Building, Lantai 7 <br>
        Jl. H.R. Rasuna Said Kav. C11- C14 Jakarta 12940 <br>
        Tel. 021 520 2560; Fax. 021 5292 0156
      </td>
    </tr>
  </table>

  <table class="table">
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
        <td><input type="text" class="form-control" name="probis_2" value="<?php echo $probis_2 ?>"></td>
      </tr>
      <tr>
        <td>Customer</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="probis_3" value="<?php echo $probis_3 ?>"></td>
      </tr>
      <tr>
        <td>Nama Pekerjaan</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="probis_4" value="<?php echo $probis_4 ?>"></td>
      </tr>
      <tr>
        <td>Lingkup Pekerjaan</td>
        <td>:</td>
        <td><input type="text" class="form-control" name="probis_5" value="<?php echo $probis_5 ?>"></td>
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
      <td>Penyediaan barang dan jasa diserahkan dan dilaksanakan sesuai ketentuan <input type="text" class="form-control" name="probis_6" value="<?php echo $probis_6 ?>"></td>
    </tr>
    <tr>
      <td>3.</td>
      <td><b>Rencana jangka waktu pelaksanaan pekerjaan</b></td>
    </tr>
    <tr>
      <td></td>
      <td>Waktu delivery (ready to service) paling lambat <input type="text" class="form-control" name="probis_7" value="<?php echo $probis_7 ?>">, masa kontrak layanan selama <input type="text" class="form-control" name="probis_8" value="<?php echo $probis_8 ?>"> sejak <input type="text" class="form-control" name="probis_9" value="<?php echo $probis_9 ?>"></td>
    </tr>
    <tr>
      <td>4.</td>
      <td><b>Perhitungan Bisnis</b></td>
    </tr>
    <tr>
      <td></td>
      <td>
        <table class="table">
          <tr>
            <td><b>Estimasi Nilai Project</b></td>
            <td><input type="text" class="form-control" name="probis_10" value="<?php echo $probis_10 ?>"></td>
          </tr>
          <tr>
            <td>OTC & Monthly</td>
            <td><input type="text" class="form-control" name="probis_11" value="<?php echo $probis_11 ?>"></td>
          </tr>
          <tr>
            <td><b>COGS</b></td>
            <td><input type="text" class="form-control" name="probis_12" value="<?php echo $probis_12 ?>"></td>
          </tr>
          <tr>
            <td>OTC & Monthly</td>
            <td><input type="text" class="form-control" name="probis_13" value="<?php echo $probis_13 ?>"></td>
          </tr>
          <tr>
            <td><b>Indirect</b></td>
            <td><input type="text" class="form-control" name="probis_14" value="<?php echo $probis_14 ?>"></td>
          </tr>
          <tr>
            <td>Marketing</td>
            <td><input type="text" class="form-control" name="probis_15" value="<?php echo $probis_15 ?>"></td>
          </tr>
          <tr>
            <td>PM</td>
            <td><input type="text" class="form-control" name="probis_16" value="<?php echo $probis_16 ?>"></td>
          </tr>
          <tr>
            <td>OMS</td>
            <td><input type="text" class="form-control" name="probis_17" value="<?php echo $probis_17 ?>"></td>
          </tr>
          <tr>
            <td>BUA</td>
            <td><input type="text" class="form-control" name="probis_18" value="<?php echo $probis_18 ?>"></td>
          </tr>
          <tr>
            <td><b>Total Cost</b></td>
            <td><input type="text" class="form-control" name="probis_19" value="<?php echo $probis_19 ?>"></td>
          </tr>
          <tr>
            <td><b>Ebitda</b></td>
            <td><input type="text" class="form-control" name="probis_20" value="<?php echo $probis_20 ?>"></td>
          </tr>
          <tr>
            <td><b>Ebitda Margin</b></td>
            <td><input type="text" class="form-control" name="probis_21" value="<?php echo $probis_21 ?>"></td>
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
              <li>OTC sebesar <input type="text" class="form-control" name="probis_22" value="<?php echo $probis_22 ?>"> termasuk PPN 10% </li>
              <li>
                Monthly (Per bulan) sebesar <input type="text" class="form-control" name="probis_23" value="<?php echo $probis_23 ?>"> termasuk PPN 10%
              </li>
            </ul>
          </li>
          <li>Pengeluaran (Pembayaran kepada mitra dan biaya lain – lain):
            <ul>
              <li>OTC sebesar <input type="text" class="form-control" name="probis_24" value="<?php echo $probis_24 ?>"> termasuk PPN 10%</li>
              <li>Monthly (Per bulan) sebesar <input type="text" class="form-control" name="probis_25" value="<?php echo $probis_25 ?>"> termasuk PPN 10%</li>
            </ul>
          </li>
          <li>Biaya Indirect Cost sebesar <input type="text" class="form-control" name="probis_26" value="<?php echo $probis_26 ?>"> </li>
        </ol>
      </td>
    </tr>
    <tr>
      <td>6.</td>
      <td><input type="text" class="form-control" name="probis_27" value="<?php echo $probis_27 ?>"></td>
    </tr>
  </table>

  <table class="table table-bordered">
    <tr>
      <th>NO</th>
      <th>I/R/A</th>
      <th>NAMA & JABATAN</th>
      <th>TANDA-TANGAN & TANGGAL</th>
    </tr>
    <tr>
      <td>1.</td>
      <td>INITIATOR/KONSEPTOR</td>
      <td><u>Nama : <input type="text" class="form-control" name="probis_28" value="<?php echo $probis_28 ?>"></u>
      <br>Jabatan : <input type="text" class="form-control" name="probis_29" value="<?php echo $probis_29 ?>">
      </td>
      <td></td>
    </tr>
    <tr>
      <td>2.</td>
      <td>INITIATOR/KONSEPTOR</td>
      <td><u>Nama : <input type="text" class="form-control" name="probis_30" value="<?php echo $probis_30 ?>"></u>
      <br>Jabatan : <input type="text" class="form-control" name="probis_31" value="<?php echo $probis_31 ?>">
      </td>
      <td></td>
    </tr>
    <tr>
      <td>3.</td>
      <td>REVIEWER</td>
      <td><u>Nama : <input type="text" class="form-control" name="probis_32" value="<?php echo $probis_32 ?>"></u>
      <br>Jabatan : <input type="text" class="form-control" name="probis_33" value="<?php echo $probis_33 ?>">
      </td>
      <td></td>
    </tr>
    <tr>
      <td>4.</td>
      <td>APPROVER</td>
      <td><u>Nama : <input type="text" class="form-control" name="probis_34" value="<?php echo $probis_34 ?>"></u>
      <br>Jabatan : <input type="text" class="form-control" name="probis_35" value="<?php echo $probis_35 ?>">
      </td>
      <td></td>
    </tr>
  </table>
  <input type="submit" class="btn btn-primary" value="Preview" name="preview">
  <input type="submit" class="btn btn-warning" value="Save" name="save">
  </form>
  </div>
</div>