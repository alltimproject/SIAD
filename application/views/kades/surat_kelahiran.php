<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-12 mb-1">
    <h2 class="content-header-title">Surat Kelahiran</h2>
  </div>
  <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
    <div class="breadcrumb-wrapper col-xs-12">

    </div>
  </div>
</div>

<div class="content-body">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Data Surat Kelahiran</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive" style="height: 400px;">
        <table class="table" id="t_kelahiran" style="font-size: 11px">
          <thead class="bg-purple" style="color: white;">
            <tr>
              <th>No Surat</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Anak ke</th>
              <th>Nama Ibu</th>
              <th>Nama Ayah</th>
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
  function load_kelahiran()
  {
    $.ajax({
      url:'<?= base_url().'json/json_kelahiran' ?>',
      type:'POST',
      dataType:'JSON',
      success:function(data)
      {
        var html = '';
        if(data.kelahiran.length <=0 ){
          html += '<tr><td colspan="7">Tidak ada data</td></tr>';
        }else{
          $.each(data.kelahiran, function(key, value) {
            html += '<tr>'+
                      '<td>'+value.no_surat+'</td>'+
                      '<td>'+value.nama_penduduk+'</td>'+
                      '<td>'+value.tgl_surat+'</td>'+
                      '<td>'+value.anak_ke+'</td>'+
                      '<td>'+value.nama_penduduk+'</td>'+
                      '<td> </td>'+
                      '<td> </td>'+
                     '</tr>';
          });
        }
        $('#t_kelahiran tbody').html(html);
      }

    });
  }

  $(document).ready(function(){
    load_kelahiran();
  });

</script>
