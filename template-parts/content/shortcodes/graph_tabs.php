<?php get_template_part('template-parts/javascript/graphTabs'); ?>

<section class="graph_tabs_section career_section">
    <div class="graph_tabs_headline">
        <h3><?php echo get_field('graph_tabs_table_headline') ?></h3>
    </div>
    <div class="tab_container">
        <div class="tab">
            <button class="tablinks" onclick="careerTabs(event, 'graphTab1')"><?php echo get_field('graph_tab_name_1') ?></button>
            <button class="tablinks" onclick="careerTabs(event, 'graphTab2')"><?php echo get_field('graph_tab_name_2') ?></button>
            <button class="tablinks" onclick="careerTabs(event, 'graphTab3')"><?php echo get_field('graph_tab_name_3') ?></button>
            <?php if (get_field('fourth_tab')) : ?>
                <button class="tablinks" onclick="careerTabs(event, 'graphTab4')"><?php echo get_field('graph_tab_name_4') ?></button>
            <?php endif; ?>
            <div class="graph_tabs_cta_container">
                <h4>Don't be another statistic</h4>
                <a href="tel:949-276-2886" class="invocaNumber"><span>Call Today:</span> <span>949-276-2886</span></a>
            </div>
            <a href=""></a>
        </div>

        <div id="graphTab1" class="tabcontent">
            <canvas id="line-chartOne" width="550" height="400"></canvas>
        </div>
        <div id="graphTab2" class="tabcontent">
            <canvas id="line-chartTwo" width="550" height="450"></canvas>
        </div>

        <div id="graphTab3" class="tabcontent">
            <canvas id="line-chartThree" width="550" height="450"></canvas>
        </div>

        <?php if (get_field('fourth_tab')) : ?>

            <div id="graphTab4" class="tabcontent">
                <canvas id="line-chartFour" width="550" height="450"></canvas>
            </div>

        <?php endif; ?>
    </div>
</section>



<?php get_template_part('template-parts/content/graph_data/graph_1'); ?>
<?php get_template_part('template-parts/content/graph_data/graph_2'); ?>
<?php get_template_part('template-parts/content/graph_data/graph_3'); ?>
<?php get_template_part('template-parts/content/graph_data/graph_4'); ?>