// Sidebar Switch
$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
      theme: "minimal",
    });
  
    $("#sidebarCollapse").on("click", function () {
      $("#sidebar, #content").toggleClass("active");
      $(".collapse.in").toggleClass("in");
      $("a[aria-expanded=true]").attr("aria-expanded", "false");
    });
  });
  
  // Forms Validation
  (function () {
    "use strict";
    window.addEventListener(
      "load",
      function () {
        var forms = document.getElementsByClassName("needs-validation");
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add("was-validated");
            },
            false
          );
        });
      },
      false
    );
  })();
  
  // Form Choose Image
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $("#selected-image").attr("src", e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  $("#photo").change(function () {
    readURL(this);
  });
  
  // Form Selector
  // Province
  document.addEventListener("DOMContentLoaded", function () {
    var provinceSelect = document.getElementById("provinceSelect");
  
    var provinces = [
      "Abra",
      "Agusan del Norte",
      "Agusan del Sur",
      "Aklan",
      "Albay",
      "Antique",
      "Apayao",
      "Aurora",
      "Basilan",
      "Bataan",
      "Batanes",
      "Batangas",
      "Benguet",
      "Biliran",
      "Bohol",
      "Bukidnon",
      "Bulacan",
      "Cagayan",
      "Camarines Norte",
      "Camarines Sur",
      "Camiguin",
      "Capiz",
      "Catanduanes",
      "Cavite",
      "Cebu",
      "Cotabato",
      "Davao de Oro",
      "Davao del Norte",
      "Davao del Sur",
      "Davao Occidental",
      "Davao Oriental",
      "Dinagat Islands",
      "Eastern Samar",
      "Guimaras",
      "Ifugao",
      "Ilocos Norte",
      "Ilocos Sur",
      "Iloilo",
      "Isabela",
      "Kalinga",
      "La Union",
      "Laguna",
      "Lanao del Norte",
      "Lanao del Sur",
      "Leyte",
      "Maguindanao",
      "Marinduque",
      "Masbate",
      "Misamis Occidental",
      "Misamis Oriental",
      "Mountain Province",
      "Negros Occidental",
      "Negros Oriental",
      "Northern Samar",
      "Nueva Ecija",
      "Nueva Vizcaya",
      "Occidental Mindoro",
      "Oriental Mindoro",
      "Palawan",
      "Pampanga",
      "Pangasinan",
      "Quezon",
      "Quirino",
      "Rizal",
      "Romblon",
      "Samar",
      "Sarangani",
      "Siquijor",
      "Sorsogon",
      "South Cotabato",
      "Southern Leyte",
      "Sultan Kudarat",
      "Sulu",
      "Surigao del Norte",
      "Surigao del Sur",
      "Tarlac",
      "Tawi-Tawi",
      "Zambales",
      "Zamboanga del Norte",
      "Zamboanga del Sur",
      "Zamboanga Sibugay",
    ];
  
    provinces.forEach(function (province) {
      var option = document.createElement("option");
      option.value = province.toLowerCase().replace(/\s/g, "-");
      option.text = province;
      provinceSelect.appendChild(option);
    });
  });
  // City
  document.addEventListener("DOMContentLoaded", function () {
    var citySelect = document.getElementById("citySelect");
  
    var city = [
      "Alaminos",
      "Angeles",
      "Aparri",
      "Antipolo",
      "Baliuag",
      "Bustos",
      "Bacolod",
      "Bacoor",
      "Baguio",
      "Bagumbayan",
      "Balagtas",
      "Balanga",
      "Baliuag",
      "Batac",
      "Batangas City",
      "Bayawan",
      "Baybay",
      "Bayugan",
      "Biñan",
      "Bislig",
      "Bocaue",
      "Borongan",
      "Butuan",
      "Cabadbaran",
      "Calumpit",
      "Cabanatuan",
      "Cabuyao",
      "Cagayan de Oro",
      "Calamba",
      "Calapan",
      "Calbayog",
      "Caloocan",
      "Catarman",
      "Cavite City",
      "Cebu City",
      "Cotabato City",
      "Dagupan",
      "Danao",
      "Dapitan",
      "Dasmariñas",
      "Davao City",
      "Doña Remedios Trinidad",
      "Digos",
      "Dipolog",
      "Dumaguete",
      "El Salvador",
      "Escalante",
      "Gapan",
      "General Santos",
      "General Trias",
      "Gingoog",
      "Guihulngan",
      "Iligan",
      "Iloilo City",
      "Isabela",
      "Lamitan",
      "Laoag",
      "Las Piñas",
      "Legazpi",
      "Ligao",
      "Lipa",
      "Lucena",
      "Mabalacat",
      "Malabon",
      "Malaybalay",
      "Makati",
      "Malolos",
      "Mandaluyong",
      "Mandaue",
      "Manila",
      "Marawi",
      "Marikina",
      "Marilao",
      "Meycauayan",
      "Muntinlupa",
      "Naga",
      "Navotas",
      "Norzagaray",
      "Olongapo",
      "Ormoc",
      "Oroquieta",
      "Obando",
      "Ozamiz",
      "Pagadian",
      "Palayan",
      "Panabo",
      "Parañaque",
      "Pasay",
      "Pasig",
      "Paombong",
      "Pandi",
      "Plaridel",
      "Puerto Princesa",
      "Pulilan",
      "Quezon",
      "Roxas",
      "Sagay",
      "Samal",
      "San Carlos",
      "San Fernando",
      "San Ildefonso",
      "San Jose",
      "San Juan",
      "San Miguel",
      "San Pablo",
      "San Rafael",
      "Santa Rosa",
      "Santiago",
      "Silay",
      "Sipalay",
      "Sorsogon City",
      "Sta. Ana",
      "Sta. Maria",
      "Sariaya",
      "Sta. Ana",
      "Sta. Maria",
      "Tagaytay",
      "Tagbilaran",
      "Taguig",
      "Tagum",
      "Talisay",
      "Tanauan",
      "Tandag",
      "Tangub",
      "Tanjay",
      "Tarlac City",
      "Tayabas",
      "Toledo",
      "Trece Martires",
      "Tuguegarao",
      "Tiaong",
      "Valencia",
      "Valenzuela",
      "Victorias",
      "Vigan",
      "Zamboanga City",
    ];
  
    city.forEach(function (city) {
      var option = document.createElement("option");
      option.value = city.toLowerCase().replace(/\s/g, "-");
      option.text = city;
      citySelect.appendChild(option);
    });
  });
  
  // Chart
  window.onload = function () {
    var dataPoints = [];
  
    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "light2",
      zoomEnabled: true,
      title: {
        text: "Bitcoin Price - 2017",
      },
      axisY: {
        title: "Price in USD",
        titleFontSize: 24,
        prefix: "$",
      },
      data: [
        {
          type: "line",
          yValueFormatString: "$#,##0.00",
          dataPoints: dataPoints,
        },
      ],
    });
  
    function addData(data) {
      var dps = data.price_usd;
      for (var i = 0; i < dps.length; i++) {
        dataPoints.push({
          x: new Date(dps[i][0]),
          y: dps[i][1],
        });
      }
      chart.render();
    }
  
    $.getJSON(
      "https://canvasjs.com/data/gallery/php/bitcoin-price.json",
      addData
    );
  };
  