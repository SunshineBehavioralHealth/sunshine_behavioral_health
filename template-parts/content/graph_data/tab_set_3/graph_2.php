<?php

$chartTwoType = get_field('tabset_3_chart 2_type');


if ($chartTwoType == 'Bar') :
?>

    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-tabSet3Chart2"), {
                type: 'bar',
                data: {
                    labels: [<?php echo get_field('tabset_3_chart_2_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_3_chart_2_data') ?>],
                            label: "<?php echo get_field('tabset_3_chart_2_dataset_label') ?>",
                            borderColor: "#DC5356",
                            backgroundColor: ["#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd"],
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_3_chart_2_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_3_chart_2_dataset_label_secondset') ?>",
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
                        text: '<?php echo get_field('tabset_3_chart_2_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_3_chart_2_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_3_chart_2_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_3_chart_2_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_3_chart_2_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_3_chart_2_ticks') ?>];
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
            new Chart(document.getElementById("line-tabSet3Chart2"), {
                type: 'pie',
                data: {
                    labels: [<?php echo get_field('tabset_3_chart_2_xaxis_labels') ?>],
                    datasets: [{
                        data: [<?php echo get_field('tabset_3_chart_2_data') ?>],
                        label: "<?php echo get_field('tabset_3_chart_2_dataset_label') ?>",
                        borderColor: "#DC5356",
                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                        fill: false
                    }]
                },
                options: {
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('tabset_3_chart_2_title') ?>'
                    },
                }
            });
        });
    </script>

<?php elseif ($chartTwoType == 'Horizontal Bar') : ?>

    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-tabSet3Chart2"), {
                type: 'horizontalBar',
                data: {
                    labels: [<?php echo get_field('tabset_3_chart_2_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_3_chart_2_data') ?>],
                            label: "<?php echo get_field('tabset_3_chart_2_dataset_label') ?>",
                            borderColor: "#DC5356",
                            backgroundColor: ["#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd"],
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_3_chart_2_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_3_chart_2_dataset_label_secondset') ?>",
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
                        text: '<?php echo get_field('tabset_3_chart_2_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_3_chart_2_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_3_chart_2_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_3_chart_2_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_3_chart_2_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_3_chart_2_ticks') ?>];
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
            new Chart(document.getElementById("line-tabSet3Chart2"), {
                type: 'line',
                data: {
                    labels: [<?php echo get_field('tabset_3_chart_2_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_3_chart_2_data') ?>],
                            label: "<?php echo get_field('tabset_3_chart_2_dataset_label') ?>",
                            borderColor: "#DC5356",
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_3_chart_2_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_3_chart_2_dataset_label_secondset') ?>",
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
                        text: '<?php echo get_field('tabset_3_chart_2_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_3_chart_2_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_3_chart_2_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_3_chart_2_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_3_chart_2_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_3_chart_2_ticks') ?>];
                            }
                        }]
                    }
                }
            });
        });
    </script>


<?php endif; ?>