<!-- Sidebar template -->
<div id="sidebar-contact" class="sidebar">
  <article class="wrapper">

    <form action="<?php wp_mail("dvjestica@gmail.com", "subject", "nachricht", "" ) ?>" method="post">
      Your name*:<br>
      <input type="text" name="name" value="">
      <br>
      Email address*:<br>
      <input type="text" name="email" value="" >
      <br><br>
      Message*:<br>
      <textarea name="message" rows="10" cols="30">
      </textarea>
      <input type="submit" value="Submit">
    </form>
<?php echo wp_mail("dvjestica@gmail.com", "subject", "nachricht", "" ); ?>
  </article>

</div>
