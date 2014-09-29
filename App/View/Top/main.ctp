<p>のっけてリクエスト</p>

<?php
foreach ($list as $row) {
$row['RideRequest']['date_begin'] = date('m月d日H:i', strtotime($row['RideRequest']['date_begin']));
$row['RideRequest']['date_end'] = date('H:i', strtotime($row['RideRequest']['date_end']));
$date = $row['RideRequest']['date_begin'] . "〜" . $row['RideRequest']['date_end'];
?>
<table>
  <tr>
    <td><a href="https://www.facebook.com/app_scoped_user_id/<?php echo h($row['RideRequest']['fb_account']);?>/"><img src="<?php echo h($row["RideRequest"]['image']);?>" alt="サンプル" width="100" height="100" border="1"></td>
    <td><?php echo h($row["RideRequest"]['name']); ?><br><br>
        出発地　<?php echo h($row["RideRequest"]['start_place']);?>　　<br>
        到着地　<?php echo h($row["RideRequest"]['goal_place']);?></td>
    <td>★★<br>
        日時<br>
        <?php echo $date; ?></td>
    <tr>
    <td colspan="3"><?php echo h($row["RideRequest"]['message']);?>
<br>
<button  value="のせる!!">のせる!!</button>

    </td>
    
    </tr>
  </tr>
</table>
<hr>
<?php
}
?>
<table>
  <tr>
    <td><img src="/img/gassyo1.jpg" alt="サンプル" width="100" height="100" border="1"></td>
    <td>がっしょうくん1<br><br>
        出発地　金沢市武蔵が辻　　<br>
        到着地　南砺市福光</td>
    <td>★★<br>
        日時<br>
        9月16日18:00〜18:30</td>
    <tr>
    <td colspan="3">がっしょうくん1です。16日にお願いします。</td>
    </tr>
  </tr>
</table>
<hr>

<table>
  <tr>
    <td><img src="/img/gassyo2.jpg" alt="サンプル" width="100" height="100" border="1"></td>
    <td>がっしょうくん2<br><br>
        出発地　金沢市武蔵が辻　　<br>
        到着地　南砺市福光</td>
    <td>★★★<br>
        日時<br>
        9月16日18:00〜18:30</td>
    <tr>
    <td colspan="3">がっしょうくん2です。飲み会帰りです。。</td>
    </tr>
  </tr>
</table>

<hr>
<table>
  <tr>
    <td><img src="/img/gassyo3.jpg" alt="サンプル" width="100" height="100" border="1"></td>
    <td>がっしょうくん3<br><br>
        出発地　金沢市武蔵が辻　　<br>
        到着地　南砺市城端</td>
    <td>★★★★<br>
        日時<br>
        9月20日17:00〜17:30</td>
    <tr>
    <td colspan="3">がっしょうくん3です。運転の大好きな方大歓迎！</td>
    </tr>
  </tr>
</table>
<hr>
<table>
  <tr>
    <td><img src="/img/gassyo4.jpg" alt="サンプル" width="100" height="100" border="1"></td>
    <td>がっしょうくん4<br><br>
        出発地　金沢市武蔵が辻　　<br>
        到着地　南砺市福光</td>
    <td>★★<br>
        日時<br>
        9月21日18:00〜18:30</td>
    <tr>
    <td colspan="3">がっしょうくん4です。趣味の合う方がいいです。</td>
    </tr>
  </tr>

</table>

