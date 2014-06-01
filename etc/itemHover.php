<?php

$name = $_REQUEST["name"];
$gold = $_REQUEST["gold"];
$description = $_REQUEST["description"];
$version = $_REQUEST["version"];
$image_file = $_REQUEST["image"];
$image = "http://ddragon.leagueoflegends.com/cdn/$version/img/item/$image_file";

echo <<<EOT
<div class="Tooltip ItemTooltip">
    <!-- Image, Name, Gold -->
    <div class="TooltipBlock TooltipContainer">
        <img class="TooltipImage ItemTooltipImage" src="$image" width="25px" height="25px" />
        <div class="TooltipBlock">
            <span class="TooltipHeading ItemTooltipHeading">$name</span>
            <br />
            <span class="">Gold: </span><span class="ItemTooltipGold">$gold</span>
        </div>

    </div>
    <!-- Description -->
    <div class="TooltipBlock">
        <span class="ItemTooltipDescription">$description</span>
    </div>
</div>
EOT;
?>
