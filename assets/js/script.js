const boxGelas = document.querySelector(".box-icon-gelas");
const boxCangkir = document.querySelector(".box-icon-cangkir");

const btnGelas = document.querySelector(".btn-gelas");
const btnCangkir = document.querySelector(".btn-cangkir");
const btnManual = document.querySelector(".btn-manual");

const progressBarStriped = document.querySelector(".progress-bar-striped");

const btnSeduhKopi = document.querySelector(".btn-seduh-kopi");

const tableResponsive = document.querySelector(".table-responsive");

const tTakaranOtomatisCangkir = `<table
                                class="table table-hover table-striped table-takaran-otomatis-cangkir"
                                >
                                <thead class="bg-warning text-white">
                                  <tr>
                                    <th>Selera</th>
                                    <th>Air</th>
                                    <th>Kopi</th>
                                    <th>Gula</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="takaran-otomatis-cangkir-1">
                                    <td class="takaran-otomatis-cangkir-1">Manis</td>
                                    <td class="takaran-otomatis-cangkir-1">140ml</td>
                                    <td class="takaran-otomatis-cangkir-1">11gram</td>
                                    <td class="takaran-otomatis-cangkir-1">11gram</td>
                                  </tr>
                                  <tr class="takaran-otomatis-cangkir-2">
                                    <td class="takaran-otomatis-cangkir-2">Sedang</td>
                                    <td class="takaran-otomatis-cangkir-2">140ml</td>
                                    <td class="takaran-otomatis-cangkir-2">11gram</td>
                                    <td class="takaran-otomatis-cangkir-2">10gram</td>
                                  </tr>
                                  <tr class="takaran-otomatis-cangkir-3">
                                    <td class="takaran-otomatis-cangkir-3">Pas</td>
                                    <td class="takaran-otomatis-cangkir-3">140ml</td>
                                    <td class="takaran-otomatis-cangkir-3">11gram</td>
                                    <td class="takaran-otomatis-cangkir-3">9gram</td>
                                  </tr>
                                  <tr class="takaran-otomatis-cangkir-4">
                                    <td class="takaran-otomatis-cangkir-4">Pahit</td>
                                    <td class="takaran-otomatis-cangkir-4">140ml</td>
                                    <td class="takaran-otomatis-cangkir-4">11gram</td>
                                    <td class="takaran-otomatis-cangkir-4">8gram</td>
                                  </tr>
                                </tbody>
                                </table>`;

const tTakaranOtomatisGelas = `<table
                                class="table table-hover table-striped table-takaran-otomatis-gelas"
                                >
                                <thead class="bg-warning text-white">
                                  <tr>
                                    <th>Selera</th>
                                    <th>Air</th>
                                    <th>Kopi</th>
                                    <th>Gula</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="takaran-otomatis-gelas-1">
                                    <td class="takaran-otomatis-gelas-1">Manis</td>
                                    <td class="takaran-otomatis-gelas-1">180ml</td>
                                    <td class="takaran-otomatis-gelas-1">13gram</td>
                                    <td class="takaran-otomatis-gelas-1">13gram</td>
                                  </tr>
                                  <tr class="takaran-otomatis-gelas-2">
                                    <td class="takaran-otomatis-gelas-2">Sedang</td>
                                    <td class="takaran-otomatis-gelas-2">180ml</td>
                                    <td class="takaran-otomatis-gelas-2">13gram</td>
                                    <td class="takaran-otomatis-gelas-2">12gram</td>
                                  </tr>
                                  <tr class="takaran-otomatis-gelas-3">
                                    <td class="takaran-otomatis-gelas-3">Pas</td>
                                    <td class="takaran-otomatis-gelas-3">180ml</td>
                                    <td class="takaran-otomatis-gelas-3">13gram</td>
                                    <td class="takaran-otomatis-gelas-3">11gram</td>
                                  </tr>
                                  <tr class="takaran-otomatis-gelas-4">
                                    <td class="takaran-otomatis-gelas-4">Pahit</td>
                                    <td class="takaran-otomatis-gelas-4">180ml</td>
                                    <td class="takaran-otomatis-gelas-4">13gram</td>
                                    <td class="takaran-otomatis-gelas-4">10gram</td>
                                  </tr>
                                </tbody>
                                </table>`;

