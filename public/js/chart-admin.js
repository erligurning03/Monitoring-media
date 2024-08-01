// {{-- ini untuk membuat chart batang media online pada halaman dashboard  --}}

    const xValues = ["Berita Positif", "Berita Netral", "Berita Negatif", "Berita Rilis"];
    const yValues = [42, 12, 8, 38];
    const barColors = ["green","yellow","red", "blue"];
    
    new Chart("diagramBatang", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
          display: true,
          text: "Nilai Persentase Monitoring Media Online"
        }
      }
    });


// {{-- end of chart batang --}}

// {{-- start chart lingkaran media online --}}

    const xVal = ["Berita Positif", "Berita Netral", "Berita Negatif", "Berita Rilis"];
    const yVal = [42, 12, 8, 38];
    const barCol = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];
    
    new Chart("diagramLingkaran", {
      type: "pie",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "Nilai Persentase monitoring media online"
        }
      }
    });
// {{-- end chart lingkaran --}}

// {{-- start chart lingkaran media cetak  --}}
const xcetak = ["Berita Positif", "Berita Netral", "Berita Negatif", "Berita Rilis"];
const ycetak = [42, 12, 8, 38];
const barwarnacetak = ["green","yellow","red", "blue"];

new Chart("diagramBatangCetak", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Nilai Persentase Monitoring Media cetak"
    }
  }
});

// {{-- end chart lingkaran media cetak  --}}

// {{-- start chart lingkaran media online --}}

const xValcetak = ["Berita Positif", "Berita Netral", "Berita Negatif", "Berita Rilis"];
const yValcetak = [42, 12, 8, 38];
const barColcetak = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("diagramLingkarancetak", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Nilai Persentase monitoring media cetak"
    }
  }
});
// {{-- end chart lingkaran --}}