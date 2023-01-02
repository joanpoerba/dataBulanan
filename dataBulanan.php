<?php
date_default_timezone_set("Asia/Jakarta");

$dataBulanan = [
  "januari" => [
    "tanggal" => 13,
    "pendapatan" => 50_000,
    "pengeluaran" => 23_000,
  ],
  "maret" => [
    "tanggal" => 27,
    "pendapatan" => 34_000,
    "pengeluaran" => 30_000,
  ],
  "agustus" => [
    "tanggal" => 5,
    "pendapatan" => 73_000,
    "pengeluaran" => 15_000,
  ]
];

foreach($dataBulanan as $keySisa => $datas){
  $dataSisa = $datas["pendapatan"] - $datas["pengeluaran"];
  $datas["sisa"] = $dataSisa;
  $dataBulanan[$keySisa] = $datas;
}

$now = date("l, j/M/Y,  H:i:s", strtotime("now"));
$limit = date("l, j/M/Y,  H:i:s", mktime(8, 39, 0, 1, 1, 2023));

$dataSemiTahunan = [];

if($now >= $limit){
  array_push($dataSemiTahunan, $dataBulanan);

  foreach($dataSemiTahunan as $dataTahunan){
    foreach($dataTahunan as $datas){
      $dataBulanan = [];
      array_push($dataBulanan, $datas);
      array_shift($dataBulanan);
    }
  }
}
?>