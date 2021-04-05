<?php get_template_part('template-parts/javascript/graphTabs'); ?>

<section class="graph_tabs_section career_section">
    <div class="graph_tabs_headline">
        <h3><?php echo get_field('graph_tabset_3_table_headline') ?></h3>
    </div>
    <div class="tab_container">
        <div class="tab">
            <button class="tablinksTabset3" onclick="careerTabs_3(event, 'graphThreeTab1')"><?php echo get_field('tabset_3_tab_1_name') ?></button>
            <button class="tablinksTabset3" onclick="careerTabs_3(event, 'graphThreeTab2')"><?php echo get_field('tabset_3_tab_2_name') ?></button>
            <button class="tablinksTabset3" onclick="careerTabs_3(event, 'graphThreeTab3')"><?php echo get_field('tabset_3_tab_3_name') ?></button>
            <button class="tablinksTabset3" onclick="careerTabs_3(event, 'graphThreeTab4')"><?php echo get_field('tabset_3_tab_4_name') ?></button>
            <div class="graph_tabs_cta_container">
                <h4>Don't be another statistic</h4>
                <a href="tel:949-276-2886" class="invocaNumber"><span>Call Today:</span> <span>949-276-2886</span></a>
            </div>
            <a href=""></a>
        </div>

        <div id="graphThreeTab1" class="tabcontentTabset3">
            <canvas id="line-tabSet3Chart1" width="550" height="400"></canvas>
        </div>
        <div id="graphThreeTab2" class="tabcontentTabset3">
            <canvas id="line-tabSet3Chart2" width="550" height="450"></canvas>
        </div>

        <div id="graphThreeTab3" class="tabcontentTabset3">
            <canvas id="line-tabSet3Chart3" width="550" height="450"></canvas>
        </div>
        <div id="graphThreeTab4" class="tabcontentTabset3">
            <canvas id="line-tabSet3Chart4" width="550" height="450"></canvas>
        </div>
    </div>
</section>



<?php get_template_part('template-parts/content/graph_data/tab_set_3/graph_1'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_3/graph_2'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_3/graph_3'); ?>
<?php get_template_part('template-parts/content/graph_data/tab_set_3/graph_4'); ?>