<div class="card-body pt-0">
    <div id="layout1-chart-6"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var revenuesData = @json($day);
    var revenuesTotal = @json($total);

    if (jQuery("#layout1-chart-6").length) {
        var seriesData = revenuesData.map(function(date, index) {
            return { x: date, y: revenuesTotal[index] };
        });

        options = {
            series: [{
                name: 'Doanh thu',
                data: seriesData,
            }],
            chart: {
                type: 'bar',
                height: 300
            },
            colors: ['#32BDEA', '#FF7E41'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '30%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 3,
                colors: ['transparent']
            },
            xaxis: {
                type: 'category',
                categories: revenuesData,
                labels: {
                    minWidth: 0,
                    maxWidth: 0
                }
            },
            yaxis: {
                show: true,
                labels: {
                    minWidth: 20,
                    maxWidth: 20
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return "$ " + val + " thousands"
                    }
                }
            }
        };

        const chart = new ApexCharts(document.querySelector("#layout1-chart-6"), options);
        chart.render();

        const body = document.querySelector('body');
        if (body.classList.contains('dark')) {
            apexChartUpdate(chart, { dark: true });
        }

        document.addEventListener('ChangeColorMode', function(e) {
            apexChartUpdate(chart, e.detail);
        });
    }
</script>
