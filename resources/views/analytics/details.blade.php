<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Analytics') }}
        </h2>
    </x-slot>
    {{-- dark:bg-gray-700 --}}
    <div class="py-12  ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container my-12 mx-auto px-4 md:px-12">
                <div class="flex flex-nowrap flex-row gap-5 justify-between">
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md my-5  dark:bg-gray-800 dark:border-gray-700">
                        <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                clip-rule="evenodd"></path>
                            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                        </svg>
                        @if ($history['tracked_name'] == 'Users')
                            <a
                                href="{{ route(strtolower($history['tracked_name']) . '.' . mb_substr(strtolower($history['tracked_name']), 0, -1) . '.index') }}">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    Total
                                    {{$history['tracked_name']}}: {{ $history['history'][0]['total'] }} </h5>
                            </a>
                        @else
                            <a href="{{ route(strtolower($history['tracked_name']) . '.index') }}">
                                <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                                    Total
                                    {{$history['tracked_name']}}: {{ $history['history'][0]['total'] }} </h5>
                            </a>
                        @endif

                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">The current total amount of users
                            utilising My Education Lifestyle: {{$history['tracked_name']}}</p>
                        <a href="{{ route('users.user.index') }}"
                            class="inline-flex items-center text-blue-600 hover:underline">
                            Go to {{$history['tracked_name']}}
                            <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                                </path>
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md my-5  dark:bg-gray-800 dark:border-gray-700">
                        <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                clip-rule="evenodd"></path>
                            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                        </svg>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Monthly
                                average: {{ ceil($history['history'][0]['total'] / 12) }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">The total amount of average monthly
                            Education Lifestyle {{$history['tracked_name']}}:</p>
                        <a href="#" class="inline-flex items-center text-blue-600 hover:underline">
                            Go to {{$history['tracked_name']}}
                            <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                                </path>
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md my-5  dark:bg-gray-800 dark:border-gray-700">
                        <svg class="w-10 h-10 mb-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                                clip-rule="evenodd"></path>
                            <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                        </svg>
                        <a href="{{ route('coaches.index') }}">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">This
                                months
                                {{$history['tracked_name']}}: {{ $history['concurrent'] }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">The months amount of users
                            utilising My Education Lifestyle</p>
                        <a href="{{ route('coaches.index') }}"
                            class="inline-flex items-center text-blue-600 hover:underline">
                            Go to {{$history['tracked_name']}}
                            <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                                </path>
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                                </path>
                            </svg>
                        </a>
                    </div>




                </div>
                <div class="shadow-lg bg-white w-full dark:bg-gray-800 rounded-lg overflow-hidden">
                    <div class="py-3 px-5 text-2xl font-extrabold dark:bg-gray-800 bg-gray-50">
                        <div class="w-full flex justify-between flex-row">
                            <h1 class="text-black dark:text-white">
                                {{ $history['tracked_name'] }} history for {{ $history['history'][0]['year'] }}
                            </h1>
                            <div class="w-1/4">


                                <select id="years"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    {{-- {{$history['history']}} --}}
                                    {{-- <option selected>Select a year</option> --}}
                                    @foreach ($history['history'] as $year)
                                        @if (date('Y') == $year['year'])
                                            <option selected value="{{ implode('_', $year) }}">{{ $year['year'] }}
                                            </option>
                                        @else
                                            <option value="{{ implode('_', $year) }}">{{ $year['year'] }} </option>
                                        @endif
                                    @endforeach

                                </select>
                            </div>
                            {{-- <div class="flex flex-row ">
                                <button id="prev" type="button"
                                    class="bg-gray-800 text-white rounded-l-md border-r border-gray-100 py-2 hover:bg-indigo-400 hover:text-white px-3">
                                    <div class="flex flex-row align-middle">
                                        <svg class="w-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <p class="ml-2">Prev</p>
                                    </div>
                                </button>
                                <button id="next" type="button"
                                    class="bg-gray-800 text-white rounded-r-md py-2 border-l border-gray-200 hover:bg-indigo-400 hover:text-white px-3">
                                    <div class="flex flex-row align-middle">
                                        <span class="mr-2">Next</span>
                                        <svg class="w-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>
                            </div> --}}
                        </div>

                    </div>
                    <canvas class="p-10" id="chartLine"></canvas>
                </div>

                <!-- Required chart.js -->
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <!-- Chart line -->
                <script>
                    console.log('Bearer ' + localStorage.getItem('token'))


                    let preferencel = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
                    let themePreferencel = document.cookie.split(';').filter((item) => item.trim().startsWith('color-theme='))
                    themePreferencel = themePreferencel.length ? themePreferencel[0].split('=')[1] : preferencel
                    if (themePreferencel === 'dark') {
                        Chart.defaults.color = 'white';
                        Chart.defaults.borderColor = 'rgba(250,250,250, 25%)';
                    } else {
                        Chart.defaults.color = 'black';
                        Chart.defaults.borderColor = 'rgba(0,0,0, 25%)';
                    }



                    // console.log(document.getElementById('years').value.split('_'), 'asdasdasdasd')
                    let yearArray = document.getElementById('years').value.split('_')

                    yearArray.splice(0, 2)
                    yearArray = yearArray.slice(0, -4)

                    console.log(yearArray, 'yearArray')
                    const data = {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                            "October", "November", "December"
                        ],
                        datasets: [{
                            label: " {{ $history['tracked_name'] }} ",
                            backgroundColor: "hsl(252, 82.9%, 67.8%)",
                            borderColor: "hsl(252, 82.9%, 67.8%)",
                            data: yearArray
                        }, ],
                    };

                    const configLineChart = {
                        type: "line",
                        data,
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                },

                            },
                            // maintainAspectRatio: false,
                            aspectRatio: 1 | 3,
                            color: 'red',
                            display: true,
                            responsive: true,
                            plugins: {
                                legend: {
                                    position: "bottom",
                                },
                                title: {
                                    display: true,
                                    text: "{{ $history['tracked_name'] }} in {{ $history['history'][0]['year'] }}",
                                },
                            },
                        }
                    };
                    let currentIndexVar = 0;



                    const chartLine = new Chart(
                        document.getElementById("chartLine"),
                        configLineChart
                    );

                    let yearsSelect = document.getElementById('years')
                    yearsSelect.addEventListener('change', function() {
                        let year = document.getElementById('years').value.split('_')
                        console.log(year, 'year')
                        year.splice(0, 2)
                        year = year.slice(0, -4)
                        data.datasets[0].data = year
                        chartLine.update()
                    })

                    // let test = getData(0)
                </script>
            </div>

        </div>
    </div>
</x-app-layout>
