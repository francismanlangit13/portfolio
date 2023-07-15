<?php
    if(isset($_SESSION['status']) && $_SESSION['status_code'] !='' ){
?>
<script>
    setTimeout(function() {
        swal({
            title: "<?php echo $_SESSION['status']; ?>",
            icon: "<?php echo $_SESSION['status_code']; ?>",
            timer: 2500,
            button: "Close",
        }).then(
            function () {},
            // handling the promise rejection
            function (dismiss) {
                if (dismiss === 'timer') {
                    //console.log('I was closed by the timer')
                }
            }
        )
    });
</script>
<?php
    unset($_SESSION['status']);
    unset($_SESSION['status_code']);
}
?>