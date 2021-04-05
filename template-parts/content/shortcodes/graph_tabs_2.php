<?php get_template_part('template-parts/javascript/graphTabs'); ?>

<section class="graph_tabs_section career_section">
    <div class="graph_tabs_headline">
        <h3><?php echo get_field('graph_tabset_2_table_headline') ?></h3>
    </div>
    <div class="tab_container">
        <div class="tab">
            <button class="tablinksTabset2" onclick="careerTabs_2(event, 'graphTwoTab1')"><?php echo get_field('tabset_2_graph_2_tab_1') ?></button>
            <button class="tablinksTabset2" onclick="careerTabs_2(event, 'graphTwoTab2')"><?php echo get_field('tabset_2_graph_2_tab_2') ?></button>

            <?php if (get_field('tabset_2_graph_2_tab_3')) : ?>
                <button class="tablinksTabset2" onclick="careerTabs_2(event, 'graphTwoTab3')"><?php echo get_field('tabset_2_graph_2_tab_3') ?></button>
            <?php
            endif;
            if (get_field('tabset_2_graph_2_tab_4')) :

            ?>
                <button class="tablinksTabset2" onclick="careerTabs_2(event, 'graphTwoTab4')"><?php echo get_field('tabset_2_graph_2_tab_4') ?></button>
            <?php endif; ?>
            <div class="graph_tabs_cta_container">
                <h4>Don't be another statistic</h4>
                <a href="tel:949-276-2886" class="invocaNumber"><span>Call Today:</span> <span>949-276-2886</span></a>
            </div>
            <a href=""></a>
        </div>

        <div id="graphTwoTab1" class="tabcontentTabset2">
            <canvas id="line-tabSet2Chart1" width="550" height="400"></canvas>
        </div>
        <div id="graphTwoTab2" class="tabcontentTabset2">
            <canvas id="line-tabSet2Chart2" width="550" height="450"></canvas>
        </div>

        <div id="graphTwoTab3" class="tabcontentTabset2">
            <canvas id="line-tabSet2Chart3" width="550" height="450"></canvas>
        </div>

        <div id="graphTwoTab4" class="tabcontentTabset2">
            <canvas id="line-tabSet2Chart4" width="550" height="450"></canvas>
        </div>
    </div>
</section>



<?php get_template_part('template-parts/content/graph_data/tab_set_2/graph_1'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_2/graph_2'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_2graph_3'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_2/graph_4'); ?>