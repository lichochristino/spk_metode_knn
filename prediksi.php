<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Prediksi</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>

    <!-- CUSTOM JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
    <!-- CUSTOM JS -->
</head>

<body>

    <!-- ISI HALAMAN -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- SIDEBAR -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path
                                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                        id="path-1"></path>
                                    <path
                                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                        id="path-3"></path>
                                    <path
                                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                        id="path-4"></path>
                                    <path
                                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                        id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle"
                                                transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="demo menu-text fw-bolder ms-2">Metode KNN</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <li class="menu-item ">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div data-i18n="Analytics">1. Dataset</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="inisial_proses.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                            <div data-i18n="Analytics">2. Inisial Proses</div>
                        </a>
                    </li>
                    <li class="menu-item active">
                        <a href="prediksi.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bxs-component"></i>
                            <div data-i18n="Analytics">3. Prediksi</div>
                        </a>
                    </li>



                </ul>

                <div class="d-flex justify-content-center w-100 mx-2 mb-3">
                    <a href="proses/logout.php" class="btn btn-outline-danger w-75">Logout</a>
                </div>


            </aside>
            <!-- / SIDEBAR -->

            <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

            <!-- ISI -->
            <div class="layout-page">



                <!-- CONTENT -->
                <div class="content-wrapper">

                    <!-- ISI CONTENT -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">


                            <div class="col-12 col-md-4 mb-4">
                                <label for="" class="form-label">Nilai K</label>
                                <input type="number" name="k" min="1" value="1" id="nilai_k" required
                                    class="form-control">
                            </div>


                            <!-- TAB -->
                            <div class="nav-align-top mb-4">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                            data-bs-target="#importTab" aria-controls="importTab" aria-selected="false">
                                            Import
                                        </button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="nav-link " role="tab" data-bs-toggle="tab"
                                            data-bs-target="#inputTab" aria-controls="inputTab" aria-selected="true">
                                            Input
                                        </button>
                                    </li>

                                </ul>
                                <div class="tab-content">

                                    <div class="tab-pane fade active show" id="importTab" role="tabpanel">
                                        <!-- ISI IMPORT -->
                                        <!-- UPLOAD DATASET -->
                                        <div class="col-lg-12 mb-4 order-0">
                                            <div class="card">
                                                <div class="d-flex align-items-end row">
                                                    <div class="col-sm-7">
                                                        <div class="card-body">
                                                            <div class="d-flex justify-content-between">
                                                                <h5 class="card-title text-primary">Import Data Test
                                                                </h5>
                                                                <a href="Datatest.xlsx" download="Datatest.xlsx"
                                                                    class="btn btn-sm btn-outline-primary"><i
                                                                        class="bx bx-download"></i> Download Contoh
                                                                    Datatest</a>
                                                            </div>
                                                            <br>
                                                            <form action="import.php" method="POST"
                                                                enctype="multipart/form-data">
                                                                <input type="file" required name="excel_file"
                                                                    class="form-control " accept=".xls, .xlsx"
                                                                    id="fileInput">
                                                                <a onclick="importExcel()"
                                                                    class="btn btn-primary m-2 text-white">Import</a>
                                                            </form>


                                                        </div>
                                                    </div>
                                                    <div class="col-sm-5 text-center text-sm-left">
                                                        <div class="card-body pb-0 px-0 px-md-4">
                                                            <img src="assets/img/illustrations/man-with-laptop-light.png"
                                                                height="140" alt="View Badge User"
                                                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                                                data-app-light-img="illustrations/man-with-laptop-light.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- UPLOAD DATASET -->

                                        <!-- TABLE PREDIKSI -->
                                        <div class="col-lg-12 mb-4 order-0">
                                            <div class="card">
                                                <div class="card-header mb-0 pb-0">
                                                    <h4 class="card-title text-primary">DATA TEST KNN</h4>
                                                    <hr>
                                                </div>
                                                <div class="card-body" style="height: 300px; overflow: auto;">
                                                    <div class="table-responsive text-nowrap" id="tableContainer">
                                                        <table id="dataTable" class="table table-container">
                                                            <thead>

                                                            </thead>
                                                            <div class="text-center">
                                                                <tbody class="table-border-bottom-0">

                                                                </tbody>
                                                            </div>
                                                        </table>
                                                        <div id="teks_kosong"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TABLE PREDIKSI -->

                                        <div class="col-12 col-md-3 mb-2">
                                            <button id="btn_prediksi" onclick="run_knn()" class="btn btn-primary w-100">
                                                <i class="menu-icon tf-icons bx bxs-component"></i>
                                                PREDIKSI</button>
                                        </div>
                                        <!-- HASI PREDIKSI -->
                                        <div class="col-lg-12 mb-4 order-0">
                                            <div class="card p-2">
                                                <div id="predictionContainer">
                                                    <h6 id="predictionResult" class="text-center m-3">Hasil prediksi
                                                        akan muncul di
                                                        sini.</h6>
                                                    <table id="HasilPrediksi" class="table table-container">
                                                        <thead>

                                                        </thead>
                                                        <div class="text-center">
                                                            <tbody class="table-border-bottom-0">

                                                            </tbody>
                                                        </div>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- HASI PREDIKSI -->
                                        <!-- ISI IMPORT -->
                                    </div>
                                    <div class="tab-pane fade " id="inputTab" role="tabpanel">
                                        <!-- ISI INPUT -->
                                        <!-- FORM PREDIKSI -->
                                        <div class="col-lg-12 mb-4 order-0 ">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title text-primary">PREDIKSI</h5>
                                                </div>
                                                <div class="card-body">
                                                    <form action="">
                                                        <div class="mb-3 row">


                                                            <div class="col-12 col-md-3">
                                                                <label for="" class="form-label">Date</label>
                                                                <input type="date" name="date" id="date"
                                                                    class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <div class="col-12 col-md-3">
                                                                <label for="" class="form-label">OPEN</label>
                                                                <input type="number" name="open" id="open" min="1"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label for="" class="form-label">HIGH</label>
                                                                <input type="number" name="high" id="high" min="1"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label for="" class="form-label">LOW</label>
                                                                <input type="number" name="low" id="low" min="1"
                                                                    class="form-control ">
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label for="" class="form-label">CLOSE</label>
                                                                <input type="number" name="close" id="close" min="1"
                                                                    class="form-control ">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="col-12 col-md-4">
                                                                <label for="" class="form-label">Hasil Prediksi
                                                                </label>
                                                                <input type="text" id="hasil_single" name="hasil"
                                                                    readonly class="form-control ">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row justify-content-end">
                                                            <div class="col-12 col-md-3">
                                                                <a id="btn_prediksi" onclick="singleInput()"
                                                                    class="btn btn-primary w-100 text-white">
                                                                    <i class="menu-icon tf-icons bx bxs-component"></i>
                                                                    PREDIKSI</a>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- FORM PREDIKSI -->
                                        <!-- ISI INPUT -->
                                    </div>
                                </div>
                            </div>
                            <!-- TAB -->


                            <div class="mb-4"></div>

                            <!-- SCRIPT JS INPUT EXCEL -->
                            <script>
                                function importExcel() {
                                    var fileInput = document.getElementById('fileInput');
                                    var tableContainer = document.getElementById('tableContainer');
                                    var dataTable = document.getElementById('dataTable');

                                    var file = fileInput.files[0];
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        var data = e.target.result;
                                        var workbook = XLSX.read(data, { type: 'binary' });
                                        var sheetName = workbook.SheetNames[0];
                                        var sheet = workbook.Sheets[sheetName];

                                        // Konversi data Excel ke format JSON
                                        var jsonData = XLSX.utils.sheet_to_json(sheet, { header: 1 });

                                        // Simpan data dalam sessionStorage
                                        sessionStorage.setItem('DataTest', JSON.stringify(jsonData));
                                    };

                                    reader.readAsBinaryString(file);

                                    document.getElementById("btn_prediksi").disabled = false;
                                    /* document.getElementById("btn_print").disabled = false; */

                                    location.reload();
                                }

                            </script>
                            <!-- SCRIPT JS INPUT EXCEL -->





                            <!-- SCRIPT TAMPIL DATA EXCEL DI SESSION -->
                            <script>

                                function singleInput() {
                                    let dataset = JSON.parse(sessionStorage.getItem('Dataset'));
                                    let nilai_k = document.getElementById('nilai_k').value;

                                    let date = document.getElementById('date').value;
                                    let open = document.getElementById('open').value;
                                    let high = document.getElementById('high').value;
                                    let low = document.getElementById('low').value;
                                    let close = document.getElementById('close').value;

                                    let dataTest = new Array(date, open, high, low, close);

                                    let result = knn(dataTest, dataset, nilai_k);

                                    document.getElementById('hasil_single').value = result;
                                }


                                function main() {
                                    // Mendapatkan data dari sessionStorage
                                    var jsonData = JSON.parse(sessionStorage.getItem('DataTest'));

                                    if (jsonData) {
                                        // Buat tabel HTML dari data JSON
                                        var htmlTable = '<tr>';
                                        for (var i = 0; i < jsonData[0].length; i++) {
                                            htmlTable += '<th>' + jsonData[0][i] + '</th>';
                                        }
                                        htmlTable += '</tr>';

                                        for (var j = 1; j < jsonData.length; j++) {
                                            htmlTable += '<tr>';
                                            for (var k = 0; k < jsonData[j].length; k++) {
                                                htmlTable += '<td>' + jsonData[j][k] + '</td>';
                                            }
                                            htmlTable += '</tr>';
                                        }

                                        // Tampilkan tabel HTML
                                        var dataTable = document.getElementById('dataTable');
                                        dataTable.innerHTML = htmlTable;
                                    } else {
                                        // Tampilkan pesan jika data tidak ditemukan
                                        let tableContainer = document.getElementById("tableContainer");
                                        tableContainer.innerHTML += '<h4 class="text-center" style="height:100%">-- Tidak ada data --</h4>';
                                        document.getElementById("btn_prediksi").disabled = true;
                                        /* document.getElementById("btn_print").disabled = true; */
                                    }
                                }

                                main();
                            </script>
                            <!-- SCRIPT TAMPIL DATA EXCEL DI SESSION -->


                            <!-- SCRIPT PREDIKSI DATA -->
                            <script>
                                // Mendapatkan data dataset dari sessionStorage
                                var dataset = JSON.parse(sessionStorage.getItem('Dataset'));

                                // Mendapatkan data test dari sessionStorage
                                var testData = JSON.parse(sessionStorage.getItem('DataTest'));

                                if (dataset && testData) {
                                    document.getElementById("btn_prediksi").disabled = false;
                                    /* document.getElementById("btn_print").disabled = false; */
                                    // Fungsi untuk menghitung jarak euclidean antara dua data
                                    function euclideanDistance(data1, data2) {
                                        let sum = 0;
                                        for (let i = 1; i < data1.length - 1; i++) {
                                            sum += Math.pow(data1[i] - data2[i], 2);
                                        }
                                        return Math.sqrt(sum);
                                    }
                                }


                                /* FUNGSI KNN */
                                // Fungsi KNN untuk menentukan keputusan
                                function knn(dataTest, dataset, k) {
                                    // Menyimpan jarak dan label setiap data pada dataset
                                    let distances = [];
                                    for (let i = 1; i < dataset.length; i++) {
                                        let distance = euclideanDistance(dataTest, dataset[i]);
                                        distances.push({ distance: distance, label: dataset[i][dataset[i].length - 1] });
                                    }

                                    // Mengurutkan berdasarkan jarak terdekat
                                    distances.sort((a, b) => a.distance - b.distance);

                                    // Mengambil k tetangga terdekat
                                    let neighbors = distances.slice(0, k);

                                    // Menghitung jumlah label dan memilih label mayoritas
                                    let labelsCount = {};
                                    for (let neighbor of neighbors) {
                                        if (labelsCount[neighbor.label]) {
                                            labelsCount[neighbor.label]++;
                                        } else {
                                            labelsCount[neighbor.label] = 1;
                                        }
                                    }

                                    // Memilih label mayoritas
                                    let maxLabel = "";
                                    let maxCount = 0;
                                    for (let label in labelsCount) {
                                        if (labelsCount[label] > maxCount) {
                                            maxLabel = label;
                                            maxCount = labelsCount[label];
                                        }
                                    }

                                    return maxLabel;
                                }
                                /* FUNGSI KNN */


                                function run_knn() {
                                    let dataset = JSON.parse(sessionStorage.getItem('Dataset'));
                                    let dataTest = JSON.parse(sessionStorage.getItem('DataTest'));

                                    let nilai_k = document.getElementById('nilai_k').value;

                                    // Hasil KNN untuk seluruh data test
                                    let results = [];

                                    // Loop untuk setiap data test
                                    for (let i = 1; i < dataTest.length; i++) {
                                        if (dataTest[i].length != 0) {
                                            let result = knn(dataTest[i], dataset, nilai_k);
                                            dataTest[i].push(result);
                                            results.push(dataTest[i]);
                                        }
                                    }

                                    // Menyimpan hasil KNN dalam sessionStorage
                                    sessionStorage.setItem("HasilPrediksi", JSON.stringify(results));

                                    // Menampilkan hasil KNN
                                    console.log("Hasil KNN untuk Seluruh Data Test:", results);

                                    show_prediksi(results);

                                }

                                /* TAMPILKAN HASIL PREDIKSI */
                                function show_prediksi(jsonData) {
                                    // Membuat elemen tabel
                                    var table = document.createElement('table');
                                    table.classList.add('table');
                                    table.classList.add('table-container');

                                    // Menambahkan thead
                                    var thead = table.createTHead();
                                    var headerRow = thead.insertRow(0);

                                    // Menambahkan judul kolom thead
                                    var dataSet = JSON.parse(sessionStorage.getItem('Dataset'));
                                    for (var i = 0; i < dataSet[0].length; i++) {
                                        var headerCell = headerRow.insertCell(i);
                                        headerCell.innerHTML = dataSet[0][i]; // Menggunakan nilai pertama dari setiap sub-array sebagai judul kolom
                                    }

                                    // Mengisi data ke dalam tabel
                                    for (var i = 0; i < jsonData.length; i++) {
                                        // Mengecek apakah data adalah array
                                        if (Array.isArray(jsonData[i])) {
                                            var row = table.insertRow(-1);

                                            // Loop through each element in the sub-array
                                            for (var j = 0; j < jsonData[i].length; j++) {
                                                var cell = row.insertCell(-1);
                                                cell.innerHTML = jsonData[i][j];
                                            }
                                        } else {

                                            var signalCell = table.insertRow(-1).insertCell(-1);
                                            signalCell.colSpan = jsonData[0].length; // Span the entire row
                                            signalCell.innerHTML = jsonData[i];
                                        }


                                    }

                                    // Menambahkan tabel ke dalam elemen dengan id "table-container"
                                    document.getElementById('HasilPrediksi').innerHTML = '';
                                    document.getElementById('HasilPrediksi').appendChild(table);
                                    document.getElementById('predictionResult').innerText = '';
                                }
                                /* TAMPILKAN HASIL PREDIKSI */


                            </script>
                            <!-- SCRIPT PREDIKSI DATA -->










                        </div>
                    </div>
                    <!-- ISI CONTENT -->

                    <!-- FOOTER -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </div>

                        </div>
                    </footer>
                    <!-- FOOTER -->

                    <div class="content-backdrop fade"></div>


                </div>
                <!-- CONTENT -->

            </div>
            <!-- ISI -->

        </div>
    </div>
    <!-- ISI HALAMAN -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>