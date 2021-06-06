<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransactionExport implements FromCollection, WithHeadings

{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $transactions;
    public function __construct($transactions)  {
        $this->transactions = $transactions;
    }
    public function collection()
    {
        $transactions = $this->transactions;
        $formTransaction= [];
        foreach($transactions as $key => $item) {
            $formTransaction[] = [
                'id' => $item->id,
                'total' => number_format($item->tst_total_money, 0, ',', '.'),
                'name' => $item->tst_name,
                'phone' => $item->tst_phone,
                'email' => $item->tst_email,
                'address' => $item->tst_address,
                'status' => $item->getStatus($item->tst_status)['name'],
                'type' => $item->tst_user_id ? 'Thanh vien' : "Khach hang",
                'created_at' => $item->created_at
            ];

        }
        return collect($formTransaction);


    }

    public function headings(): array
    {
        return [
            'STT',         
            'TotalMoney',
            'Name',
            "Email",
            "Phone",
            "Address",           
            "Status",
            "Type",
            "Created",
            
        ];
    }
}
