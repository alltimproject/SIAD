<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-6 mb-1">
    <h2 class="content-header-title">Penduduk</h2>
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
      <h4 class="card-title">Form Penduduk</h4>
    </div>
    <div class="card-body">
      <div class="card-block">
        <form class="form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="id_penduduk">ID Penduduk</label>
                <input type="number" name="id_penduduk" id="id_penduduk" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="nama_penduduk">Nama</label>
                <input type="text" name="nama_penduduk" id="nama_penduduk" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control border-primary" name="jenis_kelamin" id="jenis_kelamin">
                  <option value=""></option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control border-primary" name="agama" id="agama">
                  <option value=""></option>
                  <option value="Islam">Islam</option>
                  <option value="Protestan">Protestan</option>
                  <option value="Katholik">Katholik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control border-primary"></textarea>
              </div>
              <div class="form-group">
                <label for="kelurahan">Kelurahan</label>
                <input type="text" name="kelurahan" id="kelurahan" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input type="text" name="kecamatan" id="kecamatan" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control border-primary" name="status" id="status">
                  <option value=""></option>
                  <option value="Menikah">Menikah</option>
                  <option value="Belum Menikah">Belum Menikah</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <select class="form-control border-primary" name="kewarganegaraan" id="kewarganegaraan">
                  <option value=""></option>
                  <option value="WNI">WNI</option>
                  <option value="WNA">WNA</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
                <button type="submit" id="submit_penduduk" class=""></button>
                <button type="button" id="batal" class="btn btn-danger btn-md col-md-6">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Data Penduduk</h4>
    </div>
    <div class="card-body">

      <div class="card-block" style="margin-bottom: 0px; padding-bottom: 5px;">
        <div class="form-group">
          <div class="position-relative has-icon-left">
            <input type="text" class="form-control" placeholder="Masukkan Nama atau ID Penduduk" name="cari" id="cari">
              <div class="form-control-position">
                <i class="icon-search4"></i>
              </div>
          </div>
        </div>
      </div>
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
    var save_method;

    load_penduduk();
    $('#card-form').hide();

    $('#cari').on('keyup', function(){
      var cari = $(this).val();
      load_penduduk(cari);
    });

    $('#simpan').on('click', function(){
      save_method = 'simpan';
      $('.form-data')[0].reset();
      $('#id_penduduk').focus();
      $('#submit_penduduk').removeClass().addClass('btn btn-md btn-primary col-md-6').text('Simpan');
      $('#card-form').fadeIn();
    });

    $('#batal').on('click', function(){
      $('#card-form').fadeOut();
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
          url: '<?= base_url().'admin/response_penduduk/' ?>'+save_method,
          type: 'POST',
          data: $(this).serialize(),
          success: function(data){
            if(data == 'berhasil')
            {
              alert(`Data penduduk berhasil di${save_method}`);
              load_penduduk();
              $('#card-form').fadeOut();
            } else {
              alert(`Data penduduk tidak berhasil di${save_method}`);
            }
          }
        });
      } else {
        alert('Harap mengisi data dengan lengkap');
      }
    });

  });
</script>
