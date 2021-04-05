<?php

$chartFourType = get_field('tabset_1_chart_4_type');


if ($chartFourType == 'Bar') :
?>

    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-chartFour"), {
                type: 'bar',
                data: {
                    labels: [<?php echo get_field('tabset_1_chart_4_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_1_chart_4_data') ?>],
                            label: "<?php echo get_field('tabset_1_chart_4_dataset_label') ?>",
                            borderColor: "#DC5356",
                            backgroundColor: ["#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd"],
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_1_chart_4_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_1_chart_4_dataset_label_secondset') ?>",
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
                        text: '<?php echo get_field('tabset_1_chart_4_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_1_chart_4_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_1_chart_4_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_1_chart_4_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_1_chart_4_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_1_chart_4_ticks') ?>];
                            }

                        }]
                    }
                }
            });
        });
    </script>

<?php elseif ($chartFourType == 'Pie') : ?>
    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-chartFour"), {
                type: 'pie',
                data: {
                    labels: [<?php echo get_field('tabset_1_chart_4_xaxis_labels') ?>],
                    datasets: [{
                        data: [<?php echo get_field('tabset_1_chart_4_data') ?>],
                        label: "<?php echo get_field('tabset_1_chart_4_dataset_label') ?>",
                        borderColor: "#DC5356",
                        backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                        fill: false
                    }]
                },
                options: {
                    reponsive: true,
                    title: {
                        display: true,
                        text: '<?php echo get_field('tabset_1_chart_4_title') ?>'
                    },
                }
            });
        });
    </script>

<?php elseif ($chartFourType == 'Horizontal Bar') : ?>

    <script>
        jQuery(document).ready(function($) {
            new Chart(document.getElementById("line-chartFour"), {
                type: 'horizontalBar',
                data: {
                    labels: [<?php echo get_field('tabset_1_chart_4_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_1_chart_4_data') ?>],
                            label: "<?php echo get_field('tabset_1_chart_4_dataset_label') ?>",
                            borderColor: "#DC5356",
                            backgroundColor: ["#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd", "#3e95cd"],
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_1_chart_4_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_1_chart_4_dataset_label_secondset') ?>",
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
                        text: '<?php echo get_field('tabset_1_chart_4_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_1_chart_4_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_1_chart_4_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_1_chart_4_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_1_chart_4_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_1_chart_4_ticks') ?>];
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
            new Chart(document.getElementById("line-chartFour"), {
                type: 'line',
                data: {
                    labels: [<?php echo get_field('tabset_1_chart_4_xaxis_labels') ?>],
                    datasets: [{
                            data: [<?php echo get_field('tabset_1_chart_4_data') ?>],
                            label: "<?php echo get_field('tabset_1_chart_4_dataset_label') ?>",
                            borderColor: "#DC5356",
                            fill: false
                        },
                        {
                            data: [<?php echo get_field('tabset_1_chart_4_data_secondset') ?>],
                            label: "<?php echo get_field('tabset_1_chart_4_dataset_label_secondset') ?>",
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
                        text: '<?php echo get_field('tabset_1_chart_4_title') ?>'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_1_chart_4_xaxis_label') ?>'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: '<?php echo get_field('tabset_1_chart_4_yaxis_label') ?>'
                            },
                            ticks: {
                                min: <?php echo get_field('tabset_1_chart_4_y_axis_range_min') ?>, //minimum tick
                                max: <?php echo get_field('tabset_1_chart_4_y_axis_range_max') ?>, //maximum tick
                                callback: function(value, index, values) {
                                    return Number(value.toString()); //pass tick values as a string into Number function
                                }
                            },
                            afterBuildTicks: function(chartObj) { //Build ticks labelling as per your need
                                chartObj.ticks = [<?php echo get_field('tabset_1_chart_4_ticks') ?>];
                            }
                        }]
                    }
                }
            });
        });
    </script>


<?php endif; ?>