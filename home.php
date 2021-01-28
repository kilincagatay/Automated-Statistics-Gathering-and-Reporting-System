<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tuik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>

    <?php
        $baglanti = mysqli_connect('localhost','root', '', 'tuik');
        $baglanti->set_charset("utf8");
        if(!$baglanti){
            die();
        }
        else{
            echo "";
        }
    ?>



<header class="alignFilterSection">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="width:80%;">
        <a class="navbar-brand" href="home.php"><img src="images/tuik_logo_white_tr.svg" style="width:80px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto" style="margin-left:70px;">
                <li class="nav-item">
                    <a class="nav-link active" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0" method="POST">
                <input required class="form-control mr-sm-2" type="text" name="searchText"  value="<?php echo isset($_POST['searchText']) ? $_POST['searchText'] : ""; ?>" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search">Search</button>
            </form>
        </div>
    </nav>
</header>

<div class="container-fluid bodyAlign">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" id="leftBarResponsive">
            <div class="sidebar leftContainer" id="leftBar">
                <div class="card" style="margin-bottom: 70px;">

                    <form method="POST">

                        <article class="card-group-item">
                            <header class="card-header">
                                <h6 class="title">Select Sub-Category</h6>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                    <input type="text" name="cat" class="form-control" value="<?php echo isset($_POST['cat']) ? $_POST['cat'] : ""; ?>" placeholder="Sub-Category">
                                </div>
                            </div>
                        </article>

                        <article class="card-group-item">
                            <header class="card-header">
                                <h6 class="title">Select Year (2020, 2015, etc.)</h6>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                    <input type="number" name="year"  value="<?php echo isset($_POST['year']) ? $_POST['year'] : ""; ?>" class="form-control" placeholder="Year">
                                </div>
                            </div>
                        </article>


                        <article class="card-group-item">
                            <header class="card-header">
                                <h6 class="title">Select Month</h6>
                            </header>
                            <div class="filter-content">
                                <div class="card-body">
                                    <div class="alignMonth">
                                        <div class="alignMonthVertical">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(1,$_POST['month'])) ?  "checked" : ""; ?> id="january" value="1">
                                                <span class="form-check-label">
                                                    January
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(2,$_POST['month'])) ?  "checked" : ""; ?> id="february" value="2">
                                                <span class="form-check-label">
                                                    February
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(3,$_POST['month'])) ?  "checked" : ""; ?> id="march" value="3">
                                                <span class="form-check-label">
                                                    march
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(4,$_POST['month'])) ?  "checked" : ""; ?> id="april" value="4">
                                                <span class="form-check-label">
                                                    April
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(5,$_POST['month'])) ?  "checked" : ""; ?> id="may" value="5">
                                                <span class="form-check-label">
                                                    May
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(6,$_POST['month'])) ?  "checked" : ""; ?> id="june" value="6">
                                                <span class="form-check-label">
                                                    June
                                                  </span>
                                            </label>
                                        </div>
                                        <div class="alignMonthVertical">
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(7,$_POST['month'])) ?  "checked" : ""; ?> id="july" value="7">
                                                <span class="form-check-label">
                                                    July
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(8,$_POST['month'])) ?  "checked" : ""; ?> id="august" value="8">
                                                <span class="form-check-label">
                                                    August
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(9,$_POST['month'])) ?  "checked" : ""; ?> id="september" value="9">
                                                <span class="form-check-label">
                                                    September
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(10,$_POST['month'])) ?  "checked" : ""; ?> id="october" value="10">
                                                <span class="form-check-label">
                                                    October
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(11,$_POST['month'])) ?  "checked" : ""; ?> id="november" value="11">
                                                <span class="form-check-label">
                                                    November
                                                  </span>
                                            </label>
                                            <label class="form-check">
                                                <input class="form-check-input" type="checkbox" name="month[]" <?php echo  (isset($_POST['month'] ) && in_array(12,$_POST['month'])) ?  "checked" : ""; ?> id="december" value="12">
                                                <span class="form-check-label">
                                                    December
                                                  </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <article>
                            <div class="col-md-12 mb-4">
                                <button class="btn btn-primary w-100 mt-1" type="submit" name="filter">Filter</button>
                            </div>
                        </article>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9" id="rightBarResponsive">
            <div class="row " id="rightBar">
                <div class="col-md-12">
                    <div class="">
                        <?php

                            $sorgu = "SELECT * FROM pivot";

                            if(isset($_POST['search'])){

                                $wordKey = $_POST['searchText'];

                                echo '<div class="alignFilterName">';

                                if($wordKey != '') {
                                    echo '<div class="filterName">';
                                    echo $wordKey;
                                    echo '</div>';
                                }

                                echo '</div>';

                                echo '</br>';


                                if($wordKey != '') {
                                    $sorgu="SELECT * FROM pivot
                                        WHERE col1 LIKE '%$wordKey%'
                                            OR col2 LIKE '%$wordKey%'
                                            OR ocak LIKE '%$wordKey%'
                                            OR subat LIKE '%$wordKey%'
                                            OR mart LIKE '%$wordKey%'
                                            OR nisan LIKE '%$wordKey%'
                                            OR mayis LIKE '%$wordKey%'
                                            OR haziran LIKE '%$wordKey%'
                                            OR temmuz LIKE '%$wordKey%'
                                            OR agustos LIKE '%$wordKey%'
                                            OR eylul LIKE '%$wordKey%'
                                            OR ekim LIKE '%$wordKey%'
                                            OR kasim LIKE '%$wordKey%'
                                            OR aralik LIKE '%$wordKey%'";

                                    $language = array();

                                }

                            }
                            else if(isset($_POST['filter'])){

                                $year = $_POST['year'];
                                $cat = $_POST['cat'];

                                if($year != '' || $cat != '') {
                                    $sorgu = "SELECT * FROM pivot
                                        WHERE (col2 LIKE '%$year%') AND (col1 LIKE '%$cat%')";

                                }

                                echo '<div class="alignFilterName">';

                                if($year != '') {
                                    echo '<div class="filterName">';
                                    echo $year;
                                    echo '</div>';
                                }

                                if($cat != '') {
                                    echo '<div class="filterName">';
                                    echo $cat;
                                    echo '</div>';
                                }

                                echo '</div>';

                                echo '</br>';


                            }

                        $sorguSonucu = mysqli_query($baglanti, $sorgu);

                        while ($array = mysqli_fetch_array($sorguSonucu)) {

                            $details =  '';

                            if(isset($_POST['month'])) {


                                $details = "";

                                foreach($_POST['month'] as $month){
                                    switch ($month){
                                        case 1:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Ocak ayı sonu itibarıyla '.$array['ocak'].' oldu <br/>';
                                            break;

                                        case 2:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Subat ayı sonu itibarıyla '.$array['subat'].' oldu <br/>';
                                            break;

                                        case 3:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Mart ayı sonu itibarıyla '.$array['mart'].' oldu <br/>';
                                            break;

                                        case 4:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Nisan ayı sonu itibarıyla '.$array['nisan'].' oldu <br/>';
                                            break;

                                        case 5:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Mayis ayı sonu itibarıyla '.$array['mayis'].' oldu <br/>';
                                            break;

                                        case 6:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Haziran ayı sonu itibarıyla '.$array['haziran'].' oldu <br/>';
                                            break;

                                        case 7:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Temmuz ayı sonu itibarıyla '.$array['temmuz'].' oldu <br/>';
                                            break;

                                        case 8:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Agustos ayı sonu itibarıyla '.$array['agustos'].' oldu <br/>';
                                            break;

                                        case 9:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Eylul ayı sonu itibarıyla '.$array['eylul'].' oldu <br/>';
                                            break;

                                        case 10:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Ekim ayı sonu itibarıyla '.$array['ekim'].' oldu <br/>';
                                            break;

                                        case 11:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Kasim ayı sonu itibarıyla '.$array['kasim'].' oldu <br/>';
                                            break;

                                        case 12:
                                            $details .= '&nbsp;&nbsp;&nbsp;&nbsp;Aralik ayı sonu itibarıyla '.$array['aralik'].' oldu <br/>';
                                            break;

                                        default:
                                            break;

                                    }
                                }

                            }


                            echo '<div class="list">';
                            echo '<h4>' . $array['col1'];
                            echo ', '.$array['col2'];
                            echo '<br>';
                            echo '<br>';
                            echo '<font style="margin-top:50px; font-size: 20px; color:gray;">'.''.$details.'</font>';
                            echo '</h3>';
                            echo '</div>';
                        }
                        ?>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>



