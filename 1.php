<?php

$mybiodata =
array(
	"name" => "Khoirul Syarifudin",
	"age" => 22,
	"address" => "Jl. Naula no 34 RT 09/06 Kelurahan Slerok Kec Tegal Timur",
	"hobbies" => array("Badminton", "Music"),
	"is_married" => false,
	"list_school" => array(
		array("name" => "SMK NMuhammadiyah 1 Tegal",
			"year_in" => "2013",
			"year_out" => "2016",
			"major" => "Teknik Mesin"),
		array("name" => "STMIK KHARISMA",
			"year_in" => "2017",
			"year_out" => "2020",
			"major" => "Sistem Informasi"),
	),
	"skills" => array(
		array("name" => "Web Development", "level" => "Advanced"),
	),
	"interest_in_coding" => true,
);

function formatJson($mybiodata) {
	return json_encode($mybiodata);
}

echo formatJson($mybiodata);

?>
