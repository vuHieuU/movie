<div class="card-body">
    <div class="d-flex flex-wrap align-items-center mt-2">
        <div class="d-flex align-items-center progress-order-left">
            <div class="progress progress-round m-0 orange conversation-bar"
                data-percent="46">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value text-secondary">46%</div>
            </div>
            <div class="progress-value ml-3 pr-5 border-right">

                <div>

                    <h5 id="ticketListtoltal">{{ number_format($grandTotal) }}</h5>
                    <p class="mb-0">Tổng doanh thu </p>
                </div>

            </div>
        </div>
    </div>
</div>


<div class="card-body pt-0">
    <div id="layout1-chart-8"></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
        var cinemas = @json($cinemas);
        var cinemaSums = @json($cinemaSums);
    if (jQuery("#layout1-chart-8").length) {
        options = {
            series: [{
                name: 'Doanh thu',
                data: cinemaSums.map(item => item.revenue),
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
                categories: cinemas,
                labels: {
                    minWidth: 0,
                    maxWidth: 0
                }
            },
            yaxis: {
                // show: true,
                // labels: {
                //     minWidth: 20,
                //     maxWidth: 20
                // }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " VNĐ"
                    }
                }
            }
        };
        const chart = new ApexCharts(document.querySelector("#layout1-chart-8"), options);
        chart.render();
        const body = document.querySelector('body')
        if (body.classList.contains('dark')) {
            apexChartUpdate(chart, {
                dark: true
            })
        }

        document.addEventListener('ChangeColorMode', function(e) {
            apexChartUpdate(chart, e.detail)
        })
    }
</script>