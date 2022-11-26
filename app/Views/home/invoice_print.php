<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/Assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/Assets/AdminLTE/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> School Shop.
                    <?php foreach($tgl as $t): ?>
                        <small class="float-right">Date: <?= $t['tanggal_pesan']; ?></small>
                    <?php endforeach; ?>    
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>School Shop.</strong><br>
                    Jalan Pagar Alam<br>
                    Bandar Lampung<br>
                    Phone: (+62) 86312361 <br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?= $checkout['nama'] ?></strong><br>
                    <?= $checkout['alamat'] ?><br>  
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Order ID:</b> <?= $checkout['id'] ?><br>
                  <?php foreach($tgl as $t): ?>
                    <b>Payment Due:</b> <?= $t['batas_bayar'] ?><br>
                  <?php endforeach; ?>
                  <!-- <b>Account:</b> 968-34567 -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($pesanan as $psn): ?>
                        <tr>
                        <td><?= $psn->jumlah ?></td>
                        <td><?= $psn->nama_barang ?></td>
                        <td><?= "Rp ". number_format($psn->harga*$psn->jumlah,0,',','.') ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    <?php foreach($bank as $b):?>
                        <?= $b['nama_bank']."  No Rek:".$b['no_rek'] ?><br>
                    <?php endforeach ?>
                  </p>
                 
                </div>
                <!-- /.col -->
                <div class="col-6">
                    <?php foreach($tgl as $t): ?>
                    <p class="lead">Amount Due <?= $t['batas_bayar'] ?> </p><br>
                  <?php endforeach; ?>
                  

                  <div class="table-responsive">
                    <table class="table">
                    <?php $subtotal=0;foreach($pesanan as $psn): ?>
                      <?php $subtotal = $subtotal + ($psn->harga*$psn->jumlah); ?>
                    <?php endforeach; ?>
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?= "Rp ". number_format($subtotal,0,',','.') ?></td>
                      </tr>
                      <tr>
                        <th>Ongkir:</th>
                        <td><?= "Rp ".number_format($checkout['ongkir'],0,',','.') ?></td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td><?= "Rp ".number_format($subtotal+$checkout['ongkir'],0,',','.') ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.invoice -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