const tTakaranManual = `<div class="form-group">
                          <select name="air" class="form-control">
                            <option value="">Takaran Air</option>
                            <option value="100">100 ml</option>
                            <option value="110">110 ml</option>
                            <option value="120">120 ml</option>
                            <option value="130">130 ml</option>
                            <option value="140">140 ml</option>
                            <option value="150">150 ml</option>
                            <option value="160">160 ml</option>
                            <option value="170">170 ml</option>
                            <option value="180">180 ml</option>
                            <option value="190">190 ml</option>
                            <option value="200">200 ml</option>
                          </select>
                          </div>
                          <div class="form-group">
                          <select name="kopi" class="form-control">
                            <option value="">Takaran Kopi</option>
                            <option value="5">5 gr</option>
                            <option value="6">6 gr</option>
                            <option value="7">7 gr</option>
                            <option value="8">8 gr</option>
                            <option value="9">9 gr</option>
                            <option value="10">10 gr</option>
                            <option value="11">11 gr</option>
                            <option value="12">12 gr</option>
                            <option value="13">13 gr</option>
                            <option value="14">14 gr</option>
                            <option value="15">15 gr</option>
                          </select>
                          </div>
                          <div class="form-group">
                          <select name="gula" class="form-control">
                            <option value="">Takaran Gula</option>
                            <option value="5">5 gr</option>
                            <option value="6">6 gr</option>
                            <option value="7">7 gr</option>
                            <option value="8">8 gr</option>
                            <option value="9">9 gr</option>
                            <option value="10">10 gr</option>
                            <option value="11">11 gr</option>
                            <option value="12">12 gr</option>
                            <option value="13">13 gr</option>
                            <option value="14">14 gr</option>
                            <option value="15">15 gr</option>
                          </select>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn-lanjutkan btn btn-info btn-block">
                              Lanjut
                            </button>
                          </div>`;

const cardProgressBar = `<div class="card-progress-bar">
                                <p class="text-seduh-kopi-result">Menyeduh Kopi...</p>
                                <div class="progress">
                                  <div
                                    class="progress-bar progress-bar-striped progress-bar-animated"
                                    role="progressbar"
                                    aria-valuenow="75"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                    style="width: 100%"
                                  ></div>
                                </div>
                              </div>`;

const tableTakaranOtomatisCangkir = document.querySelector(
  ".table-takaran-otomatis-cangkir"
);
const tableTakaranOtomatisGelas = document.querySelector(
  ".table-takaran-otomatis-gelas"
);

function selesai() {
  return swal("Selesai!", "Kopi anda sudah siap!", {
    icon: "success",
    buttons: {
      confirm: {
        className: "btn btn-success"
      }
    }
  });
}

function warning() {
  return swal("Ups!", "Inputan harus di pilih!", {
    icon: "warning",
    buttons: {
      confirm: {
        className: "btn btn-warning"
      }
    }
  });
}

function seduhTakaranOtomatis(air, kopi, gula) {
  this.air = air;
  this.gula = gula;
  this.kopi = kopi;
  this.seduh = function() {
    return `<div class="card-progress-bar">
              <p class="text-seduh-kopi-result">Menyeduh Kopi...</p>
              <p>Takaran Air : ${this.air}ml, Kopi : ${this.kopi}gr, Gula : ${this.gula}gr</p>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-striped"
                  role="progressbar"
                  aria-valuenow="75"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 100%"
                ></div>
              </div>
            </div>`;
  };
}

btnGelas.addEventListener("click", function(e) {
  e.preventDefault();

  btnGelas.setAttribute("disabled", "disabled");
  btnCangkir.removeAttribute("disabled");

  boxGelas.classList.add("box-icon-gelas-css");
  boxCangkir.classList.remove("box-icon-cangkir-css");

  tableResponsive.innerHTML = tTakaranOtomatisGelas;
});

