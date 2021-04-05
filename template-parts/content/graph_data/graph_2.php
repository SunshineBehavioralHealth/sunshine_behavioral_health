<?php

$chartTwoType = get_field('single_graph_chart_type_2');


if ($chartTwoType == 'Bar') :
?>

    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-chartTwo"), {
                type: 'bar',
                data: {
                    labels: [<?php echo get_field('single_graph_chart_2_xaxis_labels') ?>],
                    datasets: [{
                        data: [<?php echo get_field('single_graph_chart_2_data') ?>],
                        label: "<?php echo get_field('single_graph_chart_2_dataset_label') ?>",
                        borderColor: "#DC5356",
                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                        fill: false
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('single_graph_chart_2_title') ?>'
                    },
                    title: {
                        display: true,
                        text: '<?php echo get_field('single_graph_chart_2_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('single_graph_chart_2_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('single_graph_chart_2_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('single_graph_chart_2_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('single_graph_chart_2_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('single_graph_chart_2_ticks') ?>];
                            }

                        }]
                    }
                }
            });
        });
    </script>

<?php elseif ($chartTwoType == 'Pie') : ?>
    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-chartTwo"), {
                type: 'pie',
                data: {
                    labels: [<?php echo get_field('single_graph_chart_2_xaxis_labels') ?>],
                    datasets: [{
                        data: [<?php echo get_field('single_graph_chart_2_data') ?>],
                        label: "<?php echo get_field('single_graph_chart_2_dataset_label') ?>",
                        borderColor: "#DC5356",
                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                        fill: false
                    }]
                },
                options: {
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('single_graph_chart_2_title') ?>'
                    },
                    title: {
                        display: true,
                        text: '<?php echo get_field('single_graph_chart_2_title') ?>'
                    },
                }
            });
        });
    </script>

<?php elseif ($chartTwoType == 'Horizontal Bar') : ?>

    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-chartTwo"), {
                type: 'horizontalBar',
                data: {
                    labels: [<?php echo get_field('single_graph_chart_2_xaxis_labels') ?>],
                    datasets: [{
                        data: [<?php echo get_field('single_graph_chart_2_data') ?>],
                        label: "<?php echo get_field('single_graph_chart_2_dataset_label') ?>",
                        borderColor: "#DC5356",
                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                        fill: false
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('single_graph_chart_2_title') ?>'
                    },
                    title: {
                        display: true,
                        text: '<?php echo get_field('single_graph_chart_2_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Year'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Percentage'
                            },
                            ticks: {
                                min: <?php echo get_field('single_graph_chart_2_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('single_graph_chart_2_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('single_graph_chart_2_ticks') ?>];
                            }

                        }]
                    }
                }
            });
        });
    </script>

<?php else : ?>


    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-chartTwo"), {
                type: 'line',
                data: {
                    labels: [<?php echo get_field('single_graph_chart_2_xaxis_labels') ?>],
                    datasets: [{
                        data: [<?php echo get_field('single_graph_chart_2_data') ?>],
                        label: "<?php echo get_field('single_graph_chart_2_dataset_label') ?>",
                        borderColor: "#DC5356",
                        fill: false
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('single_graph_chart_2_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Year'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Percentage'
                            },
                            ticks: {
                                min: <?php echo get_field('single_graph_chart_2_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('single_graph_chart_2_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('single_graph_chart_2_ticks') ?>];
                            }
                        }]
                    }
                }
            });
        });
    </script>


<?php endif; ?>