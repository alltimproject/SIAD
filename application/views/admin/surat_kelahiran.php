<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-6 mb-1">
    <h2 class="content-header-title">Surat Kelahiran</h2>
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
      <h4 class="card-title">Form Surat Kelahiran</h4>
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
                <label for="anak_ke">Anak Ke</label>
                <input type="number" name="anak_ke" id="anak_ke" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="hari">Hari</label>
                <select name="hari" id="hari" class="form-control border-primary">
                  <option value=""></option>
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                  <option value="Minggu">Minggu</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pukul">Pukul</label>
                <input type="text" name="pukul" id="pukul" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="id_ibu">ID Ibu</label>
                <div class="input-group">
                  <input type="text" name="id_ibu" id="id_ibu" class="form-control border-primary" readonly>
                  <span class="input-group-addon bg-primary" id="lookup-ibu" style="color: white">
                    Cari
                  </span>
                </div>

              </div>
              <div class="form-group">
                <label for="id_ayah">ID Ayah</label>
                <div class="input-group">
                  <input type="text" name="id_ayah" id="id_ayah" class="form-control border-primary" readonly>
                  <span class="input-group-addon bg-primary" id="lookup-ayah" style="color: white">
                    Cari
                  </span>
                </div>

              </div>

                <button type="submit" id="submit_kelahiran" class=""></button>
                <button type="button" id="batal" class="btn btn-danger btn-md col-md-6">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Data Surat Kelahiran</h4>
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
        <table class="table" id="t_kelahiran" style="font-size: 11px">
          <thead class="bg-purple" style="color: white;">
            <tr>
              <th></th>
              <th>No Surat</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Anak ke</th>
              <th>Nama Ibu</th>
              <th>Nama Ayah</th>
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
        											<i class="icon-briefcase4"></i>
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
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
										  </div>
										</div>
									  </div>
									</div>

                  <div class="modal fade text-xs-left" id="modal-ibu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                  									  <div class="modal-dialog modal-lg" role="document">
                  										<div class="modal-content">
                  										  <div class="modal-header">
                  											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  											  <span aria-hidden="true">&times;</span>
                  											</button>
                  											<h4 class="modal-title" id="myModalLabel17">Cari Ibu</h4>
                  										  </div>
                  										  <div class="modal-body">
                                          <div class="form-group">
                                            <div class="position-relative has-icon-left">
                          										<input type="text" id="cari-ibu" class="form-control" placeholder="Cari ID atau Nama" name="cari-ibu">
                          										<div class="form-control-position">
                          											<i class="icon-briefcase4"></i>
                          										</div>
                          									</div>
                                          </div>
                                          <div class="table-responsive" style="height: 400px;">
                                            <table class="table" id="t_ibu" style="font-size: 11px">
                                              <thead class="bg-purple" style="color: white;">
                                                <tr>
                                                  <th></th>
                                                  <th>ID Penduduk</th>
                                                  <th>Nama</th>
                                                  <th>TTL</th>
                                                  <th>Jenis Kelamin</th>
                                                  <th>Agama</th>
                                                  <th>Alamat</th>
                                                  <th>Status</th>
                                                </tr>
                                              </thead>
                                              <tbody></tbody>
                                            </table>
                                          </div>
                  										  </div>
                  										</div>
                  									  </div>
                  									</div>

                                    <div class="modal fade text-xs-left" id="modal-ayah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                    									  <div class="modal-dialog modal-lg" role="document">
                                    										<div class="modal-content">
                                    										  <div class="modal-header">
                                    											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    											  <span aria-hidden="true">&times;</span>
                                    											</button>
                                    											<h4 class="modal-title" id="myModalLabel17">Cari Ayah</h4>
                                    										  </div>
                                    										  <div class="modal-body">
                                                            <div class="form-group">
                                                              <div class="position-relative has-icon-left">
                                            										<input type="text" id="cari-ayah" class="form-control" placeholder="Cari ID atau Nama" name="cari-ayah">
                                            										<div class="form-control-position">
                                            											<i class="icon-briefcase4"></i>
                                            										</div>
                                            									</div>
                                                            </div>
                                                            <div class="table-responsive" style="height: 400px;">
                                                              <table class="table" id="t_ayah" style="font-size: 11px">
                                                                <thead class="bg-purple" style="color: white;">
                                                                  <tr>
                                                                    <th></th>
                                                                    <th>ID Penduduk</th>
                                                                    <th>Nama</th>
                                                                    <th>TTL</th>
                                                                    <th>Jenis Kelamin</th>
                                                                    <th>Agama</th>
                                                                    <th>Alamat</th>
                                                                    <th>Status</th>
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
  function load_kelahiran(cari)
  {
    $.ajax({
      url: '<?= base_url().'json/json_kelahiran' ?>',
      type: 'POST',
      dataType: 'JSON',
      data: {
        cari: cari
      },
      success: function(data){
        var html = '';

        if(data.kelahiran.length <= 0){
          html += '<tr><td colspan="8">Tidak ada data</td></tr>';
        } else {

          $.each(data.kelahiran, function(k, v){
            html += `<tr>`;
            html += `<td><a class="btn btn-info btn-sm" href="<?= base_url('laporan/Ket_lahir?no_surat=') ?>${v.no_surat}" target="_blank"><i class="icon-printer3"></i> PRINT</a> </td>`;
            html += `<td>${v.no_surat}</td>`;
            html += `<td>${v.nama_penduduk}</td>`;
            html += `<td>${v.tgl_surat}</td>`;
            html += `<td>${v.anak_ke}</td>`;
            html += `<td>${v.nama_ibu}</td>`;
            html += `<td>${v.nama_ayah}</td>`;
            html += `<td>${v.username}</td>`;
            html += `</tr>`;
          });
        }

        $('#t_kelahiran tbody').html(html);
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
        var html_ibu = '';
        var html_ayah = '';

        if(data.penduduk.length <= 0){
          html_ibu += '<tr><td colspan="8">Tidak ada data</td></tr>';
          html_ayah += '<tr><td colspan="8">Tidak ada data</td></tr>';
          html += '<tr><td colspan="8">Tidak ada data</td></tr>';
        } else {

          $.each(data.penduduk, function(k, v){

            if(v.status == 'Menikah')
            {
              if(v.status == 'Menikah' && v.jenis_kelamin == 'Laki-laki'){
                html_ayah += `<tr>`;
                html_ayah += `<td><button class="btn btn-sm btn-success" id="pilih-ayah" data-id="${v.id_penduduk}">Pilih</button></td>`
                html_ayah += `<td>${v.id_penduduk}</td>`;
                html_ayah += `<td>${v.nama_penduduk}</td>`;
                html_ayah += `<td>${v.tempat_lahir}, ${v.tgl_lahir}</td>`;
                html_ayah += `<td>${v.jenis_kelamin}</td>`;
                html_ayah += `<td>${v.agama}</td>`;
                html_ayah += `<td>${v.alamat}</td>`;
                html_ayah += `<td>${v.status}</td>`;
                html_ayah += `</tr>`;
              } else if(v.status == 'Menikah'  && v.jenis_kelamin == 'Perempuan') {
                html_ibu += `<tr>`;
                html_ibu += `<td><button class="btn btn-sm btn-success" id="pilih-ibu" data-id="${v.id_penduduk}">Pilih</button></td>`
                html_ibu += `<td>${v.id_penduduk}</td>`;
                html_ibu += `<td>${v.nama_penduduk}</td>`;
                html_ibu += `<td>${v.tempat_lahir}, ${v.tgl_lahir}</td>`;
                html_ibu += `<td>${v.jenis_kelamin}</td>`;
                html_ibu += `<td>${v.agama}</td>`;
                html_ibu += `<td>${v.alamat}</td>`;
                html_ibu += `<td>${v.status}</td>`;
                html_ibu += `</tr>`;
              }
            } else {
              html += `<tr>`;
              html += `<td><button class="btn btn-sm btn-success" id="pilih" data-id="${v.id_penduduk}">Pilih</button></td>`
              html += `<td>${v.id_penduduk}</td>`;
              html += `<td>${v.nama_penduduk}</td>`;
              html += `<td>${v.tempat_lahir}, ${v.tgl_lahir}</td>`;
              html += `<td>${v.jenis_kelamin}</td>`;
              html += `<td>${v.agama}</td>`;
              html += `<td>${v.alamat}</td>`;
              html += `<td>${v.status}</td>`;
              html += `</tr>`;
            }
          });
        }

        $('#t_penduduk tbody').html(html);
        $('#t_ibu tbody').html(html_ibu);
        $('#t_ayah tbody').html(html_ayah);
      }
    });
  }

  $(document).ready(function(){

    var save_method;

    load_kelahiran();
    $('#card-form').hide();

    $('#simpan').on('click', function(){
      save_method = 'simpan';
      $('.form-data')[0].reset();
      $('#nip').focus();
      $('#submit_kelahiran').removeClass().addClass('btn btn-md btn-primary col-md-6').text('Simpan');
      $('#card-form').fadeIn();
    });

    $('#batal').on('click', function(){
      $('#card-form').fadeOut();
    });

    $('#lookup-pddk').on('click', function(){
      load_penduduk();
      $('#modal-pddk').modal('show');
    });

    $('#cari-pddk').keyup(function(){
      var cari = $(this).val();
      load_penduduk(cari);
    });

    $('#cari-ibu').keyup(function(){
      var cari = $(this).val();
      load_penduduk(cari);
    });

    $('#cari-ayah').keyup(function(){
      var cari = $(this).val();
      load_penduduk(cari);
    });

    $('#lookup-ibu').on('click', function(){
      load_penduduk();
      $('#modal-ibu').modal('show');
    });

    $('#lookup-ayah').on('click', function(){
      load_penduduk();
      $('#modal-ayah').modal('show');
    });

    $('#t_penduduk').on('click', '#pilih', function(){
      var id = $(this).data('id');
      $('#id_penduduk').val(id);
      $('#modal-pddk').modal('hide');
    });

    $('#t_ibu').on('click', '#pilih-ibu', function(){
      var id = $(this).data('id');
      $('#id_ibu').val(id);
      $('#modal-ibu').modal('hide');
    });

    $('#t_ayah').on('click', '#pilih-ayah', function(){
      var id = $(this).data('id');
      $('#id_ayah').val(id);
      $('#modal-ayah').modal('hide');
    });

    $('#cari').on('keyup', function(){
      var cari = $(this).val();
      load_kelahiran(cari);
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
          url: '<?= base_url().'admin/response_kelahiran/' ?>'+save_method,
          type: 'POST',
          data: $(this).serialize(),
          success: function(data){
            if(data == 'berhasil')
            {
              alert(`Surat kelahiran berhasil di${save_method}`);
              load_kelahiran();
              $('#card-form').fadeOut();
            } else {
              alert(`Surat kelahiran tidak berhasil di${save_method}`);
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
