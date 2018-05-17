<?php
switch(getRequestParam("place", null)) {
    case "columbus":
        require_once "place_columbus.php";
        break;
    case "aviapark":
        require_once "place_aviapark.php";
        break;
    case "schuka":
        require_once "place_schuka.php";
        break;
    case "rivera":
        require_once "place_rivera.php";
        break;
    case "prince":
        require_once "place_prince.php";
        break;
    case "sevastopolskiy":
        require_once "place_sevastopolskiy.php";
        break;
    case "serpu":
        require_once "place_serpu.php";
        break;
    case "vegas_kashirskoe":
        require_once "place_vegas_kashirskoe.php";
        break;
    case "vegas_crocus":
        require_once "place_vegas_crocus.php";
        break;
    case "vegas_kuncevo":
        require_once "place_vegas_kuncevo.php";
        break;
    case "iun_mitishi":
        require_once "place_iun_mitishi.php";
        break;
    case "reutov_park":
        require_once "place_reutov_park.php";
        break;
    default:
        require_once "all_places.php";
}
