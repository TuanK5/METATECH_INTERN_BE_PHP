<?php
$url = 'https://listverse.com/2024/03/14/ten-strange-but-true-geography-facts/';
$curl = curl_init();
$requestType = 'GET';
curl_setopt_array($curl,[
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => $requestType,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_RETURNTRANSFER => true // Thiết lập để cURL trả về nội dung thay vì in ra
]);

$response = curl_exec($curl);
curl_close($curl);

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($response); // Sử dụng nội dung trả về từ curl, không phải URL
$xpath = new DOMXPath($dom);

    $sectionTitleNode = $xpath->query('//*[@id="top"]/div[1]/div/section[2]/div[2]/article/h1');
    $firstItem = $sectionTitleNode->item(0);
    echo "<h1>".$firstItem->nodeValue."</h1>";

    for($i = 1;$i<=3;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 3) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[1]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_qT6hYIa0smQ"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    
    //=======================================================
    echo "<br><br>";

    for($i = 4;$i<=8;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 8) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[2]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_5Cl2tqsW06w"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //===========================================================================
    echo "<br><br>";

    for($i = 9;$i<=14;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 14) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[3]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_I8rMXIWZ0mw"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //======================================================================
    echo "<br><br>";

    for($i = 15;$i<=18;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 18) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[4]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_JOJp1NUA9bA"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //============================================================
    echo "<br><br>";

    for($i = 19;$i<=22;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 22) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[5]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_6uwkqv9icvI"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //=====================================================================================
    echo "<br><br>";

    for($i = 23;$i<=26;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 26) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[6]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_kCbqkcALcnM"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //==================================================================================
    echo "<br><br>";

    for($i = 27;$i<=30;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 30) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[7]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_VxFCHr3ufgc"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //==================================================================================
    echo "<br><br>";

    for($i = 31;$i<=35;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 35) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[8]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_HBlZlmXyR5M"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //==================================================================================
    echo "<br><br>";

    for($i = 36;$i<=40;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 40) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[9]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_FB1rFzfkCQo"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //==================================================================================
    echo "<br><br>";

    for($i = 41;$i<=44;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i < 44) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[10]');
    $secondItem = $OneTitleNode->item(0);
    echo "<h2>".$secondItem->nodeValue."</h2>";

    $VideoTitleNode = $xpath->query('//*[@id="WYL_0chmd9JHN-Y"]/div[1]/meta[2]');
    $iframeSrc = $VideoTitleNode->item(0)->getAttribute('content');
    echo "<iframe src=".$iframeSrc."></iframe>";
    //==================================================================================
    echo "<br><br>";

    for($i = 45;$i<=48;$i++){
        $pcontentTitleNode = $xpath->query('//*[@id="articlecontentonly"]/p['.$i.']');
        $contentitem = $pcontentTitleNode->item(0);
        echo trim($contentitem->nodeValue);
        if ($i <= 48) {
            echo "<br><br>";
        }
    }

    $OneTitleNode = $xpath->query('//*[@id="articlecontentonly"]/h2[11]');
    $secondItem = $OneTitleNode->item(0);
?>

