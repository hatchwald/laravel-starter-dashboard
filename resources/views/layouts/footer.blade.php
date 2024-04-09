<!-- AlpineJS -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
{{-- JQuery --}}
<script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
{{-- DataTable --}}
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>

<script>
    var chartOne = document.getElementById('chartOne');
    if (chartOne != null) {

        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }

    var chartTwo = document.getElementById('chartTwo');
    if (!!chartTwo) {
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
    const datatable_rate = document.getElementById('datatable-search')
    if (!!datatable_rate) {
        const dt_rate = new DataTable('#datatable-search')
        function refreshRate() {
            const xhr = new XMLHttpRequest();
            xhr.open('POST','/dashboard/rates/refres_rate',true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.onload = function(){
                if (xhr.status >= 200 && xhr.status < 300) {
                    const data = JSON.parse(xhr.responseText);
                    dt_rate.clear().draw()
                    let number = 0;
                    for (const currencyCode in data) {
                        number++;
                        if (data.hasOwnProperty(currencyCode)) {
                            const currency = data[currencyCode];
                            dt_rate.row.add([number,currency.code, currency.value]).draw();
                        }
                    }
                    alert("data Refreshed")
                }else{
                    alert(`Request failed with status  ${xhr.status}`);
                }
            }
            xhr.send();
        }
        // const xhr = new XMLHttpRequest();

        // xhr.open('GET', '/dashboard/rates/show_rate', true);

        // xhr.onload = function() {
        //     if (xhr.status >= 200 && xhr.status < 300) {
        //         const data = JSON.parse(xhr.responseText);
        //         new DataTable('#datatable-search',{
        //             data: Object.values(data),
        //             columns:[
        //                 {
        //                     data:null,
        //                     render:function(data,type,row,meta){
        //                         return meta.row+1
        //                     }
        //                  },
        //                 {data:'code'},
        //                 {data:'value'}
        //             ],
        //             columnDefs: [
        //                 {
        //                     targets: -1,
        //                     className: 'dt-left'
        //                 }
        //             ]
        //         });


        //     } else {
        //         console.error('Request failed with status ' + xhr.status);
        //     }
        // };

        // // Send the request
        // xhr.send();

    }
</script>
