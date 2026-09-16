document.addEventListener('DOMContentLoaded', () => {
  // 1. Sales vs Purchase Chart
  if (document.getElementById('salesPurchaseChart') && typeof ApexCharts !== 'undefined') {
    var options = {
      series: [
        {
          name: 'Sales',
          data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
        },
        {
          name: 'Purchase',
          data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
        },
      ],
      colors: ['#f7a085', '#E66239'],
      chart: {
        type: 'bar',
        height: 350,
        width: '100%',
        parentHeightOffset: 0,
        toolbar: {
          show: false,
        },
      },
      grid: {
        show: true,
        borderColor: "#e2e8f0",
      },
      legend: {
        show: true,
        fontFamily: 'Poppins, sans-serif',
        fontWeight: 500,
        markers: {
          size: 5,
          shape: 'square',
          strokeWidth: 0,
          offsetX: -2,
          offsetY: 0,
        },
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '85%',
          borderRadius: 3,
          borderRadiusApplication: 'end',
        },
      },
      dataLabels: {
        enabled: false,
      },
      stroke: {
        show: false,
        width: 2,
        colors: ['transparent'],
      },
      xaxis: {
        categories: ['28 Jan', '29 Jan', '30 Jan', '31 Jan', '1 Feb', '2 Feb', '3 Feb', '4 Feb', '5 Feb'],
        axisBorder: {
          show: false,
          color: "#e2e8f0",
          height: 1,
          width: '100%',
          offsetX: 0,
          offsetY: 0,
        },
        axisTicks: {
          show: false,
          borderType: 'solid',
          color: "#e2e8f0",
          height: 6,
          offsetX: 0,
          offsetY: 0,
        },
      },
      yaxis: {
        labels: {
          formatter: function (e) {
            return e + 'k';
          },
        },
        title: {
          text: '$ (thousands)',
        },
      },
      fill: {
        opacity: 1,
      },
      tooltip: {
        y: {
          formatter: function (val) {
            return "$ " + val + " thousands";
          },
        },
      },
    };

    var chart = new ApexCharts(document.querySelector("#salesPurchaseChart"), options);
    chart.render();
  }

  // 2. Customer Radial Chart
  if (document.getElementById('customerChart') && typeof ApexCharts !== 'undefined') {
    var options = {
      series: [44, 55],
      chart: {
        height: 200,
        type: 'radialBar',
      },
      colors: ['#5BE49B', '#E66239'],
      plotOptions: {
        radialBar: {
          dataLabels: {
            name: {
              fontSize: '22px',
            },
            value: {
              fontSize: '16px',
            },
            total: {
              show: false,
            },
          },
          hollow: {
            margin: 3,
            size: '40%',
            background: 'transparent',
            dropShadow: {
              enabled: false,
            },
          },
          track: {
            show: true,
            background: "#f0f0f0",
            strokeWidth: '45%',
            opacity: 1,
            margin: 5,
            dropShadow: {
              enabled: false,
            },
          },
        },
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: 'vertical',
          gradientToColors: ['#007867', '#FFD666', '#FFAC82'],
          stops: [0, 100],
        },
      },
      stroke: {
        lineCap: 'round',
      },
      labels: ['First Time', 'Return'],
    };

    var chart = new ApexCharts(document.querySelector('#customerChart'), options);
    chart.render();
  }
});
