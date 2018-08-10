<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-12 mb-1">
    <h2 class="content-header-title">Staff</h2>
  </div>
  <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
    <div class="breadcrumb-wrapper col-xs-12">

    </div>
  </div>
</div>

<div class="content-body">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Data Staff</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive" style="height: 400px;">
        <table class="table" id="t_staff" style="font-size: 11px">
          <thead class="bg-purple" style="color: white;">
            <tr>
              <th>NIP</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Alamat</th>
              <th>Jenis Kelamin</th>
              <th>No Telepon</th>
              <th>Jabatan</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function load_staff(cari)
  {
    $.ajax({
      url: '<?= base_url().'json/json_staff' ?>',
      type: 'POST',
      dataType: 'JSON',
      data: {
        cari: cari
      },
      success: function(data){
        var html = '';

        if(data.staff.length <= 0){
          html += '<tr><td colspan="8">Tidak ada data</td></tr>';
        } else {

          $.each(data.staff, function(k, v){
            html += `<tr>`;
            html += `<td>${v.nip}</td>`;
            html += `<td>${v.nama_staff}</td>`;
            html += `<td>${v.tempat_lahir}, ${v.tgl_lahir}</td>`;
            html += `<td>${v.alamat}</td>`;
            html += `<td>${v.jenis_kelamin}</td>`;
            html += `<td>${v.no_tlp}</td>`;
            html += `<td>${v.jabatan}</td>`;
            html += `<td>${v.status}</td>`;
            html += `</tr>`;
          });
        }

        $('#t_staff tbody').html(html);
      }
    });
  }

  $(document).ready(function(){

    load_staff();

  });
</script>
