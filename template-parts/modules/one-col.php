<div class="module-one-column <?php if ($custom_class = get_sub_field('custom_class')){ echo $custom_class; }; ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-sm-12 content-block">
                <?php if($content = get_sub_field('content')): ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>