btnCangkir.addEventListener("click", function(e) {
  e.preventDefault();

  btnCangkir.setAttribute("disabled", "disabled");
  btnGelas.removeAttribute("disabled");

  boxCangkir.classList.add("box-icon-cangkir-css");
  boxGelas.classList.remove("box-icon-gelas-css");

  tableResponsive.innerHTML = tTakaranOtomatisCangkir;
});

btnManual.addEventListener("click", function(e) {
  e.preventDefault();

  tableResponsive.innerHTML = tTakaranManual;
});

tableResponsive.addEventListener("click", function(e) {
  e.preventDefault();
  if (e.target.classList == "takaran-otomatis-cangkir-1") {
    let menyeduh = new seduhTakaranOtomatis(140, 11, 11);
    tableResponsive.innerHTML = menyeduh.seduh();
    btnSeduhKopi.removeAttribute("disabled");
  } else if (e.target.classList == "takaran-otomatis-cangkir-2") {
    let menyeduh = new seduhTakaranOtomatis(140, 11, 10);
    tableResponsive.innerHTML = menyeduh.seduh();
    btnSeduhKopi.removeAttribute("disabled");
  } else if (e.target.classList == "takaran-otomatis-cangkir-3") {
    let menyeduh = new seduhTakaranOtomatis(140, 11, 9);
    tableResponsive.innerHTML = menyeduh.seduh();
    btnSeduhKopi.removeAttribute("disabled");
  } else if (e.target.classList == "takaran-otomatis-cangkir-4") {
    let menyeduh = new seduhTakaranOtomatis(140, 11, 8);
    tableResponsive.innerHTML = menyeduh.seduh();
    btnSeduhKopi.removeAttribute("disabled");
  }
});

tableResponsive.addEventListener("click", function(e) {
  e.preventDefault();
  if (e.target.classList == "takaran-otomatis-gelas-1") {
    let menyeduh = new seduhTakaranOtomatis(180, 13, 13);
    tableResponsive.innerHTML = menyeduh.seduh();
    btnSeduhKopi.removeAttribute("disabled");
  } else if (e.target.classList == "takaran-otomatis-gelas-2") {
    let menyeduh = new seduhTakaranOtomatis(180, 13, 12);
    tableResponsive.innerHTML = menyeduh.seduh();
    btnSeduhKopi.removeAttribute("disabled");
  } else if (e.target.classList == "takaran-otomatis-gelas-3") {
    let menyeduh = new seduhTakaranOtomatis(180, 13, 11);
    tableResponsive.innerHTML = menyeduh.seduh();
    btnSeduhKopi.removeAttribute("disabled");
  } else if (e.target.classList == "takaran-otomatis-gelas-4") {
    let menyeduh = new seduhTakaranOtomatis(180, 13, 10);
    tableResponsive.innerHTML = menyeduh.seduh();
    btnSeduhKopi.removeAttribute("disabled");
  }
});

btnSeduhKopi.addEventListener("click", function(e) {
  e.preventDefault();
  btnSeduhKopi.setAttribute("disabled", "disabled");
  tableResponsive.innerHTML = cardProgressBar;
  let waktu = 5;
  setInterval(function() {
    waktu--;
    if (waktu < 0) {
      document.getElementById("countdown").innerHTML = "Selesai";
      selesai();
      setInterval(function() {
        window.location.href = "";
      }, 3000);
    } else {
      document.getElementById("countdown").innerHTML = waktu + " Detik";
    }
  }, 1000);
});

tableResponsive.addEventListener("click", function(e) {
  e.preventDefault();
  if (e.target.classList == "btn-lanjutkan btn btn-info btn-block") {
    const air = document.querySelector("[name=air]").value;
    const kopi = document.querySelector("[name=kopi]").value;
    const gula = document.querySelector("[name=gula]").value;

    if (air == "" || kopi == "" || gula == "") {
      warning();
    } else {
      let menyeduh = new seduhTakaranOtomatis(air, kopi, gula);
      tableResponsive.innerHTML = menyeduh.seduh();
      btnSeduhKopi.removeAttribute("disabled");
    }
  }
});
