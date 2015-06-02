<div class="slider" id="frontPagecontent">

        <?php
        $firstImage = get_field('first_image');
        if( !empty($firstImage) ): ?>
        <div>
            <img src="<?php echo $firstImage['url']; ?>" itemprop="image" alt="<?php echo $firstImage['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php
        $secondImage = get_field('second_image');
        if( !empty($secondImage) ): ?>
        <div>
            <img src="<?php echo $secondImage['url']; ?>" itemprop="image" alt="<?php echo $secondImage['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php
        $thirdImage = get_field('third_image');
        if( !empty($thirdImage) ): ?>
        <div>
            <img src="<?php echo $thirdImage['url']; ?>" itemprop="image" alt="<?php echo $thirdImage['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php
        $fourthImage = get_field('fourth_image');
        if( !empty($fourthImage) ): ?>
        <div>
            <img src="<?php echo $fourthImage['url']; ?>" itemprop="image" alt="<?php echo $fourthImage['alt']; ?>" />
        </div>
        <?php endif; ?>

        <?php
        $fifthImage = get_field('fifth_image');
        if( !empty($fifthImage) ): ?>
        <div>
            <img src="<?php echo $fifthImage['url']; ?>" itemprop="image" alt="<?php echo $fifthImage['alt']; ?>" />
        </div>
        <?php endif; ?>



                            </div>

