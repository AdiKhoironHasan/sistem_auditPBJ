<select name="tahun" id="tahun">
<?php
//Heri Priady//
//28 - 01- 2018//
$tg_awal= date('Y')-5;
$tgl_akhir= date('Y')+10;
for ($i=$tgl_akhir; $i>=$tg_awal; $i--)
{
echo "
<option value='$i'";
if(date('Y')==$i){echo "selected";}
echo">$i</option>";
}
?>
</select>