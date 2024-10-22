<x-app-layout>
    @push("styles")
        {{--        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>--}}

    @endpush

    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="header">
        <h2 class="text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div style="grid-column: span 2 / span 2;" class=" p-6 mr-0 md:mr-4 md:col-span-2 mb-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="pb-6 text-gray-900">
                        General Overview ({{$visitsCount}})
                    </div>

                    <div id="visit_bar_chart" class="apex-charts" dir="ltr"></div>
                </div>

                <div class="countries p-6 md:col-span-2 mb-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="pb-6 text-gray-900">
                        Countries
                    </div>
                    <ol class="">
                        @foreach($countriesData as $country)
                            <li class="flex justify-between mb-1">
                                <div class="flex items-center">
                                    <div class="mr-4">{{$loop->index+1}}.</div>
                                    <img src="https://cdn.ipinfo.io/static/images/countries-flags/{{$country['name']}}.svg"
                                         alt="" class="w-5 h-5 mr-2">
                                    <div>{{$country["name"]}}</div>
                                </div>
                                <div class="count flex justify-center items-center">
                                    {{$country["count"]}}
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>

            </div>

            <div class="p-6 mb-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="pb-6 text-gray-900">
                    Pages Summary
                </div>

                <div id="pages_bar_chart" class="apex-charts" dir="ltr"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3">
                <div style="grid-column: span 2 / span 2;" class="p-6 mr-0 md:mr-4 md:col-span-2 mb-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="pb-6  text-gray-900">
                        Downloads Overview ({{$downloadsCount}})
                    </div>

                    <div id="types_bar_chart" class="apex-charts" dir="ltr"></div>
                </div>

                <div class="countries p-6  md:col-span-2 mb-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="pb-6 text-gray-900">
                        Top Publications
                    </div>
                    <ol class="">
                        @foreach($publications as $publication)
                            <li class="flex justify-between mb-1">
                                <div class="flex">
                                    <div class="mr-4">{{$loop->index+1}}.</div>
                                    <div>{{$publication->title}}</div>
                                </div>
                                <div class="count flex justify-center items-center">
                                    {{$publication->downloads->count()}}
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>

            </div>

        </div>
    </div>

    @push("scripts")
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>

            var chartData = {!! json_encode($visitBarData) !!};

            var options = {
                chart: {
                    height: 350, type: "bar",
                },
                stroke: {width: [0, 2, 4], curve: "smooth"},
                plotOptions: {bar: {columnWidth: "20%", rangeBarOverlap: false,}},
                colors: ["#49a760", "#fcb92c", "#2C82ED66"],
                series: [{name: "Visits", data: chartData.data},],
                fill: {
                    opacity: [.85, .25, 1],
                    gradient: {
                        inverseColors: !1,
                        shade: "light",
                        type: "vertical",
                        opacityFrom: .85,
                        opacityTo: .55,
                        stops: [0, 100, 100, 100]
                    }
                },
                dataLabels: {enabled: !1},
                labels: chartData.labels,
                markers: {size: 0},
                // grid: {borderColor: "#f1f1f1", padding: {bottom: 10}},
                legend: {offsetY: 7}
            };
            (chart = new ApexCharts(document.querySelector("#visit_bar_chart"), options)).render();

            chartData = {!! json_encode($typesBarData) !!};
            options = {
                chart: {
                    height: 350, type: "bar",
                },
                stroke: {width: [0, 2, 4], curve: "smooth"},
                plotOptions: {bar: {columnWidth: "20%", rangeBarOverlap: false, horizontal: true}},
                colors: ["#49a760", "#f7c35f", "#2C82ED66"],
                series: [{name: "Downloads", data: chartData.data},],
                fill: {
                    opacity: [.85, .25, 1],
                    gradient: {
                        inverseColors: !1,
                        shade: "light",
                        type: "vertical",
                        opacityFrom: .85,
                        opacityTo: .55,
                        stops: [0, 100, 100, 100]
                    }
                },
                dataLabels: {enabled: !1},
                labels: chartData.labels,
                markers: {size: 0},
                // grid: {borderColor: "#f1f1f1", padding: {bottom: 10}},
                legend: {offsetY: 7}
            };
            (chart = new ApexCharts(document.querySelector("#types_bar_chart"), options)).render();


            chartData = {!! json_encode($pageAreasData) !!};
            options = {
                chart: {
                    height: 350, type: "pie",
                },
                series: chartData.data,
                labels: chartData.labels,
            };
            (chart = new ApexCharts(document.querySelector("#pages_bar_chart"), options)).render();
        </script>
            <script>
                (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
                    key: "AIzaSyBzH2vdOq1CHGviNA10tmtwW1k9N7bdY-s",
                    v: "weekly",
                    // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
                    // Add other bootstrap parameters as needed, using camel case.
                });
            </script>

    @endpush
</x-app-layout>
