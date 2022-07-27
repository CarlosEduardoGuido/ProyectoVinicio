<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Citas;
use Maatwebsite\Excel\Concerns\WithHeadings;


class CitasExport implements FromCollection, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Citas::all();

    }
    public function headings(): array
    {
        return [
            'Id',
            'Hora_cita',
            'cita',
            'id_usuario',
            'asunto',
            '',
            'Fecha'
        ];
    }
}
