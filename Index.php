<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script>
        // fiktive Testdaten
        
        //Routernamen
        var ROUTER = new Map(); // MAC-Adresse, Routernummer / id, die später im Vektor der Stelle entspricht
        ROUTER
        .set("234512b4eb5e", 1)
        .set("84b4e1c2c384", 2)
        .set("56b4bb33b343",8)
        .set("42b324e73c89",4)
        .set("22bb4379bb51",3)
        .set("51bb4879d1d3",6)
        .set("51bb58794d43",5)
        .set("41bb4543c143",9)
        .set("83bb422c1143",7);
        
        //RSS-Footprints_Metadaten
        var RSS_Footprint_Sets = new Map(); // (SetID, IDs)
        RSS_Footprint_Sets.set("1",[1,7,22,15,13,4,7,23,11]);
        
        //RSS-Footprints
        var RSS_locations = new Map(); // (Footprint ID, x,y-Koordinaten, {(RouterID1, RSS Wert),(RouterID2, RSS Wert), ... , (RouterIDn, RSS Wert)}) //sollen die jeweils noch nen Timestamp bekommen? Macht das updaten dann leichter, aber das Nachgucken evtl. langsamer(??)
        RSS_locations
        .set("5",[3,5])
        .set("1",[18,25])
        .set("7",[35,309])
        .set("15",[18,45])
        .set("22",[37,14])
        .set("13",[99,07])
        .set("23",[14,13])
        .set("4",[29,48])
        .set("7",[13,18])
        .set("11",[22,22])
        .set("12",[304,15])
        .set("14",[29,39])
        .set("16",[45,47])
        .set("18",[45,48])
        .set("198",[39,41])
        .set("221",[19,39])
        .set("51",[27,58]);
        
        var RSS_values = new Map(); // (Footprint ID, [RSS Werte]);
        RSS_values
        .set("1",[33,,,32,,,66,,])
        .set("7",[13,,,44,,44,,,])
        .set("5",[,,99,,12,12,,87,])
        .set("15",[45,,22,22,,,,,])
        .set("22",[,,12,,,9,99,99,99])
        .set("13",[,11,,9,,99,,,])
        .set("23",[,11,,9,,99,,,])
        .set("4",[,,,,,,,,])
        .set("7",[,,45,,22,,,,])
        .set("11",[,,,45,,,,,])
        .set("12",[,,,,22,,,,])
        .set("14",[,,45,,,,,,])
        .set("18",[,,,23,,,22,2,])
        .set("198",[,,,32,2,,,,])
        .set("221",[,11,22,,,,,,]);
        
        function test(){
            for (var [key,value] of RSS_locations) {
                console.log("Footprint ID: " + key + "\nRSS-Werte: " + RSS_values.get(key) + "\n @: " + value);
            }
        }
        
        /* Matching 
        *  
        *  Für jede Location werden die einzelnen RSS Werte mit dem aktuellen Set verglichen.
        *  
        */
        
        var aktuelle_RSS = new Array();
        aktuelle_RSS = [22,0,0,34,0,9,0,0,0]; //TESTwerte
        
        var test_RSS = [22,0,0,4,12,0,48,0,0];
        
        function RSS_Distanz(aRSS, iRSS) {
            var sum = 0;
            for (var r = 0; r < aRSS.length; r++) {
                sum += Math.pow((aRSS[r]-iRSS[r]),2);
            }
            return Math.sqrt(sum);
        }
        
        RSS_Distanz(aktuelle_RSS,test_RSS);
        
    </script>
</head>
<body>
    
    <?php

    ?>
    
</body>
</html>