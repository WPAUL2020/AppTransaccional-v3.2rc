<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class exportData implements FromCollection, WithHeadings, WithStrictNullComparison
{

    use Exportable;

    protected $Data;

    public function __construct($Data) {
        $this->Data = $Data;
    }

    public function collection()
    {
        return collect([
            $this->Data
        ]);
    }

    public function headings(): array
    {
        return [
            'Imágenes',
            'Texto posteado',
            'Fecha de publicación',
            'Cantidad total de likes',
            'Cantidad total de comentarios',
            'Id consulta',
            'Fecha de consulta'
        ];
    }

}
