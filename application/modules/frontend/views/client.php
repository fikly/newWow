<?php
$caption = "";
$title = "";
foreach ($getClient as $gc) {
    $caption = $gc['caption'];
    $title = $gc['client'];
}
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $title ?></h3>
    </div>
    <div class="panel-body">


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <?php
                $no = 1;
                foreach ($contentClient as $cc) {
                    ?>
                    <?php if ($no == 1) { ?>
                        <div class="item active">
                        <?php } else { ?>
                            <div class="item">
                            <?php } ?>
                            <?php if ($cc['video_content'] == "") { ?>
                                <img src="<?php echo IMAGES_DIR; ?>client/content/risize/<?php echo $cc['img_content'] ?>" class="img-responsive" style="width: 100%;height: auto;margin: 0px !important;"/>
                            <?php } else { ?>
                                <iframe style="left:0px;" class="video-client" src="<?php echo $cc['video_content'] ?>" frameborder="0" allowfullscreen></iframe>
                            <?php } ?>
                        </div>
                        <?php
                        $no++;
                    }
                    ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" style="margin: 0px" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" style="margin: 0px" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="panel-footer">
            <?php echo $caption ?>
        </div>
    </div>