<?php

$chartOneType = get_field('tabset_2_chart_1_type');

if ($chartOneType == 'Bar') :
?>

    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-tabSet2Chart1"), {
                type: 'bar',
                data: {
                    labels: [<?php echo get_field('tabset_2_chart_1_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_2_chart_1_data') ?>],
                            label: "<?php echo get_field('tabset_2_chart_1_dataset_label') ?>",
                            borderColor: "#DC5356",
                            backgroundColor: ["#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd"],
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_2_chart_1_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_2_chart_1_dataset_label_secondset') ?>",
                            borderColor: "#3cba9f",
                            backgroundColor: ["#3cba9f", "#3cba9f", "#3cba9f", "#3cba9f", "#3cba9f"],
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {
                        display: true
                    },
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('tabset_2_chart_1_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_2_chart_1_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_2_chart_1_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_2_chart_1_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_2_chart_1_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_2_chart_1_ticks') ?>];
                            }

                        }]
                    }
                }
            });
        });
    </script>

<?php elseif ($chartOneType == 'Pie') : ?>
    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-tabSet2Chart1"), {
                type: 'pie',
                data: {
                    labels: [<?php echo get_field('tabset_2_chart_1_xaxis_labels') ?>],
                    datasets: [{
                        data: [<?php echo get_field('tabset_2_chart_1_data') ?>],
                        label: "<?php echo get_field('tabset_2_chart_1_dataset_label') ?>",
                        borderColor: "#DC5356",
                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                        fill: false
                    }]
                },
                options: {
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('tabset_2_chart_1_title') ?>'
                    },
                }
            });
        });
    </script>

<?php elseif ($chartOneType == 'Horizontal Bar') : ?>

    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-tabSet2Chart1"), {
                type: 'horizontalBar',
                data: {
                    labels: [<?php echo get_field('tabset_2_chart_1_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_2_chart_1_data') ?>],
                            label: "<?php echo get_field('tabset_2_chart_1_dataset_label') ?>",
                            borderColor: "#DC5356",
                            backgroundColor: ["#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd"],
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_2_chart_1_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_2_chart_1_dataset_label_secondset') ?>",
                            borderColor: "#3cba9f",
                            backgroundColor: ["#3cba9f", "#3cba9f", "#3cba9f", "#3cba9f", "#3cba9f"],
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {
                        display: true
                    },
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('tabset_2_chart_1_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_2_chart_1_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_2_chart_1_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_2_chart_1_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_2_chart_1_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_2_chart_1_ticks') ?>];
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
            new Chart(document.getElementById("line-tabSet2Chart1"), {
                type: 'line',
                data: {
                    labels: [<?php echo get_field('tabset_2_chart_1_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_2_chart_1_data') ?>],
                            label: "<?php echo get_field('tabset_2_chart_1_dataset_label') ?>",
                            borderColor: "#DC5356",
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_2_chart_1_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_2_chart_1_dataset_label_secondset') ?>",
                            borderColor: "#3cba9f",
                            backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                            fill: false
                        }
                    ]
                },
                options: {
                    legend: {
                        display: true
                    },
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('tabset_2_chart_1_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_2_chart_1_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_2_chart_1_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_2_chart_1_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_2_chart_1_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_2_chart_1_ticks') ?>];
                            }
                        }]
                    }
                }
            });
        });
    </script>


<?php endif; ?>