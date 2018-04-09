<div class="container">
    
    <?php if(!$_SESSION){?>
    <center><img src="iot.jpg" width="800px"></center>
    <?php }else{?>
    
    <?php get_data($_SESSION['userId'],$_SESSION['password'])?>
        
    <?php } ?>
    

</div>