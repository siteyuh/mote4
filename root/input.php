<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>入力画面</title>
<style>
  
  #news {
/*    height: 240px;*/
/*    position: fixed;*/
/*    background: white;*/
/*    border-bottom: 1px solid gray;*/
    z-index: 999;
  }
  #archives {
/*    position: absolute;*/
/*    top: 320px;*/
  }
  #news, .wrapper, #tip {
    margin: 0 auto;
    overflow: hidden;
    font-family:  -apple-system, BlinkMacSystemFont, roboto;
  }
  input[type="number"], input[type="date"] {
    box-sizing: border-box;
    font-size: 16px;
    width: 99%;
    outline: none;
  }
  input[type="submit"], input[type=button] {
    appearance: none;
    display: block;
    width: 200px;
    padding: 10px;
    margin-top: 10px;
    border: 1px solid #000;
    background: #fff;
    font-size: 16px;
  }
  textarea.confirm {
    border: none;
  }
  section h2 {
    font-size: 120%;
  }
  aside h2 {
    font-size: 100%;
    font-weight: normal;
  }
/* 414px以下のスクリーン */
@media only screen and (max-width: 414px) {
  #news, .wrapper, #tip, input[type="number"] {
    width: 90%;
  }
}
/* 大きいスクリーン */
@media only screen and (min-width: 415px) {
  #news, .wrapper, #tip {
    width: 480px;
  }
}
</style>
</head>

<body>

<section id="news">
  <div class="wrapper">
<?php if ($_POST['act'] == "confirm") { ?>
    <form action="/inc/setcsv.php" method="post">
      <input type="hidden" name="date" value="<?=$_POST['date']?>"><?=$_POST['date']?>
      <input type="hidden" name="weight" value="<?=$_POST['weight']?>"><?=$_POST['weight']?>kg
      <input type="hidden" name="fat" value="<?=$_POST['fat']?>"><?=$_POST['fat']?>%<br>
      <input type="submit" value="決定する">
      <input type="button" onclick="javascript:history.back();" value="戻って修正する">
    </form>
<?php } else { ?>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
      <input type="date" name="date">
      <input type="number" name="weight" step="0.1" placeholder="weight">
      <input type="number" name="fat" step="0.1" placeholder="fat">
      <input type="hidden" name="act" value="confirm"><input type="submit" value="確認">
    </form>
    
<?php } ?>
  </div>
</section>

<section id="archives">
  <div class="wrapper">
    <h2>過去のデータを表示しています</h2>
    <?php include('inc/list.php'); ?>
  </div>
</section>
</body>
</html>
