


(function ($) {
    "use strict";

    $(document).ready(function () {

        /* ==================================================
		    # Navbar
		===============================================*/
        $('button.toggle_nav').on('click', function () {
            $('aside.sidebar').toggleClass('extend');
            console.log("here");
        });


    }); // end document ready function


})(jQuery); // End jQuery

//
// options = {
//     chart: {
//         height: 350, type: "line", zoom: {
//             enabled: true,
//             type: 'x',
//             autoScaleYaxis: false,
//             zoomedArea: {
//                 fill: {
//                     color: '#90CAF9',
//                     opacity: 0.4
//                 },
//                 stroke: {
//                     color: '#0D47A1',
//                     opacity: 0.4,
//                     width: 1
//                 }
//             }
//         },
//     },
//     stroke: {width: [0, 2, 4], curve: "smooth"},
//     plotOptions: {bar: {columnWidth: "50%"}},
//     colors: ["#1cbb8c", "#fcb92c", "#0f9cf3"],
//     series: [{name: "Attendance", type: "column", data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30]},
//         //     {
//         //     name: "Team B",
//         //     type: "area",
//         //     data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43]
//         // }, {name: "Team C", type: "line", data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39]}
//     ],
//     fill: {
//         opacity: [.85, .25, 1],
//         gradient: {
//             inverseColors: !1,
//             shade: "light",
//             type: "vertical",
//             opacityFrom: .85,
//             opacityTo: .55,
//             stops: [0, 100, 100, 100]
//         }
//     },
//     dataLabels: {enabled: !1},
//     labels: ["01/21/2003", "02/11/2003", "03/06/2003", "04/01/2003", "05/01/2003", "06/01/2003", "07/01/2003", "08/01/2003", "09/01/2003", "10/01/2003", "11/01/2003"],
//     markers: {size: 0},
//     xaxis: {type: "datetime"},
//     yaxis: {title: {text: "Members"}},
//     tooltip: {
//         shared: !0, intersect: !1, y: {
//             formatter: function (e) {
//                 return void 0 !== e ? e.toFixed(0) + " member(s)" : e
//             }
//         }
//     },
//     grid: {borderColor: "#f1f1f1", padding: {bottom: 10}},
//     legend: {offsetY: 7}
// };
//
// (chart = new ApexCharts(document.querySelector("#visit_bar_chart"), options)).render();

let map;

async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");

    map = new Map(document.getElementById("map"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8,
    });
}

initMap();
