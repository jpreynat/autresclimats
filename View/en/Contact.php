<?php $page_title = 'Contact us'; ?>

<?php ob_start(); ?>

<header>
</header>

<article>
<div class="row contact-page">
<div class="col-sm-12">
<h3 class="page-header">CONTACT US</h3>

<p>
    You want to join Other Climates?
</p>

<p>
    You already are a member of Other Climates, an adherent or a journalist and 
    you want more information about the association and its network?
</p>

<p>
    <strong>Don’t hesitate and contact us</strong> at the following email address: 
    <a href="mailto:autresclimats@gmail.com" target="_top">autresclimats@gmail.com</a><br> 
    Please precise « Section 1 : Action » or « Section 2 : Research » in your email title.
<p>

<p>
    Our coordinators will answer you as soon as possible.
</p>

</div>
</div>
</article>

<?php $contents = ob_get_clean(); ?>

<?php $javascript = ''; ?>

<?php require 'template.php'; ?>