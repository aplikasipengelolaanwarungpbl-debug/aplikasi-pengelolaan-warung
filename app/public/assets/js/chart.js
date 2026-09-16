document.addEventListener('DOMContentLoaded', () => {
  // 1. Sales vs Purchase Bar Chart
  if (document.getElementById('salesPurchaseChart') && typeof ApexCharts !== 'undefined') {
    const optionsSalesPurchase = {
      series: [
        {
          name: 'Penjualan (Sales)',
          data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
        },
        {
          name: 'Pembelian (Purchase)',
          data: [36, 45, 41, 48, 47, 55, 41, 54, 44],
        },
      ],
      colors: ['#E66239', '#f7a085'],
      chart: {
        type: 'bar',
        height: 320,
        width: '100%',
        parentHeightOffset: 0,
        toolbar: { show: false },
      },
      grid: {
        show: true,
        borderColor: "#f0f0f0",
      },
      legend: {
        show: true,
        fontFamily: 'Poppins, sans-serif',
        position: 'top',
        horizontalAlign: 'right',
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '55%',
          borderRadius: 4,
          borderRadiusApplication: 'end',
        },
      },
      dataLabels: { enabled: false },
      stroke: { show: false },
      xaxis: {
        categories: ['28 Jan', '29 Jan', '30 Jan', '31 Jan', '1 Feb', '2 Feb', '3 Feb', '4 Feb', '5 Feb'],
        axisBorder: { show: false },
        axisTicks: { show: false },
      },
      yaxis: {
        labels: {
          formatter: function (val) {
            return val + 'k';
          },
        },
      },
      fill: { opacity: 1 },
      tooltip: {
        y: {
          formatter: function (val) {
            return "Rp " + val + ".000";
          }
        }
      },
    };

    const chartSalesPurchase = new ApexCharts(document.querySelector("#salesPurchaseChart"), optionsSalesPurchase);
    chartSalesPurchase.render();
  }

  // 2. Customer / Pelanggan Overview Radial Bar Chart
  if (document.getElementById('customerChart') && typeof ApexCharts !== 'undefined') {
    const optionsCustomer = {
      series: [65, 35],
      chart: {
        height: 220,
        type: 'radialBar',
      },
      colors: ['#00C951', '#E66239'],
      plotOptions: {
        radialBar: {
          dataLabels: {
            name: { fontSize: '14px' },
            value: { fontSize: '16px', fontWeight: 600 },
            total: {
              show: true,
              label: 'Total',
              formatter: function () {
                return '100%';
              }
            }
          },
          hollow: {
            size: '50%',
          },
          track: {
            background: "#f0f0f0",
            strokeWidth: '100%',
          },
        },
      },
      stroke: { lineCap: 'round' },
      labels: ['Pelanggan Baru', 'Pelanggan Tetap'],
    };

    const chartCustomer = new ApexCharts(document.querySelector('#customerChart'), optionsCustomer);
    chartCustomer.render();
  }
});
