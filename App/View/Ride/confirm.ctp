<h2>のっけて!!<br> 乗車リクエスト</h2>

<form role="form" method="POST" action="/ride/finish/">
  <div class="form-group">
    <label for="exampleInputEmail1">出発地</label>
<?php echo h($data['start_place']);?>
<input type="hidden" name="data[start_place]" value="<?php echo h($data['start_place']);?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">目的地</label>
<?php echo h($data['goal_place']);?>
<input type="hidden" name="data[goal_place]" value="<?php echo h($data['goal_place']);?>">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">日時</label>
<?php echo h($data['date_begin']); ?>〜
<?php echo h($data['date_end']); ?>
<input type="hidden" name="data[date_begin]" value="<?php echo h($data['date_begin']);?>">
<input type="hidden" name="data[date_end]" value="<?php echo h($data['date_end']);?>">
</div>

<div class="form-group">
    <label for="exampleInputEmail1">ひとこと</label>
<textarea size="16"  rows="3" value="" class="form-control" name="data[message]" readonly=""><?php echo h($data['message']);?></textarea>

</div>

<br>
<strong>残高ポイント &nbsp;5000pt</strong>
<br>
<strong>利用ポイント &nbsp;500pt</strong>
<br>
<button type="submit" class="btn btn-default">登録</button>


</form>


