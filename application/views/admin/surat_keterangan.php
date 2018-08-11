<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-6 mb-1">
    <h2 class="content-header-title">Surat Keterangan</h2>
  </div>
  <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-6">
    <div class="breadcrumb-wrapper col-xs-12">
      <button type="button" id="simpan" class="btn btn-md btn-primary" style="float: right">Tambah</button>
    </div>
  </div>
</div>

<div class="content-body">

  <div class="card" id="card-form">
    <div class="card-header">
      <h4 class="card-title">Form Surat Keterangan</h4>
    </div>
    <div class="card-body">
      <div class="card-block">
        <form class="form-data">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="id_penduduk">ID Penduduk</label>
                <div class="input-group">
                  <input type="text" name="id_penduduk" id="id_penduduk" class="form-control border-primary" readonly>
                  <span class="input-group-addon bg-primary" id="lookup-pddk" style="color: white">
                    Cari
                  </span>
                </div>

              </div>
              <div class="form-group">
                <label for="no_surat">No Surat</label>
                <input type="text" name="no_surat" id="no_surat" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="perihal">Perihal</label>
                <textarea name="perihal" id="perihal" class="form-control border-primary" rows="8" cols="80"></textarea>
              </div>
              <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control border-primary">
              </div>

                <button type="submit" id="submit_keterangan" class=""></button>
                <button type="button" id="batal" class="btn btn-danger btn-md col-md-6">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Data Surat Keterangan</h4>
    </div>
    <div class="card-body">
      <div class="card-block" style="margin-bottom: 0px; padding-bottom: 5px;">
        <div class="form-group">
          <div class="position-relative has-icon-left">
            <input type="text" class="form-control" placeholder="Masukkan No Surat" name="cari" id="cari">
              <div class="form-control-position">
                <i class="icon-search4"></i>
              </div>
          </div>
        </div>
      </div>

      <div class="table-responsive" style="height: 400px;">
        <table class="table" id="t_keterangan" style="font-size: 11px">
          <thead class="bg-purple" style="color: white;">
            <tr>
              <th></th>
              <th>No Surat</th>
              <th>Nama Penduduk</th>
              <th>Tanggal</th>
              <th>Keterangan</th>
              <th>Perihal</th>
              <th>Input By</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade text-xs-left" id="modal-pddk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
									  <div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
											<h4 class="modal-title" id="myModalLabel17">Cari Penduduk</h4>
										  </div>
										  <div class="modal-body">
                        <div class="form-group">
                          <div class="position-relative has-icon-left">
        										<input type="text" id="cari-pddk" class="form-control" placeholder="Cari ID atau Nama" name="cari-pddk">
        										<div class="form-control-position">
        											<i class="icon-search4"></i>
        										</div>
        									</div>
                        </div>
                        <div class="table-responsive" style="height: 400px;">
                          <table class="table" id="t_penduduk" style="font-size: 11px">
                            <thead class="bg-purple" style="color: white;">
                              <tr>
                                <th></th>
                                <th>ID Penduduk</th>
                                <th>Nama</th>
                                <th>TTL</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
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
            html += `<td><a target="_blank" class="btn btn-info btn-sm" href="<?= base_url('laporan/surat_ket?no_surat=') ?>${v.no_surat}"><i class="icon-printer3"></i> PRINT </a> </td>`;
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
            html += `<td><button class="btn btn-sm btn-success" id="pilih" data-id="${v.id_penduduk}">Pilih</button></td>`
            html += `<td>${v.id_penduduk}</td>`;
            html += `<td>${v.nama_penduduk}</td>`;
            html += `<td>${v.tempat_lahir}, ${v.tgl_lahir}</td>`;
            html += `<td>${v.jenis_kelamin}</td>`;
            html += `<td>${v.agama}</td>`;
            html += `<td>${v.alamat}</td>`;
            html += `</tr>`;
          });
        }

        $('#t_penduduk tbody').html(html);
      }
    });
  }

  $(document).ready(function(){

    var save_method;

    load_keterangan();
    $('#card-form').hide();

    $('#cari').on('keyup', function(){
      var cari = $(this).val();
      load_keterangan(cari);
    });

    $('#simpan').on('click', function(){
      save_method = 'simpan';
      $('.form-data')[0].reset();
      $('#nip').focus();
      $('#submit_keterangan').removeClass().addClass('btn btn-md btn-primary col-md-6').text('Simpan');
      $('#card-form').fadeIn();
    });

    $('#batal').on('click', function(){
      $('#card-form').fadeOut();
    });

    $('#lookup-pddk').on('click', function(){
      load_penduduk();
      $('#modal-pddk').modal('show');
    });

    $('#t_penduduk').on('click', '#pilih', function(){
      var id = $(this).data('id');
      $('#id_penduduk').val(id);
      $('#modal-pddk').modal('hide');
    });

    $('.form-data').on('submit', function(e){
      e.preventDefault();
      var submit = true;

      $(this).find('input[type="text"], input[type="number"], input[type="date"], select, textarea').each(function(){
        if($(this).val() == ''){
          submit = false;
        }
      });

      if(submit == true){
        $.ajax({
          url: '<?= base_url().'admin/response_keterangan/' ?>'+save_method,
          type: 'POST',
          data: $(this).serialize(),
          success: function(data){
            if(data == 'berhasil')
            {
              alert(`Surat keterangan berhasil di${save_method}`);
              load_keterangan();
              $('#card-form').fadeOut();
            } else {
              alert(`Surat keterangan tidak berhasil di${save_method}`);
            }
            // alert(data);
          }
        });
      } else {
        alert('Harap mengisi data dengan lengkap');
      }
    });

  });
</script>
