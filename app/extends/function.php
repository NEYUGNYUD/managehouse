<?php
function test(){
    ;die;
}
session_start();
function checkLoginAdmin(){

    if(isset($_SESSION['InfoUser']) && $_SESSION['InfoUser']!=''){
        return true;
    }else{
        return false;
//        return redirect()->route('getLogin');
    }
}
function getUrlHomes(){
    $urlHomes = URL::to('/');
    echo $urlHomes;
}
?>
<?php
//NhÃºng upload file
function showUploadFile($idInput = '', $nameInput = '', $value = '', $number = '') { ?>

    <script src="<?php echo URL::to('/');?>/public/include/ckfinder/ckfinder.js" ></script>
    <script type="text/javascript">
        function BrowseServerImg<?php echo $number; ?>() {
            var finder = new CKFinder();
            //finder.basePath = '../';
            finder.selectActionFunction = SetFileFieldImg<?php echo $number; ?>;
            finder.popup();
        }

        function SetFileFieldImg<?php echo $number; ?>(fileUrl) {
            document.getElementById('<?php echo $idInput; ?>').value = fileUrl;
        }
    </script>
    <input style="float: left;" type="text" name="<?php echo $nameInput; ?>" id='<?php echo $idInput; ?>' value="<?php echo $value; ?>" />
    <input type="button" value="Lựa chọn" onclick="BrowseServerImg<?php echo $number; ?>();" />
    <?php
}
?>
<?php
//NhÃºng trÃ¬nh soáº¡n tháº£o
function showEditorInput($idEditor = '', $nameEditor = '', $content = '') { ?>
    <script language="javascript" src="<?php echo URL::to('/');?>/public/include/ckeditor/ckeditor.js" type="text/javascript"></script>
    <textarea style="border: 1px solid #abadb3;height: auto;" class="form-control"  id="<?php echo $idEditor; ?>" name="<?php echo $nameEditor; ?>" ><?php echo $content; ?></textarea>
    <script type="text/javascript">CKEDITOR.replace('<?php echo $idEditor; ?>');</script>
    <?php
}
?>