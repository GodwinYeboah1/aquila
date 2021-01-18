<?php 
/**
 * Template Name: Contact Us
 */
?>

<?php get_header();?>
<div class="page-wrap">
  <div class="container">
    <h1><?php the_title();?></h1>
    <div class="row">
        <div class="col-md-6"><form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
              <label for="inputName" class="col-sm-2 col-form-label">FullName</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputName" placeholder="Fullname">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10 d-flex justify-content-start ">
                <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
            </div>
          </form></div>
        <div class="col-md-6"> <?php get_template_part('includes/section', 'content')?></div>
    </div>
  </div>
</div>
<?php get_footer();?>