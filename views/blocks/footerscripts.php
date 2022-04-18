<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script src="<?=BASE_URL?>/public/js/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js" crossorigin="anonymous"></script>
<script src="<?=BASE_URL?>/public/js/demo/datatables-demo.js"></script>

<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; if($actual_link==BASE_URL.'/main'):?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?=BASE_URL?>/public/js/chart-area-demo.js"></script>
<?php endif; ?>

<script src="https://unpkg.com/@popperjs/core@2.11.2/dist/umd/popper.min.js"></script>

<script src="<?=BASE_URL?>/public/js/dropzone.js"></script>
<script src="<?=BASE_URL?>/public/js/scripts.js"></script>
<script src="<?=BASE_URL?>/public/js/custom.js"></script>



