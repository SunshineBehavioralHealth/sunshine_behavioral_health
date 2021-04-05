<?php get_template_part('template-parts/javascript/graphTabs'); ?>

<section class="graph_tabs_section career_section">
    <div class="graph_tabs_headline">
        <h3><?php echo get_field('graph_tabset_1_table_headline') ?></h3>
    </div>
    <div class="tab_container">
        <div class="tab">
            <button class="tablinksTabset1" onclick="careerTabs_1(event, 'graphOneTab1')"><?php echo get_field('tabset_1_tab_1_name') ?></button>
            <button class="tablinksTabset1" onclick="careerTabs_1(event, 'graphOneTab2')"><?php echo get_field('tabset_1_tab_2_name') ?></button>
            <?php if (get_field('tabset_1_tab_3_name')) : ?>
                <button class="tablinksTabset1" onclick="careerTabs_1(event, 'graphOneTab3')"><?php echo get_field('tabset_1_tab_3_name') ?></button>
            <?php endif;

            if (get_field('tabset_1_tab_4_name')) : ?>
                <button class="tablinksTabset1" onclick="careerTabs_1(event, 'graphOneTab4')"><?php echo get_field('tabset_1_tab_4_name') ?></button>
            <?php endif;  ?>
            <div class="graph_tabs_cta_container">
                <h4>Don't be another statistic</h4>
                <a href="tel:949-276-2886" class="invocaNumber infographicCtaPhone" onclick="dataLayer.push({'event': 'phone_click', 'shortcode_type' : 'infographicCtaPhone'});"><span>Call Today:</span> <span>949-276-2886</span></a>
            </div>
            <a href=""></a>
        </div>

        <div id="graphOneTab1" class="tabcontentTabset1">
            <canvas id="line-chartOne" width="550" height="400"></canvas>
        </div>
        <div id="graphOneTab2" class="tabcontentTabset1">
            <canvas id="line-chartTwo" width="550" height="450"></canvas>
        </div>

        <div id="graphOneTab3" class="tabcontentTabset1">
            <canvas id="line-chartThree" width="550" height="450"></canvas>
        </div>

        <div id="graphOneTab4" class="tabcontentTabset1">
            <canvas id="line-chartFour" width="550" height="450"></canvas>
        </div>
    </div>
</section>



<?php get_template_part('template-parts/content/graph_data/tab_set_1/graph_1'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_1/graph_2'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_1/graph_3'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_1/graph_4'); ?>