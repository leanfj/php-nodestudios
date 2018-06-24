<?php session_start();
  if(isset($_SESSION["msg"])):
?>
    <script>
      window.onload = function() {
        M.toast({html: '<?php echo $_SESSION["msg"];?>', classes: 'rounded' });
      }
    </script>
<?php
  endif;
  session_unset();
?>