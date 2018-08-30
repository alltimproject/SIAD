<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-6 mb-1">
    <h2 class="content-header-title">Staff</h2>
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
      <h4 class="card-title">Form Staff</h4>
    </div>
    <div class="card-body">
      <div class="card-block">
        <form class="form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" name="nip" id="nip" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="nama_staff">Nama</label>
                <input type="text" name="nama_staff" id="nama_staff" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control border-primary" max="<?= date('Y-m-d') ?>">
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control border-primary" name="jenis_kelamin" id="jenis_kelamin">
                  <option value=""></option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control border-primary"></textarea>
              </div>
              <div class="form-group">
                <label for="no_tlp">No Telepon</label>
                <input type="text" name="no_tlp" id="no_tlp" class="form-control border-primary" maxlength="15">
              </div>
              <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control border-primary">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control border-primary" name="status" id="status">
                  <option value=""></option>
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
                <button type="submit" id="submit_staff" class=""></button>
                <button type="button" id="batal" class="btn btn-danger btn-md col-md-6">Batal</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Data Staff</h4>
    </div>
    <div class="card-body">
      <div class="card-block" style="margin-bottom: 0px; padding-bottom: 5px;">
        <div class="form-group">
          <div class="position-relative has-icon-left">
            <input type="text" class="form-control" placeholder="Masukkan NIP atau Nama Staff" name="cari" id="cari">
              <div class="form-control-position">
                <i class="icon-search4"></i>
              </div>
          </div>
        </div>
      </div>

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
              <th></th>
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
          html += '<tr><td colspan="9">Tidak ada data</td></tr>';
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
            html += `<td><button class="btn btn-sm btn-success" id="edit" data-nip="${v.nip}" data-nama="${v.nama_staff}" data-tempat="${v.tempat_lahir}" data-tgl="${v.tgl_lahir}" data-alamat="${v.alamat}" data-jkel="${v.jenis_kelamin}" data-tlp="${v.no_tlp}" data-jab="${v.jabatan}" data-sts="${v.status}"><i class="icon-pencil2"></i></button></td>`;
            html += `</tr>`;
          });
        }

        $('#t_staff tbody').html(html);
      }
    });
  }

  $(document).ready(function(){
    var save_method;

    load_staff();
    $('#card-form').hide();

    $('#simpan').on('click', function(){
      save_method = 'simpan';
      $('.form-data')[0].reset();
      $('#nip').focus();
      $('#submit_staff').removeClass().addClass('btn btn-md btn-primary col-md-6').text('Simpan');
      $('#card-form').fadeIn();
      $(this).hide();
    });

    $('#t_staff').on('click', '#edit' ,function(){
      save_method = 'edit';
      var nip = $(this).attr('data-nip');
      var nama = $(this).attr('data-nama');
      var tempat_lahir = $(this).attr('data-tempat');
      var tgl_lahir = $(this).attr('data-tgl');
      var alamat = $(this).attr('data-alamat');
      var jenis_kelamin = $(this).attr('data-jkel');
      var no_telp = $(this).attr('data-tlp');
      var jabatan = $(this).attr('data-jab');
      var status= $(this).attr('data-sts');

      $('#nip').val(nip);
      $('#nama_staff').val(nama);
      $('#tempat_lahir').val(tempat_lahir);
      $('#tgl_lahir').val(tgl_lahir);
      $('#alamat').val(alamat);
      $('#jenis_kelamin').val(jenis_kelamin);
      $('#no_tlp').val(no_telp);
      $('#jabatan').val(jabatan);
      $('#status').val(status);


      $('#card-form').fadeIn();
      $('#nip').focus();
      $('#submit_staff').removeClass().addClass('btn btn-md btn-success col-md-6').text('Update');


    });

    $('#cari').on('keyup', function(){
      var cari = $(this).val();
      load_staff(cari);
      // alert('Successs');
    });

    $('#nip, #no_tlp').keypress(function(e) {
	    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
	        return false;
	    }
    });

    $('#batal').on('click', function(){
      $('#card-form').fadeOut();
      $('#simpan').show();
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
          url: '<?= base_url().'admin/response_staff/' ?>'+save_method,
          type: 'POST',
          data: $(this).serialize(),
          success: function(data){
            if(data == 'berhasil')
            {
              alert(`Data staff berhasil di${save_method}`);
              load_staff();
              $('#card-form').fadeOut();
            } else {
              alert(`Data staff tidak berhasil di${save_method}`);
            }
          }
        });
      } else {
        alert('Harap mengisi data dengan lengkap');
      }
    });

  });
</script>
