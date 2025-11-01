<?php

require_once('./Lingkaran.php'); 

use App\Math\LuasLingkaran; 

$lingkaran = new LuasLingkaran(10);

$lingkaran->tampil('roda'); 

LuasLingkaran::testing(); 