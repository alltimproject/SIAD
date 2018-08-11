<div class="content-header row">
  <div class="content-header-left col-md-6 col-xs-12 mb-1">
    <h2 class="content-header-title">Dashboard</h2>
  </div>
  <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
    <div class="breadcrumb-wrapper col-xs-12">

    </div>
  </div>
</div>

<div class="content-body">
  <div class="row">
      <div class="col-md-6">
        <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="pink" id="jml_pnddk">0</h3>
                                <span>Data Penduduk</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="icon-user1 pink font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="col-md-6">
        <div class="card">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-body text-xs-left">
                                <h3 class="purple" id="jml_staff">0</h3>
                                <span>Data Staff</span>
                            </div>
                            <div class="media-right media-middle">
                                <i class="icon-user1 purple font-large-2 float-xs-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card bg-teal">
                <div class="card-body">
                    <div class="card-block">
                        <div class="media">
                            <div class="media-left media-middle">
                                <i class="icon-trending_up white font-large-2 float-xs-left"></i>
                            </div>
                            <div class="media-body white text-xs-right">
                                <h3 id="jml_ket"></h3>
                                <span>Surat Keterangan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-pink">
                    <div class="card-body">
                        <div class="card-block">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <i class="icon-trending_up white font-large-2 float-xs-left"></i>
                                </div>
                                <div class="media-body white text-xs-right">
                                    <h3 id="jml_kel"></h3>
                                    <span>Surat Kelahiran</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <div class="col-md-8">
        <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Statistik Surat</h4>
                </div>
                <div class="card-body collapse in">
                    <div class="card-block">
                        <canvas id="simple-pie-chart" height="400"></canvas>
                    </div>
                </div>
            </div>
      </div>
  </div>
</div>

<script type="text/javascript">

  function load_dashboard(cari)
  {
    $.ajax({
      url:'<?= base_url().'json/json_dashboard' ?>',
      type:'POST',
      dataType:'JSON',
      success:function(data)
      {
          $.each(data.dashboard, function(key, value) {
            $('#jml_pnddk').text(value.jml_penduduk);
            $('#jml_staff').text(value.jml_staff);

            var total_surat = parseInt(value.jml_ket)+parseInt(value.jml_kel);

            var rate_kel = parseFloat(value.jml_kel/total_surat*100);
            var rate_ket = parseFloat(value.jml_ket/total_surat*100);

            $('#jml_kel').text(`${rate_kel.toFixed(2)} %`);
            $('#jml_ket').text(`${rate_ket.toFixed(2)} %`);


            //Get the context of the Chart canvas element we want to select
            var ctx = $("#simple-pie-chart");

            // Chart Options
            var chartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                responsiveAnimationDuration:500,
            };

            // Chart Data
            var chartData = {
                labels: ["Surat Kelahiran", "Surat Keterangan"],
                datasets: [{
                    label: "My First dataset",
                    data: [value.jml_kel, value.jml_ket],
                    backgroundColor: ["#E91E63", "#009688"],
                }]
            };

            var config = {
                type: 'pie',

                // Chart Options
                options : chartOptions,

                data : chartData
            };

            // Create the chart
            var pieSimpleChart = new Chart(ctx, config);
          });
      }

    });
  }

$(document).ready(function(){
  load_dashboard();
});
</script>
