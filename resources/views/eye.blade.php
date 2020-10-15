<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Predição Ocular') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Predição Ocular') }}
                    </h2>
                    <br/>
                    <div id="tester" style="width:700px;height:500px;"></div>

                    <script>
var data = [{
  type: "pie",
  values: [2, 3, 4, 4],
  labels: ["Wages", "Operating expenses", "Cost of sales", "Insurance"],
  textinfo: "label+percent",
  textposition: "outside",
  automargin: true
}]

var layout = {
  height: 400,
  width: 400,
  margin: {"t": 0, "b": 0, "l": 0, "r": 0},
  showlegend: false,
  paper_bgcolor: 'rgba(0,0,0,0)',
  plot_bgcolor: 'rgba(0,0,0,0)'
  }

Plotly.newPlot('tester', data, layout)
                    </script>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>


