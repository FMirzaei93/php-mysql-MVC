<h1>Contact</h1>
<?php 
include_once SITE_PATH.'\includes\Statics.php';
?>
<form action="<?php echo SITE_URL.Statics::$send_email ?>" method="post">
    <label for="email">
        <!--for: it's the title of information that we're gonna send by $_POST, We will receive it later in controller
        	Specifies the id of the form element the label should be bound to
        -->
        
        <?php echo ( isset( $datas[ 'error' ][ 'emailempty' ] ) ) ? '<span class="alert">Aucune adresse n\'a été indiquée</span><br />' : ''; ?>
        <?php echo ( isset( $datas[ 'error' ][ 'emailformat' ] ) ) ? '<span class="alert">Le format de l\'adresse n\'est pas conforme.</span><br />' : ''; ?>
        
        
        <input type="text" name="email" id="email"  value="<?php echo ( isset( $datas['email'] ) ) ? $datas['email'] : ''; ?>" placeholder="Adresse E-mail" />
    </label>
    
    

    <label for="message">
        <?php echo ( isset( $datas[ 'error' ][ 'messageempty' ] ) ) ? '<span class="alert">Aucune message n\'a été indiqué.</span><br />' : ''; ?>
        
        <textarea name="message" id="message"  placeholder="Votre message"><?php echo ( isset( $datas['message'] ) ) ? $datas['message'] : ''; ?></textarea>
    </label>
    
    

    <button class="btn">Envoyer</button>

</form>