<h1>Articles</h1>

<form action="<?php echo SITE_URL; ?>/index.php?page=articles&action=add" method="post">

    <label for="TitleArticle">
        <?php echo ( isset( $datasApp[ 'datas' ][ 'error' ][ 'titleempty' ] ) ) ? '<span class="alert">Aucun titre n\'a été indiqué.</span><br />' : ''; ?>
        <input type="text" name="TitleArticle" id="TitleArticle"
            value="<?php echo ( isset( $datasApp[ 'datas' ]['TitleArticle'] ) ) ? $datasApp[ 'datas' ]['TitleArticle'] : ''; ?>"
            placeholder="Titre de l'article" />
    </label>

    <label for="IntroArticle">
        <?php echo ( isset( $datasApp[ 'datas' ][ 'error' ][ 'introempty' ] ) ) ? '<span class="alert">Aucune introduction n\'a été indiquée.</span><br />' : ''; ?>
        <textarea id="IntroArticle" name="IntroArticle"
            placeholder="Introduction de l'article"><?php echo ( isset( $datasApp[ 'datas' ]['IntroArticle'] ) ) ? $datasApp[ 'datas' ]['IntroArticle'] : ''; ?></textarea>
    </label>

    <label for="ContentArticle">
        <?php echo ( isset( $datasApp[ 'datas' ][ 'error' ][ 'contentempty' ] ) ) ? '<span class="alert">Aucun contenu n\'a été indiqué.</span><br />' : ''; ?>
        <textarea id="ContentArticle" name="ContentArticle"
            placeholder="Contenu principal de l'article"><?php echo ( isset( $datasApp[ 'datas' ]['ContentArticle'] ) ) ? $datasApp[ 'datas' ]['ContentArticle'] : ''; ?></textarea>
    </label>

    <button type="submit" class="btn">Envoyer</button>

</form>