<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>



    <script>
        window.onresize = displayWindowSize;
        window.onload = displayWindowSize;

        function displayWindowSize() {
            let myWidth = window.innerWidth;

            if(myWidth < 1300) {
                $('#leftBarResponsive').removeClass('col-md-3');
                $('#leftBarResponsive').addClass('col-md-12');
                $('#rightBarResponsive').removeClass('col-md-9');
                $('#rightBarResponsive').addClass('col-md-12');

                $('#leftBarResponsive').removeClass('col-lg-3');
                $('#leftBarResponsive').addClass('col-lg-12');
                $('#rightBarResponsive').removeClass('col-lg-9');
                $('#rightBarResponsive').addClass('col-lg-12');

                $('#leftBar').removeClass('leftContainer');
            }
            else {
                $('#leftBarResponsive').removeClass('col-md-12');
                $('#leftBarResponsive').addClass('col-md-3');
                $('#rightBarResponsive').removeClass('col-md-12');
                $('#rightBarResponsive').addClass('col-md-9');

                $('#leftBarResponsive').removeClass('col-lg-12');
                $('#leftBarResponsive').addClass('col-lg-3');
                $('#rightBarResponsive').removeClass('col-lg-12');
                $('#rightBarResponsive').addClass('col-lg-9');

                $('#leftBar').addClass('leftContainer');
            }

        };

    </script>



</body>
</html>
