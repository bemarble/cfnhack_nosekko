<?php echo $this->Html->css('bootstrap-datetimepicker.min.css'); ?>
<?php echo $this->Html->script('bootstrap-datetimepicker.min.js'); ?>

<h2>のっけて!!<br> 乗車リクエスト</h2>

<form role="form" method="POST" action="confirm/">
  <div class="form-group">
    <label for="exampleInputEmail1">出発地</label>

  <select class="form-control" name="data[start_place]">
  <option value="">選択してください</option>
  <option value="南砺市福光">南砺市福光</option>
  <option value="南砺市城端">南砺市城端</option>
  <option value="南砺市福野">南砺市福野</option>
  <option value="南砺市菅沼">南砺市菅沼</option>
  <option value="金沢市武蔵が辻">金沢市武蔵が辻</option>
  <option value="金沢市片町">金沢市片町</option>
  <option value="金沢駅">金沢駅</option>
  </select>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">到着地</label>

  <select class="form-control" name="data[goal_place]">
  <option value="">選択してください</option>
  <option value="南砺市福光">南砺市福光</option>
  <option value="南砺市城端">南砺市城端</option>
  <option value="南砺市福野">南砺市福野</option>
  <option value="南砺市菅沼">南砺市菅沼</option>
  <option value="金沢市武蔵が辻">金沢市武蔵が辻</option>
  <option value="金沢市片町">金沢市片町</option>
  <option value="金沢駅">金沢駅</option>
  </select>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">日時</label>
<input size="16" type="text" value="" readonly class="form_datetime form-control" name="data[date_begin]">〜
<input size="16" type="text" value="" readonly class="form_datetime form-control" name="data[date_end]">

</div>

<div class="form-group">
    <label for="exampleInputEmail1">ひとこと</label>
<textarea size="16"  rows="3" value="" class="form-control" name="data[message]"></textarea>

</div>

<button type="submit" class="btn btn-default">確認</button>

</form>


<script type="text/javascript">
$('document').ready(function() {
   $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
});
</script> 
