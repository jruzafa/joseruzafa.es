<header>
  <div id="logo"><a href="<?php echo base_url(); ?>" title="Go to home">Jose Ruzafa Sierra</a></div>
  <nav>
      <ul>
        <li>
            <a href="<?php echo site_url(); ?>" title="home" <?php echo is_current(site_url()); ?>>
                Home
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('works'); ?>" title="works" <?=is_current(site_url('works'))?>>
                Works
            </a>
        </li>
        <li>
            <a href="<?php echo site_url('contact'); ?>" title="contact" <?=is_current(site_url('contact'))?>>
                Contact
            </a>
        </li>
      </ul>
  </nav>
</header>
<div class="clear"></div>
<div id="paper">
