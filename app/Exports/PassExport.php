<?php

namespace App\Exports;

use App\Models\Pass;
use Maatwebsite\Excel\Concerns\FromCollection;

class PassExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pass::all();
    }
}
