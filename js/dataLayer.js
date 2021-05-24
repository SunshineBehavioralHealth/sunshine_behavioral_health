function stateTableDatLayerPush() {
    console.log("State clicked:", this.innerText)
    dataLayer.push({
        'event': 'state_table_click',
        'state_clicked': this.innerText
    });
    console.log("state table data layer push sent")
}