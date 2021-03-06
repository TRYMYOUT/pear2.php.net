<?php

// Set the page title
$parent->context->page_title = $context->name . ' - Categories - '
    . $frontend->title;

?>

        <div id="category-packages" class="pearbox">
            <div class="pearbox-header">
                <h2>
                    <a href="<?php echo $frontend->getURL(); ?>categories/">Packages</a>
                    ›
                    <?php echo $context->name; ?>
                </h2>
            </div>
            <div class="pearbox-content clearfix">
                <?php echo $savant->render($context, 'PackageList.tpl.php'); ?>
            </div>
        </div>

<?php echo $savant->render(null, 'OtherChannelsNote.tpl.php'); ?>
