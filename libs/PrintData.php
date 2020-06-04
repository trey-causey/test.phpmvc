<?php

class PrintData {
    public static function testPrint ($row) {
        printf(
            '<li>%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s</li>',
            htmlspecialchars($row['vehicle_id'], ENT_QUOTES),
            htmlspecialchars($row['VIN'], ENT_QUOTES),
            htmlspecialchars($row['yearModel'], ENT_QUOTES),
            htmlspecialchars($row['make'], ENT_QUOTES),
            htmlspecialchars($row['model'], ENT_QUOTES),
            htmlspecialchars($row['mileage'], ENT_QUOTES),
            htmlspecialchars($row['stockNumber'], ENT_QUOTES),
            htmlspecialchars($row['retailPrice'], ENT_QUOTES),
            htmlspecialchars($row['salesPrice'], ENT_QUOTES),
            htmlspecialchars($row['retailMinusSalesPrice'], ENT_QUOTES),
            htmlspecialchars($row['image'], ENT_QUOTES)
        );
    }

}


