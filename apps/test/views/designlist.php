<?
$rarities = array('cRarityCommon' => 'common',
                  'cRarityUncommon' => 'uncommon',
                  'cRarityRare' => 'rare',
                  'cRarityEpic' => 'epic');
?>
<br />
<table>
<?
$i = 0;
foreach ($data as $k=>$n) {
  if ($i == 0) { ?>
  <tr><?}?>
  <td>
  <? start_tooltip(); ?>
<div style="width: 200px; vertical-align: middle">
	<a href="/designs/<?=$n['name']?>">
		<img src="/images/Art/<?=$n['icon']?>.png" style="float: left; width:40px; margin-right: 5px">
	</a>
	<a href="/designs/<?=$n['name']?>" style="font-size: 16px; text-decoration: none"><span class="itemname <?=$rarities[$n['rarity']]?>rarity"><?=$n['displayname']?></span></a>
</div>
<? end_tooltip(); ?>
</td>
<?php if($i==2){?>
	</tr>
	<? $i =0; } else {$i++;}
	
}?>
</table>