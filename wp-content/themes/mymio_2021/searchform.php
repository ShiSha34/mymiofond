<?php
/**
 * Template for displaying search forms
 *
 * @package WordPress
 * @subpackage 
 * @since 1.0
 * @version 1.0
 */

?>

<?/*<form role="search" method="get" id="searchform" class="searchform" action="/">
<div>
<label class="screen-reader-text" for="s">Search for:</label>
<input type="text" value="" name="s" id="s" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>*/?>
            <form role="search" method="get" class="form-inline my-2 my-lg-0" action="<?php echo home_url( '/' ); ?>">
              <input class="form-control mr-sm-2" type="text" name="s" id="s" placeholder="Как помочь сразу всем.." aria-label="Search" />
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>