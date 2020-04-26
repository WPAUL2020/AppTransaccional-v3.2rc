<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

class exportData implements FromCollection, WithHeadings, WithStrictNullComparison,WithDrawings, WithCustomStartCell
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

    public function drawings()
    {
        $drawing = new Drawing();
        $drawing->setName('InstaHunters');
        $drawing->setDescription('by Semillero Ing. Sistemas, Universitaria de Colombia');
        $drawing->setPath(public_path('/Imagenes/logo.png'));
        $drawing->setHeight(90);
        $drawing->setCoordinates('D3');

        return $drawing;
    }

    public function startCell(): string
    {
        return 'A9';
    }

}
