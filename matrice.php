<?php


if (!empty($_POST['number'])) {

    $array = explode('-', $_POST['number']);

    if (count($array) == 9) {

        for ($i = 0; $i < 9; $i++) {
            if ($i < 3) {
                $arr1[$i] = $array[$i];
            } else if ($i >= 3 && $i < 6) {
                $arr2[$i-3] = $array[$i];
            } else if ($i >= 6) {
                $arr3[$i-6] = $array[$i];
            }
        }

        // $arr1 = [1, 2, 3];
        // $arr2 = [4, 5, 6];
        // $arr3 = [7, 8, 9];

        for ($i = 0; $i < 3; $i++) {
            $arrRev1[$i] = $arr1[$i];
            $arrRev2[$i] = $arr2[$i];
            $arrRev3[$i] = $arr3[$i];
        }

        for ($i = 0; $i < 3; $i++) {
            for ($i = 0; $i < 3; $i++) {
                if ($i != 0) {
                    $arr1[$i - 1] = $arr1[$i];
                    $arr2[$i - 1] = $arr2[$i];
                    $arr3[$i - 1] = $arr3[$i];
                } else {
                    $arr1[3] = $arr1[$i];
                    $arr2[3] = $arr2[$i];
                    $arr3[3] = $arr3[$i];
                }
                if ($i == 2) {
                    $arr1[$i] = $arr1[3];
                    unset($arr1[3]);
                    $arr2[$i] = $arr2[3];
                    unset($arr2[3]);
                    $arr3[$i] = $arr3[3];
                    unset($arr3[3]);
                }
            }
        }
        $arrRow = [
            $arr1,
            $arr2,
            $arr3
        ];
        $arrRowRev = [
            $arrRev1,
            $arrRev2,
            $arrRev3
        ];


        for ($i = 0; $i < 3; $i++) {

            for ($j = 0; $j < 3; $j++) {

                if ($i + $j == 3) {
                    $results[$i][$j] = $arrRow[0];
                    $result[$i][$j] = $arrRowRev[0];
                } else if ($i + $j == 4) {
                    $results[$i][$j] = $arrRow[1];
                    $result[$i][$j] = $arrRowRev[1];
                } else {
                    $results[$i][$j] = $arrRow[$i + $j];
                    $result[$i][$j] = $arrRowRev[$i + $j];
                }
            }
        }
        for ($i = 2; $i >= 0; $i--) {
            for ($i = 2; $i > 0; $i--) {
                if ($i != 2) {
                    $arrRev1[$i + 1] = $arrRev1[$i];
                    $arrRev2[$i + 1] = $arrRev2[$i];
                    $arrRev3[$i + 1] = $arrRev3[$i];
                } else {
                    $arrRev1[3] = $arrRev1[$i - 2];
                    $arrRev2[3] = $arrRev2[$i - 2];
                    $arrRev3[3] = $arrRev3[$i - 2];
                    $arrRev1[$i - 2] = $arrRev1[$i];
                    $arrRev2[$i - 2] = $arrRev2[$i];
                    $arrRev3[$i - 2] = $arrRev3[$i];
                }
                if ($i == 1) {
                    $arrRev1[$i] = $arrRev1[3];
                    $arrRev2[$i] = $arrRev2[3];
                    $arrRev3[$i] = $arrRev3[3];
                }
            }
        }
        unset($arrRev1[3]);
        unset($arrRev2[3]);
        unset($arrRev3[3]);
        $arrRowRev = [
            $arrRev1,
            $arrRev2,
            $arrRev3
        ];

        $l = 0;
        for ($i = 0; $i < 3; $i++) {


            for ($j = 0; $j < 3; $j++) {
                $l++;

                if ($l == 1) {
                    $Result[$i][$j] = $arrRowRev[1];
                } else if ($l % 2 == 0 && $l < 6) {
                    $Result[$i][$j] = $arrRowRev[0];
                } else if ($l % 2 == 1 && $l > 1 && $l < 9) {
                    $Result[$i][$j] = $arrRowRev[2];
                } else if ($l % 2 == 0 && $l > 4) {
                    $Result[$i][$j] = $arrRowRev[1];
                }
                if ($l == 9) {
                    $Result[$i][$j] = $arrRowRev[0];
                }
            }
        }



        $l = 0;
        $k = 9;
        $m = 18;



        for ($i = 0; $i < 3; $i++) {


            for ($j = 0; $j < 3; $j++) {

                $Result1[$l] = $result[$i][$j];
                $Result2[$k] = $results[$i][$j];
                $Result3[$m] = $Result[$i][$j];


                $l++;
                $k++;
                $m++;
            }
        }
    } else {
        echo '<script> alert("please enter 9 numbers")</script>';
        die;
    }
}
