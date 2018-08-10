<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-12 mb-1">
    <h2 class="content-header-title">Penduduk</h2>
  </div>
  <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
    <div class="breadcrumb-wrapper col-xs-12">

    </div>
  </div>
</div>

<div class="content-body">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Data Penduduk</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive" style="height: 400px;">
        <table class="table" id="t_penduduk" style="font-size: 11px">
          <thead class="bg-purple" style="color: white;">
            <tr>
              <th>ID Penduduk</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Jenis Kelamin</th>
              <th>Agama</th>
              <th>Alamat</th>
              <th>Kelurahan</th>
              <th>Kecamatan</th>
              <th>Status</th>
              <th>Pekerjaan</th>
              <th>Kewarganegaraan</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
function load_penduduk(cari)
{
  $.ajax({
    url: '<?= base_url().'json/json_penduduk' ?>',
    type: 'POST',
    dataType: 'JSON',
    data: {
      cari: cari
    },
    success: function(data){
      var html = '';

      if(data.penduduk.length <= 0){
        html += '<tr><td colspan="11">Tidak ada data</td></tr>';
      } else {

        $.each(data.penduduk, function(k, v){
          html += `<tr>`;
          html += `<td>${v.id_penduduk}</td>`;
          html += `<td>${v.nama_penduduk}</td>`;
          html += `<td>${v.tempat_lahir}, ${v.tgl_lahir}</td>`;
          html += `<td>${v.jenis_kelamin}</td>`;
          html += `<td>${v.agama}</td>`;
          html += `<td>${v.alamat}</td>`;
          html += `<td>${v.kelurahan}</td>`;
          html += `<td>${v.kecamatan}</td>`;
          html += `<td>${v.status}</td>`;
          html += `<td>${v.pekerjaan}</td>`;
          html += `<td>${v.kewarganegaraan}</td>`;
          html += `</tr>`;
        });
      }

      $('#t_penduduk tbody').html(html);
    }
  });
}

$(document).ready(function(){

  load_penduduk();

});
</script>
