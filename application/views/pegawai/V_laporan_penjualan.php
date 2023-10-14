<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['line']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        var data = new google.visualization.DataTable();
                        data.addColumn('number', 'Bulan');
                        data.addColumn('number', 'Penjualan Bulanan');





                        data.addRows([
                            <?php $bl = 0;
                            $total = 0;
                            ?>
                            <?php foreach ($data_transaksi as $dt) : ?>
                                <?php
                                $bulan = new DateTime($dt->tanggal);
                                $bulan = $bulan->format('m');
                                if ($bl != $bulan) {
                                    $bl = $bulan;
                                    $total = $dt->harga;
                                } else {
                                    $total = $dt->harga + $total;
                                }
                                ?>



                                [<?= $bl ?>, <?= $total ?>],



                            <?php endforeach; ?>
                        ]);


                        var options = {
                            chart: {
                                title: 'Bulanan Grafik',
                                subtitle: 'Dalam Rp(Rupiah)'
                            },
                            width: 900,
                            height: 500,
                            axes: {
                                x: {
                                    0: {
                                        side: 'top'
                                    }
                                }
                            }
                        };

                        var chart = new google.charts.Line(document.getElementById('line_top_x'));

                        chart.draw(data, google.charts.Line.convertOptions(options));
                    }
                </script>

                <div id="line_top_x"></div>
            </div>
        </div>
    </div>
</div>