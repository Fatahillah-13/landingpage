@props(['name', 'label' => 'Saya terampil dalam menyelesaikan target pekerjaan'])

<div class="mb-6 border rounded p-4">
    <label class="block mb-2 font-medium">{{ $label }}*</label>
    <p class="text-sm text-gray-500 mb-2">Pilih opsi dibawah ini</p>
    <div class="flex items-center justify-between">
        @for ($i = 4; $i >= 1; $i--)
            <label class="text-center w-full">
                <input type="radio" name="{{ $name }}" value="{{ $i }}" class="peer hidden" required/>
                <div
                    class="w-8 h-8 mx-auto rounded-full border-2 border-gray-300 peer-checked:border-blue-600 peer-checked:bg-blue-100">
                </div>
                <div class="text-sm mt-1 text-gray-600 peer-checked:text-blue-600">
                    @switch($i)
                        @case(4)
                            Sangat sesuai
                        @break

                        @case(3)
                            Sesuai
                        @break

                        @case(2)
                            Tidak sesuai
                        @break

                        @case(1)
                            Sangat tidak sesuai
                        @break
                    @endswitch
                </div>
            </label>
        @endfor
    </div>
</div>
