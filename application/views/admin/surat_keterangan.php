<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-12 mb-1">
    <h2 class="content-header-title">Surat Keterangan</h2>
  </div>
  <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
    <div class="breadcrumb-wrapper col-xs-12">

    </div>
  </div>
</div>

<div class="content-body">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Data Surat Keterangan</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive" style="height: 400px;">
        <table class="table" id="t_keterangan" style="font-size: 11px">
          <thead class="bg-purple" style="color: white;">
            <tr>
              <th>No Surat</th>
              <th>Nama Penduduk</th>
              <th>Tanggal</th>
              <th>Keterangan</th>
              <th>Perihal</th>
              <th>Admin</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function load_keterangan(cari)
  {
    $.ajax({
      url: '<?= base_url().'json/json_keterangan' ?>',
      type: 'POST',
      dataType: 'JSON',
      data: {
        cari: cari
      },
      success: function(data){
        var html = '';

        if(data.keterangan.length <= 0){
          html += '<tr><td colspan="6">Tidak ada data</td></tr>';
        } else {

          $.each(data.keterangan, function(k, v){
            html += `<tr>`;
            html += `<td>${v.no_surat}</td>`;
            html += `<td>${v.nama_penduduk}</td>`;
            html += `<td>${v.tgl_surat}</td>`;
            html += `<td>${v.keterangan}</td>`;
            html += `<td>${v.perihal}</td>`;
            html += `<td>${v.username}</td>`;
            html += `</tr>`;
          });
        }

        $('#t_keterangan tbody').html(html);
      }
    });
  }

  $(document).ready(function(){

    load_keterangan();

  });
</script>
