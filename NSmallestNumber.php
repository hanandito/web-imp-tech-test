<?php

$B = [5408, 6604, 32158, 84984, 8774, 34871];
        $nilai = "";
        $sukuken = 0;
        $i = 0;
        foreach ($B as $valueB) {
            $i++;
            if ($nilai == "") {
                $nilai = $valueB;
                $sukuken = $i;
            } else {
                if ($nilai > $valueB) {
                    $nilai = $valueB;
                    $sukuken = $i;
                }
            }
        }

        echo "suku ke-" . $sukuken . " dengan nilai = " . $nilai;

?>