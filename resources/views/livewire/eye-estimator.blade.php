<div class="md:grid md:grid-cols-3 md:gap-6">

    <!-- Section Title -->
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900">{{ $title }}</h3>

            <p class="mt-1 text-sm text-gray-600">
                {{ $description }}
            </p>
        </div>
    </div>

    <!-- Form -->
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6 justify-items-auto">
                    <div class="col-span-4 sm:col-span-4">
                        <strong> BR-EASE: Eye Color Estimator </strong>

                        <p class="text-sm text-gray-600 pt-6 pb-3">
                            Dez SNPs associados à pigmentação humana foram selecionados:
                        </p>

                        <table class="table-auto">
                            <thead class="bg-gray-200 text-gray-700 font-bold">
                              <tr>
                                <th class="border px-4 py-2">SNP</th>
                                <th class="border px-4 py-2">Genotype</th>
                                <th class="border px-4 py-2">Gene</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data)
                                    @if ($loop->odd)
                                        <tr class="text-center">
                                            <td class="border px-4 py-2">{{ $data['snp'] }}</td>
                                            <td class="border px-4 py-2">{{ $data['genotype'] }}</td>
                                            <td class="border px-4 py-2">{{ $data['gene'] }}</td>
                                        </tr>
                                    @else
                                        <tr class="text-center bg-gray-100">
                                            <td class="border px-4 py-2">{{ $data['snp'] }}</td>
                                            <td class="border px-4 py-2">{{ $data['genotype'] }}</td>
                                            <td class="border px-4 py-2">{{ $data['gene'] }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                    <div class="flex justify-center items-center col-span-2 sm:col-span-2">
                        <div id="myDiv" class="">
                        </div>
                    </div>

                    <script>
                        var colors = [
                            'rgb(0,49,83)',
                            'rgb(0,128,0)',
                            'rgb(139, 69, 19)'
                        ];

                        var data = [{
                            type: "pie",
                                values: [65, 20, 15],
                                labels: ["Azul", "Verde", "Marrom"],
                                textinfo: "label+percent",
                                insidetextorientation: "radial",
                                automargin: true,
                                marker: {
                                    colors: colors
                                },
                            }]

                        var layout = {
                            height: 320,
                            width: 320,
                            font: {
                                family: 'Nunito,sans-serif',
                                size: 16,
                            },
                            margin: {"t": 0, "b": 0, "l": 0, "r": 0},
                            showlegend: false
                        }

                        Plotly.newPlot('myDiv', data, layout)
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Title -->
    <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium text-gray-900">Eye Five Colors</h3>

            <p class="mt-1 text-sm text-gray-600">
                Descrição
            </p>
        </div>
    </div>

    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
            </div>
        </div>
    </div>
</div>
