<form
        role="search"
        method="get"
        id="searchform"
        action="<?php echo home_url( '/' ); ?>"
        class="header__search-form"
>

    <input
        type="text"
        value="<?php echo get_search_query() ?>"
        name="s"
        id="s"
        placeholder="<?= _e( 'Entrez votre recherche' ) ?>"
    />

</form>
